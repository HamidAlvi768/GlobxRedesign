/* ======================================== */
/* GLOBX - TESTIMONIALS FUNCTIONALITY       */
/* ======================================== */

document.addEventListener('DOMContentLoaded', function() {
  const testimonialPanes = document.querySelectorAll('.gx-testimonial-pane');
  const paginationDots = document.querySelectorAll('.gx-testimonial-pagination-dot');
  
  // Function to switch testimonials
  function switchTestimonial(testimonialId) {
    // Remove active classes from all panes and dots
    testimonialPanes.forEach(pane => pane.classList.remove('gx-testimonial-pane-active'));
    paginationDots.forEach(dot => dot.classList.remove('active'));
    
    // Add active classes to selected testimonial and dot
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
      if (testimonialId === '1') {
        testimonialImage.src = './assets/testimonial-man.jpg';
        testimonialImage.alt = 'Dr. Bayram Cucu - CEO, Bio-Gram Diagnostics GmbH';
      } else if (testimonialId === '2') {
        testimonialImage.src = './assets/testimonial-man-2.jpg';
        testimonialImage.alt = 'Sarah Johnson - Operations Director, TechFlow Solutions';
      }
    }
  }
  
  // Add click event listeners to pagination dots
  paginationDots.forEach(dot => {
    dot.addEventListener('click', function() {
      const testimonialId = this.getAttribute('data-testimonial');
      switchTestimonial(testimonialId);
    });
  });
  
  // Optional: Auto-advance testimonials every 5 seconds
  let currentTestimonial = 1;
  const totalTestimonials = testimonialPanes.length;
  
  function autoAdvance() {
    currentTestimonial = currentTestimonial % totalTestimonials + 1;
    switchTestimonial(currentTestimonial);
  }
  
  // Uncomment the line below to enable auto-advance
  // setInterval(autoAdvance, 5000);
}); 