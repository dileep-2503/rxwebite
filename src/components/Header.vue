<template>
  <header id="header" class="header">
    <div class="header-container">
      <!-- Logo -->
      <a href="/" class="logo">
        <div class="logo-text">RX Square</div>
      </a>

      <!-- Navigation Menu -->
      <nav
        id="navmenu"
        ref="navmenu"
        class="navmenu"
        :class="{ active: mobileNavActive }"
      >
        <ul>
          <li>
            <a href="/" @click="closeMobileNav">Home</a>
          </li>
          <li>
            <a href="/about" @click="closeMobileNav">About</a>
          </li>

          <!-- Products dropdown -->
          <li
            class="has-children product-menu"
            @mouseenter="openProductMenu"
            @mouseleave="closeProductMenu"
          >
            <a href="#" @click.prevent="toggleProductMenu">
              Products
              <i
                :class="productMenuActive ? 'bi bi-chevron-up' : 'bi bi-chevron-down'"
                class="ms-2 d-none d-xl-inline-block chevron-icon"
              ></i>
              <i
                class="bi bi-chevron-down d-xl-none chevron-icon"
                @click.stop="toggleProductMenu"
              ></i>
            </a>

            <!-- Full-width product dropdown -->
            <div
              class="product-dropdown"
              :class="{ active: productMenuActive }"
              ref="productDropdown"
              @mouseenter="keepProductMenuOpen"
              @mouseleave="closeProductMenu"
            >
              <div class="product-container">
                <!-- Left sidebar with product categories -->
                <div class="product-sidebar">
                  <div class="product-category">
                    <h4>Apps</h4>
                    <ul>
                      <li>Suites</li>
                      <li>Zoho One</li>
                      <li>Marketplace</li>
                      <li class="highlight">EXPLORE ALL PRODUCTS</li>
                    </ul>
                  </div>
                </div>

                <!-- Right content area with product details -->
                <div class="product-content">
                  <div class="product-section">
                    <h3>Sales</h3>
                    <div class="product-grid">
                      <div
                        class="product-card"
                        @mouseenter="setActiveProduct('crm')"
                        :class="{ active: activeProduct === 'crm' }"
                      >
                        <div class="product-icon">
                          <i class="bi bi-people"></i>
                        </div>
                        <div class="product-info">
                          <h4>CRM</h4>
                          <p>Comprehensive CRM platform for customer-facing teams.</p>
                        </div>
                      </div>

                      <div
                        class="product-card"
                        @mouseenter="setActiveProduct('forms')"
                        :class="{ active: activeProduct === 'forms' }"
                      >
                        <div class="product-icon">
                          <i class="bi bi-input-cursor-text"></i>
                        </div>
                        <div class="product-info">
                          <h4>Forms</h4>
                          <p>Build online forms for every business need.</p>
                        </div>
                      </div>

                      <div
                        class="product-card"
                        @mouseenter="setActiveProduct('bigin')"
                        :class="{ active: activeProduct === 'bigin' }"
                      >
                        <div class="product-icon">
                          <i class="bi bi-table"></i>
                        </div>
                        <div class="product-info">
                          <h4>Bigin</h4>
                          <p>Simple CRM for small businesses moving from spreadsheets.</p>
                        </div>
                      </div>

                      <div
                        class="product-card"
                        @mouseenter="setActiveProduct('routeiq')"
                        :class="{ active: activeProduct === 'routeiq' }"
                      >
                        <div class="product-icon">
                          <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="product-info">
                          <h4>RouteIQ</h4>
                          <p>Comprehensive sales map visualization and optimal route planning solution.</p>
                        </div>
                      </div>

                      <div
                        class="product-card"
                        @mouseenter="setActiveProduct('sign')"
                        :class="{ active: activeProduct === 'sign' }"
                      >
                        <div class="product-icon">
                          <i class="bi bi-pen"></i>
                        </div>
                        <div class="product-info">
                          <h4>Sign</h4>
                          <p>Digital signature app for businesses.</p>
                        </div>
                      </div>

                      <div
                        class="product-card"
                        @mouseenter="setActiveProduct('salesiq')"
                        :class="{ active: activeProduct === 'salesiq' }"
                      >
                        <div class="product-icon">
                          <i class="bi bi-chat-dots"></i>
                        </div>
                        <div class="product-info">
                          <h4>SalesIQ</h4>
                          <p>Live chat app to engage and convert website visitors.</p>
                        </div>
                      </div>

                      <div
                        class="product-card"
                        @mouseenter="setActiveProduct('pos')"
                        :class="{ active: activeProduct === 'pos' }"
                      >
                        <div class="product-icon">
                          <i class="bi bi-cash-coin"></i>
                        </div>
                        <div class="product-info">
                          <h4>POS</h4>
                          <p>Modern retail POS to sell better, manage your entire business, and join the digital revolution.</p>
                        </div>
                      </div>

                      <div
                        class="product-card"
                        @mouseenter="setActiveProduct('bookings')"
                        :class="{ active: activeProduct === 'bookings' }"
                      >
                        <div class="product-icon">
                          <i class="bi bi-calendar-check"></i>
                        </div>
                        <div class="product-info">
                          <h4>Bookings</h4>
                          <p>Appointment scheduling app for consultations with customers.</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Product details panel -->
                  <transition name="fade-slide">
                    <div class="product-details" v-if="activeProduct">
                      <div class="product-detail-content">
                        <div class="product-detail-header">
                          <div class="detail-icon">
                            <i :class="getProductIcon(activeProduct)"></i>
                          </div>
                          <div>
                            <h3>{{ getProductTitle(activeProduct) }}</h3>
                            <p class="detail-subtitle">{{ getProductSubtitle(activeProduct) }}</p>
                          </div>
                        </div>
                        <p class="detail-description">{{ getProductDescription(activeProduct) }}</p>
                        <div class="detail-actions">
                          <a href="#" class="btn-demo">Book a Demo</a>
                          <a href="#" class="btn-learn">Learn More</a>
                        </div>
                      </div>
                    </div>
                  </transition>

                  <!-- Additional product sections -->
                  <div class="product-section">
                    <h3>Thrive</h3>
                    <div class="product-grid">
                      <div class="product-card">
                        <div class="product-icon">
                          <i class="bi bi-award"></i>
                        </div>
                        <div class="product-info">
                          <h4>Loyalty Platform</h4>
                          <p>Reward, retain, and grow your customer base.</p>
                        </div>
                      </div>

                      <div class="product-card">
                        <div class="product-icon">
                          <i class="bi bi-puzzle"></i>
                        </div>
                        <div class="product-info">
                          <h4>CRM Plus</h4>
                          <p>Unified platform to deliver top-notch customer experience.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li>
            <a href="/services" @click="closeMobileNav">Services</a>
          </li>
          <li>
            <a href="/blog" @click="closeMobileNav">Blog</a>
          </li>
          <li>
            <a href="/careers" @click="closeMobileNav">Careers</a>
          </li>
          <li>
            <a href="/contact" @click="closeMobileNav">Contact</a>
          </li>

          <!-- Mobile Sign In Button -->
          <li class="mobile-signin d-xl-none" v-if="!isLoggedIn">
            <a href="#" class="btn-getstarted" @click.prevent="openSignInModal">Sign In</a>
          </li>
        </ul>
      </nav>

      <!-- Mobile Menu Toggle Icon -->
      <i
        class="mobile-nav-toggle d-xl-none"
        :class="mobileNavActive ? 'bi-x' : 'bi-list'"
        @click="toggleMobileNav"
      ></i>

      <!-- Desktop Sign In Button -->
      <a
        v-if="!isLoggedIn"
        class="btn-getstarted d-none d-xl-inline-block"
        href="#"
        @click.prevent="openSignInModal"
      >Sign In</a>

      <!-- Overlay for mobile menu -->
      <div
        class="mobile-menu-overlay"
        :class="{ active: mobileNavActive }"
        @click="closeMobileNav"
      ></div>
    </div>
  </header>
