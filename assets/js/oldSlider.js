// Hero section slider functionality
const heroSlides = [
    {
      title: "Your Supply Chain Specialist",
      subtext: "GlobX will get you the missing components to keep your production running no matter how difficult the situation. As supply chain experts, we master even the biggest crises with ease and bring them to a smooth production flow."
    },
    {
      title: "Global Sourcing Experts",
      subtext: "Our worldwide network ensures you get the right parts at the right time, minimizing downtime and maximizing efficiency for your business. With a dedicated team and advanced logistics, we help you overcome any supply chain challenge."
    },
    {
      title: "Trusted by Industry Leaders",
      subtext: "Join top manufacturers who rely on GlobX for reliable, fast, and secure supply chain solutions tailored to their needs. Our commitment to excellence and customer satisfaction ensures you always have the support and resources you need to succeed."
    }
  ];
  
  const heroSlideContent = document.querySelector('.gx-hero-slide-content');
  const heroDots = document.querySelectorAll('.gx-hero-left .gx-sidebar-pagination .gx-dot');
  let currentHeroIdx = 0;
  let heroAutoSlideTimer = null;
  let heroIsTransitioning = false; // Lock to prevent multiple transitions
  let heroTransitionTimeout = null; // Track transition timeout
  
  // Swipe variables for hero slider
  let heroStartX = 0;
  let heroStartY = 0;
  let heroCurrentX = 0;
  let heroCurrentY = 0;
  let heroIsDragging = false;
  let heroDragThreshold = 50;
  
  function createHeroSlide(idx, className) {
    const slide = document.createElement('div');
    slide.className = 'gx-hero-slide ' + className;
    slide.innerHTML = `
      <h1 class="gx-hero-title fw-bold mb-3">${heroSlides[idx].title}</h1>
      <p class="gx-hero-subtext mb-4">${heroSlides[idx].subtext}</p>
    `;
    return slide;
  }
  
  function startHeroAutoSlide() {
    if (heroAutoSlideTimer) clearInterval(heroAutoSlideTimer);
    heroAutoSlideTimer = setInterval(() => {
      if (!heroIsTransitioning) { // Only auto-slide if not manually transitioning
        let nextIdx = (currentHeroIdx + 1) % heroSlides.length;
        setHeroSlide(nextIdx);
      }
    }, 5000);
  }
  
  function setHeroSlide(idx) {
    // Prevent multiple simultaneous transitions
    if (idx === currentHeroIdx || heroIsTransitioning) return;
    
    heroIsTransitioning = true;
    
    // Clear any existing transition timeout
    if (heroTransitionTimeout) {
      clearTimeout(heroTransitionTimeout);
    }
    
    // Clean up any orphaned slides first
    const allSlides = heroSlideContent.querySelectorAll('.gx-hero-slide');
    allSlides.forEach((slide, index) => {
      if (index > 0) { // Keep only the first slide
        slide.remove();
      }
    });
    
    const oldSlide = heroSlideContent.querySelector('.gx-hero-slide');
    const newSlide = createHeroSlide(idx, 'slide-in');
    
    // Ensure proper positioning
    oldSlide.classList.remove('slide-current');
    oldSlide.classList.add('slide-out');
    
    heroSlideContent.appendChild(newSlide);
    
    // Force reflow for transition
    void newSlide.offsetWidth;
    
    // Start animations
    oldSlide.classList.add('slide-animate');
    newSlide.classList.add('slide-animate');
    newSlide.classList.remove('slide-in');
    
    // Cleanup after animation
    heroTransitionTimeout = setTimeout(() => {
      if (oldSlide && oldSlide.parentNode) {
        oldSlide.parentNode.removeChild(oldSlide);
      }
      newSlide.classList.remove('slide-animate');
      newSlide.classList.add('slide-current');
      
      // Reset transition lock
      heroIsTransitioning = false;
      heroTransitionTimeout = null;
    }, 500);
    
    currentHeroIdx = idx;
    
    // Update dots
    heroDots.forEach((dot, i) => {
      dot.classList.toggle('active', i === idx);
    });
    
    // Reset auto-slide timer on manual change
    startHeroAutoSlide();
  }
  
  // Hero Swipe Functions
  function handleHeroTouchStart(e) {
    if (heroIsTransitioning) return; // Prevent swipe during transition
    
    heroStartX = e.type === 'mousedown' ? e.clientX : e.touches[0].clientX;
    heroStartY = e.type === 'mousedown' ? e.clientY : e.touches[0].clientY;
    heroIsDragging = true;
    heroSlideContent.style.cursor = 'grabbing';
    e.preventDefault();
  }
  
  function handleHeroTouchMove(e) {
    if (!heroIsDragging || heroIsTransitioning) return;
    
    heroCurrentX = e.type === 'mousemove' ? e.clientX : e.touches[0].clientX;
    heroCurrentY = e.type === 'mousemove' ? e.clientY : e.touches[0].clientY;
    
    const deltaX = heroCurrentX - heroStartX;
    const deltaY = heroCurrentY - heroStartY;
    
    // Only handle horizontal swipes
    if (Math.abs(deltaX) > Math.abs(deltaY)) {
      e.preventDefault();
    }
  }
  
  function handleHeroTouchEnd(e) {
    if (!heroIsDragging || heroIsTransitioning) {
      heroIsDragging = false;
      return;
    }
    
    const deltaX = heroCurrentX - heroStartX;
    const deltaY = heroCurrentY - heroStartY;
    
    // Check if it's a horizontal swipe with enough distance
    if (Math.abs(deltaX) > Math.abs(deltaY) && Math.abs(deltaX) > heroDragThreshold) {
      if (deltaX > 0) {
        // Swipe right - go to previous slide
        const prevIdx = currentHeroIdx === 0 ? heroSlides.length - 1 : currentHeroIdx - 1;
        setHeroSlide(prevIdx);
      } else {
        // Swipe left - go to next slide
        const nextIdx = (currentHeroIdx + 1) % heroSlides.length;
        setHeroSlide(nextIdx);
      }
    }
    
    heroIsDragging = false;
    heroSlideContent.style.cursor = 'grab';
  }
  
  // Add event listeners for hero slider
  if (heroSlideContent) {
    // Touch events
    heroSlideContent.addEventListener('touchstart', handleHeroTouchStart, { passive: false });
    heroSlideContent.addEventListener('touchmove', handleHeroTouchMove, { passive: false });
    heroSlideContent.addEventListener('touchend', handleHeroTouchEnd);
    
    // Mouse events
    heroSlideContent.addEventListener('mousedown', handleHeroTouchStart);
    heroSlideContent.addEventListener('mousemove', handleHeroTouchMove);
    heroSlideContent.addEventListener('mouseup', handleHeroTouchEnd);
    heroSlideContent.addEventListener('mouseleave', handleHeroTouchEnd);
    
    // Prevent text selection during drag
    heroSlideContent.addEventListener('selectstart', (e) => {
      if (heroIsDragging) e.preventDefault();
    });
  }
  
  // Initial state
  const initialSlide = heroSlideContent.querySelector('.gx-hero-slide');
  if (initialSlide) initialSlide.classList.add('slide-current');
  
  heroDots.forEach((dot, idx) => {
    dot.addEventListener('click', () => {
      if (!heroIsTransitioning) { // Prevent dot clicks during transition
        setHeroSlide(idx);
      }
    });
  });
  
  // Start auto-slide
  startHeroAutoSlide();
  
  // Sidebar card slider functionality
  const sidebarSlides = [
    // For now, all slides are the same, but structure allows for future unique slides
    [
      { icon: `<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect x="8" y="16" width="20" height="4" rx="2" stroke="white" stroke-width="2"/><path d="M8 18H4M32 18h4" stroke="white" stroke-width="2"/></svg>`, label: 'diodes' },
      { icon: `<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect x="10" y="10" width="16" height="16" rx="3" stroke="white" stroke-width="2"/><rect x="16" y="16" width="4" height="4" rx="1" fill="white"/></svg>`, label: 'mpu/mcu' },
      { icon: `<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect x="8" y="12" width="20" height="12" rx="3" stroke="white" stroke-width="2"/><rect x="12" y="16" width="4" height="4" rx="1" fill="white"/><rect x="20" y="16" width="4" height="4" rx="1" fill="white"/></svg>`, label: 'powircs' },
      { icon: `<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect x="8" y="16" width="20" height="4" rx="2" stroke="white" stroke-width="2"/><path d="M8 18H4M32 18h4" stroke="white" stroke-width="2"/></svg>`, label: 'diodes' },
      { icon: `<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect x="10" y="10" width="16" height="16" rx="3" stroke="white" stroke-width="2"/><rect x="16" y="16" width="4" height="4" rx="1" fill="white"/></svg>`, label: 'mpu/mcu' },
      { icon: `<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect x="8" y="12" width="20" height="12" rx="3" stroke="white" stroke-width="2"/><rect x="12" y="16" width="4" height="4" rx="1" fill="white"/><rect x="20" y="16" width="4" height="4" rx="1" fill="white"/></svg>`, label: 'powircs' },
      { icon: `<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect x="8" y="16" width="20" height="4" rx="2" stroke="white" stroke-width="2"/><path d="M8 18H4M32 18h4" stroke="white" stroke-width="2"/></svg>`, label: 'diodes' },
      { icon: `<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect x="10" y="10" width="16" height="16" rx="3" stroke="white" stroke-width="2"/><rect x="16" y="16" width="4" height="4" rx="1" fill="white"/></svg>`, label: 'mpu/mcu' },
      { icon: `<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect x="8" y="12" width="20" height="12" rx="3" stroke="white" stroke-width="2"/><rect x="12" y="16" width="4" height="4" rx="1" fill="white"/><rect x="20" y="16" width="4" height="4" rx="1" fill="white"/></svg>`, label: 'powircs' }
    ],
    // Slide 2 (same as above for now)
    [
      { icon: `<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect x="8" y="16" width="20" height="4" rx="2" stroke="white" stroke-width="2"/><path d="M8 18H4M32 18h4" stroke="white" stroke-width="2"/></svg>`, label: 'diodes' },
      { icon: `<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect x="10" y="10" width="16" height="16" rx="3" stroke="white" stroke-width="2"/><rect x="16" y="16" width="4" height="4" rx="1" fill="white"/></svg>`, label: 'mpu/mcu' },
      { icon: `<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect x="8" y="12" width="20" height="12" rx="3" stroke="white" stroke-width="2"/><rect x="12" y="16" width="4" height="4" rx="1" fill="white"/><rect x="20" y="16" width="4" height="4" rx="1" fill="white"/></svg>`, label: 'powircs' },
      { icon: `<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect x="8" y="16" width="20" height="4" rx="2" stroke="white" stroke-width="2"/><path d="M8 18H4M32 18h4" stroke="white" stroke-width="2"/></svg>`, label: 'diodes' },
      { icon: `<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect x="10" y="10" width="16" height="16" rx="3" stroke="white" stroke-width="2"/><rect x="16" y="16" width="4" height="4" rx="1" fill="white"/></svg>`, label: 'mpu/mcu' },
      { icon: `<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect x="8" y="12" width="20" height="12" rx="3" stroke="white" stroke-width="2"/><rect x="12" y="16" width="4" height="4" rx="1" fill="white"/><rect x="20" y="16" width="4" height="4" rx="1" fill="white"/></svg>`, label: 'powircs' },
      { icon: `<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect x="8" y="16" width="20" height="4" rx="2" stroke="white" stroke-width="2"/><path d="M8 18H4M32 18h4" stroke="white" stroke-width="2"/></svg>`, label: 'diodes' },
      { icon: `<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect x="10" y="10" width="16" height="16" rx="3" stroke="white" stroke-width="2"/><rect x="16" y="16" width="4" height="4" rx="1" fill="white"/></svg>`, label: 'mpu/mcu' },
      { icon: `<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect x="8" y="12" width="20" height="12" rx="3" stroke="white" stroke-width="2"/><rect x="12" y="16" width="4" height="4" rx="1" fill="white"/><rect x="20" y="16" width="4" height="4" rx="1" fill="white"/></svg>`, label: 'powircs' }
    ],
    // Slide 3 (same as above for now)
    [
      { icon: `<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect x="8" y="16" width="20" height="4" rx="2" stroke="white" stroke-width="2"/><path d="M8 18H4M32 18h4" stroke="white" stroke-width="2"/></svg>`, label: 'diodes' },
      { icon: `<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect x="10" y="10" width="16" height="16" rx="3" stroke="white" stroke-width="2"/><rect x="16" y="16" width="4" height="4" rx="1" fill="white"/></svg>`, label: 'mpu/mcu' },
      { icon: `<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect x="8" y="12" width="20" height="12" rx="3" stroke="white" stroke-width="2"/><rect x="12" y="16" width="4" height="4" rx="1" fill="white"/><rect x="20" y="16" width="4" height="4" rx="1" fill="white"/></svg>`, label: 'powircs' },
      { icon: `<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect x="8" y="16" width="20" height="4" rx="2" stroke="white" stroke-width="2"/><path d="M8 18H4M32 18h4" stroke="white" stroke-width="2"/></svg>`, label: 'diodes' },
      { icon: `<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect x="10" y="10" width="16" height="16" rx="3" stroke="white" stroke-width="2"/><rect x="16" y="16" width="4" height="4" rx="1" fill="white"/></svg>`, label: 'mpu/mcu' },
      { icon: `<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect x="8" y="12" width="20" height="12" rx="3" stroke="white" stroke-width="2"/><rect x="12" y="16" width="4" height="4" rx="1" fill="white"/><rect x="20" y="16" width="4" height="4" rx="1" fill="white"/></svg>`, label: 'powircs' },
      { icon: `<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect x="8" y="16" width="20" height="4" rx="2" stroke="white" stroke-width="2"/><path d="M8 18H4M32 18h4" stroke="white" stroke-width="2"/></svg>`, label: 'diodes' },
      { icon: `<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect x="10" y="10" width="16" height="16" rx="3" stroke="white" stroke-width="2"/><rect x="16" y="16" width="4" height="4" rx="1" fill="white"/></svg>`, label: 'mpu/mcu' },
      { icon: `<svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect x="8" y="12" width="20" height="12" rx="3" stroke="white" stroke-width="2"/><rect x="12" y="16" width="4" height="4" rx="1" fill="white"/><rect x="20" y="16" width="4" height="4" rx="1" fill="white"/></svg>`, label: 'powircs' }
    ]
  ];
  
  const sidebarSlideContent = document.querySelector('.gx-sidebar-slide-content');
  const sidebarDots = document.querySelectorAll('.gx-sidebar-card .gx-sidebar-pagination .gx-dot');
  let currentSidebarIdx = 0;
  let sidebarAutoSlideTimer = null;
  let sidebarIsTransitioning = false; // Lock to prevent multiple transitions
  let sidebarTransitionTimeout = null; // Track transition timeout
  
  // Swipe variables for sidebar slider
  let sidebarStartX = 0;
  let sidebarStartY = 0;
  let sidebarCurrentX = 0;
  let sidebarCurrentY = 0;
  let sidebarIsDragging = false;
  let sidebarDragThreshold = 50;
  
  function createSidebarSlide(idx, className) {
    const slide = document.createElement('div');
    slide.className = 'gx-sidebar-slide ' + className;
    const grid = document.createElement('div');
    grid.className = 'gx-sidebar-grid mb-4';
    // 3 rows of 3
    for (let row = 0; row < 3; row++) {
      const rowDiv = document.createElement('div');
      rowDiv.className = 'gx-sidebar-row';
      for (let col = 0; col < 3; col++) {
        const cellIdx = row * 3 + col;
        const cell = sidebarSlides[idx][cellIdx];
        const cellDiv = document.createElement('div');
        cellDiv.className = 'gx-sidebar-cell';
        const iconDiv = document.createElement('div');
        iconDiv.className = 'gx-sidebar-icon';
        iconDiv.innerHTML = cell.icon;
        const labelDiv = document.createElement('div');
        labelDiv.className = 'gx-sidebar-label';
        labelDiv.textContent = cell.label;
        cellDiv.appendChild(iconDiv);
        cellDiv.appendChild(labelDiv);
        rowDiv.appendChild(cellDiv);
      }
      grid.appendChild(rowDiv);
    }
    slide.appendChild(grid);
    return slide;
  }
  
  function startSidebarAutoSlide() {
    if (sidebarAutoSlideTimer) clearInterval(sidebarAutoSlideTimer);
    sidebarAutoSlideTimer = setInterval(() => {
      if (!sidebarIsTransitioning) { // Only auto-slide if not manually transitioning
        let nextIdx = (currentSidebarIdx + 1) % sidebarSlides.length;
        setSidebarSlide(nextIdx);
      }
    }, 5000);
  }
  
  function setSidebarSlide(idx) {
    // Prevent multiple simultaneous transitions
    if (idx === currentSidebarIdx || sidebarIsTransitioning) return;
    
    sidebarIsTransitioning = true;
    
    // Clear any existing transition timeout
    if (sidebarTransitionTimeout) {
      clearTimeout(sidebarTransitionTimeout);
    }
    
    // Clean up any orphaned slides first
    const allSlides = sidebarSlideContent.querySelectorAll('.gx-sidebar-slide');
    allSlides.forEach((slide, index) => {
      if (index > 0) { // Keep only the first slide
        slide.remove();
      }
    });
    
    const oldSlide = sidebarSlideContent.querySelector('.gx-sidebar-slide');
    const newSlide = createSidebarSlide(idx, 'slide-in');
    
    // Ensure proper positioning
    oldSlide.classList.remove('slide-current');
    oldSlide.classList.add('slide-out');
    
    sidebarSlideContent.appendChild(newSlide);
    
    // Force reflow for transition
    void newSlide.offsetWidth;
    
    // Start animations
    oldSlide.classList.add('slide-animate');
    newSlide.classList.add('slide-animate');
    newSlide.classList.remove('slide-in');
    
    // Cleanup after animation
    sidebarTransitionTimeout = setTimeout(() => {
      if (oldSlide && oldSlide.parentNode) {
        oldSlide.parentNode.removeChild(oldSlide);
      }
      newSlide.classList.remove('slide-animate');
      newSlide.classList.add('slide-current');
      
      // Reset transition lock
      sidebarIsTransitioning = false;
      sidebarTransitionTimeout = null;
    }, 500);
    
    currentSidebarIdx = idx;
    
    // Update dots
    sidebarDots.forEach((dot, i) => {
      dot.classList.toggle('active', i === idx);
    });
    
    // Reset auto-slide timer on manual change
    startSidebarAutoSlide();
  }
  
  // Sidebar Swipe Functions
  function handleSidebarTouchStart(e) {
    if (sidebarIsTransitioning) return; // Prevent swipe during transition
    
    sidebarStartX = e.type === 'mousedown' ? e.clientX : e.touches[0].clientX;
    sidebarStartY = e.type === 'mousedown' ? e.clientY : e.touches[0].clientY;
    sidebarIsDragging = true;
    sidebarSlideContent.style.cursor = 'grabbing';
    e.preventDefault();
  }
  
  function handleSidebarTouchMove(e) {
    if (!sidebarIsDragging || sidebarIsTransitioning) return;
    
    sidebarCurrentX = e.type === 'mousemove' ? e.clientX : e.touches[0].clientX;
    sidebarCurrentY = e.type === 'mousemove' ? e.clientY : e.touches[0].clientY;
    
    const deltaX = sidebarCurrentX - sidebarStartX;
    const deltaY = sidebarCurrentY - sidebarStartY;
    
    // Only handle horizontal swipes
    if (Math.abs(deltaX) > Math.abs(deltaY)) {
      e.preventDefault();
    }
  }
  
  function handleSidebarTouchEnd(e) {
    if (!sidebarIsDragging || sidebarIsTransitioning) {
      sidebarIsDragging = false;
      return;
    }
    
    const deltaX = sidebarCurrentX - sidebarStartX;
    const deltaY = sidebarCurrentY - sidebarStartY;
    
    // Check if it's a horizontal swipe with enough distance
    if (Math.abs(deltaX) > Math.abs(deltaY) && Math.abs(deltaX) > sidebarDragThreshold) {
      if (deltaX > 0) {
        // Swipe right - go to previous slide
        const prevIdx = currentSidebarIdx === 0 ? sidebarSlides.length - 1 : currentSidebarIdx - 1;
        setSidebarSlide(prevIdx);
      } else {
        // Swipe left - go to next slide
        const nextIdx = (currentSidebarIdx + 1) % sidebarSlides.length;
        setSidebarSlide(nextIdx);
      }
    }
    
    sidebarIsDragging = false;
    sidebarSlideContent.style.cursor = 'grab';
  }
  
  // Add event listeners for sidebar slider
  if (sidebarSlideContent) {
    // Touch events
    sidebarSlideContent.addEventListener('touchstart', handleSidebarTouchStart, { passive: false });
    sidebarSlideContent.addEventListener('touchmove', handleSidebarTouchMove, { passive: false });
    sidebarSlideContent.addEventListener('touchend', handleSidebarTouchEnd);
    
    // Mouse events
    sidebarSlideContent.addEventListener('mousedown', handleSidebarTouchStart);
    sidebarSlideContent.addEventListener('mousemove', handleSidebarTouchMove);
    sidebarSlideContent.addEventListener('mouseup', handleSidebarTouchEnd);
    sidebarSlideContent.addEventListener('mouseleave', handleSidebarTouchEnd);
    
    // Prevent text selection during drag
    sidebarSlideContent.addEventListener('selectstart', (e) => {
      if (sidebarIsDragging) e.preventDefault();
    });
  }
  
  // Initial state for sidebar
  while (sidebarSlideContent.firstChild) {
    sidebarSlideContent.removeChild(sidebarSlideContent.firstChild);
  }
  const firstSidebarSlide = createSidebarSlide(0, 'slide-current');
  sidebarSlideContent.appendChild(firstSidebarSlide);
  currentSidebarIdx = 0;
  sidebarDots.forEach((dot, i) => {
    dot.classList.toggle('active', i === 0);
  });
  
  sidebarDots.forEach((dot, idx) => {
    dot.addEventListener('click', () => {
      if (!sidebarIsTransitioning) { // Prevent dot clicks during transition
        setSidebarSlide(idx);
      }
    });
  });
  
  // Start auto-slide for sidebar
  startSidebarAutoSlide(); 