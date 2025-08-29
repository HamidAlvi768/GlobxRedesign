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
$cssFiles[] = './assets/css/product-detail.css';
$cssFiles[] = './assets/css/pn-listing.css';
include_once('./includes/header.php');
include_once('./includes/search_nav.php');
?>

<!-- Category Page -->
<section class="gx-category-section">
  <div class="container">
    <!-- Search Bar Section -->
    <div class="gx-search-section">
      <div class="gx-search-container">
        <div class="gx-search-input-group">
          <input type="text" class="gx-search-input" placeholder="Search MPN here">
          <button class="gx-search-button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Category Introduction Section -->
    <div class="gx-category-intro-section">
      <div class="gx-category-intro-container">
        <!-- Brand Logo and Product Family -->
        <div class="gx-category-header">
          <div class="gx-category-brand-logo">
            <img src="./assets/img/pn-listing/ecs.png" alt="ECS INC INTERNATIONAL" class="gx-brand-logo">
          </div>
          <div class="gx-category-product-image">
            <div class="gx-product-3d-image">
              <img src="./assets/img/pn-listing/ecs-chip.png" alt="ECS Crystal Oscillator Component" class="gx-3d-component-image">
            </div>
          </div>
          <div class="gx-category-title-section">
            <h1 class="gx-category-title">ECS-3225MV MultiVolt™ Oscillators</h1>
            <p class="gx-category-description">
              ECS' surface-mount, MultiVolt crystal oscillators are ideal for low-power, portable, industrial, and IoT applications.
            </p>
          </div>
        </div>

         <!-- Detailed Product Description -->
         <div class="gx-category-detailed-description">
          <p class="gx-detailed-description-text">
            The ECS-3225MV series from ECS are low-power, fixed frequency, low jitter, MultiVolt surface-mount crystal oscillators. They are available in a 3.2 mm x 2.5 mm x 1.2 mm LWH package size to save board space. The MultiVolt feature allows customers to utilize the same device for many designs, reducing qualification requirements and reducing inventory.
          </p>
        </div>
        <!-- Features and Applications Lists -->
        <div class="gx-category-details">
          <div class="gx-features-section">
            <h3 class="gx-features-title">Features</h3>
            <div class="gx-features-grid">
              <div class="gx-features-column">
                <ul class="gx-features-list">
                  <li class="gx-feature-item">3.2 mm x 2.5 mm four-pad footprint</li>
                  <li class="gx-feature-item">MultiVolt 1.6 V to 3.63 V</li>
                  <li class="gx-feature-item">Compatible with 1.8 V, 2.5 V, or 3.3 V supply</li>
                  <li class="gx-feature-item">Low jitter: 1 pS</li>
                  <li class="gx-feature-item">BN option: ±50 ppm, -40°C to +85°C</li>
                </ul>
              </div>
              <div class="gx-features-column">
                <ul class="gx-features-list">
                  <li class="gx-feature-item">CN option: ±25 ppm, -40°C to +85°C</li>
                  <li class="gx-feature-item">RoHS 2 and REACH compliant</li>
                  <li class="gx-feature-item">MSL 1</li>
                  <li class="gx-feature-item">Lead finish Au</li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="gx-applications-section">
            <h3 class="gx-applications-title">Applications</h3>
            <div class="gx-applications-grid">
              <div class="gx-applications-column">
                <ul class="gx-applications-list">
                  <li class="gx-application-item">IoT</li>
                  <li class="gx-application-item">Storage devices</li>
                  <li class="gx-application-item">Commercial off-the-shelf (COTS)</li>
                  <li class="gx-application-item">Navigation</li>
                  <li class="gx-application-item">Medical (non-life sustaining)</li>
                </ul>
              </div>
              <div class="gx-applications-column">
                <ul class="gx-applications-list">
                  <li class="gx-application-item">Mobile devices</li>
                  <li class="gx-application-item">Industrial applications</li>
                  <li class="gx-application-item">Wireless devices</li>
                  <li class="gx-application-item">Test equipment</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        
       
      </div>
    </div>

       <!-- Results Table Section -->
       <?php
       $products = [
           [
               'mpn' => 'RC0402FR-0788K7L',
               'brand' => 'Yageo',
               'quantity' => '1000000',
               'price' => '0.00008'
           ],
           [
               'mpn' => 'RC0402FR-0788K7L',
               'brand' => 'Yageo',
               'quantity' => '1000000',
               'price' => '0.00008'
           ],
           [
               'mpn' => 'RC0402FR-0788K7L',
               'brand' => 'Yageo',
               'quantity' => '1000000',
               'price' => '0.00008'
           ],
           [
               'mpn' => 'RC0402FR-0788K7L',
               'brand' => 'Yageo',
               'quantity' => '1000000',
               'price' => '0.00008'
           ],
           [
               'mpn' => 'RC0402FR-0788K7L',
               'brand' => 'Yageo',
               'quantity' => '1000000',
               'price' => '0.00008'
           ],
           [
               'mpn' => 'RC0402FR-0788K7L',
               'brand' => 'Yageo',
               'quantity' => '1000000',
               'price' => '0.00008'
           ],
           [
               'mpn' => 'RC0402FR-0788K7L',
               'brand' => 'Yageo',
               'quantity' => '1000000',
               'price' => '0.00008'
           ],
           [
               'mpn' => 'RC0402FR-0788K7L',
               'brand' => 'Yageo',
               'quantity' => '1000000',
               'price' => '0.00008'
           ]
       ];

       $pagination = [
           'currentPage' => 1,
           'totalPages' => 24,
           'showEllipsis' => true
       ];

       include_once('./includes/_results-section.php');
       ?>
  </div>
</section>

<?php
$jsFiles = [
  './assets/js/scroll-reveal.js',
  './assets/js/product-detail.js',
];

include_once('./includes/footer.php');
?> 