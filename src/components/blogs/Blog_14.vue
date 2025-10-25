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
              Billing Software for Wholesale Business: Managing Bulk Orders
              Efficiently
            </h1>
            <p class="mb-4">
              RX Billing's wholesale features are designed to help businesses
              manage large orders with ease. From tiered pricing to bulk
              inventory management, our software streamlines your wholesale
              operations.
            </p>

            <div class="space-y-6">
              <div class="bg-gray-100 p-6 rounded-md shadow-md">
                <h2 class="text-2xl font-semibold mb-2">
                  Key Features for Wholesale Billing
                </h2>
                <ul class="list-disc pl-5 space-y-2">
                  <li>
                    <strong>Bulk Order Management</strong>: Easily process and
                    track large orders with automated workflows.
                  </li>
                  <li>
                    <strong>Tiered Pricing</strong>: Offer customized pricing
                    based on order volume or customer category.
                  </li>
                  <li>
                    <strong>Inventory Control</strong>: Monitor stock levels in
                    real-time to avoid shortages or overstocking.
                  </li>
                  <li>
                    <strong>GST Compliant Invoicing</strong>: Generate invoices
                    that comply with GST regulations effortlessly.
                  </li>
                  <li>
                    <strong>Multi-User Access</strong>: Allow multiple team
                    members to manage billing and orders simultaneously.
                  </li>
                  <li>
                    <strong>Detailed Reporting</strong>: Access comprehensive
                    reports to analyze sales trends and customer behavior.
                  </li>
                </ul>
              </div>

              <div class="bg-gray-100 p-6 rounded-md shadow-md">
                <h2 class="text-2xl font-semibold mb-2">
                  Benefits of Using RX Billing for Wholesale Business
                </h2>
                <p class="text-lg mb-2">
                  RX Billing simplifies the complexities of wholesale billing,
                  helping you save time and reduce errors. Our software adapts
                  to your business needs, whether you're a small wholesaler or a
                  large distributor.
                </p>
                <p class="text-lg">
                  With RX Billing, you can focus on growing your business while
                  we handle the billing intricacies. Enjoy seamless integration
                  with your existing systems and a user-friendly interface
                  designed for efficiency.
                </p>
              </div>

              <div class="bg-gray-100 p-6 rounded-md shadow-md">
                <h2 class="text-2xl font-semibold mb-2">
                  How to Get Started with RX Billing Wholesale Features
                </h2>
                <ul class="list-disc pl-5 space-y-2">
                  <li>Sign up for RX Billing and select the wholesale plan.</li>
                  <li>
                    Set up your product catalog with bulk pricing options.
                  </li>
                  <li>Configure user roles and permissions for your team.</li>
                  <li>
                    Start managing orders and generating GST-compliant invoices.
                  </li>
                  <li>
                    Utilize reporting tools to optimize your wholesale
                    operations.
                  </li>
                </ul>
              </div>

              <div class="mt-8">
                <h3 class="text-2xl font-semibold mb-4">
                  Ready to Streamline Your Wholesale Billing?
                </h3>
                <p class="mb-4">
                  Discover how RX Billing can transform your wholesale business.
                  Contact us today for a demo or more information.
                </p>
                <a
                  href="https://www.rxsquare.in/contact"
                  class="text-blue-500 font-semibold"
                  >Contact Us for More Information</a
                >
              </div>
            </div>
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
            title="RX Square Wholesale Solutions Team"
            subtitle="Experts in Bulk Order & Pricing Strategies"
            description="Our team specializes in building billing systems tailored for wholesale businesses. We help streamline bulk order management, offer flexible tiered pricing, and simplify inventory control, ensuring efficiency and profitability for high-volume transactions."
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
        id: "billing-software-for-wholesale-business",
        title:
          "Billing Software for Wholesale Business: Managing Bulk Orders Efficiently",
        excerpt:
          "RX Billing's wholesale features allow you to manage large orders, offer tiered pricing, and simplify bulk inventory management.",
        image:
          "https://images.unsplash.com/photo-1566576912321-d58ddd7a6088?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
        date: "2025-03-12",
        category: "Wholesale",
        readTime: "6 min read",
        tags: ["wholesale", "bulk orders", "tiered pricing"],
      },
      isLiked: false,
      likeCount: 0,
      commentText: "",
      comments: [],
      relatedPosts: [
        {
          slug: "most-popular-billing-software",
          title: "Most Popular Billing Software in India (2025 Edition)",
          image:
            "https://images.unsplash.com/photo-1526628953301-3e589a6a8b74?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80",
          date: "2025-03-25",
        },
        {
          slug: "gst-software-comparison",
          title: "Best GST Software for Small Businesses",
          image:
            "https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80",
          date: "2025-03-10",
        },
        {
          slug: "ecommerce-billing",
          title: "E-commerce Billing Solutions",
          image:
            "https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80",
          date: "2025-01-20",
        },
      ],
      categories: [
        { name: "Wholesale", slug: "wholesale", count: 20 },
        { name: "Billing Solutions", slug: "billing-solutions", count: 42 },
        { name: "Business Tools", slug: "business-tools", count: 28 },
        { name: "Financial Technology", slug: "fintech", count: 19 },
        { name: "SME Solutions", slug: "sme-solutions", count: 31 },
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
      title: "Billing Software for Wholesale Business | RX Billing",
      meta: [
        {
          name: "description",
          content:
            "RX Billing's wholesale features allow you to manage large orders, offer tiered pricing, and simplify bulk inventory management.",
        },
        {
          name: "keywords",
          content:
            "wholesale billing software, bulk orders, tiered pricing, RX Billing",
        },
      ],
      script: [
        {
          type: "application/ld+json",
          innerHTML: JSON.stringify({
            "@context": "https://schema.org",
            "@type": "Article",
            headline:
              "Billing Software for Wholesale Business: Managing Bulk Orders Efficiently",
            description:
              "RX Billing's wholesale features allow you to manage large orders, offer tiered pricing, and simplify bulk inventory management.",
            author: {
              "@type": "Person",
              name: "Rahul Mehta",
              jobTitle: "Billing Solutions Specialist",
            },
            datePublished: "2025-03-12",
            image:
              "https://images.unsplash.com/photo-1566576912321-d58ddd7a6088?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
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
      ],
    };
  },
};
</script>

<script setup>
definePageMeta({
  title:
    "Billing Software for Wholesale Business: Managing Bulk Orders Efficiently",
  description:
    "RX Billing's wholesale features allow you to manage large orders, offer tiered pricing, and simplify bulk inventory management.",
  keywords:
    "wholesale billing software, bulk orders, tiered pricing, RX Billing",
  ogTitle:
    "Billing Software for Wholesale Business: Managing Bulk Orders Efficiently",
  ogDescription:
    "RX Billing's wholesale features allow you to manage large orders, offer tiered pricing, and simplify bulk inventory management.",
  ogImage: "/images/wholesale-billing.jpg",
  ogUrl: "https://www.rxsquare.in/blog/billing-software-for-wholesale-business",
});
</script>
