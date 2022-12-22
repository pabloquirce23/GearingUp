// blog slider
$(document).ready(function () {
  var width = $(window).width();
  if (width < 600) {
    $('.owl-carousel').owlCarousel({
      items: 1,
      loop: true,
      itemsDesktop: [1199, 3],
      itemsDesktopSmall: [980, 2],
      itemsMobile: [600, 1],
      nav: true,
      navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
      autoplay: true,
      autoPlaySpeed: 3000,
      autoPlayTimeout: 3000,
      autoplayHoverPause: true,
    });
  }

  $('.owl-carousel').owlCarousel({
    items: 3,
    loop: true,
    itemsDesktop: [1199, 3],
    itemsDesktopSmall: [980, 2],
    itemsMobile: [600, 1],
    nav: true,
    navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
    autoplay: true,
    autoPlaySpeed: 3000,
    autoPlayTimeout: 3000,
    autoplayHoverPause: true,
  });
});
