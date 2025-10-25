<template>
  <footer id="footer" class="footer">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">RX Square</span>
          </a>
          <div class="footer-contact pt-3">
            <p>2nd Floor, 37, Pycrofts Rd</p>
            <p>
              Narayana Krishnaraja Puram, Triplicane, <br />Chennai, Tamil Nadu
              600005
            </p>
            <p class="mt-3">
              <strong>Phone:</strong> <span>+91 63853 33384</span>
            </p>
            <p><strong>Email:</strong> <span>info@rxsquare.in</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a
              href="https://x.com/rx_square?t=qqbGyEMKvGyZiiZTNoceqw&s=09"
              target="_blank"
              ><i class="bi bi-twitter"></i
            ></a>
            <a href="https://www.facebook.com/share/1DmQoqQQua/" target="_blank"
              ><i class="bi bi-facebook"></i
            ></a>
            <a
              href="https://www.instagram.com/rx.square?igsh=MW1kYTlpaGl0Z3prbA=="
              target="_blank"
              ><i class="bi bi-instagram"></i
            ></a>
            <a
              href="https://www.linkedin.com/company/rx-square/"
              target="_blank"
              ><i class="bi bi-linkedin"></i
            ></a>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><NuxtLink to="/about">About</NuxtLink></li>
            <li><NuxtLink to="/features">Features</NuxtLink></li>
            <li><NuxtLink to="/services">Services</NuxtLink></li>
            <li><NuxtLink to="/pricing">Pricing</NuxtLink></li>
            <li>
              <NuxtLink to="/blog">Blog</NuxtLink>
            </li>
            <li>
              <NuxtLink to="/terms-of-service">Terms of Service</NuxtLink>
            </li>
            <li><NuxtLink to="/privacy-policy">Privacy Policy</NuxtLink></li>
            <li>
              <NuxtLink to="/cancellation-and-refund"
                >Cancellation and Refund</NuxtLink
              >
            </li>
            <li>
              <NuxtLink to="/terms-and-conditions"
                >Terms And Conditions</NuxtLink
              >
            </li>
            <li>
              <NuxtLink to="/shipping-and-delivery"
                >Shipping And Delivery</NuxtLink
              >
            </li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li>
              <NuxtLink to="/software-development"
                >Software Development</NuxtLink
              >
            </li>
            <li>
              <NuxtLink to="/business-solutions">Business Solutions</NuxtLink>
            </li>
            <li><NuxtLink to="/automation">Automation</NuxtLink></li>
            <li><NuxtLink to="/consulting">Consulting</NuxtLink></li>
            <li><NuxtLink to="/it-support">IT Support</NuxtLink></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Industries We Serve</h4>
          <ul>
            <li><NuxtLink to="/insurance">Insurance</NuxtLink></li>
            <li><NuxtLink to="/retail">Retail</NuxtLink></li>
            <li><NuxtLink to="/finance">Finance</NuxtLink></li>
            <li><NuxtLink to="/healthcare">Healthcare</NuxtLink></li>
            <li><NuxtLink to="/manufacturing">Manufacturing</NuxtLink></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Support</h4>
          <ul>
            <li><NuxtLink to="/faq">FAQs</NuxtLink></li>
            <li><NuxtLink to="/help-center">Help Center</NuxtLink></li>
            <li><NuxtLink to="/contact">Customer Support</NuxtLink></li>
            <li><NuxtLink to="/contact">Contact Us</NuxtLink></li>
            <li><NuxtLink to="/careers">Careers</NuxtLink></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container copyright text-center mt-4">
      <p>
        &copy; <span>Copyright</span>
        <strong class="px-1 sitename">Vaibhav Enterprises</strong>
        <span>All Rights Reserved</span>
      </p>
      <div class="credits">Designed by <a href="#">RX Square</a></div>
    </div>
  </footer>
</template>

<script setup></script>

<style scoped>
.footer {
  color: var(--default-color);
  background-color: var(--background-color);
  font-size: 14px;
  position: relative;
}

.footer .footer-top {
  padding-top: 50px;
}

.footer .footer-about .logo {
  line-height: 1;
  margin-bottom: 25px;
}

.footer .footer-about .logo img {
  max-height: 40px;
  margin-right: 6px;
}

.footer .footer-about .logo span {
  color: var(--heading-color);
  font-family: var(--heading-font);
  font-size: 26px;
  font-weight: 700;
  letter-spacing: 1px;
}

.footer .footer-about p {
  font-size: 14px;
  font-family: var(--heading-font);
}

.footer .social-links a {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  border: 1px solid color-mix(in srgb, var(--default-color), transparent 50%);
  font-size: 16px;
  color: color-mix(in srgb, var(--default-color), transparent 20%);
  margin-right: 10px;
  transition: 0.3s;
}

.footer .social-links a:hover {
  color: var(--accent-color);
  border-color: var(--accent-color);
}

.footer h4 {
  font-size: 16px;
  font-weight: bold;
  position: relative;
  padding-bottom: 12px;
}

.footer .footer-links {
  margin-bottom: 30px;
}

.footer .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer .footer-links ul i {
  padding-right: 2px;
  font-size: 12px;
  line-height: 0;
}

.footer .footer-links ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}

.footer .footer-links ul li:first-child {
  padding-top: 0;
}

.footer .footer-links ul a {
  color: color-mix(in srgb, var(--default-color), transparent 30%);
  display: inline-block;
  line-height: 1;
}

.footer .footer-links ul a:hover {
  color: var(--accent-color);
}

.footer .footer-contact p {
  margin-bottom: 5px;
}

.footer .copyright {
  padding: 25px 0;
  border-top: 1px solid
    color-mix(in srgb, var (--default-color), transparent 90%);
}

.footer .copyright p {
  margin-bottom: 0;
}

.footer .credits {
  margin-top: 8px;
  font-size: 13px;
}
</style>
