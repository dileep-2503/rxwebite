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
              Retail Inventory Management Software: Stop Stock-Outs in 2025
            </h1>
            <p class="mb-4">
              Prevent revenue loss with RX Billing's smart inventory
              forecasting, real-time stock alerts, and automated reordering
              capabilities. Our retail inventory management software helps you
              maintain optimal stock levels and avoid costly stock-outs.
            </p>

            <div class="space-y-6">
              <div class="bg-gray-100 p-6 rounded-md shadow-md">
                <h2 class="text-2xl font-semibold mb-2">
                  Key Features of RX Billing Inventory Management
                </h2>
                <ul class="list-disc pl-5 space-y-2">
                  <li>
                    <strong>Smart Forecasting</strong>: Analyze sales trends to
                    predict inventory needs accurately.
                  </li>
                  <li>
                    <strong>Real-Time Stock Alerts</strong>: Get instant
                    notifications when stock levels fall below thresholds.
                  </li>
                  <li>
                    <strong>Automated Reordering</strong>: Set reorder points
                    and automate purchase orders to suppliers.
                  </li>
                  <li>
                    <strong>Multi-Store Inventory Tracking</strong>: Manage
                    stock across multiple retail locations seamlessly.
                  </li>
                  <li>
                    <strong>Barcode Scanning</strong>: Speed up stock counting
                    and sales with barcode integration.
                  </li>
                  <li>
                    <strong>Detailed Reporting</strong>: Access comprehensive
                    inventory reports to optimize stock management.
                  </li>
                </ul>
              </div>

              <div class="bg-gray-100 p-6 rounded-md shadow-md">
                <h2 class="text-2xl font-semibold mb-2">
                  Benefits of Using RX Billing for Retail Inventory
                </h2>
                <p class="text-lg mb-2">
                  RX Billing helps retailers avoid lost sales due to stock-outs
                  and reduce excess inventory costs. Our software streamlines
                  inventory management so you can focus on growing your
                  business.
                </p>
                <p class="text-lg">
                  With real-time data and automation, you gain full control over
                  your stock, improve customer satisfaction, and increase
                  profitability.
                </p>
              </div>

              <div class="bg-gray-100 p-6 rounded-md shadow-md">
                <h2 class="text-2xl font-semibold mb-2">
                  Getting Started with RX Billing Inventory Management
                </h2>
                <ul class="list-disc pl-5 space-y-2">
                  <li>
                    Sign up for RX Billing and configure your inventory
                    settings.
                  </li>
                  <li>
                    Add your products with stock levels and reorder points.
                  </li>
                  <li>
                    Use barcode scanning for quick stock updates and sales.
                  </li>
                  <li>
                    Set up automated reorder rules to maintain optimal
                    inventory.
                  </li>
                  <li>
                    Monitor inventory reports and adjust your stock strategy.
                  </li>
                </ul>
              </div>

              <div class="mt-8">
                <h3 class="text-2xl font-semibold mb-4">
                  Ready to Optimize Your Retail Inventory?
                </h3>
                <p class="mb-4">
                  Take control of your stock and prevent costly stock-outs with
                  RX Billing. Contact us today for a demo or more information.
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
            title="RX Square Inventory Solutions Team"
            subtitle="Experts in Stock Management & Forecasting"
            description="Our team develops intelligent retail inventory management systems that prevent stock-outs and optimize stock levels. With features like smart forecasting, real-time alerts, and automated reordering, we ensure retailers can meet customer demand without losing revenue."
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
        id: "retail-inventory-management-software",
        title: "Retail Inventory Management Software: Stop Stock-Outs in 2025",
        excerpt:
          "Prevent revenue loss with RX Billing's smart inventory forecasting, real-time stock alerts, and automated reordering capabilities.",
        image:
          "https://images.unsplash.com/photo-1553413077-190dd305871c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
        date: "2025-03-08",
        category: "Inventory",
        readTime: "7 min read",
        tags: ["inventory", "stock management", "forecasting"],
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
        { name: "Inventory", slug: "inventory", count: 25 },
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
};
</script>

<script setup>
definePageMeta({
  title: "Retail Inventory Management Software: Stop Stock-Outs in 2025",
  description:
    "Prevent revenue loss with RX Billing's smart inventory forecasting, real-time stock alerts, and automated reordering capabilities.",
  keywords: "inventory, stock management, forecasting, RX Billing",
  ogTitle: "Retail Inventory Management Software: Stop Stock-Outs in 2025",
  ogDescription:
    "Prevent revenue loss with RX Billing's smart inventory forecasting, real-time stock alerts, and automated reordering capabilities.",
  ogImage: "/images/inventory-management.jpg",
  ogUrl: "https://www.rxsquare.in/blog/retail-inventory-management-software",
});
</script>
