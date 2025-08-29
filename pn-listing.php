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
];
$cssFiles[] = './assets/css/pn-listing.css';

include_once('./includes/header.php');
include_once('./includes/search_nav.php');
?>
<!-- Main Content Section -->
<section class="gx-products-section">
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
            'totalPages' => 181,
            'showEllipsis' => true
        ];

        include_once('./includes/_results-section.php');
        ?>
    </div>
</section>
<?php
$jsFiles = [
  './assets/js/js-controller.js',
  './assets/js/nav-active.js',
  './assets/js/scroll-reveal.js',
  './assets/js/pn-detail.js',
];

include_once('./includes/footer.php');
?> 