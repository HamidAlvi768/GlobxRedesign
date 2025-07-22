/* ======================================== */
/* GLOBX - SERVICES SECTION FUNCTIONALITY  */
/* ======================================== */

document.addEventListener('DOMContentLoaded', function() {
  const serviceItems = document.querySelectorAll('.gx-service-item');
  const servicePanes = document.querySelectorAll('.gx-service-pane');
  let autoAdvanceTimer = null;
  const AUTO_ADVANCE_INTERVAL = 5000; // 5 seconds

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
          newIcon.src = './assets/service-arrow.png';
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
    serviceItems.forEach(serviceItem => serviceItem.classList.remove('gx-service-active'));
    // Fade out all panes
    servicePanes.forEach(pane => pane.classList.remove('gx-service-pane-active'));
    // After a short delay, fade in the target pane
    setTimeout(() => {
      serviceItems[idx].classList.add('gx-service-active');
      const targetService = serviceItems[idx].getAttribute('data-service');
      document.getElementById(targetService + '-service').classList.add('gx-service-pane-active');
      updateServiceIcons();
    }, 20);
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