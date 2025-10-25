<template>
  <div v-if="blog" class="bg-gray-50 min-h-screen pb-16 mt-24">
    <!-- Hero Section -->
    <div class="relative h-96">
      <img
        :src="blog.image"
        :alt="'Grocery store billing software - ' + blog.title"
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
              Billing Software for Grocery Store: Managing Perishable Inventory
            </h1>

            <p class="mb-4">
              For grocery retailers in 2025, managing perishable inventory is
              one of the greatest challenges. With rising food costs and
              increasing consumer demand for freshness, having the right tools
              to track expiration dates and reduce waste is essential. RX
              Billing's grocery-specific features provide comprehensive
              solutions for the unique challenges of selling perishable goods.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              1. Smart Expiration Date Tracking
            </h2>
            <p class="mb-4">
              Monitor the shelf life of every perishable product:
            </p>
            <ul class="list-disc pl-6 mb-4">
              <li>
                Automated expiration date alerts for products nearing end of
                shelf life
              </li>
              <li>
                Color-coded dashboard highlighting items requiring attention
              </li>
              <li>
                Batch-level tracking for perishable goods with varying
                expiration dates
              </li>
              <li>Customizable alert thresholds by product category</li>
            </ul>
            <img
              src="https://images.unsplash.com/photo-1506617420156-8e4536971650?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
              alt="Digital expiration date tracking in grocery store software"
              class="w-full rounded-lg mb-4"
            />

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              2. Fresh Produce Management
            </h2>
            <p class="mb-4">
              Specialized tools for your most sensitive inventory:
            </p>
            <div class="grid md:grid-cols-2 gap-4 mb-4">
              <div class="border rounded-lg p-4 bg-blue-50">
                <h3 class="font-bold text-lg">Inventory Tracking</h3>
                <ul class="list-disc pl-4 mt-2 text-sm">
                  <li>Weight-based inventory tracking</li>
                  <li>Automated shrinkage calculations</li>
                  <li>Variable pricing for ripeness levels</li>
                  <li>Visual quality grading system</li>
                </ul>
              </div>
              <div class="border rounded-lg p-4 bg-blue-50">
                <h3 class="font-bold text-lg">Sales Optimization</h3>
                <ul class="list-disc pl-4 mt-2 text-sm">
                  <li>Dynamic pricing based on freshness</li>
                  <li>Bundle recommendations for aging produce</li>
                  <li>Auto-discounting for quick turnover</li>
                  <li>Seasonal demand forecasting</li>
                </ul>
              </div>
            </div>

            <p class="mb-4">
              Our produce management system integrates with your billing
              software to ensure accurate inventory counts even with
              weight-based items. Real-time tracking helps reduce waste while
              maximizing the value of fresh items through automated pricing
              strategies.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              3. Waste Reduction Analytics
            </h2>
            <p class="mb-4">
              Turn data into actionable waste reduction strategies:
            </p>
            <ul class="list-disc pl-6 mb-4">
              <li>Detailed waste tracking by category, supplier, and season</li>
              <li>Root cause analysis for inventory loss</li>
              <li>Predictive analytics for optimal ordering</li>
              <li>Automated recommendation engine for markdown timing</li>
            </ul>

            <div class="bg-blue-50 p-6 rounded-lg my-8">
              <h3 class="text-xl font-bold mb-2">
                Case Study: Delhi Neighborhood Market Reduces Waste by 34%
              </h3>
              <p class="mb-2">
                "After implementing RX Billing's perishable management system,
                we identified that our dairy waste was primarily occurring
                midweek. By adjusting our ordering pattern and implementing
                targeted Tuesday promotions, we reduced our overall waste from
                8% to just 5.3% of inventory value, saving approximately ₹28,000
                monthly."
              </p>
              <p class="font-semibold">
                - Sanjay Kumar, Owner of Fresh First Market
              </p>
            </div>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              4. Temperature Monitoring Integration
            </h2>
            <p class="mb-4">
              Connect your cold chain monitoring directly to your inventory
              system:
            </p>
            <ul class="list-disc pl-6 mb-4">
              <li>IoT sensors integration for refrigeration units</li>
              <li>Automatic alerts for temperature fluctuations</li>
              <li>Impact assessment on affected inventory</li>
              <li>Compliance reporting for food safety regulations</li>
              <li>
                Historical temperature data linked to specific inventory batches
              </li>
            </ul>

            <img
              src="https://images.unsplash.com/photo-1604719312566-8912e9227c6a?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
              alt="Temperature monitoring dashboard for grocery inventory"
              class="w-full rounded-lg mb-4"
            />

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              5. Dynamic Pricing Automation
            </h2>
            <p class="mb-4">
              Maximize revenue from perishable goods with smart pricing:
            </p>
            <ul class="list-disc pl-6 mb-4">
              <li>Automatic price adjustments based on remaining shelf life</li>
              <li>Time-based discount scheduling</li>
              <li>QR code generation for discounted items</li>
              <li>Mobile-friendly markdown displays</li>
              <li>
                Loyalty program integration for personalized offers on
                near-expiry items
              </li>
            </ul>

            <p class="mb-4">
              Our dynamic pricing system helps you recover costs on perishable
              items while still moving inventory before it expires. The system
              learns from historical data to suggest optimal discount timing and
              percentages for different product categories.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              6. Vendor Integration & Quality Control
            </h2>
            <p class="mb-4">
              Manage your supply chain with built-in quality assessment tools:
            </p>
            <div class="grid md:grid-cols-3 gap-4 mb-4">
              <div class="border rounded-lg p-4 bg-blue-50">
                <h3 class="font-bold text-lg">Receiving</h3>
                <ul class="list-disc pl-4 mt-2 text-sm">
                  <li>Mobile quality inspection</li>
                  <li>Digital temperature logs</li>
                  <li>Photo documentation</li>
                </ul>
              </div>
              <div class="border rounded-lg p-4 bg-blue-50">
                <h3 class="font-bold text-lg">Vendor Scorecards</h3>
                <ul class="list-disc pl-4 mt-2 text-sm">
                  <li>Freshness metrics</li>
                  <li>Shelf-life consistency</li>
                  <li>Delivery timeliness</li>
                </ul>
              </div>
              <div class="border rounded-lg p-4 bg-blue-50">
                <h3 class="font-bold text-lg">Returns Management</h3>
                <ul class="list-disc pl-4 mt-2 text-sm">
                  <li>Automated claim filing</li>
                  <li>Credit tracking</li>
                  <li>Return reason analysis</li>
                </ul>
              </div>
            </div>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              7. Food Safety Compliance
            </h2>
            <p class="mb-4">
              Meet regulatory requirements with comprehensive documentation:
            </p>
            <ul class="list-disc pl-6 mb-4">
              <li>FSSAI compliance reporting built-in</li>
              <li>Batch traceability for recall management</li>
              <li>Automated HACCP documentation</li>
              <li>Employee training tracking for food handling</li>
              <li>Allergen and cross-contamination alerts</li>
            </ul>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              8. Inventory Forecasting with AI
            </h2>
            <p class="mb-4">
              Order the right amount of perishable stock with predictive
              analytics:
            </p>
            <ul class="list-disc pl-6 mb-4">
              <li>Machine learning algorithms that consider seasonality</li>
              <li>Weather-based demand adjustments</li>
              <li>Local event calendar integration</li>
              <li>Historical sales pattern analysis</li>
              <li>Suggested order quantities with confidence ratings</li>
            </ul>

            <div class="bg-gray-100 p-6 rounded-lg my-8">
              <h3 class="text-xl font-bold mb-2">
                Implementing an Effective Perishable Management System
              </h3>
              <ol class="list-decimal pl-6 mb-4">
                <li>
                  Begin with data collection: Establish current waste baseline
                  by category
                </li>
                <li>
                  Configure product shelf-life settings in your RX Billing
                  system
                </li>
                <li>
                  Train staff on receiving protocols and quality assessment
                </li>
                <li>Set up automated alerts and reporting cadence</li>
                <li>
                  Implement a graduated markdown strategy for aging inventory
                </li>
                <li>
                  Regularly review analytics to refine ordering and promotions
                </li>
              </ol>
            </div>

            <p class="mb-4">
              Ready to transform your grocery store's perishable management?
              <a href="/contact" class="text-blue-600 underline"
                >Schedule a consultation</a
              >
              with our grocery specialists to see how RX Billing can reduce
              waste and increase profits.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">
              Conclusion: Fresh Opportunities in Perishable Management
            </h2>
            <p class="mb-4">
              In the highly competitive grocery sector, effectively managing
              perishable inventory can be the difference between profit and
              loss. RX Billing's specialized grocery features transform what was
              once a major liability into a strategic advantage. By combining
              expiration tracking, dynamic pricing, waste analytics, and
              compliance tools, grocery retailers can significantly reduce
              shrinkage while maintaining quality and freshness standards.
            </p>
            <p class="mb-4">
              As consumer expectations for freshness continue to rise and
              margins remain tight, investing in sophisticated perishable
              management technology isn't just smart—it's essential for survival
              in the modern grocery landscape. The stores that best manage their
              perishable inventory will be best positioned to thrive in 2025 and
              beyond.
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
            title="RX Square Grocery Tech Team"
            subtitle="Experts in Perishable Inventory Solutions"
            description="Our team specializes in building intelligent billing and inventory systems tailored for grocery stores. From tracking expiration dates to reducing waste, we help retailers optimize operations and maintain product freshness."
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
        id: "billing-software-for-grocery-store",
        title:
          "Billing Software for Grocery Store: Managing Perishable Inventory",
        excerpt:
          "Track expiration dates, manage fresh produce inventory, and minimize waste with RX Billing's grocery-specific features.",
        image:
          "https://images.unsplash.com/photo-1579113800032-c38bd7635818?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
        date: "2025-01-26",
        category: "Grocery",
        readTime: "6 min read",
        tags: ["grocery", "perishables", "expiration tracking"],
      },
      isLiked: false,
      likeCount: 96,
      commentText: "",
      comments: [
        {
          name: "Ananya Gupta",
          avatar: "https://randomuser.me/api/portraits/women/28.jpg",
          date: "4 days ago",
          text: "The dynamic pricing has been a game-changer for our small grocery. We've reduced waste by almost 30% in the first two months!",
          likes: 15,
        },
        {
          name: "Mohammed Ali",
          avatar: "https://randomuser.me/api/portraits/men/22.jpg",
          date: "1 week ago",
          text: "How does the system handle items sold by weight? Can it track partial inventory for things like cheese wheels?",
          likes: 8,
        },
      ],
      relatedPosts: [
        {
          slug: "grocery-customer-loyalty",
          title: "Building Customer Loyalty in Modern Grocery Retail",
          image:
            "https://images.unsplash.com/photo-1534723452862-4c874018d66d?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80",
          date: "2025-01-10",
        },
        {
          slug: "grocery-inventory-optimization",
          title: "Inventory Optimization for Grocery Retailers",
          image:
            "https://plus.unsplash.com/premium_photo-1742899634235-d02e04a4007a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8SW52ZW50b3J5JTIwT3B0aW1pemF0aW9uJTIwZm9yJTIwR3JvY2VyeSUyMFJldGFpbGVyc3xlbnwwfHwwfHx8MA%3D%3D",
          date: "2024-12-08",
        },
        {
          slug: "grocery-compliance-guide",
          title: "Complete Guide to FSSAI Compliance for Grocers",
          image:
            "https://images.unsplash.com/photo-1607082349566-187342175e2f?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80",
          date: "2024-11-15",
        },
      ],
      categories: [
        { name: "Grocery", slug: "grocery", count: 32 },
        {
          name: "Inventory Management",
          slug: "inventory-management",
          count: 45,
        },
        { name: "Food Safety", slug: "food-safety", count: 28 },
        { name: "Waste Reduction", slug: "waste-reduction", count: 17 },
        { name: "Fresh Produce", slug: "fresh-produce", count: 21 },
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
        "Billing Software for Grocery Store | Perishable Inventory Management",
      meta: [
        {
          name: "description",
          content:
            "Discover how RX Billing's grocery-specific features help track expiration dates, manage fresh produce inventory, and minimize waste with intelligent forecasting and analytics.",
        },
        {
          name: "keywords",
          content:
            "grocery billing software, perishable inventory management, expiration date tracking, produce management, waste reduction, food safety, grocery technology",
        },
      ],
      script: [
        {
          type: "application/ld+json",
          innerHTML: JSON.stringify({
            "@context": "https://schema.org",
            "@type": "Article",
            headline:
              "Billing Software for Grocery Store: Managing Perishable Inventory",
            description:
              "Track expiration dates, manage fresh produce inventory, and minimize waste with RX Billing's grocery-specific features.",
            author: {
              "@type": "Person",
              name: "Deepak Sharma",
              jobTitle: "Grocery Technology Specialist",
            },
            datePublished: "2025-01-26",
            image:
              "https://images.unsplash.com/photo-1579113800032-c38bd7635818?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80",
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
                name: "How does expiration date tracking work in RX Billing?",
                acceptedAnswer: {
                  "@type": "Answer",
                  text: "RX Billing allows you to set expiration dates at the batch level during inventory receiving. The system then monitors these dates and provides automated alerts as products approach their shelf-life end. Reports and dashboards help you quickly identify items needing attention for markdowns or promotions.",
                },
              },
              {
                "@type": "Question",
                name: "Can RX Billing's grocery software integrate with our existing scales and equipment?",
                acceptedAnswer: {
                  "@type": "Answer",
                  text: "Yes, RX Billing features native integration with most major grocery scale brands and supports NTEP compliance. Our system connects with electronic scales to capture weight data directly, eliminating manual entry errors and speeding up both inventory receiving and customer checkout processes.",
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
