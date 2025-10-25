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
              RX Billing Software - Best Billing Solution in Chennai
            </h1>
            <p class="mb-4">
              RX Billing Software is the ultimate billing solution for
              businesses in Chennai. With powerful features like real-time
              inventory management, GST-compliant invoicing, and e-commerce
              integration, it’s the ideal choice for retailers, wholesalers, and
              businesses of all sizes. Here's why RX Billing is the best
              software for your business:
            </p>

            <div class="space-y-6">
              <div class="bg-gray-100 p-6 rounded-md shadow-md">
                <h2 class="text-2xl font-semibold mb-2">
                  Key Features of RX Billing Software
                </h2>
                <ul class="list-disc pl-5 space-y-2">
                  <li>
                    <strong>E-commerce Integration</strong>: Seamlessly
                    integrate your online store with RX Billing to manage both
                    online and offline sales.
                  </li>
                  <li>
                    <strong>Real-time Inventory</strong>: Automatically sync
                    your inventory across all channels to prevent stockouts or
                    over-selling.
                  </li>
                  <li>
                    <strong>GST Invoicing</strong>: Generate GST-compliant
                    invoices with ease, ensuring your business stays
                    tax-compliant.
                  </li>
                  <li>
                    <strong>Automated Reports</strong>: Get instant reports for
                    sales, inventory, and financial data, saving time and
                    improving decision-making.
                  </li>
                  <li>
                    <strong>Multi-Channel Sales</strong>: Track sales from
                    various platforms (offline and online) and get a unified
                    view of your business performance.
                  </li>
                  <li>
                    <strong>Unlimited Users</strong>: Add unlimited users and
                    control permissions to give your team access to the right
                    tools.
                  </li>
                  <li>
                    <strong
                      >Accounts and HR Payroll with Attendance
                      Integration</strong
                    >: Manage payroll, attendance, and employee details in one
                    place.
                  </li>
                  <li>
                    <strong>Marketing Campaigns in a Single Click</strong>:
                    Launch marketing campaigns directly from your software,
                    helping you reach more customers easily.
                  </li>
                  <li>
                    <strong>Online, Offline Software with Sync Data</strong>:
                    Whether you're online or offline, your data syncs
                    automatically when you're back online, ensuring you never
                    lose any information.
                  </li>
                </ul>
              </div>

              <div class="bg-gray-100 p-6 rounded-md shadow-md">
                <h2 class="text-2xl font-semibold mb-2">
                  Why Choose RX Billing Software?
                </h2>
                <p class="text-lg mb-2">
                  RX Billing is the perfect software for businesses looking to
                  streamline their billing, inventory, and financial operations.
                  Whether you're running a small retail shop or a large
                  e-commerce platform, RX Billing provides a cost-effective
                  solution that’s both powerful and easy to use.
                </p>
                <p class="text-lg">
                  <strong>Low-Cost Solution</strong>: RX Billing offers all of
                  these features at an affordable price, making it the best
                  value for businesses in Chennai. Get started today and
                  transform your business operations.
                </p>
              </div>
            </div>

            <div class="mt-8">
              <h3 class="text-2xl font-semibold mb-4">
                Get Started with RX Billing Today
              </h3>
              <p class="mb-4">
                Ready to take your business to the next level? Contact us today
                to schedule a demo or learn more about how RX Billing Software
                can streamline your operations.
              </p>
              <a
                href="https://www.rxsquare.in/contact"
                class="text-blue-500 font-semibold"
                >Contact Us</a
              >
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
            title="RX Square Pricing Team"
            subtitle="Making Powerful Billing Accessible"
            description="Our pricing team ensures businesses of all sizes get access to premium billing features at affordable rates, helping you grow without breaking your budget."
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

<script setup>
definePageMeta({
  title: "RX Billing Software - Best Billing Solution in Chennai",
  description:
    "RX Billing Software is the best billing solution for businesses in Chennai. With features like GST invoicing, real-time inventory, and e-commerce integration, it’s perfect for businesses of all sizes.",
  keywords:
    "Billing software in Chennai, RX Billing Software, GST invoicing, real-time inventory, e-commerce integration, low-cost billing software",
  ogTitle: "RX Billing Software - Best Billing Solution for Your Business",
  ogDescription:
    "Discover RX Billing Software, offering features like GST invoicing, real-time inventory management, and multi-channel sales tracking. The best billing software for businesses in Chennai.",
  ogImage: "/images/rx-billing-software-image.jpg", // Replace with an actual image URL
  ogUrl: "https://www.rxsquare.in/",
});
</script>

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
      isLiked: false,
      likeCount: 42,
      commentText: "",
      comments: [
        {
          name: "Rajesh Kumar",
          avatar: "https://randomuser.me/api/portraits/men/42.jpg",
          date: "2 days ago",
          text: "This comparison helped me choose RX Billing for my textile showroom. The GST features are exactly what I needed!",
          likes: 8,
        },
        {
          name: "Priya Nair",
          avatar: "https://randomuser.me/api/portraits/women/33.jpg",
          date: "5 days ago",
          text: "How does RX Billing compare to QuickBooks for export businesses?",
          likes: 5,
        },
      ],
      relatedPosts: [
        {
          slug: "gst-billing-software",
          title: "Best GST Billing Software for Chennai Businesses",
          image:
            "https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80",
          date: "2025-03-15",
        },
        {
          slug: "retail-management-solutions",
          title: "Retail Management Solutions for Chennai Stores",
          image:
            "https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80",
          date: "2025-02-28",
        },
        {
          slug: "inventory-software-chennai",
          title: "Inventory Management Software in Chennai",
          image:
            "https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80",
          date: "2025-01-10",
        },
      ],
      categories: [
        { name: "Billing Software", slug: "billing-software", count: 38 },
        { name: "Chennai Business", slug: "chennai-business", count: 25 },
        {
          name: "Software Comparisons",
          slug: "software-comparisons",
          count: 19,
        },
        { name: "Retail Solutions", slug: "retail-solutions", count: 32 },
        { name: "GST Compliance", slug: "gst-compliance", count: 28 },
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
      script: [
        {
          type: "application/ld+json",
          json: {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            mainEntity: [
              {
                "@type": "Question",
                name: "What are the features of RX Billing Software?",
                acceptedAnswer: {
                  "@type": "Answer",
                  text: "RX Billing Software offers E-commerce Integration, Real-time Inventory, GST Invoicing, Automated Reports, Multi-Channel Sales, Unlimited Users, Accounts and HR Payroll with Attendance Integration, and Marketing Campaigns in a Single Click.",
                },
              },
              {
                "@type": "Question",
                name: "Is RX Billing Software affordable for small businesses?",
                acceptedAnswer: {
                  "@type": "Answer",
                  text: "Yes, RX Billing Software is a low-cost solution that is ideal for small and medium-sized businesses. It provides all the essential features without the high cost.",
                },
              },
              {
                "@type": "Question",
                name: "Can RX Billing Software be used for both online and offline businesses?",
                acceptedAnswer: {
                  "@type": "Answer",
                  text: "Yes, RX Billing Software works for both online and offline businesses. It syncs data automatically to ensure accurate records, whether you're operating online or offline.",
                },
              },
            ],
          },
        },
      ],
    };
  },
};
</script>
