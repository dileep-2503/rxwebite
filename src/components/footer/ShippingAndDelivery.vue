<template>
  <div class="shipping-delivery-container">
    <h1 class="text-3xl font-semibold mb-4">Shipping and Delivery</h1>
    <p class="text-lg">Last updated on Feb 20, 2025</p>

    <section>
      <h2 class="text-2xl font-semibold mb-2">Shipping Policy</h2>
      <p>
        Shipping is not applicable as we sell only digital products. All orders
        are processed and delivered electronically. There are no physical
        shipments involved. Please note that delivery times may vary based on
        product availability and the digital medium used for delivery.
      </p>
    </section>

    <section>
      <h2 class="text-2xl font-semibold mb-2">Delivery Policy</h2>
      <p>
        Since we sell only digital products, there are no physical delivery
        services. All products are delivered electronically through the
        specified digital medium (e.g., email, download link, etc.). No pick-up
        arrangements are required.
      </p>
    </section>

    <section>
      <h2 class="text-2xl font-semibold mb-2">Shipping Restrictions</h2>
      <p>
        As we are selling only digital products, shipping restrictions do not
        apply. There are no geographical or business address limitations for our
        products. Please ensure that the email or account information provided
        is valid for digital delivery.
      </p>
    </section>
  </div>
</template>

<script setup>
// No additional logic is required for this simple static page
</script>

<style scoped>
.shipping-delivery-container {
  padding: 20px;
  max-width: 900px;
  margin: auto;
}

h1 {
  text-align: center;
  color: var(--heading-color); /* Using custom heading color */
}

h2 {
  border-bottom: 2px solid #ccc;
  padding-bottom: 5px;
  color: var(--heading-color); /* Using custom heading color */
}

section {
  padding: 5px;
}

section p {
  color: #555;
}

section h2 {
  color: var(--accent-color); /* Using custom accent color */
}
</style>
