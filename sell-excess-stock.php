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

<!-- Sell Excess Stock Hero Section -->
<?php
$heroTitle = 'Sell your Excess Stock';
$heroDescription = 'GlobX is Germany\'s leading AI powered market place for high quality electronic excess stock parts. Our platform supports OEM and EMS companies in selling their excess stock globally, while offering best prices and quality to prospective buyers.';
$heroCtaButtons = [
    [
        'text' => 'Learn More',
        'link' => '#gx-how-it-works',
        'class' => 'gx-btn-primary',
        'anchorTarget' => 'gx-how-it-works'
    ],
    [
        'text' => 'Download Table Example',
        'link' => '#gx-download-banner',
        'class' => 'gx-save-globe-btn gx-download-cta-btn',
        'anchorTarget' => 'gx-download-banner'
    ]
];

include_once('./includes/_excess-stock-hero.php');
?>

<!-- How It Works Section -->
<section id="gx-how-it-works" class="gx-how-it-works-section gx-section-common gx-section-common--white py-10">
  <div class="container">
    <!-- Main Heading -->
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center">
        <h2 class="gx-how-it-works-title">What's your <span class="gx-text-primary">Excess Stock</span> Worth</h2>
      </div>
    </div>
    
    <!-- Five Steps -->
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="row g-4">
          <!-- Step 1: Download Example -->
          <div class="col-lg col-md-4 col-sm-6">
            <div class="gx-step-card text-center">
              <div class="gx-step-icon mb-3">
                <img src="./assets/img/excess-stock/features/file-download.png" alt="Download Example" class="gx-step-icon-img">
              </div>
              <h4 class="gx-step-heading mb-2">Download Example</h4>
              <p class="gx-step-description">To structure your data correctly, please download our <a href="#gx-download-banner" class="gx-text-warning" data-anchor-target="gx-download-banner">example file</a></p>
            </div>
          </div>
          
          <!-- Step 2: Upload -->
          <div class="col-lg col-md-4 col-sm-6">
            <div class="gx-step-card text-center">
              <div class="gx-step-icon mb-3">
                <img src="./assets/img/excess-stock/features/upload.png" alt="Upload" class="gx-step-icon-img">
              </div>
              <h4 class="gx-step-heading mb-2">Upload</h4>
              <p class="gx-step-description">Upload your excess stock list to have all your parts evaluated.</p>
            </div>
          </div>
          
          <!-- Step 3: Analysis And Results -->
          <div class="col-lg col-md-4 col-sm-6">
            <div class="gx-step-card text-center">
              <div class="gx-step-icon mb-3">
                <img src="./assets/img/excess-stock/features/analysis.png" alt="Analysis And Results" class="gx-step-icon-img">
              </div>
              <h4 class="gx-step-heading mb-2">Analysis And Results</h4>
              <p class="gx-step-description">We analyse the current market value of your parts and create a suitable offer for you.</p>
            </div>
          </div>
          
          <!-- Step 4: Pickup And Visual Examination -->
          <div class="col-lg col-md-4 col-sm-6">
            <div class="gx-step-card text-center">
              <div class="gx-step-icon mb-3">
                <img src="./assets/img/excess-stock/features/commission.png" alt="Pickup And Visual Examination" class="gx-step-icon-img">
              </div>
              <h4 class="gx-step-heading mb-2">Pickup And Visual Examination</h4>
              <p class="gx-step-description">The commission is calculated automatically and can be viewed online.</p>
            </div>
          </div>
          
          <!-- Step 5: Sale -->
          <div class="col-lg col-md-4 col-sm-6">
            <div class="gx-step-card text-center">
              <div class="gx-step-icon mb-3">
                <img src="./assets/img/excess-stock/features/sale.png" alt="Sale" class="gx-step-icon-img">
              </div>
              <h4 class="gx-step-heading mb-2">Sale</h4>
              <p class="gx-step-description">You choose the model that suits you and we take care of the rest.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Form Section -->
