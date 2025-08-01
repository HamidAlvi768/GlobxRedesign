<!-- Footer -->
<footer class="gx-footer">
  <div class="container">
    <div class="row justify-content-around">
      <!-- Left Column: Company Contact Information -->
      <div class="col-lg-3 col-md-4 col-sm-6 gx-footer-col">
        <div class="gx-footer-company">
          <div class="gx-footer-company-name">GlobX GmbH</div>
          <div class="gx-footer-address">Odenwaldstr. 1</div>
          <div class="gx-footer-city">63263 Neu-Isenburg</div>
          <div class="gx-footer-email">Email: Info@globx.eu</div>
        </div>
      </div>

      <!-- Middle Column: Telephone Numbers -->
      <div class="col-lg-3 col-md-4 col-sm-6 gx-footer-col">
        <div class="gx-footer-telephone">
          <div class="gx-footer-telephone-title">Telephone</div>
          <div class="gx-footer-phone">UK: +49 69209757810</div>
          <div class="gx-footer-phone">Germany: +49 69209757811</div>
        </div>
      </div>

      <!-- Right Column: Legal Links and Social Media -->
      <div class="col-lg-3 col-md-4 col-sm-6 gx-footer-col">
        <div class="gx-footer-links">
          <div class="gx-footer-legal-links">
            <a href="#" class="gx-footer-link">Privacy Policy</a>
            <a href="#" class="gx-footer-link">Imprint</a>
            <a href="#" class="gx-footer-link">TOS</a>
            <a href="#" class="gx-footer-link">Cookies</a>
          </div>
          <div class="gx-footer-social">
            <a href="#" class="gx-footer-linkedin" aria-label="LinkedIn">
              <img src="./assets/linkedin-icon.png" alt="LinkedIn" width="32" height="32" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- jQuery (required for Owl Carousel) -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!-- Bootstrap JS Bundle (with Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Owl Carousel CSS and JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<?php foreach ($jsFiles as $file): ?>
  <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>

<!-- Smart Navigation Bar Functionality -->
<script src="./assets/js/smart-navigation.js"></script>



<!-- Problem & Solution Tab Functionality -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const tabButtons = document.querySelectorAll('.gx-tab-btn');
    const tabPanes = document.querySelectorAll('.gx-tab-pane');
    const contentContainer = document.querySelector('.gx-content-container');
    const tabContent = document.querySelector('.gx-tab-content');

    // Function to adjust container height based on active tab content
    function adjustContainerHeight() {
      const activePane = document.querySelector('.gx-tab-pane-active');
      if (activePane && contentContainer) {
        // Get the actual height of the active tab content
        const activePaneHeight = activePane.scrollHeight;
        const tabNavigationHeight = document.querySelector('.gx-tab-navigation').offsetHeight;
        const padding = 60; // Account for padding and margins

        // Responsive minimum heights
        let minHeight = 38 * 16; // 38rem default
        if (window.innerWidth <= 575.98) {
          minHeight = 62 * 16; // 62rem for mobile
        } else if (window.innerWidth <= 991.98) {
          minHeight = 62 * 16; // 62rem for tablet
        }

        // Set minimum height while allowing expansion
        const newHeight = Math.max(activePaneHeight + tabNavigationHeight + padding, minHeight);
        contentContainer.style.height = newHeight + 'px';
      }
    }

    // Initial height adjustment
    setTimeout(adjustContainerHeight, 100);

    // Debounced resize handler for better performance
    let resizeTimeout;
    window.addEventListener('resize', function() {
      clearTimeout(resizeTimeout);
      resizeTimeout = setTimeout(adjustContainerHeight, 250);
    });

    tabButtons.forEach(button => {
      button.addEventListener('click', function() {
        const targetTab = this.getAttribute('data-tab');
        // Remove active classes from all buttons
        tabButtons.forEach(btn => btn.classList.remove('gx-tab-btn-active'));
        // Add active class to clicked button
        this.classList.add('gx-tab-btn-active');

        // Fade out all panes
        tabPanes.forEach(pane => pane.classList.remove('gx-tab-pane-active'));
        // After a short delay, fade in the target pane
        setTimeout(() => {
          document.getElementById(targetTab + '-tab').classList.add('gx-tab-pane-active');
          // Adjust height after tab content is visible
          setTimeout(adjustContainerHeight, 50);
        }, 20); // 20ms to allow CSS transition to trigger
      });
    });
  });
</script>
<!-- Stat count animation for why-work-section -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const statNumbers = document.querySelectorAll('.gx-why-work-stat-number');
    let animated = false;

    function animateCount(el, target, suffix = '') {
      let start = 0;
      const duration = 1200;
      const startTime = performance.now();

      function update(now) {
        const elapsed = now - startTime;
        const progress = Math.min(elapsed / duration, 1);
        const value = Math.floor(progress * target);
        el.textContent = value + suffix;
        if (progress < 1) {
          requestAnimationFrame(update);
        } else {
          el.textContent = target + suffix;
        }
      }
      requestAnimationFrame(update);
    }

    function startStatAnimation() {
      if (animated) return;
      statNumbers.forEach(el => {
        const target = parseInt(el.getAttribute('data-count'), 10);
        let suffix = '';
        if (el.textContent.trim().endsWith('+')) suffix = '+';
        if (el.textContent.trim().endsWith('%')) suffix = '%';
        animateCount(el, target, suffix);
      });
      animated = true;
    }
    // Use Intersection Observer to trigger animation when section is visible
    const section = document.querySelector('.gx-why-work-section');
    if (window.IntersectionObserver && section) {
      const observer = new IntersectionObserver((entries) => {
        if (entries[0].isIntersecting) {
          startStatAnimation();
          observer.disconnect();
        }
      }, {
        threshold: 0.3
      });
      observer.observe(section);
    } else {
      // Fallback: animate on load
      startStatAnimation();
    }
  });
</script>
</body>

</html>