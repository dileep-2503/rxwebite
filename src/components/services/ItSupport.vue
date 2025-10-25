<template>
  <div class="service-page">
    <!-- Hero Section -->
    <header class="service-header mt-16">
      <h1>Comprehensive IT Support Services</h1>
      <p>
        Keep your business running smoothly with our expert IT support. From
        troubleshooting to network security, we ensure optimal performance.
      </p>
    </header>

    <!-- Service Overview -->
    <section class="service-overview">
      <div class="overview-card">
        <h2>99.9% Uptime</h2>
        <p>We ensure your systems stay operational with minimal downtime.</p>
      </div>
      <div class="overview-card">
        <h2>24/7 Support</h2>
        <p>
          Our dedicated team is available round the clock for any IT issues.
        </p>
      </div>
      <div class="overview-card">
        <h2>Security First</h2>
        <p>Advanced cybersecurity to protect your business from threats.</p>
      </div>
    </section>

    <!-- Service Details -->
    <section class="service-content">
      <h2 class="section-title">Our IT Support Services</h2>
      <div class="content-grid">
        <div class="content-card">
          <i class="icon fas fa-headset"></i>
          <h3>Help Desk Support</h3>
          <p>Get real-time assistance from our certified IT specialists.</p>
        </div>
        <div class="content-card">
          <i class="icon fas fa-network-wired"></i>
          <h3>Network Management</h3>
          <p>Optimize and secure your network for uninterrupted performance.</p>
        </div>
        <div class="content-card">
          <i class="icon fas fa-shield-alt"></i>
          <h3>Cybersecurity Solutions</h3>
          <p>Implement advanced security measures to prevent cyber threats.</p>
        </div>
        <div class="content-card">
          <i class="icon fas fa-database"></i>
          <h3>Data Backup & Recovery</h3>
          <p>Protect your critical data with reliable backup solutions.</p>
        </div>
        <div class="content-card">
          <i class="icon fas fa-cloud"></i>
          <h3>Cloud Services</h3>
          <p>Seamlessly migrate to the cloud and scale your business.</p>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
      <h2 class="section-title">Frequently Asked Questions</h2>
      <details>
        <summary>What IT issues do you cover?</summary>
        <p>
          We handle hardware issues, software troubleshooting, security, network
          optimization, and more.
        </p>
      </details>
      <details>
        <summary>Is 24/7 support available?</summary>
        <p>Yes, our team is available round the clock to assist you.</p>
      </details>
      <details>
        <summary>Do you provide on-site support?</summary>
        <p>
          We offer both remote and on-site support, depending on your needs.
        </p>
      </details>
    </section>

    <!-- Call-to-Action -->
    <section class="cta-section">
      <h2>Boost Your IT Efficiency Today</h2>
      <p>
        Contact us for reliable, cutting-edge IT support tailored to your needs.
      </p>
      <a href="/contact" class="cta-button">Get in Touch</a>
    </section>
  </div>
</template>

<script>
export default {
  head() {
    return {
      title: "IT Support - Services",
      meta: [
        {
          hid: "description",
          name: "description",
          content:
            "Discover our reliable IT support services. From network security to 24/7 assistance, we keep your business running smoothly.",
        },
      ],
    };
  },
};
</script>

<style scoped>
/* General Styles */
.service-page {
  padding: 2rem;
  max-width: 1200px;
  margin: 0 auto;
}

/* Header */
.service-header {
  text-align: center;
  margin-bottom: 2.5rem;
}

.service-header h1 {
  font-size: 2.5rem;
  margin-bottom: 1rem;
}
.service-page h1,
h2 {
  color: var(--heading-color);
}

.service-header p {
  font-size: 1.2rem;
  color: #666;
}

/* Service Overview */
.service-overview {
  display: flex;
  justify-content: space-around;
  text-align: center;
  gap: 1.5rem;
  margin-bottom: 3rem;
}

.overview-card {
  background-color: white;
  padding: 1.5rem;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  width: 30%;
}

.overview-card h2 {
  font-size: 1.5rem;
  color: var(--accent-color);
}

.overview-card p {
  font-size: 1rem;
  color: #555;
}

/* Service Content */
.service-content {
  margin-bottom: 3rem;
}

.section-title {
  text-align: center;
  font-size: 2rem;
  margin-bottom: 1.5rem;
}

.content-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 1.5rem;
}

.content-card {
  background-color: var(--accent-color);
  color: var(--contrast-color);
  padding: 1.5rem;
  border-radius: 10px;
  text-align: center;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.content-card:hover {
  transform: scale(1.05);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}

.content-card h3 {
  font-size: 1.5rem;
}

.icon {
  font-size: 2rem;
  margin-bottom: 1rem;
  color: var(--contrast-color);
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

.cta-button {
  padding: 0.75rem 1.5rem;
  background: white;
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
  .service-header h1 {
    font-size: 2rem;
  }

  .service-overview {
    flex-direction: column;
    align-items: center;
  }

  .overview-card {
    width: 80%;
  }

  .cta-section h2 {
    font-size: 1.8rem;
  }
}
</style>
