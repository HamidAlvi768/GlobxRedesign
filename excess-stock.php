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
  './assets/css/careers.css',
  './assets/css/contact.css',
  './assets/css/sell-excess-stock.css',
];
include_once('./includes/header.php');
include_once('./includes/search_nav.php');
?>

<!-- Excess Stock Hero Section -->
<section class="gx-sell-excess-hero position-relative d-flex align-items-center">
  <!-- Background Image & Overlay -->
  <div class="gx-sell-excess-bg"></div>
  <div class="gx-sell-excess-overlay"></div>

  <!-- Central Hero Content -->
  <div class="container gx-sell-excess-content position-relative z-2">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10 text-center">
        <!-- Main Heading -->
        <h1 class="gx-sell-excess-title mb-4">Worth Your Excess Stock</h1>

        <!-- Descriptive Text -->
        <div class="gx-sell-excess-subtext mb-5">
          <p>Welcome to the GREENCHIPS Partner Portal. Europe's leading AI</p>
          <p>powered market place for high quality electronic excess stock parts. Our platform supports OEM and EMS companies</p>
          <p>in selling their excess stock globally, while offering best prices and quality to prospective buyers like electronic brokers, EMS or OEMs.</p>
        </div>

        <!-- Call-to-Action Buttons -->
        <div class="gx-sell-excess-cta d-flex justify-content-center flex-wrap">
          <a href="#" class="btn gx-btn-primary px-4 py-2 rounded">Start Now</a>
          <a href="#" class="btn gx-save-globe-btn px-4 py-2 rounded">Contact Us</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Join Platform Section -->
<section class="gx-join-platform-section gx-section-common gx-section-common--white py-10">
  <div class="container">
    <!-- Main Heading -->
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center">
        <h2 class="gx-join-platform-title">Join the platform and we help you to bring your dead stock back to live.</h2>
      </div>
    </div>
    
    <!-- Two Column Layout -->
    <div class="row align-items-center">
      <!-- Left Column: Image -->
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="gx-join-platform-image-container">
          <img src="./assets/society/plant.webp" alt="Hands holding a plant - Growth and Collaboration" class="gx-join-platform-image">
        </div>
      </div>
      
      <!-- Right Column: Features and CTA -->
      <div class="col-lg-6">
        <div class="gx-join-platform-content">
          <!-- Feature Accordion -->
          <div class="gx-feature-accordion">
            <!-- Feature 1 -->
            <div class="gx-feature-item" data-feature="1">
              <div class="gx-feature-header">
                <h3 class="gx-feature-title">Free Up Storage</h3>
                <div class="gx-feature-icon">
                  <i class="fas fa-chevron-down"></i>
                </div>
              </div>
              <div class="gx-feature-content">
                <p>Transform your excess inventory into valuable space and capital. Our platform helps you clear out dead stock efficiently while maximizing returns.</p>
              </div>
            </div>
            
            <!-- Feature 2 -->
            <div class="gx-feature-item" data-feature="2">
              <div class="gx-feature-header">
                <h3 class="gx-feature-title">High Prices through AI</h3>
                <div class="gx-feature-icon">
                  <i class="fas fa-chevron-down"></i>
                </div>
              </div>
              <div class="gx-feature-content">
                <p>Our AI-powered marketplace ensures you get the best possible prices for your excess stock by connecting you with the right buyers at the right time.</p>
              </div>
            </div>
            
            <!-- Feature 3 -->
            <div class="gx-feature-item" data-feature="3">
              <div class="gx-feature-header">
                <h3 class="gx-feature-title">A double path to sustainibility</h3>
                <div class="gx-feature-icon">
                  <i class="fas fa-chevron-down"></i>
                </div>
              </div>
              <div class="gx-feature-content">
                <p>Reduce waste and environmental impact while generating revenue. Our platform promotes circular economy principles and sustainable business practices.</p>
              </div>
            </div>
          </div>
          
          <!-- Call to Action -->
          <div class="gx-join-platform-cta">
            <p class="gx-cta-description" style="color: var(--text-dark);">Become a partner, save the planet and save valuable resources.</p>
            <button class="gx-cta-button gx-btn-primary">Contact Us Now</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Benefits Section -->
