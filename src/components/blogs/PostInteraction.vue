<template>
  <div class="bg-white rounded-xl shadow-md p-6 space-y-6 mt-6">
    <!-- Like and Share -->
    <div class="flex justify-between items-center">
      <div class="flex items-center space-x-4">
        <button
          @click="toggleLike"
          class="flex items-center gap-2"
          :class="
            isLiked ? 'text-red-500' : 'text-gray-400 hover:text-gray-600'
          "
        >
          <svg
            class="w-6 h-6"
            fill="currentColor"
            :stroke="isLiked ? 'none' : 'currentColor'"
            viewBox="0 0 24 24"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
            />
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
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M8.684 13.342A3 3 0 118.684 9m0 4.342l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684A3 3 0 0015.316 7.342zm0 9.316a3 3 0 105.368 2.684A3 3 0 0015.316 16.658z"
            />
          </svg>
          <span>Share</span>
        </button>
      </div>
      <div class="text-sm text-gray-500">
        Last updated: {{ formatDate(date) }}
      </div>
    </div>

    <!-- Comments -->
    <div>
      <h3 class="text-xl font-bold mb-4">Comments ({{ comments.length }})</h3>
      <div class="mb-6">
        <textarea
          v-model="commentText"
          class="w-full border border-gray-300 rounded-lg p-3 h-24 focus:outline-none focus:ring-2 focus:ring-blue-500"
          placeholder="Join the discussion..."
        ></textarea>
        <div class="mt-2 flex justify-end">
          <button
            @click="submitComment"
            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300"
            :disabled="!commentText.trim()"
            :class="{ 'opacity-50 cursor-not-allowed': !commentText.trim() }"
          >
            Post Comment
          </button>
        </div>
      </div>

      <div class="space-y-6">
        <div
          v-for="(comment, index) in comments"
          :key="index"
          class="border-b border-gray-200 pb-6 last:border-b-0"
        >
          <div class="flex items-start">
            <div
              class="w-12 h-12 bg-gray-200 rounded-full overflow-hidden mr-4"
            >
              <img
                :src="comment.avatar"
                alt="User Avatar"
                class="w-full h-full object-cover"
              />
            </div>
            <div class="flex-1">
              <div class="flex items-center mb-1">
                <h4 class="font-bold text-gray-900">{{ comment.name }}</h4>
                <span class="mx-2 text-gray-300">•</span>
                <span class="text-sm text-gray-500">{{ comment.date }}</span>
              </div>
              <p class="text-gray-700">{{ comment.text }}</p>
            </div>
          </div>
        </div>
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
  </div>
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
    initialComments: {
      type: Array,
      default: () => [],
    },
  },
  data() {
    return {
      isLiked: false,
      likeCount: this.initialLikes,
      showShareModal: false,
      currentUrl: "",
      commentText: "",
      comments: this.initialComments,
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
      const likedPosts = JSON.parse(localStorage.getItem("likedPosts") || "{}");
      this.isLiked = !!likedPosts[this.postId];
    },
    toggleLike() {
      this.isLiked = !this.isLiked;
      this.likeCount += this.isLiked ? 1 : -1;

      const likedPosts = JSON.parse(localStorage.getItem("likedPosts") || "{}");
      if (this.isLiked) {
        likedPosts[this.postId] = true;
      } else {
        delete likedPosts[this.postId];
      }
      localStorage.setItem("likedPosts", JSON.stringify(likedPosts));
    },
    sharePost() {
      this.showShareModal = true;
    },
    copyLink() {
      const input = this.$refs.shareUrlInput;
      input.select();
      document.execCommand("copy");

      const originalText = input.nextElementSibling.textContent;
      input.nextElementSibling.textContent = "Copied!";
      setTimeout(() => {
        input.nextElementSibling.textContent = originalText;
      }, 2000);
    },
    submitComment() {
      if (this.commentText.trim()) {
        this.comments.unshift({
          name: "You",
          avatar: "https://randomuser.me/api/portraits/lego/1.jpg",
          date: "Just now",
          text: this.commentText,
          likes: 0,
        });
        this.commentText = "";
      }
    },
  },
};
</script>

<style scoped>
textarea::placeholder {
  color: #a0aec0;
}
</style>
