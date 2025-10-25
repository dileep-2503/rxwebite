<template>
  <section class="terms-container">
    <div class="terms-header">
      <div class="header-decoration"></div>
      <h1 class="terms-title">Terms & Conditions</h1>
      <p class="terms-updated">Last updated on Feb 20, 2025</p>
      <div class="header-decoration"></div>
    </div>

    <div class="terms-content">
      <div class="terms-intro">
        <p>
          For the purpose of these Terms and Conditions, the terms "we", "us",
          "our" refer to <strong>VAIBHAV ENTERPRISES</strong>, whose registered
          office is NO.73/1, 89, NANDIVARAM SREENIVASA COMPLEX, NH SERVICE ROAD,
          GST ROAD, Kanchipuram, Tamil Nadu 603202. The terms "you", "your",
          "user", "visitor" refer to any person using our website or making a
          purchase from us.
        </p>
      </div>

      <div class="terms-grid">
        <div class="terms-card">
          <div class="card-number">1</div>
          <h2>Use of Website</h2>
          <p>
            Your use of this website and/or purchases from us are governed by
            the following Terms and Conditions. Content on this website is
            subject to change without notice.
          </p>
        </div>

        <div class="terms-card">
          <div class="card-number">2</div>
          <h2>Accuracy of Information</h2>
          <p>
            We do not provide any warranty or guarantee as to the accuracy,
            timeliness, or completeness of the content. You acknowledge such
            content may have errors and we exclude liability to the fullest
            extent permitted by law.
          </p>
        </div>

        <div class="terms-card">
          <div class="card-number">3</div>
          <h2>Your Responsibility</h2>
          <p>
            Your use of any information or material from our website is at your
            own risk. It is your responsibility to ensure our products or
            services meet your requirements before purchase.
          </p>
        </div>

        <div class="terms-card">
          <div class="card-number">4</div>
          <h2>Intellectual Property</h2>
          <p>
            All content on our site including design, layout, appearance, and
            graphics is owned by or licensed to us. Reproduction is prohibited
            except with proper copyright acknowledgment.
          </p>
        </div>

        <div class="terms-card">
          <div class="card-number">5</div>
          <h2>Trademarks</h2>
          <p>
            Trademarks not owned by or licensed to us are acknowledged on the
            website.
          </p>
        </div>

        <div class="terms-card">
          <div class="card-number">6</div>
          <h2>Unauthorized Use</h2>
          <p>
            Unauthorized use of the information may result in a claim for
            damages and/or be a criminal offense.
          </p>
        </div>

        <div class="terms-card">
          <div class="card-number">7</div>
          <h2>External Links</h2>
          <p>
            We may include links to third-party sites for your convenience. We
            do not endorse the content of those sites.
          </p>
        </div>

        <div class="terms-card">
          <div class="card-number">8</div>
          <h2>Linking to Our Site</h2>
          <p>
            You may not link to our website without prior written permission
            from VAIBHAV ENTERPRISES.
          </p>
        </div>

        <div class="terms-card">
          <div class="card-number">9</div>
          <h2>Governing Law</h2>
          <p>
            Any disputes arising from use of our site or purchases with us shall
            be governed by the laws of India.
          </p>
        </div>

        <div class="terms-card">
          <div class="card-number">10</div>
          <h2>Payment Authorization</h2>
          <p>
            We shall not be liable for any loss arising from declined
            transactions due to the cardholder exceeding authorized limits as
            set with our acquiring bank.
          </p>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
.terms-container {
  max-width: 1100px;
  margin: 2rem auto;
  padding: 2rem;
  background-color: #f9f9f9;
  border-radius: 16px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
}

.terms-header {
  text-align: center;
  margin-bottom: 3rem;
  position: relative;
}

.header-decoration {
  height: 2px;
  background: linear-gradient(90deg, transparent, #ddd, transparent);
  margin: 1rem 0;
}

.terms-title {
  font-size: 2.2rem;
  font-weight: 700;
  color: var(--accent-color);
  margin: 0.5rem 0;
  position: relative;
  display: inline-block;
}

.terms-title::after {
  content: "";
  position: absolute;
  bottom: -8px;
  left: 50%;
  transform: translateX(-50%);
  width: 60px;
  height: 3px;
  background-color: var(--accent-color);
}

.terms-updated {
  font-size: 0.95rem;
  color: #666;
  margin-top: 0.5rem;
}

.terms-intro {
  background: #fff;
  padding: 2rem;
  margin-bottom: 2rem;
  border-radius: 12px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
  line-height: 1.7;
}

.terms-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
  gap: 1.5rem;
}

.terms-card {
  background: #fff;
  padding: 1.8rem;
  border-radius: 12px;
  box-shadow: 0 3px 12px rgba(0, 0, 0, 0.05);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  position: relative;
  overflow: hidden;
}

.terms-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
}

.card-number {
  position: absolute;
  top: 1rem;
  right: 1rem;
  font-size: 1.8rem;
  font-weight: 700;
  color: rgba(0, 0, 0, 0.05);
  z-index: 1;
}

.terms-card h2 {
  font-size: 1.25rem;
  color: var(--accent-color);
  margin-bottom: 1rem;
  position: relative;
  z-index: 2;
}

.terms-card p {
  font-size: 1rem;
  color: #333;
  line-height: 1.6;
  position: relative;
  z-index: 2;
}

@media (max-width: 768px) {
  .terms-container {
    padding: 1.5rem;
  }

  .terms-grid {
    grid-template-columns: 1fr;
  }

  .terms-title {
    font-size: 1.8rem;
  }
}
</style>
