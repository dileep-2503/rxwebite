<template>
  <div class="industry-page" data-aos="fade-down" data-aos-delay="200">
    <!-- Header Section -->
    <header class="industry-header mt-24">
      <h1>Retail Solutions</h1>
      <p>
        We empower retailers with innovative solutions to enhance customer
        experiences and streamline operations.
      </p>
    </header>

    <!-- Content Section -->
    <section class="industry-content">
      <div class="content-grid">
        <div class="content-card">
          <div class="card-icon">🛒</div>
          <h2>E-commerce Solutions</h2>
          <p>Boost your online sales with our cutting-edge e-commerce tools.</p>
        </div>
        <div class="content-card">
          <div class="card-icon">📦</div>
          <h2>Inventory Management</h2>
          <p>Optimize your inventory with real-time tracking and analytics.</p>
        </div>
        <div class="content-card">
          <div class="card-icon">📊</div>
          <h2>Customer Insights</h2>
          <p>Understand your customers better with advanced data analytics.</p>
        </div>
        <div class="content-card">
          <div class="card-icon">💳</div>
          <h2>Payment Solutions</h2>
          <p>Offer seamless and secure payment options to your customers.</p>
        </div>
        <div class="content-card">
          <div class="card-icon">📱</div>
          <h2>Mobile Commerce</h2>
          <p>Expand your reach with mobile-friendly shopping experiences.</p>
        </div>
        <div class="content-card">
          <div class="card-icon">🚚</div>
          <h2>Supply Chain Optimization</h2>
          <p>
            Streamline your supply chain for faster and cost-effective delivery.
          </p>
        </div>
      </div>
    </section>

    <!-- Call-to-Action Section -->
    <section class="cta-section">
      <h2>Ready to Transform Your Retail Business?</h2>
      <p>Contact us today to learn more about our solutions.</p>
      <a href="/contact" class="cta-button">Get in Touch</a>
    </section>
  </div>
</template>

<script>
export default {
  head() {
    return {
      title: "Retail Solutions - Industries We Serve",
      meta: [
        {
          hid: "description",
          name: "description",
          content: "Explore our tailored solutions for the retail industry.",
        },
      ],
    };
  },
};
</script>

<style scoped>
/* Base styles */
.industry-page {
  font-family: Arial, sans-serif;
  padding: 2rem;
  max-width: 1200px;
  margin: 0 auto;
}

.industry-header {
  text-align: center;
  padding: 3rem 2rem;
  background-color: #f4f4f4;
  border-radius: 12px;
  margin-bottom: 2rem;
}

.industry-header h1 {
  font-size: 2.75rem;
  font-weight: bold;
  color: var(--accent-color);
  margin-bottom: 1rem;
}

.industry-header p {
  font-size: 1.25rem;
  color: #666;
  max-width: 800px;
  margin: 0 auto;
}

.industry-content {
  margin-top: 2rem;
}

.content-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 2rem;
}

.content-card {
  background: var(--accent-color);
  color: var(--contrast-color);
  padding: 2rem;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  text-align: center;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.content-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
}

.card-icon {
  font-size: 2.5rem;
  margin-bottom: 1rem;
}

.content-card h2 {
  font-size: 1.5rem;
  margin-bottom: 1rem;
  color: var(--contrast-color);
}

.content-card p {
  font-size: 1rem;
  color: var(--contrast-color);
  line-height: 1.6;
}

.cta-section {
  text-align: center;
  margin-top: 3rem;
  padding: 3rem 2rem;
  background-color: var(--accent-color);
  color: white;
  border-radius: 12px;
}

.cta-section h2 {
  font-size: 2.25rem;
  margin-bottom: 1rem;
}

.cta-section p {
  font-size: 1.25rem;
  margin-bottom: 2rem;
}

.cta-button {
  display: inline-block;
  padding: 0.75rem 2rem;
  background: white;
  color: var(--accent-color);
  border-radius: 6px;
  text-decoration: none;
  font-weight: bold;
  transition: background 0.3s ease, color 0.3s ease;
}

.cta-button:hover {
  background: #f1f1f1;
  color: var(--accent-color);
}

/* Responsive styles */
@media (max-width: 768px) {
  .industry-header h1 {
    font-size: 2.25rem;
  }

  .industry-header p {
    font-size: 1.1rem;
  }

  .content-grid {
    grid-template-columns: 1fr;
  }

  .cta-section h2 {
    font-size: 2rem;
  }

  .cta-section p {
    font-size: 1.1rem;
  }
}

@media (max-width: 480px) {
  .industry-page {
    padding: 1rem;
  }

  .industry-header h1 {
    font-size: 2rem;
  }

  .industry-header p {
    font-size: 1rem;
  }

  .cta-section h2 {
    font-size: 1.75rem;
  }

  .cta-section p {
    font-size: 1rem;
  }
}
</style>
