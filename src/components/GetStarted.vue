<template>
  <section class="container">
    <div class="content">
      <!-- Left Side: Form -->
      <div class="form-container">
        <h2>Get Started</h2>
        <p>Fill in your details, and we will get back to you.</p>

        <form @submit.prevent="submitForm" class="form">
          <div class="input-group">
            <input
              class="form-control"
              v-model="form.name"
              type="text"
              placeholder="Your Name"
              required
            />
          </div>
          <div class="input-group">
            <input
              class="form-control"
              v-model="form.email"
              type="email"
              placeholder="Your Email"
              required
            />
          </div>
          <div class="input-group">
            <input
              class="form-control"
              v-model="form.phone"
              type="text"
              placeholder="Your Phone"
              required
            />
          </div>
          <div class="input-group">
            <input
              class="form-control"
              v-model="form.company_name"
              type="text"
              placeholder="Company Name"
              required
            />
          </div>

          <div class="status-message">
            <p v-if="errorMessage" class="error">{{ errorMessage }}</p>
            <p v-if="successMessage" class="success">{{ successMessage }}</p>
          </div>

          <button type="submit" :disabled="loading">
            {{ loading ? "Submitting..." : "Submit" }}
          </button>
        </form>
      </div>
      <!-- <iframe src="https://forms.rxsquare.in/pb/?c=1352G0RC" width="100%" height="850" frameborder="0"></iframe> -->

      <!-- Right Side: Image -->
      <div class="image-container">
        <img src="assets/img/features-illustration-2.webp" alt="Get Started" />
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from "vue";
import axios from "axios";
const config = useRuntimeConfig();
const API_URL = config.public.API_URL;

const form = ref({
  name: "",
  email: "",
  phone: "",
  company_name: "",
});

const loading = ref(false);
const successMessage = ref("");
const errorMessage = ref("");

// Submit form function
const submitForm = async () => {
  loading.value = true;
  successMessage.value = "";
  errorMessage.value = "";

  try {
    await axios.post(`${API_URL}/get-started`, form.value);
    successMessage.value = "Your details have been submitted successfully!";
    form.value = { name: "", email: "", phone: "", company_name: "" }; // Clear form
  } catch (error) {
    errorMessage.value = "Failed to submit details. Please try again.";
    console.error("Error:", error);
  } finally {
    loading.value = false;
  }
};
</script>

<style scoped>
/* Container */
.container {
  max-width: 1100px;
  margin: 0 auto;
  padding: 50px 20px;
}

/* Layout */
.content {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 30px;
}

/* Left Side: Form */
.form-container {
  width: 50%;
  text-align: left;
}

.form {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.input-group input {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.status-message p {
  margin: 5px 0;
}

.success {
  color: green;
}

.error {
  color: red;
}

button {
  padding: 12px;
  background-color: var(--accent-color);
  color: white;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  transition: background 0.3s ease;
}

button:hover {
  background-color: color-mix(
    in srgb,
    var(--accent-color),
    var(--contrast-color) 20%
  );
}

button:disabled {
  background-color: gray;
}

/* Right Side: Image */
.image-container {
  width: 50%;
}

.image-container img {
  width: 100%;
  height: auto;
  border-radius: 10px;
}

/* Responsive Design */
@media (max-width: 1024px) {
  .container {
    padding: 30px;
  }
  .content {
    gap: 20px;
  }
}

@media (max-width: 768px) {
  .content {
    flex-direction: column;
  }

  .form-container,
  .image-container {
    width: 100%;
  }

  .image-container img {
    max-height: 300px;
    object-fit: cover;
  }
}

.form-control {
  padding: 0.875rem 1.25rem;
  border-color: color-mix(in srgb, var(--default-color), transparent 90%);
  border-radius: 0.5rem;
  background-color: color-mix(in srgb, var(--surface-color) 90%, white 5%);
  color: var(--default-color);
}

.form-control:focus {
  box-shadow: none;
  border-color: var(--accent-color);
}

.form-control::placeholder {
  color: color-mix(in srgb, var(--default-color), transparent 50%);
}
</style>
