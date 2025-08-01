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
include_once('./includes/header.php');
include_once('./includes/transparent_nav.php');
?>
<!-- Hero Section -->
<section class="gx-hero position-relative d-flex align-items-center">
  <!-- Background Image & Overlay -->
  <div class="gx-hero-bg"></div>
  <div class="gx-hero-overlay"></div>
  <div class="container gx-hero-content position-relative z-2">
    <div class="row align-items-center">
      <!-- Left: Text & Arrows -->
      <div class="col-lg-7 col-md-12 gx-hero-left position-relative">
        <!-- Decorative Arrows -->
        <div class="gx-arrows position-absolute">
          <img src="./assets/hero-arrow.png" alt="Decorative Arrows" width="180" height="150" />
        </div>
        <!-- Hero Slide Content Wrapper -->
        <div class="gx-hero-carousel owl-carousel owl-theme">
          <div class="gx-hero-slide">
            <h1 class="gx-hero-title fw-medium mb-3">Your Supply Chain Specialist</h1>
            <p class="gx-hero-subtext mb-4">GlobX will get you the missing components to keep your production running no matter how difficult the situation. As supply chain experts, we master even the biggest crises with ease and bring them to a smooth production flow.</p>
          </div>
          <div class="gx-hero-slide">
            <h1 class="gx-hero-title fw-medium mb-3">Global Sourcing Experts Worldwide</h1>
            <p class="gx-hero-subtext mb-4">Our worldwide network ensures you get the right parts at the right time, minimizing downtime and maximizing efficiency for your business. With a dedicated team and advanced logistics, we help you overcome any supply chain challenge.</p>
          </div>
          <div class="gx-hero-slide">
            <h1 class="gx-hero-title fw-medium mb-3">Trusted by Industry Leaders</h1>
            <p class="gx-hero-subtext mb-4">Join top manufacturers who rely on GlobX for reliable and fast supply chain solutions tailored to their needs. Our commitment to excellence ensures you always have the support you need to succeed.</p>
          </div>
        </div>
        <!-- Learn More Button -->
        <a href="#" class="btn gx-btn-primary px-4 py-2">Learn More</a>
        <!-- Hero Pagination Dots -->
        <div class="gx-hero-pagination d-flex justify-content-start align-items-center mt-4 opacity-75">
          <span class="gx-dot" data-slide="0"></span>
          <span class="gx-dot" data-slide="1"></span>
          <span class="gx-dot" data-slide="2"></span>
        </div>
      </div>
      <!-- Right: Sidebar Card -->
      <div class="col-lg-5 col-md-12 col-sm-4 gx-hero-right d-flex align-items-center justify-content-center">
        <div class="gx-sidebar-card shadow">
          <div class="gx-sidebar-title text-center mb-4">Search by Categories</div>
          <div class="gx-sidebar-carousel owl-carousel owl-theme">
            <div class="gx-sidebar-slide">
              <div class="gx-sidebar-grid mb-4">
                <div class="gx-sidebar-row">
                  <div class="gx-sidebar-cell">
                    <div class="gx-sidebar-icon">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <rect x="8" y="16" width="20" height="4" rx="2" stroke="white" stroke-width="2" />
                        <path d="M8 18H4M32 18h4" stroke="white" stroke-width="2" />
                      </svg>
                    </div>
                    <div class="gx-sidebar-label">diodes</div>
                  </div>
                  <div class="gx-sidebar-cell">
                    <div class="gx-sidebar-icon">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <rect x="10" y="10" width="16" height="16" rx="3" stroke="white" stroke-width="2" />
                        <rect x="16" y="16" width="4" height="4" rx="1" fill="white" />
                      </svg>
                    </div>
                    <div class="gx-sidebar-label">mpu/mcu</div>
                  </div>
                  <div class="gx-sidebar-cell">
                    <div class="gx-sidebar-icon">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <rect x="8" y="12" width="20" height="12" rx="3" stroke="white" stroke-width="2" />
                        <rect x="12" y="16" width="4" height="4" rx="1" fill="white" />
                        <rect x="20" y="16" width="4" height="4" rx="1" fill="white" />
                      </svg>
                    </div>
                    <div class="gx-sidebar-label">powircs</div>
                  </div>
                </div>
                <div class="gx-sidebar-row">
                  <div class="gx-sidebar-cell">
                    <div class="gx-sidebar-icon">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <rect x="8" y="16" width="20" height="4" rx="2" stroke="white" stroke-width="2" />
                        <path d="M8 18H4M32 18h4" stroke="white" stroke-width="2" />
                      </svg>
                    </div>
                    <div class="gx-sidebar-label">diodes</div>
                  </div>
                  <div class="gx-sidebar-cell">
                    <div class="gx-sidebar-icon">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <rect x="10" y="10" width="16" height="16" rx="3" stroke="white" stroke-width="2" />
                        <rect x="16" y="16" width="4" height="4" rx="1" fill="white" />
                      </svg>
                    </div>
                    <div class="gx-sidebar-label">mpu/mcu</div>
                  </div>
                  <div class="gx-sidebar-cell">
                    <div class="gx-sidebar-icon">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <rect x="8" y="12" width="20" height="12" rx="3" stroke="white" stroke-width="2" />
                        <rect x="12" y="16" width="4" height="4" rx="1" fill="white" />
                        <rect x="20" y="16" width="4" height="4" rx="1" fill="white" />
                      </svg>
                    </div>
                    <div class="gx-sidebar-label">powircs</div>
                  </div>
                </div>
                <div class="gx-sidebar-row">
                  <div class="gx-sidebar-cell">
                    <div class="gx-sidebar-icon">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <rect x="8" y="16" width="20" height="4" rx="2" stroke="white" stroke-width="2" />
                        <path d="M8 18H4M32 18h4" stroke="white" stroke-width="2" />
                      </svg>
                    </div>
                    <div class="gx-sidebar-label">diodes</div>
                  </div>
                  <div class="gx-sidebar-cell">
                    <div class="gx-sidebar-icon">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <rect x="10" y="10" width="16" height="16" rx="3" stroke="white" stroke-width="2" />
                        <rect x="16" y="16" width="4" height="4" rx="1" fill="white" />
                      </svg>
                    </div>
                    <div class="gx-sidebar-label">mpu/mcu</div>
                  </div>
                  <div class="gx-sidebar-cell">
                    <div class="gx-sidebar-icon">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <rect x="8" y="12" width="20" height="12" rx="3" stroke="white" stroke-width="2" />
                        <rect x="12" y="16" width="4" height="4" rx="1" fill="white" />
                        <rect x="20" y="16" width="4" height="4" rx="1" fill="white" />
                      </svg>
                    </div>
                    <div class="gx-sidebar-label">powircs</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="gx-sidebar-slide">
              <div class="gx-sidebar-grid mb-4">
                <div class="gx-sidebar-row">
                  <div class="gx-sidebar-cell">
                    <div class="gx-sidebar-icon">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <rect x="8" y="16" width="20" height="4" rx="2" stroke="white" stroke-width="2" />
                        <path d="M8 18H4M32 18h4" stroke="white" stroke-width="2" />
                      </svg>
                    </div>
                    <div class="gx-sidebar-label">resistors</div>
                  </div>
                  <div class="gx-sidebar-cell">
                    <div class="gx-sidebar-icon">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <rect x="10" y="10" width="16" height="16" rx="3" stroke="white" stroke-width="2" />
                        <rect x="16" y="16" width="4" height="4" rx="1" fill="white" />
                      </svg>
                    </div>
                    <div class="gx-sidebar-label">capacitors</div>
                  </div>
                  <div class="gx-sidebar-cell">
                    <div class="gx-sidebar-icon">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <rect x="8" y="12" width="20" height="12" rx="3" stroke="white" stroke-width="2" />
                        <rect x="12" y="16" width="4" height="4" rx="1" fill="white" />
                        <rect x="20" y="16" width="4" height="4" rx="1" fill="white" />
                      </svg>
                    </div>
                    <div class="gx-sidebar-label">connectors</div>
                  </div>
                </div>
                <div class="gx-sidebar-row">
                  <div class="gx-sidebar-cell">
                    <div class="gx-sidebar-icon">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <rect x="8" y="16" width="20" height="4" rx="2" stroke="white" stroke-width="2" />
                        <path d="M8 18H4M32 18h4" stroke="white" stroke-width="2" />
                      </svg>
                    </div>
                    <div class="gx-sidebar-label">resistors</div>
                  </div>
                  <div class="gx-sidebar-cell">
                    <div class="gx-sidebar-icon">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <rect x="10" y="10" width="16" height="16" rx="3" stroke="white" stroke-width="2" />
                        <rect x="16" y="16" width="4" height="4" rx="1" fill="white" />
                      </svg>
                    </div>
                    <div class="gx-sidebar-label">capacitors</div>
                  </div>
                  <div class="gx-sidebar-cell">
                    <div class="gx-sidebar-icon">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <rect x="8" y="12" width="20" height="12" rx="3" stroke="white" stroke-width="2" />
                        <rect x="12" y="16" width="4" height="4" rx="1" fill="white" />
                        <rect x="20" y="16" width="4" height="4" rx="1" fill="white" />
                      </svg>
                    </div>
                    <div class="gx-sidebar-label">connectors</div>
                  </div>
                </div>
                <div class="gx-sidebar-row">
                  <div class="gx-sidebar-cell">
                    <div class="gx-sidebar-icon">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <rect x="8" y="16" width="20" height="4" rx="2" stroke="white" stroke-width="2" />
                        <path d="M8 18H4M32 18h4" stroke="white" stroke-width="2" />
                      </svg>
                    </div>
                    <div class="gx-sidebar-label">resistors</div>
                  </div>
                  <div class="gx-sidebar-cell">
                    <div class="gx-sidebar-icon">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <rect x="10" y="10" width="16" height="16" rx="3" stroke="white" stroke-width="2" />
                        <rect x="16" y="16" width="4" height="4" rx="1" fill="white" />
                      </svg>
                    </div>
                    <div class="gx-sidebar-label">capacitors</div>
                  </div>
                  <div class="gx-sidebar-cell">
                    <div class="gx-sidebar-icon">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <rect x="8" y="12" width="20" height="12" rx="3" stroke="white" stroke-width="2" />
                        <rect x="12" y="16" width="4" height="4" rx="1" fill="white" />
                        <rect x="20" y="16" width="4" height="4" rx="1" fill="white" />
                      </svg>
                    </div>
                    <div class="gx-sidebar-label">connectors</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="gx-sidebar-slide">
              <div class="gx-sidebar-grid mb-4">
                <div class="gx-sidebar-row">
                  <div class="gx-sidebar-cell">
                    <div class="gx-sidebar-icon">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <rect x="8" y="16" width="20" height="4" rx="2" stroke="white" stroke-width="2" />
                        <path d="M8 18H4M32 18h4" stroke="white" stroke-width="2" />
                      </svg>
                    </div>
                    <div class="gx-sidebar-label">sensors</div>
                  </div>
                  <div class="gx-sidebar-cell">
                    <div class="gx-sidebar-icon">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <rect x="10" y="10" width="16" height="16" rx="3" stroke="white" stroke-width="2" />
                        <rect x="16" y="16" width="4" height="4" rx="1" fill="white" />
                      </svg>
                    </div>
                    <div class="gx-sidebar-label">switches</div>
                  </div>
                  <div class="gx-sidebar-cell">
                    <div class="gx-sidebar-icon">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <rect x="8" y="12" width="20" height="12" rx="3" stroke="white" stroke-width="2" />
                        <rect x="12" y="16" width="4" height="4" rx="1" fill="white" />
                        <rect x="20" y="16" width="4" height="4" rx="1" fill="white" />
                      </svg>
                    </div>
                    <div class="gx-sidebar-label">relays</div>
                  </div>
                </div>
                <div class="gx-sidebar-row">
                  <div class="gx-sidebar-cell">
                    <div class="gx-sidebar-icon">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <rect x="8" y="16" width="20" height="4" rx="2" stroke="white" stroke-width="2" />
                        <path d="M8 18H4M32 18h4" stroke="white" stroke-width="2" />
                      </svg>
                    </div>
                    <div class="gx-sidebar-label">sensors</div>
                  </div>
                  <div class="gx-sidebar-cell">
                    <div class="gx-sidebar-icon">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <rect x="10" y="10" width="16" height="16" rx="3" stroke="white" stroke-width="2" />
                        <rect x="16" y="16" width="4" height="4" rx="1" fill="white" />
                      </svg>
                    </div>
                    <div class="gx-sidebar-label">switches</div>
                  </div>
                  <div class="gx-sidebar-cell">
                    <div class="gx-sidebar-icon">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <rect x="8" y="12" width="20" height="12" rx="3" stroke="white" stroke-width="2" />
                        <rect x="12" y="16" width="4" height="4" rx="1" fill="white" />
                        <rect x="20" y="16" width="4" height="4" rx="1" fill="white" />
                      </svg>
                    </div>
                    <div class="gx-sidebar-label">relays</div>
                  </div>
                </div>
                <div class="gx-sidebar-row">
                  <div class="gx-sidebar-cell">
                    <div class="gx-sidebar-icon">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <rect x="8" y="16" width="20" height="4" rx="2" stroke="white" stroke-width="2" />
                        <path d="M8 18H4M32 18h4" stroke="white" stroke-width="2" />
                      </svg>
                    </div>
                    <div class="gx-sidebar-label">sensors</div>
                  </div>
                  <div class="gx-sidebar-cell">
                    <div class="gx-sidebar-icon">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <rect x="10" y="10" width="16" height="16" rx="3" stroke="white" stroke-width="2" />
                        <rect x="16" y="16" width="4" height="4" rx="1" fill="white" />
                      </svg>
                    </div>
                    <div class="gx-sidebar-label">switches</div>
                  </div>
                  <div class="gx-sidebar-cell">
                    <div class="gx-sidebar-icon">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                        <rect x="8" y="12" width="20" height="12" rx="3" stroke="white" stroke-width="2" />
                        <rect x="12" y="16" width="4" height="4" rx="1" fill="white" />
                        <rect x="20" y="16" width="4" height="4" rx="1" fill="white" />
                      </svg>
                    </div>
                    <div class="gx-sidebar-label">relays</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Sidebar Pagination Dots -->
          <div class="gx-sidebar-pagination d-flex justify-content-center align-items-center">
            <span class="gx-dot" data-slide="0"></span>
            <span class="gx-dot" data-slide="1"></span>
            <span class="gx-dot" data-slide="2"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Hero Footer: Partners Row -->
