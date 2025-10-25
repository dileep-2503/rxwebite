<template>
  <section id="features" class="features section">
    <div class="container section-title mt-8" data-aos="fade-up">
      <h2>Integrated Business Platform</h2>
      <p>
        Unify your operations with RX Square's all-in-one solution for sales, service, and growth
      </p>
    </div>
    <div class="container">
      <div class="d-flex justify-content-center">
        <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item">
            <a
              class="nav-link"
              :class="{ active: activeTab === 'features-tab-1' }"
              @click="setActiveTab('features-tab-1')"
            >
              <h4>CRM & Sales</h4>
            </a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              :class="{ active: activeTab === 'features-tab-2' }"
              @click="setActiveTab('features-tab-2')"
            >
              <h4>Operations</h4>
            </a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              :class="{ active: activeTab === 'features-tab-3' }"
              @click="setActiveTab('features-tab-3')"
            >
              <h4>Automation</h4>
            </a>
          </li>
        </ul>
      </div>
      <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
        <!-- CRM & Sales Tab -->
        <div
          class="tab-pane fade"
          :class="{ 'active show': activeTab === 'features-tab-1' }"
          id="features-tab-1"
        >
          <div class="row">
            <div
              class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
            >
              <h3>360° Customer Management</h3>
              <p class="fst-italic">
                Convert more leads and retain customers with unified data across sales, support, and marketing
              </p>
              <ul>
                <li>
                  <i class="bi bi-check2-all"></i>
                  <span>Lead scoring & pipeline visualization</span>
                </li>
                <li>
                  <i class="bi bi-check2-all"></i>
                  <span>Customer interaction history tracking</span>
                </li>
                <li>
                  <i class="bi bi-check2-all"></i>
                  <span>Quotation → Invoice workflow automation</span>
                </li>
                <li>
                  <i class="bi bi-check2-all"></i>
                  <span>Sales forecasting with AI insights</span>
                </li>
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img
                src="assets/img/crm-dashboard.png"
                alt="CRM Dashboard"
                class="img-fluid rounded-3"
              />
            </div>
          </div>
        </div>

        <!-- Operations Tab -->
        <div
          class="tab-pane fade"
          :class="{ 'active show': activeTab === 'features-tab-2' }"
          id="features-tab-2"
        >
          <div class="row">
            <div
              class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
            >
              <h3>Unified Business Operations</h3>
              <p class="fst-italic">
                Connect finance, HR, and inventory in one workflow-optimized platform
              </p>
              <ul>
                <li>
                  <i class="bi bi-check2-all"></i>
                  <span>Automated GST-compliant billing & invoicing</span>
                </li>
                <li>
                  <i class="bi bi-check2-all"></i>
                  <span>Payroll processing with statutory compliance</span>
                </li>
                <li>
                  <i class="bi bi-check2-all"></i>
                  <span>Multi-location inventory synchronization</span>
                </li>
                <li>
                  <i class="bi bi-check2-all"></i>
                  <span>Real-time P&L statements and balance sheets</span>
                </li>
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img
                src="assets/img/operations-dashboard.png"
                alt="Operations Dashboard"
                class="img-fluid rounded-3"
              />
            </div>
          </div>
        </div>

        <!-- Automation Tab -->
        <div
          class="tab-pane fade"
          :class="{ 'active show': activeTab === 'features-tab-3' }"
          id="features-tab-3"
        >
          <div class="row">
            <div
              class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
            >
              <h3>Intelligent Automation Engine</h3>
              <p class="fst-italic">
                Eliminate manual work with customizable triggers and actions
              </p>
              <ul>
                <li>
                  <i class="bi bi-check2-all"></i>
                  <span>Bulk WhatsApp campaigns with Meta integration</span>
                </li>
                <li>
                  <i class="bi bi-check2-all"></i>
                  <span>AI-powered chatbot for 24/7 customer support</span>
                </li>
                <li>
                  <i class="bi bi-check2-all"></i>
                  <span>Custom workflow rules with if-this-then-that logic</span>
                </li>
                <li>
                  <i class="bi bi-check2-all"></i>
                  <span>Automated appointment reminders & follow-ups</span>
                </li>
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img
                src="assets/img/automation-workflow.png"
                alt="Automation Workflow"
                class="img-fluid rounded-3"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Feature Cards Section -->
  <section id="features-cards" class="features-cards section">
    <div class="container">
      <div class="row gy-4">
        <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="feature-box orange">
            <i class="bi bi-people-fill"></i>
            <h4>Dynamic CRM</h4>
            <p>
              Track leads, automate follow-ups, and visualize pipelines with customizable sales workflows
            </p>
          </div>
        </div>

        <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="feature-box green">
            <i class="bi bi-whatsapp"></i>
            <h4>WhatsApp Automation</h4>
            <p>
              Run bulk campaigns, transaction alerts, and support chats via official Meta integration
            </p>
          </div>
        </div>

        <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
          <div class="feature-box blue">
            <i class="bi bi-cash-coin"></i>
            <h4>Smart Billing</h4>
            <p>
              Generate GST invoices, accept 15+ payment methods, and reconcile automatically
            </p>
          </div>
        </div>

        <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
          <div class="feature-box red">
            <i class="bi bi-graph-up-arrow"></i>
            <h4>AI Analytics</h4>
            <p>
              Predict trends, identify opportunities, and generate reports with one click
            </p>
          </div>
        </div>

        <!-- Additional Cards -->
        <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="feature-box purple">
            <i class="bi bi-robot"></i>
            <h4>HR & Payroll</h4>
            <p>
              Automate attendance tracking, salary processing, and compliance filings
            </p>
          </div>
        </div>

        <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="feature-box teal">
            <i class="bi bi-cart-check"></i>
            <h4>E-commerce</h4>
            <p>
              Launch online stores with inventory sync, payment gateways, and order management
            </p>
          </div>
        </div>

        <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
          <div class="feature-box pink">
            <i class="bi bi-gear"></i>
            <h4>Workflow Engine</h4>
            <p>
              Build custom automations with drag-and-drop interface and conditional logic
            </p>
          </div>
        </div>

        <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
          <div class="feature-box indigo">
            <i class="bi bi-phone"></i>
            <h4>Mobile Apps</h4>
            <p>
              Custom-branded apps for field teams, managers, and customers
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features with Mockup -->
  <section id="features-2" class="features-2 section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row align-items-center">
        <div class="col-lg-4">
          <div
            class="feature-item text-end mb-5"
            data-aos="fade-right"
            data-aos-delay="200"
          >
            <div class="d-flex align-items-center justify-content-end gap-4">
              <div class="feature-content">
                <h3>Role-Based Access</h3>
                <p>
                  Control data visibility with granular permissions for teams and departments
                </p>
              </div>
              <div class="feature-icon flex-shrink-0">
                <i class="bi bi-shield-lock"></i>
              </div>
            </div>
          </div>

          <div
            class="feature-item text-end mb-5"
            data-aos="fade-right"
            data-aos-delay="300"
          >
            <div class="d-flex align-items-center justify-content-end gap-4">
              <div class="feature-content">
                <h3>Custom Fields</h3>
                <p>
                  Track unique data points specific to your industry or workflow
                </p>
              </div>
              <div class="feature-icon flex-shrink-0">
                <i class="bi bi-pencil-square"></i>
              </div>
            </div>
          </div>

          <div
            class="feature-item text-end"
            data-aos="fade-right"
            data-aos-delay="400"
          >
            <div class="d-flex align-items-center justify-content-end gap-4">
              <div class="feature-content">
                <h3>Bulk Actions</h3>
                <p>
                  Update records, send campaigns, and process data at scale
                </p>
              </div>
              <div class="feature-icon flex-shrink-0">
                <i class="bi bi-collection"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="text-center">
            <img
              src="assets/img/2.png"
              alt="RX Square Unified Dashboard"
              class="img-fluid"
            />
          </div>
        </div>

        <div class="col-lg-4">
          <div
            class="feature-item mb-5"
            data-aos="fade-left"
            data-aos-delay="200"
          >
            <div class="d-flex align-items-center gap-4">
              <div class="feature-icon flex-shrink-0">
                <i class="bi bi-lightning-charge"></i>
              </div>
              <div class="feature-content">
                <h3>7-Day Deployment</h3>
                <p>
                  Go live faster than traditional ERP systems with pre-configured templates
                </p>
              </div>
            </div>
          </div>

          <div
            class="feature-item mb-5"
            data-aos="fade-left"
            data-aos-delay="300"
          >
            <div class="d-flex align-items-center gap-4">
              <div class="feature-icon flex-shrink-0">
                <i class="bi bi-arrow-repeat"></i>
              </div>
              <div class="feature-content">
                <h3>Pay-As-You-Grow</h3>
                <p>
                  Start with 1-2 modules, add more as your business scales
                </p>
              </div>
            </div>
          </div>

          <div class="feature-item" data-aos="fade-left" data-aos-delay="400">
            <div class="d-flex align-items-center gap-4">
              <div class="feature-icon flex-shrink-0">
                <i class="bi bi-headset"></i>
              </div>
              <div class="feature-content">
                <h3>24/7 Support</h3>
                <p>
                  Dedicated helpdesk with average 15-minute response time
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section id="call-to-action" class="call-to-action section bg-light">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center text-center">
        <div class="col-lg-10">
          <h2 class="display-5 mb-4">Join 100+ Businesses Growing with RX Square</h2>
          <p class="lead mb-5">
            Reduce operational costs by 40% while improving customer experience with our all-in-one platform
          </p>
          <div class="d-flex justify-content-center gap-3">
            <a href="/bookDemo" class="btn btn-primary btn-lg px-5 py-3">
              <i class="bi bi-calendar-check me-2"></i> Book Free Demo
            </a>
            <a href="/pricing" class="btn btn-outline-primary btn-lg px-5 py-3">
              <i class="bi bi-credit-card me-2"></i> See Pricing
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section id="testimonials" class="testimonials section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Trusted by Indian Businesses</h2>
      <p>
        Hear from companies scaling efficiently with our platform
      </p>
    </div>

    <div class="container">
      <div class="row g-5">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="testimonial-item">
            <div class="stars mb-3">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i
              ><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i
              ><i class="bi bi-star-fill"></i>
            </div>
            <p class="mb-4">
              "RX Square replaced 4 different tools we were using. Our sales team now closes deals 30% faster with the integrated CRM and WhatsApp automation."
            </p>
            <div class="profile d-flex align-items-center">
              <img
                src="assets/img/testimonials/testimonials-1.jpg"
                class="testimonial-img"
                alt="Manufacturing Executive"
              />
              <div>
                <h5 class="mb-0">Rajesh Kumar</h5>
                <span>Director, Precision Components</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="testimonial-item">
            <div class="stars mb-3">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i
              ><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i
              ><i class="bi bi-star-fill"></i>
            </div>
            <p class="mb-4">
              "The billing to accounts reconciliation used to take 3 days monthly. With RX Square, it happens automatically. Worth every rupee!"
            </p>
            <div class="profile d-flex align-items-center">
              <img
                src="assets/img/testimonials/testimonials-2.jpg"
                class="testimonial-img"
                alt="Retail Owner"
              />
              <div>
                <h5 class="mb-0">Priya Nair</h5>
                <span>Owner, Urban Fashion Stores</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="testimonial-item">
            <div class="stars mb-3">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i
              ><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i
              ><i class="bi bi-star-fill"></i>
            </div>
            <p class="mb-4">
              "Our support ticket resolution time dropped by 65% after implementing the chatbot and workflow automations. Game changer for service businesses."
            </p>
            <div class="profile d-flex align-items-center">
              <img
                src="assets/img/testimonials/testimonials-3.jpg"
                class="testimonial-img"
                alt="Service Company CEO"
              />
              <div>
                <h5 class="mb-0">Vikram Singh</h5>
                <span>CEO, TechServe Solutions</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Platform Capabilities -->
  <section id="rx-square" class="services section bg-light">
    <div class="container section-title" data-aos="fade-up">
      <h2>All-in-One Business Platform</h2>
      <p>
        Everything you need to run and grow your business - integrated and affordable
      </p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row g-4">
        <div class="col-lg-4 col-md-6">
          <div class="service-card">
            <div class="icon">
              <i class="bi bi-diagram-3"></i>
            </div>
            <h3>Dynamic CRM</h3>
            <p>
              Custom pipelines, lead scoring, and customer lifecycle management
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="service-card">
            <div class="icon">
              <i class="bi bi-whatsapp"></i>
            </div>
            <h3>WhatsApp Automation</h3>
            <p>
              Bulk campaigns, notifications, and 2-way conversations
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="service-card">
            <div class="icon">
              <i class="bi bi-receipt-cutoff"></i>
            </div>
            <h3>Smart Billing</h3>
            <p>
              GST-compliant invoices with automated payment tracking
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="service-card">
            <div class="icon">
              <i class="bi bi-cash-stack"></i>
            </div>
            <h3>Accounts & Finance</h3>
            <p>
              Real-time P&L, expense management, and financial reporting
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="service-card">
            <div class="icon">
              <i class="bi bi-people"></i>
            </div>
            <h3>HR & Payroll</h3>
            <p>
              Attendance tracking, salary processing, and statutory compliance
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="service-card">
            <div class="icon">
              <i class="bi bi-cart"></i>
            </div>
            <h3>E-commerce</h3>
            <p>
              Online stores with inventory sync and order management
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="service-card">
            <div class="icon">
              <i class="bi bi-gear"></i>
            </div>
            <h3>Workflow Automation</h3>
            <p>
              Custom rules for approvals, reminders, and data routing
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="service-card">
            <div class="icon">
              <i class="bi bi-phone"></i>
            </div>
            <h3>Mobile Apps</h3>
            <p>
              Custom-branded applications for teams and customers
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="service-card">
            <div class="icon">
              <i class="bi bi-graph-up"></i>
            </div>
            <h3>AI Analytics</h3>
            <p>
              Predictive insights and customizable dashboards
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
const activeTab = ref("features-tab-1");

