<template>
  <div v-if="blog" class="bg-gray-50 min-h-screen pb-16 mt-24">
    <!-- Hero Section -->
    <div class="relative h-96">
      <img
        :src="blog.image"
        :alt="'Electronics store billing software - ' + blog.title"
        class="w-full h-full object-cover"
      />
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
      <div
        class="container mx-auto px-4 lg:px-8 absolute inset-0 flex flex-col justify-center"
      >
        <div class="max-w-4xl">
          <div class="text-white mb-2 flex items-center space-x-2">
            <span class="bg-green-600 text-xs px-3 py-1 rounded">{{
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
              Optimize Your Electronics Store with Advanced Serial Number &
              Warranty Tracking
            </h1>

            <p class="mb-4">
              Running an electronics retail business comes with unique
              challenges – from tracking high-value inventory with unique serial
              numbers to managing complex warranty policies and after-sales
              service. RX Billing's specialized electronics retail features
              address these challenges head-on, helping you deliver exceptional
              customer service while maintaining precise records.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              1. Comprehensive Serial Number Management
            </h2>
            <p class="mb-4">
              Our software offers robust serial number tracking specifically
              designed for electronics:
            </p>
            <ul class="list-disc pl-6 mb-4">
              <li>Automatically record serial numbers during sales</li>
              <li>Track products from purchase to end-customer</li>
              <li>Scan serial numbers with barcode integration</li>
              <li>Search complete sales history by serial number</li>
            </ul>
            <img
              src="https://images.unsplash.com/photo-1580974928064-f0aeef70895a?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
              alt="Serial number scanning in electronics store"
              class="w-full rounded-lg mb-4"
            />

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              2. Advanced Warranty Tracking System
            </h2>
            <p class="mb-4">Never lose track of warranty coverage:</p>
            <div class="grid md:grid-cols-2 gap-4 mb-4">
              <div class="border rounded-lg p-4 bg-green-50">
                <h3 class="font-bold text-lg">Automated Warranty Management</h3>
                <ul class="list-disc pl-4 mt-2 text-sm">
                  <li>Set customizable warranty periods by product category</li>
                  <li>Automatic warranty expiration notifications</li>
                  <li>
                    Multi-level warranty tracking (manufacturer, extended, etc.)
                  </li>
                </ul>
              </div>
              <div class="border rounded-lg p-4 bg-green-50">
                <h3 class="font-bold text-lg">Warranty Verification</h3>
                <ul class="list-disc pl-4 mt-2 text-sm">
                  <li>Instant warranty status verification by serial number</li>
                  <li>Digital warranty certificate generation</li>
                  <li>Track transferred warranties for second-hand products</li>
                </ul>
              </div>
            </div>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              3. Integrated Service & Repair Tracking
            </h2>
            <p class="mb-4">Manage the complete product lifecycle:</p>
            <ul class="list-disc pl-6 mb-4">
              <li>Create and track repair tickets linked to serial numbers</li>
              <li>Document service history throughout product lifetime</li>
              <li>Generate service job sheets and customer communications</li>
              <li>Monitor repair status and service center communications</li>
            </ul>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              4. Customer Electronics Profile
            </h2>
            <p class="mb-4">Build comprehensive customer purchase records:</p>
            <ul class="list-disc pl-6 mb-4">
              <li>Access complete purchase history with serial numbers</li>
              <li>View all active warranties by customer</li>
              <li>Track service history across all customer devices</li>
              <li>
                Generate targeted upgrade offers based on purchase patterns
              </li>
            </ul>

            <div class="bg-green-50 p-6 rounded-lg my-8">
              <h3 class="text-xl font-bold mb-2">
                Success Story: Bangalore Electronics Cuts Service Resolution
                Time by 60%
              </h3>
              <p class="mb-2">
                "Before RX Billing, we struggled with warranty claims and repair
                tracking. Now, we instantly verify warranty status by serial
                number, and our average service resolution time dropped from 5
                days to just 2. Our customers are amazed at how quickly we can
                pull up their entire purchase and service history."
              </p>
              <p class="font-semibold">
                - Arjun Nair, Owner of TechZone Electronics
              </p>
            </div>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              5. Returns & Exchange Management
            </h2>
            <p class="mb-4">Streamline the returns process for electronics:</p>
            <ul class="list-disc pl-6 mb-4">
              <li>Process returns with serial number verification</li>
              <li>Track product condition at return time</li>
              <li>Handle warranty exchanges with proper documentation</li>
              <li>Manage refurbished inventory separately from new stock</li>
            </ul>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              6. GST-Compliant Electronics Invoicing
            </h2>
            <p class="mb-4">Specialized invoicing for electronics retailers:</p>
            <ul class="list-disc pl-6 mb-4">
              <li>Automatic HSN code application for electronics categories</li>
              <li>Serial numbers printed on invoices</li>
              <li>Warranty terms clearly outlined on sales documents</li>
              <li>
                Digital invoice copies linked to serial numbers for easy
                retrieval
              </li>
            </ul>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              7. Accessory & Bundle Management
            </h2>
            <p class="mb-4">Handle complex product relationships:</p>
            <ul class="list-disc pl-6 mb-4">
              <li>Create product bundles with main items and accessories</li>
              <li>Track compatible accessories for upselling</li>
              <li>Manage accessories with and without serial numbers</li>
              <li>
                Generate package deals with serialized and non-serialized items
              </li>
            </ul>

            <img
              src="https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
              alt="Electronics inventory management"
              class="w-full rounded-lg my-6"
            />

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              Getting Started with RX Billing for Your Electronics Store
            </h2>
            <p class="mb-4">
              Setting up your electronics business in RX Billing is
              straightforward:
            </p>
            <ol class="list-decimal pl-6 mb-4">
              <li>Import your existing product database with serial numbers</li>
              <li>Configure warranty periods by product category</li>
              <li>Set up service ticket workflows</li>
              <li>Train staff on serial number scanning and verification</li>
              <li>Start tracking your inventory with precision</li>
            </ol>

            <p class="mb-4">
              Ready to transform your electronics retail operations?
              <a href="/contact" class="text-blue-600 underline">Book a demo</a>
              to see RX Billing's electronics store features in action.
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
            title="RX Square Electronics Retail Team"
            subtitle="Specialists in After-Sales & Warranty Systems"
            description="Our team builds intelligent billing tools tailored for electronics retailers. From serial number tracking to warranty management and service logging, we help streamline operations and enhance customer support post-purchase."
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
        id: "billing-software-for-electronics-store",
        title:
          "Billing Software for Electronics Store: Manage Serial Numbers & Warranties",
        excerpt:
          "Track serial numbers, warranty periods, and service history with RX Billing's electronics retail specialized features.",
        image:
          "https://images.unsplash.com/photo-1550009158-9ebf69173e03?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
        date: "2025-02-16",
        category: "Electronics",
        readTime: "6 min read",
        tags: ["electronics", "warranty tracking", "serial numbers"],
      },
      isLiked: false,
      likeCount: 76,
      commentText: "",
      comments: [
        {
          name: "Sanjay Gupta",
          avatar: "https://randomuser.me/api/portraits/men/41.jpg",
          date: "1 week ago",
          text: "The warranty tracking feature has completely transformed how we handle customer service. Now we can instantly verify warranty status by serial number without hunting through paper files.",
          likes: 18,
        },
        {
          name: "Lakshmi Iyer",
          avatar: "https://randomuser.me/api/portraits/women/63.jpg",
          date: "2 weeks ago",
          text: "Does this system integrate with manufacturer warranty portals like Samsung and Apple?",
          likes: 7,
        },
      ],
      relatedPosts: [
        {
          slug: "electronics-inventory-management",
          title: "Best Practices for Electronics Inventory Management",
          image:
            "https://images.unsplash.com/photo-1546054454-aa26e2b734c7?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80",
          date: "2025-01-15",
        },
        {
          slug: "after-sales-service-system",
          title: "Building an Effective After-Sales Service System",
          image:
            "https://images.unsplash.com/photo-1563770660941-20978e870e26?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80",
          date: "2025-01-02",
        },
        {
          slug: "gst-compliance-electronics",
          title: "GST Compliance Guide for Electronics Retailers",
          image:
            "https://images.unsplash.com/photo-1589939705384-5185137a7f0f?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80",
          date: "2024-12-20",
        },
      ],
      categories: [
        { name: "Electronics Retail", slug: "electronics-retail", count: 32 },
        { name: "Warranty Management", slug: "warranty-management", count: 24 },
        { name: "Service Center Software", slug: "service-center", count: 19 },
        { name: "Retail Technology", slug: "retail-technology", count: 45 },
        { name: "Inventory Systems", slug: "inventory-systems", count: 37 },
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
      title:
        "Billing Software for Electronics Stores | Serial Number & Warranty Tracking",
      meta: [
        {
          name: "description",
          content:
            "RX Billing helps electronics retailers track serial numbers, manage warranties, and monitor service history with specialized features designed for electronics businesses.",
        },
        {
          name: "keywords",
          content:
            "electronics store software, serial number tracking, warranty management, electronics retail, service tracking, electronics billing",
        },
      ],
      script: [
        {
          type: "application/ld+json",
          innerHTML: JSON.stringify({
            "@context": "https://schema.org",
            "@type": "Article",
            headline:
              "Billing Software for Electronics Store: Manage Serial Numbers & Warranties",
            description:
              "Track serial numbers, warranty periods, and service history with RX Billing's electronics retail specialized features.",
            author: {
              "@type": "Person",
              name: "Aditya Kumar",
              jobTitle: "Electronics Retail Specialist",
            },
            datePublished: "2025-02-16",
            image:
              "https://images.unsplash.com/photo-1550009158-9ebf69173e03?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
            publisher: {
              "@type": "Organization",
              name: "RX Solutions",
              logo: {
                "@type": "ImageObject",
                url: "https://example.com/logo.png",
              },
            },
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
                name: "How does serial number tracking benefit electronics retailers?",
                acceptedAnswer: {
                  "@type": "Answer",
                  text: "Serial number tracking helps electronics retailers verify product authenticity, manage warranties accurately, track service history, simplify returns processing, and improve customer service by having complete product lifecycle information readily available.",
                },
              },
              {
                "@type": "Question",
                name: "Can RX Billing handle both manufacturer and extended warranties?",
                acceptedAnswer: {
                  "@type": "Answer",
                  text: "Yes, RX Billing's warranty management system can track multiple warranty types simultaneously, including manufacturer warranties, store-provided warranties, and third-party extended warranties, with separate tracking for each warranty's terms and expiration dates.",
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
