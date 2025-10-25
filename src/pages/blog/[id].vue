<!-- pages/blogs/[id].vue -->
<template>
  <div class="bg-gray-50 min-h-screen pt-16 pb-16">
    <!-- Breadcrumb Navigation -->
    <div class="container mx-auto px-4 max-w-4xl mb-6">
      <div class="flex items-center text-sm text-gray-600">
        <NuxtLink to="/" class="hover:text-blue-600">Home</NuxtLink>
        <svg class="w-3 h-3 mx-2" fill="currentColor" viewBox="0 0 20 20">
          <path
            fill-rule="evenodd"
            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
            clip-rule="evenodd"
          ></path>
        </svg>
        <NuxtLink to="/blog" class="hover:text-blue-600">Blog</NuxtLink>
        <svg class="w-3 h-3 mx-2" fill="currentColor" viewBox="0 0 20 20">
          <path
            fill-rule="evenodd"
            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
            clip-rule="evenodd"
          ></path>
        </svg>
        <span class="text-gray-500">{{ blog.title }}</span>
      </div>
    </div>

    <div class="container mx-auto px-4 max-w-4xl mb-8">
      <!-- Back button -->
      <div class="mb-6">
        <NuxtLink
          to="/blog"
          class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium"
        >
          <svg
            class="w-5 h-5 mr-2"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M10 19l-7-7m0 0l7-7m-7 7h18"
            ></path>
          </svg>
          Back to all blogs
        </NuxtLink>
      </div>

      <!-- Category badge and date info -->
      <div class="mb-4 flex items-center gap-2">
        <span class="bg-blue-600 text-white text-sm px-3 py-1 rounded-full">
          {{ blog.category }}
        </span>
        <span class="text-gray-500">{{ formatDate(blog.date) }}</span>
        <span class="text-gray-500">•</span>
        <span class="text-gray-500">{{ blog.readTime }}</span>
      </div>

      <!-- Blog Header -->
      <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ blog.title }}</h1>

      <!-- Author Info and Sharing Options -->
      <div class="flex items-center justify-between mb-6">
        <div class="flex items-center">
          <img
            src="https://api.dicebear.com/7.x/initials/svg?seed=RX"
            alt="Author"
            class="w-10 h-10 rounded-full mr-4"
          />
          <div>
            <p class="font-medium">RX Billing Team</p>
            <p class="text-sm text-gray-500">Billing Software Experts</p>
          </div>
        </div>

        <div class="flex space-x-3">
          <button
            class="flex items-center gap-1 text-gray-500 hover:text-blue-600"
          >
            <svg
              class="w-5 h-5"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"
              ></path>
            </svg>
            Share
          </button>
          <button
            class="flex items-center gap-1 text-gray-500 hover:text-red-600"
          >
            <svg
              class="w-5 h-5"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
              ></path>
            </svg>
            Save
          </button>
          <button
            class="flex items-center gap-1 text-blue-600 text-sm font-medium"
          >
            <svg
              class="w-4 h-4"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"
              ></path>
            </svg>
            Read Later
          </button>
        </div>
      </div>
    </div>

    <!-- Feature Image -->
    <div class="w-full bg-gray-900 mb-8">
      <div class="container mx-auto px-4 max-w-5xl">
        <img
          :src="blog.image"
          :alt="blog.title"
          class="w-full h-96 object-cover rounded-lg shadow-md mx-auto"
        />
      </div>
    </div>

    <div class="container mx-auto px-4 max-w-4xl">
      <!-- Blog Content -->
      <div class="bg-white p-8 rounded-xl shadow-sm mb-12">
        <div class="prose prose-lg max-w-none">
          <p v-if="blog.id === 'best-billing-software-for-retail-shop'">
            Running a retail shop successfully in 2025 demands speed, accuracy,
            and smart management. Choosing the
            <strong>best billing software for retail shop</strong> is critical —
            and that's where <strong>RX Billing</strong> shines. Designed
            specifically for retailers, RX Billing helps streamline your sales,
            inventory, customer management, and GST invoicing all in one
            easy-to-use platform.
          </p>

          <h2>Why RX Billing is the Best Billing Software for Retail Shop</h2>

          <p>
            Retailers today face challenges like fast billing during peak hours,
            managing thousands of SKUs, GST compliance, and maintaining happy
            customers. <strong>RX Billing</strong> solves all these problems
            with tailored features for retail businesses.
          </p>

          <ul>
            <li>Instant billing and invoicing</li>
            <li>Smart inventory management</li>
            <li>GST-compliant billing</li>
            <li>Multi-payment support (Cash, Card, QR)</li>
            <li>Barcode scanning integration</li>
            <li>Real-time sales analytics</li>
          </ul>

          <h2>Key Features of RX Billing for Retail Shops</h2>

          <h3>1. Fast and Easy Billing</h3>
          <p>
            Generate invoices in seconds with a clean, user-friendly interface.
            Handle customer queues quickly, especially during busy seasons.
          </p>

          <div class="my-8 bg-gray-50 p-6 rounded-lg border border-gray-200">
            <h4 class="font-bold mb-2">Did You Know?</h4>
            <p class="mb-0">
              RX Billing processes transactions 3x faster than traditional POS
              systems, reducing customer wait times significantly during peak
              hours.
            </p>
          </div>

          <h3>2. Powerful Inventory Management</h3>
          <p>
            Track your stock in real-time. Get automatic low-stock alerts and
            categorize products easily. Our smart inventory tools help you
            prevent stockouts and overstock situations by providing valuable
            insights about your product performance.
          </p>

          <h3>3. GST and Tax Management</h3>
          <p>
            Create GST-compliant invoices effortlessly. RX Billing
            auto-calculates GST, saving time and reducing errors. Generate tax
            reports with just a few clicks and stay compliant with the latest
            regulations.
          </p>

          <h3>4. Customer Relationship Management</h3>
          <p>
            Build customer loyalty with integrated CRM features. Track purchase
            history, offer personalized discounts, and send automated reminders
            for special occasions. Happy customers mean repeat business!
          </p>

          <h3>5. Cloud-Based Technology</h3>
          <p>
            Access your business data from anywhere, anytime. Cloud-based
            architecture ensures your data is safe, backed up, and available on
            multiple devices. Work from your store, home, or while traveling.
          </p>

          <h3>6. Advanced Reporting and Analytics</h3>
          <p>
            Make data-driven decisions with comprehensive reports on sales,
            inventory, customers, and staff performance. Visualize trends with
            easy-to-understand charts and graphs.
          </p>

          <h2>Pricing That Works for Every Retail Business</h2>
          <p>
            RX Billing offers flexible pricing plans that grow with your
            business:
          </p>

          <ul>
            <li>
              <strong>Starter Plan:</strong> Perfect for small shops with basic
              billing needs
            </li>
            <li>
              <strong>Growth Plan:</strong> Ideal for expanding retailers who
              need inventory management
            </li>
            <li>
              <strong>Premium Plan:</strong> Complete solution with advanced
              analytics and multiple branch support
            </li>
          </ul>

          <h2>What Our Customers Say</h2>
          <p>
            Don't just take our word for it. Here's what retailers across India
            are saying about RX Billing:
          </p>

          <blockquote>
            "Since implementing RX Billing last year, we've reduced billing time
            by 60% and inventory errors by 85%. Our customers love the quick
            checkout process, and I love the detailed reports." - Sanjay Patel,
            Fashion Retailer, Mumbai
          </blockquote>

          <h2>Get Started Today</h2>
          <p>
            Ready to transform your retail shop with the best billing software
            in the market? RX Billing offers a 14-day free trial with full
            features and no credit card required. Our setup team will help you
            migrate your existing data and train your staff at no extra cost.
          </p>

          <p>
            Contact our team today to schedule a demo and see how RX Billing can
            help your retail business thrive in 2025 and beyond.
          </p>
        </div>

        <!-- Tags -->
        <div class="mt-8 pt-6 border-t border-gray-100">
          <div class="flex flex-wrap gap-2">
            <span
              v-for="tag in blog.tags"
              :key="tag"
              class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-sm"
            >
              #{{ tag }}
            </span>
          </div>
        </div>
      </div>

      <!-- Call to Action -->
      <div
        class="bg-blue-50 p-8 rounded-xl shadow-sm mb-12 border border-blue-100"
      >
        <div class="flex flex-col md:flex-row items-center justify-between">
          <div class="mb-6 md:mb-0 md:mr-6">
            <h3 class="text-2xl font-bold text-blue-900 mb-2">
              Ready to try RX Billing?
            </h3>
            <p class="text-blue-700">
              Start your 30-day free trial today. No credit card required.
            </p>
          </div>
          <button
            class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg transition"
          >
            Get Started Free
          </button>
        </div>
      </div>

      <!-- Related Posts Section -->
      <div class="mb-12">
        <h2 class="text-2xl font-bold mb-6">Related Articles</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div
            v-for="post in relatedPosts"
            :key="post.id"
            class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition"
          >
            <img
              :src="post.image"
              :alt="post.title"
              class="w-full h-40 object-cover rounded mb-3"
            />
            <div>
              <span class="text-xs text-blue-600 font-medium">{{
                post.category
              }}</span>
              <h3 class="font-bold text-gray-900 mb-2 line-clamp-2">
                {{ post.title }}
              </h3>
              <p class="text-gray-600 text-sm mb-3 line-clamp-2">
                {{ post.excerpt }}
              </p>
              <NuxtLink
                :to="`/blog/${post.id}`"
                class="text-blue-600 text-sm font-medium hover:text-blue-800 inline-flex items-center"
              >
                Read Article
                <svg
                  class="w-4 h-4 ml-1"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 5l7 7-7 7"
                  ></path>
                </svg>
              </NuxtLink>
            </div>
          </div>
        </div>
      </div>

      <!-- Comments Section -->
      <div class="bg-white p-8 rounded-xl shadow-sm">
        <h2 class="text-2xl font-bold mb-6">Comments (1)</h2>

        <!-- Comment Form -->
        <div class="mb-8">
          <div class="flex items-start mb-4">
            <img
              src="https://api.dicebear.com/7.x/initials/svg?seed=User"
              alt="User"
              class="w-10 h-10 rounded-full mr-4"
            />
            <div class="flex-1">
              <textarea
                placeholder="Add your comment..."
                class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                rows="3"
              ></textarea>
            </div>
          </div>
          <div class="flex justify-end">
            <button
              class="bg-blue-600 text-white py-2 px-6 rounded-lg hover:bg-blue-700 transition"
            >
              Post Comment
            </button>
          </div>
        </div>

        <!-- Sample Comment -->
        <div class="border-t border-gray-100 pt-6">
          <div class="flex mb-6">
            <img
              src="https://api.dicebear.com/7.x/initials/svg?seed=Rajesh"
              alt="Commenter"
              class="w-10 h-10 rounded-full mr-4"
            />
            <div>
              <div class="flex items-center mb-1">
                <h4 class="font-bold mr-2">Rajesh Kumar</h4>
                <span class="text-sm text-gray-500">3 days ago</span>
              </div>
              <p class="text-gray-700">
                I've been using RX Billing for my clothing store, and it has
                completely transformed how we handle inventory. The low stock
                alerts are particularly helpful during busy seasons.
              </p>
              <div class="mt-2 flex items-center space-x-4">
                <button class="text-sm text-gray-500 hover:text-blue-600">
                  Reply
                </button>
                <div class="flex items-center">
                  <button class="text-gray-400 hover:text-blue-600">
                    <svg
                      class="w-5 h-5"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M5 15l7-7 7 7"
                      ></path>
                    </svg>
                  </button>
                  <span class="mx-1">12</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Newsletter Signup -->
      <div class="mt-12 bg-gray-800 text-white p-8 rounded-xl shadow-sm">
        <div class="text-center">
          <h3 class="text-2xl font-bold mb-2">Stay Updated</h3>
          <p class="text-gray-300 mb-6">
            Subscribe to our newsletter for the latest billing software tips and
            industry insights
          </p>
          <div class="flex max-w-md mx-auto">
            <input
              type="email"
              placeholder="Your email address"
              class="flex-1 p-3 rounded-l-lg text-gray-900 focus:outline-none"
            />
            <button
              class="bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-r-lg font-medium transition"
            >
              Subscribe
            </button>
          </div>
          <p class="text-xs text-gray-400 mt-4">
            We respect your privacy. Unsubscribe at any time.
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, computed } from "vue";

