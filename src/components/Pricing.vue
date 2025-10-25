<template>
  <section id="pricing" class="pricing section light-background">
    <div class="container section-title mt-8" data-aos="fade-up">
      <h2>Simple, Transparent Pricing</h2>
      <p>Choose the perfect plan for your business needs</p>
      
      
    </div>

    <!-- Category Navigation -->
    <div class="category-nav-container container-xl" data-aos="fade-up" data-aos-delay="100">
      <div class="category-nav">
        <div 
          v-for="(category, index) in categories" 
          :key="index"
          class="nav-item"
          :class="{ active: activeCategory === category.id }"
          @click="scrollToCategory(category.id)"
        >
          <div class="nav-icon">
            <i :class="category.icon"></i>
          </div>
          <span class="nav-title">{{ category.title }}</span>
        </div>
      </div>
    </div>


    <!-- Pricing Toggle -->
      <div class="pricing-toggle-modern my-4 d-flex justify-content-center align-items-center">
        <div class="toggle-pill">
          <span
            :class="['toggle-label', { active: !isYearly }]"
            @click="isYearly = false"
          >
            Monthly
          </span>
          <span
            :class="['toggle-label', { active: isYearly }]"
            @click="isYearly = true"
          >
            Yearly
          </span>
          <span
            class="toggle-slider"
            :style="{ left: isYearly ? '50%' : '0%' }"
          ></span>
        </div>
        <span v-if="isYearly" class="discount-badge">Save 17%</span>
      </div>

    <!-- Pricing Sections -->
    <div class="pricing-sections">
      <div 
        v-for="(category, cidx) in categories" 
        :key="cidx"
        :id="'category-' + category.id"
        class="category-section"
      >
        <div class="container mb-10" :data-aos="'fade-up'" :data-aos-delay="category.delay">
          <div class="category-header mb-6 text-center">
            <div class="icon-box mx-auto">
              <i :class="category.icon"></i>
            </div>
            <h3 class="text-2xl font-bold">{{ category.title }}</h3>
            <p class="text-gray-600">{{ category.desc }}</p>
          </div>
          <div class="row g-4 justify-content-center">
            <div class="col-lg-4" v-for="(plan, index) in category.plans" :key="index">
              <div
                class="pricing-card"
                :class="{ 'highlight-popular': plan.popular }"
              >
                <div v-if="plan.popular" class="popular-badge-adv">
                  <i class="bi bi-star-fill"></i>
                  {{ category.badge || 'Most Popular' }}
                </div>
                <h3>{{ plan.name }}</h3>
                <div class="price">
                  <span v-if="plan.price !== 'Custom Pricing'">
                    <span class="currency">₹</span>
                    <span class="amount">
                      {{ getPlanPrice(plan) }}
                    </span>
                    <span class="period">/ {{ isYearly ? 'year' : 'month' }}</span>
                  </span>
                  <span v-else>{{ plan.price }}</span>
                </div>
                <div v-if="plan.price !== 'Custom Pricing' && isYearly" class="save-text">
                  Save ₹{{ (plan.price * 2).toLocaleString() }} /yr (17%)
                </div>
                <ul class="features-list">
                  <li v-for="(feature, idx) in plan.features" :key="idx">
                    <i class="bi bi-check-circle-fill"></i> {{ feature }}
                  </li>
                </ul>
                <NuxtLink
                to="/get-started"
                >
                <button
                  class="btn"
                  :class="plan.popular ? 'btn-popular' : 'btn-outline-primary'"
                >
                  {{ plan.price === 'Custom Pricing' ? 'Contact Sales' : 'Get Started' }}
                </button>
                </NuxtLink>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      isYearly: false,
      activeCategory: 'billing',
      categories: [
        {
          id: 'billing',
          title: "Billing Software",
          desc: "Automate invoicing, payments and GST compliance",
          icon: "bi bi-receipt",
          badge: "Most Popular",
          delay: 100,
          plans: [
            {
              name: "Basic Plan",
              price: 499,
              features: [
                "Unlimited users",
                "GST-compliant invoices",
                "Multi-payment support",
                "Basic inventory tracking",
                "Sales reports"
              ],
              popular: false
            },
            {
              name: "Standard Plan",
              price: 999,
              features: [
                "All Basic features",
                "Advanced inventory",
                "Purchase orders",
                "Expense tracking",
                "Barcode support",
                "Multi-branch access"
              ],
              popular: true
            },
            {
              name: "Enterprise Plan",
              price: "Custom Pricing",
              features: [
                "All Standard features",
                "Custom workflows",
                "API integrations",
                "Dedicated account manager",
                "Priority support",
                "Custom reporting"
              ],
              popular: false
            }
          ]
        },
        {
          id: 'crm',
          title: "CRM Software",
          desc: "Manage leads, deals and customer relationships",
          icon: "bi bi-people-fill",
          badge: "Most Popular",
          delay: 150,
          plans: [
            {
              name: "Basic Plan",
              price: 999,
              features: [
                "Unlimited users",
                "Contact management",
                "Lead tracking",
                "Deal pipeline",
                "Task management",
                "Basic reporting"
              ],
              popular: false
            },
            {
              name: "Standard Plan",
              price: 1999,
              features: [
                "All Basic features",
                "Email integration",
                "Advanced analytics",
                "Custom fields",
                "Automated workflows",
                "Sales forecasting"
              ],
              popular: true
            },
            {
              name: "Enterprise Plan",
              price: "Custom Pricing",
              features: [
                "All Standard features",
                "Custom modules",
                "API integrations",
                "AI-powered insights",
                "Dedicated training",
                "Premium support"
              ],
              popular: false
            }
          ]
        },
        {
          id: 'whatsapp',
          title: "WhatsApp Automation",
          desc: "Bulk messaging, notifications and chatbot",
          icon: "bi bi-whatsapp",
          badge: "Most Popular",
          delay: 200,
          plans: [
            {
              name: "Basic Plan",
              price: 499,
              features: [
                "Unlimited users",
                "500 messages/month",
                "Template messaging",
                "Basic chatbot",
                "Contact management",
                "Notification alerts"
              ],
              popular: false
            },
            {
              name: "Standard Plan",
              price: 1499,
              features: [
                "All Basic features",
                "5000 messages/month",
                "Advanced chatbot",
                "Bulk campaigns",
                "Message analytics",
                "Two-way communication"
              ],
              popular: true
            },
            {
              name: "Enterprise Plan",
              price: "Custom Pricing",
              features: [
                "All Standard features",
                "Unlimited messages",
                "Custom chatbot flows",
                "API integrations",
                "Dedicated number",
                "Priority delivery"
              ],
              popular: false
            }
          ]
        },
        {
          id: 'attendance',
          title: "Attendance Software",
          desc: "Track employee time and attendance",
          icon: "bi bi-calendar-check",
          badge: "Most Popular",
          delay: 250,
          plans: [
            {
              name: "Basic Plan",
              price: 499,
              features: [
                "Unlimited users",
                "Check-in/check-out",
                "Shift management",
                "Leave requests",
                "Basic reporting",
                "Mobile app access"
              ],
              popular: false
            },
            {
              name: "Standard Plan",
              price: 999,
              features: [
                "All Basic features",
                "Biometric integration",
                "Overtime calculation",
                "Geo-fencing",
                "Advanced analytics",
                "Payroll integration"
              ],
              popular: true
            },
            {
              name: "Enterprise Plan",
              price: "Custom Pricing",
              features: [
                "All Standard features",
                "Custom policy rules",
                "Facial recognition",
                "Real-time dashboards",
                "API integrations",
                "Dedicated support"
              ],
              popular: false
            }
          ]
        },
        {
          id: 'hr',
          title: "HR Software",
          desc: "Manage HR processes and payroll",
          icon: "bi bi-person-badge",
          badge: "Most Popular",
          delay: 300,
          plans: [
            {
              name: "Basic Plan",
              price: 499,
              features: [
                "Unlimited users",
                "Employee database",
                "Leave management",
                "Document storage",
                "Compliance templates",
                "Basic reporting"
              ],
              popular: false
            },
            {
              name: "Standard Plan",
              price: 999,
              features: [
                "All Basic features",
                "Payroll processing",
                "Performance reviews",
                "Recruitment module",
                "Training management",
                "Advanced analytics"
              ],
              popular: true
            },
            {
              name: "Enterprise Plan",
              price: "Custom Pricing",
              features: [
                "All Standard features",
                "Custom workflows",
                "Succession planning",
                "360-degree feedback",
                "API integrations",
                "Dedicated HR consultant"
              ],
              popular: false
            }
          ]
        },
        {
          id: 'accounts',
          title: "Accounts Software",
          desc: "Financial management and reporting",
          icon: "bi bi-cash-stack",
          badge: "Most Popular",
          delay: 350,
          plans: [
            {
              name: "Basic Plan",
              price: 499,
              features: [
                "Unlimited users",
                "General ledger",
                "Accounts payable",
                "Accounts receivable",
                "Basic financial reports",
                "GST compliance"
              ],
              popular: false
            },
            {
              name: "Standard Plan",
              price: 999,
              features: [
                "All Basic features",
                "Bank reconciliation",
                "Budgeting",
                "Multi-currency",
                "Advanced reporting",
                "Tax computation"
              ],
              popular: true
            },
            {
              name: "Enterprise Plan",
              price: "Custom Pricing",
              features: [
                "All Standard features",
                "Custom financial models",
                "Consolidated reporting",
                "Audit trails",
                "API integrations",
                "Dedicated accountant support"
              ],
              popular: false
            }
          ]
        },
        {
          id: 'integrated',
          title: "All Integrated Software",
          desc: "Complete business management suite",
          icon: "bi bi-puzzle",
          badge: "Best Value",
          delay: 400,
          plans: [
            {
              name: "Basic Plan",
              price: 2999,
              features: [
                "Unlimited users",
                "Billing + CRM + WhatsApp",
                "HR + Accounts modules",
                "Centralized dashboard",
                "Basic automation",
                "Standard support"
              ],
              popular: false
            },
            {
              name: "Standard Plan",
              price: 5999,
              features: [
                "All Basic features",
                "Full module access",
                "Advanced automation",
                "Custom workflows",
                "API integrations",
                "Priority support"
              ],
              popular: true
            },
            {
              name: "Enterprise Plan",
              price: "Custom Pricing",
              features: [
                "All Standard features",
                "Custom development",
                "Dedicated server",
                "White-label solution",
                "24/7 premium support",
                "Personalized training"
              ],
              popular: false
            }
          ]
        }
      ]
    }
  },
  mounted() {
    window.addEventListener('scroll', this.handleScroll);
    // Scroll to first category on load
    this.$nextTick(() => {
      this.scrollToCategory('billing');
    });
  },
  beforeUnmount() {
    window.removeEventListener('scroll', this.handleScroll);
  },
  methods: {
    getPlanPrice(plan) {
      if (plan.price === "Custom Pricing") return plan.price;
      return this.isYearly
        ? (plan.price * 10).toLocaleString()
        : plan.price.toLocaleString();
    },
    
    scrollToCategory(categoryId) {
      this.activeCategory = categoryId;
      const element = document.getElementById(`category-${categoryId}`);
      if (element) {
        element.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    },
    
    handleScroll() {
      const sections = document.querySelectorAll('.category-section');
      const scrollPosition = window.scrollY + 150;
      
      sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.offsetHeight;
        const sectionId = section.getAttribute('id').replace('category-', '');
        
        if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
          this.activeCategory = sectionId;
        }
      });
    }
  }
}
</script>

