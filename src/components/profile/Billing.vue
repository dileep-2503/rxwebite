<template>
  <div
    class="container mx-auto p-6 max-w-4xl"
    style="color: var(--default-color); background: var(--background-color)"
  >
    <div class="p-6 rounded-lg shadow" style="background: var(--surface-color)">
      <h2 class="text-xxl font-bold mb-6" style="color: var(--heading-color)">
        Subscription Details
      </h2>
      <hr />
      <div class="flex flex-col md:flex-row md:justify-between mb-6">
        <h2 class="font-semibold text-xxl mb-4">
          {{ form.planName }}
        </h2>
        <div class="flex items-center gap-2 mb-3">
          <p class="break-all">License Key : {{ form.licenseKey }}</p>
          <button
            @click="copyToClipboard(form.licenseKey, 'license')"
            class="text-blue-600 hover:text-blue-800 text-sm"
            title="Copy"
          >
            <Copy class="w-4 h-4" style="margin-top: -14px" />
          </button>
          <span v-if="copied.license" class="text-green-500 text-sm"
            >Copied!</span
          >
        </div>
      </div>

      <div class="flex flex-col md:flex-row md:justify-between gap-6">
        <!-- Left Column -->
        <div class="flex-1">
          <p class="font-semibold text-lg mb-1">Status:</p>
          <p
            :class="{
              'text-green-500': form.status === 'active',
              'text-red-500': form.status !== 'active',
            }"
            class="mb-3"
          >
            {{ form.status === "active" ? "Active" : "Expired / Canceled" }}
          </p>

          <p class="font-semibold text-lg mb-1">Expiration Date:</p>
          <p class="mb-3">{{ formattedEndDate }}</p>

          <p class="font-semibold text-lg mb-1">Renewal Price (incl. tax):</p>
          <p class="mb-3">
            ₹ {{ parseFloat(form.regularPaymentAmount).toFixed(2) }}
          </p>

          <p class="font-semibold text-lg mb-1">Auto Renewal:</p>
          <p class="mb-3">
            {{ form.status === "active" ? "Enabled" : "Disabled" }}
          </p>
        </div>

        <!-- Right Column -->
        <div class="flex-1">
          <p class="font-semibold text-lg mb-1">Subscription ID:</p>
          <div class="flex items-center gap-2 mb-3">
            <p class="break-all">{{ form.subscriptionId }}</p>
            <button
              @click="copyToClipboard(form.subscriptionId, 'subscription')"
              class="text-blue-600 hover:text-blue-800 text-sm"
              title="Copy"
            >
              <Copy class="w-4 h-4" style="margin-top: -14px" />
            </button>
            <span v-if="copied.subscription" class="text-green-500 text-sm"
              >Copied!</span
            >
          </div>

          <p class="font-semibold text-lg mb-1">Next Billing Period:</p>
          <p class="mb-3">
            {{
              form.selectedPeriod === 1 ? "Every 30 Days" : "Every 12 Months"
            }}
          </p>

          <p class="font-semibold text-lg mb-1">Action Time:</p>
          <p class="mb-3">{{ form.actionTime }}</p>

          <p class="font-semibold text-lg mb-1">Remaining Days:</p>
          <p class="mb-3">{{ remainingDays }} days</p>
        </div>
      </div>

      <div class="flex flex-wrap gap-4 mt-6">
        <button
          @click="redirectToPricing"
          class="px-4 py-2 rounded text-white"
          style="background-color: var(--accent-color)"
        >
          Upgrade Plan
        </button>
        <button
          @click="promptCancel"
          class="px-4 py-2 rounded"
          style="background-color: #ffe4e6; color: #dc2626"
        >
          Cancel Subscription
        </button>
      </div>
    </div>
  </div>

  <!-- Cancel Modal -->
  <div
    v-if="showCancelModal"
    class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
  >
    <div class="bg-white rounded-lg p-6 shadow-xl max-w-sm w-full text-center">
      <h3 class="text-lg font-semibold mb-4">Confirm Cancellation</h3>
      <p class="mb-6">Are you sure you want to cancel your subscription?</p>
      <div class="flex justify-center gap-4">
        <button
          @click="confirmCancel"
          class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600"
        >
          Yes, Cancel
        </button>
        <button
          @click="showCancelModal = false"
          class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400"
        >
          No
        </button>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, computed, onMounted } from "vue";
