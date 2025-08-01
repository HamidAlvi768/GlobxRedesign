/**
 * Smart Navigation Bar Functionality
 * Works across all navbar types (transparent, application, search)
 */
document.addEventListener('DOMContentLoaded', function() {
  const stickyNav = document.getElementById('gxStickyNav');
  let lastScrollTop = 0;
  let isScrollingUp = false;
  const topThreshold = 32; // 2rem in pixels (32px)
  
  if (!stickyNav) return;

  function handleScroll() {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    const isNearTop = scrollTop <= topThreshold;
    
    // Determine scroll direction
    isScrollingUp = scrollTop < lastScrollTop;
    
    // Show sticky nav on scroll up and not near top
    if (isScrollingUp && !isNearTop) {
      stickyNav.classList.add('gx-navbar-sticky--visible');
    } else {
      stickyNav.classList.remove('gx-navbar-sticky--visible');
    }
    
    lastScrollTop = scrollTop;
  }

  // Throttle scroll events for better performance
  let ticking = false;
  function requestTick() {
    if (!ticking) {
      requestAnimationFrame(() => {
        handleScroll();
        ticking = false;
      });
      ticking = true;
    }
  }

  window.addEventListener('scroll', requestTick, { passive: true });
}); 