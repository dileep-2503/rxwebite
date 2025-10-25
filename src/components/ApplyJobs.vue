<template>
  <div class="job-application-page">
    <div class="container">
      <!-- Left Side: Image (hidden on small screens) -->
      <div class="image-container hide-on-small">
        <img
          src="https://images.pexels.com/photos/3182763/pexels-photo-3182763.jpeg"
          alt="Job Application"
        />
      </div>

      <!-- Right Side: Application Form -->
      <div class="form-container">
        <header class="application-header">
          <h1>Apply for a Job</h1>
          <p>Join our team and start your career journey with us!</p>
        </header>

        <section class="application-form">
          <form @submit.prevent="submitApplication">
            <!-- Full Name -->
            <div class="form-group">
              <label for="full-name">Full Name</label>
              <input
                type="text"
                id="full-name"
                v-model="form.fullName"
                placeholder="Enter your full name"
                required
              />
            </div>

            <!-- Email Address -->
            <div class="form-group">
              <label for="email">Email Address</label>
              <input
                type="email"
                id="email"
                v-model="form.email"
                placeholder="Enter your email address"
                required
              />
            </div>

            <!-- Phone Number -->
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input
                type="tel"
                id="phone"
                v-model="form.phone"
                placeholder="Enter your phone number"
                required
              />
            </div>

            <!-- Position Applied For -->
            <div class="form-group">
              <label for="position">Position Applied For</label>
              <select id="position" v-model="form.position" required>
                <option value="" disabled>Select a position</option>
                <option value="Software Developer">Software Developer</option>
                <option value="Sales & Marketing">Sales & Marketing</option>
                <option value="Project Manager">Project Manager</option>
                <option value="UI/UX Designer">UI/UX Designer</option>
              </select>
            </div>

            <!-- Upload Resume -->
            <div class="form-group">
              <label for="resume">Upload Resume (PDF only)</label>
              <input
                type="file"
                id="resume"
                accept=".pdf"
                @change="handleFileUpload"
                required
              />
            </div>

            <!-- Submit Button -->
            <button type="submit" class="submit-button">
              Submit Application
            </button>
          </form>
        </section>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        fullName: "",
        email: "",
        phone: "",
        position: "",
        resume: null,
      },
    };
  },
  methods: {
    handleFileUpload(event) {
      this.form.resume = event.target.files[0];
    },
    async submitApplication() {
      if (!this.form.resume) {
        alert("Please upload your resume.");
        return;
      }

      let formData = new FormData();
      formData.append("name", this.form.fullName);
      formData.append("email", this.form.email);
      formData.append("phone", this.form.phone);
      formData.append("job_position", this.form.position);
      formData.append("resume", this.form.resume);

      try {
        const response = await fetch(
          "https://www.rxsquare.in/php/submit_application.php",
          {
            method: "POST",
            body: formData,
          }
        );

        const result = await response.json();

        if (result.success) {
          alert("Application submitted successfully!");
          this.resetForm();
        } else {
          alert("Error: " + result.error);
        }
      } catch (error) {
        console.error("Submission error:", error);
        alert("Failed to submit the application. Try again later.");
      }
    },
    resetForm() {
      this.form = {
        fullName: "",
        email: "",
        phone: "",
        position: "",
        resume: null,
      };
      document.getElementById("resume").value = "";
    },
  },
};
</script>

<style scoped>
/* Base layout styles */
.job-application-page {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 100px 20px 40px 20px;
  background-color: #f9f9f9;
  min-height: 100vh;
}

.container {
  display: flex;
  max-width: 1000px;
  width: 100%;
  background: white;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Image Section */
.image-container {
  flex: 1;
  background: var(--accent-color, #007bff);
  display: flex;
  align-items: center;
  justify-content: center;
}

.image-container img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* Form Section */
.form-container {
  flex: 1;
  padding: 2rem;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.application-header {
  text-align: center;
  margin-bottom: 1rem;
}

.application-header h1 {
  font-size: 2rem;
  color: var(--accent-color, #007bff);
  margin-bottom: 0.5rem;
}

.application-header p {
  font-size: 1rem;
  color: #666;
}

.application-form {
  padding-top: 1rem;
}

.form-group {
  margin-bottom: 1.5rem;
}

.form-group label {
  display: block;
  font-size: 1rem;
  font-weight: bold;
  margin-bottom: 0.5rem;
  color: var(--accent-color);
}

.form-group input,
.form-group select {
  width: 100%;
  padding: 0.75rem;
  border: 1px solid #ccc;
  border-radius: 6px;
  font-size: 1rem;
  color: #555;
}

.form-group input:focus,
.form-group select:focus {
  outline: none;
  border-color: var(--accent-color);
  box-shadow: 0 0 0 2px rgb(252, 210, 58);
}

.submit-button {
  width: 100%;
  padding: 0.75rem;
  background-color: var(--accent-color);
  color: white;
  border: none;
  border-radius: 6px;
  font-size: 1rem;
  font-weight: bold;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.submit-button:hover {
  background-color: rgb(249, 204, 42);
}

/* Responsive Styles */
@media (max-width: 768px) {
  .container {
    flex-direction: column;
  }

  .image-container {
    display: none;
  }

  .form-container {
    padding: 2rem 1.5rem;
    margin-top: 1rem;
  }

  .application-header h1 {
    font-size: 1.8rem;
  }
}

@media (max-width: 480px) {
  .job-application-page {
    padding: 1rem;
  }

  .form-container {
    padding: 1rem;
    margin-top: 1.5rem;
  }

  .application-header h1 {
    font-size: 1.6rem;
  }
}

/* Utility class to hide elements on small screens */
.hide-on-small {
  display: flex;
}

@media (max-width: 768px) {
  .hide-on-small {
    display: none;
  }
}
</style>
