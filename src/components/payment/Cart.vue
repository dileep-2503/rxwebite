<template>
  <div class="cart-page">
    <main class="cart-container mt-16" v-if="selectedPlan">
      <NuxtLink to="/pricing" class="back-button">← Back to Plans</NuxtLink>

      <div class="cart-content">
        <!-- Left: Plan Details -->
        <div class="plan-section">
          <h2>Your Cart</h2>
          <div class="plan-box">
            <h3>{{ selectedPlan.planName }}</h3>

            <div class="plan-info">
              <div class="row">
                <label>Period:</label>
                <select v-model="selectedPeriod">
                  <option
                    v-for="period in periods"
                    :key="period.value"
                    :value="period.value"
                  >
                    {{ period.label }}
                  </option>
                </select>
              </div>

              <div class="price">
                {{
                  selectedPeriod === 1
                    ? "₹" + selectedPlan.monthlyPrice
                    : "₹" + selectedPlan.yearlyPrice
                }}/{{ selectedPeriod === 1 ? "month" : "year" }}
                <span v-if="selectedPeriod === 12" class="original-price">
                  (₹{{ selectedPlan.monthlyPrice * 12 }})
                </span>
              </div>
              <div class="renewal-note">
                Renews at
                {{
                  selectedPeriod === 1
                    ? "₹" + selectedPlan.monthlyPrice + "/mo"
                    : "₹" + selectedPlan.yearlyPrice + "/yr"
                }}. Cancel anytime.
              </div>

              <div class="features">
                <h4>Features:</h4>
                <ul>
                  <li
                    v-for="(feature, i) in selectedPlan.planFeatures"
                    :key="i"
                  >
                    ✓ {{ feature }}
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Right: Coupon and Summary -->
        <div class="coupon-summary">
          <div class="customer-form">
            <h4>Customer Details</h4>
            <input
              v-model="customerName"
              type="text"
              placeholder="Full Name"
              required
            />
            <input
              v-model="customerEmail"
              type="email"
              placeholder="Email Address"
              required
            />
            <input
              v-model="customerPhone"
              type="tel"
              placeholder="Phone Number"
              required
            />
          </div>

          <div class="coupon-section">
            <div class="coupon-toggle" @click="toggleCouponInput">
              <span>Have a coupon?</span>
              <span class="icon">{{ showCouponInput ? "−" : "+" }}</span>
            </div>

            <div v-if="showCouponInput" class="coupon-input-area">
              <input
                v-model="couponCode"
                type="text"
                placeholder="Enter code"
                @keyup.enter="applyCoupon"
              />
              <button @click="applyCoupon">
                {{ appliedCoupon ? "Remove" : "Apply" }}
              </button>
            </div>

            <div v-if="appliedCoupon" class="coupon-applied">
              Applied: {{ appliedCoupon.code }} ({{ appliedCoupon.discount }}
              off)
              <button @click="removeCoupon">×</button>
            </div>

            <div v-if="couponError" class="error">{{ couponError }}</div>
            <div
              v-if="appliedCoupon && selectedPeriod === 1"
              class="coupon-note"
            >
              * Coupon discount will only apply to first month's payment
            </div>
            <div
              v-if="appliedCoupon && selectedPeriod === 12"
              class="coupon-note"
            >
              * Coupons cannot be applied to yearly subscriptions
            </div>
          </div>

          <div class="summary">
            <div v-if="selectedPeriod === 12" class="summary-line discount">
              <span>Yearly Discount (10%):</span>
              <span>-₹{{ priceDetails.yearlyDiscount }}</span>
            </div>
            <div class="summary-line">
              <span>
                Subtotal ({{ selectedPeriod }}
                {{ selectedPeriod > 1 ? "months" : "month" }}):
              </span>
              <span>₹{{ priceDetails.subtotal }}</span>
            </div>
            <div class="summary-line">
              <span>GST (18%):</span>
              <span>₹{{ priceDetails.gstAmount }}</span>
            </div>
            <div
              v-if="appliedCoupon && selectedPeriod === 1"
              class="summary-line discount"
            >
              <span>First Month Discount:</span>
              <span>-₹{{ priceDetails.discount }}</span>
            </div>
            <div class="summary-line total">
              <span>Total:</span>
              <span>₹{{ priceDetails.total }}</span>
            </div>
            <div class="summary-line">
              <span>First Payment:</span>
              <span>₹{{ priceDetails.firstPayment }}</span>
            </div>
            <p v-if="selectedPeriod === 1" class="note">
              * Subsequent payments: ₹{{
                priceDetails.subsequentPayments
              }}/month
            </p>
          </div>
        </div>
      </div>

      <div class="actions">
        <button @click="proceedToPayment" :disabled="loading">
          {{ loading ? "Processing..." : "Proceed to Payment" }}
        </button>
      </div>

      <div class="guarantee">✔ 30-day money-back guarantee</div>
    </main>

    <!-- License Key Modal -->
    <div v-if="showLicenseModal" class="modal-overlay">
      <div class="modal-content">
        <h3>Subscription Activated Successfully!</h3>
        <div class="license-key-container">
          <p>Your license key:</p>
          <div class="license-key">{{ licenseKey }}</div>
          <small>Please save this key for future reference</small>
        </div>
        <button @click="closeLicenseModal" class="close-btn">Close</button>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, computed, onMounted } from "vue";
