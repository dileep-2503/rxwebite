<template>
  <div class="consulting-page">
    <!-- Header Section -->
    <header class="consulting-header mt-16">
      <h1>Consulting Services</h1>
      <p>
        Our expert consultants provide strategic guidance to help your business
        achieve its goals, overcome challenges, and drive innovation.
      </p>
    </header>

    <!-- Content Section -->
    <section class="consulting-content">
      <div class="consulting-grid">
        <div class="consulting-card">
          <div class="card-icon">📊</div>
          <h2>IT Strategy & Planning</h2>
          <p>
            Develop a future-proof IT strategy aligned with your business goals
            and technological advancements.
          </p>
        </div>
        <div class="consulting-card">
          <div class="card-icon">🚀</div>
          <h2>Digital Transformation</h2>
          <p>
            Leverage cutting-edge technologies to transform your business
            operations and customer experiences.
          </p>
        </div>
        <div class="consulting-card">
          <div class="card-icon">📅</div>
          <h2>Project Management</h2>
          <p>
            Ensure seamless project execution with our proven methodologies and
            expert oversight.
          </p>
        </div>
        <div class="consulting-card">
          <div class="card-icon">🔒</div>
          <h2>Cybersecurity Consulting</h2>
          <p>
            Protect your business from cyber threats with our comprehensive
            security strategies and solutions.
          </p>
        </div>
        <div class="consulting-card">
          <div class="card-icon">📈</div>
          <h2>Business Process Optimization</h2>
          <p>
            Streamline workflows, reduce costs, and improve efficiency with our
            process optimization expertise.
          </p>
        </div>
        <div class="consulting-card">
          <div class="card-icon">🌐</div>
          <h2>Cloud Migration & Strategy</h2>
          <p>
            Migrate to the cloud seamlessly and optimize your cloud
            infrastructure for scalability and performance.
          </p>
        </div>
      </div>
    </section>

    <!-- Call-to-Action Section -->
    <section class="consulting-cta">
      <h2>Ready to Elevate Your Business?</h2>
      <p>
        Contact us today to learn how our consulting services can help you
        succeed.
      </p>
      <a href="/contact" class="cta-btn">Get in Touch</a>
    </section>
  </div>
</template>

<script>
export default {
  head() {
    return {
      title: "Consulting Services",
      meta: [
        {
          hid: "description",
          name: "description",
          content:
            "Explore our expert consulting services to drive innovation and growth in your business.",
        },
      ],
    };
  },
};
</script>

<style scoped>
/* Base styles */
.consulting-page {
  padding: 2rem;
  max-width: 1200px;
  margin: 0 auto;
}

.consulting-header {
  text-align: center;
  margin-bottom: 3rem;
}

.consulting-header h1 {
  font-size: 2.75rem;
  margin-bottom: 1rem;
  color: var(--heading-color);
}

.consulting-header p {
  font-size: 1.25rem;
  color: #666;
  max-width: 800px;
  margin: 0 auto;
}

.consulting-content {
  margin-bottom: 4rem;
}

.consulting-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 2rem;
}

.consulting-card {
  background-color: white;
  padding: 2rem;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  text-align: center;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.consulting-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
}

.card-icon {
  font-size: 2.5rem;
  margin-bottom: 1rem;
}

.consulting-card h2 {
  font-size: 1.5rem;
  margin-bottom: 1rem;
  color: var(--accent-color);
}

.consulting-card p {
  font-size: 1rem;
  color: #555;
  line-height: 1.6;
}

.consulting-cta {
  text-align: center;
  padding: 3rem 2rem;
  background-color: var(--accent-color);
  color: white;
  border-radius: 12px;
}

.consulting-cta h2 {
  font-size: 2.25rem;
  margin-bottom: 1rem;
}

.consulting-cta p {
  font-size: 1.25rem;
  margin-bottom: 2rem;
}

.cta-btn {
  padding: 0.75rem 2rem;
  background: white;
  color: var(--accent-color);
  text-decoration: none;
  border-radius: 6px;
  font-size: 1rem;
  font-weight: 600;
  transition: background 0.3s ease, color 0.3s ease;
}

.cta-btn:hover {
  background: #f1f1f1;
  color: var(--accent-color);
}

/* Responsive styles */
@media (max-width: 768px) {
  .consulting-header h1 {
    font-size: 2.25rem;
  }

  .consulting-header p {
    font-size: 1.1rem;
  }

  .consulting-grid {
    grid-template-columns: 1fr;
  }

  .consulting-cta h2 {
    font-size: 2rem;
  }

  .consulting-cta p {
    font-size: 1.1rem;
  }
}

@media (max-width: 480px) {
  .consulting-page {
    padding: 1rem;
  }

  .consulting-header h1 {
    font-size: 2rem;
  }

  .consulting-header p {
    font-size: 1rem;
  }

  .consulting-cta h2 {
    font-size: 1.75rem;
  }

  .consulting-cta p {
    font-size: 1rem;
  }
}
</style>