<div class="gx-hero-footer">
  <div class="gx-partners-scroll-container">
    <div class="gx-partners-scroll-track">
      <!-- First set of logos -->
      <div class="gx-partner-logo mx-4"><img src="./assets/brand-1.png" alt="Brand 1" height="52" /></div>
      <div class="gx-partner-logo mx-4"><img src="./assets/brand-2.png" alt="Brand 2" height="52" /></div>
      <div class="gx-partner-logo mx-4"><img src="./assets/brand-3.png" alt="Brand 3" height="52" /></div>
      <div class="gx-partner-logo mx-4"><img src="./assets/brand-4.png" alt="Brand 4" height="52" /></div>
      <div class="gx-partner-logo mx-4"><img src="./assets/brand-5.png" alt="Brand 5" height="52" /></div>
      <div class="gx-partner-logo mx-4"><img src="./assets/brand-6.png" alt="Brand 6" height="52" /></div>
      <!-- Duplicate set for seamless loop -->
      <div class="gx-partner-logo mx-4"><img src="./assets/brand-1.png" alt="Brand 1" height="52" /></div>
      <div class="gx-partner-logo mx-4"><img src="./assets/brand-2.png" alt="Brand 2" height="52" /></div>
      <div class="gx-partner-logo mx-4"><img src="./assets/brand-3.png" alt="Brand 3" height="52" /></div>
      <div class="gx-partner-logo mx-4"><img src="./assets/brand-4.png" alt="Brand 4" height="52" /></div>
      <div class="gx-partner-logo mx-4"><img src="./assets/brand-5.png" alt="Brand 5" height="52" /></div>
      <div class="gx-partner-logo mx-4"><img src="./assets/brand-6.png" alt="Brand 6" height="52" /></div>
    </div>
  </div>