import { useRoute, useRouter } from "vue-router";
import axios from "axios";
const config = useRuntimeConfig();
const API_URL = config.public.API_URL;

const route = useRoute();
const router = useRouter();

// State
const selectedPlan = ref(null);
const selectedPeriod = ref(1); // 1 for monthly, 12 for yearly
const showCouponInput = ref(false);
const appliedCoupon = ref(null);
const couponError = ref("");
const couponCode = ref("");
const loading = ref(false);
const razorpayLoaded = ref(false);
const showLicenseModal = ref(false);
const licenseKey = ref("");
const customerName = ref("");
const customerEmail = ref("");
const customerPhone = ref("");

// Constants
const periods = [
  { value: 1, label: "1 month" },
  { value: 12, label: "12 months (save 10%)" },
];

const couponDatabase = [
  { code: "WELCOME10", discount: 10, type: "percentage" },
  { code: "SAVE20", discount: 20, type: "percentage" },
  { code: "FLAT500", discount: 500, type: "fixed" },
];

// Lifecycle
onMounted(() => {
  if (route.query.planName) {
    selectedPlan.value = {
      planName: route.query.planName,
      monthlyPrice: parseFloat(route.query.planPrice),
      yearlyPrice: parseFloat(route.query.planPrice) * 12,
      monthlyPlanId: route.query.monthlyPlanId,
      yearlyPlanId: route.query.yearlyPlanId,
      planFeatures: JSON.parse(route.query.planFeatures || "[]"),
    };
  }
  loadRazorpay();
});

const priceDetails = computed(() => {
  if (!selectedPlan.value)
    return {
      subtotal: 0,
      gstAmount: 0,
      discount: 0,
      total: 0,
      firstPayment: 0,
      subsequentPayments: 0,
      yearlyDiscount: 0,
    };

  let subtotal =
    selectedPeriod.value === 1
      ? selectedPlan.value.monthlyPrice
      : selectedPlan.value.yearlyPrice;

  let yearlyDiscount = 0;

  // Step 1: Apply default discount (10%) for yearly subscription if no coupon is applied
  if (selectedPeriod.value === 12 && !appliedCoupon.value) {
    yearlyDiscount = Math.floor(selectedPlan.value.monthlyPrice * 12 * 0.1);
    subtotal = subtotal - yearlyDiscount; // Apply default discount
  }

  // Step 2: Apply coupon discount (only for total after default discount)
  let couponDiscount = 0;
  if (appliedCoupon.value) {
    if (appliedCoupon.value.type === "percentage") {
      couponDiscount = Math.floor(subtotal * (appliedCoupon.value.value / 100));
    } else {
      couponDiscount = Math.min(appliedCoupon.value.value, subtotal);
    }
  }

  // Step 3: Apply GST after both discounts
  const totalAfterDiscount = subtotal - couponDiscount; // Subtotal after both discounts
  const gstAmount = Math.round(totalAfterDiscount * 0.18);

  // Step 4: Calculate the total amount after GST
  const total = totalAfterDiscount + gstAmount;

  // Step 5: Calculate first payment (yearly: after discount and GST, monthly: only the first month's cost)
  const firstPayment =
    selectedPeriod.value === 1
      ? selectedPlan.value.monthlyPrice +
        Math.round(selectedPlan.value.monthlyPrice * 0.18) -
        couponDiscount
      : totalAfterDiscount + gstAmount;

  // Step 6: Subseqeunt Payments (yearly: same as the original yearly cost)
  const subsequentPayments =
    selectedPeriod.value === 1
      ? selectedPlan.value.monthlyPrice +
        Math.round(selectedPlan.value.monthlyPrice * 0.18)
      : selectedPlan.value.yearlyPrice +
        Math.round(selectedPlan.value.yearlyPrice * 0.18);

  return {
    subtotal,
    gstAmount,
    discount: couponDiscount + yearlyDiscount,
    total,
    firstPayment,
    subsequentPayments,
    yearlyDiscount,
  };
});