// Get route params
const route = useRoute();
const blogId = route.params.id;

// This would normally come from an API or store
const allBlogs = [
  {
    id: "best-billing-software-for-retail-shop",
    title: "Best Billing Software for Retail Shop",
    excerpt:
      "Discover how RX Billing helps retail shops streamline operations with fast billing, inventory tracking, and GST compliance - all in one platform.",
    image:
      "https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
    date: "2025-04-25",
    category: "Retail",
    readTime: "5 min read",
    tags: ["retail", "billing", "inventory"],
  },
  {
    id: "best-billing-software-for-restaurant",
    title: "Best Billing Software for Restaurant",
    excerpt:
      "Explore features that make RX Billing perfect for restaurants - table management, kitchen orders, and quick payment processing.",
    image:
      "https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
    date: "2025-04-22",
    category: "Restaurant",
    readTime: "6 min read",
    tags: ["restaurant", "billing", "kitchen management"],
  },
  {
    id: "best-billing-software-for-supermarket",
    title: "Best Billing Software for Supermarket",
    excerpt:
      "Why supermarkets choose RX Billing for handling high-volume transactions, barcode scanning, and multi-counter operations.",
    image:
      "https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
    date: "2025-04-18",
    category: "Supermarket",
    readTime: "7 min read",
    tags: ["supermarket", "high-volume", "barcode"],
  },
  {
    id: "best-billing-software-in-chennai",
    title: "Best Billing Software In Chennai",
    excerpt:
      "Local businesses in Chennai benefit from RX Billing's Tamil language support and regional tax compliance features.",
    image:
      "https://images.unsplash.com/photo-1587825140708-dfaf72ae4b04?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
    date: "2025-04-15",
    category: "Regional",
    readTime: "4 min read",
    tags: ["chennai", "tamil", "regional"],
  },
  {
    id: "best-multi-branch-billing-software",
    title: "Best Multi Branch Billing Software",
    excerpt:
      "Manage multiple locations seamlessly with centralized reporting and inventory synchronization across branches.",
    image:
      "https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
    date: "2025-04-12",
    category: "Enterprise",
    readTime: "8 min read",
    tags: ["multi-branch", "enterprise", "synchronization"],
  },
  {
    id: "most-popular-billing-software-for-small-business",
    title: "Most Popular Billing Software for Small Business",
    excerpt:
      "Affordable yet powerful - why small businesses love RX Billing's easy setup and comprehensive features.",
    image:
      "https://images.unsplash.com/photo-1556742044-3c52d6e88c62?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
    date: "2025-04-08",
    category: "Small Business",
    readTime: "5 min read",
    tags: ["small business", "affordable", "startup"],
  },
  {
    id: "billing-software-with-ecommerce-integration",
    title: "Billing Software with E-Commerce Integration",
    excerpt:
      "Sync your physical store with online sales through RX Billing's e-commerce connectors and unified inventory.",
    image:
      "https://images.unsplash.com/photo-1556740758-90de374c12ad?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
    date: "2025-04-05",
    category: "E-commerce",
    readTime: "6 min read",
    tags: ["e-commerce", "omnichannel", "integration"],
  },
  {
    id: "top-10-billing-software-in-chennai",
    title: "Top 10 Billing Software In Chennai",
    excerpt:
      "See how RX Billing compares to other solutions in Chennai's competitive retail software market.",
    image:
      "https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
    date: "2025-04-02",
    category: "Comparison",
    readTime: "9 min read",
    tags: ["comparison", "chennai", "top 10"],
  },
  {
    id: "low-price-billing-software",
    title: "Low Price Billing Software",
    excerpt:
      "Get enterprise-level features without the high cost - RX Billing's affordable pricing plans explained.",
    image:
      "https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
    date: "2025-03-29",
    category: "Pricing",
    readTime: "4 min read",
    tags: ["affordable", "pricing", "budget"],
  },
  {
    id: "most-popular-billing-software",
    title: "Most Popular Billing Software",
    excerpt:
      "Why RX Billing is becoming the go-to choice for businesses across India - features that set us apart.",
    image:
      "https://images.unsplash.com/photo-1526628953301-3e589a6a8b74?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
    date: "2025-03-25",
    category: "Trending",
    readTime: "5 min read",
    tags: ["popular", "trending", "comparison"],
  },
  {
    id: "gst-compliant-billing-software",
    title: "Why GST Compliant Billing Software is Essential in 2025",
    excerpt:
      "Learn how RX Billing's GST features help businesses stay compliant with latest tax regulations while simplifying the billing process.",
    image:
      "https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
    date: "2025-04-02",
    category: "Compliance",
    readTime: "4 min read",
    tags: ["GST", "tax", "compliance", "billing"],
  },
  {
    id: "cloud-based-vs-offline-billing-software",
    title: "Cloud-Based vs. Offline Billing Software: Which is Right for You?",
    excerpt:
      "Compare the benefits of cloud-based and offline billing solutions to determine which option better suits your business needs.",
    image:
      "https://images.unsplash.com/photo-1614064548237-096d10bde6a6?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
    date: "2025-03-20",
    category: "Technology",
    readTime: "7 min read",
    tags: ["cloud", "technology", "comparison", "software"],
  },
];

