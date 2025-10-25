<template>
  <div class="bg-white rounded-xl shadow-md p-6 mt-6">
    <h3 class="text-xl font-bold mb-4">Comments ({{ comments.length }})</h3>

    <!-- Comment Form -->
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

    <!-- Comment List -->
    <div class="space-y-6">
      <div
        v-for="(comment, index) in comments"
        :key="index"
        class="border-b border-gray-200 pb-6 last:border-b-0"
      >
        <div class="flex items-start">
          <div class="w-12 h-12 bg-gray-200 rounded-full overflow-hidden mr-4">
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
            <div class="mt-2 flex items-center text-sm text-gray-500 space-x-4">
              <button class="hover:text-blue-600">Reply</button>
              <button class="hover:text-blue-600 flex items-center">
                <svg
                  class="w-4 h-4 mr-1"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                  <path
                    d="M2 10a2 2 0 012-2h2a2 2 0 012 2 2 2 0 01-2 2H4a2 2 0 01-2-2z"
                  ></path>
                  <path
                    d="M14 10a2 2 0 012-2h2a2 2 0 012 2 2 2 0 01-2 2h-2a2 2 0 01-2-2z"
                  ></path>
                </svg>
                {{ comment.likes }}
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Load More Comments -->
    <div class="mt-6 text-center" v-if="hasMoreComments">
      <button
        @click="loadMoreComments"
        class="text-blue-600 font-medium hover:text-blue-800"
      >
        Load More Comments
      </button>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    postId: {
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
      commentText: "",
      comments: this.initialComments,
      hasMoreComments: false,
      currentPage: 1,
    };
  },
  methods: {
    async submitComment() {
      if (this.commentText.trim()) {
        // In a real app, you would post to your API here
        const newComment = {
          name: "You",
          avatar: "https://randomuser.me/api/portraits/lego/1.jpg",
          date: "Just now",
          text: this.commentText,
          likes: 0,
        };

        this.comments.unshift(newComment);
        this.commentText = "";
      }
    },
    async loadMoreComments() {
      // In a real app, you would fetch more comments from your API
      this.currentPage++;
      // const newComments = await fetchComments(this.postId, this.currentPage);
      // this.comments = [...this.comments, ...newComments];
      // this.hasMoreComments = newComments.length > 0;
    },
  },
};
</script>
