<template>
  <div
    class="bg-white rounded-xl shadow-md p-6 flex justify-between items-center"
  >
    <div class="flex items-center space-x-4">
      <button
        @click="toggleLike"
        class="flex items-center gap-2"
        :class="isLiked ? 'text-red-500' : 'text-gray-400 hover:text-gray-600'"
      >
        <svg
          class="w-6 h-6"
          fill="currentColor"
          :stroke="isLiked ? 'none' : 'currentColor'"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
          ></path>
        </svg>
        <span>{{ likeCount }} likes</span>
      </button>
      <button
        @click="sharePost"
        class="flex items-center gap-2 text-gray-400 hover:text-blue-600"
      >
        <svg
          class="w-6 h-6"
          fill="none"
          stroke="currentColor"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"
          ></path>
        </svg>
        <span>Share</span>
      </button>
    </div>
    <div class="text-sm text-gray-500">
      Last updated: {{ formatDate(date) }}
    </div>
  </div>

  <!-- Share Modal -->
  <Teleport to="body">
    <div
      v-if="showShareModal"
      class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50"
      @click.self="showShareModal = false"
    >
      <div class="bg-white rounded-lg p-6 w-80 max-w-full">
        <h3 class="text-lg font-bold mb-4">Share this article</h3>
        <div class="grid grid-cols-3 gap-4 mb-4">
          <button
            @click="shareToSocial('twitter')"
            class="flex flex-col items-center justify-center p-3 rounded hover:bg-gray-100"
          >
            <div
              class="w-10 h-10 rounded-full bg-blue-400 flex items-center justify-center text-white mb-1"
            >
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"
                />
              </svg>
            </div>
            <span class="text-xs">Twitter</span>
          </button>
          <!-- Other social buttons... -->
        </div>
        <div class="flex items-center border-t border-gray-200 pt-4">
          <input
            type="text"
            :value="currentUrl"
            ref="shareUrlInput"
            readonly
            class="flex-1 px-3 py-2 border rounded-l text-sm focus:outline-none"
          />
          <button
            @click="copyLink"
            class="bg-blue-600 text-white px-4 py-2 rounded-r hover:bg-blue-700 text-sm"
          >
            Copy
          </button>
        </div>
      </div>
    </div>
  </Teleport>
</template>

<script>
export default {
  props: {
    postId: {
      type: String,
      required: true,
    },
    initialLikes: {
      type: Number,
      default: 0,
    },
    date: {
      type: String,
      required: true,
    },
  },
  data() {
    return {
      isLiked: false,
      likeCount: this.initialLikes,
      showShareModal: false,
      currentUrl: "",
    };
  },
  mounted() {
    this.currentUrl = window.location.href;
    this.checkLikeStatus();
  },
  methods: {
    formatDate(dateString) {
      const options = { year: "numeric", month: "long", day: "numeric" };
      return new Date(dateString).toLocaleDateString("en-US", options);
    },
    checkLikeStatus() {
      // Check localStorage or API to see if user has liked this post
      const likedPosts = JSON.parse(localStorage.getItem("likedPosts") || "{}");
      this.isLiked = !!likedPosts[this.postId];
    },
    toggleLike() {
      this.isLiked = !this.isLiked;
      this.likeCount += this.isLiked ? 1 : -1;

      // Update localStorage
      const likedPosts = JSON.parse(localStorage.getItem("likedPosts") || "{}");
      if (this.isLiked) {
        likedPosts[this.postId] = true;
      } else {
        delete likedPosts[this.postId];
      }
      localStorage.setItem("likedPosts", JSON.stringify(likedPosts));

      // Here you would also typically update the like count in your database via API
    },
    sharePost() {
      this.showShareModal = true;
    },
    shareToSocial(platform) {
      const url = encodeURIComponent(this.currentUrl);
      const text = encodeURIComponent("Check this out!");
      let shareUrl = "";

      switch (platform) {
        case "twitter":
          shareUrl = `https://twitter.com/intent/tweet?url=${url}&text=${text}`;
          break;
        case "facebook":
          shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${url}`;
          break;
        case "linkedin":
          shareUrl = `https://www.linkedin.com/shareArticle?mini=true&url=${url}`;
          break;
      }

      window.open(shareUrl, "_blank");
    },
    async copyLink() {
      const input = this.$refs.shareUrlInput;
      try {
        await navigator.clipboard.writeText(input.value);
        const originalText = input.nextElementSibling.textContent;
        input.nextElementSibling.textContent = "Copied!";
        setTimeout(() => {
          input.nextElementSibling.textContent = originalText;
        }, 2000);
      } catch (err) {
        console.error("Failed to copy:", err);
      }
    },
  },
};
</script>
