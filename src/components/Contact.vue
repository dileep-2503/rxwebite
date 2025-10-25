<template>
  <section id="contact" class="contact section light-background">
    <div class="container section-title mt-8" data-aos="fade-up">
      <h2>Contact Us</h2>
      <p>
        We’d love to hear from you! Reach out to us for any inquiries,
        collaborations, or support.
      </p>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row g-4 g-lg-5">
        <div class="col-lg-5">
          <div class="info-box" data-aos="fade-up" data-aos-delay="200">
            <h3>Contact Info</h3>
            <p>
              Let’s connect and explore how RX Square can help your business
              grow.
            </p>
            <div class="info-item" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-box">
                <i class="bi bi-geo-alt"></i>
              </div>
              <div class="content">
                <h4>Our Location</h4>
                <p>
                  2nd Floor, 37, Pycrofts Rd, Narayana Krishnaraja Puram,
                  Triplicane,
                </p>
                <p>Chennai, Tamil Nadu 600005</p>
              </div>
            </div>
            <div class="info-item" data-aos="fade-up" data-aos-delay="400">
              <div class="icon-box">
                <i class="bi bi-telephone"></i>
              </div>
              <div class="content">
                <h4>Phone Number</h4>
                <p>+91 94458 44624</p>
                <p>+91 63853 33384</p>
              </div>
            </div>
            <div class="info-item" data-aos="fade-up" data-aos-delay="500">
              <div class="icon-box">
                <i class="bi bi-envelope"></i>
              </div>
              <div class="content">
                <h4>Email Address</h4>
                <p>info@rxsquare.in</p>
                <p>contact@rxsquare.in</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
            <h3>Get In Touch</h3>
            <p>
              Have any questions or need assistance? Fill out the form, and our
              team will get back to you soon.
            </p>
            <form
              @submit.prevent="submitForm"
              class="php-email-form"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="row gy-4">
                <div class="col-md-6">
                  <input
                    v-model="form.name"
                    type="text"
                    name="name"
                    class="form-control"
                    placeholder="Your Name"
                    required
                  />
                </div>
                <div class="col-md-6">
                  <input
                    v-model="form.email"
                    type="email"
                    class="form-control"
                    name="email"
                    placeholder="Your Email"
                    required
                  />
                </div>
                <div class="col-12">
                  <input
                    v-model="form.subject"
                    type="text"
                    class="form-control"
                    name="subject"
                    placeholder="Subject"
                    required
                  />
                </div>
                <div class="col-12">
                  <textarea
                    v-model="form.message"
                    class="form-control"
                    name="message"
                    rows="6"
                    placeholder="Message"
                    required
                  ></textarea>
                </div>
                <div class="col-12 text-center">
                  <div class="loading">Loading</div>
                  <div v-if="errorMessage" class="error-message">
                    {{ errorMessage }}
                  </div>
                  <div v-if="successMessage" class="sent-message">
                    {{ successMessage }}
                  </div>
                  <button type="submit" class="btn">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from "vue";

const form = ref({
  name: "",
  email: "",
  subject: "",
  message: "",
});

const successMessage = ref("");
const errorMessage = ref("");

const submitForm = async () => {
  successMessage.value = "";
  errorMessage.value = "";

  try {
    const response = await fetch("https://www.rxsquare.in/php/contact.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: new URLSearchParams({
        name: form.value.name,
        email: form.value.email,
        subject: form.value.subject,
        message: form.value.message,
      }),
    });

    const result = await response.json();

    if (response.ok) {
      successMessage.value = result.message;
      form.value = { name: "", email: "", subject: "", message: "" }; // Reset form
    } else {
      errorMessage.value = result.message;
    }
  } catch (error) {
    errorMessage.value = "Something went wrong. Please try again later.";
  }
};
</script>

<style scoped>
.contact .info-box {
  background-color: var(--accent-color);
  color: var(--contrast-color);
  padding: 3rem;
  border-radius: 1rem;
  height: 100%;
}

h2 {
  color: var(--heading-color);
}

.contact .info-box h3 {
  color: var(--contrast-color);
  font-size: 2rem;
  margin-bottom: 1rem;
}

@media (max-width: 767.98px) {
  .contact .info-box h3 {
    font-size: 1.75rem;
  }
}

.contact .info-box p {
  opacity: 0.8;
  margin-bottom: 2rem;
}

.contact .info-box a {
  color: var(--contrast-color);
}

@media (max-width: 992px) {
  .contact .info-box {
    padding: 1.5rem;
  }
}

.contact .info-item {
  display: flex;
  gap: 1.5rem;
  margin-bottom: 2rem;
}

.contact .info-item:last-child {
  margin-bottom: 0;
}

.contact .info-item .icon-box {
  width: 3.5rem;
  height: 3.5rem;
  background-color: color-mix(in srgb, var(--contrast-color), transparent 85%);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  transition: 0.3s;
}

.contact .info-item .icon-box i {
  font-size: 1.5rem;
  color: var(--contrast-color);
}

.contact .info-item:hover .icon-box {
  background-color: color-mix(in srgb, var(--contrast-color), transparent 70%);
}

.contact .info-item .content h4 {
  color: var(--contrast-color);
  font-size: 1.25rem;
  margin-bottom: 0.5rem;
  font-weight: 700;
}

.contact .info-item .content p {
  margin-bottom: 0.25rem;
  font-size: 0.95rem;
}

.contact .info-item .content p:last-child {
  margin-bottom: 0;
}

.contact .contact-form {
  background-color: var(--surface-color);
  padding: 3rem;
  border-radius: 1rem;
  height: 100%;
  box-shadow: 0 0 25px rgba(0, 0, 0, 0.05);
}

@media (max-width: 992px) {
  .contact .contact-form {
    padding: 1.5rem;
  }
}

.contact .contact-form h3 {
  font-size: 2rem;
  margin-bottom: 1rem;
}

@media (max-width: 768px) {
  .contact .contact-form h3 {
    font-size: 1.75rem;
  }
}

.contact .contact-form p {
  color: color-mix(in srgb, var(--default-color), transparent 25%);
  margin-bottom: 2rem;
}

.contact .contact-form .form-control,
.contact .contact-form .form-select {
  padding: 0.875rem 1.25rem;
  border-color: color-mix(in srgb, var(--default-color), transparent 90%);
  border-radius: 0.5rem;
  background-color: color-mix(in srgb, var(--surface-color) 90%, white 5%);
  color: var(--default-color);
}

.contact .contact-form .form-control:focus,
.contact .contact-form .form-select:focus {
  box-shadow: none;
  border-color: var(--accent-color);
}

.contact .contact-form .form-control::placeholder,
.contact .contact-form .form-select::placeholder {
  color: color-mix(in srgb, var(--default-color), transparent 50%);
}

.contact .contact-form .btn {
  background-color: var(--accent-color);
  color: var(--contrast-color);
  padding: 1rem 2rem;
  border-radius: 2rem;
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  transition: 0.3s;
}

.contact .contact-form .btn i {
  font-size: 1.25rem;
}

.contact .contact-form .btn:hover {
  background-color: color-mix(
    in srgb,
    var(--accent-color),
    var(--contrast-color) 20%
  );
}
</style>
