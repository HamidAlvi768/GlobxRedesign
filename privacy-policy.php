<?php
$cssFiles = [
  './assets/css/base.css',
  './assets/css/shared-utilities.css',
  './assets/css/js-controller.css',
  './assets/css/privacy-policy.css',
  './assets/css/contact.css',
  './assets/css/footer.css',
];

$jsFiles = [
  './assets/js/js-controller.js',
  './assets/js/nav-active.js',
  './assets/js/scroll-reveal.js',
];

include_once('./includes/header.php');
include_once('./includes/nav.php');
?>

<!-- Page Title Section (Same as Contact Banner) -->
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
                        Privacy Policy
                    </h1>
                    <p class="gx-content-subtitle-common">
                        Your privacy is important to us. Learn how we collect, use, and protect your information.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Privacy Policy Content -->
<section class="gx-privacy-section gx-reveal-section gx-section-common">
  <div class="container">
    <div class="gx-privacy-content gx-reveal-content">
      
      <!-- Last Updated -->
      <div class="gx-privacy-updated gx-reveal-slide-left">
        <p class="gx-privacy-date">Last updated: December 2024</p>
      </div>

      <!-- Introduction -->
      <div class="gx-privacy-intro gx-reveal-slide-left">
        <h2 class="gx-privacy-heading">Introduction</h2>
        <p class="gx-privacy-text">
          GlobX ("we," "our," or "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website, use our services, or interact with us in any way.
        </p>
        <p class="gx-privacy-text">
          By using our services, you agree to the collection and use of information in accordance with this policy. If you do not agree with our policies and practices, please do not use our services.
        </p>
      </div>

      <!-- Information We Collect -->
      <div class="gx-privacy-section-block gx-reveal-slide-left">
        <h3 class="gx-privacy-subheading">Information We Collect</h3>
        
        <div class="gx-privacy-subsection">
          <h4 class="gx-privacy-subtitle">Personal Information</h4>
          <p class="gx-privacy-text">We may collect personal information that you voluntarily provide to us, including:</p>
          <ul class="gx-privacy-list">
            <li>Name and contact information (email, phone number, address)</li>
            <li>Company name and job title</li>
            <li>Business information and requirements</li>
            <li>Communication preferences</li>
          </ul>
        </div>

        <div class="gx-privacy-subsection">
          <h4 class="gx-privacy-subtitle">Automatically Collected Information</h4>
          <p class="gx-privacy-text">When you visit our website, we automatically collect certain information, including:</p>
          <ul class="gx-privacy-list">
            <li>IP address and browser type</li>
            <li>Device information and operating system</li>
            <li>Pages visited and time spent on our site</li>
            <li>Referring website and search terms</li>
          </ul>
        </div>

        <div class="gx-privacy-subsection">
          <h4 class="gx-privacy-subtitle">Cookies and Tracking Technologies</h4>
          <p class="gx-privacy-text">We use cookies and similar tracking technologies to enhance your experience and analyze website usage. You can control cookie settings through your browser preferences.</p>
        </div>
      </div>

      <!-- How We Use Your Information -->
      <div class="gx-privacy-section-block gx-reveal-slide-right">
        <h3 class="gx-privacy-subheading">How We Use Your Information</h3>
        <p class="gx-privacy-text">We use the information we collect for various purposes, including:</p>
        <ul class="gx-privacy-list">
          <li>Providing and improving our services</li>
          <li>Communicating with you about our services</li>
          <li>Processing your requests and inquiries</li>
          <li>Analyzing website usage and trends</li>
          <li>Ensuring security and preventing fraud</li>
          <li>Complying with legal obligations</li>
        </ul>
      </div>

      <!-- Information Sharing -->
      <div class="gx-privacy-section-block gx-reveal-slide-left">
        <h3 class="gx-privacy-subheading">Information Sharing and Disclosure</h3>
        <p class="gx-privacy-text">We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except in the following circumstances:</p>
        <ul class="gx-privacy-list">
          <li><strong>Service Providers:</strong> We may share information with trusted third-party service providers who assist us in operating our website and providing services</li>
          <li><strong>Legal Requirements:</strong> We may disclose information when required by law or to protect our rights and safety</li>
          <li><strong>Business Transfers:</strong> In the event of a merger, acquisition, or sale of assets, your information may be transferred</li>
          <li><strong>Consent:</strong> We may share information with your explicit consent</li>
        </ul>
      </div>

      <!-- Data Security -->
      <div class="gx-privacy-section-block gx-reveal-slide-right">
        <h3 class="gx-privacy-subheading">Data Security</h3>
        <p class="gx-privacy-text">We implement appropriate technical and organizational security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet or electronic storage is 100% secure.</p>
        <p class="gx-privacy-text">We regularly review and update our security practices to ensure the protection of your information.</p>
      </div>

      <!-- Your Rights -->
      <div class="gx-privacy-section-block gx-reveal-slide-left">
        <h3 class="gx-privacy-subheading">Your Rights and Choices</h3>
        <p class="gx-privacy-text">Depending on your location, you may have certain rights regarding your personal information:</p>
        <ul class="gx-privacy-list">
          <li><strong>Access:</strong> Request access to your personal information</li>
          <li><strong>Correction:</strong> Request correction of inaccurate information</li>
          <li><strong>Deletion:</strong> Request deletion of your personal information</li>
          <li><strong>Portability:</strong> Request a copy of your data in a portable format</li>
          <li><strong>Opt-out:</strong> Unsubscribe from marketing communications</li>
        </ul>
        <p class="gx-privacy-text">To exercise these rights, please contact us using the information provided below.</p>
      </div>

      <!-- Data Retention -->
      <div class="gx-privacy-section-block gx-reveal-slide-right">
        <h3 class="gx-privacy-subheading">Data Retention</h3>
        <p class="gx-privacy-text">We retain your personal information for as long as necessary to fulfill the purposes outlined in this Privacy Policy, unless a longer retention period is required or permitted by law. When we no longer need your information, we will securely delete or anonymize it.</p>
      </div>

      <!-- International Transfers -->
      <div class="gx-privacy-section-block gx-reveal-slide-left">
        <h3 class="gx-privacy-subheading">International Data Transfers</h3>
        <p class="gx-privacy-text">Your information may be transferred to and processed in countries other than your own. We ensure that such transfers comply with applicable data protection laws and implement appropriate safeguards to protect your information.</p>
      </div>

      <!-- Children's Privacy -->
      <div class="gx-privacy-section-block gx-reveal-slide-right">
        <h3 class="gx-privacy-subheading">Children's Privacy</h3>
        <p class="gx-privacy-text">Our services are not intended for children under the age of 16. We do not knowingly collect personal information from children under 16. If you believe we have collected information from a child under 16, please contact us immediately.</p>
      </div>

      <!-- Third-Party Links -->
      <div class="gx-privacy-section-block gx-reveal-slide-left">
        <h3 class="gx-privacy-subheading">Third-Party Links</h3>
        <p class="gx-privacy-text">Our website may contain links to third-party websites. We are not responsible for the privacy practices or content of these websites. We encourage you to review the privacy policies of any third-party sites you visit.</p>
      </div>

      <!-- Changes to Privacy Policy -->
      <div class="gx-privacy-section-block gx-reveal-slide-right">
        <h3 class="gx-privacy-subheading">Changes to This Privacy Policy</h3>
        <p class="gx-privacy-text">We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page and updating the "Last updated" date. We encourage you to review this Privacy Policy periodically.</p>
      </div>

      <!-- Contact Information -->
      <div class="gx-privacy-section-block gx-reveal-slide-left">
        <h3 class="gx-privacy-subheading">Contact Us</h3>
        <p class="gx-privacy-text">If you have any questions about this Privacy Policy or our data practices, please contact us:</p>
        <div class="gx-privacy-contact-info">
          <p><strong>Email:</strong> privacy@globx.com</p>
          <p><strong>Phone:</strong> +1 (555) 123-4567</p>
          <p><strong>Address:</strong> 123 Business Street, Suite 100, City, State 12345</p>
        </div>
      </div>

      <!-- Back to Top Button -->
      <div class="gx-privacy-back-to-top gx-reveal-slide-left">
        <a href="#" class="gx-btn-primary" onclick="window.scrollTo({top: 0, behavior: 'smooth'}); return false;">
          <i class="fas fa-arrow-up me-2"></i>Back to Top
        </a>
      </div>

    </div>
  </div>
</section>

<?php include_once('./includes/footer.php'); ?>