// Find the current blog
const blog = computed(() => {
  return allBlogs.find((b) => b.id === blogId) || allBlogs[0];
});

// Get related posts (from same category or with shared tags)
const relatedPosts = computed(() => {
  if (!blog.value) return [];

  return allBlogs
    .filter((b) => {
      // Don't include the current blog
      if (b.id === blogId) return false;

      // Include if same category
      if (b.category === blog.value.category) return true;

      // Include if has shared tags
      return b.tags.some((tag) => blog.value.tags.includes(tag));
    })
    .slice(0, 3); // Limit to 3 related posts
});

// Format date helper
const formatDate = (dateString) => {
  const date = new Date(dateString);
  return new Intl.DateTimeFormat("en-US", {
    month: "short",
    day: "numeric",
    year: "numeric",
  }).format(date);
};

// Set page metadata for SEO
useHead(() => ({
  title: blog.value ? `${blog.value.title} - RX Billing` : "Blog - RX Billing",
  meta: [
    {
      name: "description",
      content: blog.value ? blog.value.excerpt : "RX Billing Blog Articles",
    },
    {
      name: "keywords",
      content: blog.value
        ? `billing software, RX Billing, ${blog.value.tags.join(", ")}`
        : "billing software, RX Billing, retail management",
    },
    {
      property: "og:title",
      content: blog.value ? blog.value.title : "RX Billing Blog",
    },
    {
      property: "og:description",
      content: blog.value
        ? blog.value.excerpt
        : "Expert articles on billing software solutions",
    },
    {
      property: "og:image",
      content: blog.value ? blog.value.image : "",
    },
    {
      property: "og:type",
      content: "article",
    },
    {
      property: "article:published_time",
      content: blog.value ? blog.value.date : "",
    },
  ],
}));
</script>

<style>
/* Optional custom styles */
.prose h2 {
  @apply text-2xl font-bold text-gray-900 mt-8 mb-4;
}

.prose h3 {
  @apply text-xl font-bold text-gray-800 mt-6 mb-3;
}

.prose p {
  @apply mb-4;
}

.prose ul {
  @apply my-4 list-disc pl-6;
}

.prose ul li {
  @apply mb-2;
}

.prose blockquote {
  @apply border-l-4 border-blue-600 pl-4 py-2 my-6 text-gray-700 italic;
}

.line-clamp-2 {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
</style>
