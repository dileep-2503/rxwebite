<template>
  <div class="modal-overlay" :class="{ active: isOpen }" @click="close">
    <div class="modal-container" @click.stop>
      <button class="close-btn" @click="close">&times;</button>
      <div class="modal-content">
        <h1 class="text-3xl font-bold text-center mb-6">Sign Up</h1>
        <form @submit.prevent="handleSignUp">
          <p v-if="message" :class="messageType">{{ message }}</p>

          <div class="form-row">
            <div class="form-group">
              <label for="country" class="form-label">Country</label>
              <input
                type="text"
                class="form-control"
                id="country"
                v-model="country"
                required
                placeholder="Enter your country"
                @input="filterCountries"
              />
              <ul v-if="filteredCountries.length" class="suggestions">
                <li
                  v-for="(item, index) in filteredCountries"
                  :key="index"
                  @click="selectCountry(item)"
                >
                  {{ item }}
                </li>
              </ul>
            </div>

            <div class="form-group">
              <label for="state" class="form-label">State</label>
              <input
                type="text"
                class="form-control"
                id="state"
                v-model="state"
                required
                placeholder="Enter your state"
                @input="filterStates"
              />
              <ul v-if="filteredStates.length" class="suggestions">
                <li
                  v-for="(item, index) in filteredStates"
                  :key="index"
                  @click="selectState(item)"
                >
                  {{ item }}
                </li>
              </ul>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="name" class="form-label">Name</label>
              <input
                type="text"
                class="form-control"
                id="name"
                v-model="name"
                required
                placeholder="Your Name"
              />
            </div>

            <div class="form-group">
              <label for="email" class="form-label">Email</label>
              <input
                type="email"
                class="form-control"
                id="email"
                v-model="email"
                required
                placeholder="Your Email"
              />
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="phone" class="form-label">Phone</label>
              <input
                type="text"
                class="form-control"
                id="phone"
                v-model="phone"
                required
                placeholder="Your Phone Number"
              />
            </div>

            <div class="form-group">
              <label for="password" class="form-label">Password</label>
              <input
                type="password"
                class="form-control"
                id="password"
                v-model="password"
                required
                placeholder="Your Password"
              />
            </div>
          </div>

          <div class="form-group">
            <label for="confirmPassword" class="form-label"
              >Confirm Password</label
            >
            <input
              type="password"
              class="form-control"
              id="confirmPassword"
              v-model="confirmPassword"
              required
              placeholder="Confirm Password"
            />
          </div>

          <button type="submit" class="btn">Sign Up</button>
        </form>
        <p class="mt-4 text-center">
          Already have an account?
          <a href="#" class="signin-link" @click.prevent="openSignIn"
            >Sign In</a
          >
        </p>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";
import { useAuthStore } from "@/store/auth";
const authStore = useAuthStore();

const config = useRuntimeConfig();
const API_URL = config.public.API_URL;

const props = defineProps({
  isOpen: Boolean,
});

const country = ref("");
const state = ref("");
const name = ref("");
const email = ref("");
const phone = ref("");
const password = ref("");
const confirmPassword = ref("");
const message = ref("");
const messageType = ref("");
const allCountries = ref([]);
const filteredCountries = ref([]);
const filteredStates = ref([]);

const close = () => {
  authStore.closeSignUpModal();
};

const openSignIn = () => {
  authStore.openSignInModal();
};

const fetchCountries = async () => {
  try {
    const response = await fetch("https://restcountries.com/v3.1/all");
    const countries = await response.json();
    allCountries.value = countries.map((c) => c.name.common).sort();
  } catch (error) {
    console.error("Error fetching countries:", error);
  }
};

const fetchStates = async () => {
  if (!country.value) return;

  try {
    const response = await fetch(
      "https://countriesnow.space/api/v0.1/countries/states",
      {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ country: country.value }),
      }
    );
    const data = await response.json();

    if (data.data && data.data.states) {
      filteredStates.value = data.data.states.map((s) => s.name);
    } else {
      filteredStates.value = [];
    }
  } catch (error) {
    console.error("Error fetching states:", error);
    filteredStates.value = [];
  }
};