<section class="gx-benefits-section gx-section-common gx-section-common--white py-10">
  <div class="container">
    <!-- Section Header -->
    <div class="gx-section-header-common mb-5 text-center">
      <h2 class="gx-section-label-common gx-section-label-common--medium">Benefits</h2>
      <h1 class="gx-section-headline-common gx-section-headline-common--medium">Your Advantage</h1>
    </div>
    
    <!-- Benefits Grid -->
    <div class="row g-4">
      <!-- Benefit Card 1: Physical and accounting stock cleanup -->
      <div class="col-lg-4 col-md-6">
        <div class="gx-benefit-card">
          <div class="gx-benefit-icon">
            <img src="./assets/excess-stock/benifits/sparkle.png" alt="Stock Cleanup" class="gx-benefit-icon-img">
          </div>
          <div class="gx-benefit-content">
            <h3 class="gx-benefit-title">Physical and accounting stock cleanup</h3>
            <p class="gx-benefit-description">We help you to cleanup your stock physically and in terms of accounting in just a few days.</p>
          </div>
        </div>
      </div>
      
      <!-- Benefit Card 2: Monthly Payouts -->
      <div class="col-lg-4 col-md-6">
        <div class="gx-benefit-card">
          <div class="gx-benefit-icon">
            <img src="./assets/excess-stock/benifits/dollar.png" alt="Monthly Payouts" class="gx-benefit-icon-img">
          </div>
          <div class="gx-benefit-content">
            <h3 class="gx-benefit-title">Monthly Payouts</h3>
            <p class="gx-benefit-description">Automatic monthly payouts for your sold excess stock instead of spendings for scrapping.</p>
          </div>
        </div>
      </div>
      
      <!-- Benefit Card 3: Stock Savings -->
      <div class="col-lg-4 col-md-6">
        <div class="gx-benefit-card">
          <div class="gx-benefit-icon">
            <img src="./assets/excess-stock/benifits/folder.png" alt="Stock Savings" class="gx-benefit-icon-img">
          </div>
          <div class="gx-benefit-content">
            <h3 class="gx-benefit-title">Stock Savings</h3>
            <p class="gx-benefit-description">Optimizing Excess stock leads to conservation of warehouse space and a potential reduction in associated costs.</p>
          </div>
        </div>
      </div>
      
      <!-- Benefit Card 4: Sustainability contribution -->
      <div class="col-lg-4 col-md-6">
        <div class="gx-benefit-card">
          <div class="gx-benefit-icon">
            <img src="./assets/excess-stock/benifits/tree.png" alt="Sustainability" class="gx-benefit-icon-img">
          </div>
          <div class="gx-benefit-content">
            <h3 class="gx-benefit-title">Sustainability contribution</h3>
            <p class="gx-benefit-description">Reduce e-waste by reviving dead stock. We contribute on top min. 10% of our profits to support sustainability programs.</p>
          </div>
        </div>
      </div>
      
      <!-- Benefit Card 5: Insurance & Risk Management -->
      <div class="col-lg-4 col-md-6">
        <div class="gx-benefit-card">
          <div class="gx-benefit-icon">
            <img src="./assets/excess-stock/benifits/shield.png" alt="Insurance & Risk Management" class="gx-benefit-icon-img">
          </div>
          <div class="gx-benefit-content">
            <h3 class="gx-benefit-title">Insurance & Risk Management</h3>
            <p class="gx-benefit-description">Cover of insurance and commodity risk for all goods stored in GlobX fully automated warehouse.</p>
          </div>
        </div>
      </div>
      
      <!-- Benefit Card 6: Pull your stock back anytime -->
      <div class="col-lg-4 col-md-6">
        <div class="gx-benefit-card">
          <div class="gx-benefit-icon">
            <img src="./assets/excess-stock/benifits/return-arrow.png" alt="Return Stock" class="gx-benefit-icon-img">
          </div>
          <div class="gx-benefit-content">
            <h3 class="gx-benefit-title">Pull your stock back anytime</h3>
            <p class="gx-benefit-description">Own demand or no longer need our service? Pull back your stock anytime, fully or partly. We’ll ship it back free within 24 hours.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Process Section -->