import { useRouter } from "vue-router";
import axios from "axios";
import { Copy } from "lucide-vue-next";

const config = useRuntimeConfig();
const API_URL = config.public.API_URL;

const token = process.client
  ? localStorage.getItem("rx_square_web_token")
  : null;
const router = useRouter();

// Independent copied state
const copied = ref({
  license: false,
  subscription: false,
});

const showCancelModal = ref(false);

// Subscription form data
const form = ref({
  actionDate: "",
  actionTime: "",
  customerEmail: "",
  customerName: "",
  customerPhone: "",
  totalDays: 0,
  firstPaymentAmount: 0,
  id: 0,
  licenseKey: "",
  planName: "",
  regularPaymentAmount: 0,
  selectedPeriod: 0,
  status: "",
  userId: 0,
  subscriptionId: "",
});

// Fetch data from API
const fetchUserDetails = async () => {
  if (!token) return;
  try {
    const res = await axios.get(`${API_URL}/subscription-details`, {
      headers: { Authorization: token },
    });
    if (res.data) {
      const userData = res.data;
      form.value = {
        actionDate: userData.action_date,
        actionTime: userData.action_time,
        customerEmail: userData.customer_email,
        customerName: userData.customer_name,
        customerPhone: userData.customer_phone,
        totalDays: userData.days,
        firstPaymentAmount: userData.first_payment_amount,
        id: userData.id,
        licenseKey: userData.license_key,
        planName: userData.plan_name,
        regularPaymentAmount: userData.regular_payment_amount,
        selectedPeriod: userData.selected_period,
        status: userData.status,
        userId: userData.user_id,
        subscriptionId: userData.subscription_id,
      };
    }
  } catch (error) {
    console.error("Error fetching user details:", error);
  }
};

// Calculate remaining days
const remainingDays = computed(() => {
  const today = new Date();
  const end = new Date(formattedEndDate.value);
  const diffTime = end - today;
  const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
  return diffDays > 0 ? diffDays : 0;
});

// Calculate formatted end date
const formattedEndDate = computed(() => {
  if (!form.value.actionDate) return "";
  const endDate = new Date(form.value.actionDate);
  form.value.selectedPeriod === 1
    ? endDate.setDate(endDate.getDate() + 30)
    : endDate.setMonth(endDate.getMonth() + 12);
  return endDate.toLocaleDateString();
});

// Navigate to pricing
const redirectToPricing = () => router.push("/pricing");

// Cancel flow
const promptCancel = () => (showCancelModal.value = true);
const confirmCancel = async () => {
  showCancelModal.value = false;
  try {
    await axios.post(
      `${API_URL}/cancel-subscription`,
      { subscription_id: form.value.subscriptionId },
      { headers: { Authorization: token } }
    );
    form.value.status = "expired";
    await fetchUserDetails();
  } catch (err) {
    console.error("Cancel subscription failed:", err);
  }
};

// Copy function with key flag
const copyToClipboard = (text, key) => {
  if (!navigator.clipboard) {
    const input = document.createElement("input");
    input.value = text;
    document.body.appendChild(input);
    input.select();
    document.execCommand("copy");
    document.body.removeChild(input);
  } else {
    navigator.clipboard.writeText(text).then(() => {
      copied.value[key] = true;
      setTimeout(() => (copied.value[key] = false), 2000);
    });
  }
};

onMounted(() => {
  fetchUserDetails();
});
</script>

<style scoped>
.container {
  max-width: 1200px;
  width: 100%;
  margin: auto;
}
@media (max-width: 768px) {
  .container {
    padding: 15px;
  }
  .flex-wrap {
    flex-direction: column;
    align-items: center;
  }
}
.fixed {
  z-index: 1000;
}
</style>