</template>

<script setup lang="ts">
import { ref, onMounted } from "vue";

const isLoggedIn = ref(false);
const mobileNavActive = ref(false);
const productMenuActive = ref(false);
const activeProduct = ref<string | null>(null);

const toggleMobileNav = () => {
  mobileNavActive.value = !mobileNavActive.value;
  document.body.style.overflow = mobileNavActive.value ? "hidden" : "";
  if (!mobileNavActive.value) productMenuActive.value = false;
};

const closeMobileNav = () => {
  mobileNavActive.value = false;
  document.body.style.overflow = "";
  productMenuActive.value = false;
};

const openSignInModal = () => {
  console.log("Open sign in modal");
};

const openProductMenu = () => {
  productMenuActive.value = true;
};

const closeProductMenu = () => {
  productMenuActive.value = false;
  activeProduct.value = null;
};

const keepProductMenuOpen = () => {
  productMenuActive.value = true;
};

const toggleProductMenu = () => {
  productMenuActive.value = !productMenuActive.value;
  if (!productMenuActive.value) {
    activeProduct.value = null;
  }
};

const setActiveProduct = (product: string) => {
  activeProduct.value = product;
};

const getProductIcon = (product: string): string => {
  const icons: Record<string, string> = {
    crm: 'bi bi-people',
    forms: 'bi bi-input-cursor-text',
    bigin: 'bi bi-table',
    routeiq: 'bi bi-geo-alt',
    sign: 'bi bi-pen',
    salesiq: 'bi bi-chat-dots',
    pos: 'bi bi-cash-coin',
    bookings: 'bi bi-calendar-check'
  };
  return icons[product] || 'bi bi-app';
};

