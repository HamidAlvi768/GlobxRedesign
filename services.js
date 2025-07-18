/* ======================================== */
/* GLOBX - SERVICES SECTION FUNCTIONALITY  */
/* ======================================== */

document.addEventListener('DOMContentLoaded', function() {
  const serviceItems = document.querySelectorAll('.gx-service-item');
  const servicePanes = document.querySelectorAll('.gx-service-pane');
  
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
  
  serviceItems.forEach(item => {
    item.addEventListener('click', function() {
      const targetService = this.getAttribute('data-service');
      
      // Remove active classes from all items and panes
      serviceItems.forEach(serviceItem => serviceItem.classList.remove('gx-service-active'));
      servicePanes.forEach(pane => pane.classList.remove('gx-service-pane-active'));
      
      // Add active classes to clicked item and corresponding pane
      this.classList.add('gx-service-active');
      document.getElementById(targetService + '-service').classList.add('gx-service-pane-active');
      
      // Update icons after state change
      updateServiceIcons();
    });
  });
  
  // Initialize icons on page load
  updateServiceIcons();
}); 