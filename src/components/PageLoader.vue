<!-- components/PageLoader.vue -->
<template>
    <div v-if="isLoading" class="page-loader">
      <div class="loader-content">
        <div class="spinner"></div>
        <p>Loading your experience...</p>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref, onMounted } from 'vue'
  
  const isLoading = ref(true)
  
  // Expose method to parent component
  defineExpose({ setLoaded: () => isLoading.value = false })
  </script>
  
  <style scoped>
  .page-loader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: var(--background-color, #ffffff);
    z-index: 9999;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: opacity 0.5s ease-out;
  }
  
  .loader-content {
    text-align: center;
  }
  
  .spinner {
    width: 50px;
    height: 50px;
    margin: 0 auto 1rem;
    border: 3px solid rgba(0, 0, 0, 0.1);
    border-radius: 50%;
    border-top-color: var(--accent-color, #fab415);
    animation: spin 1s ease-in-out infinite;
  }
  
  @keyframes spin {
    to {
      transform: rotate(360deg);
    }
  }
  
  p {
    font-family: var(--nav-font, 'Inter', sans-serif);
    color: var(--heading-color, #2d465e);
    font-size: 1rem;
  }
  </style>