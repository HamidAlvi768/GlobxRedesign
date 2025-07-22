/* ======================================== */
/* GLOBX - TESTIMONIALS FUNCTIONALITY       */
/* ======================================== */

document.addEventListener('DOMContentLoaded', function() {
  const testimonialPanes = document.querySelectorAll('.gx-testimonial-pane');
  const paginationDots = document.querySelectorAll('.gx-testimonial-pagination-dot');
  let autoAdvanceTimer = null;
  const AUTO_ADVANCE_INTERVAL = 5000; // 5 seconds
  let currentTestimonial = 1;
  const totalTestimonials = testimonialPanes.length;

  // Function to switch testimonials with fade
  function switchTestimonial(testimonialId) {
    // Remove active classes from all panes and dots
    testimonialPanes.forEach(pane => pane.classList.remove('gx-testimonial-pane-active'));
    paginationDots.forEach(dot => dot.classList.remove('active'));
    // After a short delay, fade in the target pane
    setTimeout(() => {
      const targetPane = document.getElementById('testimonial-' + testimonialId);
      const targetDot = document.querySelector(`[data-testimonial="${testimonialId}"]`);
      if (targetPane) {
        targetPane.classList.add('gx-testimonial-pane-active');
      }
      if (targetDot) {
        targetDot.classList.add('active');
      }
      // Update the testimonial image based on the active testimonial
      const testimonialImage = document.querySelector('.gx-testimonial-image');
      if (testimonialImage) {
        if (testimonialId === '1' || testimonialId === 1) {
          testimonialImage.src = './assets/testimonial-man.jpg';
          testimonialImage.alt = 'Dr. Bayram Cucu - CEO, Bio-Gram Diagnostics GmbH';
        } else if (testimonialId === '2' || testimonialId === 2) {
          testimonialImage.src = './assets/testimonial-man-2.jpg';
          testimonialImage.alt = 'Sarah Johnson - Operations Director, TechFlow Solutions';
        }
      }
    }, 20);
    currentTestimonial = parseInt(testimonialId, 10);
  }

  // Add click event listeners to pagination dots
  paginationDots.forEach(dot => {
    dot.addEventListener('click', function() {
      const testimonialId = this.getAttribute('data-testimonial');
      switchTestimonial(testimonialId);
      startAutoAdvance(); // Reset timer on manual click
    });
  });

  function autoAdvance() {
    currentTestimonial = currentTestimonial % totalTestimonials + 1;
    switchTestimonial(currentTestimonial);
  }

  function startAutoAdvance() {
    if (autoAdvanceTimer) clearInterval(autoAdvanceTimer);
    autoAdvanceTimer = setInterval(autoAdvance, AUTO_ADVANCE_INTERVAL);
  }

  // Initialize first testimonial and start auto-advance
  switchTestimonial(currentTestimonial);
  startAutoAdvance();
}); 