</div>

<!-- Problem & Solution Section -->
<section class="gx-problem-solution-section gx-section-common gx-section-common--white py-10 gx-reveal-section">
  <div class="container">
    <!-- Section Header -->
    <div class="gx-section-header-common mb-4 gx-reveal-content">
      <h2 class="gx-section-label-common gx-section-label-common--medium">Solution</h2>
      <h1 class="gx-section-headline-common gx-section-headline-common--medium">You are right with us</h1>
    </div>

    <!-- Main Content Container -->
    <div class="gx-content-container-wrapper">
      <div class="gx-content-container gx-content-container-common gx-content-container-common--bordered gx-reveal-content gx-reveal-delay-1">
        <!-- Tab Navigation -->
        <div class="gx-tab-navigation">
          <button class="gx-tab-btn gx-tab-btn-active" data-tab="problem">
            Your problem
          </button>
          <button class="gx-tab-btn" data-tab="solution">
            Our Solution
          </button>
        </div>

        <!-- Tab Content -->
        <div class="gx-tab-content">
          <!-- Problem Tab (Active) -->
          <div class="gx-tab-pane gx-tab-pane-active" id="problem-tab">
            <div class="row align-items-center">
              <!-- Left: Text Content -->
              <div class="col-lg-6">
                <div class="gx-problem-content gx-content-area-common">
                  <h3 class="gx-problem-subtitle gx-content-subtitle-common gx-content-subtitle-common--medium">We feel your pain.</h3>
                  <h2 class="gx-problem-title gx-content-title-common gx-content-title-common--medium">Bottleneck? A business reality.</h2>
                  <div class="gx-problem-text">
                    <p class="gx-content-text-common gx-content-text-common--with-margin">Whether due to changing markets or force majeure supply bottlenecks are unfortunately part of everyday life in many industries. Even the best purchasing strategies are often unable to cushion the impact.</p>
                    <p class="gx-content-text-common gx-content-text-common--no-margin">When important components and goods can no longer be delivered, production can come to a standstill, even a few minutes of production downtime often costs millions. In such situations, companies need to have a partner at their side who does not take advantage of their desperate situation but procures the components they need quickly, at a fair price and with reliability.</p>
                  </div>
                </div>
              </div>
              <!-- Right: Illustration -->
              <div class="col-lg-6">
                <div class="gx-problem-illustration gx-illustration-wrapper-common gx-illustration-wrapper-common">
                  <div class="gx-illustration-container gx-illustration-container-common">
                    <img src="./assets/problem-back.png" alt="Background Shape" class="gx-illustration-background gx-illustration-background-common" />
                    <img src="./assets/problem.png" alt="Supply Chain Bottleneck Illustration" class="gx-illustration-foreground gx-illustration-foreground-common gx-illustration-foreground-common--full gx-reveal-slide-right-fg" />
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Solution Tab (Inactive) -->
          <div class="gx-tab-pane" id="solution-tab">
            <div class="row align-items-center">
              <!-- Left: Text Content -->
              <div class="col-lg-6">
                <div class="gx-solution-content gx-content-area-common">
                  <h3 class="gx-solution-subtitle gx-content-subtitle-common gx-content-subtitle-common--medium">We have the solution.</h3>
                  <h2 class="gx-solution-title gx-content-title-common gx-content-title-common--medium">Fast, reliable, and fair.</h2>
                  <div class="gx-solution-text">
                    <p class="gx-content-text-common gx-content-text-common--with-margin">Our comprehensive supply chain solutions ensure your production never stops. With our global network and expertise, we can source even the most challenging components quickly and efficiently.</p>
                    <p class="gx-content-text-common gx-content-text-common--no-margin">We understand that time is money, and we're committed to providing transparent pricing and reliable delivery times. Your success is our priority.</p>
                  </div>
                </div>
              </div>
              <!-- Right: Illustration -->
              <div class="col-lg-6">
                <div class="gx-solution-illustration">
                  <!-- Solution illustration will be added here -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- End of Problem & Solution Section -->
