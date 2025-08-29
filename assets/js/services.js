/* ======================================== */
/* GLOBX - SERVICES SECTION FUNCTIONALITY  */
/* ======================================== */

document.addEventListener('DOMContentLoaded', function() {
  const serviceItems = document.querySelectorAll('.gx-service-item');
  const servicePanes = document.querySelectorAll('.gx-service-pane');
  let autoAdvanceTimer = null;
  const AUTO_ADVANCE_INTERVAL = 5000; // 5 seconds
  let isTransitioning = false;

  // Function to update service icons
  function updateServiceIcons() {
    serviceItems.forEach(item => {
      const icon = item.querySelector('.gx-service-icon');
      const isActive = item.classList.contains('gx-service-active');
      if (isActive) {
        // Add icon if it doesn't exist
        if (!icon) {
          const newIcon = document.createElement('img');
          newIcon.className = 'gx-service-icon';
          newIcon.src = './assets/img/service-arrow.png';
          newIcon.alt = 'Service Arrow';
          item.insertBefore(newIcon, item.firstChild);
        }
      } else {
        // Remove icon if it exists
        if (icon) {
          icon.remove();
        }
      }
    });
  }

  function activateServiceByIndex(idx) {
    if (isTransitioning) return;
    isTransitioning = true;
    const currentActivePane = document.querySelector('.gx-service-pane.gx-service-pane-active');
    let outgoingFg = null;
    if (currentActivePane) {
      outgoingFg = currentActivePane.querySelector('.gx-service-illustration-foreground');
    }
    let didFinish = false;
    let fallbackTimeout;
    function finishTransition() {
      if (didFinish) return;
      didFinish = true;
      if (outgoingFg) {
        outgoingFg.classList.remove('gx-service-illustration-foreground--slide-out');
      }
      if (currentActivePane) {
        currentActivePane.classList.remove('gx-service-pane-active');
      }
      switchPane();
      clearTimeout(fallbackTimeout);
      isTransitioning = false;
    }
    if (outgoingFg) {
      // Animate out
      outgoingFg.classList.add('gx-service-illustration-foreground--slide-out');
      // Wait for animation to finish
      const handleOut = function(e) {
        if (e.propertyName === 'transform') {
          outgoingFg.removeEventListener('transitionend', handleOut);
          finishTransition();
        }
      };
      outgoingFg.addEventListener('transitionend', handleOut);
      // Fallback in case transitionend doesn't fire
      fallbackTimeout = setTimeout(finishTransition, 700);
    } else {
      finishTransition();
    }

    function switchPane() {
      serviceItems.forEach(serviceItem => serviceItem.classList.remove('gx-service-active'));
      servicePanes.forEach(pane => pane.classList.remove('gx-service-pane-active'));
      serviceItems[idx].classList.add('gx-service-active');
      const targetService = serviceItems[idx].getAttribute('data-service');
      const targetPane = document.getElementById(targetService + '-service');
      targetPane.classList.add('gx-service-pane-active');
      updateServiceIcons();
    }
  }

  function getActiveServiceIndex() {
    return Array.from(serviceItems).findIndex(item => item.classList.contains('gx-service-active'));
  }

  function autoAdvanceService() {
    const currentIdx = getActiveServiceIndex();
    const nextIdx = (currentIdx + 1) % serviceItems.length;
    activateServiceByIndex(nextIdx);
  }

  function startAutoAdvance() {
    if (autoAdvanceTimer) clearInterval(autoAdvanceTimer);
    autoAdvanceTimer = setInterval(autoAdvanceService, AUTO_ADVANCE_INTERVAL);
  }

  serviceItems.forEach((item, idx) => {
    item.addEventListener('click', function() {
      activateServiceByIndex(idx);
      startAutoAdvance(); // Reset timer on manual click
    });
  });

  // Initialize icons and start auto-advance on page load
  updateServiceIcons();
  startAutoAdvance();
}); 