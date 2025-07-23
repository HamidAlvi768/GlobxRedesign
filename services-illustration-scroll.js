document.addEventListener('DOMContentLoaded', function() {
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

  const containers = document.querySelectorAll('.gx-service-illustration-container');
  const maxOffset = 40; // px, maximum movement up or down (more visible)

  function updateIllustrationScroll() {
    const viewportHeight = window.innerHeight;
    containers.forEach(container => {
      const fg = container.querySelector('.gx-service-illustration-foreground');
      if (!fg) return;
      const rect = container.getBoundingClientRect();
      // Calculate distance from center of viewport (-0.5 to 0.5)
      const centerY = rect.top + rect.height / 2;
      const relCenter = (centerY - viewportHeight / 2) / viewportHeight;
      // Clamp and scale for subtle movement
      const offset = Math.max(-1, Math.min(1, relCenter)) * maxOffset;
      fg.style.transform = `translateY(${offset}px)`;
    });
  }

  window.addEventListener('scroll', updateIllustrationScroll, { passive: true });
  window.addEventListener('resize', updateIllustrationScroll);
  updateIllustrationScroll();
}); 