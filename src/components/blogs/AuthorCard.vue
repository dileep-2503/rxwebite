<template>
  <div class="bg-white rounded-xl shadow-md p-6 mb-6">
    <div class="flex items-center mb-4">
      <img
        src="../../assets/img/author.jpg"
        :alt="title"
        class="w-16 h-16 rounded-full object-cover mr-4"
      />
      <div>
        <h3 class="font-bold text-dark text-lg">{{ title }}</h3>
        <p class="text-dark-600">{{ subtitle }}</p>
      </div>
    </div>
    <p class="text-dark-700 mb-4">{{ description }}</p>
    <div class="flex space-x-4 text-2xl text-[#1877F2]">
      <a
        href="https://x.com/rx_square?t=qqbGyEMKvGyZiiZTNoceqw&s=09"
        target="_blank"
        aria-label="Twitter"
      >
        <i class="bi bi-twitter"></i>
      </a>
      <a
        href="https://www.facebook.com/share/1DmQoqQQua/"
        target="_blank"
        aria-label="Facebook"
      >
        <i class="bi bi-facebook"></i>
      </a>
      <a
        href="https://www.instagram.com/rx.square?igsh=MW1kYTlpaGl0Z3prbA=="
        target="_blank"
        aria-label="Instagram"
      >
        <i class="bi bi-instagram"></i>
      </a>
      <a
        href="https://www.linkedin.com/company/rx-square/"
        target="_blank"
        aria-label="LinkedIn"
      >
        <i class="bi bi-linkedin"></i>
      </a>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    title: {
      type: String,
      default: "RX Square",
    },
    subtitle: {
      type: String,
      default: "Retail & POS Technology Innovators",
    },
    description: {
      type: String,
      default:
        "RX Square is a cutting-edge technology company focused on revolutionizing retail experiences. From POS systems to inventory and subscription management, we help businesses scale smarter and faster.",
    },
  },
};
</script>
