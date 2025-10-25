<template>
  <div class="flex flex-col min-h-screen">
    <!-- Conditionally render the Header and Footer -->
    <Header v-if="!hideHeaderFooter" />

    <main class="flex-grow">
      <!-- Main content slot -->
      <slot />
    </main>

    <Footer v-if="!hideHeaderFooter" />

    <!-- Global Modals for Sign In/Sign Up -->
    <SignInModal
      :isOpen="authStore.showSignInModal"
      @close="authStore.closeSignInModal"
      @openSignUp="authStore.openSignUpModal"
    />
    <SignUpModal
      :isOpen="authStore.showSignUpModal"
      @close="authStore.closeSignUpModal"
      @openSignIn="authStore.openSignInModal"
    />
  </div>
</template>

<script setup>
import { useRoute } from "vue-router";
import Header from "@/components/Header.vue";
import Footer from "@/components/Footer.vue";
import SignInModal from "@/pages/signIn.vue";
import SignUpModal from "@/pages/signUp.vue";
import { useAuthStore } from "@/store/auth"; // Import Pinia store

// Use the route to conditionally hide the Header and Footer on certain pages
const route = useRoute();
const authStore = useAuthStore(); // Access the Pinia store for authentication modals

// Hide header/footer on auth-related pages
const hideHeaderFooter = ["signin", "signup"].includes(route.name);
</script>
