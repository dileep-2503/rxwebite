<template>
  <section id="services" class="services section">
    <div class="container">
      <!-- Services Hero -->
      <div class="text-center mb-12" data-aos="fade-up">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Comprehensive IT Solutions</h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          From custom software to digital transformation - we deliver integrated technology solutions that drive business growth
        </p>
      </div>

      <!-- Service Categories -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
        <div 
          v-for="category in serviceCategories" 
          :key="category.id"
          class="category-card p-6 rounded-xl transition-all duration-300 hover:shadow-xl"
          data-aos="fade-up"
          :data-aos-delay="category.delay"
        >
          <div class="icon-box w-16 h-16 rounded-full flex items-center justify-center mb-4" :class="category.color">
            <i :class="category.icon" class="text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold mb-3">{{ category.title }}</h3>
          <p class="text-gray-600 mb-4">{{ category.description }}</p>
          <ul class="space-y-2">
            <li v-for="(item, index) in category.features" :key="index" class="flex items-start">
              <i class="bi bi-check-circle-fill text-green-500 mt-1 mr-2"></i>
              <span>{{ item }}</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Custom Software Development -->
      <div class="mb-16">
        <div class="text-center mb-10" data-aos="fade-up">
          <h2 class="text-3xl font-bold mb-3">Custom Software Development</h2>
          <p class="text-gray-600 max-w-3xl mx-auto">
            Bespoke solutions engineered to solve your unique business challenges
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div 
            v-for="service in customSoftware" 
            :key="service.id"
            class="service-card bg-white p-6 rounded-xl shadow-md border border-gray-100 hover:border-blue-100 transition-all"
            data-aos="fade-up"
            :data-aos-delay="service.delay"
          >
            <div class="icon-box w-14 h-14 rounded-lg flex items-center justify-center mb-4" :class="service.color">
              <i :class="service.icon" class="text-xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-3">{{ service.title }}</h3>
            <p class="text-gray-600 mb-4">{{ service.description }}</p>
            <div class="mt-auto">
              <ul class="space-y-2">
                <li v-for="(feature, index) in service.features" :key="index" class="flex items-start">
                  <i class="bi bi-dot text-blue-500 text-lg mr-1"></i>
                  <span class="text-sm">{{ feature }}</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Web & Mobile Solutions -->
      <div class="mb-16">
        <div class="text-center mb-10" data-aos="fade-up">
          <h2 class="text-3xl font-bold mb-3">Web & Mobile Solutions</h2>
          <p class="text-gray-600 max-w-3xl mx-auto">
            Cutting-edge digital experiences that engage customers and drive conversions
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div 
            v-for="service in webMobileSolutions" 
            :key="service.id"
            class="service-card bg-white p-6 rounded-xl shadow-md border border-gray-100 hover:border-purple-100 transition-all"
            data-aos="fade-up"
            :data-aos-delay="service.delay"
          >
            <div class="flex items-start">
              <div class="icon-box w-14 h-14 rounded-lg flex items-center justify-center mr-4" :class="service.color">
                <i :class="service.icon" class="text-xl"></i>
              </div>
              <div>
                <h3 class="text-xl font-bold mb-2">{{ service.title }}</h3>
                <p class="text-gray-600 text-sm">{{ service.subtitle }}</p>
              </div>
            </div>
            <div class="mt-4">
              <p class="text-gray-600 mb-4">{{ service.description }}</p>
              <div class="tech-stack flex flex-wrap gap-2 mb-4">
                <span v-for="(tech, index) in service.technologies" :key="index" class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-xs">
                  {{ tech }}
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- IT Consulting Services -->
      <div class="mb-16">
        <div class="text-center mb-10" data-aos="fade-up">
          <h2 class="text-3xl font-bold mb-3">Strategic IT Consulting</h2>
          <p class="text-gray-600 max-w-3xl mx-auto">
            Transform your business with technology roadmaps aligned to your goals
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <div 
            v-for="service in consultingServices" 
            :key="service.id"
            class="consulting-card bg-gradient-to-br from-white to-gray-50 p-8 rounded-2xl border border-gray-100"
            data-aos="fade-up"
            :data-aos-delay="service.delay"
          >
            <div class="flex items-center mb-6">
              <div class="icon-box w-16 h-16 rounded-full flex items-center justify-center mr-4" :class="service.color">
                <i :class="service.icon" class="text-2xl"></i>
              </div>
              <h3 class="text-2xl font-bold">{{ service.title }}</h3>
            </div>
            <p class="text-gray-700 mb-6">{{ service.description }}</p>
            <div class="process-steps">
              <h4 class="font-bold text-lg mb-4">Our Approach:</h4>
              <div class="flex flex-wrap gap-4">
                <div v-for="(step, index) in service.process" :key="index" class="step-box bg-white p-4 rounded-lg shadow-sm border border-gray-200 flex-1 min-w-[150px]">
                  <div class="step-number w-8 h-8 rounded-full bg-yellow-500 text-white flex items-center justify-center mb-3">
                    {{ index + 1 }}
                  </div>
                  <p class="font-medium">{{ step }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- CTA Section -->
      <div class="cta-box bg-gradient-to-r from-yellow-500 to-yellow-400 rounded-2xl p-8 md:p-12 text-white text-center" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Transform Your Business?</h2>
        <p class="text-xl max-w-2xl mx-auto mb-8">
          Let's discuss how our IT solutions can drive efficiency, innovation, and growth for your organization
        </p>
        <div class="flex flex-wrap justify-center gap-4">
          <a href="/contact" class="btn-primary bg-white text-yellow-500 hover:bg-blue-50 px-8 py-4 font-bold rounded-full">
            Schedule Consultation
          </a>
          <a href="tel:+916385333384" class="btn-outline border-2 border-white text-white hover:bg-white/10 px-8 py-4 font-bold rounded-full">
            <i class="bi bi-telephone mr-2"></i>+91 63853 33384
          </a>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      serviceCategories: [
        {
          id: 1,
          title: "Custom Software",
          icon: "bi bi-code-slash",
          color: "bg-blue-100 text-blue-600",
          description: "Tailor-made applications for your unique business needs",
          features: [
            "Enterprise-grade solutions",
            "Scalable architecture",
            "API integrations",
            "Legacy system modernization"
          ],
          delay: 100
        },
        {
          id: 2,
          title: "Web Solutions",
          icon: "bi bi-globe",
          color: "bg-purple-100 text-purple-600",
          description: "High-performance websites and web applications",
          features: [
            "E-commerce platforms",
            "Progressive Web Apps",
            "CMS development",
            "Web portal solutions"
          ],
          delay: 200
        },
        {
          id: 3,
          title: "IT Consulting",
          icon: "bi bi-diagram-3",
          color: "bg-green-100 text-green-600",
          description: "Strategic technology guidance and planning",
          features: [
            "Digital transformation",
            "Cloud migration",
            "IT infrastructure",
            "Security & compliance"
          ],
          delay: 300
        },
        {
          id: 4,
          title: "Business Solutions",
          icon: "bi bi-gear",
          color: "bg-orange-100 text-orange-600",
          description: "Integrated platforms for operational excellence",
          features: [
            "CRM & ERP systems",
            "Workflow automation",
            "Business intelligence",
            "SaaS product development"
          ],
          delay: 400
        }
      ],
      customSoftware: [
        {
          id: 1,
          title: "Enterprise Applications",
          icon: "bi bi-building",
          color: "bg-blue-100 text-blue-600",
          description: "Comprehensive business management solutions tailored to your industry",
          features: [
            "Custom ERP/CRM development",
            "Inventory management systems",
            "Supply chain optimization",
            "Multi-location operations",
            "Role-based access control"
          ],
          delay: 100
        },
        {
          id: 2,
          title: "Billing & Financial Systems",
          icon: "bi bi-cash-stack",
          color: "bg-green-100 text-green-600",
          description: "Automated financial workflows with compliance-ready reporting",
          features: [
            "GST-compliant invoicing",
            "Multi-payment gateway integration",
            "Automated reconciliation",
            "Financial forecasting",
            "Tax computation engine"
          ],
          delay: 200
        },
        {
          id: 3,
          title: "HR & Payroll Solutions",
          icon: "bi bi-people",
          color: "bg-purple-100 text-purple-600",
          description: "End-to-end human resource management platforms",
          features: [
            "Attendance tracking systems",
            "Automated payroll processing",
            "Employee self-service portals",
            "Performance management",
            "Statutory compliance"
          ],
          delay: 300
        },
        {
          id: 4,
          title: "Workflow Automation",
          icon: "bi bi-robot",
          color: "bg-orange-100 text-orange-600",
          description: "Streamline operations with intelligent automation",
          features: [
            "Custom workflow design",
            "Approval process automation",
            "Data integration pipelines",
            "AI-powered decision making",
            "Notification systems"
          ],
          delay: 100
        },
        {
          id: 5,
          title: "Mobile Applications",
          icon: "bi bi-phone",
          color: "bg-indigo-100 text-indigo-600",
          description: "Native and cross-platform apps for employees and customers",
          features: [
            "iOS & Android development",
            "Offline capability",
            "Biometric authentication",
            "Push notifications",
            "Device hardware integration"
          ],
          delay: 200
        },
        {
          id: 6,
          title: "AI & Analytics",
          icon: "bi bi-graph-up",
          color: "bg-red-100 text-red-600",
          description: "Data-driven insights for strategic decision making",
          features: [
            "Predictive analytics",
            "Business intelligence dashboards",
            "Machine learning models",
            "Customer behavior analysis",
            "Real-time reporting"
          ],
          delay: 300
        }
      ],
      webMobileSolutions: [
        {
          id: 1,
          title: "E-commerce Platforms",
          subtitle: "Scalable online stores",
          icon: "bi bi-cart",
          color: "bg-blue-100 text-blue-600",
          description: "Feature-rich online shopping experiences with integrated inventory and order management",
          technologies: ["Magento", "Shopify", "WooCommerce", "React", "Node.js"],
          delay: 100
        },
        {
          id: 2,
          title: "Corporate Websites",
          subtitle: "Brand-building experiences",
          icon: "bi bi-building",
          color: "bg-purple-100 text-purple-600",
          description: "Professional websites that communicate your brand value and generate leads",
          technologies: ["Vue.js", "WordPress", "Tailwind CSS", "Webflow", "GSAP"],
          delay: 200
        },
        {
          id: 3,
          title: "Web Applications",
          subtitle: "Complex business solutions",
          icon: "bi bi-window-stack",
          color: "bg-green-100 text-green-600",
          description: "Custom web-based software for internal operations or customer-facing services",
          technologies: ["Angular", "Vue.js", "Django", "Laravel", "Firebase"],
          delay: 300
        },
        {
          id: 4,
          title: "Progressive Web Apps",
          subtitle: "App-like web experiences",
          icon: "bi bi-phone",
          color: "bg-yellow-100 text-yellow-600",
          description: "Cross-platform applications that work offline and deliver native-like experiences",
          technologies: ["PWA", "Service Workers", "Web App Manifests", "IndexedDB"],
          delay: 100
        },
        {
          id: 5,
          title: "API Development",
          subtitle: "System integration",
          icon: "bi bi-plug",
          color: "bg-red-100 text-red-600",
          description: "Secure and scalable APIs to connect your applications and services",
          technologies: ["REST", "GraphQL", "OAuth 2.0", "WebSockets", "Swagger"],
          delay: 200
        },
        {
          id: 6,
          title: "CMS Solutions",
          subtitle: "Content management",
          icon: "bi bi-file-earmark-text",
          color: "bg-indigo-100 text-indigo-600",
          description: "Custom content management systems for marketing teams and publishers",
          technologies: ["Strapi", "Contentful", "Sanity", "Headless CMS", "Jamstack"],
          delay: 300
        }
      ],
      consultingServices: [
        {
          id: 1,
          title: "Digital Transformation",
          icon: "bi bi-lightning-charge",
          color: "bg-blue-100 text-blue-600",
          description: "Comprehensive roadmap for adopting digital technologies to fundamentally change how your business operates",
          process: [
            "Assessment",
            "Strategy Design",
            "Implementation",
            "Optimization"
          ],
          delay: 100
        },
        {
          id: 2,
          title: "Cloud Solutions",
          icon: "bi bi-cloud",
          color: "bg-purple-100 text-purple-600",
          description: "Migration strategy and implementation for scalable, secure cloud infrastructure",
          process: [
            "Cloud Readiness",
            "Architecture Design",
            "Migration Planning",
            "Managed Services"
          ],
          delay: 200
        },
        {
          id: 3,
          title: "IT Infrastructure",
          icon: "bi bi-server",
          color: "bg-green-100 text-green-600",
          description: "Design and implementation of robust, scalable technology foundations",
          process: [
            "Network Design",
            "Security Architecture",
            "Disaster Recovery",
            "Performance Tuning"
          ],
          delay: 100
        },
        {
          id: 4,
          title: "Cybersecurity",
          icon: "bi bi-shield-lock",
          color: "bg-red-100 text-red-600",
          description: "Protect your business assets with enterprise-grade security solutions",
          process: [
            "Risk Assessment",
            "Security Framework",
            "Implementation",
            "Compliance Audit"
          ],
          delay: 200
        }
      ]
    }
  }
}
</script>

