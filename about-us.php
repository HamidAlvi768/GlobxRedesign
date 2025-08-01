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
  './assets/css/save-the-globe.css',
  './assets/css/contact-us.css',
  './assets/css/footer.css',
];
$cssFiles[] = './assets/css/about-us.css';
include_once('./includes/header.php');
include_once('./includes/transparent_nav.php');
?>

<!-- Hero Section -->
<section class="gx-hero position-relative d-flex align-items-center justify-content-center">
  <!-- Background Image & Overlay -->
  <div class="gx-hero-bg"></div>
  <div class="gx-hero-overlay"></div>
  <div class="container gx-hero-content position-relative z-2 d-flex flex-column align-items-center justify-content-center" style="min-height: 70vh;">
    <h1 class="gx-hero-title fw-medium mb-3 text-center">Strengthening Supply Chains,<br>Securing Futures.</h1>
    <p class="gx-hero-subtext mb-4 text-center">We enhance the reliability, efficiency, and resilience of your supply chain today.<br>This ensures long-term stability, growth, and success for your business in the future.</p>
    <a href="#" class="btn gx-btn-primary gx-btn-ghost px-4 py-2 mt-2">Inquire Now</a>
  </div>
  <!-- Decorative Chevron (bottom left) -->
  <div class="gx-arrows position-absolute" style="left: 2.5vw; bottom: 2.5vw;">
    <img src="./assets/hero-arrow.png" alt="Decorative Arrows" width="180" height="150" />
  </div>
</section>

<!-- Values Section: Mission, Vision, Goal -->
<section class="gx-values-section py-6 gx-reveal-section">
  <div class="container gx-values-row gx-reveal-content">
    <!-- Mission -->
    <div class="gx-value-col d-flex flex-column align-items-center text-center gx-reveal-grid-item">
      <img src="./assets/about-us/value-2.png" alt="Mission Icon" class="gx-value-icon mb-4" width="140" height="140" loading="lazy" />
      <h3 class="gx-value-title">Our Mission</h3>
      <p class="gx-value-desc">Ensure production for our customers<br>at all times.</p>
    </div>
    <!-- Vision -->
    <div class="gx-value-col d-flex flex-column align-items-center text-center gx-reveal-grid-item">
      <img src="./assets/about-us/value-1.png" alt="Vision Icon" class="gx-value-icon mb-4" width="140" height="140" loading="lazy" />
      <h3 class="gx-value-title">Our Vision</h3>
      <p class="gx-value-desc">We build and secure a long-term<br>resilient supply chain.</p>
    </div>
    <!-- Goal -->
    <div class="gx-value-col d-flex flex-column align-items-center text-center gx-reveal-grid-item">
      <img src="./assets/about-us/value-3.png" alt="Goal Icon" class="gx-value-icon mb-4" width="140" height="140" loading="lazy" />
      <h3 class="gx-value-title">Our Goal</h3>
      <p class="gx-value-desc">A resilient economy that runs safely<br>regardless of crises.</p>
    </div>
  </div>
</section>

<!-- What We Do Section -->
<section class="gx-what-we-do-section gx-reveal-section">
  <div class="container gx-wwd-row">
    <!-- Left: Chevron Visual -->
    <div class="gx-wwd-visual gx-reveal-slide-left">
      <img src="./assets/about-us/chevron.png" alt="Chevron Outline" class="gx-wwd-chevron-outline" loading="lazy" />
      <img src="./assets/about-us/chevron-masked.png" alt="Chevron Masked Photo" class="gx-wwd-chevron-masked" loading="lazy" />
    </div>
    <!-- Right: Text Content -->
    <div class="gx-wwd-content gx-reveal-slide-right">
      <h2 class="gx-wwd-title">What we do</h2>
      <p class="gx-wwd-body">GlobX is your trusted global sourcing partner, delivering innovative supply chain and procurement solutions for the electronics industry.</p>
      <p class="gx-wwd-body">We seamlessly integrate component sourcing, franchise distribution, and aftermarket services with deep open-market expertise. With GlobX, you gain the advantage of our extensive international network of reliable suppliers and strategic partners — ensuring quality, flexibility, and competitive pricing at every stage of your supply chain.</p>
      <a href="#" class="btn gx-btn-primary gx-wwd-btn mt-3">Inquire Now</a>
    </div>
  </div>
