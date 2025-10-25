<template>
  <div v-if="blog" class="bg-gray-50 min-h-screen pb-16 mt-24">
    <!-- Hero Section -->
    <div class="relative h-96">
      <img
        :src="blog.image"
        :alt="'Touchscreen billing interface - ' + blog.title"
        class="w-full h-full object-cover"
      />
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
      <div
        class="container mx-auto px-4 lg:px-8 absolute inset-0 flex flex-col justify-center"
      >
        <div class="max-w-4xl">
          <div class="text-white mb-2 flex items-center space-x-2">
            <span class="bg-purple-600 text-xs px-3 py-1 rounded">{{
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
              Revolutionizing Retail Checkouts with Intuitive Touchscreen Design
            </h1>

            <p class="mb-4">
              In today's fast-paced retail environment, every second counts at
              checkout. RX Billing's touchscreen interface is engineered to
              minimize transaction times while maximizing ease of use. Here's
              how our interface design improves operational efficiency:
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              1. Streamlined Product Selection
            </h2>
            <p class="mb-4">
              Our interface makes finding and scanning products effortless:
            </p>
            <ul class="list-disc pl-6 mb-4">
              <li>Visual product grids with high-res thumbnails</li>
              <li>Color-coded category buttons</li>
              <li>One-touch access to frequently sold items</li>
              <li>Intelligent search with predictive text</li>
            </ul>
            <img
              src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
              alt="RX Billing touchscreen interface"
              class="w-full rounded-lg mb-4"
            />

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              2. Gesture-Based Navigation
            </h2>
            <p class="mb-4">Natural gestures that staff learn intuitively:</p>
            <div class="grid md:grid-cols-3 gap-4 mb-4">
              <div class="border rounded-lg p-4 bg-purple-50">
                <h3 class="font-bold text-lg">Swipe</h3>
                <p class="text-sm">Between product categories</p>
              </div>
              <div class="border rounded-lg p-4 bg-purple-50">
                <h3 class="font-bold text-lg">Pinch</h3>
                <p class="text-sm">To zoom product images</p>
              </div>
              <div class="border rounded-lg p-4 bg-purple-50">
                <h3 class="font-bold text-lg">Tap & Hold</h3>
                <p class="text-sm">For quick item details</p>
              </div>
            </div>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              3. Customizable Workspaces
            </h2>
            <p class="mb-4">Adapt the interface to your store's workflow:</p>
            <ul class="list-disc pl-6 mb-4">
              <li>Rearrange buttons based on frequency of use</li>
              <li>Create preset layouts for different departments</li>
              <li>Save multiple user profiles</li>
              <li>Adjust text size for visibility</li>
            </ul>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              4. Rapid Transaction Processing
            </h2>
            <p class="mb-4">Features that accelerate checkout:</p>
            <ul class="list-disc pl-6 mb-4">
              <li>One-touch payment method selection</li>
              <li>Split bills with finger gestures</li>
              <li>Instant discount application</li>
              <li>Customer signature capture</li>
            </ul>

            <div class="bg-purple-50 p-6 rounded-lg my-8">
              <h3 class="text-xl font-bold mb-2">
                Case Study: Delhi Supermarket Cuts Training Time by 70%
              </h3>
              <p class="mb-2">
                "After switching to RX Billing's touchscreen system, we reduced
                cashier training from 2 weeks to just 3 days. The intuitive
                design means new staff can achieve full checkout speed within a
                week."
              </p>
              <p class="font-semibold">
                - Ramesh Kumar, Operations Manager at FreshMart
              </p>
            </div>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              5. Accessibility Features
            </h2>
            <p class="mb-4">Designed for all users:</p>
            <ul class="list-disc pl-6 mb-4">
              <li>High-contrast mode for low-light environments</li>
              <li>Touch sensitivity adjustment</li>
              <li>Voice feedback for key actions</li>
              <li>Left-handed mode option</li>
            </ul>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              Implementing Touchscreen Billing in Your Store
            </h2>
            <p class="mb-4">Transitioning is simple with RX Billing:</p>
            <ol class="list-decimal pl-6 mb-4">
              <li>Choose compatible touchscreen hardware</li>
              <li>Customize your interface layout</li>
              <li>Train staff on gesture controls</li>
              <li>Run test transactions</li>
              <li>Go live with real-time support</li>
            </ol>

            <p class="mb-4">
              Ready to upgrade your checkout experience?
              <a href="/contact" class="text-purple-600 underline"
                >Contact out team</a
              >
              of our touchscreen interface.
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
            title="RX Square UX Team"
            subtitle="Retail Interface Specialists"
            description="Our UI/UX designers have optimized touchscreen interfaces for 700+ retail stores, reducing average checkout times by 40% and cutting staff training time in half. We specialize in intuitive designs that anyone can use with minimal instruction."
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
import AuthorCard from "./AuthorCard.vue";
import BlogBackButton from "./BlogBackButton.vue";
import PostInteraction from "./PostInteraction.vue";

export default {
  components: {
    BlogBackButton,
    PostInteraction,
    AuthorCard,
  },
  data() {
    return {
      blog: {
        id: "touchscreen-billing-software-interface",
        title:
          "Touchscreen Billing Software Interface: Faster, Easier Checkouts",
        excerpt:
          "Speed up transactions and reduce training time with RX Billing's intuitive touchscreen interface designed for retail efficiency.",
        image:
          "https://images.unsplash.com/photo-1512428813834-c702c7702b78?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
        date: "2025-01-18",
        category: "User Interface",
        readTime: "4 min read",
        tags: [
          "touchscreen",
          "user interface",
          "easy to use",
          "checkout speed",
        ],
      },
      isLiked: false,
      likeCount: 127,
      commentText: "",
      comments: [
        {
          name: "Arjun Patel",
          avatar: "https://randomuser.me/api/portraits/men/32.jpg",
          date: "5 days ago",
          text: "Our checkout times dropped by 30% after switching to this interface. The gesture controls are incredibly intuitive!",
          likes: 24,
        },
        {
          name: "Sunita Rao",
          avatar: "https://randomuser.me/api/portraits/women/44.jpg",
          date: "2 weeks ago",
          text: "Can the interface be customized for senior staff who aren't tech-savvy?",
          likes: 9,
        },
      ],
      relatedPosts: [
        {
          slug: "retail-hardware-solutions",
          title: "Best Hardware for Retail Checkout Counters",
          image:
            "https://images.unsplash.com/photo-1556742044-3c52d6e88c62?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80",
          date: "2024-12-22",
        },
        {
          slug: "reducing-checkout-time",
          title: "Proven Methods to Reduce Checkout Time",
          image:
            "https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80",
          date: "2024-11-15",
        },
        {
          slug: "retail-staff-training",
          title: "Effective Training Techniques for Retail Staff",
          image:
            "https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80",
          date: "2024-10-28",
        },
      ],
      categories: [
        { name: "Retail UX", slug: "retail-ux", count: 28 },
        {
          name: "Checkout Optimization",
          slug: "checkout-optimization",
          count: 19,
        },
        {
          name: "Touchscreen Technology",
          slug: "touchscreen-technology",
          count: 15,
        },
        { name: "Retail Training", slug: "retail-training", count: 22 },
        { name: "Store Operations", slug: "store-operations", count: 31 },
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
        "Touchscreen Billing Software for Faster Retail Checkouts | RX Billing",
      meta: [
        {
          name: "description",
          content:
            "Discover how RX Billing's intuitive touchscreen interface reduces checkout times and training requirements while improving accuracy for retail staff.",
        },
        {
          name: "keywords",
          content:
            "touchscreen billing software, retail POS interface, quick checkout system, retail user interface, easy-to-use POS",
        },
      ],
      script: [
        {
          type: "application/ld+json",
          innerHTML: JSON.stringify({
            "@context": "https://schema.org",
            "@type": "Article",
            headline:
              "Touchscreen Billing Software Interface: Faster, Easier Checkouts",
            description:
              "Speed up transactions and reduce training time with RX Billing's intuitive touchscreen interface designed for retail efficiency.",
            author: {
              "@type": "Person",
              name: "Priya Malhotra",
              jobTitle: "Retail UX Specialist",
            },
            datePublished: "2025-01-18",
            image:
              "https://images.unsplash.com/photo-1512428813834-c702c7702b78?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
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
                name: "How much faster is touchscreen billing compared to traditional systems?",
                acceptedAnswer: {
                  "@type": "Answer",
                  text: "Most retailers see a 25-40% reduction in average checkout time after switching to our touchscreen interface, with some high-volume stores reporting even greater improvements.",
                },
              },
              {
                "@type": "Question",
                name: "Can the interface be used while wearing gloves?",
                acceptedAnswer: {
                  "@type": "Answer",
                  text: "Yes, our interface supports capacitive touchscreen gloves and can be adjusted for different touch sensitivity levels to accommodate various working conditions.",
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