<style scoped>
.services {
  padding: 7rem 0;
}

.category-card {
  background: white;
  border: 1px solid #e2e8f0;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.category-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

.icon-box {
  transition: transform 0.3s ease;
}

.category-card:hover .icon-box {
  transform: scale(1.1);
}

.service-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  height: 100%;
  display: flex;
  flex-direction: column;
}

.service-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
}

.consulting-card {
  transition: transform 0.3s ease;
}

.consulting-card:hover {
  transform: translateY(-5px);
}

.step-box {
  transition: all 0.3s ease;
}

.step-box:hover {
  transform: translateY(-3px);
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.cta-box {
  position: relative;
  overflow: hidden;
}

.cta-box::before {
  content: "";
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
  z-index: 0;
}

.btn-primary {
  position: relative;
  z-index: 1;
  transition: all 0.3s ease;
}

.btn-outline {
  position: relative;
  z-index: 1;
  transition: all 0.3s ease;
}

.btn-primary:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.2);
}

.btn-outline:hover {
  background: rgba(255, 255, 255, 0.1) !important;
  transform: translateY(-3px);
}

@media (max-width: 768px) {
  .services {
    padding: 3rem 0;
  }
  
  .grid-cols-4 {
    grid-template-columns: repeat(1, 1fr);
  }
}
</style>