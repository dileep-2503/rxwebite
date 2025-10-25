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
              Mobile Billing Software for Small Business: Bill Anywhere, Anytime
            </h1>
            <p class="mb-4">
              Run your business on the go with RX Billing's powerful mobile app,
              designed specifically for small businesses that need flexibility
              and mobility. Whether you're in the field, making home deliveries,
              or running a pop-up store, RX Billing keeps your billing process
              seamless and efficient.
            </p>

            <div class="space-y-6">
              <div class="bg-gray-100 p-6 rounded-md shadow-md">
                <h2 class="text-2xl font-semibold mb-2">
                  Key Features of RX Billing Mobile App
                </h2>
                <ul class="list-disc pl-5 space-y-2">
                  <li>
                    <strong>Bill Anywhere, Anytime</strong>: Create and send
                    invoices directly from your mobile device, no matter where
                    you are.
                  </li>
                  <li>
                    <strong>Real-Time Sync</strong>: All your billing data syncs
                    instantly with the cloud, ensuring your records are always
                    up to date.
                  </li>
                  <li>
                    <strong>Easy Inventory Management</strong>: Track your stock
                    levels on the go and get alerts when items run low.
                  </li>
                  <li>
                    <strong>GST Compliant Invoicing</strong>: Automatically
                    calculate GST and generate compliant invoices with ease.
                  </li>
                  <li>
                    <strong>Secure Payments</strong>: Accept payments securely
                    through integrated payment gateways.
                  </li>
                  <li>
                    <strong>Customer Management</strong>: Maintain customer
                    details and billing history for quick access.
                  </li>
                  <li>
                    <strong>Offline Mode</strong>: Continue billing even without
                    internet access; data syncs once you're back online.
                  </li>
                </ul>
              </div>

              <div class="bg-gray-100 p-6 rounded-md shadow-md">
                <h2 class="text-2xl font-semibold mb-2">
                  Why Choose RX Billing for Your Mobile Business?
                </h2>
                <p class="text-lg mb-2">
                  RX Billing empowers small business owners to manage their
                  billing effortlessly while on the move. Its intuitive
                  interface and robust features reduce manual errors and save
                  valuable time.
                </p>
                <p class="text-lg">
                  With RX Billing, you can focus on growing your business
                  without worrying about complex billing processes. The mobile
                  app is designed to be user-friendly and reliable, making it
                  the perfect companion for your business needs.
                </p>
              </div>

              <div class="bg-gray-100 p-6 rounded-md shadow-md">
                <h2 class="text-2xl font-semibold mb-2">
                  Getting Started with RX Billing Mobile App
                </h2>
                <ul class="list-disc pl-5 space-y-2">
                  <li>
                    Download the RX Billing app from your device's app store.
                  </li>
                  <li>Create your account and set up your business profile.</li>
                  <li>Add your products and services with pricing details.</li>
                  <li>
                    Start creating invoices and managing payments on the go.
                  </li>
                  <li>
                    Access detailed reports and analytics anytime, anywhere.
                  </li>
                </ul>
              </div>

              <div class="mt-8">
                <h3 class="text-2xl font-semibold mb-4">
                  Ready to Take Your Billing Mobile?
                </h3>
                <p class="mb-4">
                  Experience the convenience and power of RX Billing's mobile
                  app today. Streamline your billing process and never miss a
                  sale, no matter where your business takes you.
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
            title="RX Square Mobile Solutions Team"
            subtitle="Experts in On-the-Go Billing Systems"
            description="Our mobile solutions team designs powerful billing apps tailored for small businesses that require flexibility and mobility. Whether you're in the field, making home deliveries, or running a pop-up store, we ensure your billing process stays seamless and efficient, no matter where you are."
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
        id: "mobile-billing-software-for-small-business",
        title:
          "Mobile Billing Software for Small Business: Bill Anywhere, Anytime",
        excerpt:
          "Run your business on the go with RX Billing's powerful mobile app, designed specifically for small businesses that need flexibility and mobility. Whether you're in the field, making home deliveries, or running a pop-up store, RX Billing keeps your billing process seamless and efficient.",
        image:
          "https://images.unsplash.com/photo-1512428559087-560fa5ceab42?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
        date: "2025-03-15",
        category: "Mobile Solutions",
        readTime: "5 min read",
        tags: ["mobile", "on-the-go", "field sales"],
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
        { name: "Mobile Solutions", slug: "mobile-solutions", count: 15 },
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
      title:
        "Mobile Billing Software for Small Business | RX Billing Mobile App",
      meta: [
        {
          name: "description",
          content:
            "Run your business on the go with RX Billing's mobile app, perfect for field sales, home deliveries, and pop-up stores. Discover features like real-time sync, GST invoicing, and offline mode.",
        },
        {
          name: "keywords",
          content:
            "mobile billing software, RX Billing app, small business billing, on-the-go invoicing, GST compliant billing",
        },
      ],
      script: [
        {
          type: "application/ld+json",
          innerHTML: JSON.stringify({
            "@context": "https://schema.org",
            "@type": "Article",
            headline:
              "Mobile Billing Software for Small Business: Bill Anywhere, Anytime",
            description:
              "Run your business on the go with RX Billing's powerful mobile app, designed for small businesses needing flexibility and mobility.",
            author: {
              "@type": "Person",
              name: "Rahul Mehta",
              jobTitle: "Billing Solutions Specialist",
            },
            datePublished: "2025-03-15",
            image:
              "https://images.unsplash.com/photo-1512428559087-560fa5ceab42?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
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
  title: "Mobile Billing Software for Small Business: Bill Anywhere, Anytime",
  description:
    "Run your business on the go with RX Billing's powerful mobile app, perfect for field sales, home deliveries, and pop-up stores.",
  keywords:
    "mobile billing software, RX Billing app, small business billing, on-the-go invoicing, GST compliant billing",
  ogTitle: "Mobile Billing Software for Small Business: Bill Anywhere, Anytime",
  ogDescription:
    "Run your business on the go with RX Billing's mobile app, perfect for field sales, home deliveries, and pop-up stores.",
  ogImage: "/images/phone-app-screen.webp",
  ogUrl:
    "https://www.rxsquare.in/blog/mobile-billing-software-for-small-business",
});
</script>
