document.addEventListener('DOMContentLoaded', function() {
  if (window.jQuery && $('.gx-certifications-scroll.owl-carousel').length) {
    $('.gx-certifications-scroll.owl-carousel').owlCarousel({
      items: 4,
      margin: 22,
      loop: false,
      dots: false,
      nav: false,
      responsive: {
        0: { items: 1, margin: 8 },
        480: { items: 2, margin: 10 },
        768: { items: 3, margin: 16 },
        992: { items: 4, margin: 22 }
      }
    });
  }
}); 