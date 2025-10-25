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
              Best Billing Software in Chennai – Boost Your Business with RX
              Billing (2025)
            </h1>

            <p class="mb-4">
              Running a retail shop, supermarket, restaurant, or wholesale
              business in Chennai? You need the
              <strong>best billing software in Chennai</strong> to handle fast
              invoicing, GST billing, inventory, and customer management.
              <strong>RX Billing</strong> is the perfect choice — trusted by
              hundreds of businesses across Tamil Nadu.
            </p>

            <p class="mb-4">
              RX Billing is designed to make billing simple, fast, and reliable
              — whether you run a Kirana store, a large supermarket, a café, or
              a wholesale outlet.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              Why RX Billing is the Best Billing Software in Chennai
            </h2>

            <p class="mb-4">
              Chennai’s business environment is growing rapidly, and to stay
              competitive, your billing software needs to be modern,
              GST-compliant, and fast. RX Billing offers all that and more —
              with the features perfectly suited for Chennai-based businesses.
            </p>

            <ul class="list-disc pl-6 mb-6">
              <li>Lightning-fast billing and invoicing</li>
              <li>GST-compliant bills and tax reports</li>
              <li>Barcode scanner integration</li>
              <li>Inventory and stock management</li>
              <li>Customer loyalty programs</li>
              <li>Cash, Card, UPI, Wallet payment support</li>
              <li>Multi-store/branch management</li>
              <li>Detailed sales analytics and reports</li>
              <li>Cloud backup and offline mode</li>
              <li>24/7 customer support in Tamil and English</li>
            </ul>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              Industries RX Billing Supports in Chennai
            </h2>

            <ul class="list-disc pl-6 mb-6">
              <li>Retail Shops</li>
              <li>Supermarkets and Grocery Stores</li>
              <li>Restaurants and Cafés</li>
              <li>Pharmacies and Medical Stores</li>
              <li>Wholesale and Distribution Businesses</li>
              <li>Textile and Fashion Shops</li>
              <li>Electronics and Mobile Stores</li>
            </ul>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              Key Features of RX Billing
            </h2>

            <h3 class="text-xl font-semibold mt-6 mb-2">
              Fast and Accurate Billing
            </h3>
            <p class="mb-4">
              RX Billing ensures you can generate invoices within seconds — even
              during busy hours. Our barcode scanner support makes checkout
              lightning-fast.
            </p>

            <h3 class="text-xl font-semibold mt-6 mb-2">
              GST Filing Made Easy
            </h3>
            <p class="mb-4">
              With RX Billing, you can automatically generate GST invoices and
              monthly tax reports. Simplify your GST filing without any
              headaches.
            </p>

            <h3 class="text-xl font-semibold mt-6 mb-2">
              Inventory Management
            </h3>
            <p class="mb-4">
              Track your stock, receive alerts for low inventory, and manage
              purchases and sales efficiently — ideal for retail and wholesale
              businesses.
            </p>

            <h3 class="text-xl font-semibold mt-6 mb-2">
              Multi-Branch Management
            </h3>
            <p class="mb-4">
              RX Billing allows you to manage multiple branches across Chennai
              and Tamil Nadu from a single dashboard — track sales, stocks, and
              performance easily.
            </p>

            <h3 class="text-xl font-semibold mt-6 mb-2">24/7 Local Support</h3>
            <p class="mb-4">
              We offer full Tamil and English language support with quick
              assistance via call, WhatsApp, and email — no waiting for days to
              fix issues.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              Benefits of Choosing RX Billing for Your Chennai Business
            </h2>

            <ul class="list-disc pl-6 mb-6">
              <li>Increase billing speed and customer satisfaction</li>
              <li>Save time with automated reports</li>
              <li>Reduce manual errors with barcode billing</li>
              <li>Stay 100% GST-compliant</li>
              <li>Manage stock and purchase easily</li>
              <li>Handle multiple stores from one software</li>
            </ul>

            <h2 class="text-2xl font-semibold mt-8 mb-4">Final Thoughts</h2>

            <p class="mb-4">
              When it comes to the
              <strong>best billing software in Chennai</strong>, RX Billing is
              trusted by top businesses for its speed, reliability, GST
              compliance, and outstanding customer support. Grow your business
              confidently with RX Billing by your side.
            </p>

            <p class="mb-8">
              🚀
              <a href="/contact" class="text-blue-600 underline">Contact us</a>
              today for a free demo and see why RX Billing is the #1 choice for
              Chennai businesses!
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              Frequently Asked Questions (FAQs)
            </h2>

            <h3 class="text-xl font-semibold mt-6 mb-2">
              Is RX Billing GST compliant?
            </h3>
            <p class="mb-4">
              Yes, RX Billing is 100% GST-compliant and helps you generate GST
              invoices and reports easily.
            </p>

            <h3 class="text-xl font-semibold mt-6 mb-2">
              Can RX Billing support multiple stores?
            </h3>
            <p class="mb-4">
              Absolutely! You can manage multiple stores across Chennai and
              Tamil Nadu using RX Billing’s multi-branch system.
            </p>

            <h3 class="text-xl font-semibold mt-6 mb-2">
              Does RX Billing offer local support?
            </h3>
            <p class="mb-4">
              Yes, RX Billing offers dedicated support in Tamil and English via
              call, WhatsApp, and email.
            </p>

            <h3 class="text-xl font-semibold mt-6 mb-2">
              How fast is RX Billing’s setup?
            </h3>
            <p class="mb-4">
              Our team can get you up and running with RX Billing within 1 day,
              including staff training!
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
            title="RX Square Regional Solutions Team"
            subtitle="Local Experts in Tamil Nadu Business Requirements"
            description="Focused on empowering Chennai’s retail ecosystem, our team ensures RX Billing supports Tamil language, regional tax structures, and cultural business nuances—making it the ideal solution for local stores."
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
      isLiked: false,
      likeCount: 60,
      commentText: "",
      comments: [
        {
          name: "Rajesh Kumar",
          avatar: "https://randomuser.me/api/portraits/men/32.jpg",
          date: "2 days ago",
          text: "The Tamil language support in RX Billing has been a game-changer for our staff in Chennai!",
          likes: 8,
        },
        {
          name: "Priya Venkat",
          avatar: "https://randomuser.me/api/portraits/women/44.jpg",
          date: "1 week ago",
          text: "How does the software handle Chennai's specific tax requirements?",
          likes: 5,
        },
      ],
      relatedPosts: [
        {
          slug: "business-software-chennai",
          title: "Best Business Software Solutions in Chennai",
          image:
            "https://images.unsplash.com/photo-1587825140708-dfaf72ae4b04?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80",
          date: "2025-03-22",
        },
        {
          slug: "tamil-software-solutions",
          title: "Tamil Language Support in Business Software",
          image:
            "https://images.unsplash.com/photo-1590658268037-6bf12165a8df?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80",
          date: "2025-02-15",
        },
        {
          slug: "chennai-market-trends",
          title: "Chennai Market Trends for Small Businesses",
          image:
            "https://images.unsplash.com/photo-1587474260584-136574528ed5?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80",
          date: "2025-01-08",
        },
      ],
      categories: [
        { name: "Chennai Business", slug: "chennai-business", count: 24 },
        { name: "Regional Solutions", slug: "regional-solutions", count: 18 },
        { name: "Tamil Support", slug: "tamil-support", count: 15 },
        {
          name: "Local Tax Compliance",
          slug: "local-tax-compliance",
          count: 12,
        },
        { name: "Chennai Market", slug: "chennai-market", count: 20 },
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
  title: "Best Billing Software in Chennai – RX Billing (2025)",
  description:
    "Discover the best billing software in Chennai! RX Billing offers fast GST billing, inventory management, barcode support, and real-time reporting — perfect for shops, supermarkets, and restaurants in Chennai.",
});
</script>
