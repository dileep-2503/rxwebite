<template>
  <div class="service-page">
    <!-- Hero Section -->
    <section class="hero-section mt-24">
      <div class="hero-content">
        <h1>Revolutionize Your Business with Automation</h1>
        <p>
          Say goodbye to manual work and inefficiencies. Our automation
          solutions help you optimize workflows, reduce costs, and boost
          productivity.
        </p>
        <a href="/contact" class="cta-button">Get Started</a>
      </div>
    </section>

    <!-- Services Section -->
    <section class="service-content">
      <h2 class="section-title">What We Offer</h2>
      <div class="content-grid">
        <div class="content-card">
          <i class="icon fas fa-tasks"></i>
          <h3>Workflow Automation</h3>
          <p>Eliminate repetitive tasks and improve efficiency.</p>
        </div>
        <div class="content-card">
          <i class="icon fas fa-robot"></i>
          <h3>Robotic Process Automation</h3>
          <p>Use AI-powered bots to streamline business processes.</p>
        </div>
        <div class="content-card">
          <i class="icon fas fa-cogs"></i>
          <h3>Business Process Optimization</h3>
          <p>Redesign workflows for maximum performance.</p>
        </div>
        <div class="content-card">
          <i class="icon fas fa-chart-line"></i>
          <h3>Data-Driven Automation</h3>
          <p>Leverage AI to make data-driven decisions.</p>
        </div>
      </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits-section">
      <h2 class="section-title">Why Choose Automation?</h2>
      <div class="benefit-grid">
        <div class="benefit-card">
          <h3>Reduce Costs</h3>
          <p>Cut operational expenses by automating repetitive tasks.</p>
        </div>
        <div class="benefit-card">
          <h3>Enhance Productivity</h3>
          <p>Free up your team for higher-value work.</p>
        </div>
        <div class="benefit-card">
          <h3>Improve Accuracy</h3>
          <p>Eliminate human errors and ensure data consistency.</p>
        </div>
      </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section">
      <h2 class="section-title">What Our Clients Say</h2>
      <div class="testimonial">
        <p>
          "After implementing their automation solutions, our workflow improved
          significantly, saving us hours every week!"
        </p>
        <h4>- Arun Kumar, Retail Store Owner</h4>
      </div>
    </section>

    <!-- Call-to-Action -->
    <section class="cta-section">
      <h2>Let’s Automate Your Business</h2>
      <p>Ready to take your operations to the next level? Contact us now.</p>
      <a href="/contact" class="cta-button">Contact Us</a>
    </section>
  </div>
</template>

<script>
export default {
  head() {
    return {
      title: "Automation Services",
      meta: [
        {
          hid: "description",
          name: "description",
          content:
            "Automate your business with AI-powered workflows, RPA, and process optimization. Reduce costs and improve efficiency today.",
        },
      ],
    };
  },
};
</script>

<style scoped>
/* General Styles */
.service-page {
  max-width: 1200px;
  margin: 0 auto;
  padding: 2rem;
}
.service-page h1,
h2 {
  color: var(--heading-color);
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
  border-radius: 5px;
  font-size: 1rem;
  font-weight: bold;
  transition: background 0.3s ease;
}

.cta-button:hover {
  background: #f1f1f1;
}

/* Services Section */
.service-content {
  margin: 3rem 0;
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

.icon {
  font-size: 2rem;
  margin-bottom: 1rem;
  color: var(--contrast-color);
}

/* Benefits Section */
.benefits-section {
  margin-bottom: 3rem;
  text-align: center;
}

.benefit-grid {
  display: flex;
  justify-content: space-around;
  gap: 1.5rem;
}

.benefit-card {
  background: white;
  padding: 1.5rem;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  width: 30%;
}

.benefit-card h3 {
  font-size: 1.5rem;
  color: var(--accent-color);
}

.benefit-card p {
  font-size: 1rem;
}

/* Testimonial Section */
.testimonial-section {
  background: #f8f9fa;
  padding: 3rem 2rem;
  text-align: center;
  border-radius: 8px;
}

.testimonial p {
  font-size: 1.2rem;
  font-style: italic;
  margin-bottom: 1rem;
}

.testimonial h4 {
  color: var(--accent-color);
  font-weight: bold;
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

  .benefit-grid {
    flex-direction: column;
    align-items: center;
  }

  .benefit-card {
    width: 80%;
  }

  .cta-section h2 {
    font-size: 1.8rem;
  }
}
</style>