<section class="gx-process-section gx-section-common gx-section-common--white py-10">
  <div class="container">
    <!-- Section Header -->
    <div class="gx-section-header-common mb-5 text-center">
      <h2 class="gx-section-label-common gx-section-label-common--medium">Process</h2>
      <h1 class="gx-section-headline-common gx-section-headline-common--medium">How does it work?</h1>
    </div>
    
    <!-- Visual Stepper -->
    <div class="gx-process-stepper mb-5">
      <div class="gx-stepper-line"></div>
      <div class="gx-stepper-progress-line"></div>
      <div class="gx-stepper-nodes">
        <div class="gx-stepper-node gx-stepper-node--active">
          <span class="gx-stepper-number">1</span>
        </div>
        <div class="gx-stepper-node">
          <span class="gx-stepper-number">2</span>
        </div>
        <div class="gx-stepper-node">
          <span class="gx-stepper-number">3</span>
        </div>
        <div class="gx-stepper-node">
          <span class="gx-stepper-number">4</span>
        </div>
      </div>
    </div>
    
    <div class="row g-4 justify-content-center" id="process-cards-container">
      <div class="col-lg-3 col-md-6">
        <div class="gx-process-card">
          <div class="gx-process-icon">
            <img src="./assets/excess-stock/features/upload.png" alt="Upload Document" class="gx-process-icon-img">
          </div>
          <h3 class="gx-process-title">Upload</h3>
          <p class="gx-process-description">Upload your excess stock list to have all your parts evaluated.</p>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6">
        <div class="gx-process-card">
          <div class="gx-process-icon">
            <img src="./assets/excess-stock/features/analysis.png" alt="Analytics" class="gx-process-icon-img">
          </div>
          <h3 class="gx-process-title">Analysis & Results</h3>
          <p class="gx-process-description">We will analyse the current market value of your parts and send you the results with a suitable offer.</p>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6">
        <div class="gx-process-card">
          <div class="gx-process-icon">
            <img src="./assets/excess-stock/features/commission.png" alt="Commission" class="gx-process-icon-img">
          </div>
          <h3 class="gx-process-title">Contract</h3>
          <p class="gx-process-description">Choose the Model that suits you the best and we will take care of the rest.</p>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6">
        <div class="gx-process-card">
          <div class="gx-process-icon">
            <img src="./assets/excess-stock/features/sale.png" alt="Sale" class="gx-process-icon-img">
          </div>
          <h3 class="gx-process-title">Pickup & Visual Examination</h3>
          <p class="gx-process-description">Pick-up and visual examination are covered by our costs, with our ISO 9001 standard quality checks ensuring that only original and intact parts are resold.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="gx-faq-section gx-section-common gx-section-common--white py-10">
  <div class="container">
    <!-- Section Header -->
    <div class="gx-section-header-common mb-5 text-center">
      <h2 class="gx-section-label-common gx-section-label-common--medium">FAQs</h2>
      <h1 class="gx-section-headline-common gx-section-headline-common--medium">Frequently Asked Questions</h1>
    </div>
    
    <!-- FAQ Accordion -->
    <div class="gx-faq-accordion">
      <!-- FAQ Item 1 -->
      <div class="gx-faq-item" data-faq="1">
        <div class="gx-faq-header">
          <h3 class="gx-faq-question">What is the difference between GlobX and other stock management provider?</h3>
          <div class="gx-faq-icon">
            <i class="fas fa-chevron-down"></i>
          </div>
        </div>
        <div class="gx-faq-content">
          <p>GlobX stands apart from other stock management providers through our AI-powered marketplace, comprehensive risk management, and commitment to sustainability. We offer automated monthly payouts, ISO 9001 quality standards, and contribute 10% of profits to sustainability programs.</p>
        </div>
      </div>
      
      <!-- FAQ Item 2 -->
      <div class="gx-faq-item" data-faq="2">
        <div class="gx-faq-header">
          <h3 class="gx-faq-question">High Prices through AI</h3>
          <div class="gx-faq-icon">
            <i class="fas fa-chevron-down"></i>
          </div>
        </div>
        <div class="gx-faq-content">
          <p>Our AI-powered marketplace analyzes real-time market data to ensure you receive the best possible prices for your excess stock. The system continuously monitors market trends and connects you with the right buyers at optimal times.</p>
        </div>
      </div>
      
      <!-- FAQ Item 3 -->
      <div class="gx-faq-item" data-faq="3">
        <div class="gx-faq-header">
          <h3 class="gx-faq-question">A double path to sustainibility</h3>
          <div class="gx-faq-icon">
            <i class="fas fa-chevron-down"></i>
          </div>
        </div>
        <div class="gx-faq-content">
          <p>We promote sustainability through two key approaches: reducing e-waste by reviving dead stock and contributing a minimum of 10% of our profits to support sustainability programs worldwide.</p>
        </div>
      </div>
      
      <!-- FAQ Item 4 -->
      <div class="gx-faq-item" data-faq="4">
        <div class="gx-faq-header">
          <h3 class="gx-faq-question">How does the pickup and examination process work?</h3>
          <div class="gx-faq-icon">
            <i class="fas fa-chevron-down"></i>
          </div>
        </div>
        <div class="gx-faq-content">
          <p>Our pickup and visual examination process is fully covered by our costs. We conduct ISO 9001 standard quality checks to ensure only original and intact parts are resold, maintaining the highest quality standards.</p>
        </div>
      </div>
      
      <!-- FAQ Item 5 -->
      <div class="gx-faq-item" data-faq="5">
        <div class="gx-faq-header">
          <h3 class="gx-faq-question">Can I retrieve my stock if needed?</h3>
          <div class="gx-faq-icon">
            <i class="fas fa-chevron-down"></i>
          </div>
        </div>
        <div class="gx-faq-content">
          <p>Yes, you can pull your stock back completely or partly at any time. We ship it back for free within 24 hours, providing you with complete flexibility and control over your inventory.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call-to-Action Block Section -->
