<!-- Contact Section -->
<section class="gx-contact-section gx-reveal-section">
  <div class="gx-contact-container container">
    <!-- Left: Form -->
    <div class="gx-contact-form-col gx-reveal-slide-left">
      <form class="gx-contact-form">
        <div class="gx-form-type-selector">
          <label class="gx-radio-label">
            <input type="radio" name="formType" value="contact" checked>
            <span class="gx-custom-radio"></span>
            Contact Us
          </label>
          <label class="gx-radio-label">
            <input type="radio" name="formType" value="offer">
            <span class="gx-custom-radio"></span>
            Offer
          </label>
        </div>
        
        <!-- Contact Us Form Content -->
        <div class="gx-form-content" id="contact-form-content">
          <h1 class="gx-contact-heading gx-section-headline-common">Contact Us</h1>
          <div class="gx-contact-subheading">How can we help you?</div>
          <div class="gx-form-group">
            <label for="company">Company</label>
            <input type="text" id="company" name="company" placeholder="Company" autocomplete="organization">
          </div>
          <div class="gx-form-row">
            <div class="gx-form-group gx-form-half">
              <label for="firstName">First Name</label>
              <input type="text" id="firstName" name="firstName" placeholder="First Name" autocomplete="given-name">
            </div>
            <div class="gx-form-group gx-form-half">
              <label for="lastName">Last Name</label>
              <input type="text" id="lastName" name="lastName" placeholder="Last Name" autocomplete="family-name">
            </div>
          </div>
          <div class="gx-form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Email" autocomplete="email">
          </div>
          <div class="gx-form-group">
            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" placeholder="Phone" autocomplete="tel">
          </div>
          <div class="gx-form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Message" rows="4"></textarea>
          </div>
          <button type="submit" class="gx-contact-submit gx-btn-primary px-4 py-2">Send</button>
        </div>
        
        <!-- Offer Form Content -->
        <div class="gx-form-content" id="offer-form-content" style="display: none;">
          <h1 class="gx-contact-heading gx-section-headline-common">Request Offer</h1>
          <div class="gx-contact-subheading">Tell us about your requirements</div>
          <div class="gx-form-group">
            <label for="offer-company">Company</label>
            <input type="text" id="offer-company" name="offer-company" placeholder="Company" autocomplete="organization">
          </div>
          <div class="gx-form-row">
            <div class="gx-form-group gx-form-half">
              <label for="offer-firstName">First Name</label>
              <input type="text" id="offer-firstName" name="offer-firstName" placeholder="First Name" autocomplete="given-name">
            </div>
            <div class="gx-form-group gx-form-half">
              <label for="offer-lastName">Last Name</label>
              <input type="text" id="offer-lastName" name="offer-lastName" placeholder="Last Name" autocomplete="family-name">
            </div>
          </div>
          <div class="gx-form-group">
            <label for="offer-email">Email</label>
            <input type="email" id="offer-email" name="offer-email" placeholder="Email" autocomplete="email">
          </div>
          <div class="gx-form-group">
            <label for="offer-phone">Phone</label>
            <input type="tel" id="offer-phone" name="offer-phone" placeholder="Phone" autocomplete="tel">
          </div>
          
          <!-- Parts Section -->
          <div class="gx-form-group">
            <label class="gx-parts-section-label">Parts</label>
            <div class="gx-parts-container" id="gx-parts-container">
              <!-- Initial part row -->
              <div class="gx-part-row" data-part-id="1">
                <div class="gx-part-number-field">
                  <input type="text" name="part-number[]" placeholder="Part number" class="gx-part-input">
                </div>
                <div class="gx-part-quantity-field">
                  <input type="number" name="part-quantity[]" placeholder="Quantity" class="gx-part-input" min="1">
                </div>
                <div class="gx-part-controls">
                  <button type="button" class="gx-part-add-btn" title="Add Part">
                    <i class="fas fa-plus"></i>
                  </button>
                  <button type="button" class="gx-part-remove-btn" title="Remove Part" style="display: none;">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
          
          <div class="gx-form-group">
            <label for="offer-message">Message <span class="gx-required">*</span></label>
            <textarea id="offer-message" name="offer-message" placeholder="Message" rows="4" required></textarea>
          </div>
          <button type="submit" class="gx-contact-submit gx-btn-primary px-4 py-2">Request Offer</button>
        </div>
      </form>
    </div>
    <!-- Right: Image & Chevron -->
    <div class="gx-contact-image-col gx-reveal-slide-right">
      <div class="gx-contact-chevron-bg">
        <img src="./assets/img/contact-us-arrow.png" alt="Decorative Chevron" class="gx-contact-chevron" />
      </div>
      <img src="./assets/img/contact-us.webp" alt="Contact Us" class="gx-contact-image" />
    </div>
  </div>
</section>