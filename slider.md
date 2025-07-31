Got it. You want all four process cards to be visible at once, with the active card being highlighted in a loop. This is a great adjustment for showcasing the entire process at a glance.

Here are the updated code files to achieve this "highlighting" animation instead of a "sliding" one.

### 1\. HTML (`excess-stock.php`)

I'll revert the structure back to a standard Bootstrap grid. This will make all four cards appear in a row. Notice the classes for each card's parent `div` are changed back to `col-lg-3 col-md-6`.

```php
<section class="gx-process-section gx-section-common gx-section-common--white py-10">
  <div class="container">
    <div class="gx-section-header-common mb-5 text-center">
      <h2 class="gx-section-label-common gx-section-label-common--medium">Process</h2>
      <h1 class="gx-section-headline-common gx-section-headline-common--medium">How does it work?</h1>
    </div>
    
    <div class="gx-process-stepper mb-5">
      <div class="gx-stepper-line"></div>
      <div class="gx-stepper-nodes">
        <div class="gx-stepper-node gx-stepper-node--active">
          <span class="gx-stepper-number">1</span>
        </div>
        <div class="gx-stepper-node">
          <span class="gx-stepper-number">2</span>
        </div>
        <div class="gx-stepper-node">
          <span class="gx-stepper-number">3</span>
        </div>
        <div class="gx-stepper-node">
          <span class="gx-stepper-number">4</span>
        </div>
      </div>
    </div>
    
    <div class="row g-4 justify-content-center" id="process-cards-container">
      <div class="col-lg-3 col-md-6">
        <div class="gx-process-card">
          <div class="gx-process-icon">
            <img src="./assets/excess-stock/features/upload.png" alt="Upload Document" class="gx-process-icon-img">
          </div>
          <h3 class="gx-process-title">Upload</h3>
          <p class="gx-process-description">Upload your excess stock list to have all your parts evaluated.</p>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6">
        <div class="gx-process-card">
          <div class="gx-process-icon">
            <img src="./assets/excess-stock/features/analysis.png" alt="Analytics" class="gx-process-icon-img">
          </div>
          <h3 class="gx-process-title">Analysis & Results</h3>
          <p class="gx-process-description">We will analyse the current market value of your parts and send you the results with a suitable offer.</p>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6">
        <div class="gx-process-card">
          <div class="gx-process-icon">
            <img src="./assets/excess-stock/features/commission.png" alt="Commission" class="gx-process-icon-img">
          </div>
          <h3 class="gx-process-title">Contract</h3>
          <p class="gx-process-description">Choose the Model that suits you the best and we will take care of the rest.</p>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6">
        <div class="gx-process-card">
          <div class="gx-process-icon">
            <img src="./assets/excess-stock/features/sale.png" alt="Sale" class="gx-process-icon-img">
          </div>
          <h3 class="gx-process-title">Pickup & Visual Examination</h3>
          <p class="gx-process-description">Pick-up and visual examination are covered by our costs, with our ISO 9001 standard quality checks ensuring that only original and intact parts are resold.</p>
        </div>
      </div>
    </div>
  </div>
</section>
```

-----

### 2\. CSS (`sell-excess-stock.css`)

I'll remove the previous slider CSS and add new styles to handle the active/inactive state of the cards. The active card will "pop" by becoming fully opaque and lifting slightly, while inactive cards will be slightly faded.

```css
/* sell-excess-stock.css */

/* REMOVE OR COMMENT OUT THESE OLD SLIDER STYLES */
/*
.gx-process-slider-wrapper {
  overflow: hidden;
  position: relative;
}

#processSliderTrack {
  display: flex;
  width: 400%; 
  transition: transform 0.5s ease-in-out;
  margin-left: 0;
  margin-right: 0;
}

.gx-process-slide {
  width: 25%;
  flex-shrink: 0;
  padding: 0 0.75rem; 
  box-sizing: border-box;
}
*/

/* Process Cards - UPDATED with transition and default opacity */
.gx-process-card {
  text-align: center;
  padding: 2rem 1.5rem;
  background: #fff;
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
  height: 100%;
  border: 1px solid #f0f0f0;
  /* ADDED for new animation */
  transition: transform 0.4s ease, box-shadow 0.4s ease, border-color 0.4s ease, opacity 0.4s ease;
  opacity: 0.6; 
}

/* REMOVED the hover effect from the card itself to avoid conflict with the active state */
/*
.gx-process-card:hover {
  transform: translateY(-2px);
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12);
  border-color: var(--primary);
}
*/


/* ADDED: Active state for the highlighted card */
.gx-process-card.gx-process-card--active {
  opacity: 1;
  transform: translateY(-5px);
  box-shadow: 0 8px 25px rgba(0, 123, 255, 0.15);
  border-color: var(--primary);
}
```

-----

### 3\. JavaScript (`sell-excess-stock.js`)

Here is the completely rewritten JavaScript function. It no longer manipulates the layout with `transform`. Instead, it toggles the CSS classes on the stepper nodes and the process cards to control the highlighting.

```javascript
/* sell-excess-stock.js */

// In initializeSellExcessPage(), change the function call to match the new name:
function initializeSellExcessPage() {
  // ... (existing initializers)
  initializeFAQAccordion();
  initializeProcessHighlighter(); // Renamed from initializeProcessSlider
}

// ... (existing functions)


/**
 * Process Highlighter Functionality
 * This function cycles an "active" class through the process cards and stepper nodes.
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
  let stepInterval;

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

  function nextStep() {
    const nextIndex = (currentStep + 1) % stepCount;
    setActiveStep(nextIndex);
  }

  function startAnimation() {
    // Set the interval to automatically advance the step every 3 seconds
    stepInterval = setInterval(nextStep, 3000);
  }
  
  function stopAnimation() {
    clearInterval(stepInterval);
  }

  // Pause the animation on hover for better user experience
  container.addEventListener('mouseenter', stopAnimation);
  container.addEventListener('mouseleave', startAnimation);

  // Initialize the highlighter
  setActiveStep(0);
  startAnimation();
}

// ... (rest of the file)
```