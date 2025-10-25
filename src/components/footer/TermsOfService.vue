<template>
  <div class="terms-container">
    <!-- Hero Section -->
    <header class="hero-section mt-24">
      <h1>Terms of Service</h1>
      <p>
        Please review our terms carefully. By using our website, you agree to
        these terms and conditions.
      </p>
    </header>

    <!-- Terms Content -->
    <section class="terms-content">
      <div class="terms-card">
        <details>
          <summary>1. Acceptance of Terms</summary>
          <p>
            By accessing and using this website, you acknowledge that you have
            read, understood, and agreed to abide by our Terms of Service.
          </p>
        </details>

        <details>
          <summary>2. Use of the Website</summary>
          <p>
            You agree to use our website for legal purposes only and refrain
            from activities that may harm others or disrupt the website’s
            functionality.
          </p>
        </details>

        <details>
          <summary>3. Intellectual Property</summary>
          <p>
            All content, including text, images, logos, and graphics, belongs to
            our company and is protected under copyright laws. Unauthorized use
            is strictly prohibited.
          </p>
        </details>

        <details>
          <summary>4. Limitation of Liability</summary>
          <p>
            We are not responsible for any direct or indirect damages resulting
            from the use of our website, including data loss or system failure.
          </p>
        </details>

        <details>
          <summary>5. Changes to Terms</summary>
          <p>
            We may modify these terms at any time. Continued use of our website
            signifies your acceptance of the updated terms.
          </p>
        </details>
      </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section">
      <h2>Need More Information?</h2>
      <p>Contact us for any queries regarding our Terms of Service.</p>
      <a href="/contact" class="cta-button">Contact Us</a>
    </section>
  </div>
</template>

<script>
export default {
  head() {
    return {
      title: "Terms of Service",
    };
  },
};
</script>

<style scoped>
/* General Styles */
.terms-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
  font-family: Arial, sans-serif;
}

/* Hero Section */
.hero-section {
  background-color: var(--accent-color);
  color: var(--contrast-color);
  text-align: center;
  padding: 3rem 2rem;
  border-radius: 10px;
}

.hero-section h1 {
  font-size: 2.5rem;
  margin-bottom: 1rem;
}

.hero-section p {
  font-size: 1.2rem;
}

/* Terms Content */
.terms-content {
  display: flex;
  justify-content: center;
  margin: 2rem 0;
}

.terms-card {
  background: white;
  padding: 2rem;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  width: 80%;
}

/* Accordion Style */
details {
  background: #f8f9fa;
  padding: 1rem;
  margin-bottom: 1rem;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  transition: 0.3s ease;
}

details summary {
  font-weight: bold;
  font-size: 1.2rem;
  color: var(--accent-color);
  cursor: pointer;
}

details p {
  font-size: 1rem;
  padding-top: 0.5rem;
  color: #555;
}

/* Call to Action */
.cta-section {
  text-align: center;
  padding: 2rem;
  background: var(--accent-color);
  color: var(--contrast-color);
  border-radius: 10px;
  margin-top: 2rem;
}

.cta-section h2 {
  font-size: 2rem;
}

.cta-section p {
  font-size: 1.2rem;
}

.cta-button {
  padding: 0.75rem 1.5rem;
  background: var(--contrast-color);
  color: var(--accent-color);
  text-decoration: none;
  border-radius: 5px;
  font-size: 1rem;
  font-weight: bold;
  transition: background 0.3s ease;
}

.cta-button:hover {
  background: #f1f1f1;
}

/* Responsive Styles */
@media (max-width: 768px) {
  .hero-section h1 {
    font-size: 2rem;
  }

  .terms-card {
    width: 90%;
  }

  .cta-section h2 {
    font-size: 1.8rem;
  }
}

@media (max-width: 480px) {
  .hero-section {
    padding: 2rem 1rem;
  }

  .hero-section h1 {
    font-size: 1.8rem;
  }

  .terms-card {
    width: 100%;
    padding: 1.5rem;
  }

  details summary {
    font-size: 1rem;
  }

  .cta-section h2 {
    font-size: 1.5rem;
  }
}
</style>
