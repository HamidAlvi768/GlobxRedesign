/**
 * Products Page JavaScript
 * Handles carousels, pagination, and interactive elements
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all carousels and interactive elements
    initializeProductsPage();
  });
  
  function initializeProductsPage() {
    // Sidebar carousel is already initialized in hero-owl-carousel.js
    // initializeSidebarCarousel();
    
    // Initialize marketing carousel
    initializeMarketingCarousel();
    
    // Initialize featured products carousel
    initializeFeaturedCarousel();
    
    // Initialize related products cards
    initializeRelatedCards();
    
    // Initialize search functionality
    initializeSearch();
    
    // Initialize pagination controls
    initializePagination();
    
    // Initialize manufacturer scroll animation
    initializeManufacturerScroll();
  }
  
  /**
   * Sidebar Categories Carousel
   * NOTE: This is now handled by hero-owl-carousel.js to prevent conflicts
   */
  /*
  function initializeSidebarCarousel() {
    const sidebarCarousel = document.querySelector('.gx-sidebar-carousel');
    if (!sidebarCarousel) return;
  
    // Initialize Owl Carousel for sidebar
    $(sidebarCarousel).owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      dots: false,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
      responsive: {
        0: { items: 1 },
        768: { items: 1 },
        992: { items: 1 }
      }
    });
  
    // Handle pagination dots
    const dots = document.querySelectorAll('.gx-sidebar-pagination .gx-dot');
    dots.forEach((dot, index) => {
      dot.addEventListener('click', () => {
        $(sidebarCarousel).trigger('to.owl.carousel', [index]);
        updateSidebarDots(index);
      });
    });
  
    // Update dots on carousel change
    $(sidebarCarousel).on('changed.owl.carousel', function(event) {
      updateSidebarDots(event.item.index);
    });
  }
  
  function updateSidebarDots(activeIndex) {
    const dots = document.querySelectorAll('.gx-sidebar-pagination .gx-dot');
    dots.forEach((dot, index) => {
      dot.classList.toggle('active', index === activeIndex);
    });
  }
  */
  
  /**
   * Marketing Carousel
   */
  function initializeMarketingCarousel() {
    const marketingCarousel = document.querySelector('.gx-marketing-carousel');
    if (!marketingCarousel) return;

    // Initialize Owl Carousel for marketing
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

    // Handle pagination dots
    const dots = document.querySelectorAll('.gx-marketing-pagination .gx-dot');
    dots.forEach((dot, index) => {
      dot.addEventListener('click', () => {
        $(marketingCarousel).trigger('to.owl.carousel', [index]);
        updateMarketingDots(index);
      });
    });

    // Update dots on carousel change
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
  
    // Initialize Owl Carousel for featured products
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
        // Set initial active dot
        const currentPosition = event.item.index;
        updateFeaturedDots(currentPosition);
        
        // Set initial active state
        const dots = document.querySelectorAll('.gx-featured-pagination .gx-pagination-dot');
        dots.removeClass('active');
        dots.eq(0).addClass('active');
        
        console.log('Featured carousel initialized at position:', currentPosition);
      },
      onTranslated: function(event) {
        // Update dots when carousel translates
        const currentPosition = event.item.index;
        updateFeaturedDots(currentPosition);
        
        console.log('Featured carousel translated to position:', currentPosition);
      }
    });
  
    // Handle pagination dots with event delegation for better reliability
    $(document).on('click', '.gx-featured-pagination .gx-pagination-dot', function() {
      const slideIndex = parseInt($(this).index());
      console.log('Featured dot clicked, slide index:', slideIndex);
      
      if (!isNaN(slideIndex)) {
        $(featuredCarousel).trigger('to.owl.carousel', [slideIndex, 500]);
        
        // Update dots immediately for better UX
        $('.gx-featured-pagination .gx-pagination-dot').removeClass('active');
        $(this).addClass('active');
      }
    });
  
    // Handle "Browse Category" buttons
    const browseButtons = document.querySelectorAll('.gx-featured-card-btn');
    browseButtons.forEach(button => {
      button.addEventListener('click', function(e) {
        e.preventDefault();
        const card = this.closest('.gx-featured-card');
        const title = card.querySelector('.gx-featured-card-title').textContent;
        
        // Navigate to category page or show category details
        console.log(`Browsing category: ${title}`);
        // You can add navigation logic here
        // window.location.href = `/category/${encodeURIComponent(title.toLowerCase())}`;
      });
    });
  }
  
  function updateFeaturedDots(activeIndex) {
    const dots = document.querySelectorAll('.gx-featured-pagination .gx-pagination-dot');
    
    // Remove active class from all dots
    dots.forEach((dot) => {
      dot.classList.remove('active');
    });
    
    // Add active class to the correct dot
    // Since we have 3 slides and the carousel loops, we need to map the carousel index to our dot index
    const dotIndex = activeIndex % 3; // This handles the looping
    
    // Ensure dotIndex is within bounds
    if (dotIndex >= 0 && dotIndex < dots.length) {
      dots[dotIndex].classList.add('active');
    }
    
    console.log('Featured dots - Active index:', activeIndex, 'Dot index:', dotIndex, 'Dots found:', dots.length);
  }
  
    /**
   * Related Products Cards
   */
  function initializeRelatedCards() {
    // Handle "Details" buttons
    const detailButtons = document.querySelectorAll('.gx-related-card-btn');
    detailButtons.forEach(button => {
      button.addEventListener('click', function(e) {
        e.preventDefault();
        const card = this.closest('.gx-related-card');
        const partNumber = card.querySelector('.gx-related-card-part').textContent;
        
        // Navigate to product detail page
        console.log(`Viewing details for: ${partNumber}`);
        // You can add navigation logic here
        // window.location.href = `/product/${encodeURIComponent(partNumber)}`;
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
  
    // Handle search button click
    searchButton.addEventListener('click', function(e) {
      e.preventDefault();
      performSearch();
    });
  
    // Handle Enter key press
    searchInput.addEventListener('keypress', function(e) {
      if (e.key === 'Enter') {
        e.preventDefault();
        performSearch();
      }
    });
  
    // Add input focus effects
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
      console.log(`Searching for: ${query}`);
      // You can add search logic here
      // window.location.href = `/search?q=${encodeURIComponent(query)}`;
      
      // For now, just show a message
      showSearchMessage(`Searching for: ${query}`);
    } else {
      showSearchMessage('Please enter a search term');
    }
  }
  
  function showSearchMessage(message) {
    // Create or update search message
    let messageElement = document.querySelector('.gx-search-message');
    if (!messageElement) {
      messageElement = document.createElement('div');
      messageElement.className = 'gx-search-message';
      messageElement.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: var(--primary);
        color: white;
        padding: 1rem 1.5rem;
        border-radius: 0.5rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        z-index: 1000;
        transform: translateX(100%);
        transition: transform 0.3s ease;
      `;
      document.body.appendChild(messageElement);
    }
    
    messageElement.textContent = message;
    messageElement.style.transform = 'translateX(0)';
    
    // Hide message after 3 seconds
    setTimeout(() => {
      messageElement.style.transform = 'translateX(100%)';
    }, 3000);
  }
  
  /**
   * Pagination Controls
   */
  function initializePagination() {
    // Add click handlers for all pagination dots
    const allDots = document.querySelectorAll('.gx-pagination-dot');
    allDots.forEach(dot => {
      dot.addEventListener('click', function() {
        // Remove active class from all dots in the same container
        const container = this.closest('.gx-featured-pagination, .gx-related-pagination, .gx-sidebar-pagination');
        if (container) {
          container.querySelectorAll('.gx-pagination-dot').forEach(d => d.classList.remove('active'));
          this.classList.add('active');
        }
      });
    });
  }
  
  /**
   * Manufacturer Scroll Animation
   */
  function initializeManufacturerScroll() {
    const scrollTrack = document.querySelector('.gx-manufacturers-scroll-track');
    if (!scrollTrack) return;
  
    // Pause animation on hover
    scrollTrack.addEventListener('mouseenter', function() {
      this.style.animationPlayState = 'paused';
    });
  
    scrollTrack.addEventListener('mouseleave', function() {
      this.style.animationPlayState = 'running';
    });
  
    // Add click handlers for manufacturer logos
    const manufacturerLogos = document.querySelectorAll('.gx-manufacturer-logo');
    manufacturerLogos.forEach(logo => {
      logo.addEventListener('click', function() {
        const img = this.querySelector('img');
        const brandName = img.alt || 'Manufacturer';
        
        console.log(`Clicked on: ${brandName}`);
        // You can add navigation logic here
        // window.location.href = `/manufacturer/${encodeURIComponent(brandName)}`;
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
  
  /**
   * Analytics and Tracking
   */
  function trackEvent(eventName, eventData = {}) {
    // Add analytics tracking here
    console.log(`Event: ${eventName}`, eventData);
    
    // Example: Google Analytics
    // if (typeof gtag !== 'undefined') {
    //   gtag('event', eventName, eventData);
    // }
  }
  
  // Track page interactions
  document.addEventListener('click', function(e) {
    if (e.target.matches('.gx-featured-card-btn')) {
      trackEvent('featured_category_click', {
        category: e.target.closest('.gx-featured-card').querySelector('.gx-featured-card-title').textContent
      });
    }
    
    // Ensure featured products pagination dots are properly initialized
    if (e.target.matches('.gx-featured-pagination .gx-pagination-dot')) {
      const dots = document.querySelectorAll('.gx-featured-pagination .gx-pagination-dot');
      dots.forEach(dot => dot.classList.remove('active'));
      e.target.classList.add('active');
    }
    
    if (e.target.matches('.gx-related-card-btn')) {
      trackEvent('related_product_click', {
        part_number: e.target.closest('.gx-related-card').querySelector('.gx-related-card-part').textContent
      });
    }
    
    if (e.target.matches('.gx-manufacturer-logo')) {
      trackEvent('manufacturer_click', {
        manufacturer: e.target.querySelector('img').alt
      });
    }
  });
  
  // Track search events
  const searchInput = document.querySelector('.gx-search-input');
  if (searchInput) {
    const debouncedTrackSearch = debounce((query) => {
      trackEvent('search_attempt', { query });
    }, 1000);
    
    searchInput.addEventListener('input', function() {
      debouncedTrackSearch(this.value);
    });
  } 