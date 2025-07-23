// Infinite scroll functionality for partner logos
document.addEventListener('DOMContentLoaded', function() {
  const scrollTrack = document.querySelector('.gx-partners-scroll-track');
  
  if (!scrollTrack) return;
  
  // Pause animation on hover
  scrollTrack.addEventListener('mouseenter', function() {
    this.style.animationPlayState = 'paused';
  });
  
  // Resume animation when mouse leaves
  scrollTrack.addEventListener('mouseleave', function() {
    this.style.animationPlayState = 'running';
  });
  
  // Pause animation on touch devices when touched
  scrollTrack.addEventListener('touchstart', function() {
    this.style.animationPlayState = 'paused';
  });
  
  // Resume animation when touch ends
  scrollTrack.addEventListener('touchend', function() {
    this.style.animationPlayState = 'running';
  });
}); 