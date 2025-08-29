/**
 * Products Page JavaScript
 * Handles carousels, pagination, and interactive elements
 */

document.addEventListener('DOMContentLoaded', function() {
  initializeProductsPage();
});

function initializeProductsPage() {
  initializeMarketingCarousel();
  initializeFeaturedCarousel();
  initializeHotPartNumbersCarousel();
  initializeRelatedCards();
  initializeSearch();
  initializeManufacturerScroll();
}

/**
 * Marketing Carousel
 */
function initializeMarketingCarousel() {
  const marketingCarousel = document.querySelector('.gx-marketing-carousel');
  if (!marketingCarousel) return;

  $(marketingCarousel).owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3500,
    autoplayHoverPause: true,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    smartSpeed: 800,
    responsive: {
      0: { items: 1 },
      768: { items: 1 },
      992: { items: 1 }
    }
  });

  const dots = document.querySelectorAll('.gx-marketing-pagination .gx-dot');
  dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
      $(marketingCarousel).trigger('to.owl.carousel', [index]);
      updateMarketingDots(index);
    });
  });

  $(marketingCarousel).on('changed.owl.carousel', function(event) {
    updateMarketingDots(event.item.index);
  });
}

function updateMarketingDots(activeIndex) {
  const dots = document.querySelectorAll('.gx-marketing-pagination .gx-dot');
  dots.forEach((dot, index) => {
    dot.classList.toggle('active', index === activeIndex);
  });
}

/**
 * Featured Products Carousel
 */
function initializeFeaturedCarousel() {
  const featuredCarousel = document.querySelector('.gx-featured-carousel');
  if (!featuredCarousel) return;

  $(featuredCarousel).owlCarousel({
    loop: true,
    margin: 30,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3500,
    autoplayHoverPause: true,
    responsive: {
      0: { items: 1 },
      768: { items: 2 },
      992: { items: 3 }
    },
    onInitialized: function(event) {
      const currentPosition = event.item.index;
      updateFeaturedDots(currentPosition);
      const dots = document.querySelectorAll('.gx-featured-pagination .gx-pagination-dot');
      dots.forEach(dot => dot.classList.remove('active'));
      dots[0].classList.add('active');
    },
    onTranslated: function(event) {
      const currentPosition = event.item.index;
      updateFeaturedDots(currentPosition);
    }
  });

  $(document).on('click', '.gx-featured-pagination .gx-pagination-dot', function() {
    const slideIndex = parseInt(Array.from($('.gx-featured-pagination .gx-pagination-dot')).indexOf(this));
    if (!isNaN(slideIndex)) {
      $(featuredCarousel).trigger('to.owl.carousel', [slideIndex, 500]);
      $('.gx-featured-pagination .gx-pagination-dot').forEach(dot => dot.classList.remove('active'));
      this.classList.add('active');
    }
  });

  const browseButtons = document.querySelectorAll('.gx-featured-card-btn');
  browseButtons.forEach(button => {
    button.addEventListener('click', function(e) {
      e.preventDefault();
      const card = this.closest('.gx-featured-card');
      const title = card.querySelector('.gx-featured-card-title').textContent;
    });
  });
}

function updateFeaturedDots(activeIndex) {
  const dots = document.querySelectorAll('.gx-featured-pagination .gx-pagination-dot');
  dots.forEach(dot => dot.classList.remove('active'));
  const dotIndex = activeIndex % 3;
  if (dotIndex >= 0 && dotIndex < dots.length) {
    dots[dotIndex].classList.add('active');
  }
}

/**
 * Hot Part Numbers Carousel
 */
