// Hero Section Owl Carousel Initialization
document.addEventListener('DOMContentLoaded', function() {
  
  // Hero Carousel
  const heroCarousel = $('.gx-hero-carousel');
  const heroDots = $('.gx-hero-pagination .gx-dot');
  
  if (heroCarousel.length) {
    heroCarousel.owlCarousel({
      items: 1,
      loop: true,
      autoplay: true,
      autoplayTimeout: 7000,
      autoplayHoverPause: true,
      smartSpeed: 500,
      nav: false,
      dots: false,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      touchDrag: true,
      mouseDrag: true,
      pullDrag: true,
      freeDrag: false,
      margin: 0,
      stagePadding: 0,
      merge: false,
      mergeFit: true,
      autoWidth: false,
      autoHeight: false,
      startPosition: 1, // Start from second slide (index 1)
      rtl: false,
      slideBy: 1,
      lazyLoad: false,
      lazyLoadEager: 0,
      rewind: false,
      rewindNav: true,
      scrollPerPage: false,
      center: false,
      video: false,
      videoHeight: false,
      videoWidth: false,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 1
        }
      },
      onInitialized: function(event) {
        // Get the current position and update dots
        const currentPosition = event.item.index;
        updateHeroDots(currentPosition);
      },
      onTranslated: function(event) {
        // Get the current position and update dots
        const currentPosition = event.item.index;
        updateHeroDots(currentPosition);
      }
    });
    
    // Hero dot navigation
    heroDots.on('click', function() {
      const slideIndex = parseInt($(this).data('slide'));
      if (!isNaN(slideIndex)) {
        heroCarousel.trigger('to.owl.carousel', [slideIndex, 500]);
      }
    });
    
    function updateHeroDots(activeIndex) {
      // Remove active class from all dots
      heroDots.removeClass('active');
      
      // Add active class to the correct dot
      // Since we have 3 slides (0, 1, 2), we need to map the carousel index to our dot index
      const dotIndex = activeIndex % 3; // This handles the looping
      
      // Ensure dotIndex is within bounds
      if (dotIndex >= 0 && dotIndex < heroDots.length) {
        heroDots.eq(dotIndex).addClass('active');
      }
      
      // Debug logging
      console.log('Hero carousel - Active index:', activeIndex, 'Dot index:', dotIndex, 'Dots found:', heroDots.length);
    }
  }
  
  // Sidebar Carousel
  const sidebarCarousel = $('.gx-sidebar-carousel');
  const sidebarDots = $('.gx-sidebar-pagination .gx-dot');
  
  if (sidebarCarousel.length) {
    sidebarCarousel.owlCarousel({
      items: 1,
      loop: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
      smartSpeed: 500,
      nav: false,
      dots: false,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      touchDrag: true,
      mouseDrag: true,
      pullDrag: true,
      freeDrag: false,
      margin: 0,
      stagePadding: 0,
      merge: false,
      mergeFit: true,
      autoWidth: false,
      autoHeight: false,
      startPosition: 1, // Start from second slide (index 1)
      rtl: false,
      slideBy: 1,
      lazyLoad: false,
      lazyLoadEager: 0,
      rewind: false,
      rewindNav: true,
      scrollPerPage: false,
      center: false,
      video: false,
      videoHeight: false,
      videoWidth: false,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 1
        }
      },
      onInitialized: function(event) {
        // Get the current position and update dots
        const currentPosition = event.item.index;
        updateSidebarDots(currentPosition);
      },
      onTranslated: function(event) {
        // Get the current position and update dots
        const currentPosition = event.item.index;
        updateSidebarDots(currentPosition);
      }
    });
    
    // Sidebar dot navigation
    sidebarDots.on('click', function() {
      const slideIndex = parseInt($(this).data('slide'));
      if (!isNaN(slideIndex)) {
        sidebarCarousel.trigger('to.owl.carousel', [slideIndex, 500]);
      }
    });
    
    function updateSidebarDots(activeIndex) {
      // Remove active class from all dots
      sidebarDots.removeClass('active');
      
      // Add active class to the correct dot
      // Since we have 3 slides (0, 1, 2), we need to map the carousel index to our dot index
      const dotIndex = activeIndex % 3; // This handles the looping
      
      // Ensure dotIndex is within bounds
      if (dotIndex >= 0 && dotIndex < sidebarDots.length) {
        sidebarDots.eq(dotIndex).addClass('active');
      }
      
      // Debug logging
      console.log('Sidebar carousel - Active index:', activeIndex, 'Dot index:', dotIndex, 'Dots found:', sidebarDots.length);
    }
  }
  
  // Synchronize carousels (optional - if you want them to sync)
  if (heroCarousel.length && sidebarCarousel.length) {
    // Uncomment the following lines if you want the carousels to sync
    /*
    heroCarousel.on('translated.owl.carousel', function(event) {
      const currentIndex = event.item.index;
      sidebarCarousel.trigger('to.owl.carousel', [currentIndex, 0]);
    });
    
    sidebarCarousel.on('translated.owl.carousel', function(event) {
      const currentIndex = event.item.index;
      heroCarousel.trigger('to.owl.carousel', [currentIndex, 0]);
    });
    */
  }
  
  // Pause autoplay on hover (optional enhancement)
  $('.gx-hero-carousel, .gx-sidebar-carousel').hover(
    function() {
      $(this).trigger('stop.owl.autoplay');
    },
    function() {
      $(this).trigger('play.owl.autoplay');
    }
  );
  
  // Debug: Log the number of dots found
  console.log('Hero dots found:', heroDots.length);
  console.log('Sidebar dots found:', sidebarDots.length);
  
  // Additional debug: Check if dots have the correct data attributes
  heroDots.each(function(index) {
    console.log('Hero dot', index, 'data-slide:', $(this).data('slide'));
  });
  
  sidebarDots.each(function(index) {
    console.log('Sidebar dot', index, 'data-slide:', $(this).data('slide'));
  });
  
}); 