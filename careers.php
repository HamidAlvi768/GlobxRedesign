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
$cssFiles[] = './assets/css/careers.css';
include_once('./includes/header.php');
include_once('./includes/transparent_nav.php');
?>
    <!-- Hero Section -->
    <section class="gx-careers-hero position-relative d-flex align-items-center">
        <!-- Background Image -->
        <div class="gx-careers-bg"></div>
        
        <!-- Dark Overlay -->
        <div class="gx-careers-overlay"></div>
        
        <!-- Hero Content -->
        <div class="container gx-careers-content position-relative z-2">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10 text-center">
                    <h1 class="gx-careers-title mb-4">Shaping Futures, Building Careers</h1>
                    <div class="gx-careers-cta">
                        <a href="#" class="btn gx-btn-primary px-4 py-2">Vacancies</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Decorative Arrows -->
        <div class="gx-careers-arrows gx-arrows position-absolute">
            <img src="./assets/img/hero-arrow.png" alt="Decorative Arrows" width="180" height="150" />
        </div>
    </section>

    <!-- Job Search and Listings Section -->
    <section class="gx-job-search-section gx-section-common gx-section-common--white py-5">
        <div class="container">
            <!-- Search Section -->
            <div class="gx-search-section text-center mb-5">
                <h2 class="gx-search-heading gx-listings-heading mb-4">
                    Search <span class="gx-search-highlight">Jobs Here</span> 
                </h2>
                
                <div class="gx-search-form">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="gx-search-form-container">
                                <div class="gx-search-input-group">
                                    <input type="text" class="gx-search-input" placeholder="Keywords">
                                    <select class="gx-search-dropdown">
                                        <option value="">All Locations</option>
                                        <option value="usa">USA</option>
                                        <option value="europe">Europe</option>
                                        <option value="asia">Asia</option>
                                    </select>
                                    <button class="gx-search-btn gx-btn-primary">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Job Listings Section -->
            <div class="gx-listings-section">
                <h3 class="gx-listings-heading text-center mb-4">
                    <span class="gx-listings-highlight">Recent</span> Openings
                </h3>
                
                <div class="gx-job-cards-container">
                    <!-- Job Card 1 -->
                    <div class="gx-job-card">
                        <div class="gx-job-card-content">
                            <div class="gx-job-info">
                                <h4 class="gx-job-title">Senior Field Marketing Manager</h4>
                                <div class="gx-job-meta">
                                    <span>Permanent</span>
                                    <span class="gx-meta-separator">|</span>
                                    <span>USA</span>
                                    <span class="gx-meta-separator">|</span>
                                    <span>June 20, 2025 - July 15, 2025</span>
                                    <span class="gx-meta-separator">|</span>
                                    <span>Marketing</span>
                                </div>
                            </div>
                            <div class="gx-job-action">
                                <button class="gx-view-job-btn gx-save-globe-btn">View Job</button>
                            </div>
                        </div>
                    </div>

                    <!-- Job Card 2 -->
                    <div class="gx-job-card">
                        <div class="gx-job-card-content">
                            <div class="gx-job-info">
                                <h4 class="gx-job-title">Senior Field Marketing Manager</h4>
                                <div class="gx-job-meta">
                                    <span>Permanent</span>
                                    <span class="gx-meta-separator">|</span>
                                    <span>USA</span>
                                    <span class="gx-meta-separator">|</span>
                                    <span>June 20, 2025 - July 15, 2025</span>
                                    <span class="gx-meta-separator">|</span>
                                    <span>Marketing</span>
                                </div>
                            </div>
                            <div class="gx-job-action">
                                <button class="gx-view-job-btn gx-save-globe-btn">View Job</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Load More Button -->
                <div class="gx-load-more-container text-center mt-4">
                    <button class="gx-load-more-btn gx-btn-primary">Load More</button>
                </div>
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
        'heading' => 'Apply proactively',
        'description' => 'Send us an unsolicited application! Show us your talent and motivation. We look forward to hearing from you!',
        'buttonText' => 'Send an unsolicited application now',
        'buttonLink' => '#',
        'buttonClass' => 'gx-cta-btn--orange'
    ];
    
    include_once('./includes/_cta-section.php');
    ?>

     <!-- Footer -->
<?php
$jsFiles = [
    './assets/js/js-controller.js',
    './assets/js/nav-active.js',
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