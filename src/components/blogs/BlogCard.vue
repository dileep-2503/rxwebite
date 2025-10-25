<template>
  <div
    class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300"
  >
    <div class="relative">
      <img
        :src="blog.image"
        :alt="blog.title"
        class="w-full h-48 object-cover"
      />
      <div
        class="absolute top-4 left-4 bg-blue-600 text-white text-xs px-2 py-1 rounded"
      >
        {{ blog.category }}
      </div>
    </div>
    <div class="p-6">
      <div class="flex items-center mb-2 text-sm text-gray-500">
        <span>{{ formatDate(blog.date) }}</span>
        <span class="mx-2">•</span>
        <span>{{ blog.readTime }}</span>
      </div>
      <h2 class="text-xl font-bold mb-2 text-gray-900">{{ blog.title }}</h2>
      <p class="text-gray-600 mb-4">{{ blog.excerpt }}</p>
      <div class="flex justify-between items-center">
        <NuxtLink
          :to="`/blog/${blog.id}`"
          class="text-blue-600 hover:text-blue-800 font-medium"
        >
          Read More →
        </NuxtLink>
        <div class="flex space-x-2">
          <button
            @click="toggleLike"
            class="flex items-center gap-1 transition duration-200"
            :class="
              isLiked ? 'text-red-500' : 'text-gray-400 hover:text-gray-600'
            "
          >
            <svg
              class="w-5 h-5"
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
            <span v-if="showLikeCount" class="text-xs">{{ likeCount }}</span>
          </button>
          <button
            @click="sharePost"
            class="text-gray-400 hover:text-blue-600 transition duration-200"
          >
            <svg
              class="w-5 h-5"
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
          </button>
        </div>
      </div>
      <div class="mt-4 flex flex-wrap gap-2">
        <span
          v-for="tag in blog.tags"
          :key="tag"
          class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded"
        >
          #{{ tag }}
        </span>
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
          <h3 class="text-lg font-bold mb-4">Share this post</h3>
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
            <button
              @click="shareToSocial('facebook')"
              class="flex flex-col items-center justify-center p-3 rounded hover:bg-gray-100"
            >
              <div
                class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white mb-1"
              >
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path
                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"
                  />
                </svg>
              </div>
              <span class="text-xs">Facebook</span>
            </button>
            <button
              @click="copyLink"
              class="flex flex-col items-center justify-center p-3 rounded hover:bg-gray-100"
            >
              <div
                class="w-10 h-10 rounded-full bg-gray-500 flex items-center justify-center text-white mb-1"
              >
                <svg
                  class="w-5 h-5"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"
                  ></path>
                </svg>
              </div>
              <span class="text-xs">Copy Link</span>
            </button>
          </div>
          <div class="relative mb-4">
            <input
              type="text"
              :value="shareLink"
              class="w-full py-2 px-3 border rounded text-sm"
              readonly
              ref="linkInput"
            />
            <span
              v-if="linkCopied"
              class="absolute right-3 top-2 text-xs text-green-600"
            >
              Copied!
            </span>
          </div>
          <button
            @click="showShareModal = false"
            class="w-full py-2 bg-gray-200 text-gray-800 rounded font-medium hover:bg-gray-300"
          >
            Close
          </button>
        </div>
      </div>
    </Teleport>
  </div>
</template>

<script setup>
import { ref, computed } from "vue";

const props = defineProps({
  blog: {
    type: Object,
    required: true,
  },
  showLikeCount: {
    type: Boolean,
    default: true,
  },
});

// Like functionality
const isLiked = ref(false);
const likeCount = ref(props.blog.likes || 0);

const toggleLike = () => {
  if (isLiked.value) {
    likeCount.value--;
  } else {
    likeCount.value++;
  }
  isLiked.value = !isLiked.value;

  // Here you would typically make an API call to update the like status
  // For example:
  // await fetch(`/api/blogs/${props.blog.id}/like`, {
  //   method: 'POST',
  //   body: JSON.stringify({ like: isLiked.value })
  // });
};

// Share functionality
const showShareModal = ref(false);
const linkCopied = ref(false);
const linkInput = ref(null);

const shareLink = computed(() => {
  // Get the base URL dynamically or use a config value
  const baseUrl = window.location.origin;
  return `${baseUrl}/blog/${props.blog.id}`;
});

const sharePost = () => {
  // Check if native share is available (mobile devices)
  if (navigator.share) {
    navigator
      .share({
        title: props.blog.title,
        text: props.blog.excerpt,
        url: shareLink.value,
      })
      .catch((error) => {
        // Fallback to modal if native share fails
        showShareModal.value = true;
      });
  } else {
    // Show custom share modal for desktop
    showShareModal.value = true;
  }
};

const shareToSocial = (platform) => {
  const encodedUrl = encodeURIComponent(shareLink.value);
  const encodedTitle = encodeURIComponent(props.blog.title);

  let url;

  switch (platform) {
    case "twitter":
      url = `https://twitter.com/intent/tweet?text=${encodedTitle}&url=${encodedUrl}`;
      break;
    case "facebook":
      url = `https://www.facebook.com/sharer/sharer.php?u=${encodedUrl}`;
      break;
    default:
      return;
  }

  window.open(url, "_blank", "width=600,height=400");
  showShareModal.value = false;
};

const copyLink = () => {
  if (linkInput.value) {
    linkInput.value.select();
    document.execCommand("copy");

    // Show "Copied" message
    linkCopied.value = true;
    setTimeout(() => {
      linkCopied.value = false;
    }, 2000);
  }
};

const formatDate = (dateString) => {
  const date = new Date(dateString);
  return new Intl.DateTimeFormat("en-US", {
    month: "short",
    day: "numeric",
    year: "numeric",
  }).format(date);
};
</script>
