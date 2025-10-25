<template>
  <div class="industry-page">
    <!-- Hero Section -->
    <header class="industry-header mt-24">
      <h1>Innovative Finance Solutions</h1>
      <p>
        Empower your financial institution with cutting-edge technology to
        optimize operations, mitigate risks, and enhance customer experience.
      </p>
    </header>

    <!-- Finance Solutions -->
    <section class="industry-content">
      <h2 class="section-title">Our Financial Solutions</h2>
      <div class="content-grid">
        <div class="content-card">
          <h3>Risk Management</h3>
          <p>
            Use AI-driven analytics to identify, assess, and mitigate financial
            risks before they impact your business.
          </p>
        </div>
        <div class="content-card">
          <h3>Digital Banking</h3>
          <p>
            Enable seamless, secure, and scalable digital banking experiences
            for your customers with mobile and online banking solutions.
          </p>
        </div>
        <div class="content-card">
          <h3>Fraud Detection</h3>
          <p>
            Leverage real-time monitoring and AI-powered fraud detection to
            safeguard your financial transactions.
          </p>
        </div>
        <div class="content-card">
          <h3>Regulatory Compliance</h3>
          <p>
            Ensure adherence to financial regulations and automate compliance
            reporting with our secure compliance solutions.
          </p>
        </div>
        <div class="content-card">
          <h3>AI-Powered Analytics</h3>
          <p>
            Gain deeper financial insights through advanced data analytics,
            predictive modeling, and customer behavior analysis.
          </p>
        </div>
      </div>
    </section>

    <!-- Call-to-Action Section -->
    <section class="cta-section">
      <h2>Future-Proof Your Financial Institution</h2>
      <p>
        Stay ahead in the rapidly evolving financial industry with our
        AI-powered, secure, and scalable solutions.
      </p>
      <a href="/contact" class="cta-button">Schedule a Consultation</a>
    </section>
  </div>
</template>

<script>
export default {
  head() {
    return {
      title: "Finance Solutions - Industries We Serve",
      meta: [
        {
          hid: "description",
          name: "description",
          content:
            "Enhance financial operations, manage risks, and improve digital banking experiences with our finance solutions.",
        },
      ],
    };
  },
};
</script>

<style scoped>
/* General Styles */
.industry-page {
  font-family: Arial, sans-serif;
  padding: 20px;
  max-width: 1200px;
  margin: auto;
}

/* Hero Section */
.industry-header {
  text-align: center;
  padding: 40px 20px;
  background-color: var(--accent-color);
  color: var(--contrast-color);
  border-radius: 10px;
  margin-bottom: 30px;
}

.industry-header h1 {
  font-size: 2.5rem;
  font-weight: bold;
}

.industry-header p {
  font-size: 1.2rem;
  max-width: 800px;
  margin: 0 auto;
}

/* Solutions Section */
.industry-content {
  margin-top: 30px;
  text-align: center;
}

.section-title {
  font-size: 2rem;
  margin-bottom: 1.5rem;
  color: var(--heading-color);
}

.content-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 20px;
}

.content-card {
  background: var(--contrast-color);
  color: var(--accent-color);
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
  text-align: center;
}

.content-card:hover {
  transform: translateY(-5px);
}

.content-card h3 {
  font-size: 1.4rem;
  margin-bottom: 10px;
}

/* Call-to-Action */
.cta-section {
  text-align: center;
  margin-top: 40px;
  padding: 30px;
  background-color: var(--accent-color);
  color: var(--contrast-color);
  border-radius: 10px;
}

.cta-section h2 {
  font-size: 2rem;
  margin-bottom: 10px;
}

.cta-section p {
  font-size: 1.2rem;
  max-width: 700px;
  margin: 0 auto 15px;
}

.cta-button {
  display: inline-block;
  padding: 12px 24px;
  background: white;
  color: var(--accent-color);
  border-radius: 5px;
  text-decoration: none;
  font-weight: bold;
  transition: background 0.3s ease, color 0.3s ease;
}

.cta-button:hover {
  background-color: var(--contrast-color);
  color: white;
}

/* Responsive Styles */
@media (max-width: 768px) {
  .industry-header h1 {
    font-size: 2rem;
  }

  .industry-header p {
    font-size: 1rem;
  }

  .content-grid {
    grid-template-columns: 1fr;
  }

  .cta-section h2 {
    font-size: 1.8rem;
  }

  .cta-button {
    padding: 10px 20px;
  }
}
</style>