const getProductTitle = (product: string): string => {
  const titles: Record<string, string> = {
    crm: 'CRM',
    forms: 'Forms',
    bigin: 'Bigin',
    routeiq: 'RouteIQ',
    sign: 'Sign',
    salesiq: 'SalesIQ',
    pos: 'POS',
    bookings: 'Bookings'
  };
  return titles[product] || '';
};

const getProductSubtitle = (product: string): string => {
  const subtitles: Record<string, string> = {
    crm: 'Comprehensive CRM platform for customer-facing teams',
    forms: 'Build online forms for every business need',
    bigin: 'Simple CRM for small businesses moving from spreadsheets',
    routeiq: 'Sales map visualization and route planning solution',
    sign: 'Digital signature app for businesses',
    salesiq: 'Live chat app to engage and convert website visitors',
    pos: 'Modern retail point-of-sale system',
    bookings: 'Appointment scheduling app for consultations'
  };
  return subtitles[product] || '';
};

const getProductDescription = (product: string): string => {
  const descriptions: Record<string, string> = {
    crm: 'Our CRM solution helps you manage customer relationships, track sales opportunities, and streamline your sales process with powerful automation and analytics.',
    forms: 'Create custom forms for lead generation, surveys, feedback collection, and more with our intuitive drag-and-drop form builder.',
    bigin: 'Bigin provides an easy transition from spreadsheets to a proper CRM system, designed specifically for small businesses with straightforward needs.',
    routeiq: 'Optimize your field sales team\'s routes to save time and fuel while maximizing customer visits with intelligent route planning.',
    sign: 'Securely sign and send documents electronically with our legally binding digital signature solution that integrates with your existing workflows.',
    salesiq: 'Connect with website visitors in real-time, qualify leads, and provide instant support to boost conversions and customer satisfaction.',
    pos: 'Streamline your retail operations with our comprehensive point-of-sale system that handles inventory, payments, and customer management.',
    bookings: 'Allow customers to book appointments online 24/7, sync with your calendar, and reduce no-shows with automated reminders.'
  };
  return descriptions[product] || '';
};

onMounted(() => {
  isLoggedIn.value = !!localStorage.getItem("rx_square_web_token");
});
</script>

<style scoped>
:root {
  --accent-color: #ff6b35;
  --surface-color: #ffffff;
  --text-color: #333333;
  --heading-color: #1a1a1a;
  --border-color: #e5e7eb;
  --hover-bg: #f9fafb;
}

.header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  padding: 20px 0;
  z-index: 997;
  background: rgba(255, 255, 255, 0.95);
  backdrop-filter: blur(10px);
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
  background: var(--surface-color);
  border-radius: 50px;
  transition: all 0.5s;
}

