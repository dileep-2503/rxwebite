<template>
  <div class="careers">
    <header class="careers-header mt-16">
      <h2>Explore Openings</h2>
      <p>
        We're always looking for talented individuals to join our team. Check
        out our open positions below.
      </p>
    </header>

    <section class="job-listings">
      <div v-if="jobs.length > 0">
        <div v-for="job in jobs" :key="job.id" class="job-card">
          <h2>{{ job.title }}</h2>
          <p><strong>Location:</strong> {{ job.location }}</p>
          <p><strong>Type:</strong> {{ job.type }}</p>
          <p><strong>Experience:</strong> {{ job.experience }}</p>
          <p>{{ job.description }}</p>
          <NuxtLink
            :to="
              job.type === 'Internship' ? '/apply-internship' : '/apply-jobs'
            "
            class="apply-button"
          >
            Apply Now
          </NuxtLink>
        </div>
      </div>
      <div v-else>
        <p>No job openings at the moment. Please check back later!</p>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  data() {
    return {
      jobs: [
        {
          id: 1,
          title: "IT Sales and Marketing Executives",
          location: "Chennai (Work from Office)",
          type: "Full-time",
          experience: "Freshers Welcome",
          description:
            "We are looking for a IT Sales and Marketing Executives to join our team and help build amazing user experiences.",
        },
        {
          id: 2,
          title: "Developer",
          location: "Chennai (Work from Office)",
          type: "Full-time",
          experience: "Freshers Welcome",
          description:
            "We are seeking a Developer to design and implement scalable backend systems.",
        },
        {
          id: 3,
          title: "Business Development (Internship)",
          location: "Chennai (Work from Office)",
          type: "Internship",
          experience: "Freshers Welcome",
          description:
            "We are a product-based company hiring for a Business Development Internship. What we offer : Real-time learning, Placement support, Certification, A growth-oriented environment",
        },
      ],
    };
  },
};
</script>

<style scoped>
/* Base styles */
.careers {
  padding: 2rem;
  max-width: 1200px;
  margin: 0 auto;
}

h2 {
  color: var(--heading-color);
}

.careers-header {
  text-align: center;
  margin-bottom: 2rem;
}

.careers-header h1 {
  font-size: 2.5rem;
  margin-bottom: 1rem;
}

.careers-header p {
  font-size: 1.2rem;
  color: #666;
}

.job-listings {
  margin-top: 2rem;
}

.job-card {
  background: #f9f9f9;
  padding: 1.5rem;
  margin-bottom: 1rem;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.job-card h2 {
  margin-top: 0;
  font-size: 1.8rem;
}

.job-card p {
  margin: 0.5rem 0;
  font-size: 1rem;
  color: #444;
}

.apply-button {
  background-color: var(--accent-color);
  color: var(--contrast-color);
  display: inline-block;
  margin-top: 1rem;
  padding: 0.5rem 1rem;
  text-decoration: none;
  border-radius: 4px;
  font-size: 1rem;
  transition: background 0.3s ease;
}

.apply-button:hover {
  background-color: color-mix(
    in srgb,
    var(--accent-color),
    var(--contrast-color) 20%
  );
}

/* Responsive styles */
@media (max-width: 768px) {
  .careers {
    padding: 1rem;
  }

  .careers-header h1 {
    font-size: 2rem;
  }

  .careers-header p {
    font-size: 1rem;
  }

  .job-card h2 {
    font-size: 1.5rem;
  }

  .job-card p {
    font-size: 0.9rem;
  }

  .apply-button {
    font-size: 0.9rem;
    padding: 0.4rem 0.8rem;
  }
}

@media (max-width: 480px) {
  .careers-header h1 {
    font-size: 1.8rem;
  }

  .careers-header p {
    font-size: 0.9rem;
  }

  .job-card {
    padding: 1rem;
  }

  .job-card h2 {
    font-size: 1.3rem;
  }

  .job-card p {
    font-size: 0.85rem;
  }

  .apply-button {
    font-size: 0.85rem;
    padding: 0.3rem 0.7rem;
  }
}
</style>
