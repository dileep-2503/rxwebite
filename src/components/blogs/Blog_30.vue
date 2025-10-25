<template>
  <div v-if="blog" class="bg-gray-50 min-h-screen pb-16 mt-24">
    <!-- Hero Section -->
    <div class="relative h-96">
      <img
        :src="blog.image"
        :alt="blog.title"
        class="w-full h-full object-cover"
      />
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
      <div
        class="container mx-auto px-4 lg:px-8 absolute inset-0 flex flex-col justify-center"
      >
        <div class="max-w-4xl">
          <div class="text-white mb-2 flex items-center space-x-2">
            <span class="bg-blue-600 text-xs px-3 py-1 rounded">{{
              blog.category
            }}</span>
            <span>•</span>
            <span>{{ formatDate(blog.date) }}</span>
            <span>•</span>
            <span>{{ blog.readTime }}</span>
          </div>
          <h1 class="text-4xl lg:text-5xl font-bold text-white mb-4">
            {{ blog.title }}
          </h1>
          <p class="text-xl text-gray-200 mb-6">{{ blog.excerpt }}</p>
          <div class="flex flex-wrap gap-2">
            <span
              v-for="tag in blog.tags"
              :key="tag"
              class="text-xs bg-gray-200 bg-opacity-30 text-white px-2 py-1 rounded"
            >
              #{{ tag }}
            </span>
          </div>
        </div>
      </div>
    </div>

    <!-- Content Section -->
    <div class="container mx-auto px-4 lg:px-8 py-12">
      <BlogBackButton />

      <div class="flex flex-col lg:flex-row gap-8">
        <!-- Main Content -->
        <div class="lg:w-2/3">
          <article
            class="bg-white rounded-xl shadow-md p-6 lg:p-10 prose prose-lg max-w-none"
          >
            <h1 class="text-3xl font-bold text-dark mb-6">
              How Barcode & QR Code Scanning Revolutionizes Retail Checkout
            </h1>

            <p class="mb-4">
              In the fast-paced world of retail, every second counts at the
              checkout counter. RX Billing's integrated barcode and QR code
              scanning capabilities can reduce checkout time by 75% while
              eliminating manual entry errors. Here's how to implement and
              maximize these powerful features:
            </p>

            <img
              src="https://media.istockphoto.com/id/2189472021/photo/cashier-scanning-groceries-at-checkout-in-supermarket.webp?a=1&b=1&s=612x612&w=0&k=20&c=D8gjLxdsnSKEOyaQMQB7pFC1NaxJNAvDs0rizTi1ikE="
              alt="Cashier scanning barcode at checkout"
              class="w-full rounded-lg mb-6"
            />

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              1. Barcode Scanning for Lightning-Fast Checkout
            </h2>
            <p class="mb-4">
              RX Billing supports all standard barcode formats including:
            </p>
            <ul class="list-disc pl-6 mb-4">
              <li>UPC (Universal Product Code)</li>
              <li>EAN (European Article Number)</li>
              <li>ISBN (International Standard Book Number)</li>
              <li>Custom in-house barcodes</li>
            </ul>

            <div class="bg-blue-50 p-4 rounded-lg mb-6">
              <h3 class="font-bold text-lg mb-2">Pro Tip:</h3>
              <p>
                For maximum efficiency, position your scanner at a 30-45 degree
                angle to the counter surface - this creates the ideal scanning
                position for both handheld items and items slid across the
                counter.
              </p>
            </div>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              2. QR Code Capabilities Beyond Payments
            </h2>
            <p class="mb-4">
              While commonly used for payments, QR codes in RX Billing can also:
            </p>
            <div class="grid md:grid-cols-2 gap-4 mb-4">
              <div class="border rounded-lg p-4 bg-blue-50">
                <h3 class="font-bold text-lg">Customer-Facing Uses</h3>
                <ul class="list-disc pl-4 mt-2 text-sm">
                  <li>Digital loyalty cards</li>
                  <li>Product information lookup</li>
                  <li>Instant discounts and promotions</li>
                  <li>Feedback collection</li>
                </ul>
              </div>
              <div class="border rounded-lg p-4 bg-blue-50">
                <h3 class="font-bold text-lg">Inventory Management</h3>
                <ul class="list-disc pl-4 mt-2 text-sm">
                  <li>Stock level checks</li>
                  <li>Batch/lot number tracking</li>
                  <li>Expiry date monitoring</li>
                  <li>Supplier information</li>
                </ul>
              </div>
            </div>

            <img
              src="https://images.unsplash.com/photo-1614332287897-cdc485fa562d?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
              alt="QR code scanning on mobile device"
              class="w-full rounded-lg mb-6"
            />

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              3. Hardware Setup Options
            </h2>
            <p class="mb-4">
              RX Billing works with various scanning hardware configurations:
            </p>
            <ul class="list-disc pl-6 mb-4">
              <li>
                <strong>USB Scanners</strong> - Plug-and-play wired models
              </li>
              <li>
                <strong>Bluetooth Scanners</strong> - Wireless freedom for
                mobile setups
              </li>
              <li>
                <strong>Built-in Camera Scanning</strong> - Use device cameras
                (perfect for tablets)
              </li>
              <li>
                <strong>Fixed-position Scanners</strong> - Integrated into
                checkout counters
              </li>
            </ul>

            <div
              class="bg-yellow-50 p-4 rounded-lg mb-6 border-l-4 border-yellow-400"
            >
              <h3 class="font-bold text-lg mb-2">Important:</h3>
              <p>
                For high-volume environments, invest in industrial-grade
                scanners rated for 100,000+ scans per day - they'll pay for
                themselves in reduced downtime and replacement costs.
              </p>
            </div>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              4. Custom Barcode Generation
            </h2>
            <p class="mb-4">
              Create barcodes for products without manufacturer codes:
            </p>
            <ul class="list-disc pl-6 mb-4">
              <li>Generate codes for in-house products</li>
              <li>Create barcodes for weighted items (produce, bulk goods)</li>
              <li>Print directly to label printers</li>
              <li>Batch generate codes for new inventory</li>
            </ul>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              5. Advanced Scanning Features
            </h2>
            <p class="mb-4">
              RX Billing's scanning capabilities go beyond basic lookups:
            </p>
            <ul class="list-disc pl-6 mb-4">
              <li>
                Multi-scan mode (scan several items without screen interaction)
              </li>
              <li>
                Sound customization (different beeps for discounts/errors)
              </li>
              <li>Auto-focus adjustment for difficult surfaces</li>
              <li>Scan logging for inventory reconciliation</li>
            </ul>

            <div class="bg-blue-50 p-6 rounded-lg my-8">
              <h3 class="text-xl font-bold mb-2">
                Success Story: Chennai Fashion Hub Speeds Up Billing by 70%
              </h3>
              <p class="mb-2">
                "Integrating RX Billing into our clothing outlet completely
                transformed our checkout process. What used to take 4+ minutes
                per customer now takes just 1.2 minutes. We also eliminated
                frequent pricing mismatches, saving around ₹78,000 monthly in
                reprocessing and customer complaints."
              </p>
              <p class="font-semibold">- Arjun, Owner of Chennai Fashion Hub</p>
            </div>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              Implementation Checklist
            </h2>
            <div class="border rounded-lg p-4 mb-6">
              <div class="flex items-start mb-3">
                <input type="checkbox" id="check1" class="mt-1 mr-3" />
                <label for="check1">Select appropriate scanner hardware</label>
              </div>
              <div class="flex items-start mb-3">
                <input type="checkbox" id="check2" class="mt-1 mr-3" />
                <label for="check2">Test with your product barcodes</label>
              </div>
              <div class="flex items-start mb-3">
                <input type="checkbox" id="check3" class="mt-1 mr-3" />
                <label for="check3"
                  >Train staff on proper scanning techniques</label
                >
              </div>
              <div class="flex items-start mb-3">
                <input type="checkbox" id="check4" class="mt-1 mr-3" />
                <label for="check4"
                  >Set up custom barcodes for unbranded items</label
                >
              </div>
              <div class="flex items-start">
                <input type="checkbox" id="check5" class="mt-1 mr-3" />
                <label for="check5">Configure QR code payment options</label>
              </div>
            </div>

            <p class="mb-4">
              Ready to speed up your checkout process?
              <a href="/contact" class="text-blue-600 underline"
                >Contact our team</a
              >
              for a personalized demo of RX Billing's scanning capabilities.
            </p>
          </article>

          <PostInteraction
            :post-id="blog.id"
            :initial-likes="blog.likes || 0"
            :date="blog.date"
            :initial-comments="comments"
          />
        </div>

        <!-- Sidebar -->
        <div class="lg:w-1/3">
          <!-- Author Card -->
          <AuthorCard
            title="RX Square Billing Team"
            subtitle="Checkout Optimization Specialists"
            description="Our billing technology experts have implemented barcode and QR code solutions for over 500 retailers across India. We specialize in reducing checkout times while maintaining 99.9% scanning accuracy through proper hardware/software integration."
          />

          <!-- Related Posts -->
          <div class="bg-white rounded-xl shadow-md p-6 mb-6">
            <h3 class="font-bold text-lg mb-4">Related Articles</h3>
            <div class="space-y-4">
              <div
                v-for="(post, index) in relatedPosts"
                :key="index"
                class="flex items-start"
              >
                <img
                  :src="post.image"
                  :alt="post.title"
                  class="w-16 h-16 object-cover rounded mr-4"
                />
                <div>
                  <h4 class="font-medium text-gray-900 hover:text-blue-600">
                    <NuxtLink :to="`/blog/${post.slug}`">{{
                      post.title
                    }}</NuxtLink>
                  </h4>
                  <p class="text-sm text-gray-500">{{ post.date }}</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Categories -->
          <div class="bg-white rounded-xl shadow-md p-6">
            <h3 class="font-bold text-lg mb-4">Categories</h3>
            <div class="space-y-2">
              <div
                v-for="(category, index) in categories"
                :key="index"
                class="flex justify-between items-center"
              >
                <NuxtLink
                  :to="`/blog/${category.slug}`"
                  class="text-gray-700 hover:text-blue-600"
                >
                  {{ category.name }}
                </NuxtLink>
                <span
                  class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded"
                >
                  {{ category.count }}
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import BlogBackButton from "./BlogBackButton.vue";
import PostInteraction from "./PostInteraction.vue";
import AuthorCard from "./AuthorCard.vue";

