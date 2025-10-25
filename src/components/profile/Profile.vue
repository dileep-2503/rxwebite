<template>
  <div class="container mx-auto p-6 max-w-4xl">
    <div class="bg-white shadow rounded-lg p-6">
      <div class="flex items-center justify-between">
        <div class="flex items-center space-x-4">
          <img
            class="w-16 h-16 rounded-full"
            src="@/assets/img/profile.webp"
            alt="Profile Picture"
          />
          <div>
            <h2 class="text-xl font-semibold">{{ form.fullName }}</h2>
            <p class="text-gray-500">
              • Joined {{ form.joinedDate }} at
              {{ form.joinedTime }}
            </p>
          </div>
        </div>
        <button @click="redirectToSettings" class="btn">Edit</button>
      </div>

      <div class="mt-6 bg-gray-100 p-4 rounded-lg">
        <h3 class="text-lg font-semibold">About</h3>
        <p><strong>Full Name:</strong> {{ form.fullName }}</p>
        <p><strong>Organization:</strong> {{ form.organization }}</p>
        <p><strong>Country:</strong> {{ form.country }}</p>
        <p><strong>State:</strong> {{ form.state }}</p>
        <p><strong>Zip Code:</strong> {{ form.zipCode }}</p>
      </div>

      <div class="mt-6 bg-gray-100 p-4 rounded-lg">
        <h3 class="text-lg font-semibold">Contacts</h3>
        <p>📞 <strong>Contact:</strong> {{ form.phone }}</p>
        <p>📧 <strong>Email:</strong> {{ form.email }}</p>
      </div>
    </div>
  </div>
</template>

<script setup>
import { useRouter } from "vue-router";
import axios from "axios";
const config = useRuntimeConfig(); // Nuxt 3
const API_URL = config.public.API_URL;
let token = null;
if (process.client) {
  token = localStorage.getItem("rx_square_web_token");
}

const form = ref({
  fullName: "",
  email: "",
  phone: "",
  organization: "",
  country: "",
  state: "",
  zipCode: "",
  joinedDate: "",
  joinedTime: "",
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
      form.value.phone = userData.phone || "";
      form.value.organization = userData.organization || "";
      form.value.country = userData.country || "";
      form.value.state = userData.state || "";
      form.value.zipCode = userData.zip_code || "";
      form.value.joinedDate = userData.join_date
        ? userData.join_date.split("T")[0]
        : "";
      form.value.joinedTime = userData.join_time || "";
      form.value.profileImage = userData.profileImage || profileImagePath;
    }
  } catch (error) {
    console.error("Error fetching user details:", error);
    if (error.response) {
      console.error("Response data:", error.response.data);
    }
  }
};

onMounted(() => {
  fetchUserDetails();
});

const router = useRouter();

const redirectToSettings = () => {
  router.push("/settings");
};
</script>

<style scoped>
.container {
  max-width: 1200px;
  width: 100%;
  padding: 20px;
  margin: auto;
}
.bg-white {
  background: white;
  border-radius: 10px;
  padding: 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
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
.bg-gray-100 {
  background: #f7f7f7;
  padding: 15px;
  border-radius: 8px;
}
@media (max-width: 768px) {
  .container {
    padding: 15px;
  }
}
</style>
