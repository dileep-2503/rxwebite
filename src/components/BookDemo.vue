<template>
  <div class="demo-container">
    <!-- Left Side - Promotional Image -->
    <div class="image-section">
      <img src="assets/img/1.png" alt="Promotion Image" class="promo-image" />
    </div>

    <!-- Right Side - Form Inside Box -->
    <div class="form-section">
      <h3 class="mb-4">Upgrade Your Business with Smart Billing</h3>
      <form @submit.prevent="handleSubmit">
        <div class="form-group">
          <label for="name">Full Name</label>
          <input
            type="text"
            id="name"
            class="form-control"
            required
            placeholder="Enter your name"
          />
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input
            type="email"
            id="email"
            class="form-control"
            v-model="formData.email"
            required
            placeholder="Enter your email"
          />
        </div>

        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input
            type="tel"
            id="phone"
            class="form-control"
            v-model="formData.phone"
            required
            placeholder="Enter your phone number"
          />
        </div>

        <div class="form-group">
          <label for="company">Company Name</label>
          <input
            type="text"
            id="company"
            class="form-control"
            v-model="formData.company"
            required
            placeholder="Enter your company name"
          />
        </div>

        <div class="form-group">
          <label for="date">Preferred Date</label>
          <input
            type="date"
            id="date"
            class="form-control"
            v-model="formData.date"
            required
          />
        </div>

        
        <div class="form-group checkbox-group">
          <input type="checkbox" id="terms" v-model="acceptTerms" />
          <label for="terms">
            I hereby provide my consent to receive emails, phone calls,
            messages, and other communications from RX Square to understand
            about RX Square services, offerings, promotions, and other related
            information.
          </label>
        </div>

        <button type="submit" class="btn-primary">Book A Demo</button>
      </form>

      <div v-if="successMessage" class="success-message">
        <p>{{ successMessage }}</p>
      </div>
    </div>
    <!-- <div class="form-section">
      <iframe src="https://demo.rxsquare.in/s/8-126-DNVC" width="100%" height="961" frameborder="0"></iframe>
    </div> -->
  </div>
</template>

<script setup>
import { ref } from "vue";
import axios from "axios";
const config = useRuntimeConfig(); // Nuxt 3
const API_URL = config.public.API_URL;

const formData = ref({
  name: "",
  email: "",
  phone: "",
  company: "",
  date: "",
});

const successMessage = ref("");
const acceptTerms = ref(false);

const handleSubmit = async () => {
  if (!acceptTerms.value) {
    alert("Please accept the terms and conditions before booking the demo.");
    return;
  }

  try {
    const response = await axios.post(`${API_URL}/book-demo`, formData.value);
    successMessage.value = response.data.message;

    // Reset form after success
    setTimeout(() => {
      successMessage.value = "";
      formData.value = {
        name: "",
        email: "",
        phone: "",
        company: "",
        date: "",
      };
      acceptTerms.value = false;
    }, 1000);
  } catch (error) {
    console.error("Error booking demo:", error);
    successMessage.value = "Failed to book demo. Please try again.";
  }
};
</script>

<style scoped>
/* Main container */
.demo-container {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 30px;
  /* max-width: 90vw; */
  margin: auto;
  padding: 50px;
}

/* Image section */
.image-section {
  flex: 1;
  text-align: center;
}

.promo-image {
  width: 100%;
  max-width: 600px;
  height: auto;
}

/* Form section */
.form-section {
  flex: 1;
  background: white;
  padding: 5px;
  border-radius: 15px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  text-align: center;
  /* max-width: 600px; */
}

/* Form styles */
.form-group {
  margin-bottom: 15px;
  text-align: left;
}

label {
  font-weight: bold;
  display: block;
}

input {
  padding: 8px;
}
.demo-container .form-control:focus {
  box-shadow: none;
  border-color: var(--accent-color);
}

/* Phone number input */
.phone-group {
  display: flex;
  gap: 5px;
}

.country-code {
  padding: 12px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

/* Checkbox styles */
.checkbox-group {
  display: flex;
  align-items: flex-start;
  font-size: 14px;
  margin-bottom: 15px;
  text-align: left;
}

.checkbox-group input {
  margin-top: 5px;
  margin-right: 10px;
}

/* Button */
.btn-primary {
  width: 100%;
  background-color: #fab415;
  color: white;
  padding: 12px;
  border-radius: 5px;
  border: none;
  cursor: pointer;
  font-size: 16px;
  font-weight: bold;
}

.btn-primary:hover {
  background-color: #e5a200;
}

/* Success message */
.success-message {
  margin-top: 15px;
  padding: 10px;
  background: #d4edda;
  color: #155724;
  border-radius: 5px;
  font-weight: bold;
}

/* Responsive */
@media (max-width: 768px) {
  .demo-container {
    flex-direction: column;
    text-align: center;
    padding: 5px;
  }

  .image-section {
    order: 1;
  }

  .form-section {
    order: 2;
    /* width: 100%; */
    /* max-width: 100%; */
  }
}
</style>