// Methods
async function loadRazorpay() {
  return new Promise((resolve) => {
    if (window.Razorpay) {
      razorpayLoaded.value = true;
      return resolve();
    }

    const script = document.createElement("script");
    script.src = "https://checkout.razorpay.com/v1/checkout.js";
    script.onload = () => {
      razorpayLoaded.value = true;
      resolve();
    };
    script.onerror = () => {
      console.error("Failed to load Razorpay");
      resolve();
    };
    document.body.appendChild(script);
  });
}

const applyCoupon = () => {
  couponError.value = "";

  if (appliedCoupon.value) {
    removeCoupon();
    return;
  }

  const inputCode = couponCode.value.trim().toUpperCase();
  if (!inputCode) {
    couponError.value = "Enter a coupon code";
    return;
  }

  const match = couponDatabase.find((c) => c.code === inputCode);
  if (!match) {
    couponError.value = "Invalid coupon code";
    return;
  }

  appliedCoupon.value = {
    code: match.code,
    discount:
      match.type === "percentage" ? `${match.discount}%` : `₹${match.discount}`,
    value: match.discount,
    type: match.type,
  };
  couponCode.value = "";
};

const removeCoupon = () => {
  appliedCoupon.value = null;
  couponCode.value = "";
};

const toggleCouponInput = () => {
  showCouponInput.value = !showCouponInput.value;
  couponError.value = "";
};

const proceedToPayment = async () => {
  if (!razorpayLoaded.value) {
    alert("Payment gateway is still loading. Please try again in a moment.");
    return;
  }

  // Validate customer details
  if (!customerName.value || !customerEmail.value || !customerPhone.value) {
    alert("Please fill in all customer details");
    return;
  }

  loading.value = true;
  try {
    // Step 1: Create Subscription
    const response = await axios.post(`${API_URL}/create-subscription`, {
      planName: selectedPlan.value.planName,
      selectedPeriod: selectedPeriod.value,
      customer_name: customerName.value,
      customer_email: customerEmail.value,
      customer_phone: customerPhone.value,
    });

    const { razorpay_subscription_id, customer_id, plan_id, plan_name } =
      response.data.data;
    // Step 2: Initiate Razorpay Payment
    const options = {
      key: config.public.RAZORPAY_KEY_ID,
      subscription_id: razorpay_subscription_id,
      name: plan_name,
      description: `${
        selectedPeriod.value === 1 ? "Monthly" : "Yearly"
      } Subscription`,
      amount: priceDetails.value.firstPayment * 100,
      currency: "INR",
      prefill: {
        name: customerName.value,
        email: customerEmail.value,
        contact: customerPhone.value,
      },
      theme: {
        color: "#fab415",
      },
      notes: {
        plan: plan_name,
        period: selectedPeriod.value,
        coupon: appliedCoupon.value?.code || null,
      },
      razorpay_subscription_id: razorpay_subscription_id,

      handler: async function (paymentResponse) {
        try {
          // Step 3: Verify Payment
          const verification = await axios.post(
            `${API_URL}/verify-subscription-payment`,
            {
              razorpay_payment_id: paymentResponse.razorpay_payment_id,
              razorpay_subscription_id: razorpay_subscription_id,
              razorpay_signature: paymentResponse.razorpay_signature,
              plan_id: plan_id,
              customer_id: customer_id,
              customer_name: customerName.value,
              customer_email: customerEmail.value,
              customer_phone: customerPhone.value,
              plan_name: plan_name,
              selected_period: selectedPeriod.value,
            }
          );

          licenseKey.value = verification.data.license_key;
          showLicenseModal.value = true;
        } catch (error) {
          console.error("Verification error:", error);
          alert("Payment verification failed.", error);
        }
      },
    };
    // Open Razorpay Checkout
    const rzp = new window.Razorpay(options);
    rzp.open();
  } catch (error) {
    console.error("Payment error:", error);
    alert(
      "Payment failed: " + (error.response?.data?.message || error.message)
    );
  } finally {
    loading.value = false;
  }
};

const closeLicenseModal = () => {
  showLicenseModal.value = false;
  router.push("/pricing");
};
</script>

<style scoped>
.cart-page {
  max-width: 1100px;
  margin: auto;
  padding: 2rem 1rem;
  font-family: "Segoe UI", sans-serif;
}