</section>

<!-- Certifications Section -->
<section class="gx-certifications-section gx-section-common gx-section-common--white gx-reveal-section">
  <div class="container">
    <!-- Section Header -->
    <div class="gx-section-header-common mb-4 gx-reveal-content">
      <div class="gx-section-label-common gx-section-label-common--medium">Certifications</div>
      <h2 class="gx-section-headline-common gx-section-headline-common--medium">Certifications and Membership</h2>
    </div>
    <!-- Scrollable Card Row -->
    <div class="gx-certifications-scroll owl-carousel gx-reveal-content gx-reveal-delay-1">
      <a href="#" class="gx-cert-card" aria-label="View Certificate">
        <div class="gx-cert-card-logo">
          <img src="./assets/about-us/certification.jpg" alt="Certification Logo" loading="lazy" />
        </div>
        <div class="gx-cert-card-btn">View Certificate</div>
      </a>
      <a href="#" class="gx-cert-card" aria-label="View Certificate">
        <div class="gx-cert-card-logo">
          <img src="./assets/about-us/certification.jpg" alt="Certification Logo" loading="lazy" />
        </div>
        <div class="gx-cert-card-btn">View Certificate</div>
      </a>
      <a href="#" class="gx-cert-card" aria-label="View Certificate">
        <div class="gx-cert-card-logo">
          <img src="./assets/about-us/certification.jpg" alt="Certification Logo" loading="lazy" />
        </div>
        <div class="gx-cert-card-btn">View Certificate</div>
      </a>
      <a href="#" class="gx-cert-card" aria-label="View Certificate">
        <div class="gx-cert-card-logo">
          <img src="./assets/about-us/certification.jpg" alt="Certification Logo" loading="lazy" />
        </div>
        <div class="gx-cert-card-btn">View Certificate</div>
      </a>
      <a href="#" class="gx-cert-card" aria-label="View Certificate">
        <div class="gx-cert-card-logo">
          <img src="./assets/about-us/certification.jpg" alt="Certification Logo" loading="lazy" />
        </div>
        <div class="gx-cert-card-btn">View Certificate</div>
      </a>
      <a href="#" class="gx-cert-card" aria-label="View Certificate">
        <div class="gx-cert-card-logo">
          <img src="./assets/about-us/certification.jpg" alt="Certification Logo" loading="lazy" />
        </div>
        <div class="gx-cert-card-btn">View Certificate</div>
      </a>
      <a href="#" class="gx-cert-card" aria-label="View Certificate">
        <div class="gx-cert-card-logo">
          <img src="./assets/about-us/certification.jpg" alt="Certification Logo" loading="lazy" />
        </div>
        <div class="gx-cert-card-btn">View Certificate</div>
      </a>
      <a href="#" class="gx-cert-card" aria-label="View Certificate">
        <div class="gx-cert-card-logo">
          <img src="./assets/about-us/certification.jpg" alt="Certification Logo" loading="lazy" />
        </div>
        <div class="gx-cert-card-btn">View Certificate</div>
      </a>
    </div>
  </div>
</section>

<!-- Track Record Section -->
<section class="gx-track-record-section gx-section-common gx-section-common--white gx-reveal-section">
  <div class="container">
    <!-- Header Section -->
    <div class="row gx-track-record-header gx-reveal-content">
      <div class="col-lg-6">
        <div class="gx-section-label-common gx-section-label-common--medium">Track Record</div>
        <h2 class="gx-section-headline-common gx-section-headline-common--medium">Our Domain Experience and Track Record</h2>
      </div>
    </div>
    <div class="row gx-reveal-content gx-reveal-delay-1">
      <div class="col-lg-6">
        <p class="gx-track-record-description">
          GlobX connects businesses to the right suppliers across cultures and languages—driven by passion and backed by years of industry expertise, ensuring every partnership is built on trust and performance.
        </p>
      </div>
    </div>

    <!-- Statistics Grid -->
    <div class="gx-track-record-grid">
      <!-- Satisfaction Stat -->
      <div class="gx-track-record-stat gx-reveal-grid-item">
        <div class="gx-track-record-stat-number" data-count="98">98%</div>
        <div class="gx-track-record-stat-label">satisfaction</div>
      </div>

      <!-- Customers Stat -->
      <div class="gx-track-record-stat gx-reveal-grid-item">
        <div class="gx-track-record-stat-number" data-count="500">500+</div>
        <div class="gx-track-record-stat-label">customers</div>
      </div>

      <!-- Years Stat -->
      <div class="gx-track-record-stat gx-reveal-grid-item">
        <div class="gx-track-record-stat-number" data-count="12">12+</div>
        <div class="gx-track-record-stat-label">years in industry</div>
      </div>
    </div>
  </div>
