<template>
  <div v-if="blog" class="bg-gray-50 min-h-screen pb-16 mt-24">
    <!-- Hero Section -->
    <div class="relative h-96">
      <img
        :src="blog.image"
        :alt="'Clothing store billing software - ' + blog.title"
        class="w-full h-full object-cover"
      />
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
      <div
        class="container mx-auto px-4 lg:px-8 absolute inset-0 flex flex-col justify-center"
      >
        <div class="max-w-4xl">
          <div class="text-white mb-2 flex items-center space-x-2">
            <span class="bg-pink-600 text-xs px-3 py-1 rounded">{{
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
              Streamline Your Clothing Store Operations with RX Billing
            </h1>

            <p class="mb-4">
              Managing a clothing store comes with unique challenges - tracking
              dozens of size and color variants, handling seasonal inventory,
              and running promotions. RX Billing's apparel-specific features are
              designed to simplify these complexities. Here's how our software
              helps fashion retailers:
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              1. Advanced Variant Management
            </h2>
            <p class="mb-4">
              Our software handles all product variants effortlessly:
            </p>
            <ul class="list-disc pl-6 mb-4">
              <li>
                Create unlimited size/color combinations with SKU generation
              </li>
              <li>Bulk update prices across all variants</li>
              <li>Track stock levels for each variant individually</li>
              <li>Filter products by available sizes/colors at checkout</li>
            </ul>
            <img
              src="https://images.unsplash.com/photo-1567401893414-76b7b1e5a7a5?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
              alt="Clothing size variants in RX Billing software"
              class="w-full rounded-lg mb-4"
            />

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              2. Seasonal Inventory Control
            </h2>
            <p class="mb-4">Manage seasonal collections effectively:</p>
            <div class="grid md:grid-cols-2 gap-4 mb-4">
              <div class="border rounded-lg p-4 bg-blue-50">
                <h3 class="font-bold text-lg">Seasonal Tagging</h3>
                <ul class="list-disc pl-4 mt-2 text-sm">
                  <li>Tag items by season (Summer, Winter, Festival, etc.)</li>
                  <li>Automated reminders for end-of-season clearance</li>
                  <li>Seasonal sales reports</li>
                </ul>
              </div>
              <div class="border rounded-lg p-4 bg-blue-50">
                <h3 class="font-bold text-lg">Collection Management</h3>
                <ul class="list-disc pl-4 mt-2 text-sm">
                  <li>Group products by collection</li>
                  <li>Apply collection-wide discounts</li>
                  <li>Track collection performance</li>
                </ul>
              </div>
            </div>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              3. Fashion-Specific Promotions
            </h2>
            <p class="mb-4">Run apparel-specific promotions:</p>
            <ul class="list-disc pl-6 mb-4">
              <li>Buy 2 Get 1 Free on selected categories</li>
              <li>Seasonal clearance markdowns</li>
              <li>Loyalty programs for frequent shoppers</li>
              <li>Festival-specific discount codes</li>
            </ul>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              4. Size-Specific Reporting
            </h2>
            <p class="mb-4">Get actionable insights:</p>
            <ul class="list-disc pl-6 mb-4">
              <li>Which sizes sell fastest by location</li>
              <li>Color popularity trends</li>
              <li>Variant-level profitability</li>
              <li>Size exchange rates</li>
            </ul>

            <div class="bg-pink-50 p-6 rounded-lg my-8">
              <h3 class="text-xl font-bold mb-2">
                Success Story: Chennai Boutique Reduces Inventory Errors by 68%
              </h3>
              <p class="mb-2">
                "After switching to RX Billing, we eliminated size/color
                mismatches in our inventory and reduced stockouts of popular
                sizes. The variant management system saved us 20 hours/week in
                manual tracking."
              </p>
              <p class="font-semibold">
                - Anita Desai, Owner of Urban Threads Boutique
              </p>
            </div>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              5. GST-Compliant Fashion Invoicing
            </h2>
            <p class="mb-4">
              Specialized invoicing features for apparel stores:
            </p>
            <ul class="list-disc pl-6 mb-4">
              <li>
                Automatic GST calculation for different clothing categories
              </li>
              <li>Size/color details printed on invoices</li>
              <li>Exchange and return tracking</li>
              <li>Fabric composition documentation</li>
            </ul>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              Getting Started with RX Billing for Your Clothing Store
            </h2>
            <p class="mb-4">
              Setting up your clothing store in RX Billing is simple:
            </p>
            <ol class="list-decimal pl-6 mb-4">
              <li>Import your product catalog with variants</li>
              <li>Configure your size/color matrices</li>
              <li>Set up seasonal collections</li>
              <li>Train staff on the variant selection interface</li>
              <li>Launch with your current inventory</li>
            </ol>

            <p class="mb-4">
              Ready to simplify your fashion retail operations?
              <a href="/contact" class="text-blue-600 underline">Book a demo</a>
              to see RX Billing's clothing store features in action.
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
            title="RX Square Apparel Retail Team"
            subtitle="Experts in Fashion Retail Solutions"
            description="Our team specializes in building tailored billing systems for clothing stores. We help retailers manage size and color variants, track seasonal inventory, and seamlessly handle promotions, ensuring smooth operations and enhanced customer satisfaction."
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
        id: "billing-software-for-clothing-store",
        title:
          "Billing Software for Clothing Store: Managing Size & Color Variants",
        excerpt:
          "RX Billing's apparel-specific features help track variants, manage seasonal inventory, and handle promotions seamlessly.",
        image:
          "https://images.unsplash.com/photo-1551488831-00ddcb6c6bd3?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
        date: "2025-02-24",
        category: "Apparel Retail",
        readTime: "5 min read",
        tags: [
          "clothing store",
          "size variants",
          "fashion retail",
          "inventory management",
        ],
      },
      isLiked: false,
      likeCount: 92,
      commentText: "",
      comments: [
        {
          name: "Rahul Mehta",
          avatar: "https://randomuser.me/api/portraits/men/32.jpg",
          date: "1 week ago",
          text: "Implemented this for our chain of boutiques. The size variant tracking has reduced our inventory errors by 60%!",
          likes: 15,
        },
        {
          name: "Ananya Reddy",
          avatar: "https://randomuser.me/api/portraits/women/44.jpg",
          date: "2 weeks ago",
          text: "Does this support custom size charts for Indian body types?",
          likes: 8,
        },
      ],
      relatedPosts: [
        {
          slug: "inventory-management-apparel",
          title: "Inventory Management for Apparel Stores",
          image:
            "https://images.unsplash.com/photo-1551488831-00ddcb6c6bd3?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80",
          date: "2025-01-18",
        },
        {
          slug: "retail-pos-systems",
          title: "Choosing the Right POS System for Fashion Retail",
          image:
            "https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80",
          date: "2024-12-12",
        },
        {
          slug: "fashion-retail-trends",
          title: "2025 Fashion Retail Trends & Technologies",
          image:
            "https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80",
          date: "2024-11-28",
        },
      ],
      categories: [
        { name: "Apparel Retail", slug: "apparel-retail", count: 36 },
        {
          name: "Inventory Management",
          slug: "inventory-management",
          count: 42,
        },
        { name: "Retail Technology", slug: "retail-technology", count: 28 },
        { name: "Fashion Business", slug: "fashion-business", count: 19 },
        { name: "Billing Solutions", slug: "billing-solutions", count: 31 },
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
        "Billing Software for Clothing Stores | Size & Color Variant Management",
      meta: [
        {
          name: "description",
          content:
            "Discover how RX Billing's specialized features help clothing stores manage size/color variants, seasonal inventory, and fashion-specific promotions.",
        },
        {
          name: "keywords",
          content:
            "clothing store software, apparel billing system, fashion retail POS, size variant management, inventory software for boutiques",
        },
      ],
      script: [
        {
          type: "application/ld+json",
          innerHTML: JSON.stringify({
            "@context": "https://schema.org",
            "@type": "Article",
            headline:
              "Billing Software for Clothing Store: Managing Size & Color Variants",
            description:
              "RX Billing's apparel-specific features help track variants, manage seasonal inventory, and handle promotions seamlessly.",
            author: {
              "@type": "Person",
              name: "Priya Kapoor",
              jobTitle: "Fashion Retail Consultant",
            },
            datePublished: "2025-02-24",
            image:
              "https://images.unsplash.com/photo-1551488831-00ddcb6c6bd3?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
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
                name: "Can RX Billing handle custom size charts for different clothing categories?",
                acceptedAnswer: {
                  "@type": "Answer",
                  text: "Yes, RX Billing allows you to create custom size matrices for different product categories like menswear, womenswear, kids, etc., with the ability to add regional size variations.",
                },
              },
              {
                "@type": "Question",
                name: "How does the software handle seasonal inventory changes?",
                acceptedAnswer: {
                  "@type": "Answer",
                  text: "Our system includes seasonal tagging, automated markdown scheduling, and collection management tools to help you transition between seasons smoothly and profitably.",
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
