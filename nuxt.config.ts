export default defineNuxtConfig({
  srcDir: "src/",

  css: [
    "~/assets/css/main.css",
    "~/assets/css/new.css",
    "~/assets/vendor/bootstrap/css/bootstrap.min.css",
    "~/assets/vendor/bootstrap-icons/bootstrap-icons.css",
    "~/assets/vendor/aos/aos.css",
    "~/assets/vendor/swiper/swiper-bundle.min.css",
  ],
  plugins: ["~/plugins/glightbox.client.js", "~/plugins/aos.client.js"],
  app: {
    head: {
      title: "RX Square",
      meta: [
        { charset: "utf-8" },
        { name: "viewport", content: "width=device-width, initial-scale=1" },
        {
          name: "description",
          content:
            "RX Square delivers high-quality Billing Software in Chennai and beyond.",
        },
        {
          name: "keywords",
          content:
            "RX Square, software development, web development, digital solutions, mobile app development, best billing software in chennai, top 10 billing software in chennai, best billing software in retail shop, best billing software in restaurant, most popular billing software in small business",
        },
        { name: "author", content: "RX Square" },
        {
          property: "og:title",
          content: "RX Square - Billing Software & Digital Solutions",
        },
        {
          property: "og:description",
          content:
            "Empowering businesses with top-quality billing software, websites, and apps.",
        },
        { property: "og:type", content: "website" },
        { property: "og:url", content: "https://www.rxsquare.in/" },
        {
          property: "og:image",
          content: "https://www.rxsquare.in/_nuxt/rxlogo.BArzouxE.png",
        },
        { property: "og:site_name", content: "RX Square" },
      ],
      link: [
        { rel: "icon", type: "image/png", href: "/favicon.png" },
        { rel: "preconnect", href: "https://fonts.googleapis.com" },
        {
          rel: "preconnect",
          href: "https://fonts.gstatic.com",
          crossorigin: "anonymous",
        },
        {
          rel: "stylesheet",
          href: "https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap",
        },
      ],
      script: [
        {
          src: "https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js",
          defer: true,
        },
      ],
    },
  },
  modules: ["@pinia/nuxt"],

  postcss: {
    plugins: {
      tailwindcss: {},
      autoprefixer: {},
    },
  },

  pinia: {
    storesDirs: ["./src/store/**"],
  },

  extensions: [".js", ".jsx", ".mjs", ".ts", ".tsx", ".vue"],
  spaLoadingTemplate: false,
  compatibilityDate: "2025-02-15",

  // **Add Environment Variables Here**
  runtimeConfig: {
    public: {
      API_URL: "https://apikey.rxsquare.in/api", // Default if .env is missing
      RAZORPAY_KEY_ID: "rzp_test_kFACQEbZzr4lUe",
    },
  },
});

// https://apikey.rxsquare.in http://localhost:5001
