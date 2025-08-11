<?php
$cssFiles = [
    './assets/css/base.css',
    './assets/css/shared-utilities.css',
    './assets/css/js-controller.css',
    './assets/css/hero.css',
    './assets/css/problem-solution.css',
    './assets/css/services.css',
    './assets/css/markets-industries.css',
    './assets/css/testimonials.css',
    './assets/css/why-work-with-us.css',
    './assets/css/save-the-globe.css',
    './assets/css/contact-us.css',
    './assets/css/footer.css',
];
$cssFiles[] = './assets/css/contact.css';
include_once('./includes/header.php');
include_once('./includes/nav.php');
?>

<!-- Page Title Section (Same as About Us Banner) -->
<section class="gx-section-common">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Column: Chevron with Masked Image -->
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="gx-illustration-container-common">
                    <div class="gx-wwd-visual gx-reveal-slide-left gx-contact-visual" style="opacity: 1;">
                        <!-- Background Chevron -->
                        <img src="./assets/about-us/chevron.png" alt="Decorative Chevron" class="gx-wwd-chevron-masked gx-contact-chevron-masked" />
                        <!-- Foreground Image -->
                        <img src="./assets/about-us/chevron-masked.png" alt="Office Environment" class="gx-wwd-chevron-outline gx-contact-chevron-outline" />
                    </div>
                </div>
            </div>

            <!-- Right Column: Page Heading -->
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="gx-content-area-common">
                    <h1 class="gx-content-title-common gx-content-title-common--large">
                        How can we help you?
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>

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
                <button type="submit" class="gx-contact-submit px-4 py-2">Send</button>
            </form>
        </div>
        <!-- Right: Image & Chevron -->
        <div class="gx-contact-image-col gx-reveal-slide-right">
            <div class="gx-contact-chevron-bg">
                <img src="./assets/contact-us-arrow.png" alt="Decorative Chevron" class="gx-contact-chevron" />
            </div>
            <img src="./assets/contact-us.jpg" alt="Contact Us" class="gx-contact-image" />
        </div>
    </div>
</section>


<?php
$jsFiles = [
    './assets/js/js-controller.js',
    './assets/js/nav-active.js',
    './assets/js/hero-owl-carousel.js',
    './assets/js/services.js',
    './assets/js/testimonials.js',
    './assets/js/scroll-reveal.js',
    './assets/js/infinite-scroll.js',
];
$jsFiles[] = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js';

include_once('./includes/footer.php');
?>