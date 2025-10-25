<template>
  <div class="profile-menu" ref="profileMenuRef">
    <!-- Profile Button -->
    <button class="profile-btn" @click="toggleDropdown">
      <img :src="authStore.user?.avatar" alt="Profile" class="profile-icon" />
    </button>

    <!-- Dropdown -->
    <div v-if="showDropdown" class="dropdown">
      <!-- User Info -->
      <div class="user-info">
        <img
          :src="authStore.user?.avatar"
          alt="User Avatar"
          class="user-avatar"
        />
        <div class="user-details">
          <strong>{{ authStore.user?.name }}</strong>
          <p>{{ authStore.user?.email }}</p>
        </div>
      </div>

      <!-- Menu Items -->
      <ul class="menu-list">
        <li @click="goToProfile"><i class="bi bi-person"></i> My Profile</li>
        <li @click="goToSettings"><i class="bi bi-gear"></i> Settings</li>
        <li @click="goToBilling">
          <i class="bi bi-credit-card"></i> Billing
          <!-- <span class="badge">4</span> -->
        </li>
        <li @click="handleLogout">
          <i class="bi bi-box-arrow-right"></i> Log Out
        </li>
      </ul>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount } from "vue";
import { useRouter } from "vue-router";
import { useAuthStore } from "@/store/auth";

const showDropdown = ref(false);
const router = useRouter();
const authStore = useAuthStore();
const profileMenuRef = ref(null);

// Check if user is authenticated when the component is mounted
onMounted(() => {
  authStore.checkAuth();
  document.addEventListener("click", handleClickOutside);
});

// Clean up event listener when component is unmounted
onBeforeUnmount(() => {
  document.removeEventListener("click", handleClickOutside);
});

// Close dropdown when clicking outside
const handleClickOutside = (event) => {
  if (profileMenuRef.value && !profileMenuRef.value.contains(event.target)) {
    showDropdown.value = false;
  }
};

// Close dropdown when route changes
router.afterEach(() => {
  showDropdown.value = false;
});

// Toggle dropdown
const toggleDropdown = () => {
  showDropdown.value = !showDropdown.value;
};

// Close dropdown when clicking a menu item
const closeDropdown = () => {
  showDropdown.value = false;
};

// Navigation functions (close dropdown after clicking)
const goToProfile = () => {
  closeDropdown();
  router.push("/profile");
};

const goToSettings = () => {
  closeDropdown();
  router.push("/settings");
};

const goToBilling = () => {
  closeDropdown();
  router.push("/billing");
};

// Logout function
const handleLogout = () => {
  closeDropdown();
  authStore.logout();
  // No need to redirect since the header will update automatically
  // The modal will be available if they click sign in again
};
</script>

<style scoped>
/* Profile Button */
.profile-btn {
  background: none;
  border: none;
  cursor: pointer;
  position: relative;
  margin-top: 5px;
}

.profile-icon {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  /* border: 2px solid #f3bc09; */
}

/* Dropdown */
.dropdown {
  position: absolute;
  top: 60px;
  right: 0;
  background: #fff;
  padding: 10px;
  border-radius: 8px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  width: 300px;
  text-align: left;
  z-index: 1000;
}

@media (max-width: 1200px) {
  .dropdown {
    position: absolute;
    top: 60px;
    left: 0;
    background: #fff;
    padding: 10px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: left;
    z-index: 1000;
  }
}

/* User Info */
.user-info {
  display: flex;
  align-items: center;
  padding: 10px;
  border-bottom: 1px solid #eee;
}

.user-avatar {
  width: 45px;
  height: 45px;
  border-radius: 50%;
  margin-right: 10px;
}

.user-details {
  font-size: 14px;
}

.role {
  font-size: 12px;
  color: gray;
}

/* Menu List */
.menu-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.menu-list li {
  display: flex;
  align-items: center;
  padding: 10px;
  cursor: pointer;
  font-size: 14px;
  transition: 0.3s;
}

.menu-list li:hover {
  background: #f8f8f8;
}

/* Icons */
.menu-list i {
  margin-right: 10px;
  font-size: 16px;
}

/* Notification Badge */
.badge {
  background: red;
  color: white;
  font-size: 12px;
  padding: 2px 6px;
  border-radius: 50%;
  margin-left: auto;
}
</style>