<!-- Transition Chevron: Double Right Arrow -->
<div class="gx-transition-chevron gx-reveal-content gx-reveal-delay-2">
  <img src="./assets/problem-arrow.png" alt="Scroll to next section" />
</div>
<!-- Services Section -->
<section class="gx-services-section gx-section-common gx-section-common--light py-10 gx-reveal-section">
  <div class="container">
    <div class="row">
      <!-- Left Column: Navigation -->
      <div class="col-lg-6">
        <div class="gx-services-navigation gx-reveal-slide-left">
          <!-- Header Section -->
          <div class="gx-services-header gx-section-header-common mb-4">
            <h2 class="gx-services-label gx-section-label-common gx-section-label-common--medium">Services</h2>
            <h1 class="gx-services-headline gx-section-headline-common gx-section-headline-common--large">Redefining the future of supply chains.</h1>
            <p class="gx-services-description gx-section-description-common gx-section-description-common--with-margin">Redefining supply chains through resilience – global networks and distributed storage keep your critical components secure.</p>
          </div>

          <!-- Vertical Menu -->
          <div class="gx-services-menu">
            <div class="gx-service-item gx-service-active" data-service="procurement">
              <img src="./assets/service-arrow.png" alt="Service Arrow" class="gx-service-icon" />
              <span class="gx-service-name">Procurement Service</span>
            </div>
            <div class="gx-service-item" data-service="fulfillment">
              <span class="gx-service-name">Fulfillment Solutions</span>
            </div>
            <div class="gx-service-item" data-service="bom">
              <span class="gx-service-name">BOM Evaluation</span>
            </div>
            <div class="gx-service-item" data-service="excess">
              <span class="gx-service-name">Excess Solutions</span>
            </div>
            <div class="gx-service-item" data-service="obsolescence">
              <span class="gx-service-name">Obsolescence Management</span>
            </div>
            <div class="gx-service-item" data-service="bottleneck">
              <span class="gx-service-name">Bottleneck Management</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column: Content Display -->
      <div class="col-lg-6">
        <div class="gx-services-content gx-content-display-common gx-reveal-slide-right">
          <!-- Service Content Container -->
          <div class="gx-service-content-container gx-content-container-common">
            <!-- Procurement Service (Active) -->
            <div class="gx-service-pane gx-service-pane-active" id="procurement-service">
              <div class="gx-service-illustration gx-illustration-wrapper-common mb-4">
                <div class="gx-service-illustration-container gx-illustration-container-common">
                  <img src="./assets/service-back.png" alt="Service Background" class="gx-service-illustration-background gx-illustration-background-common" />
                  <img src="./assets/service-1.png" alt="Service Illustration" class="gx-service-illustration-foreground gx-illustration-foreground-common gx-illustration-foreground-common--reduced gx-reveal-slide-right-fg" />
                </div>
              </div>
              <div class="gx-service-content-text gx-content-area-common gx-content-area-common--centered text-center">
                <h2 class="gx-service-title gx-content-title-common gx-content-title-common--large text-primary">Procurement<br>Service</h2>
                <p class="gx-service-description gx-content-text-common gx-content-text-common--centered">With our global supplier network, we secure the best prices—making us the independent distributor of choice for mid‑sized companies and corporations.</p>
                <a href="#" class="btn gx-btn-primary mt-4 px-4 py-2">Inquire Now</a>
              </div>
            </div>

            <!-- Fulfillment Solutions -->
            <div class="gx-service-pane" id="fulfillment-service">
              <div class="gx-service-illustration gx-illustration-wrapper-common mb-4">
                <div class="gx-service-illustration-container gx-illustration-container-common">
                  <img src="./assets/service-back.png" alt="Service Background" class="gx-service-illustration-background gx-illustration-background-common" />
                  <img src="./assets/Fulfiment Solutions.png" alt="Service Illustration" class="gx-service-illustration-foreground gx-illustration-foreground-common gx-illustration-foreground-common--reduced gx-reveal-slide-right-fg" />
                </div>
              </div>
              <div class="gx-service-content-text gx-content-area-common gx-content-area-common--centered text-center">
                <h2 class="gx-service-title gx-content-title-common gx-content-title-common--large text-primary">Fulfillment<br>Solutions</h2>
                <p class="gx-service-description gx-content-text-common gx-content-text-common--centered">Our streamlined fulfillment and global logistics guarantee your components arrive on time, every time.
                  Plus, real-time tracking keeps you informed at every step.
                </p>
                <a href="#" class="btn gx-btn-primary mt-4 px-4 py-2">Inquire Now</a>
              </div>
            </div>

            <!-- BOM Evaluation -->
            <div class="gx-service-pane" id="bom-service">
              <div class="gx-service-illustration gx-illustration-wrapper-common mb-4">
                <div class="gx-service-illustration-container gx-illustration-container-common">
                  <img src="./assets/service-back.png" alt="Service Background" class="gx-service-illustration-background gx-illustration-background-common" />
                  <img src="./assets/BOM Evaluationn.png" alt="Service Illustration" class="gx-service-illustration-foreground gx-illustration-foreground-common gx-illustration-foreground-common--reduced gx-reveal-slide-right-fg" />
                </div>
              </div>
              <div class="gx-service-content-text gx-content-area-common gx-content-area-common--centered text-center">
                <h2 class="gx-service-title gx-content-title-common gx-content-title-common--large text-primary">BOM<br>Evaluation</h2>
                <p class="gx-service-description gx-content-text-common gx-content-text-common--centered">Comprehensive Bill of Materials analysis to optimize your supply chain. We identify cost-saving opportunities and alternative sourcing options.</p>
                <a href="#" class="btn gx-btn-primary mt-4 px-4 py-2">Inquire Now</a>
              </div>
            </div>

            <!-- Excess Solutions -->
            <div class="gx-service-pane" id="excess-service">
              <div class="gx-service-illustration gx-illustration-wrapper-common mb-4">
                <div class="gx-service-illustration-container gx-illustration-container-common">
                  <img src="./assets/service-back.png" alt="Service Background" class="gx-service-illustration-background gx-illustration-background-common" />
                  <img src="./assets/Excess Solutions.png" alt="Service Illustration" class="gx-service-illustration-foreground gx-illustration-foreground-common gx-illustration-foreground-common--reduced gx-reveal-slide-right-fg" />
                </div>
              </div>
              <div class="gx-service-content-text gx-content-area-common gx-content-area-common--centered text-center">
                <h2 class="gx-service-title gx-content-title-common gx-content-title-common--large text-primary">Excess<br>Solutions</h2>
                <p class="gx-service-description gx-content-text-common gx-content-text-common--centered">Turn your excess inventory into value. Our excess management solutions help you recover costs and optimize your inventory levels.</p>
                <a href="#" class="btn gx-btn-primary mt-4 px-4 py-2">Inquire Now</a>
              </div>
            </div>

            <!-- Obsolescence Management -->
            <div class="gx-service-pane" id="obsolescence-service">
              <div class="gx-service-illustration gx-illustration-wrapper-common mb-4">
                <div class="gx-service-illustration-container gx-illustration-container-common">
                  <img src="./assets/service-back.png" alt="Service Background" class="gx-service-illustration-background gx-illustration-background-common" />
                  <img src="./assets/Obsoloscence Management.png" alt="Service Illustration" class="gx-service-illustration-foreground gx-illustration-foreground-common gx-illustration-foreground-common--reduced gx-reveal-slide-right-fg" />
                </div>
              </div>
              <div class="gx-service-content-text gx-content-area-common gx-content-area-common--centered text-center">
                <h2 class="gx-service-title gx-content-title-common gx-content-title-common--large text-primary">Obsolescence<br>Management</h2>
                <p class="gx-service-description gx-content-text-common gx-content-text-common--centered">Proactive obsolescence management to protect your production continuity. We help you plan for component end-of-life and secure alternatives.</p>
                <a href="#" class="btn gx-btn-primary mt-4 px-4 py-2">Inquire Now</a>
              </div>
            </div>

            <!-- Bottleneck Management -->
            <div class="gx-service-pane" id="bottleneck-service">
              <div class="gx-service-illustration gx-illustration-wrapper-common mb-4">
                <div class="gx-service-illustration-container gx-illustration-container-common">
                  <img src="./assets/service-back.png" alt="Service Background" class="gx-service-illustration-background gx-illustration-background-common" />
                  <img src="./assets/Bottleneck Management.png" alt="Service Illustration" class="gx-service-illustration-foreground gx-illustration-foreground-common gx-illustration-foreground-common--reduced gx-reveal-slide-right-fg" />
                </div>
              </div>
              <div class="gx-service-content-text gx-content-area-common gx-content-area-common--centered text-center">
                <h2 class="gx-service-title gx-content-title-common gx-content-title-common--large text-primary">Bottleneck<br>Management</h2>
                <p class="gx-service-description gx-content-text-common gx-content-text-common--centered">Rapid response solutions for supply chain bottlenecks. Our emergency procurement services keep your production running without interruption.</p>
                <a href="#" class="btn gx-btn-primary mt-4 px-4 py-2">Inquire Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Markets & Industries Section -->
