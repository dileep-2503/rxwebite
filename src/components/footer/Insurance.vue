<template>
  <div class="industry-page">
    <!-- Hero Section -->
    <section class="hero-section mt-24">
      <div class="hero-overlay">
        <h1>Insurance Solutions</h1>
        <p>
          Empower your insurance business with innovative digital solutions.
          Streamline processes, improve risk management, and enhance customer
          engagement.
        </p>
        <a href="#services" class="cta-button">Explore Solutions</a>
      </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="industry-content">
      <h2 class="section-title">Our Key Solutions</h2>
      <div class="content-grid">
        <div class="content-card">
          <i class="icon fas fa-shield-alt"></i>
          <h3>Risk Management</h3>
          <p>
            Mitigate risks effectively with data-driven insights and AI-powered
            solutions.
          </p>
        </div>
        <div class="content-card">
          <i class="icon fas fa-users"></i>
          <h3>Customer Engagement</h3>
          <p>
            Enhance policyholder experience with AI-driven personalized
            services.
          </p>
        </div>
        <div class="content-card">
          <i class="icon fas fa-file-invoice"></i>
          <h3>Claims Processing</h3>
          <p>
            Automate and accelerate claim handling to reduce processing time.
          </p>
        </div>
        <div class="content-card">
          <i class="icon fas fa-chart-line"></i>
          <h3>Fraud Detection</h3>
          <p>Detect and prevent fraudulent claims with advanced analytics.</p>
        </div>
      </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section">
      <h2 class="section-title">What Our Clients Say</h2>
      <div class="testimonial-card">
        <p>
          "Since integrating their insurance solutions, our claims processing
          has become 50% faster, and our customer satisfaction has improved
          dramatically."
        </p>
        <h4>- Vikram Patel, Pharmacy Owner</h4>
      </div>
    </section>

    <!-- Call-to-Action -->
    <section class="cta-section">
      <h2>Get Started with Digital Insurance Solutions</h2>
      <p>Let’s discuss how we can transform your insurance operations.</p>
      <a href="/contact" class="cta-button">Contact Us</a>
    </section>
  </div>
</template>

<script>
export default {
  head() {
    return {
      title: "Insurance Solutions - Industries We Serve",
      meta: [
        {
          hid: "description",
          name: "description",
          content:
            "Explore cutting-edge digital solutions tailored for the insurance industry.",
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

.hero-section {
  position: relative;
  background: url("assets/img/insurance.jpg") center/cover no-repeat;
  height: 300px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  border-radius: 10px;
  overflow: hidden;
}

.hero-section::before {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-color: rgba(255, 255, 255, 0.038); /* Light overlay */
  backdrop-filter: blur(5px);
  -webkit-backdrop-filter: blur(5px);
  z-index: 1;
}

.hero-overlay {
  position: relative;
  z-index: 2;
  color: #4b2d00;
  padding: 2rem;
}

.hero-overlay h1 {
  font-size: 2.5rem;
  margin-bottom: 1rem;
}

.hero-overlay p {
  font-size: 1.2rem;
  margin-bottom: 1.5rem;
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

/* Services Section */
.industry-content {
  margin: 3rem 0;
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

/* Testimonial Section */
.testimonial-section {
  background: #f8f9fa;
  padding: 3rem 2rem;
  text-align: center;
  border-radius: 8px;
}

.testimonial-card {
  background: white;
  padding: 2rem;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  max-width: 700px;
  margin: 0 auto;
}

.testimonial-card p {
  font-size: 1.2rem;
  font-style: italic;
  margin-bottom: 1rem;
}

.testimonial-card h4 {
  color: var(--accent-color);
  font-weight: bold;
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
  .hero-overlay h1 {
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
    height: 250px;
    padding: 1rem;
  }

  .hero-overlay {
    width: 90%;
    padding: 1.5rem;
  }

  .hero-overlay h1 {
    font-size: 1.8rem;
  }

  .testimonial-card {
    padding: 1.5rem;
  }

  .cta-section h2 {
    font-size: 1.5rem;
  }
}
</style>
