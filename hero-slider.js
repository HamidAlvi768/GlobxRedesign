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
    let nextIdx = (currentHeroIdx + 1) % heroSlides.length;
    setHeroSlide(nextIdx);
  }, 5000);
}

function setHeroSlide(idx) {
  if (idx === currentHeroIdx) return;
  const oldSlide = heroSlideContent.querySelector('.gx-hero-slide');
  const newSlide = createHeroSlide(idx, 'slide-in');
  heroSlideContent.appendChild(newSlide);
  // Force reflow for transition
  void newSlide.offsetWidth;
  oldSlide.classList.add('slide-out', 'slide-animate');
  newSlide.classList.add('slide-animate');
  newSlide.classList.remove('slide-in');
  // After animation, remove old slide and set new as current
  setTimeout(() => {
    if (oldSlide && oldSlide.parentNode) oldSlide.parentNode.removeChild(oldSlide);
    newSlide.classList.remove('slide-animate');
    newSlide.classList.add('slide-current');
  }, 500);
  currentHeroIdx = idx;
  heroDots.forEach((dot, i) => {
    dot.classList.toggle('active', i === idx);
  });
  // Reset auto-slide timer on manual change
  startHeroAutoSlide();
}

// Initial state
const initialSlide = heroSlideContent.querySelector('.gx-hero-slide');
if (initialSlide) initialSlide.classList.add('slide-current');

heroDots.forEach((dot, idx) => {
  dot.addEventListener('click', () => setHeroSlide(idx));
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
    let nextIdx = (currentSidebarIdx + 1) % sidebarSlides.length;
    setSidebarSlide(nextIdx);
  }, 5000);
}

function setSidebarSlide(idx) {
  if (idx === currentSidebarIdx) return;
  const oldSlide = sidebarSlideContent.querySelector('.gx-sidebar-slide');
  const newSlide = createSidebarSlide(idx, 'slide-in');
  sidebarSlideContent.appendChild(newSlide);
  // Force reflow for transition
  void newSlide.offsetWidth;
  oldSlide.classList.add('slide-out', 'slide-animate');
  newSlide.classList.add('slide-animate');
  newSlide.classList.remove('slide-in');
  setTimeout(() => {
    if (oldSlide && oldSlide.parentNode) oldSlide.parentNode.removeChild(oldSlide);
    newSlide.classList.remove('slide-animate');
    newSlide.classList.add('slide-current');
  }, 500);
  currentSidebarIdx = idx;
  sidebarDots.forEach((dot, i) => {
    dot.classList.toggle('active', i === idx);
  });
  // Reset auto-slide timer on manual change
  startSidebarAutoSlide();
}

// Initial state for sidebar
const initialSidebarSlide = sidebarSlideContent.querySelector('.gx-sidebar-slide');
if (!initialSidebarSlide) {
  const firstSidebarSlide = createSidebarSlide(0, 'slide-current');
  sidebarSlideContent.appendChild(firstSidebarSlide);
} else {
  initialSidebarSlide.classList.add('slide-current');
}

sidebarDots.forEach((dot, idx) => {
  dot.addEventListener('click', () => setSidebarSlide(idx));
});

// Start auto-slide for sidebar
startSidebarAutoSlide(); 