<section class="gx-markets-industries-section gx-section-common py-10 gx-reveal-section">
  <!-- Decorative Arrow -->
  <div class="gx-sector-arrow gx-reveal-content gx-reveal-delay-1">
    <img src="./assets/sector-arrow.png" alt="Decorative Arrow" />
  </div>
  <div class="container">
    <div class="row align-items-center justify-content-end">
      <!-- Left Column: Content -->
      <div class="col-lg-6">
        <div class="gx-markets-navigation gx-reveal-slide-left">
          <!-- Header Section -->
          <div class="gx-section-header-common mb-3">
            <h2 class="gx-section-label-common gx-section-label-common--medium">Sectors and domains</h2>
            <h1 class="gx-section-headline-common gx-section-headline-common--medium">Markets & Industries</h1>
          </div>

          <!-- Mobile Illustration (hidden on desktop) -->
          <div class="gx-markets-mobile-illustration d-lg-none mb-4">
            <div class="gx-markets-illustration-container">
              <img src="./assets/orbit.png" alt="Markets & Industries Orbital Design" class="gx-markets-illustration" />
            </div>
          </div>

          <!-- Description -->
          <p class="gx-section-description-common gx-section-description-common--with-margin">
            We know the requirements of a wide range of industrial sectors. And with precisely tailored sourcing solutions, we ensure that the right components are always available at the right time.
          </p>

          <!-- Markets List -->
          <ul class="gx-markets-list">
            <li class="gx-markets-list-item">
              <img src="./assets/sector-arrow-list.png" alt="Arrow" class="gx-markets-list-icon" />
              <span>Aeronautics and space</span>
            </li>
            <li class="gx-markets-list-item">
              <img src="./assets/sector-arrow-list.png" alt="Arrow" class="gx-markets-list-icon" />
              <span>Industrial & automation</span>
            </li>
            <li class="gx-markets-list-item">
              <img src="./assets/sector-arrow-list.png" alt="Arrow" class="gx-markets-list-icon" />
              <span>Medicine & agriculture</span>
            </li>
            <li class="gx-markets-list-item">
              <img src="./assets/sector-arrow-list.png" alt="Arrow" class="gx-markets-list-icon" />
              <span>Energy</span>
            </li>
            <li class="gx-markets-list-item">
              <img src="./assets/sector-arrow-list.png" alt="Arrow" class="gx-markets-list-icon" />
              <span>Telecommunications</span>
            </li>
            <li class="gx-markets-list-item">
              <img src="./assets/sector-arrow-list.png" alt="Arrow" class="gx-markets-list-icon" />
              <span>Automotive & transportation</span>
            </li>
            <li class="gx-markets-list-item">
              <img src="./assets/sector-arrow-list.png" alt="Arrow" class="gx-markets-list-icon" />
              <span>Electronics</span>
            </li>
            <li class="gx-markets-list-item">
              <img src="./assets/sector-arrow-list.png" alt="Arrow" class="gx-markets-list-icon" />
              <span>Raw materials</span>
            </li>
            <li class="gx-markets-list-item">
              <img src="./assets/sector-arrow-list.png" alt="Arrow" class="gx-markets-list-icon" />
              <span>Logistics</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Right Column: Illustration (desktop only) -->
      <div class="col-lg-6 d-none d-lg-block">
        <div class="gx-markets-content gx-reveal-slide-right">
          <div class="gx-markets-illustration-container">
            <!-- Begin dynamic orbit -->
            <div class="gx-orbit">
              <div class="gx-orbit-center-container">
                <img src="./assets/orbit-center.png" alt="Center" class="gx-orbit-center" />
              </div>
              <div class="gx-orbit-ring gx-orbit-ring-1"></div>
              <div class="gx-orbit-ring gx-orbit-ring-2"></div>
              <div class="gx-orbit-ring gx-orbit-ring-3"></div>
              <!-- 9 orbiting icons, each in its own container with orbit class and tooltip -->
              <div class="gx-orbit-icon-container gx-orbit-icon-1" data-tooltip="Aeronautics and space"><img src="./assets/orbit-icon-1.svg" class="gx-orbit-icon" alt="Orbit Icon 1" /></div>
              <div class="gx-orbit-icon-container gx-orbit-icon-2" data-tooltip="Industrial & automation"><img src="./assets/orbit-icon-2.svg" class="gx-orbit-icon" alt="Orbit Icon 2" /></div>
              <div class="gx-orbit-icon-container gx-orbit-icon-3" data-tooltip="Medicine & agriculture"><img src="./assets/orbit-icon-3.svg" class="gx-orbit-icon" alt="Orbit Icon 3" /></div>
              <div class="gx-orbit-icon-container gx-orbit-icon-4" data-tooltip="Energy"><img src="./assets/orbit-icon-4.svg" class="gx-orbit-icon" alt="Orbit Icon 4" /></div>
              <div class="gx-orbit-icon-container gx-orbit-icon-5" data-tooltip="Telecommunications"><img src="./assets/orbit-icon-5.svg" class="gx-orbit-icon" alt="Orbit Icon 5" /></div>
              <div class="gx-orbit-icon-container gx-orbit-icon-6" data-tooltip="Automotive & transportation"><img src="./assets/orbit-icon-6.svg" class="gx-orbit-icon" alt="Orbit Icon 6" /></div>
              <div class="gx-orbit-icon-container gx-orbit-icon-7" data-tooltip="Electronics"><img src="./assets/orbit-icon-7.svg" class="gx-orbit-icon" alt="Orbit Icon 7" /></div>
              <div class="gx-orbit-icon-container gx-orbit-icon-8" data-tooltip="Raw materials"><img src="./assets/orbit-icon-8.svg" class="gx-orbit-icon" alt="Orbit Icon 8" /></div>
              <div class="gx-orbit-icon-container gx-orbit-icon-9" data-tooltip="Logistics"><img src="./assets/orbit-icon-9.svg" class="gx-orbit-icon" alt="Orbit Icon 9" /></div>
            </div>
            <!-- End dynamic orbit -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials Section -->