<section id="gx-form-section" class="gx-form-section gx-section-common gx-section-common--white py-10">
  <div class="container py-5 shadow-sm rounded-3">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <!-- Introductory Paragraph -->
        <div class="gx-form-intro mb-5">
          <p class="gx-form-intro-text">
            Upload your electronic excess stock list, ensuring it includes only new and unused parts no broker lists accepted. Receive a free market value analysis and the best offers for your components.
          </p>
        </div>

        <!-- Form -->
        <form class="gx-upload-form gx-contact-form">
          <!-- Company Field -->
          <div class="gx-form-group gx-form-group-custom">
            <label for="company" class="gx-form-label-custom">Company</label>
            <input type="text" id="company" name="company" class="gx-form-input-custom" placeholder="Company" autocomplete="organization">
          </div>

          <!-- Name Fields (Side by Side) -->
          <div class="gx-form-row">
            <div class="gx-form-group gx-form-half gx-form-group-custom">
              <label for="firstName" class="gx-form-label-custom">First Name</label>
              <input type="text" id="firstName" name="firstName" class="gx-form-input-custom" placeholder="First Name" autocomplete="given-name">
            </div>
            <div class="gx-form-group gx-form-half gx-form-group-custom">
              <label for="lastName" class="gx-form-label-custom">Last Name</label>
              <input type="text" id="lastName" name="lastName" class="gx-form-input-custom" placeholder="Last Name" autocomplete="family-name">
            </div>
          </div>

          <!-- Email Field -->
          <div class="gx-form-group gx-form-group-custom">
            <label for="email" class="gx-form-label-custom">Email</label>
            <input type="email" id="email" name="email" class="gx-form-input-custom" placeholder="Email" autocomplete="email">
          </div>

          <!-- Message Field -->
          <div class="gx-form-group gx-form-group-custom">
            <label for="message" class="gx-form-label-custom">Message</label>
            <textarea id="message" name="message" class="gx-form-textarea-custom" placeholder="Message" rows="4"></textarea>
          </div>

          <!-- File Upload Area -->
          <div class="gx-file-upload-area">
            <div class="gx-file-upload-zone" id="fileUploadZone">
              <div class="gx-file-upload-content">
                <div class="gx-file-upload-icon mb-3">
                  <i class="fas fa-file"></i>
                </div>
                <p class="gx-file-upload-text">
                  Drop Excel File here or <a href="#" class="gx-file-upload-link" onclick="document.getElementById('fileInput').click()">Choose a File</a>
                </p>
              </div>
              <input type="file" id="fileInput" name="excelFile" accept=".xlsx,.xls" class="gx-file-input" style="display: none;">
            </div>
          </div>

          <!-- Consent Notice -->
          <div class="gx-consent-notice">
            <p class="gx-consent-text">
              By clicking upload below, you consent to allow GREENCHIPS to store and process the personal information submitted above to provide you with the content requested.
            </p>
          </div>

          <!-- Submit Button -->
          <button type="submit" class="gx-submit-btn-custom gx-contact-submit gx-btn-primary px-4 py-2">Upload Now</button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Download Banner Section -->
<section id="gx-download-banner" class="gx-download-banner-section gx-section-common gx-section-common--white py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="gx-download-banner">
          <div class="row align-items-center">
            <!-- File Icon -->
            <div class="col-lg-2 col-md-3 col-sm-4 text-center">
              <div class="gx-download-icon">
                <img src="./assets/img/excess-stock/xl.png" alt="Excel File" class="gx-excel-icon-img">
              </div>
            </div>
            
            <!-- Descriptive Text -->
            <div class="col-lg-7 col-md-6 col-sm-8">
              <div class="gx-download-content">
                <h3 class="gx-download-title">Table Example</h3>
                <p class="gx-download-description">
                  You can download the attached example and used them as a starting point for your own file.
                </p>
              </div>
            </div>
            
            <!-- Download Button -->
            <div class="col-lg-3 col-md-3 col-sm-12 text-center">
              <div class="gx-download-action">
                <button class="gx-download-btn" onclick="downloadTableExample()">
                  Download Now
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call-to-Action Block Section -->
<?php
$leftCard = [
    'heading' => 'Join Germany\'s leading market place',
    'description' => 'GlobX is Germany\'s top AI-powered marketplace for excess electronic parts. Turn dead stock into profit.',
    'buttonText' => 'Join Now',
    'buttonLink' => '#',
    'buttonClass' => 'gx-cta-btn--blue'
];

$rightCard = [
    'heading' => 'Are you already interested?',
    'description' => 'Got questions or want a demo? Book a call with our Customer Success team and explore our model and sustainability.',
    'buttonText' => 'Call Us Now',
    'buttonLink' => '#',
    'buttonClass' => 'gx-cta-btn--orange'
];

include_once('./includes/_cta-section.php');
?>

<?php
$jsFiles = [
  './assets/js/js-controller.js',
  './assets/js/nav-active.js',
  './assets/js/hero-owl-carousel.js',
  './assets/js/scroll-reveal.js',
  './assets/js/infinite-scroll.js',
  './assets/js/sell-excess-stock.js',
  './assets/js/anchor-navigation.js',
];

include_once('./includes/footer.php');
?> 