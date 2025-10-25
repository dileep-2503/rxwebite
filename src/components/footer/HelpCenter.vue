<template>
  <div class="help-center">
    <!-- Header Section -->
    <header class="help-center-header mt-16">
      <h2>Help Center</h2>
      <p>
        Find answers to common questions or contact us for further assistance.
      </p>
      <div class="search-bar">
        <input
          type="text"
          placeholder="Search for help..."
          class="form-control"
          v-model="searchQuery"
          @input="filterFAQs"
        />
        <button @click="filterFAQs">Search</button>
      </div>
    </header>

    <!-- FAQ Categories Section -->
    <section class="faq-categories">
      <h2>Categories</h2>
      <div class="categories-grid">
        <div
          v-for="category in categories"
          :key="category.id"
          class="category-card"
          @click="scrollToCategory(category.id)"
        >
          <h3>{{ category.name }}</h3>
          <p>{{ category.description }}</p>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
      <h2>Frequently Asked Questions</h2>
      <div
        v-for="category in filteredCategories"
        :key="category.id"
        :id="category.id"
        class="faq-category"
      >
        <h3>{{ category.name }}</h3>
        <div v-for="faq in category.faqs" :key="faq.id" class="faq-item">
          <div class="faq-question" @click="toggleAnswer(faq.id)">
            <span>{{ faq.question }}</span>
            <span class="toggle-icon">{{ faq.isOpen ? "−" : "+" }}</span>
          </div>
          <div v-if="faq.isOpen" class="faq-answer">
            <p>{{ faq.answer }}</p>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  data() {
    return {
      searchQuery: "",
      categories: [
        {
          id: "account",
          name: "Account",
          description: "Manage your account settings and preferences.",
          faqs: [
            {
              id: "account-1",
              question: "How do I reset my password?",
              answer:
                "You can reset your password by clicking on 'Forgot Password' on the login page.",
              isOpen: false,
            },
            {
              id: "account-2",
              question: "How do I update my email address?",
              answer:
                "Go to your account settings and update your email address under the 'Profile' section.",
              isOpen: false,
            },
          ],
        },
        {
          id: "billing",
          name: "Billing",
          description: "Questions about payments and subscriptions.",
          faqs: [
            {
              id: "billing-1",
              question: "How do I update my payment method?",
              answer:
                "You can update your payment method in the 'Billing' section of your account.",
              isOpen: false,
            },
            {
              id: "billing-2",
              question: "What payment methods do you accept?",
              answer: "We accept credit cards, PayPal, and bank transfers.",
              isOpen: false,
            },
          ],
        },
        {
          id: "technical",
          name: "Technical Support",
          description: "Get help with technical issues.",
          faqs: [
            {
              id: "technical-1",
              question: "How do I clear my browser cache?",
              answer:
                "You can clear your cache in your browser settings under 'Privacy and Security'.",
              isOpen: false,
            },
            {
              id: "technical-2",
              question: "Why is the website not loading?",
              answer:
                "Please check your internet connection or try refreshing the page.",
              isOpen: false,
            },
          ],
        },
      ],
    };
  },
  computed: {
    filteredCategories() {
      if (!this.searchQuery) return this.categories;

      return this.categories
        .map((category) => ({
          ...category,
          faqs: category.faqs.filter((faq) =>
            faq.question.toLowerCase().includes(this.searchQuery.toLowerCase())
          ),
        }))
        .filter((category) => category.faqs.length > 0);
    },
  },
  methods: {
    toggleAnswer(faqId) {
      this.categories.forEach((category) => {
        category.faqs.forEach((faq) => {
          if (faq.id === faqId) {
            faq.isOpen = !faq.isOpen;
          }
        });
      });
    },
    filterFAQs() {
      // Logic is handled in computed property
    },
    scrollToCategory(categoryId) {
      const element = document.getElementById(categoryId);
      if (element) {
        element.scrollIntoView({ behavior: "smooth" });
      }
    },
  },
};
</script>

<style scoped>
/* Base styles */
.help-center {
  padding: 2rem;
  max-width: 1200px;
  margin: 0 auto;
}

h2 {
  color: var(--heading-color);
}

.help-center-header {
  text-align: center;
  margin-bottom: 2rem;
}

.help-center-header h1 {
  font-size: 2.5rem;
  margin-bottom: 1rem;
}

.help-center-header p {
  font-size: 1.2rem;
  color: #666;
}

.search-bar {
  display: flex;
  justify-content: center;
  margin-top: 1.5rem;
}

.search-bar input {
  padding: 0.5rem;
  width: 300px;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-right: 0.5rem;
}

.search-bar button {
  padding: 0.5rem 1rem;
  background-color: var(--accent-color);
  color: var(--contrast-color);
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.search-bar button:hover {
  background-color: color-mix(
    in srgb,
    var(--accent-color),
    var(--contrast-color) 20%
  );
}

.faq-categories {
  margin-bottom: 3rem;
}

.faq-categories h2 {
  font-size: 2rem;
  margin-bottom: 1.5rem;
}

.categories-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 1.5rem;
}

.category-card {
  background: var(--accent-color);
  padding: 1.5rem;
  border-radius: 8px;
  box-shadow: 0 2px 4px var(--accent-color);
  cursor: pointer;
  transition: transform 0.3s ease;
}

.category-card:hover {
  transform: translateY(-5px);
}

.category-card h3 {
  font-size: 1.5rem;
  margin-bottom: 0.5rem;
  color: var(--contrast-color);
}

.category-card p {
  font-size: 1rem;
  color: var(--contrast-color);
}

.faq-section h2 {
  font-size: 2rem;
  margin-bottom: 1.5rem;
}

.faq-category {
  margin-bottom: 2rem;
}

.faq-category h3 {
  font-size: 1.8rem;
  margin-bottom: 1rem;
}

.faq-item {
  margin-bottom: 1rem;
}

.faq-question {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1rem;
  background: #f1f1f1;
  border-radius: 4px;
  cursor: pointer;
}

.faq-question span {
  font-size: 1.1rem;
}

.toggle-icon {
  font-size: 1.5rem;
}

.faq-answer {
  padding: 1rem;
  background: #f9f9f9;
  border-radius: 4px;
  margin-top: 0.5rem;
}

/* Responsive styles */
@media (max-width: 768px) {
  .help-center-header h1 {
    font-size: 2rem;
  }

  .help-center-header p {
    font-size: 1rem;
  }

  .search-bar input {
    width: 100%;
  }

  .categories-grid {
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  }

  .faq-category h3 {
    font-size: 1.5rem;
  }

  .faq-question span {
    font-size: 1rem;
  }
}

@media (max-width: 480px) {
  .help-center {
    padding: 1rem;
  }

  .help-center-header h1 {
    font-size: 1.8rem;
  }

  .help-center-header p {
    font-size: 0.9rem;
  }

  .categories-grid {
    grid-template-columns: 1fr;
  }

  .faq-category h3 {
    font-size: 1.3rem;
  }

  .faq-question span {
    font-size: 0.9rem;
  }
}
.help-center .form-control {
  border-color: color-mix(in srgb, var(--default-color), transparent 90%);
  border-radius: 0.5rem;
  background-color: color-mix(in srgb, var(--surface-color) 90%, white 5%);
  color: var(--default-color);
}

.help-center .form-control:focus {
  box-shadow: none;
  border-color: var(--accent-color);
}

.help-center .form-control::placeholder {
  color: color-mix(in srgb, var(--default-color), transparent 50%);
}
</style>