<section class="gx-testimonials-section gx-section-common py-10 gx-reveal-section">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left Column: Testimonial Content -->
      <div class="col-lg-6 order-2 order-lg-1">
        <div class="gx-testimonials-navigation gx-reveal-slide-left">
          <!-- Testimonial Quote -->
          <div class="gx-testimonial-pane gx-testimonial-pane-active" id="testimonial-1">
            <p class="gx-testimonial-quote">
              GlobX is a reliable and fair partner when our supply chain fails and things need to happen quickly before a line stoppage occurs. Especially in the procurement of microchips, you have helped us out many times. Without the help of GlobX, many projects would have faltered. Your dedication, transparency, and consistent communication have made a significant difference in keeping our operations running smoothly. We value the strong relationship we have built with GlobX, and we look forward to continuing our collaboration for many years to come. GlobX has truly become an essential part of our extended team.
            </p>

            <!-- Testimonial Attribution -->
            <div class="gx-testimonial-author">
              <div class="gx-testimonial-author-name">Dr. Bayram Cucu</div>
              <div class="gx-testimonial-author-title">CEO, Bio-Gram Diagnostics GmbH</div>
            </div>
          </div>

          <!-- Additional Testimonial (Hidden by default) -->
          <div class="gx-testimonial-pane" id="testimonial-2">
            <p class="gx-testimonial-quote">
              Working with GlobX has transformed our supply chain management. Their expertise in sourcing critical components has been invaluable to our operations. The team's responsiveness and commitment to quality have exceeded our expectations time and again.
            </p>

            <!-- Testimonial Attribution -->
            <div class="gx-testimonial-author">
              <div class="gx-testimonial-author-name">Sarah Johnson</div>
              <div class="gx-testimonial-author-title">Operations Director, TechFlow Solutions</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column: Testimonial Image -->
      <div class="col-lg-6 order-1 order-lg-2">
        <div class="gx-testimonials-content gx-reveal-slide-right">
          <div class="gx-testimonial-image-container">
            <img src="./assets/testimonial-man.jpg" alt="Dr. Bayram Cucu - CEO, Bio-Gram Diagnostics GmbH" class="gx-testimonial-image" />
          </div>
        </div>
      </div>
    </div>

    <!-- Pagination Controls -->
    <div class="gx-testimonial-pagination gx-reveal-content gx-reveal-delay-2">
      <div class="gx-testimonial-pagination-dot active" data-testimonial="1"></div>
      <div class="gx-testimonial-pagination-dot" data-testimonial="2"></div>
    </div>
  </div>
