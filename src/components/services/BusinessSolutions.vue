<template>
  <div class="service-page">
    <!-- Hero Section -->
    <section class="hero-section mt-24">
      <div class="hero-content">
        <h1>Billing & Invoicing Solutions</h1>
        <p>
          Elevate your financial operations with smart, automated billing
          solutions designed for efficiency and accuracy.
        </p>
        <NuxtLink class="cta-button" to="/bookDemo">Request a Demo</NuxtLink>
      </div>
    </section>

    <!-- Services Section -->
    <section class="service-content">
      <h2 class="section-title">Our Key Features</h2>
      <div class="content-grid">
        <div class="content-card">
          <i class="icon fas fa-cogs"></i>
          <h3>Custom Billing Software</h3>
          <p>
            Automate invoicing, track payments, and generate reports
            effortlessly.
          </p>
        </div>
        <div class="content-card">
          <i class="icon fas fa-file-invoice"></i>
          <h3>Invoice Management</h3>
          <p>Generate, send, and track invoices with real-time updates.</p>
        </div>
        <div class="content-card">
          <i class="icon fas fa-lock"></i>
          <h3>Secure Payment Integration</h3>
          <p>
            Enable multiple payment methods with high-end security measures.
          </p>
        </div>
        <div class="content-card">
          <i class="icon fas fa-chart-line"></i>
          <h3>Real-Time Analytics</h3>
          <p>
            Get deep insights into your financial data with advanced reporting
            tools.
          </p>
        </div>
        <div class="content-card">
          <i class="icon fas fa-sync"></i>
          <h3>Subscription Management</h3>
          <p>Handle recurring billing seamlessly for your business growth.</p>
        </div>
        <div class="content-card">
          <i class="icon fas fa-shield-alt"></i>
          <h3>Regulatory Compliance</h3>
          <p>Ensure financial security with GDPR and tax compliance support.</p>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
      <h2 class="section-title">Frequently Asked Questions</h2>
      <details>
        <summary>How does the billing automation work?</summary>
        <p>
          Our system automates invoice generation, payment tracking, and
          financial reporting to minimize errors and save time.
        </p>
      </details>
      <details>
        <summary>Can I customize my invoices?</summary>
        <p>
          Yes, our platform allows you to customize invoice templates with your
          branding and required fields.
        </p>
      </details>
      <details>
        <summary>What payment gateways do you support?</summary>
        <p>
          We integrate with multiple gateways like PayPal, Stripe, and Razorpay
          to ensure seamless transactions.
        </p>
      </details>
    </section>

    <!-- Call-to-Action -->
    <section class="cta-section">
      <h2>Get Started with Smart Billing</h2>
      <p>
        Contact us today to optimize your invoicing process and improve
        efficiency.
      </p>
      <a href="/contact" class="cta-button">Get in Touch</a>
    </section>
  </div>
</template>

<script>
export default {
  head() {
    return {
      title: "Billing & Invoicing Solutions",
      meta: [
        {
          hid: "description",
          name: "description",
          content:
            "Enhance your financial operations with our advanced billing solutions. Automate invoices, integrate secure payments, and track analytics seamlessly.",
        },
      ],
    };
  },
};
</script>

<style scoped>
/* General Styling */
.service-page {
  padding: 2rem;
  max-width: 1200px;
  margin: 0 auto;
}

/* Hero Section */
.hero-section {
  background-color: var(--accent-color);
  color: white;
  text-align: center;
  padding: 4rem 2rem;
  border-radius: 8px;
}

.hero-content h1 {
  font-size: 2.5rem;
  margin-bottom: 1rem;
}

.hero-content p {
  font-size: 1.2rem;
  margin-bottom: 1.5rem;
}

.cta-button {
  padding: 0.75rem 1.5rem;
  background: white;
  color: var(--accent-color);
  text-decoration: none;
  border-radius: 4px;
  font-size: 1rem;
  font-weight: 600;
  transition: background 0.3s ease, color 0.3s ease;
}

.cta-button:hover {
  background: #f1f1f1;
}

/* Service Highlights */
.service-content {
  margin: 1rem 0;
}

.section-title {
  text-align: center;
  font-size: 2rem;
  margin-bottom: 1.5rem;
  color: var(--heading-color);
}

.content-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 1.5rem;
}

.content-card {
  background-color: white;
  padding: 1.5rem;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  text-align: center;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  cursor: pointer;
}

.content-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}

.content-card h3 {
  font-size: 1.5rem;
  margin-bottom: 0.5rem;
  color: var(--accent-color);
}
.content-card p {
  color: var(--accent-color);
}

.icon {
  font-size: 2rem;
  color: var(--accent-color);
  margin-bottom: 1rem;
}

/* FAQ Section */
.faq-section {
  margin: 3rem 0;
  padding: 2rem;
  background-color: #f8f9fa;
  border-radius: 8px;
}

.faq-section details {
  background: white;
  padding: 1rem;
  margin-bottom: 0.75rem;
  border-radius: 5px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  cursor: pointer;
}

.faq-section summary {
  font-weight: bold;
  font-size: 1.2rem;
  color: var(--accent-color);
}

.faq-section p {
  padding-top: 0.5rem;
  font-size: 1rem;
  color: #555;
}

/* Call-to-Action */
.cta-section {
  text-align: center;
  padding: 2rem;
  background-color: var(--accent-color);
  color: white;
  border-radius: 8px;
}

.cta-section h2 {
  font-size: 2rem;
}

.cta-section p {
  font-size: 1.2rem;
}

/* Responsive Styles */
@media (max-width: 768px) {
  .hero-content h1 {
    font-size: 2rem;
  }

  .content-grid {
    grid-template-columns: 1fr;
  }

  .cta-section h2 {
    font-size: 1.8rem;
  }
}

@media (max-width: 480px) {
  .hero-section {
    padding: 3rem 1rem;
  }

  .hero-content h1 {
    font-size: 1.8rem;
  }

  .faq-section summary {
    font-size: 1.1rem;
  }
}
</style>
