// Product Detail Page JavaScript
document.addEventListener('DOMContentLoaded', function() {
  
  // Initialize related components carousel
  initializeRelatedCarousel();
  
  // Initialize pricing tier functionality
  initializePricingTiers();
  
  // Initialize quantity input functionality
  initializeQuantityInput();
  
  // Initialize search functionality
  initializeSearch();
  
  // Initialize pagination dots
  initializePagination();
});

// Related Components Carousel
function initializeRelatedCarousel() {
  const carousel = document.querySelector('.gx-related-carousel');
  if (carousel) {
    $(carousel).owlCarousel({
      loop: true,
      margin: 20,
      nav: false,
      dots: false,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1,
          margin: 10
        },
        576: {
          items: 2,
          margin: 15
        },
        768: {
          items: 2,
          margin: 20
        },
        992: {
          items: 3,
          margin: 20
        }
      }
    });
  }
}

// Pricing Tiers Functionality
function initializePricingTiers() {
  const pricingRows = document.querySelectorAll('.gx-pricing-row');
  const quantityInput = document.getElementById('quantity');
  const subtotalAmount = document.querySelector('.gx-subtotal-amount');
  
  // Pricing data (in real app, this would come from backend)
  const pricingData = {
    'tier1': { minQty: 19, price: 0.000008, qty: 10000 },
    'tier2': { minQty: 18, price: 0.0008, qty: null },
    'tier3': { minQty: 16, price: 0.0008, qty: null }
  };
  
  pricingRows.forEach(row => {
    const checkbox = row.querySelector('input[type="checkbox"]');
    if (checkbox) {
      checkbox.addEventListener('change', function() {
        // Toggle selected class for current row
        if (this.checked) {
          row.classList.add('gx-pricing-row-selected');
        } else {
          row.classList.remove('gx-pricing-row-selected');
        }
        
        // Update subtotal if quantity is entered
        updateSubtotal();
      });
    }
  });
  
  // Update subtotal when quantity changes
  if (quantityInput) {
    quantityInput.addEventListener('input', updateSubtotal);
  }
  
  function updateSubtotal() {
    const quantity = parseInt(quantityInput.value) || 0;
    const selectedTiers = document.querySelectorAll('.gx-pricing-row-selected input[type="checkbox"]');
    
    if (selectedTiers.length > 0 && quantity > 0) {
      let totalSubtotal = 0;
      
      selectedTiers.forEach(checkbox => {
        const tierId = checkbox.id;
        const tierData = pricingData[tierId];
        
        if (tierData) {
          totalSubtotal += quantity * tierData.price;
        }
      });
      
      if (subtotalAmount) {
        subtotalAmount.textContent = totalSubtotal.toFixed(2) + ' $';
      }
    } else {
      if (subtotalAmount) {
        subtotalAmount.textContent = '0.00 $';
      }
    }
  }
}

// Quantity Input Functionality
function initializeQuantityInput() {
  const quantityInput = document.getElementById('quantity');
  
  if (quantityInput) {
    // Format number with commas on blur
    quantityInput.addEventListener('blur', function() {
      const value = this.value.replace(/,/g, '');
      const numValue = parseInt(value);
      
      if (!isNaN(numValue)) {
        this.value = numValue.toLocaleString();
      }
    });
    
    // Remove commas on focus
    quantityInput.addEventListener('focus', function() {
      this.value = this.value.replace(/,/g, '');
    });
    
    // Only allow numbers and commas
    quantityInput.addEventListener('input', function() {
      this.value = this.value.replace(/[^0-9,]/g, '');
    });
  }
}

// Search Functionality
function initializeSearch() {
  const searchInput = document.querySelector('.gx-search-input');
  const searchButton = document.querySelector('.gx-search-button');
  
  if (searchInput && searchButton) {
    // Search on button click
    searchButton.addEventListener('click', performSearch);
    
    // Search on Enter key
    searchInput.addEventListener('keypress', function(e) {
      if (e.key === 'Enter') {
        performSearch();
      }
    });
  }
  
  function performSearch() {
    const searchTerm = searchInput.value.trim();
    if (searchTerm) {
      // In a real application, this would redirect to search results
      console.log('Searching for:', searchTerm);
      // window.location.href = `./products.php?search=${encodeURIComponent(searchTerm)}`;
    }
  }
}

