// Product Detail Page JavaScript
document.addEventListener('DOMContentLoaded', function() {
  initializeRelatedCarousel();
  initializePricingTiers();
  initializeQuantityInput();
  initializeSearch();
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
        0: { items: 1, margin: 10 },
        576: { items: 2, margin: 15 },
        768: { items: 2, margin: 20 },
        992: { items: 3, margin: 20 }
      }
    });
  }
}

// Pricing Tiers Functionality
function initializePricingTiers() {
  const pricingRows = document.querySelectorAll('.gx-pricing-row');
  const quantityInput = document.getElementById('quantity');
  const subtotalAmount = document.querySelector('.gx-subtotal-amount');

  const pricingData = {
    'tier1': { minQty: 19, price: 0.000008, qty: 10000 },
    'tier2': { minQty: 18, price: 0.0008, qty: null },
    'tier3': { minQty: 16, price: 0.0008, qty: null }
  };

  pricingRows.forEach(row => {
    const checkbox = row.querySelector('input[type="checkbox"]');
    if (checkbox) {
      checkbox.addEventListener('change', function() {
        if (this.checked) {
          row.classList.add('gx-pricing-row-selected');
        } else {
          row.classList.remove('gx-pricing-row-selected');
        }
        updateSubtotal();
      });
    }
  });

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
    quantityInput.addEventListener('blur', function() {
      const value = this.value.replace(/,/g, '');
      const numValue = parseInt(value);
      if (!isNaN(numValue)) {
        this.value = numValue.toLocaleString();
      }
    });

    quantityInput.addEventListener('focus', function() {
      this.value = this.value.replace(/,/g, '');
    });

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
    searchButton.addEventListener('click', performSearch);
    searchInput.addEventListener('keypress', function(e) {
      if (e.key === 'Enter') {
        performSearch();
      }
    });
  }

  function performSearch() {
    const searchTerm = searchInput.value.trim();
    if (searchTerm) {
      // redirect or filter logic here
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
        paginationDots.forEach(d => d.classList.remove('active'));
        this.classList.add('active');
        if (typeof $(carousel).owlCarousel === 'function') {
          $(carousel).trigger('to.owl.carousel', [index]);
        }
      });
    });

    $(carousel).on('changed.owl.carousel', function(event) {
      const currentSlide = event.item.index;
      paginationDots.forEach((dot, index) => {
        dot.classList.toggle('active', index === currentSlide);
      });
    });
  }
}

// Add to Cart and Quote Functionality
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
    showNotification('Product added to cart successfully!', 'success');
  }

  if (e.target.classList.contains('gx-get-quote-btn')) {
    const quantity = document.getElementById('quantity').value;
    if (!quantity || quantity <= 0) {
      alert('Please enter a valid quantity');
      return;
    }
    showNotification('Quote request submitted! We\'ll contact you soon.', 'info');
  }
});

// Notification System
function showNotification(message, type = 'info') {
  const notification = document.createElement('div');
  notification.className = `gx-notification gx-notification-${type}`;
  notification.innerHTML = `
    <div class="gx-notification-content">
      <span class="gx-notification-message">${message}</span>
      <button class="gx-notification-close">&times;</button>
    </div>
  `;
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
  document.body.appendChild(notification);
  setTimeout(() => { notification.style.transform = 'translateX(0)'; }, 100);
  const closeBtn = notification.querySelector('.gx-notification-close');
  closeBtn.addEventListener('click', () => {
    notification.style.transform = 'translateX(100%)';
    setTimeout(() => { document.body.removeChild(notification); }, 300);
  });
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
