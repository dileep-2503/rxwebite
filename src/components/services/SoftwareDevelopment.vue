<template>
  <div class="service-page">
    <!-- Header Section -->
    <header class="service-header mt-16">
      <h2>Software Development Services</h2>
      <p>
        We specialize in building custom software solutions tailored to your
        business needs, ensuring scalability, security, and performance.
      </p>
    </header>

    <!-- Content Section -->
    <section class="service-content">
      <div class="content-grid">
        <div class="content-card">
          <h2>Custom Software Development</h2>
          <p>
            Develop bespoke software applications designed to meet your unique
            business requirements.
          </p>
        </div>
        <div class="content-card">
          <h2>Web Application Development</h2>
          <p>
            Build responsive, user-friendly, and scalable web applications for
            seamless user experiences.
          </p>
        </div>
        <div class="content-card">
          <h2>Mobile App Development</h2>
          <p>
            Create cross-platform mobile applications for iOS and Android with
            stunning UI/UX design.
          </p>
        </div>
        <div class="content-card">
          <h2>Cloud-Based Solutions</h2>
          <p>
            Develop and deploy cloud-native applications for enhanced
            scalability and flexibility.
          </p>
        </div>
        <div class="content-card">
          <h2>API Integration</h2>
          <p>
            Seamlessly integrate third-party APIs to extend the functionality of
            your software.
          </p>
        </div>
        <div class="content-card">
          <h2>Maintenance & Support</h2>
          <p>
            Provide ongoing maintenance and support to ensure your software runs
            smoothly.
          </p>
        </div>
      </div>
    </section>

    <!-- Call-to-Action Section -->
    <section class="cta-section">
      <h2>Ready to Build Your Software Solution?</h2>
      <p>
        Contact us today to discuss your project and get a free consultation.
      </p>
      <a href="/contact" class="cta-button">Get in Touch</a>
    </section>
  </div>
</template>

<script>
export default {
  head() {
    return {
      title: "Software Development Services",
      meta: [
        {
          hid: "description",
          name: "description",
          content:
            "Explore our comprehensive software development services, including custom software, web apps, mobile apps, and more.",
        },
      ],
    };
  },
};
</script>

<style scoped>
/* Base styles */
.service-page {
  padding: 2rem;
  max-width: 1200px;
  margin: 0 auto;
}

h2 {
  color: var(--heading-color);
}

.service-header {
  text-align: center;
  margin-bottom: 2rem;
}

.service-header h1 {
  font-size: 2.5rem;
  margin-bottom: 1rem;
  color: var(--heading-color);
}

.service-header p {
  font-size: 1.2rem;
  color: #666;
}

.service-content {
  margin-bottom: 3rem;
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
}

.content-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}

.content-card h2 {
  font-size: 1.5rem;
  margin-bottom: 0.5rem;
  color: var(--accent-color);
}

.content-card p {
  font-size: 1rem;
  color: #555;
}

.cta-section {
  text-align: center;
  padding: 2rem;
  background-color: var(--accent-color);
  color: white;
  border-radius: 8px;
}

.cta-section h2 {
  font-size: 2rem;
  margin-bottom: 1rem;
}

.cta-section p {
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
  color: var(--accent-color);
}

/* Responsive styles */
@media (max-width: 768px) {
  .service-header h1 {
    font-size: 2rem;
  }

  .service-header p {
    font-size: 1rem;
  }

  .content-grid {
    grid-template-columns: 1fr;
  }

  .cta-section h2 {
    font-size: 1.8rem;
  }

  .cta-section p {
    font-size: 1rem;
  }
}

@media (max-width: 480px) {
  .service-page {
    padding: 1rem;
  }

  .service-header h1 {
    font-size: 1.8rem;
  }

  .service-header p {
    font-size: 0.9rem;
  }

  .cta-section h2 {
    font-size: 1.5rem;
  }

  .cta-section p {
    font-size: 0.9rem;
  }
}
</style>
