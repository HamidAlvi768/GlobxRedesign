<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Globx Project</title>
  <link rel="icon" href="favicon.ico">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <!-- Top Bar -->
  <div class="gx-top-bar text-center py-1 px-2">
    <span class="gx-top-bar-text">2979 trees planted by GlobX this year! Join <a href="#" class="gx-top-bar-link">Our Campaign</a> and help us saving the globe</span>
  </div>

  <!-- Header/Navbar -->
  <nav class="navbar navbar-expand-lg gx-navbar py-3">
    <div class="container align-items-center">
      <!-- Logo -->
      <a class="navbar-brand d-flex align-items-center gx-logo" href="#">
        <img src="./assets/logo.png" alt="GX Logo" height="48"/>
      </a>
      <!-- Navbar Toggler for Mobile -->
      <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Nav Links and Flag Selector -->
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav gx-nav-links">
          <li class="nav-item"><a class="nav-link" href="#">Company <span class="ms-1 align-middle gx-chevron"><svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg"><polyline points="2,2 6,6 10,2" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg></span></a></li>
          <li class="nav-item"><a class="nav-link" href="#">Services <span class="ms-1 align-middle gx-chevron"><svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg"><polyline points="2,2 6,6 10,2" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg></span></a></li>
          <li class="nav-item"><a class="nav-link" href="#">Markets & Ind <span class="ms-1 align-middle gx-chevron"><svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg"><polyline points="2,2 6,6 10,2" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg></span></a></li>
          <li class="nav-item"><a class="nav-link" href="#">Products <span class="ms-1 align-middle gx-chevron"><svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg"><polyline points="2,2 6,6 10,2" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg></span></a></li>
          <li class="nav-item"><a class="nav-link" href="#">Sell Excess Stock</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
        <!-- Flag Selector (move inside collapse for mobile) -->
        <div class="gx-flag-selector d-flex align-items-center ms-lg-3 mt-3 mt-lg-0">
          <button class="btn btn-light gx-flag-btn px-2 py-1 d-flex align-items-center">
            <img src="./assets/us-flag-small.jpg" alt="US Flag" height="20" />
            <span class="gx-flag-chevron">&#9662;</span>
          </button>
        </div>
      </div>
    </div>
  </nav>

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
            <img src="./assets/hero-arrow.png" alt="Decorative Arrows" width="180" height="120" />
          </div>
          <!-- Hero Slide Content Wrapper -->
          <div class="gx-hero-slide-content position-relative">
            <div class="gx-hero-slide">
              <h1 class="gx-hero-title fw-bold mb-3">Your Supply Chain Specialist</h1>
              <p class="gx-hero-subtext mb-4">GlobX will get you the missing components to keep your production running no matter how difficult the situation. As supply chain experts, we master even the biggest crises with ease and bring them to a smooth production flow.</p>
            </div>
          </div>
          <!-- Learn More Button -->
          <a href="#" class="btn gx-btn-primary px-4 py-2">Learn More</a>
          <!-- Pagination Dots (same as sidebar) -->
          <div class="gx-sidebar-pagination d-flex justify-content-start align-items-center mt-4 opacity-75">
            <span class="gx-dot"></span>
            <span class="gx-dot active"></span>
            <span class="gx-dot"></span>
          </div>
        </div>
        <!-- Right: Sidebar Card -->
        <div class="col-lg-5 col-md-12 gx-hero-right d-flex align-items-center justify-content-center">
          <div class="gx-sidebar-card shadow">
            <div class="gx-sidebar-title text-center mb-4">Search by Categories</div>
            <div class="gx-sidebar-slide-content position-relative">
              <div class="gx-sidebar-slide">
                <div class="gx-sidebar-grid mb-4">
                  <!-- grid rows/cells will be rendered by JS -->
                </div>
              </div>
            </div>
            <!-- Pagination Dots -->
            <div class="gx-sidebar-pagination d-flex justify-content-center align-items-center">
              <span class="gx-dot"></span>
              <span class="gx-dot active"></span>
              <span class="gx-dot"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Hero Footer: Partners Row -->
  <div class="gx-hero-footer bg-white d-flex justify-content-around align-items-center">
    <div class="gx-partner-logo mx-4"><img src="./assets/brand-1.png" alt="Brand 1" height="52" /></div>
    <div class="gx-partner-logo mx-4"><img src="./assets/brand-2.png" alt="Brand 2" height="52" /></div>
    <div class="gx-partner-logo mx-4"><img src="./assets/brand-3.png" alt="Brand 3" height="52" /></div>
    <div class="gx-partner-logo mx-4"><img src="./assets/brand-4.png" alt="Brand 4" height="52" /></div>
  </div>

  <!-- Bootstrap JS Bundle (with Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./hero-slider.js"></script>
</body>
</html> 