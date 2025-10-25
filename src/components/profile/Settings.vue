<template>
  <div class="container mx-auto p-6 max-w-4xl">
    <div class="bg-white shadow rounded-lg p-6">
      <!-- Tabs -->
      <div class="flex border-b">
        <button
          class="tab"
          :class="{ active: activeTab === 'profile' }"
          @click="activeTab = 'profile'"
        >
          Profile
        </button>
        <button
          class="tab"
          :class="{ active: activeTab === 'security' }"
          @click="activeTab = 'security'"
        >
          Security
        </button>
      </div>

      <!-- Profile Settings -->
      <div v-if="activeTab === 'profile'" class="mt-6 profile">
        <div class="flex items-center space-x-4 mb-4">
          <div class="relative">
            <img
              class="w-16 h-16 rounded-full"
              :src="profileImage"
              alt="Profile Picture"
            />
            <input
              type="file"
              @change="uploadImage"
              class="absolute inset-0 opacity-0 w-16 h-16 cursor-pointer"
            />
          </div>
          <span class="text-gray-600">Change Profile Picture</span>
        </div>

        <div class="grid grid-cols-2 gap-4">
          <div class="form-group">
            <label>Full Name</label>
            <input
              type="text"
              v-model="form.fullName"
              placeholder="Enter First Name"
            />
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" v-model="form.email" />
          </div>
          <div class="form-group">
            <label>Organization</label>
            <input
              type="text"
              v-model="form.organization"
              placeholder="Enter Organization"
            />
          </div>
          <div class="form-group">
            <label>Country</label>
            <select
              v-model="form.country"
              @change="fetchStates"
              class="form-select"
            >
              <option value="">Select</option>
              <option
                v-for="country in countries"
                :key="country"
                :value="country"
              >
                {{ country }}
              </option>
            </select>
          </div>
          <div class="form-group">
            <label>State</label>
            <select v-model="form.state" class="form-select">
              <option value="">Select</option>
              <option v-for="state in states" :key="state" :value="state">
                {{ state }}
              </option>
            </select>
          </div>
          <div class="form-group">
            <label>Zip Code</label>
            <input
              type="text"
              v-model="form.zipCode"
              placeholder="Enter Zip Code"
            />
          </div>
        </div>
        <button class="btn btn-primary mt-6 w-full" @click="saveProfile">
          Save Changes
        </button>
      </div>

      <!-- Security / Password Reset -->
      <div v-if="activeTab === 'security'" class="mt-6 password">
        <h3 class="text-lg font-semibold mb-4">Reset Password</h3>
        <p class="text-red-500">{{ passwordError }}</p>
        <div class="form-group">
          <label>Current Password</label>
          <input type="password" v-model="passwords.currentPassword" />
        </div>

        <div class="form-group">
          <label>New Password</label>
          <input type="password" v-model="passwords.newPassword" />
          <p
            :class="{
              'text-green-500': validPassword,
              'text-red-500': !validPassword,
            }"
          >
            ✅ At least 8 characters | ✅ 1 lowercase | ✅ 1
            number/symbol/whitespace
          </p>
        </div>

        <div class="form-group">
          <label>Confirm Password</label>
          <input
            type="password"
            v-model="passwords.confirmPassword"
            :class="{
              'border-red-500': passwords.confirmPassword && !passwordsMatch,
              'border-green-500': passwordsMatch,
            }"
          />
          <p
            v-if="passwords.confirmPassword"
            :class="{
              'text-red-500': !passwordsMatch,
              'text-green-500': passwordsMatch,
            }"
          >
            {{
              passwordsMatch
                ? "✅ Passwords match"
                : "❌ Passwords do not match"
            }}
          </p>
        </div>

        <button class="btn btn-primary mt-4 w-full" @click="updatePassword">
          Update Password
        </button>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, computed, onMounted } from "vue";
import profileImagePath from "@/assets/img/profile.webp";
import axios from "axios";
const config = useRuntimeConfig(); // Nuxt 3
const API_URL = config.public.API_URL;