function setActiveTab(tab) {
  activeTab.value = tab;
}
</script>

<style scoped>
/* Updated Color Scheme */
:root {
  --accent-color: #fab415;
  --heading-color: #1e293b;
  --text-color: #475569;
}

.features .nav-tabs {
  background-color: #f1f5f9;
  border-radius: 12px;
  padding: 8px;
}

.features .nav-link {
  padding: 12px 30px;
  border-radius: 8px;
  transition: all 0.3s ease;
}

.features .nav-link h4 {
  font-weight: 600;
  font-size: 16px;
}

.features .nav-link.active {
  background: var(--accent-color);
  box-shadow: 0 4px 6px rgba(235, 205, 37, 0.3);
}

.features .tab-pane h3 {
  font-size: 2.2rem;
  border-bottom: 3px solid var(--accent-color);
  padding-bottom: 15px;
}

.features .tab-pane ul li {
  padding-top: 12px;
  font-size: 1.1rem;
}

.features .tab-pane ul i {
  color: var(--accent-color);
}

/* Feature Cards */
.features-cards .feature-box {
  border-radius: 12px;
  padding: 2rem 1.5rem;
  height: 100%;
  box-shadow: 0 4px 20px rgba(0,0,0,0.08);
  transition: transform 0.3s ease;
  border: none;
}