<style scoped>
.pricing {
  padding: 5rem 0;
}

/* Category Navigation */
.category-nav-container {
  border-radius: 50px;
  /* padding: 5px 25px; */
  position: sticky;
  top: 80px;
  z-index: 100;
  background: white;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
  /* padding: 0.5rem 0; */
  margin-bottom: 2rem;
}

.category-nav {
  display: flex;
  justify-content: center;
  overflow-x: auto;
  padding: 0.5rem 1rem;
  gap: 0.5rem;
}

.nav-item {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 0.5rem 1.2rem;
  border-radius: 12px;
  cursor: pointer;
  min-width: 100px;
  transition: all 0.3s ease;
  border: 1px solid transparent;
}

.nav-item.active {
  background: #fff7e0;
  border-color: #fab415;
  box-shadow: 0 4px 12px rgba(250, 180, 21, 0.1);
}

.nav-icon {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: #fff7e0;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 0.5rem;
}

.nav-icon i {
  font-size: 1.5rem;
  color: #fab415;
}

.nav-title {
  font-size: 0.85rem;
  font-weight: 600;
  text-align: center;
  color: #4a5568;
}

.nav-item.active .nav-title {
  color: #1e293b;
  font-weight: 700;
}

/* Category Section Styling */
.category-header {
  margin-bottom: 3rem;
}