// Reactive Data
const activeTab = ref("profile");
const profileImage = ref(profileImagePath);
let token = null;
if (process.client) {
  token = localStorage.getItem("rx_square_web_token");
}

const form = ref({
  fullName: "John",
  email: "john.doe@example.com",
  organization: "Company",
  country: "",
  state: "",
  zipCode: "",
  profileImage: "",
});

const fetchUserDetails = async () => {
  if (!token) {
    console.error("No token found");
    return;
  }
  try {
    const response = await axios.get(`${API_URL}/user-details`, {
      headers: {
        Authorization: token,
      },
    });

    if (response.data) {
      const userData = response.data[0];

      // Update form with API response
      form.value.fullName = userData.name || "";
      form.value.email = userData.email || "";
      form.value.organization = userData.organization || "";
      form.value.country = userData.country || "";
      form.value.state = userData.state || "";
      form.value.zipCode = userData.zip_code || "";
      form.value.profileImage = userData.profileImage || profileImagePath;
    }
    fetchStates();
  } catch (error) {
    console.error("Error fetching user details:", error);
    if (error.response) {
      console.error("Response data:", error.response.data);
      console.error("Response status:", error.response.status);
      console.error("Response headers:", error.response.headers);
    }
  }
};

const uploadImage = (event) => {
  const file = event.target.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = (e) => {
      profileImage.value = e.target.result;
      form.value.profileImage = e.target.result;
    };
    reader.readAsDataURL(file);
  }
};

const saveProfile = async () => {
  try {
    const formData = new FormData();

    // Append form fields
    Object.keys(form.value).forEach((key) => {
      formData.append(key, form.value[key]);
    });

    // Append image only if a new image is selected
    if (profileImage.value && profileImage.value instanceof File) {
      formData.append("profileImage", profileImage.value);
    }

    const response = await axios.post(
      `${API_URL}/update-profile`, // Ensure correct API endpoint
      formData,
      {
        headers: {
          "Content-Type": "multipart/form-data",
          Authorization: token,
        },
      }
    );

    alert(response.data.message);
  } catch (error) {
    console.error(
      "Error updating profile:",
      error.response?.data || error.message
    );
    alert("Failed to update profile");
  }
};

const passwords = ref({
  currentPassword: "",
  newPassword: "",
  confirmPassword: "",
});

// Password Validation
const validPassword = computed(() =>
  /^(?=.*[a-z])(?=.*[\d\W\s]).{8,}$/.test(passwords.value.newPassword)
);
const passwordsMatch = computed(
  () => passwords.value.newPassword === passwords.value.confirmPassword
);

const passwordError = ref("");

const updatePassword = async () => {
  if (!passwords.value.currentPassword || !passwords.value.newPassword) {
    passwordError.value = "Please enter all required fields.";
    return;
  }

  if (!validPassword.value) {
    passwordError.value =
      "New password must be at least 8 characters long, contain at least 1 lowercase letter, and 1 number/symbol/whitespace.";
    return;
  }

  if (passwords.value.newPassword !== passwords.value.confirmPassword) {
    passwordError.value = "New passwords do not match.";
    return;
  }

  try {
    const response = await axios.post(
      `${API_URL}/update-password`,
      {
        currentPassword: passwords.value.currentPassword,
        newPassword: passwords.value.newPassword,
      },
      {
        headers: {
          Authorization: token, // Ensure the token is included
        },
      }
    );

    alert(response.data.message);
    passwordError.value = "";

    // Clear input fields after successful password update
    passwords.value.currentPassword = "";
    passwords.value.newPassword = "";
    passwords.value.confirmPassword = "";
  } catch (error) {
    console.error("Error updating password:", error);
    passwordError.value =
      error.response?.data?.message || "Error resetting password.";
  }
};
const countries = ref([]);
const states = ref([]);
const currencies = ref([]);
const languages = ref([]);

// Fetch countries
const fetchCountries = async () => {
  try {
    const response = await fetch("https://restcountries.com/v3.1/all");
    const data = await response.json();
    countries.value = data.map((c) => c.name.common).sort();
  } catch (error) {
    console.error("Error fetching countries:", error);
  }
};

