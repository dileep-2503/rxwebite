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
              How RX Billing's Loyalty Program Features Can Transform Your
              Business
            </h1>

            <p class="mb-4">
              In today's competitive retail landscape, customer retention is
              just as important as acquisition. RX Billing's integrated loyalty
              program features help businesses reward repeat customers, increase
              average order values, and build lasting relationships. Here's how
              you can leverage these powerful tools:
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              1. Points-Based Reward Systems
            </h2>
            <p class="mb-4">
              RX Billing automatically tracks customer purchases and awards
              points that can be redeemed for:
            </p>
            <ul class="list-disc pl-6 mb-4">
              <li>Discounts on future purchases</li>
              <li>Free products after certain thresholds</li>
              <li>Exclusive access to sales or products</li>
              <li>Birthday rewards and anniversary bonuses</li>
            </ul>
            <img
              src="https://images.unsplash.com/photo-1607082350899-7e105aa886ae?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
              alt="Customer redeeming loyalty points"
              class="w-full rounded-lg mb-4"
            />

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              2. Tiered Membership Programs
            </h2>
            <p class="mb-4">
              Encourage customers to spend more by offering tiered benefits:
            </p>
            <div class="grid md:grid-cols-3 gap-4 mb-4">
              <div class="border rounded-lg p-4">
                <h3 class="font-bold text-lg">Silver Tier</h3>
                <p class="text-sm">(₹5,000+ annual spend)</p>
                <ul class="list-disc pl-4 mt-2 text-sm">
                  <li>5% points bonus</li>
                  <li>Early access to sales</li>
                </ul>
              </div>
              <div class="border rounded-lg p-4">
                <h3 class="font-bold text-lg">Gold Tier</h3>
                <p class="text-sm">(₹15,000+ annual spend)</p>
                <ul class="list-disc pl-4 mt-2 text-sm">
                  <li>10% points bonus</li>
                  <li>Free shipping</li>
                  <li>Exclusive deals</li>
                </ul>
              </div>
              <div class="border rounded-lg p-4">
                <h3 class="font-bold text-lg">Platinum Tier</h3>
                <p class="text-sm">(₹30,000+ annual spend)</p>
                <ul class="list-disc pl-4 mt-2 text-sm">
                  <li>15% points bonus</li>
                  <li>Personal shopper</li>
                  <li>VIP customer service</li>
                </ul>
              </div>
            </div>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              3. Personalized Marketing Automation
            </h2>
            <p class="mb-4">
              RX Billing integrates with your marketing tools to automatically
              send:
            </p>
            <ul class="list-disc pl-6 mb-4">
              <li>Points balance reminders</li>
              <li>Personalized product recommendations</li>
              <li>Expiring points notifications</li>
              <li>Special offers based on purchase history</li>
            </ul>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              4. Gamification Features
            </h2>
            <p class="mb-4">Make earning rewards fun with:</p>
            <ul class="list-disc pl-6 mb-4">
              <li>Bonus point challenges</li>
              <li>Referral rewards</li>
              <li>Social media check-in points</li>
              <li>Anniversary bonuses</li>
            </ul>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              5. Comprehensive Reporting
            </h2>
            <p class="mb-4">
              Track your program's effectiveness with detailed analytics:
            </p>
            <ul class="list-disc pl-6 mb-4">
              <li>Customer lifetime value tracking</li>
              <li>Redemption rate analysis</li>
              <li>Program ROI calculations</li>
              <li>Customer segment performance</li>
            </ul>

            <div class="bg-blue-50 p-6 rounded-lg my-8">
              <h3 class="text-xl font-bold mb-2">
                Success Story: Mumbai Boutique Increases Repeat Sales by 42%
              </h3>
              <p class="mb-2">
                "After implementing RX Billing's loyalty program, we saw a 42%
                increase in repeat customer purchases within 6 months. The
                automated points system saved us 15 hours/week in manual
                tracking."
              </p>
              <p class="font-semibold">
                - Priya Kapoor, Owner of Urban Chic Boutique
              </p>
            </div>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              Getting Started with RX Billing Loyalty Programs
            </h2>
            <p class="mb-4">Setting up your loyalty program is simple:</p>
            <ol class="list-decimal pl-6 mb-4">
              <li>
                Define your points structure (e.g., 1 point per ₹100 spent)
              </li>
              <li>Set up reward tiers and benefits</li>
              <li>Configure automated communications</li>
              <li>Train your staff on explaining the program</li>
              <li>Launch with a promotional period (double points, etc.)</li>
            </ol>

            <p class="mb-4">
              Ready to boost customer retention?
              <a href="/contact" class="text-blue-600 underline"
                >Contact our team</a
              >
              for a personalized demo of RX Billing's loyalty program features.
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
            title="RX Square Customer Retention Team"
            subtitle="Specialists in Loyalty & Retention Strategies"
            description="Our team helps businesses build powerful customer loyalty programs integrated directly into their billing systems. From points accumulation to tiered rewards and personalized offers, we empower businesses to drive repeat sales and foster long-term customer relationships."
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
        id: "billing-software-with-customer-loyalty-program",
        title:
          "Billing Software with Customer Loyalty Program: Boost Repeat Business",
        excerpt:
          "Implement points systems, tiered rewards, and personalized offers with RX Billing's integrated customer loyalty features.",
        image:
          "https://images.unsplash.com/photo-1556742208-999815fca738?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
        date: "2025-02-28",
        category: "Customer Retention",
        readTime: "6 min read",
        tags: ["loyalty program", "customer retention", "rewards"],
      },
      isLiked: false,
      likeCount: 86,
      commentText: "",
      comments: [
        {
          name: "Sanjay Gupta",
          avatar: "https://randomuser.me/api/portraits/men/32.jpg",
          date: "1 week ago",
          text: "Implemented this for my pharmacy chain and saw 35% more repeat customers in 3 months! The setup was surprisingly easy.",
          likes: 12,
        },
        {
          name: "Meera Patel",
          avatar: "https://randomuser.me/api/portraits/women/44.jpg",
          date: "2 weeks ago",
          text: "Can the loyalty program integrate with our existing mobile app?",
          likes: 5,
        },
      ],
      relatedPosts: [
        {
          slug: "customer-retention-strategies",
          title: "5 Customer Retention Strategies That Work",
          image:
            "https://images.unsplash.com/photo-1556742044-3c52d6e88c62?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80",
          date: "2025-01-15",
        },
        {
          slug: "gst-billing-features",
          title: "Must-Have GST Billing Features for Retailers",
          image:
            "https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80",
          date: "2024-12-05",
        },
        {
          slug: "retail-analytics",
          title: "Using Retail Analytics to Boost Sales",
          image:
            "https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80",
          date: "2024-11-20",
        },
      ],
      categories: [
        { name: "Customer Retention", slug: "customer-retention", count: 28 },
        { name: "Loyalty Programs", slug: "loyalty-programs", count: 19 },
        { name: "Retail Solutions", slug: "retail-solutions", count: 42 },
        { name: "Billing Software", slug: "billing-software", count: 35 },
        { name: "Business Growth", slug: "business-growth", count: 31 },
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
        "Boost Repeat Business with Loyalty Program Billing Software | RX Billing",
      meta: [
        {
          name: "description",
          content:
            "Discover how RX Billing's integrated loyalty program features can help you reward customers, increase repeat sales, and grow your business.",
        },
        {
          name: "keywords",
          content:
            "loyalty program software, customer retention, billing with rewards, points system, retail loyalty programs",
        },
      ],
      script: [
        {
          type: "application/ld+json",
          innerHTML: JSON.stringify({
            "@context": "https://schema.org",
            "@type": "Article",
            headline:
              "Billing Software with Customer Loyalty Program: Boost Repeat Business",
            description:
              "Implement points systems, tiered rewards, and personalized offers with RX Billing's integrated customer loyalty features.",
            author: {
              "@type": "Person",
              name: "Rahul Mehta",
              jobTitle: "Customer Retention Specialist",
            },
            datePublished: "2025-02-28",
            image:
              "https://images.unsplash.com/photo-1556742208-999815fca738?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
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
                name: "What types of businesses benefit most from loyalty programs?",
                acceptedAnswer: {
                  "@type": "Answer",
                  text: "Retail stores, restaurants, service businesses, and e-commerce sites see particularly strong results from loyalty programs, but any business with repeat customers can benefit.",
                },
              },
              {
                "@type": "Question",
                name: "How difficult is it to set up a loyalty program in RX Billing?",
                acceptedAnswer: {
                  "@type": "Answer",
                  text: "Most businesses can set up a basic points program in under 30 minutes using our step-by-step wizard. More complex tiered programs might take 1-2 hours to configure.",
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