// Pagination Dots Functionality
function initializePagination() {
  const paginationDots = document.querySelectorAll('.gx-pagination-dot');
  const carousel = document.querySelector('.gx-related-carousel');
  
  if (paginationDots.length > 0 && carousel) {
    paginationDots.forEach((dot, index) => {
      dot.addEventListener('click', function() {
        // Remove active class from all dots
        paginationDots.forEach(d => d.classList.remove('active'));
        
        // Add active class to clicked dot
        this.classList.add('active');
        
        // Go to slide (if using Owl Carousel)
        if (typeof $(carousel).owlCarousel === 'function') {
          $(carousel).trigger('to.owl.carousel', [index]);
        }
      });
    });
    
    // Update pagination dots when carousel changes
    $(carousel).on('changed.owl.carousel', function(event) {
      const currentSlide = event.item.index;
      paginationDots.forEach((dot, index) => {
        dot.classList.toggle('active', index === currentSlide);
      });
    });
  }
}

// Add to Cart Functionality
document.addEventListener('click', function(e) {
  if (e.target.classList.contains('gx-add-to-cart-btn')) {
    const quantity = document.getElementById('quantity').value;
    const selectedTiers = document.querySelectorAll('.gx-pricing-row-selected input[type="checkbox"]');
    
    if (!quantity || quantity <= 0) {
      alert('Please enter a valid quantity');
      return;
    }
    
    if (selectedTiers.length === 0) {
      alert('Please select at least one pricing tier');
      return;
    }
    
    // In a real application, this would add to cart via AJAX
    const selectedTierIds = Array.from(selectedTiers).map(checkbox => checkbox.id);
    console.log('Adding to cart:', {
      partNumber: 'RC0402FR-0788K7L',
      quantity: quantity,
      tiers: selectedTierIds
    });
    
    // Show success message
    showNotification('Product added to cart successfully!', 'success');
  }
  
  if (e.target.classList.contains('gx-get-quote-btn')) {
    const quantity = document.getElementById('quantity').value;
    
    if (!quantity || quantity <= 0) {
      alert('Please enter a valid quantity');
      return;
    }
    
    // In a real application, this would open quote form or redirect
    console.log('Getting quote for quantity:', quantity);
    
    // Show notification
    showNotification('Quote request submitted! We\'ll contact you soon.', 'info');
  }
  
  if (e.target.classList.contains('gx-related-card-btn')) {
    const card = e.target.closest('.gx-related-card');
    const partNumber = card.querySelector('.gx-related-card-part').textContent;
    
    // In a real application, this would navigate to the product detail page
    console.log('Navigating to product:', partNumber);
    // window.location.href = `./product-detail.php?part=${encodeURIComponent(partNumber)}`;
  }
});

// Notification System
function showNotification(message, type = 'info') {
  // Create notification element
  const notification = document.createElement('div');
  notification.className = `gx-notification gx-notification-${type}`;
  notification.innerHTML = `
    <div class="gx-notification-content">
      <span class="gx-notification-message">${message}</span>
      <button class="gx-notification-close">&times;</button>
    </div>
  `;
  
  // Add styles
  notification.style.cssText = `
    position: fixed;
    top: 20px;
    right: 20px;
    background: ${type === 'success' ? '#28a745' : type === 'error' ? '#dc3545' : '#17a2b8'};
    color: white;
    padding: 1rem 1.5rem;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    z-index: 9999;
    transform: translateX(100%);
    transition: transform 0.3s ease;
    max-width: 300px;
  `;
  
  // Add to page
  document.body.appendChild(notification);
  
  // Animate in
  setTimeout(() => {
    notification.style.transform = 'translateX(0)';
  }, 100);
  
  // Close button functionality
  const closeBtn = notification.querySelector('.gx-notification-close');
  closeBtn.addEventListener('click', () => {
    notification.style.transform = 'translateX(100%)';
    setTimeout(() => {
      document.body.removeChild(notification);
    }, 300);
  });
  
  // Auto remove after 5 seconds
  setTimeout(() => {
    if (document.body.contains(notification)) {
      notification.style.transform = 'translateX(100%)';
      setTimeout(() => {
        if (document.body.contains(notification)) {
          document.body.removeChild(notification);
        }
      }, 300);
    }
  }, 5000);
}

// Sticky purchasing module on scroll
// window.addEventListener('scroll', function() {
//   const purchasingModule = document.querySelector('.gx-purchasing-module');
//   if (purchasingModule) {
//     const rect = purchasingModule.getBoundingClientRect();
//     const isSticky = rect.top <= 20;
    
//     if (isSticky && window.innerWidth > 991) {
//       purchasingModule.style.position = 'sticky';
//       purchasingModule.style.top = '2rem';
//     } else {
//       purchasingModule.style.position = 'static';
//     }
//   }
// });

// Handle window resize
// window.addEventListener('resize', function() {
//   const purchasingModule = document.querySelector('.gx-purchasing-module');
//   if (purchasingModule && window.innerWidth <= 991) {
//     purchasingModule.style.position = 'static';
//   }
// }); 