.cart-container {
  background: #fff;
  padding: 2rem;
  border-radius: 10px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

.cart-content {
  display: flex;
  gap: 2rem;
  flex-wrap: wrap;
}

.plan-section,
.coupon-summary {
  flex: 1;
  min-width: 320px;
}

.plan-box {
  border: 1px solid #eee;
  border-radius: 8px;
  padding: 1.5rem;
  background-color: #fdfdfd;
}

.plan-box h3 {
  margin: 0 0 1rem;
  color: #222;
}

.plan-info .row {
  display: flex;
  gap: 1rem;
  align-items: center;
  margin-bottom: 1rem;
}

.plan-info select {
  padding: 6px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.price {
  font-size: 1.5rem;
  font-weight: bold;
  color: #333;
  margin: 0.5rem 0;
}

.renewal-note {
  font-size: 0.9rem;
  color: #777;
}

.features ul {
  padding-left: 1.2rem;
  margin: 0.5rem 0 0;
}

.features li {
  margin-bottom: 0.4rem;
}

.coupon-section {
  background: #f8f8f8;
  padding: 1rem;
  border-radius: 8px;
  margin-bottom: 1.5rem;
}

.coupon-toggle {
  display: flex;
  justify-content: space-between;
  cursor: pointer;
  font-weight: 500;
}

.coupon-input-area {
  display: flex;
  margin-top: 0.5rem;
  gap: 0.5rem;
}

.coupon-input-area input {
  flex: 1;
  padding: 8px;
  border-radius: 4px;
  border: 1px solid #ccc;
}

.coupon-input-area button {
  background: #fab415;
  color: #fff;
  border: none;
  padding: 0 1rem;
  border-radius: 4px;
  cursor: pointer;
}

.coupon-applied {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: #e8f5e9;
  padding: 0.5rem;
  border-radius: 4px;
  margin-top: 0.5rem;
  color: #2e7d32;
}

.coupon-applied button {
  background: transparent;
  border: none;
  color: #c62828;
  font-size: 1.2rem;
  cursor: pointer;
}

.error {
  color: #d32f2f;
  margin-top: 0.5rem;
}

.summary {
  border-top: 1px solid #ddd;
  padding-top: 1rem;
}

.summary-line {
  display: flex;
  justify-content: space-between;
  margin-bottom: 0.4rem;
}

.summary-line.total {
  font-weight: bold;
  font-size: 1.1rem;
}

.summary-line.discount {
  color: #2e7d32;
}

.note {
  font-size: 0.85rem;
  color: #666;
  text-align: right;
}

.actions {
  text-align: center;
  margin-top: 2rem;
}

.actions button {
  padding: 0.75rem 2rem;
  background-color: #fab415;
  border: none;
  color: white;
  border-radius: 5px;
  font-size: 1rem;
  cursor: pointer;
}

.actions button:hover {
  background-color: #e0a800;
}

.actions button:disabled {
  opacity: 0.7;
  cursor: not-allowed;
}

.guarantee {
  text-align: center;
  color: #4caf50;
  margin-top: 1rem;
  font-size: 0.95rem;
}

.back-button {
  margin-bottom: 1rem;
  display: inline-block;
  color: #fab415;
  text-decoration: none;
  font-weight: 500;
}

.back-button:hover {
  text-decoration: underline;
}

.empty {
  text-align: center;
  padding: 3rem 1rem;
}

.empty .btn {
  background-color: #fab415;
  color: white;
  padding: 0.7rem 1.5rem;
  text-decoration: none;
  border-radius: 4px;
  display: inline-block;
  margin-top: 1rem;
}

.coupon-note {
  font-size: 0.8rem;
  color: #666;
  margin-top: 0.5rem;
  font-style: italic;
}

/* Modal styles */
.modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 1000;
}

.modal-content {
  background: white;
  padding: 2rem;
  border-radius: 8px;
  max-width: 500px;
  width: 90%;
  text-align: center;
}

.license-key-container {
  margin: 1.5rem 0;
  padding: 1rem;
  background: #f8f8f8;
  border-radius: 4px;
}

.license-key {
  font-size: 1.5rem;
  font-weight: bold;
  letter-spacing: 1px;
  color: #2e7d32;
  margin: 0.5rem 0;
}

.close-btn {
  background: #fab415;
  color: white;
  border: none;
  padding: 0.75rem 1.5rem;
  border-radius: 4px;
  cursor: pointer;
  margin-top: 1rem;
}

/* Customer form styles */
.customer-form {
  margin-top: 1.5rem;
  padding: 1rem;
  background: #f8f8f8;
  border-radius: 8px;
}

.customer-form h4 {
  margin-top: 0;
  margin-bottom: 1rem;
}

.customer-form input {
  width: 100%;
  padding: 0.5rem;
  margin: 0.5rem 0;
  border: 1px solid #ddd;
  border-radius: 4px;
}
</style>