.header-container {
  max-width: 1400px;
  margin: 0 auto;
  padding: 0 24px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.logo {
  display: flex;
  align-items: center;
  text-decoration: none;
}

.logo-text {
  font-size: 24px;
  font-weight: 700;
  color: var(--accent-color);
  transition: transform 0.3s ease;
}

.logo:hover .logo-text {
  transform: scale(1.05);
}

.navmenu ul {
  display: flex;
  margin: 0;
  padding: 0;
  list-style: none;
  gap: 8px;
}

.navmenu li {
  position: relative;
}

.navmenu a {
  color: var(--text-color);
  font-weight: 500;
  font-size: 15px;
  padding: 10px 16px;
  text-decoration: none;
  transition: color 0.2s ease;
  display: inline-flex;
  align-items: center;
  border-radius: 6px;
}

.navmenu a:hover {
  color: var(--accent-color);
  background: var(--hover-bg);
}

.chevron-icon {
  font-size: 12px;
  transition: transform 0.2s ease;
}

.product-menu.active .chevron-icon {
  transform: rotate(180deg);
}

.btn-getstarted {
  background: var(--accent-color);
  color: #fff;
  padding: 10px 24px;
  border-radius: 8px;
  transition: all 0.3s ease;
  text-decoration: none;
  font-weight: 600;
  font-size: 15px;
  box-shadow: 0 2px 8px rgba(255, 107, 53, 0.2);
}

.btn-getstarted:hover {
  background: #ff8559;
  transform: translateY(-2px);
  box-shadow: 0 4px 12px rgba(255, 107, 53, 0.3);
}

.product-menu {
  position: relative;
}

.product-dropdown {
  position: fixed;
  top: 80px;
  left: 0;
  right: 0;
  background: white;
  box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
  opacity: 0;
  visibility: hidden;
  transform: translateY(-12px);
  transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
  z-index: 1000;
}

.product-dropdown.active {
  opacity: 1;
  visibility: visible;
  transform: translateY(0);
}

.product-container {
  max-width: 1400px;
  margin: 0 auto;
  display: flex;
  max-height: calc(100vh - 120px);
  overflow: hidden;
}

.product-sidebar {
  width: 240px;
  background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
  padding: 32px 24px;
  border-right: 1px solid var(--border-color);
  overflow-y: auto;
  flex-shrink: 0;
}

.product-category {
  margin-bottom: 32px;
}

.product-category h4 {
  font-size: 12px;
  font-weight: 700;
  color: #64748b;
  margin-bottom: 16px;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.product-category ul {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: 4px;
}

.product-category li {
  padding: 10px 12px;
  font-size: 14px;
  color: #475569;
  cursor: pointer;
  transition: all 0.2s ease;
  border-radius: 6px;
  font-weight: 500;
}

.product-category li:hover {
  color: var(--accent-color);
  background: rgba(255, 107, 53, 0.08);
  transform: translateX(4px);
}

.product-category li.highlight {
  color: var(--accent-color);
  font-weight: 700;
  margin-top: 8px;
  font-size: 13px;
}

.product-content {
  flex: 1;
  padding: 32px;
  overflow-y: auto;
  display: flex;
  flex-direction: column;
  gap: 32px;
}

.product-section h3 {
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 20px;
  color: var(--heading-color);
  position: relative;
  padding-bottom: 12px;
}

.product-section h3::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 48px;
  height: 3px;
  background: linear-gradient(90deg, var(--accent-color) 0%, transparent 100%);
  border-radius: 2px;
}

.product-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
  gap: 16px;
}

.product-card {
  display: flex;
  align-items: flex-start;
  padding: 20px;
  border-radius: 12px;
  border: 2px solid transparent;
  background: var(--hover-bg);
  cursor: pointer;
  transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
}

.product-card:hover {
  background: white;
  border-color: var(--accent-color);
  box-shadow: 0 8px 24px rgba(255, 107, 53, 0.12);
  transform: translateY(-2px);
}

.product-card.active {
  background: white;
  border-color: var(--accent-color);
  box-shadow: 0 8px 24px rgba(255, 107, 53, 0.15);
}

.product-icon {
  margin-right: 16px;
  color: var(--accent-color);
  font-size: 28px;
  flex-shrink: 0;
  width: 48px;
  height: 48px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, rgba(255, 107, 53, 0.1) 0%, rgba(255, 107, 53, 0.05) 100%);
  border-radius: 10px;
  transition: transform 0.2s ease;
}

.product-card:hover .product-icon {
  transform: scale(1.1);
}

.product-info {
  flex: 1;
  min-width: 0;
}

.product-info h4 {
  font-size: 16px;
  font-weight: 700;
  margin-bottom: 6px;
  color: var(--heading-color);
  transition: color 0.2s ease;
}

.product-card:hover .product-info h4 {
  color: var(--accent-color);
}

.product-info p {
  font-size: 14px;
  color: #64748b;
  margin: 0;
  line-height: 1.5;
}