<section class="gx-cta-section gx-section-common gx-section-common--white py-5">
  <div class="container">
    <div class="row">
      <!-- Left CTA Card -->
      <div class="col-lg-6 mb-4">
        <div class="gx-cta-card gx-cta-card--blue">
          <div class="gx-cta-content">
            <h3 class="gx-cta-heading">Evaluate your excess stock now</h3>
            <p class="gx-cta-description">
              Upload your excess stock list to our platform now and we will determine the potential for you.
            </p>
            <button class="gx-cta-btn gx-cta-btn--blue">Upload Excess Stock List</button>
          </div>
        </div>
      </div>
      <!-- Right CTA Card -->
      <div class="col-lg-6 mb-4">
        <div class="gx-cta-card gx-cta-card--orange">
          <div class="gx-cta-content">
            <h3 class="gx-cta-heading">Are you already interested?</h3>
            <p class="gx-cta-description">
              Got questions or want a demo? Book a call with our Customer Success team and explore our model and sustainability.
            </p>
            <button class="gx-cta-btn gx-cta-btn--orange">Call Us Now</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$jsFiles = [
  './assets/js/js-controller.js',
  './assets/js/nav-active.js',
  './assets/js/hero-owl-carousel.js',
  './assets/js/scroll-reveal.js',
  './assets/js/infinite-scroll.js',
  './assets/js/sell-excess-stock.js',
];

include_once('./includes/footer.php');
?> 