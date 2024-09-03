/* Owl Carousel */
$(".owl-carousel").owlCarousel({
  center: true,
  loop: true,
  margin: 0,
  nav: true,
  items: 3,
  smartSpeed: 750,
  navText: [
    '<span class="fa fa-angle-left"></span>',
    '<span class="fa fa-angle-right"></span>',
  ],
  responsive: {
    0: {
      items: 1,
    },
    641: {
      items: 3,
    },
  },
});