.product-details {
  background: linear-gradient(135deg, #fff5f2 0%, #fff 100%);
  border-radius: 16px;
  padding: 32px;
  margin-top: 8px;
  border: 2px solid rgba(255, 107, 53, 0.15);
  box-shadow: 0 4px 16px rgba(255, 107, 53, 0.08);
}

.product-detail-header {
  display: flex;
  align-items: flex-start;
  gap: 16px;
  margin-bottom: 20px;
}

.detail-icon {
  width: 56px;
  height: 56px;
  background: linear-gradient(135deg, var(--accent-color) 0%, #ff8559 100%);
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: 28px;
  flex-shrink: 0;
  box-shadow: 0 4px 12px rgba(255, 107, 53, 0.25);
}

.product-detail-header h3 {
  font-size: 24px;
  font-weight: 700;
  margin: 0 0 4px 0;
  color: var(--heading-color);
}

.product-detail-header h3::after {
  display: none;
}

.detail-subtitle {
  font-size: 15px;
  color: #64748b;
  margin: 0;
  font-weight: 500;
}

.detail-description {
  font-size: 15px;
  color: #475569;
  line-height: 1.7;
  margin-bottom: 24px;
}

.detail-actions {
  display: flex;
  gap: 12px;
}

.btn-demo {
  display: inline-flex;
  align-items: center;
  background: var(--accent-color);
  color: white;
  padding: 12px 28px;
  border-radius: 8px;
  text-decoration: none;
  font-weight: 600;
  font-size: 15px;
  transition: all 0.2s ease;
  box-shadow: 0 2px 8px rgba(255, 107, 53, 0.25);
}

.btn-demo:hover {
  background: #ff8559;
  transform: translateY(-2px);
  box-shadow: 0 4px 12px rgba(255, 107, 53, 0.35);
}

.btn-learn {
  display: inline-flex;
  align-items: center;
  background: white;
  color: var(--accent-color);
  padding: 12px 28px;
  border-radius: 8px;
  text-decoration: none;
  font-weight: 600;
  font-size: 15px;
  transition: all 0.2s ease;
  border: 2px solid var(--accent-color);
}

.btn-learn:hover {
  background: var(--accent-color);
  color: white;
}

.fade-slide-enter-active,
.fade-slide-leave-active {
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.fade-slide-enter-from {
  opacity: 0;
  transform: translateY(-8px);
}

.fade-slide-leave-to {
  opacity: 0;
  transform: translateY(8px);
}

.mobile-nav-toggle {
  color: var(--heading-color);
  font-size: 28px;
  cursor: pointer;
  display: none;
  line-height: 0;
  transition: 0.3s;
  z-index: 1001;
}

.mobile-menu-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  backdrop-filter: blur(5px);
  z-index: 997;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s;
}

.mobile-menu-overlay.active {
  opacity: 1;
  visibility: visible;
}

.d-none {
  display: none;
}

.d-xl-inline-block {
  display: inline-block;
}

.d-xl-none {
  display: none;
}

@media (max-width: 1200px) {
  .d-xl-inline-block {
    display: none !important;
  }

  .d-xl-none {
    display: inline-block !important;
  }

  .mobile-nav-toggle {
    display: block;
  }

  .navmenu {
    position: fixed;
    top: 0;
    right: -100%;
    width: 300px;
    height: 100vh;
    background: white;
    transition: 0.3s;
    padding: 80px 20px 20px;
    z-index: 999;
    box-shadow: -5px 0 20px rgba(0, 0, 0, 0.1);
    overflow-y: auto;
  }

  .navmenu.active {
    right: 0;
  }

  .navmenu ul {
    flex-direction: column;
    gap: 0;
  }

  .navmenu li {
    padding: 0;
    border-bottom: 1px solid var(--border-color);
  }

  .navmenu a {
    display: block;
    padding: 16px 0;
  }

  .mobile-signin {
    margin-top: 20px;
    border-bottom: none;
  }

  .mobile-signin .btn-getstarted {
    width: 100%;
    text-align: center;
  }

  .product-dropdown {
    position: static;
    box-shadow: none;
    transform: none;
    opacity: 1;
    visibility: visible;
    display: none;
    border-radius: 0;
  }

  .product-dropdown.active {
    display: block;
  }

  .product-container {
    flex-direction: column;
    max-height: none;
  }

  .product-sidebar {
    width: 100%;
    border-right: none;
    border-bottom: 1px solid var(--border-color);
    padding: 20px 0;
  }

  .product-content {
    padding: 20px 0;
  }

  .product-grid {
    grid-template-columns: 1fr;
  }
}
</style>