.features-cards .feature-box:hover {
  transform: translateY(-10px);
}

.feature-box i {
  font-size: 2.5rem;
  margin-bottom: 1.2rem;
}

.feature-box.orange { background: linear-gradient(135deg, #fff7ed 0%, #ffedd5 100%); }
.feature-box.blue { background: linear-gradient(135deg, #dbeafe 0%, #d0e2ff 100%); }
.feature-box.green { background: linear-gradient(135deg, #dcfce7 0%, #d1fae5 100%); }
.feature-box.red { background: linear-gradient(135deg, #fee2e2 0%, #ffe4e6 100%); }
.feature-box.purple { background: linear-gradient(135deg, #f3e8ff 0%, #ede9fe 100%); }
.feature-box.teal { background: linear-gradient(135deg, #ccfbf1 0%, #cffafe 100%); }
.feature-box.pink { background: linear-gradient(135deg, #fce7f3 0%, #ffe4e6 100%); }
.feature-box.indigo { background: linear-gradient(135deg, #e0e7ff 0%, #e0f2fe 100%); }

/* Features-2 Section */
.features-2 .feature-item {
  padding: 1.5rem;
  border-radius: 12px;
  background: white;
  box-shadow: 0 4px 12px rgba(0,0,0,0.05);
  margin-bottom: 1.5rem;
}

.features-2 .feature-icon {
  width: 60px;
  height: 60px;
  background: #dbeafe;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.features-2 .feature-icon i {
  font-size: 1.8rem;
  color: var(--accent-color);
}

.phone-mockup img {
  /* border-radius: 24px; */
  /* box-shadow: 0 25px 50px -12px rgba(0,0,0,0.25); */
}

/* Testimonials */
.testimonials .testimonial-item {
  background: white;
  border-radius: 16px;
  padding: 2rem;
  box-shadow: 0 4px 20px rgba(0,0,0,0.05);
  height: 100%;
}

.testimonials .profile {
  margin-top: 1.5rem;
}

/* .testimonial-img {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  object-fit: cover;
  margin-right: 15px;
} */

/* Services */
.services .service-card {
  background: white;
  border-radius: 16px;
  padding: 2rem;
  text-align: center;
  box-shadow: 0 4px 12px rgba(0,0,0,0.05);
  height: 100%;
  transition: transform 0.3s ease;
}

.services .service-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

.services .service-card .icon {
  width: 70px;
  height: 70px;
  background: #dbeafe;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 1.5rem;
}

.services .service-card .icon i {
  font-size: 2rem;
  color: var(--accent-color);
}

/* CTA Section */
.call-to-action {
  background: linear-gradient(135deg, #fab415 0%, #fab415 100%);
  color: white;
  border-radius: 24px;
  overflow: hidden;
  position: relative;
  margin: 4rem auto;
  max-width: 1200px;
}

.call-to-action h2 {
  color: white;
}

.call-to-action .btn-primary {
  background: white;
  color: #fab415;
  font-weight: 600;
}

.call-to-action .btn-outline-primary {
  border-color: white;
  color: white;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
  .features .nav-link {
    padding: 10px 15px;
    margin-bottom: 5px;
  }
  
  .features .nav-link h4 {
    font-size: 14px;
  }
  
  .features-2 .feature-item {
    text-align: center !important;
    flex-direction: column;
  }
  
  .features-2 .feature-icon {
    margin: 0 auto 15px;
  }
}
</style>