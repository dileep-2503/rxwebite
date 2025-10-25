<template>
  <button
    @click="goBack"
    class="flex items-center text-blue-600 hover:text-blue-800 mb-6"
  >
    <svg
      class="w-5 h-5 mr-2"
      fill="none"
      stroke="currentColor"
      viewBox="0 0 24 24"
    >
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-width="2"
        d="M10 19l-7-7m0 0l7-7m-7 7h18"
      />
    </svg>
    Back to Blog
  </button>
</template>

<script>
export default {
  methods: {
    goBack() {
      this.$router.go(-1);
    },
  },
};
</script>
