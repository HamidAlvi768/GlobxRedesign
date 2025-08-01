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
      animateOut: 'slideOutRight',
      animateIn: 'slideInRight',
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
  
  console.log('Sidebar carousel found:', sidebarCarousel.length);
  console.log('Sidebar dots found:', sidebarDots.length);
  
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
      startPosition: 0, // Start from first slide (index 0) to match dot indices
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
        
        // Set initial active dot
        sidebarDots.removeClass('active');
        sidebarDots.eq(0).addClass('active');
        
        console.log('Sidebar carousel initialized at position:', currentPosition);
      },
      onTranslated: function(event) {
        // Get the current position and update dots
        const currentPosition = event.item.index;
        updateSidebarDots(currentPosition);
        
        console.log('Sidebar carousel translated to position:', currentPosition);
      }
    });
    
    // Sidebar dot navigation - use event delegation for better reliability
    $(document).on('click', '.gx-sidebar-pagination .gx-dot', function() {
      const slideIndex = parseInt($(this).data('slide'));
      console.log('Sidebar dot clicked, slide index:', slideIndex);
      
      if (!isNaN(slideIndex)) {
        sidebarCarousel.trigger('to.owl.carousel', [slideIndex, 500]);
        
        // Update dots immediately for better UX
        sidebarDots.removeClass('active');
        $(this).addClass('active');
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
  
  // Ensure sidebar dots are properly initialized
  if (sidebarDots.length > 0) {
    // Set initial active state
    sidebarDots.removeClass('active');
    sidebarDots.eq(0).addClass('active');
    
    // Add click event listeners directly to dots as backup
    sidebarDots.each(function(index) {
      $(this).on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        
        const slideIndex = parseInt($(this).data('slide'));
        console.log('Direct dot click - slide index:', slideIndex);
        
        if (!isNaN(slideIndex) && sidebarCarousel.length) {
          sidebarCarousel.trigger('to.owl.carousel', [slideIndex, 500]);
          
          // Update active state
          sidebarDots.removeClass('active');
          $(this).addClass('active');
        }
      });
    });
  }
  
}); 