</section>

<!-- Team Section (matches reference image) -->
<section class="gx-team-section gx-section-common gx-section-common--gradient">
  <div class="container gx-team-container">
    <!-- Top Tagline -->
    <div class="gx-team-tagline">A team of experts, dedicated to delivering excellence.</div>
    <!-- Central Content Area -->
    <div class="gx-team-content-row">
      <!-- Team Content Container -->
      <div class="gx-team-content-container">
        <!-- Team Pane 1 (Active) -->
        <div class="gx-team-pane gx-team-pane-active" id="team-1">
          <!-- Left: 3x2 Image Grid -->
          <div class="gx-team-image-grid">
            <img src="./assets/about-us/member-1.jpg" alt="Team Member 1" class="gx-team-member-img" />
            <img src="./assets/about-us/member-2.jpg" alt="Team Member 2" class="gx-team-member-img" />
            <img src="./assets/about-us/member-3.jpg" alt="Team Member 3" class="gx-team-member-img" />
            <img src="./assets/about-us/member-3.jpg" alt="Team Member 6" class="gx-team-member-img" />
            <img src="./assets/about-us/member-1.jpg" alt="Team Member 4" class="gx-team-member-img" />
            <img src="./assets/about-us/member-2.jpg" alt="Team Member 5" class="gx-team-member-img" />
          </div>
          <!-- Right: Text Block -->
          <div class="gx-team-text-block">
            <h2 class="gx-team-heading">Our Team</h2>
            <p class="gx-team-description">
              At the heart of GlobX is our diverse and dedicated team. We are proud to bring together specialists from purchasing, sales, IT, and other vital areas. Each team member plays a key role in building and sustaining a resilient, future-ready supply chain. Our experts contribute their unique skills and share a common goal: to continuously enhance our processes and services, helping our customers navigate the challenges of a fast-moving industry.
            </p>
          </div>
        </div>

        <!-- Team Pane 2 (Inactive) -->
        <div class="gx-team-pane" id="team-2">
          <!-- Left: 3x2 Image Grid (Different arrangement) -->
          <div class="gx-team-image-grid">
            <img src="./assets/about-us/member-2.jpg" alt="Team Member 2" class="gx-team-member-img" />
            <img src="./assets/about-us/member-3.jpg" alt="Team Member 3" class="gx-team-member-img" />
            <img src="./assets/about-us/member-1.jpg" alt="Team Member 1" class="gx-team-member-img" />
            <img src="./assets/about-us/member-1.jpg" alt="Team Member 4" class="gx-team-member-img" />
            <img src="./assets/about-us/member-2.jpg" alt="Team Member 5" class="gx-team-member-img" />
            <img src="./assets/about-us/member-3.jpg" alt="Team Member 6" class="gx-team-member-img" />
          </div>
          <!-- Right: Text Block -->
          <div class="gx-team-text-block">
            <h2 class="gx-team-heading">Our Leadership</h2>
            <p class="gx-team-description">
              Our leadership team brings decades of combined experience in supply chain management and global sourcing. With backgrounds spanning multiple industries and continents, we understand the unique challenges that businesses face in today's interconnected world. Our collaborative approach ensures that every decision is made with our clients' success in mind, driving innovation and delivering exceptional results.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Pagination Control -->
    <div class="gx-team-pagination">
      <span class="gx-team-pagination-pill" data-team="1"></span>
      <span class="gx-team-pagination-dot" data-team="2"></span>
    </div>
  </div>
</section>
<!-- Footer -->
<?php
$jsFiles = [
    './assets/js/hero-owl-carousel.js',
    './assets/js/services.js',
    './assets/js/testimonials.js',
    './assets/js/scroll-reveal.js',
    './assets/js/infinite-scroll.js',
    './assets/js/about-us.js',
];
$jsFiles[] = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js';

include_once('./includes/footer.php');
?>
</body>

</html>