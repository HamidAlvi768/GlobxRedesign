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
                        <img src="./assets/img/about-us/chevron.png" alt="Decorative Chevron" class="gx-wwd-chevron-masked gx-contact-chevron-masked" />
                        <!-- Foreground Image -->
                        <img src="./assets/img/about-us/chevron-masked.png" alt="Office Environment" class="gx-wwd-chevron-outline gx-contact-chevron-outline" />
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
<?php include_once('./includes/_contact-form.php'); ?>

<?php
$jsFiles = [
    './assets/js/js-controller.js',
    './assets/js/nav-active.js',
    './assets/js/hero-owl-carousel.js',
    './assets/js/services.js',
    './assets/js/testimonials.js',
    './assets/js/scroll-reveal.js',
    './assets/js/infinite-scroll.js',
    './assets/js/contact-offer-form.js',
];
$jsFiles[] = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js';

include_once('./includes/footer.php');
?>