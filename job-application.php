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
$cssFiles[] = './assets/css/job-application.css';
include_once('./includes/header.php');
include_once('./includes/nav.php');
?>

    <!-- Main Form Area -->
    <section class="gx-application-form-section py-5">
        <!-- Banner Area -->
        <div class="gx-form-banner text-center mb-4">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <h1 class="gx-form-title">Send an Unsolicited Application now</h1>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="gx-form-chevron">
                        <img src="./assets/img/problem-arrow.png" alt="Decorative Chevron" width="180" height="180" />
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <!-- Application Form -->
            <div class="gx-application-form-container">
                <form class="gx-application-form">
                    <!-- Section 1: Personal Data -->
                    <div class="gx-form-section">
                        <h3 class="gx-form-section-title">1. Personal Data</h3>
                        
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="gender" class="gx-form-label required">Gender</label>
                                <select class="gx-form-select" id="gender" required>
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="firstName" class="gx-form-label required">First name</label>
                                <input type="text" class="gx-form-input" id="firstName" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="lastName" class="gx-form-label required">Last name</label>
                                <input type="text" class="gx-form-input" id="lastName" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="email" class="gx-form-label required">Email</label>
                                <input type="email" class="gx-form-input" id="email" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="gx-form-label required">Telephone number</label>
                                <input type="tel" class="gx-form-input" id="phone" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="about" class="gx-form-label">Tell us something about yourself</label>
                            <textarea class="gx-form-textarea" id="about" rows="4"></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="salary" class="gx-form-label">Deine Gehaltsvorstellung</label>
                            <input type="text" class="gx-form-input" id="salary">
                        </div>
                    </div>

                    <!-- Section 2: CV -->
                    <div class="gx-form-section">
                        <h3 class="gx-form-section-title">2. CV</h3>
                        
                        <div class="gx-file-upload-container mb-3">
                            <label class="gx-form-label required">Upload application documents</label>
                            <div class="gx-file-upload">
                                <i class="fas fa-arrow-up gx-upload-icon"></i>
                                <p class="gx-upload-text">Upload application documents</p>
                                <p class="gx-upload-details">Maximum file size: 8MB</p>
                                <input type="file" class="gx-file-input" accept=".pdf" required>
                            </div>
                            <p class="gx-upload-details mt-2">PDF files only.</p>
                        </div>
                        
                        <div class="mb-3">
                            <label for="linkedin" class="gx-form-label">Or enter the URL to your Linkedin profile</label>
                            <input type="url" class="gx-form-input" id="linkedin">
                        </div>
                    </div>

                    <!-- Section 3: Further Information -->
                    <div class="gx-form-section">
                        <h3 class="gx-form-section-title">3. Further Information</h3>
                        
                        <div class="gx-file-upload-container mb-3">
                            <div class="gx-file-upload">
                                <i class="fas fa-arrow-up gx-upload-icon"></i>
                                <p class="gx-upload-text">Here you can upload your cover letter, references, work samples, etc</p>
                                <p class="gx-upload-details">Maximum file size: 5MB</p>
                                <input type="file" class="gx-file-input" accept=".pdf,.doc,.docx">
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="workSamples" class="gx-form-label">And here is space for a URL to work samples etc.</label>
                            <input type="url" class="gx-form-input" id="workSamples">
                        </div>
                    </div>

                    <!-- Section 4: How did you hear about us? -->
                    <div class="gx-form-section">
                        <h3 class="gx-form-section-title">4. How did you hear about us?</h3>
                        
                        <div class="gx-radio-group">
                            <label class="gx-form-label required">Select how you heard about us</label>
                            <div class="gx-radio-item">
                                <input type="radio" id="linkedin-source" name="source" value="linkedin" required>
                                <label for="linkedin-source">Linkedin</label>
                            </div>
                            <div class="gx-radio-item">
                                <input type="radio" id="career-fair" name="source" value="career-fair" required>
                                <label for="career-fair">Career fair</label>
                            </div>
                            <div class="gx-radio-item">
                                <input type="radio" id="job-portal" name="source" value="job-portal" required>
                                <label for="job-portal">Job portal</label>
                            </div>
                            <div class="gx-radio-item">
                                <input type="radio" id="personal-recommendation" name="source" value="personal-recommendation" required>
                                <label for="personal-recommendation">Personal recommendation</label>
                            </div>
                            <div class="gx-radio-item">
                                <input type="radio" id="other-source" name="source" value="other" required>
                                <label for="other-source">Other</label>
                            </div>
                        </div>
                    </div>

                    <!-- Privacy Policy -->
                    <div class="gx-privacy-section mb-4">
                        <h3 class="gx-privacy-heading">Privacy Policy</h3>
                        <p class="gx-privacy-text">
                            By submitting this application, you agree to our privacy policy. Your data will be processed by 
                            <a href="#" class="gx-privacy-link">GlobX GmbH</a> in accordance with our 
                            <a href="#" class="gx-privacy-link">privacy policy</a>.
                        </p>
                        
                        <div class="gx-checkbox-item">
                            <input type="checkbox" id="privacy-consent" required>
                            <label for="privacy-consent" class="required">I accept the privacy policy of GlobX GmbH</label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="gx-form-submit">
                        <button type="submit" class="gx-submit-btn gx-btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Dual CTA Section -->
    <?php
    $leftCard = [
        'heading' => 'Any Questions?',
        'description' => 'Our recruiting team will be happy to answer any questions or provide further information.',
        'buttonText' => 'Call Us Now',
        'buttonLink' => '#',
        'buttonClass' => 'gx-cta-btn--blue'
    ];
    
    $rightCard = [
        'heading' => 'Join Us',
        'description' => 'Join GlobX and be part of a team that\'s making a real impact in the supply chain and logistics industry.',
        'buttonLink' => '#',
        'buttonText' => 'View Jobs',
        'buttonClass' => 'gx-cta-btn--orange'
    ];
    
    include_once('./includes/_cta-section.php');
    ?>

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