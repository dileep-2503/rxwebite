<template>
  <div class="privacy-wrapper">
    <!-- Sidebar Navigation -->
    <aside class="sidebar">
      <h2>Privacy Policy</h2>
      <nav>
        <ul>
          <li><a href="#overview">Overview</a></li>
          <li><a href="#info">Information We Collect</a></li>
          <li><a href="#usage">How We Use Information</a></li>
          <li><a href="#cookies">Cookies & Tracking</a></li>
          <li><a href="#security">Data Security</a></li>
          <li><a href="#control">Controlling Personal Info</a></li>
          <li><a href="#third-party">Third-Party Links</a></li>
          <li><a href="#changes">Policy Changes</a></li>
        </ul>
      </nav>
    </aside>

    <!-- Main Content -->
    <div class="privacy-content">
      <section id="overview" class="policy-card">
        <p><strong>Last updated on Feb 20, 2025</strong></p>
        <p>
          This privacy policy sets out how
          <strong>VAIBHAV ENTERPRISES</strong> uses and protects any information
          that you give when you visit their website and/or purchase from them.
        </p>
        <p>
          VAIBHAV ENTERPRISES is committed to ensuring your privacy is
          protected. If you are asked to provide information by which you can be
          identified, it will only be used in accordance with this privacy
          statement.
        </p>
        <p>
          VAIBHAV ENTERPRISES may update this policy from time to time. Please
          check this page periodically to stay informed of any changes.
        </p>
      </section>

      <section id="info" class="policy-card">
        <h3>1. Information We Collect</h3>
        <p>We may collect the following information:</p>
        <ul>
          <li>Name</li>
          <li>Contact information including email address</li>
          <li>
            Demographic info like postcode, preferences, interests (if required)
          </li>
          <li>Other info relevant to customer surveys or offers</li>
        </ul>
      </section>

      <section id="usage" class="policy-card">
        <h3>2. How We Use Your Information</h3>
        <ul>
          <li>For internal record keeping</li>
          <li>To improve our products and services</li>
          <li>To send promotional emails or special offers</li>
          <li>To conduct market research via email, phone, or mail</li>
          <li>To personalize your website experience</li>
        </ul>
      </section>

      <section id="cookies" class="policy-card">
        <h3>3. Cookies and Tracking</h3>
        <p>
          A cookie is a small file that helps tailor a website’s response to
          your preferences. We use cookies for:
        </p>
        <ul>
          <li>Web traffic analysis</li>
          <li>Improving user experience</li>
          <li>Statistical data tracking</li>
        </ul>
        <p>
          You can accept or decline cookies through browser settings. Declining
          may affect site functionality.
        </p>
      </section>

      <section id="security" class="policy-card">
        <h3>4. Data Security</h3>
        <p>
          We are committed to securing your data with appropriate technical and
          organizational measures to prevent unauthorized access or disclosure.
        </p>
      </section>

      <section id="control" class="policy-card">
        <h3>5. Controlling Your Personal Information</h3>
        <p>You can restrict how your data is used:</p>
        <ul>
          <li>Opt out of marketing during form submission</li>
          <li>
            Request data changes via
            <a href="mailto:support@rxsquare.in">support@rxsquare.in</a>
          </li>
        </ul>
        <p>
          We do not sell or lease your data without permission. If you believe
          your data is incorrect, contact us at:
        </p>
        <p>
          <strong>Address:</strong> NO.73/1, 89, NANDIVARAM SREENIVASA COMPLEX,
          NH SERVICE ROAD, GST ROAD, Kanchipuram, TAMIL NADU 603202
          <br />
          <strong>Phone:</strong> 9445844624
          <br />
          <strong>Email:</strong> support@rxsquare.in
        </p>
      </section>

      <section id="third-party" class="policy-card">
        <h3>6. Third-Party Links</h3>
        <p>
          Our site may link to external websites. We are not responsible for
          their privacy practices.
        </p>
      </section>

      <section id="changes" class="policy-card">
        <h3>7. Changes to This Policy</h3>
        <p>
          We may revise this policy periodically. Continued use of the site
          after updates implies your acceptance of the changes.
        </p>
      </section>
    </div>
  </div>
</template>

<script>
export default {
  head() {
    return {
      title: "Privacy Policy",
    };
  },
};
</script>

<style scoped>
/* Wrapper */
.privacy-wrapper {
  display: flex;
  gap: 20px;
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

/* Sidebar */
.sidebar {
  width: 250px;
  background: var(--accent-color);
  color: var(--contrast-color);
  padding: 20px;
  border-radius: 10px;
  position: sticky;
  top: 20px;
  height: fit-content;
}

.sidebar h2 {
  font-size: 1.8rem;
  margin-bottom: 15px;
  text-align: center;
}

.sidebar nav ul {
  list-style: none;
  padding: 0;
}

.sidebar nav ul li {
  margin-bottom: 10px;
}

.sidebar nav ul li a {
  color: var(--contrast-color);
  text-decoration: none;
  font-size: 1.1rem;
  display: block;
  padding: 8px;
  border-radius: 5px;
  transition: background 0.3s;
}

.sidebar nav ul li a:hover {
  background: rgba(255, 255, 255, 0.2);
}

/* Privacy Content */
.privacy-content {
  flex: 1;
}

.policy-card {
  background: white;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
  scroll-margin-top: 80px;
}

.policy-card h3 {
  font-size: 1.5rem;
  color: var(--accent-color);
  margin-bottom: 10px;
}

.policy-card p {
  font-size: 1rem;
  color: #444;
}

/* Responsive */
@media (max-width: 768px) {
  .privacy-wrapper {
    flex-direction: column;
  }

  .sidebar {
    width: 100%;
    position: static;
    text-align: center;
  }

  .sidebar nav ul {
    display: flex;
    justify-content: center;
    gap: 10px;
    flex-wrap: wrap;
  }

  .sidebar nav ul li {
    margin-bottom: 0;
  }

  .policy-card {
    scroll-margin-top: 0;
  }
}
</style>
