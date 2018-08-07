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

  /**
  * Build carousel for singlePost
  **/
  $('#singlePost').owlCarousel({
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

  /**
  * display current image (the one in center)
  **/
  function displayCurrentimg(){
    //select currentImg in the carousel
    var active = singlePostCarousel.find(".owl-item.active.center .item .inner .img-responsive");
    currentImg = active[active.length - 1];

    var elementToAdd;
    if(active[0].classList.contains('video')){
      var urlVideo = $('#video-url').text();
      elementToAdd = "<video width=\"320\" height=\"240\" controls> <source src=\"" +urlVideo+ "\" type=\"video/mp4\">Your browser does not support the video tag.</video>";
      $("#current-img img:last-child").remove()
    }else{
      //create a new img element
      var img = document.createElement("IMG");
      //set current img's src
      img.src = currentImg.src;
      img.classList.add('img-responsive');
      img.classList.add('img-fluid');

      elementToAdd = img;

      //remove current img
      $("#current-img img:last-child").remove();
    }

    //add new img
    $('#current-img').html(elementToAdd);
  }

  var singlePostCarousel = $('#singlePost');

  displayCurrentimg();

  /**
  * set position for each item in the carousel
  **/
  $('#singlePost .owl-stage-outer .owl-stage').children().each( function(index){
    $(this).attr('data-position', index);
  });

  /**
  * set image clicked in center and display image
  **/
  $(document).on('click', '.owl-item', function(){
    singlePostCarousel.trigger("to.owl.carousel", [$(this).attr('data-position'), 500, true]);
    displayCurrentimg();
  });


});
