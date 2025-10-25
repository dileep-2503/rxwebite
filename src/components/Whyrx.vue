<template>
    <section id="about" class="about section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 align-items-center justify-content-between">
          <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
            <span class="about-meta">WHY CHOOSE RX SQUARE?</span>
            <h2 class="about-title">All-in-One Software Solution</h2>
            <p class="about-description">
              RX Square is your complete business growth partner—offering a powerful all-in-one platform with Dynamic CRM, Billing Software, E-commerce, Attendance Software with App, Business WhatsApp Integration, Course Streaming Platform, Chatbot Integration, Mailing Integration, Mobile App Development, System Application Development, and Custom Websites with Dashboard for Blog Writing & SEO Optimization. Everything you need to automate, manage, and scale your business in one seamless solution.
            </p>
            <div class="row feature-list-wrapper">
              <div class="col-md-6">
                <ul class="feature-list">
                  <li><i class="bi bi-check-circle-fill"></i> Dynamic CRM</li>
                  <li><i class="bi bi-check-circle-fill"></i> Advanced Billing Software</li>
                  <li><i class="bi bi-check-circle-fill"></i> E-commerce Platform</li>
                  <li><i class="bi bi-check-circle-fill"></i> Attendance App</li>
                  <li><i class="bi bi-check-circle-fill"></i> WhatsApp Integration</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="feature-list">
                  <li><i class="bi bi-check-circle-fill"></i> Course Streaming</li>
                  <li><i class="bi bi-check-circle-fill"></i> Chatbot & Mailing Integration</li>
                  <li><i class="bi bi-check-circle-fill"></i> Mobile & System App Development</li>
                  <li><i class="bi bi-check-circle-fill"></i> Custom Websites & Dashboards</li>
                  <li><i class="bi bi-check-circle-fill"></i> Blog Writing & SEO Tools</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
            <div class="image-wrapper">
              <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                <img src="assets/img/about-5.webp" alt="Business Meeting" class="img-fluid main-image rounded-4">
                <img src="assets/img/about-2.webp" alt="Team Discussion" class="img-fluid small-image rounded-4">
              </div>
              <div class="experience-badge floating">
                <h3>100+ <span>Businesses</span></h3>
                <p>Already growing with RX Square</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</template>
  
<script setup>
</script>
  
<style scoped>
  .about .about-meta {
    color: var(--accent-color);
    font-weight: 600;
    margin-bottom: 1rem;
    display: inline-block;
  }
  
  .about .about-title {
    font-size: 1.75rem;
    margin-bottom: 1rem;
    line-height: 1.2;
    font-weight: 700;
  }
  
  @media (max-width: 992px) {
    .about .about-title {
      font-size: 2rem;
    }
  }
  
  .about .about-description {
    margin-bottom: 2rem;
    color: color-mix(in srgb, var(--default-color), transparent 20%);
  }
  
  .about .feature-list-wrapper {
    margin-bottom: 2rem;
  }
  
  .about .feature-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  
  .about .feature-list li {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    margin-bottom: 1rem;
    font-size: 1rem;
  }
  
  .about .feature-list li i {
    color: var(--accent-color);
    font-size: 1.25rem;
  }
  
  .about .profile .profile-image {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    object-fit: cover;
  }
  
  .about .profile .profile-name {
    font-size: 1.125rem;
    margin: 0;
  }
  
  .about .profile .profile-position {
    color: var(--accent-color);
    margin: 0;
    font-size: 0.875rem;
  }
  
  .about .contact-info {
    padding: 1rem 1.5rem;
    background-color: var(--surface-color);
    border-radius: 0.5rem;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.06);
  }
  
  .about .contact-info i {
    color: var(--accent-color);
    font-size: 1.5rem;
  }
  
  .about .contact-info .contact-label {
    color: color-mix(in srgb, var(--default-color), transparent 30%);
    font-size: 0.875rem;
    margin: 0;
  }
  
  .about .contact-info .contact-number {
    font-weight: 600;
    margin: 0;
  }
  
  .about .image-wrapper {
    position: relative;
  }
  
  @media (max-width: 992px) {
    .about .image-wrapper {
      padding-left: 0;
      margin-top: 3rem;
      display: flex;
      flex-direction: column;
      gap: 2rem;
    }
  }
  
  @media (max-width: 992px) {
    .about .image-wrapper .images {
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
    }
  }
  
  @media (max-width: 992px) {
    .about .image-wrapper .main-image {
      margin-left: 0;
    }
  }
  
  .about .image-wrapper .small-image {
    position: absolute;
    top: 20%;
    left: -10%;
    width: 45%;
    border: 8px solid var(--surface-color);
  }
  
  @media (max-width: 992px) {
    .about .image-wrapper .small-image {
      position: static;
      width: 100%;
      margin: 0 auto;
      border: 0;
    }
  }
  
  .about .image-wrapper .experience-badge {
    position: absolute;
    bottom: 5%;
    right: 5%;
    background-color: var(--accent-color);
    color: var(--contrast-color);
    padding: 1.5rem;
    border-radius: 0.5rem;
    text-align: center;
    min-width: 200px;
    animation: experience-float 3s ease-in-out infinite;
  }
  
  @media (max-width: 992px) {
    .about .image-wrapper .experience-badge {
      position: static;
      width: fit-content;
      margin: 0 auto;
    }
  }
  
  .about .image-wrapper .experience-badge h3 {
    color: var(--contrast-color);
    font-size: 2.5rem;
    margin: 0;
    line-height: 0.5;
  }
  
  .about .image-wrapper .experience-badge h3 span {
    font-size: 1rem;
    display: inline-block;
    margin-left: 0.25rem;
  }
  
  .about .image-wrapper .experience-badge p {
    margin: 0.5rem 0 0;
    font-size: 0.875rem;
  }
  
  @keyframes experience-float {
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