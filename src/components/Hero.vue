<template>
  <section id="hero" class="hero section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
            <div class="company-badge mb-4">
              <i class="bi bi-gear-fill me-2"></i>
              All-in-One Software Solution
            </div>
            <h1 class="mb-4">
              Transform Your Business <br />
              with
              <span class="accent-text">RX Square</span>
            </h1>
            <p class="mb-4 mb-md-5">
              Unlock the full potential of your business with our <b>powerful all-in-one platform</b>—featuring <b>Dynamic CRM, Advanced Billing, E-commerce, Attendance Software with App, Business WhatsApp Integration, Course Streaming Platform, Chatbot Integration, Mailing Integration, Mobile App Development, System Application Development,</b> and <b>Custom Websites with Dashboard for Blog Writing & SEO Optimization</b>. Everything you need to grow, automate, and manage your business—seamlessly integrated in one place.
            </p>
            <div class="hero-buttons">
              <NuxtLink
                class="btn btn-primary me-0 me-sm-2 mx-1"
                to="/get-started"
                >Get Started</NuxtLink
              >
              <NuxtLink class="btn btn-link" to="/bookDemo"
                ><i class="bi bi-play-circle me-1"></i> Book Free Demo</NuxtLink
              >
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
            <img src="assets/img/1.png" alt="Hero Image" class="img-fluid" />
            <div class="customers-badge">
              <div class="customer-avatars">
                <img
                  src="assets/img/avatar-1.webp"
                  alt="Customer 1"
                  class="avatar"
                />
                <img
                  src="assets/img/avatar-2.webp"
                  alt="Customer 2"
                  class="avatar"
                />
                <img
                  src="assets/img/avatar-3.webp"
                  alt="Customer 3"
                  class="avatar"
                />
                <img
                  src="assets/img/avatar-4.webp"
                  alt="Customer 4"
                  class="avatar"
                />
                <img
                  src="assets/img/avatar-5.webp"
                  alt="Customer 5"
                  class="avatar"
                />
                <span class="avatar more">12+</span>
              </div>
              <p class="mb-0 mt-2">
                Empowering businesses with next-gen digital solutions
              </p>
            </div>
          </div>
        </div>
      </div>
      <div
        class="row stats-row gy-4 mt-5"
        data-aos="fade-up"
        data-aos-delay="500"
      >
        <div class="col-lg-3 col-md-6">
          <div class="stat-item">
            <div class="stat-icon">
              <i class="bi bi-collection"></i>
            </div>
            <div class="stat-content">
              <h4>10+ Modules Integrated</h4>
              <p class="mb-0">All your business needs in one platform</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="stat-item">
            <div class="stat-icon">
              <i class="bi bi-people"></i>
            </div>
            <div class="stat-content">
              <h4>150+ Satisfied Clients</h4>
              <p class="mb-0">Trusted by businesses & entrepreneurs</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="stat-item">
            <div class="stat-icon">
              <i class="bi bi-graph-up-arrow"></i>
            </div>
            <div class="stat-content">
              <h4>99.9% Uptime</h4>
              <p class="mb-0">Reliable, secure, and always available</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="stat-item">
            <div class="stat-icon">
              <i class="bi bi-lightning-charge"></i>
            </div>
            <div class="stat-content">
              <h4>Dynamic & Scalable</h4>
              <p class="mb-0">Custom solutions for every business</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup></script>

<style scoped>
.hero {
  position: relative;
  padding-top: 160px;
  background: linear-gradient(
    135deg,
    color-mix(in srgb, var(--accent-color), transparent 95%) 50%,
    color-mix(in srgb, var(--accent-color), transparent 98%) 25%,
    transparent 50%
  );
}

.hero::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: radial-gradient(
    circle at 90% 10%,
    color-mix(in srgb, var(--accent-color), transparent 92%),
    transparent 40%
  );
  pointer-events: none;
}

.hero .hero-content {
  position: relative;
  z-index: 1;
}

.hero .hero-content h1 {
  font-size: 3.5rem;
  font-weight: 700;
  line-height: 1.2;
  margin-bottom: 1.5rem;
}

.hero .hero-content h1 .accent-text {
  color: var(--accent-color);
}

