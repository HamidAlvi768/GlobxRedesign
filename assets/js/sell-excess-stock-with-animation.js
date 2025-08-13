/**
 * Sell Excess Stock Page JavaScript
 * Handles search functionality and button interactions
 */

document.addEventListener('DOMContentLoaded', function() {
    initializeSellExcessPage();
  });
  
  function initializeSellExcessPage() {
    // Initialize search functionality
    initializeSearch();
    
    // Initialize button event handlers
    initializeButtonHandlers();
    
    // Initialize scroll reveal animations
    initializeScrollReveal();
    
    // Initialize file upload functionality
    initializeFileUpload();
    
    // Initialize form handling
    initializeFormHandling();
    
    // Initialize accordion functionality
    initializeAccordion();
    
    // Initialize FAQ accordion functionality
    initializeFAQAccordion();
    
    // Initialize process highlighter functionality
    initializeProcessHighlighter();
  }
  
  /**
   * Search Functionality
   */
  function initializeSearch() {
    const searchInput = document.querySelector('.gx-search-input');
    const searchButton = document.querySelector('.gx-search-button');
    
    if (!searchInput || !searchButton) return;
  
    // Handle search button click
    searchButton.addEventListener('click', function(e) {
      e.preventDefault();
      performSearch();
    });
  
    // Handle Enter key press
    searchInput.addEventListener('keypress', function(e) {
      if (e.key === 'Enter') {
        e.preventDefault();
        performSearch();
      }
    });
  }
  
  function performSearch() {
    const searchInput = document.querySelector('.gx-search-input');
    const query = searchInput.value.trim();
    
    if (query) {
      console.log('Searching for:', query);
      // Navigate to products page with search query
      window.location.href = `./pn-listing.php?search=${encodeURIComponent(query)}`;
    } else {
      // Show error message or focus the input
      searchInput.focus();
      showSearchMessage('Please enter a search term');
    }
  }
  
  function showSearchMessage(message) {
    // Create or update message element
    let messageElement = document.querySelector('.gx-search-message');
    
    if (!messageElement) {
      messageElement = document.createElement('div');
      messageElement.className = 'gx-search-message alert alert-info mt-2';
      const searchContainer = document.querySelector('.gx-search-container');
      if (searchContainer) {
        searchContainer.appendChild(messageElement);
      }
    }
    
    messageElement.textContent = message;
    messageElement.style.display = 'block';
    
    // Hide message after 3 seconds
    setTimeout(() => {
      messageElement.style.display = 'none';
    }, 3000);
  }
  
  /**
   * Button Event Handlers
   */
  function initializeButtonHandlers() {
    // Learn More button
    const learnMoreBtn = document.querySelector('.gx-btn-primary');
    if (learnMoreBtn) {
      learnMoreBtn.addEventListener('click', function(e) {
        e.preventDefault();
        console.log('Learn More clicked');
        // Add your learn more logic here
        // For example: scroll to form section or open modal
        scrollToFormSection();
      });
    }
    
    // Download Table Example button
    const downloadBtn = document.querySelector('.gx-save-globe-btn');
    if (downloadBtn) {
      downloadBtn.addEventListener('click', function(e) {
        e.preventDefault();
        console.log('Download Table Example clicked');
        // Add your download logic here
        downloadTableExample();
      });
    }
    
    // CTA Buttons
    const joinNowBtn = document.querySelector('.gx-cta-btn--blue');
    if (joinNowBtn) {
      joinNowBtn.addEventListener('click', function(e) {
        e.preventDefault();
        console.log('Join Now clicked');
        // Add your join now logic here
        trackEvent('cta_join_now_clicked');
        // Redirect to registration or contact page
        window.location.href = './contact.php';
      });
    }
    
    const callUsBtn = document.querySelector('.gx-cta-btn--orange');
    if (callUsBtn) {
      callUsBtn.addEventListener('click', function(e) {
        e.preventDefault();
        console.log('Call Us Now clicked');
        // Add your call us logic here
        trackEvent('cta_call_us_clicked');
        // Redirect to contact page or open phone dialer
        window.location.href = './contact.php';
      });
    }
    
    // CTA Buttons for excess-stock.php page
    const uploadStockBtn = document.querySelector('.gx-cta-btn--blue');
    if (uploadStockBtn) {
      uploadStockBtn.addEventListener('click', function(e) {
        e.preventDefault();
        console.log('Upload Excess Stock List clicked');
        // Add your upload logic here
        trackEvent('cta_upload_stock_clicked');
        // Redirect to sell-excess-stock.php page
        window.location.href = './sell-excess-stock.php';
      });
    }
    
    const callUsExcessBtn = document.querySelector('.gx-cta-btn--orange');
    if (callUsExcessBtn) {
      callUsExcessBtn.addEventListener('click', function(e) {
        e.preventDefault();
        console.log('Call Us Now clicked (excess-stock page)');
        // Add your call us logic here
        trackEvent('cta_call_us_excess_clicked');
        // Redirect to contact page
        window.location.href = './contact.php';
      });
    }
  }
  
  function scrollToFormSection() {
    const formSection = document.querySelector('.gx-form-section');
    if (formSection) {
      formSection.scrollIntoView({ 
        behavior: 'smooth',
        block: 'start'
      });
    }
  }
  
  function downloadTableExample() {
    // Create a sample Excel-like content (CSV format for simplicity)
    const csvContent = `Part Number,Description,Quantity,Manufacturer,Price,Location,Condition,Date Added
  STM32F103C8T6,ARM Cortex-M3 MCU 64KB Flash,500,STMicroelectronics,3.50,Germany,New,2024-01-15
  CC1206KKX7R9BB105,Ceramic Capacitor 10uF 50V,1000,Yageo,0.012,USA,New,2024-01-10
  RC0402FR-0788K7L,Chip Resistor 88.7kOhm 1%,2000,Yageo,0.008,China,New,2024-01-12
  LM358N,Operational Amplifier Dual,750,Texas Instruments,0.85,Germany,New,2024-01-08
  ATmega328P-PU,8-bit Microcontroller,300,Microchip,2.10,USA,New,2024-01-14
  ESP32-WROOM-32,WiFi + Bluetooth Module,400,Espressif,4.25,Germany,New,2024-01-11
  LM7805CT,5V Voltage Regulator,1200,STMicroelectronics,0.35,USA,New,2024-01-09
  1N4007,Rectifier Diode 1A 1000V,2500,ON Semiconductor,0.08,China,New,2024-01-13`;
  
    // Create blob and download
    const blob = new Blob([csvContent], { type: 'text/csv' });
    const url = window.URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = 'excess-stock-example.csv';
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
    window.URL.revokeObjectURL(url);
    
    // Track download event
    trackEvent('table_example_downloaded', {
      file_name: 'excess-stock-example.csv',
      file_size: blob.size
    });
    
    // Show success message
    showSuccessMessage('Table example downloaded successfully!');
  }
  
  function showSuccessMessage(message) {
    // Create success message element
    const messageElement = document.createElement('div');
    messageElement.className = 'alert alert-success position-fixed';
    messageElement.style.cssText = `
      top: 20px;
      right: 20px;
      z-index: 9999;
      min-width: 300px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    `;
    messageElement.textContent = message;
    
    document.body.appendChild(messageElement);
    
    // Remove message after 3 seconds
    setTimeout(() => {
      if (messageElement.parentNode) {
        messageElement.parentNode.removeChild(messageElement);
      }
    }, 3000);
  }
  
  /**
   * Scroll Reveal Animations
   */
  function initializeScrollReveal() {
    // Add reveal animations to elements
    const revealElements = document.querySelectorAll('.gx-form-section');
    
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('gx-revealed');
        }
      });
    }, {
      threshold: 0.1
    });
    
    revealElements.forEach(element => {
      observer.observe(element);
    });
  }
  
  /**
   * Utility Functions
   */
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
  
  /**
   * Analytics and Tracking
   */
  function trackEvent(eventName, eventData = {}) {
    // Add your analytics tracking here
    console.log('Event tracked:', eventName, eventData);
    
    // Example: Google Analytics
    if (typeof gtag !== 'undefined') {
      gtag('event', eventName, eventData);
    }
    
    // Example: Custom tracking
    if (typeof window.trackEvent === 'function') {
      window.trackEvent(eventName, eventData);
    }
  }
  
  /**
   * File Upload Functionality
   */
  function initializeFileUpload() {
    const fileUploadZone = document.getElementById('fileUploadZone');
    const fileInput = document.getElementById('fileInput');
    
    if (!fileUploadZone || !fileInput) return;
  
    // Prevent default drag behaviors
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
      fileUploadZone.addEventListener(eventName, preventDefaults, false);
      document.body.addEventListener(eventName, preventDefaults, false);
    });
  
    // Highlight drop zone when item is dragged over it
    ['dragenter', 'dragover'].forEach(eventName => {
      fileUploadZone.addEventListener(eventName, highlight, false);
    });
  
    ['dragleave', 'drop'].forEach(eventName => {
      fileUploadZone.addEventListener(eventName, unhighlight, false);
    });
  
    // Handle dropped files
    fileUploadZone.addEventListener('drop', handleDrop, false);
    
    // Handle file input change
    fileInput.addEventListener('change', handleFileSelect);
  }
  
  function preventDefaults(e) {
    e.preventDefault();
    e.stopPropagation();
  }
  
  function highlight(e) {
    const fileUploadZone = document.getElementById('fileUploadZone');
    if (fileUploadZone) {
      fileUploadZone.classList.add('dragover');
    }
  }
  
  function unhighlight(e) {
    const fileUploadZone = document.getElementById('fileUploadZone');
    if (fileUploadZone) {
      fileUploadZone.classList.remove('dragover');
    }
  }
  
  function handleDrop(e) {
    const dt = e.dataTransfer;
    const files = dt.files;
    
    if (files.length > 0) {
      handleFiles(files);
    }
  }
  
  function handleFileSelect(e) {
    const files = e.target.files;
    if (files.length > 0) {
      handleFiles(files);
    }
  }
  
  function handleFiles(files) {
    const file = files[0];
    
    // Validate file type
    const allowedTypes = ['.xlsx', '.xls'];
    const fileName = file.name.toLowerCase();
    const isValidType = allowedTypes.some(type => fileName.endsWith(type));
    
    if (!isValidType) {
      showErrorMessage('Please select a valid Excel file (.xlsx or .xls)');
      return;
    }
    
    // Validate file size (max 10MB)
    const maxSize = 10 * 1024 * 1024; // 10MB
    if (file.size > maxSize) {
      showErrorMessage('File size must be less than 10MB');
      return;
    }
    
    // Update UI to show selected file
    updateFileUploadUI(file);
    
    // Track file upload event
    trackEvent('file_uploaded', {
      file_name: file.name,
      file_size: file.size,
      file_type: file.type
    });
  }
  
  function updateFileUploadUI(file) {
    const fileUploadZone = document.getElementById('fileUploadZone');
    const fileUploadContent = fileUploadZone.querySelector('.gx-file-upload-content');
    
    if (fileUploadContent) {
      fileUploadContent.innerHTML = `
        <div class="gx-file-upload-icon mb-3">
          <i class="fas fa-check-circle" style="color: #28a745;"></i>
        </div>
        <p class="gx-file-upload-text">
          <strong>${file.name}</strong><br>
          <small>${formatFileSize(file.size)}</small>
        </p>
        <button type="button" class="btn btn-sm btn-outline-secondary mt-2" onclick="resetFileUpload()">
          Change File
        </button>
      `;
    }
    
    // Add success styling
    fileUploadZone.style.borderColor = '#28a745';
    fileUploadZone.style.backgroundColor = '#f8fff9';
  }
  
  function resetFileUpload() {
    const fileUploadZone = document.getElementById('fileUploadZone');
    const fileInput = document.getElementById('fileInput');
    
    if (fileUploadZone && fileInput) {
      // Reset file input
      fileInput.value = '';
      
      // Reset UI
      const fileUploadContent = fileUploadZone.querySelector('.gx-file-upload-content');
      if (fileUploadContent) {
        fileUploadContent.innerHTML = `
          <div class="gx-file-upload-icon mb-3">
            <i class="fas fa-file"></i>
          </div>
          <p class="gx-file-upload-text">
            Drop Excel File here or <a href="#" class="gx-file-upload-link" onclick="document.getElementById('fileInput').click()">Choose a File</a>
          </p>
        `;
      }
      
      // Reset styling
      fileUploadZone.style.borderColor = '';
      fileUploadZone.style.backgroundColor = '';
    }
  }
  
  function formatFileSize(bytes) {
    if (bytes === 0) return '0 Bytes';
    const k = 1024;
    const sizes = ['Bytes', 'KB', 'MB', 'GB'];
    const i = Math.floor(Math.log(bytes) / Math.log(k));
    return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
  }
  
  function showErrorMessage(message) {
    // Create error message element
    const messageElement = document.createElement('div');
    messageElement.className = 'alert alert-danger position-fixed';
    messageElement.style.cssText = `
      top: 20px;
      right: 20px;
      z-index: 9999;
      min-width: 300px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    `;
    messageElement.textContent = message;
    
    document.body.appendChild(messageElement);
    
    // Remove message after 3 seconds
    setTimeout(() => {
      if (messageElement.parentNode) {
        messageElement.parentNode.removeChild(messageElement);
      }
    }, 3000);
  }
  
  /**
   * Form Handling
   */
  function initializeFormHandling() {
    const form = document.querySelector('.gx-contact-form');
    
    if (!form) return;
    
    form.addEventListener('submit', handleFormSubmit);
  }
  
  function handleFormSubmit(e) {
    e.preventDefault();
    
    // Get form data
    const formData = new FormData(e.target);
    
    // Validate required fields
    const requiredFields = ['company', 'firstName', 'lastName', 'email'];
    const missingFields = [];
    
    requiredFields.forEach(field => {
      const value = formData.get(field);
      if (!value || value.trim() === '') {
        missingFields.push(field);
      }
    });
    
    // Check if file is selected
    const fileInput = document.getElementById('fileInput');
    if (!fileInput.files.length) {
      missingFields.push('file');
    }
    
    if (missingFields.length > 0) {
      showErrorMessage('Please fill in all required fields and upload a file');
      return;
    }
    
    // Validate email format
    const email = formData.get('email');
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      showErrorMessage('Please enter a valid email address');
      return;
    }
    
    // Show loading state
    const submitBtn = document.querySelector('.gx-contact-submit');
    const originalText = submitBtn.textContent;
    submitBtn.textContent = 'Uploading...';
    submitBtn.disabled = true;
    
    // Simulate form submission (replace with actual API call)
    setTimeout(() => {
      // Reset button
      submitBtn.textContent = originalText;
      submitBtn.disabled = false;
      
      // Show success message
      showSuccessMessage('Your excess stock list has been uploaded successfully! We will contact you soon.');
      
      // Reset form
      e.target.reset();
      resetFileUpload();
      
      // Track form submission
      trackEvent('form_submitted', {
        company: formData.get('company'),
        email: formData.get('email')
      });
    }, 2000);
  }
  
  /**
   * Accordion Functionality
   */
  function initializeAccordion() {
    const featureItems = document.querySelectorAll('.gx-feature-item');
    
    featureItems.forEach(item => {
      const header = item.querySelector('.gx-feature-header');
      
      if (header) {
        header.addEventListener('click', function() {
          const isActive = item.classList.contains('active');
          
          // Close all other items
          featureItems.forEach(otherItem => {
            if (otherItem !== item) {
              otherItem.classList.remove('active');
            }
          });
          
          // Toggle current item
          if (isActive) {
            item.classList.remove('active');
          } else {
            item.classList.add('active');
          }
          
          // Track accordion interaction
          const featureNumber = item.getAttribute('data-feature');
          trackEvent('accordion_clicked', {
            feature: featureNumber,
            action: isActive ? 'close' : 'open'
          });
        });
      }
    });
  }
  
  /**
   * FAQ Accordion Functionality
   */
  function initializeFAQAccordion() {
    const faqItems = document.querySelectorAll('.gx-faq-item');
    
    faqItems.forEach(item => {
      const header = item.querySelector('.gx-faq-header');
      
      if (header) {
        header.addEventListener('click', function() {
          const isActive = item.classList.contains('active');
          
          // Close all other items
          faqItems.forEach(otherItem => {
            if (otherItem !== item) {
              otherItem.classList.remove('active');
            }
          });
          
          // Toggle current item
          if (isActive) {
            item.classList.remove('active');
          } else {
            item.classList.add('active');
          }
          
          // Track FAQ interaction
          const faqNumber = item.getAttribute('data-faq');
          trackEvent('faq_clicked', {
            faq: faqNumber,
            action: isActive ? 'close' : 'open'
          });
        });
      }
    });
  }
  
  /**
   * Process Highlighter Functionality
   * This function cycles an "active" class through the process cards and stepper nodes
   * with continuous line growth animation.
   */
  function initializeProcessHighlighter() {
    const container = document.getElementById('process-cards-container');
    const cards = document.querySelectorAll('.gx-process-card');
    const stepperNodes = document.querySelectorAll('.gx-stepper-node');
    
    if (!container || cards.length === 0 || stepperNodes.length === 0) {
      console.log('Process highlighter elements not found. Skipping initialization.');
      return;
    }
  
    let currentStep = 0;
    const stepCount = cards.length;
    let animationId;
    let isAnimating = false;
    const animationDuration = 15000; // 15 seconds per step (extremely slow)
    let animationStartTime;
  
    function setActiveStep(stepIndex) {
      // Update the process cards
      cards.forEach((card, index) => {
        if (index === stepIndex) {
          card.classList.add('gx-process-card--active');
        } else {
          card.classList.remove('gx-process-card--active');
        }
      });
  
      // Update the stepper nodes
      stepperNodes.forEach((node, index) => {
        if (index === stepIndex) {
          node.classList.add('gx-stepper-node--active');
        } else {
          node.classList.remove('gx-stepper-node--active');
        }
      });
      
      currentStep = stepIndex;
    }
  
    function updateProgressLine(progress) {
      const progressLine = document.querySelector('.gx-stepper-progress-line');
      if (progressLine) {
        progressLine.style.width = progress + '%';
      }
    }
  
    function animateStep() {
      if (!isAnimating) return;
  
      const currentTime = Date.now();
      const elapsed = currentTime - animationStartTime;
      const progress = Math.min(elapsed / animationDuration, 1);
  
      // Calculate the current step and sub-progress
      const totalSteps = stepCount - 1; // 3 segments for 4 steps
      const currentSegment = Math.floor(progress * totalSteps);
      const segmentProgress = (progress * totalSteps) % 1;
  
      // Calculate the overall progress percentage
      const baseProgress = (currentSegment / totalSteps) * 100;
      const segmentWidth = (1 / totalSteps) * 100;
      const currentProgress = baseProgress + (segmentProgress * segmentWidth);
  
      // Update the progress line
      updateProgressLine(currentProgress);
  
      // Check if we need to activate the next step
      const targetStep = Math.floor(progress * totalSteps);
      if (targetStep !== currentStep && targetStep < stepCount) {
        setActiveStep(targetStep);
      }
  
      // Continue animation or loop
      if (progress < 1) {
        animationId = requestAnimationFrame(animateStep);
      } else {
        // Animation complete, start next cycle
        setTimeout(() => {
          if (isAnimating) {
            startAnimation();
          }
        }, 500); // Small pause between cycles
      }
    }
  
    function startAnimation() {
      if (isAnimating) return;
      
      isAnimating = true;
      animationStartTime = Date.now();
      setActiveStep(0);
      updateProgressLine(0);
      animationId = requestAnimationFrame(animateStep);
    }
    
    function stopAnimation() {
      isAnimating = false;
      if (animationId) {
        cancelAnimationFrame(animationId);
      }
    }
  
    // Pause the animation on hover for better user experience
    container.addEventListener('mouseenter', stopAnimation);
    container.addEventListener('mouseleave', startAnimation);
  
    // Add click handlers to stepper nodes for manual navigation
    stepperNodes.forEach((node, index) => {
      node.addEventListener('click', function() {
        stopAnimation();
        setActiveStep(index);
        updateProgressLine(index === 0 ? 0 : (index / (stepCount - 1)) * 100);
        // Restart the animation after a delay
        setTimeout(startAnimation, 2000);
      });
    });
  
    // Initialize the highlighter
    startAnimation();
  } 