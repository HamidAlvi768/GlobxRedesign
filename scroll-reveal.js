// Scroll-triggered reveal animations
document.addEventListener('DOMContentLoaded', function() {
  // Check if Intersection Observer is supported
  if (!('IntersectionObserver' in window)) {
    // Fallback: show all elements immediately
    document.querySelectorAll('.gx-reveal-section').forEach(section => {
      section.classList.add('gx-revealed');
    });
    return;
  }

  // Create intersection observer for reveal animations
  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('gx-revealed');
        // Once revealed, stop observing
        revealObserver.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.1, // Trigger when 10% of the element is visible
    rootMargin: '0px 0px -50px 0px' // Trigger slightly before element comes into view
  });

  // Observe all sections with reveal animations
  document.querySelectorAll('.gx-reveal-section').forEach(section => {
    revealObserver.observe(section);
  });

  // Additional observer for elements that should animate when their parent section is revealed
  const contentObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Find the parent section and add revealed class
        const parentSection = entry.target.closest('.gx-reveal-section');
        if (parentSection) {
          parentSection.classList.add('gx-revealed');
        }
        contentObserver.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.2,
    rootMargin: '0px 0px -100px 0px'
  });

  // Observe content elements that might not be in a reveal section
  document.querySelectorAll('.gx-reveal-content, .gx-reveal-slide-left, .gx-reveal-slide-right, .gx-reveal-scale').forEach(element => {
    if (!element.closest('.gx-reveal-section')) {
      contentObserver.observe(element);
    }
  });

  // Special handling for grid items
  const gridObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const parentSection = entry.target.closest('.gx-reveal-section');
        if (parentSection) {
          parentSection.classList.add('gx-revealed');
        }
        gridObserver.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  });

  // Observe grid items
  document.querySelectorAll('.gx-reveal-grid-item').forEach(item => {
    if (!item.closest('.gx-reveal-section')) {
      gridObserver.observe(item);
    }
  });

  // Create intersection observer for chevron rotation
  const chevronObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('rotated');
        // Once rotated, stop observing to prevent further changes
        chevronObserver.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.5, // Trigger when 50% of the element is visible
    rootMargin: '0px 0px -100px 0px'
  });

  // Observe transition chevron for rotation
  const transitionChevron = document.querySelector('.gx-transition-chevron');
  if (transitionChevron) {
    chevronObserver.observe(transitionChevron);
  }

  // Observe contact chevron for rotation
  const contactChevron = document.querySelector('.gx-contact-chevron');
  if (contactChevron) {
    chevronObserver.observe(contactChevron);
  }

  // Observe hero arrows for rotation
  const heroArrows = document.querySelector('.gx-arrows');
  if (heroArrows) {
    chevronObserver.observe(heroArrows);
  }

  // Performance optimization: Clean up observers when page is hidden
  document.addEventListener('visibilitychange', function() {
    if (document.hidden) {
      // Pause animations when page is not visible
      document.body.style.setProperty('--animation-play-state', 'paused');
    } else {
      // Resume animations when page becomes visible
      document.body.style.setProperty('--animation-play-state', 'running');
    }
  });

  // Handle window resize to re-trigger animations if needed
  let resizeTimeout;
  window.addEventListener('resize', function() {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(() => {
      // Re-check visibility for elements that might have changed position
      document.querySelectorAll('.gx-reveal-section:not(.gx-revealed)').forEach(section => {
        const rect = section.getBoundingClientRect();
        if (rect.top < window.innerHeight && rect.bottom > 0) {
          section.classList.add('gx-revealed');
        }
      });
    }, 250);
  });
});

// Optional: Add smooth scroll behavior for better UX
if ('scrollBehavior' in document.documentElement.style) {
  document.documentElement.style.scrollBehavior = 'smooth';
} 