<?php
// Function to determine current page and apply active navigation state
function getCurrentPage() {
    $path = $_SERVER['REQUEST_URI'];
    $filename = basename($path);
    
    // Map page files to navigation identifiers
    $pageMap = [
        'index.php' => 'home',
        'about-us.php' => 'company',
        'excess-stock.php' => 'services',
        'old-market-industry.php' => 'markets',
        'products-main.php' => 'products',
        'pn-listing.php' => 'products',
        'pn-detail.php' => 'products',
        'sell-excess-stock.php' => 'sell-excess',
        'contact.php' => 'contact'
    ];
    
    return $pageMap[$filename] ?? null;
}

// Get current page identifier
$currentPage = getCurrentPage();

// Function to check if navigation item should be active
function isNavActive($pageIdentifier, $currentPage) {
    return $pageIdentifier === $currentPage;
}
?>

  <!-- Top Bar -->
  <div class="gx-top-bar text-center py-1 px-2">
      <span class="gx-top-bar-text">2979 trees planted by GlobX this year! Join <a href="#" class="gx-top-bar-link">Our Campaign</a> and help us saving the globe</span>
  </div>

  <style>
      /* Ensure active states are visible */
      .gx-nav-links .nav-link.active,
      .gx-nav-links .nav-link.gx-nav-active,
      .gx-nav-links .nav-item.active .nav-link {
          color: var(--primary, #007bff) !important;
      }
      
      /* Active chevron color */
      .gx-nav-links .nav-link.active .gx-chevron svg,
      .gx-nav-links .nav-link.gx-nav-active .gx-chevron svg,
      .gx-nav-links .nav-item.active .nav-link .gx-chevron svg {
          color: var(--primary, #007bff) !important;
      }
  </style>

  <!-- Header/Navbar -->
  <nav class="navbar navbar-expand-lg gx-navbar py-3">
      <div class="container align-items-center">
          <!-- Logo -->
          <a class="navbar-brand d-flex align-items-center gx-logo" href="./index.php">
              <img src="./assets/img/logo.png" alt="GX Logo" height="48" />
          </a>
          <!-- Navbar Toggler for Mobile -->
          <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <!-- Nav Links and Flag Selector -->
          <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
              <ul class="navbar-nav gx-nav-links">
                  <li class="nav-item <?php echo isNavActive('company', $currentPage) ? 'active' : ''; ?>">
                      <a class="nav-link <?php echo isNavActive('company', $currentPage) ? 'active gx-nav-active' : ''; ?>" href="./about-us.php">
                          Company <span class="ms-1 align-middle gx-chevron"><svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <polyline points="2,2 6,6 10,2" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round" />
                              </svg></span>
                      </a>
                  </li>
                  <li class="nav-item <?php echo isNavActive('services', $currentPage) ? 'active' : ''; ?>">
                      <a class="nav-link <?php echo isNavActive('services', $currentPage) ? 'active gx-nav-active' : ''; ?>" href="./excess-stock.php">
                          Services <span class="ms-1 align-middle gx-chevron"><svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <polyline points="2,2 6,6 10,2" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round" />
                              </svg></span>
                      </a>
                  </li>
                  <li class="nav-item <?php echo isNavActive('markets', $currentPage) ? 'active' : ''; ?>">
                      <a class="nav-link <?php echo isNavActive('markets', $currentPage) ? 'active gx-nav-active' : ''; ?>" href="./index.php#gx-markets-industries-section" data-anchor-target="gx-markets-industries-section">
                          Markets & Ind <span class="ms-1 align-middle gx-chevron"><svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <polyline points="2,2 6,6 10,2" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round" />
                              </svg></span>
                      </a>
                  </li>
                  <li class="nav-item <?php echo isNavActive('products', $currentPage) ? 'active' : ''; ?>">
                      <a class="nav-link <?php echo isNavActive('products', $currentPage) ? 'active gx-nav-active' : ''; ?>" href="./products-main.php">
                          Products <span class="ms-1 align-middle gx-chevron"><svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <polyline points="2,2 6,6 10,2" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round" />
                              </svg></span>
                      </a>
                  </li>
                  <li class="nav-item <?php echo isNavActive('sell-excess', $currentPage) ? 'active' : ''; ?>">
                      <a class="nav-link <?php echo isNavActive('sell-excess', $currentPage) ? 'active gx-nav-active' : ''; ?>" href="./sell-excess-stock.php">
                          Sell Excess Stock
                      </a>
                  </li>
                  <li class="nav-item <?php echo isNavActive('contact', $currentPage) ? 'active' : ''; ?>">
                      <a class="nav-link <?php echo isNavActive('contact', $currentPage) ? 'active gx-nav-active' : ''; ?>" href="./contact.php">
                          Contact
                      </a>
                  </li>
              </ul>
              <!-- Flag Selector (move inside collapse for mobile) -->
              <div class="gx-flag-selector d-flex align-items-center ms-lg-3 mt-3 mt-lg-0">
                  <button class="btn btn-light gx-flag-btn px-2 py-1 d-flex align-items-center">
                      <img src="./assets/img/us-flag-small.webp" alt="US Flag" height="20" />
                      <span class="gx-flag-chevron">&#9662;</span>
                  </button>
              </div>
          </div>
      </div>
  </nav>

  <!-- Sticky Navigation Bar (appears on scroll up) -->
  <nav class="navbar navbar-expand-lg gx-navbar gx-navbar--application py-3" id="gxStickyNav">
      <div class="container align-items-center">
          <!-- Logo -->
          <a class="navbar-brand d-flex align-items-center gx-logo" href="./index.php">
              <img src="./assets/img/navbar/colored-logo.png" alt="GX Logo" height="48"/>
          </a>
          <!-- Navbar Toggler for Mobile -->
          <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavSticky" aria-controls="navbarNavSticky" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <!-- Nav Links and Flag Selector -->
          <div class="collapse navbar-collapse justify-content-between" id="navbarNavSticky">
              <ul class="navbar-nav gx-nav-links">
                  <li class="nav-item <?php echo isNavActive('company', $currentPage) ? 'active' : ''; ?>">
                      <a class="nav-link <?php echo isNavActive('company', $currentPage) ? 'active gx-nav-active' : ''; ?>" href="./about-us.php">
                          Company <span class="ms-1 align-middle gx-chevron"><svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg"><polyline points="2,2 6,6 10,2" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                      </a>
                  </li>
                  <li class="nav-item <?php echo isNavActive('services', $currentPage) ? 'active' : ''; ?>">
                      <a class="nav-link <?php echo isNavActive('services', $currentPage) ? 'active gx-nav-active' : ''; ?>" href="./excess-stock.php">
                          Services <span class="ms-1 align-middle gx-chevron"><svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg"><polyline points="2,2 6,6 10,2" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                      </a>
                  </li>
                  <li class="nav-item <?php echo isNavActive('markets', $currentPage) ? 'active' : ''; ?>">
                      <a class="nav-link <?php echo isNavActive('markets', $currentPage) ? 'active gx-nav-active' : ''; ?>" href="./index.php#gx-markets-industries-section" data-anchor-target="gx-markets-industries-section">
                          Markets & Ind <span class="ms-1 align-middle gx-chevron"><svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg"><polyline points="2,2 6,6 10,2" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                      </a>
                  </li>
                  <li class="nav-item <?php echo isNavActive('products', $currentPage) ? 'active' : ''; ?>">
                      <a class="nav-link <?php echo isNavActive('products', $currentPage) ? 'active gx-nav-active' : ''; ?>" href="./products-main.php">
                          Products <span class="ms-1 align-middle gx-chevron"><svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg"><polyline points="2,2 6,6 10,2" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                      </a>
                  </li>
                  <li class="nav-item <?php echo isNavActive('sell-excess', $currentPage) ? 'active' : ''; ?>">
                      <a class="nav-link <?php echo isNavActive('sell-excess', $currentPage) ? 'active gx-nav-active' : ''; ?>" href="./sell-excess-stock.php">
                          Sell Excess Stock
                      </a>
                  </li>
                  <li class="nav-item <?php echo isNavActive('contact', $currentPage) ? 'active' : ''; ?>">
                      <a class="nav-link <?php echo isNavActive('contact', $currentPage) ? 'active gx-nav-active' : ''; ?>" href="./contact.php">
                          Contact
                      </a>
                  </li>
              </ul>
              <!-- Flag Selector -->
              <div class="gx-flag-selector d-flex align-items-center ms-lg-3 mt-3 mt-lg-0">
                  <button class="btn btn-light gx-flag-btn px-2 py-1 d-flex align-items-center">
                      <img src="./assets/img/us-flag-small.webp" alt="US Flag" height="20" />
                      <span class="gx-flag-chevron">&#9662;</span>
                  </button>
              </div>
          </div>
      </div>
  </nav>