function initializeHotPartNumbersCarousel() {
  const hotPartNumbersCarousel = document.querySelector('.gx-hot-part-numbers-carousel');
  if (!hotPartNumbersCarousel) return;

  $(hotPartNumbersCarousel).owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
      0: { items: 1 },
      576: { items: 2 },
      768: { items: 3 },
      992: { items: 3 }
    },
    onInitialized: function() {
      setTimeout(() => {
        const dots = document.querySelectorAll('.gx-hot-part-numbers-pagination .gx-hot-part-numbers-dot');
        dots.forEach(dot => dot.classList.remove('active'));
        if (dots.length > 0) {
          dots[0].classList.add('active');
        }
      }, 100);
    },
    onTranslated: function(event) {
      const currentPosition = event.item.index;
      updateHotPartNumbersDots(currentPosition);
    },
    onChanged: function(event) {
      const currentPosition = event.item.index;
      updateHotPartNumbersDots(currentPosition);
    }
  });

  $(document).on('click', '.gx-hot-part-numbers-pagination .gx-hot-part-numbers-dot', function() {
    const targetIndex = parseInt(this.getAttribute('data-index'));
    const itemsPerView = 3;
    const targetItemIndex = targetIndex * itemsPerView;
    if (!isNaN(targetItemIndex)) {
      document.querySelectorAll('.gx-hot-part-numbers-pagination .gx-hot-part-numbers-dot').forEach(dot => dot.classList.remove('active'));
      this.classList.add('active');
      $(hotPartNumbersCarousel).trigger('to.owl.carousel', [targetItemIndex, 300]);
    }
  });

  setTimeout(() => {
    const dots = document.querySelectorAll('.gx-hot-part-numbers-pagination .gx-hot-part-numbers-dot');
    if (dots.length > 0) {
      dots.forEach(dot => dot.classList.remove('active'));
      dots[0].classList.add('active');
    }
  }, 500);
}

function updateHotPartNumbersDots(activeIndex) {
  const dots = document.querySelectorAll('.gx-hot-part-numbers-pagination .gx-hot-part-numbers-dot');
  if (dots.length === 0) return;
  const totalDots = dots.length;
  const dotIndex = activeIndex % totalDots;
  dots.forEach(dot => dot.classList.remove('active'));
  if (dots[dotIndex]) {
    dots[dotIndex].classList.add('active');
  }
}

/**
 * Related Products Cards
 */
function initializeRelatedCards() {
  const detailButtons = document.querySelectorAll('.gx-related-card-btn');
  detailButtons.forEach(button => {
    button.addEventListener('click', function(e) {
      e.preventDefault();
      const card = this.closest('.gx-related-card');
      const partNumber = card.querySelector('.gx-related-card-part').textContent;
    });
  });
}

/**
 * Search Functionality
 */
function initializeSearch() {
  const searchInput = document.querySelector('.gx-search-input');
  const searchButton = document.querySelector('.gx-search-button');
  if (!searchInput || !searchButton) return;

  searchButton.addEventListener('click', function(e) {
    e.preventDefault();
    performSearch();
  });

  searchInput.addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
      e.preventDefault();
      performSearch();
    }
  });

  searchInput.addEventListener('focus', function() {
    this.parentElement.classList.add('focused');
  });

  searchInput.addEventListener('blur', function() {
    this.parentElement.classList.remove('focused');
  });
}

function performSearch() {
  const searchInput = document.querySelector('.gx-search-input');
  const query = searchInput.value.trim();
  if (query) {
    // search logic here
  }
}

/**
 * Manufacturer Scroll Animation
 */
function initializeManufacturerScroll() {
  const scrollTrack = document.querySelector('.gx-manufacturers-scroll-track');
  if (!scrollTrack) return;

  scrollTrack.addEventListener('mouseenter', function() {
    this.style.animationPlayState = 'paused';
  });

  scrollTrack.addEventListener('mouseleave', function() {
    this.style.animationPlayState = 'running';
  });

  const manufacturerLogos = document.querySelectorAll('.gx-manufacturer-logo');
  manufacturerLogos.forEach(logo => {
    logo.addEventListener('click', function() {
      const img = this.querySelector('img');
      const brandName = img.alt || 'Manufacturer';
    });
  });
}

/**
 * Utility Functions
 */
function debounce(func, wait) {
  let timeout;
  return function executedFunction(...args) {
    const later = () => {
      clearTimeout(timeout);
      func(...args);
    };
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
  };
}

function throttle(func, limit) {
  let inThrottle;
  return function() {
    const args = arguments;
    const context = this;
    if (!inThrottle) {
      func.apply(context, args);
      inThrottle = true;
      setTimeout(() => inThrottle = false, limit);
    }
  };
}