.category-header .icon-box {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  background: #fff7e0;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 1.5rem;
}

.category-header .icon-box i {
  font-size: 2rem;
  color: #fab415;
}

.category-header h3 {
  font-size: 1.75rem;
  margin-bottom: 0.5rem;
}

.pricing-card {
  background: white;
  border-radius: 16px;
  padding: 2.2rem 2rem 2rem 2rem;
  height: 100%;
  position: relative;
  border: 1.5px solid #fff7e0;
  transition: box-shadow 0.3s, border 0.3s, transform 0.3s;
  display: flex;
  flex-direction: column;
  z-index: 1;
}

.pricing-card.highlight-popular {
  border: 2.5px solid #fab415;
  background: linear-gradient(120deg, #fffbe7 0%, #fff 100%);
  transform: scale(1.045);
  z-index: 2;
}

.popular-badge-adv {
  position: absolute;
  top: -18px;
  right: 20px;
  background: linear-gradient(90deg, #fab415 0%, #fad47a 100%);
  color: #fff;
  padding: 7px 22px 7px 16px;
  border-radius: 22px;
  font-weight: 700;
  font-size: 1rem;
  box-shadow: 0 4px 16px rgba(250,180,21,0.18);
  display: flex;
  align-items: center;
  gap: 0.5rem;
  letter-spacing: 0.5px;
}

.popular-badge-adv i {
  color: #fff;
  font-size: 1.1rem;
  margin-right: 4px;
}

.pricing-card h3 {
  font-size: 1.5rem;
  font-weight: 700;
  margin-bottom: 1rem;
}

.price {
  margin-bottom: 1.2rem;
}

.currency {
  font-size: 1.5rem;
  vertical-align: super;
  margin-right: 2px;
  color: #fab415;
}

.amount {
  font-size: 2.5rem;
  font-weight: 800;
  color: #1e293b;
}

.period {
  font-size: 1rem;
  color: #64748b;
}

.save-text {
  font-size: 0.98rem;
  color: #fab415;
  font-weight: 700;
  margin-bottom: 0.7rem;
  background: #fff7e0;
  border-radius: 6px;
  padding: 0.15rem 0.7rem;
  display: inline-block;
}

.features-list {
  list-style: none;
  padding: 0;
  margin-bottom: 2rem;
  flex-grow: 1;
}

.features-list li {
  padding: 0.5rem 0;
  display: flex;
  align-items: flex-start;
}

.features-list i {
  color: #10b981;
  margin-right: 10px;
  font-size: 1.2rem;
  flex-shrink: 0;
  margin-top: 3px;
}

.btn {
  width: 100%;
  padding: 0.75rem 1.5rem;
  border-radius: 12px;
  font-weight: 700;
  font-size: 1.08rem;
  transition: all 0.3s ease;
  border: 2px solid;
  margin-top: auto;
}

.btn-primary {
  background: #2563eb;
  color: white;
  border-color: #2563eb;
}

.btn-primary:hover {
  background: #1d4ed8;
  transform: translateY(-3px);
  box-shadow: 0 10px 20px rgba(37, 99, 235, 0.3);
}

.btn-popular {
  background: linear-gradient(90deg, #fab415 0%, #fad47a 100%);
  color: #fff;
  border: none;
  font-weight: 800;
  font-size: 1.13rem;
  border-radius: 12px;
  box-shadow: 0 4px 16px rgba(250,180,21,0.13);
  transition: background 0.2s, color 0.2s, box-shadow 0.2s, transform 0.2s;
}

.btn-popular:hover, .btn-popular:focus {
  background: linear-gradient(90deg, #fab415 0%, #fad47a 100%);
  color: #fff;
  transform: translateY(-2px) scale(1.03);
  box-shadow: 0 8px 24px rgba(250,180,21,0.18);
}

.btn-outline-primary {
  background: transparent;
  color: #fab415;
  border-color: #fab415;
}
.btn-outline-primary:hover, .btn-outline-primary:focus {
  background: #fff7e0;
  color: #fab415;
  transform: translateY(-2px);
}

/* Toggle Switch & Discount Badge */
.pricing-toggle-modern {
  font-size: 1.1rem;
  font-weight: 600;
  margin-top: 1.5rem;
  gap: 1rem;
}

.toggle-pill {
  position: relative;
  display: flex;
  width: 240px;
  height: 48px;
  background: #f3f3f3;
  border-radius: 30px;
  box-shadow: 0 2px 12px rgba(250,180,21,0.07);
  overflow: hidden;
  align-items: center;
  cursor: pointer;
}

.toggle-slider {
  position: absolute;
  top: 4px;
  left: 0;
  width: 50%;
  height: 40px;
  background: linear-gradient(90deg, #fab415 0%, #fad47a 100%);
  border-radius: 24px;
  transition: left 0.3s cubic-bezier(.4,2,.6,1);
  z-index: 1;
  box-shadow: 0 2px 8px rgba(250,180,21,0.13);
  border: 1.5px solid #fff7e0;
}

.toggle-label {
  flex: 1;
  text-align: center;
  z-index: 2;
  line-height: 48px;
  color: #b1b1b1;
  font-weight: 600;
  transition: color 0.2s;
  position: relative;
  user-select: none;
  font-size: 1.13rem;
  padding: 0 8px;
}

.toggle-label.active {
  color: #fff;
  font-weight: 800;
}

.discount-badge {
  background: linear-gradient(90deg, #fab415 0%, #fad47a 100%);
  color: #fff;
  font-size: 0.85rem;
  font-weight: 700;
  border-radius: 8px;
  padding: 0.15rem 0.7rem;
  margin-left: 0.5rem;
  vertical-align: middle;
  box-shadow: 0 2px 8px rgba(250,180,21,0.13);
}

@media (max-width: 991px) {
  .pricing-card {
    padding: 1.5rem 1rem 1.2rem 1rem;
  }
  .amount {
    font-size: 2rem;
  }
}

@media (max-width: 768px) {
  .pricing {
    padding: 2.5rem 0;
  }
  
  .category-nav {
    justify-content: flex-start;
    padding: 0.5rem;
  }
  
  .nav-item {
    min-width: 80px;
    padding: 0.5rem 0.8rem;
  }
  
  .nav-icon {
    width: 30px;
    height: 30px;
  }
  
  .nav-icon i {
    font-size: 1.2rem;
  }
  
  .nav-title {
    font-size: 0.75rem;
  }
  
  .category-header .icon-box {
    width: 50px;
    height: 50px;
  }
  
  .pricing-card {
    padding: 1.1rem 0.7rem 1.1rem 0.7rem;
  }
  
  .amount {
    font-size: 1.5rem;
  }
  
  .toggle-pill {
    width: 170px;
    height: 38px;
  }
  
  .toggle-slider {
    height: 30px;
    top: 4px;
    border-radius: 16px;
  }
  
  .toggle-label {
    font-size: 0.98rem;
    line-height: 38px;
    padding: 0 4px;
  }
}
</style>