</section>

<!-- Why Work With Us Section -->
<section class="gx-why-work-section gx-section-common py-10 gx-reveal-section">
  <div class="container">
    <!-- Header Section -->
    <div class="row gx-why-work-header gx-reveal-content">
      <div class="col-lg-6">
        <h2 class="gx-why-work-title">Why work <br> with us?</h2>
      </div>
      <div class="col-lg-6">
        <p class="gx-why-work-description">
          GlobX connects businesses to the right suppliers across cultures and languages—driven by passion and backed by years of industry expertise, ensuring every partnership is built on trust and performance.
        </p>
      </div>
    </div>

    <!-- Separator Line -->
    <div class="gx-why-work-separator gx-reveal-content gx-reveal-delay-1" style="max-width: 100%; min-width: 50%;"></div>

    <!-- Statistics Grid -->
    <div class="gx-why-work-grid">
      <!-- Top Row -->
      <div class="gx-why-work-who-are-we gx-reveal-grid-item">
        <div class="gx-who-are-we-text">Who are we?</div>
      </div>

      <div class="gx-why-work-stat gx-reveal-grid-item">
        <div class="gx-why-work-stat-number" data-count="500">500+</div>
        <div class="gx-why-work-stat-label">customers</div>
        <div class="gx-why-work-stat-description">partners in success, <br> trusted worldwide.</div>
      </div>

      <!-- Bottom Row Separator (split) -->
      <div class="gx-why-work-separator left gx-reveal-content gx-reveal-delay-2"></div>
      <div class="gx-why-work-separator right gx-reveal-content gx-reveal-delay-2"></div>

      <div class="gx-why-work-stat gx-reveal-grid-item">
        <div class="gx-why-work-stat-number" data-count="98">98%</div>
        <div class="gx-why-work-stat-label">satisfaction</div>
        <div class="gx-why-work-stat-description">trusted by clients. <br> proven by results.</div>
      </div>

      <div class="gx-why-work-stat gx-reveal-grid-item">
        <div class="gx-why-work-stat-number" data-count="12">12+</div>
        <div class="gx-why-work-stat-label">years in industry</div>
        <div class="gx-why-work-stat-description">delivering confidence, <br> every time.</div>
      </div>
    </div>
  </div>