export default {
  components: {
    BlogBackButton,
    PostInteraction,
    AuthorCard,
  },
  data() {
    return {
      blog: {
        id: "barcode-qr-code-integration-retail-billing",
        title:
          "Barcode & QR Code Integration in Retail Billing: Speed Up Your Checkout",
        excerpt:
          "Discover how RX Billing's barcode and QR code scanning capabilities can reduce checkout time by 75% while eliminating manual entry errors.",
        image:
          "https://images.unsplash.com/photo-1589939705384-5185137a7f0f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
        date: "2025-01-02",
        category: "Checkout Efficiency",
        readTime: "6 min read",
        tags: ["barcode", "QR code", "scanning", "checkout"],
      },
      isLiked: false,
      likeCount: 92,
      commentText: "",
      comments: [
        {
          name: "Rahul Sharma",
          avatar: "https://randomuser.me/api/portraits/men/41.jpg",
          date: "2 weeks ago",
          text: "Switched to RX Billing's scanning system last month. Our cashiers love it - no more typing errors and much faster transactions!",
          likes: 18,
        },
        {
          name: "Priya Malhotra",
          avatar: "https://randomuser.me/api/portraits/women/63.jpg",
          date: "3 weeks ago",
          text: "Can the system handle QR codes printed on thermal receipts? We have issues with some systems not reading faded codes.",
          likes: 7,
        },
      ],
      relatedPosts: [
        {
          slug: "inventory-management-solutions",
          title: "Modern Inventory Management Solutions for Retail",
          image:
            "https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80",
          date: "2024-12-18",
        },
        {
          slug: "retail-checkout-optimization",
          title: "5 Ways to Optimize Your Retail Checkout Process",
          image:
            "https://images.unsplash.com/photo-1556742044-3c52d6e88c62?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80",
          date: "2024-11-29",
        },
        {
          slug: "mobile-payment-integration",
          title: "Integrating Mobile Payments with Your Billing System",
          image:
            "https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80",
          date: "2024-11-10",
        },
      ],
      categories: [
        { name: "Checkout Efficiency", slug: "checkout-efficiency", count: 23 },
        { name: "Retail Technology", slug: "retail-technology", count: 37 },
        {
          name: "Hardware Integration",
          slug: "hardware-integration",
          count: 19,
        },
        {
          name: "Inventory Management",
          slug: "inventory-management",
          count: 31,
        },
        { name: "Payment Solutions", slug: "payment-solutions", count: 28 },
      ],
    };
  },
  methods: {
    formatDate(dateString) {
      const options = { year: "numeric", month: "long", day: "numeric" };
      return new Date(dateString).toLocaleDateString("en-US", options);
    },
  },
  head() {
    return {
      title: "Barcode & QR Code Scanning for Faster Checkout | RX Billing",
      meta: [
        {
          name: "description",
          content:
            "Reduce checkout times by 75% with RX Billing's barcode and QR code scanning integration. Eliminate manual entry errors and speed up transactions.",
        },
        {
          name: "keywords",
          content:
            "barcode scanning, QR code integration, retail checkout, billing software, inventory management",
        },
      ],
      script: [
        {
          type: "application/ld+json",
          innerHTML: JSON.stringify({
            "@context": "https://schema.org",
            "@type": "Article",
            headline:
              "Barcode & QR Code Integration in Retail Billing: Speed Up Your Checkout",
            description:
              "Discover how RX Billing's barcode and QR code scanning capabilities can reduce checkout time by 75% while eliminating manual entry errors.",
            author: {
              "@type": "Person",
              name: "Arjun Patel",
              jobTitle: "Retail Technology Specialist",
            },
            datePublished: "2025-01-02",
            image:
              "https://images.unsplash.com/photo-1589939705384-5185137a7f0f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
          }),
        },
        {
          type: "application/ld+json",
          innerHTML: JSON.stringify({
            "@context": "https://schema.org",
            "@type": "FAQPage",
            mainEntity: [
              {
                "@type": "Question",
                name: "What types of barcode scanners work with RX Billing?",
                acceptedAnswer: {
                  "@type": "Answer",
                  text: "RX Billing is compatible with most USB, Bluetooth, and camera-based barcode scanners. We recommend specific models based on your business volume and environment.",
                },
              },
              {
                "@type": "Question",
                name: "Can customers scan QR codes to pay directly from their phones?",
                acceptedAnswer: {
                  "@type": "Answer",
                  text: "Yes, RX Billing supports all major QR code payment systems including UPI, Paytm, PhonePe, and more. The system automatically generates payment QR codes at checkout.",
                },
              },
            ],
          }),
        },
      ],
    };
  },
};
</script>
