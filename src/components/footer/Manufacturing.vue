<template>
  <div class="industry-page">
    <!-- Hero Section -->
    <section class="hero-section mt-24">
      <div class="hero-text">
        <h1>Smart Manufacturing Solutions</h1>
        <p>
          Transform your production lines with automation, AI-driven insights,
          and next-generation quality control systems.
        </p>
        <a href="#solutions" class="cta-button">Discover More</a>
      </div>
    </section>

    <!-- Solutions Overview -->
    <section id="solutions" class="solutions-overview">
      <h2 class="section-title">How We Optimize Your Manufacturing</h2>
      <div class="solutions-steps">
        <div class="step">
          <span class="step-number">01</span>
          <div class="step-content">
            <h3>Supply Chain Optimization</h3>
            <p>
              Real-time tracking, predictive analytics, and seamless inventory
              management.
            </p>
          </div>
        </div>
        <div class="step">
          <span class="step-number">02</span>
          <div class="step-content">
            <h3>Automation & Robotics</h3>
            <p>
              AI-driven robotic automation to reduce downtime and increase
              efficiency.
            </p>
          </div>
        </div>
        <div class="step">
          <span class="step-number">03</span>
          <div class="step-content">
            <h3>Quality Control & Inspection</h3>
            <p>
              Automated defect detection and compliance monitoring for superior
              products.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Feature Highlights -->
    <section class="features-section">
      <div class="feature-card">
        <i class="icon fas fa-tools"></i>
        <h3>AI-Powered Predictive Maintenance</h3>
        <p>Prevent costly breakdowns with advanced predictive analytics.</p>
      </div>
      <div class="feature-card">
        <i class="icon fas fa-industry"></i>
        <h3>Smart Factory Integration</h3>
        <p>
          Seamlessly connect all systems for real-time data-driven
          decision-making.
        </p>
      </div>
      <div class="feature-card">
        <i class="icon fas fa-chart-line"></i>
        <h3>Production Efficiency</h3>
        <p>
          Increase throughput and minimize waste with intelligent automation.
        </p>
      </div>
    </section>

    <!-- Call-to-Action -->
    <section class="cta-section">
      <h2>Upgrade Your Manufacturing with Us</h2>
      <p>
        Reach out to learn how our cutting-edge solutions can revolutionize your
        production.
      </p>
      <a href="/contact" class="cta-button">Get Started</a>
    </section>
  </div>
</template>

<script>
export default {
  head() {
    return {
      title: "Smart Manufacturing Solutions",
      meta: [
        {
          hid: "description",
          name: "description",
          content:
            "Boost efficiency, reduce costs, and improve product quality with our advanced manufacturing solutions.",
        },
      ],
    };
  },
};
</script>

<style scoped>
/* General Styles */
.industry-page {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
  font-family: Arial, sans-serif;
}

/* Hero Section */
.hero-section {
  background: linear-gradient(
    135deg,
    var(--accent-color),
    var(--contrast-color)
  );
  padding: 60px 20px;
  text-align: center;
  color: var(--default-color);
  border-radius: 10px;
}

.hero-text h1 {
  font-size: 2.5rem;
  margin-bottom: 1rem;
  color: var(--heading-color);
}

.hero-text p {
  font-size: 1.2rem;
  margin-bottom: 1.5rem;
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

/* Solutions Overview */
.solutions-overview {
  margin: 3rem 0;
  text-align: center;
}

.section-title {
  font-size: 2rem;
  margin-bottom: 1.5rem;
  color: var(--heading-color);
}

.solutions-steps {
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
  max-width: 800px;
  margin: 0 auto;
}

.step {
  display: flex;
  align-items: center;
  gap: 1rem;
  background: #f8f9fa;
  padding: 15px;
  border-radius: 8px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
}

.step-number {
  font-size: 2rem;
  font-weight: bold;
  color: var(--accent-color);
}

.step-content {
  text-align: left;
}

.step-content h3 {
  font-size: 1.5rem;
}

/* Feature Highlights */
.features-section {
  display: flex;
  justify-content: space-between;
  margin: 3rem 0;
  text-align: center;
}

.feature-card {
  flex: 1;
  background: var(--contrast-color);
  color: var(--accent-color);
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  margin: 0 10px;
}

.feature-card .icon {
  font-size: 2.5rem;
  margin-bottom: 1rem;
}

/* Call-to-Action */
.cta-section {
  text-align: center;
  padding: 2rem;
  background: var(--accent-color);
  color: var(--contrast-color);
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
  .hero-section {
    padding: 40px 15px;
  }

  .hero-text h1 {
    font-size: 2rem;
  }

  .solutions-steps {
    width: 100%;
  }

  .features-section {
    flex-direction: column;
  }

  .feature-card {
    margin-bottom: 1.5rem;
  }

  .cta-section h2 {
    font-size: 1.8rem;
  }
}
</style>