// Fetch states for selected country
const fetchStates = async () => {
  if (!form.value.country) return;
  try {
    const response = await fetch(
      "https://countriesnow.space/api/v0.1/countries/states",
      {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ country: form.value.country }),
      }
    );
    const data = await response.json();
    states.value = data.data?.states.map((s) => s.name) || [];
  } catch (error) {
    console.error("Error fetching states:", error);
  }
};

// Fetch currencies
const fetchCurrencies = async () => {
  try {
    const response = await axios.get("https://open.er-api.com/v6/latest");
    currencies.value = Object.keys(response.data.rates).map((code) => ({
      code,
      name: code,
    }));
  } catch (error) {
    console.error("Error fetching currencies:", error);
  }
};

// Fetch languages
const fetchLanguages = async () => {
  try {
    const response = await fetch("https://restcountries.com/v3.1/all");
    const data = await response.json();
    const languageSet = new Set();
    data.forEach((country) => {
      if (country.languages) {
        Object.values(country.languages).forEach((lang) =>
          languageSet.add(lang)
        );
      }
    });
    languages.value = Array.from(languageSet).sort();
  } catch (error) {
    console.error("Error fetching languages:", error);
  }
};

// Fetch on mount
onMounted(() => {
  fetchUserDetails();
  fetchCountries();
  fetchCurrencies();
  fetchLanguages();
});
</script>

<style scoped>
/* Base Styles */
body {
  font-family: "Arial", sans-serif;
  background: #f4f4f9;
  margin: 0;
  padding: 0;
}

/* Container */
.container {
  max-width: 1200px;
  width: 100%;
  padding: 20px;
  margin: auto;
}

/* Card Styles */
.bg-white {
  background: white;
  border-radius: 10px;
  padding: 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Button Styles */
.btn {
  background: var(--accent-color);
  color: white;
  padding: 10px 15px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 14px;
  font-weight: bold;
  transition: 0.3s;
}
.btn:hover {
  background: #fab208;
  color: white;
}

/* Tabs */
.flex {
  display: flex;
  gap: 15px;
  border-bottom: 2px solid #ddd;
}

.tab {
  padding: 12px 20px;
  cursor: pointer;
  border-bottom: 3px solid transparent;
  color: #333;
  font-weight: 600;
  transition: 0.3s ease-in-out;
}

.tab:hover,
.tab.active {
  border-bottom: 3px solid #fab208;
  color: #fab208;
}

/* Form Grid */
.grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 20px;
}

@media (max-width: 768px) {
  .grid {
    grid-template-columns: 1fr; /* 1 column on smaller screens */
  }
}

/* Form Group */
.form-group {
  display: flex;
  flex-direction: column;
  margin-bottom: 15px;
}

.form-group label {
  font-size: 14px;
  font-weight: 600;
  margin-bottom: 5px;
  color: #444;
}

.form-group input,
.form-group select {
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 14px;
  width: 100%;
}

.form-group select[multiple] {
  height: auto;
}

/* Responsive Button */
.btn-primary {
  background: #f4b41e;
  color: white;
  padding: 12px 15px;
  border-radius: 5px;
  text-align: center;
  cursor: pointer;
  font-size: 16px;
  font-weight: bold;
  width: 100%;
  border: none;
  transition: 0.3s ease-in-out;
}

.btn:hover {
  background: #eeab00;
}

/* Password Validation Error */
.text-red-500 {
  color: #e3342f;
  font-size: 13px;
  margin-top: 5px;
}

/* Responsive Design */
@media (max-width: 1024px) {
  .container {
    padding: 15px;
  }
}

@media (max-width: 768px) {
  .tab {
    padding: 10px 12px;
    font-size: 14px;
  }
}

@media (max-width: 480px) {
  .container {
    padding: 10px;
  }

  .tab {
    font-size: 13px;
    padding: 8px 10px;
  }

  .btn {
    font-size: 14px;
    padding: 10px;
  }

  .form-group input,
  .form-group select {
    font-size: 13px;
    padding: 10px;
  }
  input:focus {
    box-shadow: none !important;
    border-color: var(--accent-color) !important;
  }
}
</style>
