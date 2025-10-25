import { defineStore } from "pinia";
import { jwtDecode } from "jwt-decode";
import avatar from "../assets/img/profile.webp";

export const useAuthStore = defineStore("auth", {
  state: () => ({
    user: null,
    isAuthenticated: false,
    showSignInModal: false,
    showSignUpModal: false,
  }),
  actions: {
    // Authentication-related actions
    login(token) {
      if (process.client) {
        localStorage.setItem("rx_square_web_token", token);
      }
      this.decodeToken(token);
      this.isAuthenticated = true;
      window.location.reload(); // Ensure UI updates
    },
    logout() {
      if (process.client) {
        localStorage.removeItem("rx_square_web_token");
      }
      this.user = null;
      this.isAuthenticated = false;
      window.location.reload(); // Ensure UI updates
    },
    decodeToken(token) {
      try {
        const decoded = jwtDecode(token);
        this.user = {
          name: decoded.name || "User",
          email: decoded.email || "user@example.com",
          avatar: decoded.avatar || avatar,
        };
      } catch (error) {
        console.error("Invalid token:", error);
        this.logout();
      }
    },
    checkAuth() {
      if (process.client) {
        const token = localStorage.getItem("rx_square_web_token");
        if (token) {
          this.decodeToken(token);
          this.isAuthenticated = true;
        }
      }
    },

    // Modal visibility-related actions
    openSignInModal() {
      this.showSignInModal = true;
      this.showSignUpModal = false;
      document.body.style.overflow = "hidden";
    },
    closeSignInModal() {
      this.showSignInModal = false;
      document.body.style.overflow = "";
    },
    openSignUpModal() {
      this.showSignUpModal = true;
      this.showSignInModal = false;
      document.body.style.overflow = "hidden";
    },
    closeSignUpModal() {
      this.showSignUpModal = false;
      document.body.style.overflow = "";
    },
  },
});
