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
  './assets/css/products-main.css',
];
include_once('./includes/header.php');
include_once('./includes/search_nav.php');
?>

<!-- Products Page -->
<section class="gx-products-section">
  <div class="container">
    <!-- Search Bar Section -->
    <div class="gx-search-section" style="display: none;">
      <div class="gx-search-container">
        <div class="gx-search-input-group">
          <input type="text" class="gx-search-input" placeholder="Search MPN here">
          <button class="gx-search-button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Introductory Section -->
    <section class="gx-intro-section">
      <div class="row">
        <!-- Left Column: Search by Categories Card -->
        <div class="col-lg-4">
          <div class="gx-sidebar-card shadow">
            <div class="gx-sidebar-title text-center mb-4">Search by Categories</div>
            <div class="gx-sidebar-carousel owl-carousel owl-theme">
              <!-- Slide 1 -->
              <div class="gx-sidebar-slide">
                <div class="gx-sidebar-grid mb-4">
                  <div class="gx-sidebar-row">
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/diodes.png" alt="Diodes" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">diodes</div>
                    </div>
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/mpu_mcu.png" alt="MPU/MCU" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">mpu/mcu</div>
                    </div>
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/powerics.png" alt="Power" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">powerics</div>
                    </div>
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/resistors.png" alt="Resistors" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">resistors</div>
                    </div>
                  </div>
                  <div class="gx-sidebar-row">
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/capacitors.png" alt="Capacitors" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">capacitors</div>
                    </div>
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/connectors.png" alt="Connectors" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">connectors</div>
                    </div>
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/inductors.png" alt="Inductors" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">inductors</div>
                    </div>
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/switches.png" alt="Switches" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">switches</div>
                    </div>
                  </div>
                  <div class="gx-sidebar-row">
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/fuses.png" alt="Fuses" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">fuses</div>
                    </div>
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/transistor.png" alt="Transistors" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">transistors</div>
                    </div>
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/crys_reso.png" alt="Crystal Resonators" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">crystals</div>
                    </div>
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/optoelectr.png" alt="Optoelectronics" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">optoelectronics</div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Slide 2 -->
              <div class="gx-sidebar-slide">
                <div class="gx-sidebar-grid mb-4">
                  <div class="gx-sidebar-row">
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/sens_trans.png" alt="Sensors & Transducers" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">sensors</div>
                    </div>
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/amplifiers.png" alt="Amplifiers" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">amplifiers</div>
                    </div>
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/regulators.png" alt="Regulators" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">regulators</div>
                    </div>
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/pmic.png" alt="PMIC" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">pmic</div>
                    </div>
                  </div>
                  <div class="gx-sidebar-row">
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/logic_ics.png" alt="Logic ICs" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">logic ics</div>
                    </div>
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/memory_ics.png" alt="Memory ICs" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">memory ics</div>
                    </div>
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/interface.png" alt="Interface" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">interface</div>
                    </div>
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/converters.png" alt="Converters" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">converters</div>
                    </div>
                  </div>
                  <div class="gx-sidebar-row">
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/psu.png" alt="Power Supply Units" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">psu</div>
                    </div>
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/lcc.png" alt="LCC" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">lcc</div>
                    </div>
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/memory.png" alt="Memory" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">memory</div>
                    </div>
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/other_semi.png" alt="Other Semiconductors" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">other semi</div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Slide 3 -->
              <div class="gx-sidebar-slide">
                <div class="gx-sidebar-grid mb-4">
                  <div class="gx-sidebar-row">
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/diodes.png" alt="Diodes" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">diodes</div>
                    </div>
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/mpu_mcu.png" alt="MPU/MCU" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">mpu/mcu</div>
                    </div>
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/powerics.png" alt="Power" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">powerics</div>
                    </div>
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/resistors.png" alt="Resistors" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">resistors</div>
                    </div>
                  </div>
                  <div class="gx-sidebar-row">
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/capacitors.png" alt="Capacitors" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">capacitors</div>
                    </div>
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/connectors.png" alt="Connectors" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">connectors</div>
                    </div>
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/inductors.png" alt="Inductors" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">inductors</div>
                    </div>
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/switches.png" alt="Switches" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">switches</div>
                    </div>
                  </div>
                  <div class="gx-sidebar-row">
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/fuses.png" alt="Fuses" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">fuses</div>
                    </div>
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/transistor.png" alt="Transistors" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">transistors</div>
                    </div>
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/crys_reso.png" alt="Crystal Resonators" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">crystals</div>
                    </div>
                    <div class="gx-sidebar-cell">
                      <div class="gx-sidebar-icon">
                        <img src="./assets/main/optoelectr.png" alt="Optoelectronics" width="60" height="60" />
                      </div>
                      <div class="gx-sidebar-label">optoelectronics</div>
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

        <!-- Right Column: Marketing Carousel -->
        <div class="col-lg-8">
          <div class="gx-marketing-carousel-container">
            <div class="gx-marketing-carousel owl-carousel owl-theme">
              <!-- Marketing Slide 1 -->
              <div class="gx-marketing-slide">
                <div class="gx-marketing-image-container">
                  <img src="./assets/pn-listing/products-bg.webp" alt="Products Background" class="gx-marketing-image">
                  <div class="gx-marketing-overlay">
                    <h2 class="gx-marketing-headline">World's largest selection of electronic components in stock for immediate shipment.</h2>
                  </div>
                </div>
              </div>
              
              <!-- Marketing Slide 2 -->
              <div class="gx-marketing-slide">
                <div class="gx-marketing-image-container">
                  <img src="./assets/hero-bg.webp" alt="Global Supply Chain" class="gx-marketing-image">
                  <div class="gx-marketing-overlay">
                    <h2 class="gx-marketing-headline">Global supply chain solutions for your business, driving sustainable growth and operational excellence.</h2>
                  </div>
                </div>
              </div>
              
              <!-- Marketing Slide 3 -->
              <div class="gx-marketing-slide">
                <div class="gx-marketing-image-container">
                  <img src="./assets/contact-us.webp" alt="Expert Support" class="gx-marketing-image">
                  <div class="gx-marketing-overlay">
                    <h2 class="gx-marketing-headline">Expert support and fast delivery guaranteed, ensuring customer satisfaction every single time.</h2>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Marketing Pagination Dots -->
            <div class="gx-marketing-pagination d-flex justify-content-start align-items-center">
              <span class="gx-dot active" data-slide="0"></span>
              <span class="gx-dot" data-slide="1"></span>
              <span class="gx-dot" data-slide="2"></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Featured Manufacturers Section -->
    <section class="gx-featured-manufacturers-section">
      <div class="container">
        <h2 class="gx-section-title">Featured Manufacturers</h2>
        <div class="gx-manufacturers-scroll-container">
          <div class="gx-manufacturers-scroll-track">
            <!-- First set of logos -->
            <div class="gx-manufacturer-logo"><img src="./assets/pn-listing/brand-1.webp" alt="Brand 1" height="100" /></div>
            <div class="gx-manufacturer-logo"><img src="./assets/pn-listing/brand-2.webp" alt="Brand 2" height="100" /></div>
            <div class="gx-manufacturer-logo"><img src="./assets/pn-listing/brand-3.webp" alt="Brand 3" height="100" /></div>
            <div class="gx-manufacturer-logo"><img src="./assets/pn-listing/brand-4.webp" alt="Brand 4" height="100" /></div>
            <div class="gx-manufacturer-logo"><img src="./assets/pn-listing/brand-5.webp" alt="Brand 5" height="100" /></div>
            <!-- Duplicate set for seamless loop -->
            <div class="gx-manufacturer-logo"><img src="./assets/pn-listing/brand-1.webp" alt="Brand 1" height="100" /></div>
            <div class="gx-manufacturer-logo"><img src="./assets/pn-listing/brand-2.webp" alt="Brand 2" height="100" /></div>
            <div class="gx-manufacturer-logo"><img src="./assets/pn-listing/brand-3.webp" alt="Brand 3" height="100" /></div>
            <div class="gx-manufacturer-logo"><img src="./assets/pn-listing/brand-4.webp" alt="Brand 4" height="100" /></div>
            <div class="gx-manufacturer-logo"><img src="./assets/pn-listing/brand-5.webp" alt="Brand 5" height="100" /></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Featured Products Section -->
    <section class="gx-featured-products-section">
      <div class="container">
        <h2 class="gx-section-title">Featured Products</h2>
        
        <div class="gx-featured-carousel-container">
          <div class="gx-featured-carousel owl-carousel owl-theme">
            <!-- Featured Product Card 1 -->
            <div class="gx-featured-card">
              <div class="gx-featured-card-header">
                <div class="gx-featured-card-brand-logo">
                  <img src="./assets/pn-listing/ecs.png" alt="ECS INC INTERNATIONAL" width="40" height="20" />
                </div>
                <h4 class="gx-featured-card-title">ECS-3225MV MultiVolt™ Oscillators</h4>
              </div>
              <div class="gx-featured-card-image">
                <img src="./assets/pn-listing/ecs-chip.png" alt="ECS Crystal Oscillator Component" width="80" height="80" />
              </div>
              <div class="gx-featured-card-content">
                <p class="gx-featured-card-desc">The ECS-3225MV series from ECS are low-power, fixed frequency, low jitter, MultiVolt surface-mount crystal oscillators. They are available in a 3.2 mm x 2.5 mm x 1.2 mm LWH package size to save board space.</p>
                <div class="gx-featured-card-actions">
                  <a href="./pn-detail.php" class="gx-featured-card-link-secondary">Explore More</a>
                  <a href="#" class="gx-featured-card-link-primary">Show MPNs Only</a>
                </div>
              </div>
            </div>
            
            <!-- Featured Product Card 2 -->
            <div class="gx-featured-card">
              <div class="gx-featured-card-header">
                <div class="gx-featured-card-brand-logo">
                  <img src="./assets/pn-listing/ecs.png" alt="ECS INC INTERNATIONAL" width="80" height="40" />
                </div>
                <h4 class="gx-featured-card-title">ECS-3225MV MultiVolt™ Oscillators</h4>
              </div>
              <div class="gx-featured-card-image">
                <img src="./assets/pn-listing/ecs-chip.png" alt="ECS Crystal Oscillator Component" width="80" height="80" />
              </div>
              <div class="gx-featured-card-content">
                <p class="gx-featured-card-desc">The ECS-3225MV series from ECS are low-power, fixed frequency, low jitter, MultiVolt surface-mount crystal oscillators. They are available in a 3.2 mm x 2.5 mm x 1.2 mm LWH package size to save board space.</p>
                <div class="gx-featured-card-actions">
                  <a href="./pn-detail.php" class="gx-featured-card-link-secondary">Explore More</a>
                  <a href="#" class="gx-featured-card-link-primary">Show MPNs Only</a>
                </div>
              </div>
            </div>
            
            <!-- Featured Product Card 3 -->
            <div class="gx-featured-card">
              <div class="gx-featured-card-header">
                <div class="gx-featured-card-brand-logo">
                  <img src="./assets/pn-listing/ecs.png" alt="ECS INC INTERNATIONAL" width="80" height="40" />
                </div>
                <h4 class="gx-featured-card-title">ECS-3225MV MultiVolt™ Oscillators</h4>
              </div>
              <div class="gx-featured-card-image">
                <img src="./assets/pn-listing/ecs-chip.png" alt="ECS Crystal Oscillator Component" width="80" height="80" />
              </div>
              <div class="gx-featured-card-content">
                <p class="gx-featured-card-desc">The ECS-3225MV series from ECS are low-power, fixed frequency, low jitter, MultiVolt surface-mount crystal oscillators. They are available in a 3.2 mm x 2.5 mm x 1.2 mm LWH package size to save board space.</p>
                <div class="gx-featured-card-actions">
                  <a href="./pn-detail.php" class="gx-featured-card-link-secondary">Explore More</a>
                  <a href="#" class="gx-featured-card-link-primary">Show MPNs Only</a>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Pagination Dots -->
          <div class="gx-featured-pagination gx-pagination-dots">
            <span class="gx-pagination-dot active"></span>
            <span class="gx-pagination-dot"></span>
            <span class="gx-pagination-dot"></span>
          </div>
        </div>
      </div>
    </section>

    <!-- Hot Part Numbers Section -->
    <section class="gx-related-components-section gx-section-common--white py-6">
      <div class="container">
        <h2 class="gx-related-title">Hot Part Numbers</h2>
        
        <!-- Owl Carousel Container -->
        <div class="owl-carousel owl-theme gx-hot-part-numbers-carousel">
          <!-- Related Product Card 1 -->
          <div class="item">
            <div class="gx-related-card">
              <div class="gx-related-card-top">
                <div class="gx-related-card-icon">
                  <svg width="60" height="60" viewBox="0 0 60 60" fill="none">
                    <rect x="15" y="10" width="30" height="40" rx="4" fill="#E5E5E5" stroke="#CCCCCC" stroke-width="1"/>
                    <rect x="18" y="13" width="24" height="34" rx="2" fill="#F5F5F5"/>
                    <rect x="20" y="15" width="20" height="8" fill="#CCCCCC"/>
                    <rect x="20" y="37" width="20" height="8" fill="#CCCCCC"/>
                    <rect x="12" y="25" width="3" height="10" fill="#CCCCCC"/>
                    <rect x="45" y="25" width="3" height="10" fill="#CCCCCC"/>
                  </svg>
                </div>
                <div class="gx-related-card-content">
                  <h4 class="gx-related-card-part">CC1206KKX7R9BB105</h4>
                  <p class="gx-related-card-desc">Cap, Ceramic, 50V, 10% +Tol, 10%-Tol, X7R.</p>
                  <div class="gx-related-card-brand">Yageo</div>
                </div>
              </div>
              <div class="gx-related-card-bottom">
                <div class="gx-related-card-price">$0.012 / PCS</div>
                <a href="./pn-detail.php" class="gx-related-card-btn gx-btn-primary">Details</a>
              </div>
            </div>
          </div>
          
          <!-- Related Product Card 2 -->
          <div class="item">
            <div class="gx-related-card">
              <div class="gx-related-card-top">
                <div class="gx-related-card-icon">
                  <svg width="60" height="60" viewBox="0 0 60 60" fill="none">
                    <rect x="8" y="16" width="44" height="8" rx="2" stroke="#CCCCCC" stroke-width="2" fill="#E5E5E5"/>
                    <rect x="12" y="20" width="36" height="2" fill="#CCCCCC"/>
                    <rect x="12" y="24" width="36" height="2" fill="#CCCCCC"/>
                    <rect x="12" y="28" width="36" height="2" fill="#CCCCCC"/>
                  </svg>
                </div>
                <div class="gx-related-card-content">
                  <h4 class="gx-related-card-part">RC0402FR-0788K7L</h4>
                  <p class="gx-related-card-desc">SMD Chip Resistor, 88.7 kOhm, ± 1%, 63 mW.</p>
                  <div class="gx-related-card-brand">Yageo</div>
                </div>
              </div>
              <div class="gx-related-card-bottom">
                <div class="gx-related-card-price">$0.008 / PCS</div>
                <a href="./pn-detail.php" class="gx-related-card-btn gx-btn-primary">Details</a>
              </div>
            </div>
          </div>
          
          <!-- Related Product Card 3 -->
          <div class="item">
            <div class="gx-related-card">
              <div class="gx-related-card-top">
                <div class="gx-related-card-icon">
                  <svg width="60" height="60" viewBox="0 0 60 60" fill="none">
                    <rect x="10" y="10" width="40" height="40" rx="3" stroke="#CCCCCC" stroke-width="2" fill="#E5E5E5"/>
                    <rect x="15" y="15" width="60" height="60" rx="2" fill="#F5F5F5"/>
                    <rect x="20" y="20" width="20" height="20" fill="#CCCCCC"/>
                  </svg>
                </div>
                <div class="gx-related-card-content">
                  <h4 class="gx-related-card-part">STM32F103C8T6</h4>
                  <p class="gx-related-card-desc">ARM Cortex-M3 MCU, 64KB Flash, 20KB SRAM.</p>
                  <div class="gx-related-card-brand">STMicroelectronics</div>
                </div>
              </div>
              <div class="gx-related-card-bottom">
                <div class="gx-related-card-price">$3.50 / PCS</div>
                <a href="./pn-detail.php" class="gx-related-card-btn gx-btn-primary">Details</a>
              </div>
            </div>
          </div>
          
          <!-- Related Product Card 4 -->
          <div class="item">
            <div class="gx-related-card">
              <div class="gx-related-card-top">
                <div class="gx-related-card-icon">
                  <svg width="60" height="60" viewBox="0 0 60 60" fill="none">
                    <rect x="10" y="10" width="40" height="40" rx="3" stroke="#CCCCCC" stroke-width="2" fill="#E5E5E5"/>
                    <rect x="15" y="15" width="60" height="60" rx="2" fill="#F5F5F5"/>
                    <rect x="20" y="20" width="20" height="20" fill="#CCCCCC"/>
                  </svg>
                </div>
                <div class="gx-related-card-content">
                  <h4 class="gx-related-card-part">STM32F103C8T6</h4>
                  <p class="gx-related-card-desc">ARM Cortex-M3 MCU, 64KB Flash, 20KB SRAM.</p>
                  <div class="gx-related-card-brand">STMicroelectronics</div>
                </div>
              </div>
              <div class="gx-related-card-bottom">
                <div class="gx-related-card-price">$3.50 / PCS</div>
                <a href="./pn-detail.php" class="gx-related-card-btn gx-btn-primary">Details</a>
              </div>
            </div>
          </div>

          <!-- Related Product Card 5 -->
          <div class="item">
            <div class="gx-related-card">
              <div class="gx-related-card-top">
                <div class="gx-related-card-icon">
                  <svg width="60" height="60" viewBox="0 0 60 60" fill="none">
                    <rect x="10" y="10" width="40" height="40" rx="3" stroke="#CCCCCC" stroke-width="2" fill="#E5E5E5"/>
                    <rect x="15" y="15" width="60" height="60" rx="2" fill="#F5F5F5"/>
                    <rect x="20" y="20" width="20" height="20" fill="#CCCCCC"/>
                  </svg>
                </div>
                <div class="gx-related-card-content">
                  <h4 class="gx-related-card-part">STM32F103C8T6</h4>
                  <p class="gx-related-card-desc">ARM Cortex-M3 MCU, 64KB Flash, 20KB SRAM.</p>
                  <div class="gx-related-card-brand">STMicroelectronics</div>
                </div>
              </div>
              <div class="gx-related-card-bottom">
                <div class="gx-related-card-price">$3.50 / PCS</div>
                <a href="./pn-detail.php" class="gx-related-card-btn gx-btn-primary">Details</a>
              </div>
            </div>
          </div>

          <!-- Related Product Card 6 -->
          <div class="item">
            <div class="gx-related-card">
              <div class="gx-related-card-top">
                <div class="gx-related-card-icon">
                  <svg width="60" height="60" viewBox="0 0 60 60" fill="none">
                    <rect x="10" y="10" width="40" height="40" rx="3" stroke="#CCCCCC" stroke-width="2" fill="#E5E5E5"/>
                    <rect x="15" y="15" width="60" height="60" rx="2" fill="#F5F5F5"/>
                    <rect x="20" y="20" width="20" height="20" fill="#CCCCCC"/>
                  </svg>
                </div>
                <div class="gx-related-card-content">
                  <h4 class="gx-related-card-part">STM32F103C8T6</h4>
                  <p class="gx-related-card-desc">ARM Cortex-M3 MCU, 64KB Flash, 20KB SRAM.</p>
                  <div class="gx-related-card-brand">STMicroelectronics</div>
                </div>
              </div>
              <div class="gx-related-card-bottom">
                <div class="gx-related-card-price">$3.50 / PCS</div>
                <a href="./pn-detail.php" class="gx-related-card-btn gx-btn-primary">Details</a>
              </div>
            </div>
          </div>

          <!-- Related Product Card 7 -->
          <div class="item">
            <div class="gx-related-card">
              <div class="gx-related-card-top">
                <div class="gx-related-card-icon">
                  <svg width="60" height="60" viewBox="0 0 60 60" fill="none">
                    <rect x="12" y="12" width="36" height="36" rx="4" stroke="#CCCCCC" stroke-width="2" fill="#E5E5E5"/>
                    <rect x="18" y="18" width="24" height="24" fill="#F5F5F5"/>
                    <circle cx="30" cy="30" r="8" fill="#CCCCCC"/>
                  </svg>
                </div>
                <div class="gx-related-card-content">
                  <h4 class="gx-related-card-part">LM358DR2G</h4>
                  <p class="gx-related-card-desc">Dual Operational Amplifier, 3V to 32V Supply.</p>
                  <div class="gx-related-card-brand">ON Semiconductor</div>
                </div>
              </div>
              <div class="gx-related-card-bottom">
                <div class="gx-related-card-price">$0.25 / PCS</div>
                <a href="./pn-detail.php" class="gx-related-card-btn gx-btn-primary">Details</a>
              </div>
            </div>
          </div>

          <!-- Related Product Card 8 -->
          <div class="item">
            <div class="gx-related-card">
              <div class="gx-related-card-top">
                <div class="gx-related-card-icon">
                  <svg width="60" height="60" viewBox="0 0 60 60" fill="none">
                    <rect x="8" y="8" width="44" height="44" rx="3" stroke="#CCCCCC" stroke-width="2" fill="#E5E5E5"/>
                    <rect x="14" y="14" width="32" height="32" fill="#F5F5F5"/>
                    <rect x="18" y="18" width="24" height="8" fill="#CCCCCC"/>
                    <rect x="18" y="30" width="24" height="8" fill="#CCCCCC"/>
                  </svg>
                </div>
                <div class="gx-related-card-content">
                  <h4 class="gx-related-card-part">74HC595D</h4>
                  <p class="gx-related-card-desc">8-bit Shift Register, 3-State Output, 2V to 6V.</p>
                  <div class="gx-related-card-brand">Texas Instruments</div>
                </div>
              </div>
              <div class="gx-related-card-bottom">
                <div class="gx-related-card-price">$0.18 / PCS</div>
                <a href="./pn-detail.php" class="gx-related-card-btn gx-btn-primary">Details</a>
              </div>
            </div>
          </div>

          <!-- Related Product Card 9 -->
          <div class="item">
            <div class="gx-related-card">
              <div class="gx-related-card-top">
                <div class="gx-related-card-icon">
                  <svg width="60" height="60" viewBox="0 0 60 60" fill="none">
                    <rect x="10" y="10" width="40" height="40" rx="4" stroke="#CCCCCC" stroke-width="2" fill="#E5E5E5"/>
                    <rect x="16" y="16" width="28" height="28" fill="#F5F5F5"/>
                    <rect x="20" y="20" width="20" height="4" fill="#CCCCCC"/>
                    <rect x="20" y="28" width="20" height="4" fill="#CCCCCC"/>
                    <rect x="20" y="36" width="20" height="4" fill="#CCCCCC"/>
                  </svg>
                </div>
                <div class="gx-related-card-content">
                  <h4 class="gx-related-card-part">ATmega328P-PU</h4>
                  <p class="gx-related-card-desc">8-bit AVR Microcontroller, 32KB Flash, 2KB SRAM.</p>
                  <div class="gx-related-card-brand">Microchip</div>
                </div>
              </div>
              <div class="gx-related-card-bottom">
                <div class="gx-related-card-price">$2.85 / PCS</div>
                <a href="./pn-detail.php" class="gx-related-card-btn gx-btn-primary">Details</a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Pagination Dots for Hot Part Numbers -->
        <div class="gx-hot-part-numbers-pagination gx-pagination-dots">
          <span class="gx-hot-part-numbers-dot active" data-index="0"></span>
          <span class="gx-hot-part-numbers-dot" data-index="1"></span>
          <span class="gx-hot-part-numbers-dot" data-index="2"></span>
        </div>
      </div>
    </section>
  </div>
</section>

<?php
$jsFiles = [
  './assets/js/js-controller.js',
  './assets/js/hero-owl-carousel.js',
  './assets/js/scroll-reveal.js',
  './assets/js/infinite-scroll.js',
  './assets/js/products-main.js',
];

include_once('./includes/footer.php');
?>

 