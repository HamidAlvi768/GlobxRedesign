// ========================================
// CATEGORY PAGE JAVASCRIPT
// ========================================

document.addEventListener('DOMContentLoaded', function() {
  
  // ========================================
  // SEARCH FUNCTIONALITY
  // ========================================
  
  const searchInput = document.querySelector('.gx-search-input');
  const searchButton = document.querySelector('.gx-search-button');
  
  if (searchInput && searchButton) {
    // Search on button click
    searchButton.addEventListener('click', function() {
      performSearch();
    });
    
    // Search on Enter key press
    searchInput.addEventListener('keypress', function(e) {
      if (e.key === 'Enter') {
        performSearch();
      }
    });
    
    function performSearch() {
      const searchTerm = searchInput.value.trim();
      if (searchTerm) {
        // Here you would typically make an AJAX request or redirect to search results
        console.log('Searching for:', searchTerm);
        // For now, just show an alert
        alert('Search functionality would search for: ' + searchTerm);
      }
    }
  }
  
  // ========================================
  // PAGINATION FUNCTIONALITY
  // ========================================
  
  const paginationItems = document.querySelectorAll('.gx-pagination-item');
  
  paginationItems.forEach(item => {
    item.addEventListener('click', function() {
      // Remove active class from all items
      paginationItems.forEach(pItem => pItem.classList.remove('gx-pagination-item-active'));
      
      // Add active class to clicked item
      this.classList.add('gx-pagination-item-active');
      
      // Here you would typically load the new page content via AJAX
      const pageNumber = this.textContent;
      console.log('Loading page:', pageNumber);
      
      // For demonstration, show which page was clicked
      if (pageNumber !== '1') {
        alert('Pagination would load page ' + pageNumber);
      }
    });
  });
  
  // ========================================
  // VIEW BUTTON FUNCTIONALITY
  // ========================================
  
  const viewButtons = document.querySelectorAll('.gx-view-button');
  
  viewButtons.forEach(button => {
    button.addEventListener('click', function() {
      const row = this.closest('.gx-table-row');
      const mpnCell = row.querySelector('.gx-table-cell-mpn');
      const mpn = mpnCell ? mpnCell.textContent : 'Unknown';
      
      // Here you would typically redirect to the product detail page
      console.log('Viewing product:', mpn);
      
      // For demonstration, redirect to product detail page
      // window.location.href = './product-detail.php?mpn=' + encodeURIComponent(mpn);
      
      // For now, show an alert
      alert('Would navigate to product detail page for: ' + mpn);
    });
  });
  
  // ========================================
  // TABLE ROW HOVER EFFECTS
  // ========================================
  
  const tableRows = document.querySelectorAll('.gx-table-row');
  
  tableRows.forEach(row => {
    // Skip header row
    if (row.parentElement.classList.contains('gx-table-header')) {
      return;
    }
    
    row.addEventListener('mouseenter', function() {
      this.style.backgroundColor = '#f8f9fa';
    });
    
    row.addEventListener('mouseleave', function() {
      this.style.backgroundColor = '';
    });
  });
  
  // ========================================
  // ACCESSIBILITY IMPROVEMENTS
  // ========================================
  
  // Add keyboard navigation for pagination
  paginationItems.forEach(item => {
    item.addEventListener('keydown', function(e) {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        this.click();
      }
    });
    
    // Make pagination items focusable
    item.setAttribute('tabindex', '0');
  });
  
  // Add keyboard navigation for view buttons
  viewButtons.forEach(button => {
    button.addEventListener('keydown', function(e) {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        this.click();
      }
    });
  });
  
  // ========================================
  // RESPONSIVE BEHAVIOR
  // ========================================
  
  // Handle responsive table behavior
  function handleResponsiveTable() {
    const tableContainer = document.querySelector('.gx-product-list-container');
    const tableRows = document.querySelectorAll('.gx-table-row');
    
    if (window.innerWidth <= 575.98) {
      // Mobile view - add data attributes for better mobile display
      tableRows.forEach((row, index) => {
        if (row.parentElement.classList.contains('gx-table-header')) {
          return;
        }
        
        const cells = row.querySelectorAll('.gx-table-cell');
        const labels = ['Icon', 'MPN', 'Brand', 'Description', 'Quantity', 'Price', 'Action'];
        
        cells.forEach((cell, cellIndex) => {
          if (cellIndex < labels.length) {
            cell.setAttribute('data-label', labels[cellIndex]);
          }
        });
      });
    }
  }
  
  // Call on load and resize
  handleResponsiveTable();
  window.addEventListener('resize', handleResponsiveTable);
  
  // ========================================
  // ANIMATION ENHANCEMENTS
  // ========================================
  
  // Add staggered animation to table rows
  function animateTableRows() {
    const tableRows = document.querySelectorAll('.gx-table-body .gx-table-row');
    
    tableRows.forEach((row, index) => {
      row.style.opacity = '0';
      row.style.transform = 'translateY(20px)';
      
      setTimeout(() => {
        row.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
        row.style.opacity = '1';
        row.style.transform = 'translateY(0)';
      }, index * 50); // Stagger by 50ms
    });
  }
  
  // Trigger animation when page loads
  setTimeout(animateTableRows, 300);
  
  // ========================================
  // ERROR HANDLING
  // ========================================
  
  // Handle missing images gracefully
  const images = document.querySelectorAll('img');
  images.forEach(img => {
    img.addEventListener('error', function() {
      this.style.display = 'none';
      console.warn('Image failed to load:', this.src);
    });
  });
  
  // ========================================
  // PERFORMANCE OPTIMIZATIONS
  // ========================================
  
  // Debounce search input
  let searchTimeout;
  if (searchInput) {
    searchInput.addEventListener('input', function() {
      clearTimeout(searchTimeout);
      searchTimeout = setTimeout(() => {
        // Auto-search after user stops typing for 500ms
        if (this.value.trim().length >= 3) {
          console.log('Auto-searching for:', this.value.trim());
        }
      }, 500);
    });
  }
  
  // ========================================
  // ANALYTICS (if needed)
  // ========================================
  
  // Track page views and interactions
  function trackEvent(eventName, data = {}) {
    console.log('Analytics Event:', eventName, data);
    // Here you would typically send data to your analytics service
    // Example: gtag('event', eventName, data);
  }
  
  // Track page load
  trackEvent('category_page_view', {
    category: 'Chip Resistors',
    brand: 'Yageo'
  });
  
  // Track search events
  if (searchButton) {
    searchButton.addEventListener('click', function() {
      trackEvent('search_performed', {
        query: searchInput.value.trim(),
        source: 'category_page'
      });
    });
  }
  
  // Track product view events
  viewButtons.forEach(button => {
    button.addEventListener('click', function() {
      const row = this.closest('.gx-table-row');
      const mpnCell = row.querySelector('.gx-table-cell-mpn');
      const mpn = mpnCell ? mpnCell.textContent : 'Unknown';
      
      trackEvent('product_viewed', {
        mpn: mpn,
        category: 'Chip Resistors',
        brand: 'Yageo'
      });
    });
  });
  
});

// ========================================
// UTILITY FUNCTIONS
// ========================================

// Format numbers with commas
function formatNumber(num) {
  return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

// Format currency
function formatCurrency(amount, currency = 'USD') {
  return new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: currency
  }).format(amount);
}

// Debounce function
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

// Throttle function
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