</section>

<!-- Save the Globe Section -->
<section class="gx-save-globe-section gx-reveal-section gx-section-common">
  <div class="container">
    <div class="gx-save-globe-row">
      <!-- Left Column: Content -->
      <div class="gx-save-globe-content gx-reveal-slide-left">
        <div class="gx-save-globe-logomark">
          <span class="gx-save-globe-globx">Glob<span class="x">X</span></span>
          <img src="./assets/X.png" alt="GlobX Save the Globe Logomark" class="gx-save-globe-x-graphic" />
          <span class="gx-save-globe-save-globe">
            <span class="save">Save</span>
            <span class="the">the</span>
            <span class="globe">Globe</span>
          </span>
        </div>
        <div class="gx-save-globe-body">
          <b>Save the Globe</b> is a global movement dedicated to combating climate change through reforestation and education. With your support, we've already planted countless trees worldwide and trained several climate ambassadors. These trees not only contribute to ecosystem restoration but also actively absorb carbon dioxide, helping to reduce greenhouse gas emissions. Our climate ambassadors serve as vital agents of change in their communities, spreading awareness and inspiring action on climate change.
        </div>
        <button class="gx-save-globe-btn">Learn More</button>
      </div>
      <!-- Right Column: Image -->
      <div class="gx-save-globe-image-col gx-reveal-slide-right">
        <img src="./assets/earth.jpg" alt="Earth - Save the Globe" class="gx-save-globe-image" />
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
  './assets/js/hero-owl-carousel.js',
  './assets/js/services.js',
  './assets/js/testimonials.js',
  './assets/js/scroll-reveal.js',
  './assets/js/infinite-scroll.js',
];

include_once('./includes/footer.php');
?>