<template>
  <div class="modal-overlay" :class="{ active: isOpen }" @click="close">
    <div class="modal-container" @click.stop>
      <button class="close-btn" @click="close">&times;</button>
      <div class="modal-content">
        <h1 class="text-3xl font-bold text-center mb-6">Sign In</h1>
        <form @submit.prevent="handleSignIn">
          <p v-if="message" :class="messageType">{{ message }}</p>

          <div class="form-group">
            <label for="signin-email" class="form-label">Email</label>
            <input
              type="email"
              class="form-control"
              id="signin-email"
              v-model="email"
              required
              placeholder="Your Email"
            />
          </div>
          <div class="form-group">
            <label for="signin-password" class="form-label">Password</label>
            <input
              type="password"
              class="form-control"
              id="signin-password"
              v-model="password"
              required
              placeholder="Your Password"
            />
          </div>
          <button type="submit" class="btn">Sign In</button>
        </form>
        <p class="mt-4 text-center">
          Don't have an account?
          <a href="#" class="signup-link" @click.prevent="openSignUp"
            >Sign Up</a
          >
        </p>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from "vue";
import axios from "axios";
import { useAuthStore } from "@/store/auth";
const authStore = useAuthStore();

const config = useRuntimeConfig();
const API_URL = config.public.API_URL;

const props = defineProps({
  isOpen: Boolean,
});

const email = ref("");
const password = ref("");
const message = ref("");
const messageType = ref("");

const close = () => {
  authStore.closeSignInModal();
};

const openSignUp = () => {
  authStore.openSignUpModal();
};

const handleSignIn = async () => {
  message.value = "";

  if (!email.value || !password.value) {
    message.value = "Email and Password are required!";
    messageType.value = "error";
    return;
  }

  try {
    const response = await axios.post(`${API_URL}/login`, {
      email: email.value,
      password: password.value,
    });

    authStore.login(response.data.token);
    message.value = "Login successful!";
    messageType.value = "success";

    setTimeout(() => {
      close();
      window.location.reload(); // Refresh to update header state
    }, 500);
  } catch (error) {
    message.value = error.response?.data?.error || "Login failed!";
    messageType.value = "error";
    console.log(error);
  }
};
</script>

<style scoped>
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
  max-width: 400px;
  padding: 30px;
  position: relative;
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
}

.error {
  color: red;
  text-align: center;
  font-weight: bold;
}

.form-group {
  margin-bottom: 15px;
}

.form-control {
  width: 100%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
  margin-top: 5px;
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
}

.btn:hover {
  background-color: #f8b10d;
}

.signup-link {
  color: #fab415;
  text-decoration: none;
  font-weight: bold;
}

.signup-link:hover {
  text-decoration: underline;
}
</style>
