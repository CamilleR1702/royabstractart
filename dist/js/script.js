$(document).ready(function() {
  $('#headerCanvas').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      dots: true,
      responsive:{
        0:{
          items: 1
        },
        600:{
          items: 1
        },
        1000:{
          items: 1
        },
      }
  });
  $('#mostPopular').owlCarousel({
      loop: true,
      margin: 20,
      center: true,
      nav: false,
      dots: false,
      stagePadding: 50,
      responsive:{
        0:{
          items: 1
        },
        600:{
          items: 3
        },
        1000:{
          items: 3
        },
      }
  });


});
