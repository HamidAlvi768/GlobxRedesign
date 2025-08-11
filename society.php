<?php
$cssFiles = [
  './assets/css/base.css',
  './assets/css/shared-utilities.css',
  './assets/css/hero.css',
  './assets/css/problem-solution.css',
  './assets/css/services.css',
  './assets/css/markets-industries.css',
  './assets/css/testimonials.css',
  './assets/css/why-work-with-us.css',
  './assets/css/contact-us.css',
  './assets/css/footer.css',
];
$cssFiles[] = './assets/css/social-corporate-society.css';
include_once('./includes/header.php');
include_once('./includes/nav.php');
?>

<!-- Save the Globe Hero Section -->
<section class="gx-save-globe-hero position-relative d-flex align-items-center">
  <!-- Background Video & Overlay -->
  <div class="gx-save-globe-bg">
    <video autoplay muted loop playsinline>
      <source src="./assets/society/earth-loop.mov" type="video/quicktime">
      <source src="./assets/society/earth-loop.mov" type="video/mp4">
      <!-- Fallback for browsers that don't support video -->
    </video>
  </div>
  <div class="gx-save-globe-overlay"></div>

  <!-- Central Hero Content -->
  <div class="container gx-save-globe-content position-relative z-2">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10 text-center">
        <!-- Main Heading -->
        <h1 class="gx-save-globe-title mb-4">Save the Globe</h1>

        <!-- Descriptive Text -->
        <p class="gx-save-globe-subtext mb-5">
          GlobX is an excess stock platform for the electronics and semiconductor industry with a huge focus on sustainability. We bring dead stock back to life with the help of AI. Every item sold on our platform is also a relief for the ecosystem, as most parts would otherwise just be scrapped.
        </p>

        <!-- Call-to-Action Buttons -->
        <div class="gx-save-globe-cta d-flex justify-content-center gap-3 flex-wrap">
          <a href="#" class="btn gx-btn-ghost px-4 py-2 rounded">Learn More</a>
          <a href="#" class="btn gx-save-globe-btn px-4 py-2 rounded">Become a partner</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bottom Overlay Cards -->
  <div class="gx-save-globe-cards position-absolute">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
          <div class="gx-save-globe-cards-container d-flex justify-content-center gap-4">
            <!-- Left Card: Stat Card -->
            <div class="gx-save-globe-stat-card">
              <div class="gx-save-globe-stat-number">2979</div>
              <div class="gx-save-globe-stat-label">Trees planted</div>
            </div>

            <!-- Right Card: Feature Card -->
            <div class="gx-save-globe-feature-card">
              <div class="gx-save-globe-feature-title">Nature <br> Explorers Program</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Decorative Chevron -->
  <div class="gx-save-globe-arrows gx-arrows position-absolute">
    <img src="./assets/hero-arrow.png" alt="Decorative Arrows" width="180" height="150" />
  </div>
</section>

<!-- Plants for the Planet Section -->
<section class="gx-plants-section gx-section-common gx-section-common--white py-10 gx-reveal-section">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left Column: Image -->
      <div class="col-lg-6 order-1 order-md-1">
        <div class="gx-plants-image-wrapper gx-reveal-slide-left">
          <div class="gx-plants-image-container">
            <img src="./assets/society/plant.jpg" alt="Hands holding a plant - Plant for the Planet" class="gx-plants-image" />
          </div>
        </div>
      </div>

      <!-- Right Column: Content -->
      <div class="col-lg-6 order-2 order-md-2">
        <div class="gx-plants-content gx-reveal-slide-right">
          <!-- Pre-heading -->
          <h2 class="gx-plants-label gx-section-label-common gx-section-label-common--medium mb-2">Save the Globe</h2>

          <!-- Main Heading with Stat Box -->
          <div class="gx-plants-header-wrapper d-flex align-items-start justify-content-between mb-4">
            <h1 class="gx-plants-title gx-section-headline-common gx-section-headline-common--large mb-0">
              Plants for the<br>planet
            </h1>

            <!-- Stat Box -->
            <div class="gx-plants-stat-box">
              <div class="gx-plants-stat-number">964</div>
              <div class="gx-plants-stat-label">Trees planted in 2025</div>
            </div>
          </div>

          <!-- Body Text -->
          <div class="gx-plants-body gx-section-description-common gx-section-description-common--with-margin">
            <p>
              Plant for the Planet is a global movement dedicated to combating climate change through reforestation and education. With your support, we've already planted countless trees worldwide and trained several climate ambassadors. These trees not only contribute to ecosystem restoration but also actively absorb carbon dioxide, helping to reduce greenhouse gas emissions. Our climate ambassadors serve as vital agents of change in their communities, spreading awareness and inspiring action on climate change.
            </p>
          </div>

          <!-- Call-to-Action Button -->
          <a href="#" class="btn gx-save-globe-btn px-4 py-2 rounded">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Nature Explorers Program Section -->
<section class="gx-nature-explorers-section gx-section-common gx-section-common--white py-10 gx-reveal-section">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left Column: Image -->
      <div class="col-lg-6 order-1 order-md-1">
        <div class="gx-nature-explorers-image-wrapper gx-plants-image-wrapper gx-reveal-slide-left">
          <div class="gx-nature-explorers-image-container gx-plants-image-container">
            <img src="./assets/society/nature-explorers.jpg" alt="Adult and child exploring nature - Nature Explorers Program" class="gx-nature-explorers-image gx-plants-image" />
          </div>
        </div>
      </div>

      <!-- Right Column: Content -->
      <div class="col-lg-6 order-2 order-md-2">
        <div class="gx-nature-explorers-content gx-plants-content gx-reveal-slide-right">
          <!-- Pre-heading -->
          <h2 class="gx-nature-explorers-label gx-plants-label gx-section-label-common gx-section-label-common--medium mb-2">Serve the Globe</h2>

          <!-- Main Heading -->
          <h1 class="gx-nature-explorers-title gx-plants-title gx-section-headline-common gx-section-headline-common--large mb-4">
            Nature Explorers<br>Program
          </h1>

          <!-- Body Text -->
          <div class="gx-nature-explorers-body gx-plants-body gx-section-description-common gx-section-description-common--with-margin mb-5">
            <p>
              In our annual "Vielfalter Schule" program, trained naturalists take children into nature ten times a year, offering a hands-on education aligned with the school curriculum. From exploring water insects to observing birds, the program sparks curiosity and connects kids with the region's key ecosystems—water, forest, meadow, and mountains. With your support, Nature Explorers Program helps young minds build a lasting bond with nature.
            </p>
          </div>

          <!-- Call-to-Action Button -->
          <a href="#" class="btn gx-save-globe-btn px-4 py-2 rounded">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
$jsFiles = [
  './assets/js/hero-owl-carousel.js',
  './assets/js/services.js',
  './assets/js/testimonials.js',
  './assets/js/scroll-reveal.js',
  './assets/js/infinite-scroll.js',
];
$jsFiles[] = './assets/js/markets-industries.js';

include_once('./includes/footer.php');
?>