const filterCountries = () => {
  filteredCountries.value = allCountries.value.filter((c) =>
    c.toLowerCase().includes(country.value.toLowerCase())
  );
};

const selectCountry = (selected) => {
  country.value = selected;
  filteredCountries.value = [];
  fetchStates();
};

const filterStates = () => {
  filteredStates.value = filteredStates.value.filter((s) =>
    s.toLowerCase().includes(state.value.toLowerCase())
  );
};

const selectState = (selected) => {
  state.value = selected;
  filteredStates.value = [];
};

const handleSignUp = async () => {
  message.value = "";

  if (
    !country.value ||
    !state.value ||
    !name.value ||
    !email.value ||
    !phone.value ||
    !password.value
  ) {
    message.value = "All fields are required!";
    messageType.value = "error";
    return;
  }

  if (password.value !== confirmPassword.value) {
    message.value = "Passwords do not match!";
    messageType.value = "error";
    return;
  }

  try {
    const response = await axios.post(`${API_URL}/signup`, {
      country: country.value,
      state: state.value,
      name: name.value,
      email: email.value,
      phone: phone.value,
      password: password.value,
    });

    message.value = response.data.message;
    messageType.value = "success";

    setTimeout(() => {
      close();
      openSignIn();
    }, 1000);
  } catch (error) {
    message.value = error.response?.data?.error || "Signup failed!";
    messageType.value = "error";
  }
};

onMounted(fetchCountries);
</script>

<style scoped>
/* Use the same base styles as SignInModal */
.modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 1000;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease;
}

.modal-overlay.active {
  opacity: 1;
  visibility: visible;
}

.modal-container {
  background: white;
  border-radius: 10px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
  width: 100%;
  max-width: 500px;
  padding: 30px;
  position: relative;
  max-height: 90vh;
  overflow-y: auto;
}

.close-btn {
  position: absolute;
  top: 15px;
  right: 15px;
  font-size: 24px;
  background: none;
  border: none;
  cursor: pointer;
  color: #666;
}

.close-btn:hover {
  color: #333;
}

.success {
  color: green;
  text-align: center;
  font-weight: bold;
  margin-bottom: 15px;
}

.error {
  color: red;
  text-align: center;
  font-weight: bold;
  margin-bottom: 15px;
}

.form-row {
  display: flex;
  gap: 15px;
  margin-bottom: 15px;
}

.form-row .form-group {
  flex: 1;
}

.form-group {
  margin-bottom: 15px;
  position: relative;
}

.form-label {
  display: block;
  margin-bottom: 5px;
  font-weight: 500;
}

.form-control {
  width: 100%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
}

.form-control:focus {
  outline: none;
  border-color: #fab415;
}

.suggestions {
  position: absolute;
  background: white;
  width: 100%;
  border: 1px solid #ddd;
  border-radius: 5px;
  max-height: 200px;
  overflow-y: auto;
  z-index: 10;
  list-style: none;
  padding: 0;
  margin-top: 5px;
}

.suggestions li {
  padding: 8px 12px;
  cursor: pointer;
}

.suggestions li:hover {
  background-color: #f5f5f5;
}

.btn {
  width: 100%;
  padding: 12px;
  background-color: #fab415;
  color: white;
  border: none;
  border-radius: 25px;
  font-weight: bold;
  cursor: pointer;
  margin-top: 10px;
  transition: background-color 0.3s;
}

.btn:hover {
  background-color: #f8b10d;
}

.signin-link {
  color: #fab415;
  text-decoration: none;
  font-weight: bold;
}

.signin-link:hover {
  text-decoration: underline;
}

@media (max-width: 576px) {
  .form-row {
    flex-direction: column;
    gap: 0;
  }

  .modal-container {
    width: 90%;
    padding: 20px;
  }
}
</style>