@media (max-width: 992px) {
  .hero .hero-content {
    text-align: center;
    margin-bottom: 3rem;
  }

  .hero .hero-content h1 {
    font-size: 2.5rem;
  }

  .hero .hero-content .hero-buttons {
    justify-content: center;
  }
}

@media (max-width: 575px) {
  .hero .hero-content h1 {
    font-size: 2rem;
  }
}

.hero .company-badge {
  display: inline-flex;
  align-items: center;
  padding: 0.5rem 1rem;
  background-color: color-mix(in srgb, var(--accent-color), transparent 92%);
  border-radius: 50px;
  color: var(--accent-color);
  font-weight: 500;
}

.hero .company-badge i {
  font-size: 1.25rem;
}

.hero .btn-primary {
  background-color: var(--accent-color);
  border-color: var(--accent-color);
  color: var(--contrast-color);
  padding: 0.75rem 2.5rem;
  border-radius: 50px;
  font-weight: 500;
  transition: all 0.3s ease;
}

.hero .btn-primary:hover {
  background-color: color-mix(in srgb, var(--accent-color), black 20%);
  border-color: color-mix(in srgb, var(--accent-color), black 20%);
}

.hero .btn-link {
  color: var(--heading-color);
  text-decoration: none;
  font-weight: 500;
  transition: all 0.3s ease;
}

.hero .btn-link:hover {
  color: var(--accent-color);
}

.hero .btn-link i {
  font-size: 1.5rem;
  vertical-align: middle;
}

.hero .hero-image {
  position: relative;
  text-align: center;
  z-index: 1;
}

.hero .hero-image img {
  max-width: 100%;
  height: auto;
}

.hero .customers-badge {
  position: absolute;
  bottom: -100px;
  right: 30px;
  background-color: var(--surface-color);
  padding: 1rem;
  border-radius: 10px;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
  max-width: 300px;
  animation: float-badge 3s ease-in-out infinite;
  will-change: transform;
}

.hero .customers-badge .customer-avatars {
  display: flex;
  align-items: center;
  margin-bottom: 0.5rem;
}

.hero .customers-badge .avatar {
  width: 35px;
  height: 35px;
  border-radius: 50%;
  border: 2px solid var(--surface-color);
  margin-left: -8px;
}

.hero .customers-badge .avatar:first-child {
  margin-left: 0;
}

.hero .customers-badge .avatar.more {
  background-color: var(--accent-color);
  color: var(--contrast-color);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 0.75rem;
  font-weight: 600;
}

.hero .customers-badge p {
  font-size: 0.875rem;
  color: color-mix(in srgb, var(--default-color), transparent 40%);
}

@media (max-width: 992px) {
  .hero .customers-badge {
    position: static;
    margin: 1rem auto;
    max-width: 250px;
  }
}

.hero .stats-row {
  position: relative;
  z-index: 1;
  margin-top: 5rem;
  background-color: var(--surface-color);
  border-radius: 20px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
  padding-bottom: 2rem;
}

.hero .stat-item {
  display: flex;
  align-items: center;
  gap: 1rem;
  padding: 2rem;
}

.hero .stat-item .stat-icon {
  flex-shrink: 0;
  width: 64px;
  height: 64px;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: color-mix(in srgb, var(--accent-color), transparent 92%);
  border-radius: 50px;
  transition: 0.3s;
}

.hero .stat-item .stat-icon i {
  font-size: 1.5rem;
  color: var(--accent-color);
}

.hero .stat-item:hover .stat-icon {
  background-color: var(--accent-color);
}

.hero .stat-item:hover .stat-icon i {
  color: var(--contrast-color);
}

.hero .stat-item .stat-content {
  flex-grow: 1;
}

.hero .stat-item .stat-content h4 {
  font-size: 1.25rem;
  margin-bottom: 0.25rem;
  font-weight: 600;
}

.hero .stat-item .stat-content p {
  font-size: 0.875rem;
  color: color-mix(in srgb, var(--default-color), transparent 40%);
  margin: 0;
}

@media (max-width: 575px) {
  .hero .stat-item {
    padding: 1.5rem;
  }
}

@keyframes float-badge {
  0% {
    transform: translateY(0);
  }

  50% {
    transform: translateY(-10px);
  }

  100% {
    transform: translateY(0);
  }
}
</style>
