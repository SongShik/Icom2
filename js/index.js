/* menu */

/* mudar cor do topo*/
$(window).scroll(function() { 
  var scroll = $(window).scrollTop();

  if (scroll > 0) {
    $('.menu').addClass('menu-fixo-auxiliar');
} else {
    $('.menu').removeClass('menu-fixo-auxiliar');
}

  if (scroll > 400) {
      $('.menu').addClass('menu-fixo');
  } else {
      $('.menu').removeClass('menu-fixo');
  }
});



/* animação no scroll */
$('#quemSomos').click(function(e){
 e.preventDefault();

 var id = $(this).attr('href'),
  targetOffset = $(id).offset().top;
  $('html , body').animate({
    scrollTop: targetOffset
  }, 1200);


});



/* carousel */
$(document).ready(function() {


  $("#depoimentos-carousel").on("slide.bs.carousel", function(e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $(".carousel-item").length;

    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end
        if (e.direction == "left") {
          $(".carousel-item")
            .eq(i)
            .appendTo(".carousel-inner");
        } else {
          $(".carousel-item")
            .eq(0)
            .appendTo($(this).find(".carousel-inner"));
        }
      }
    }
  });
});

/* carrousel */
$(document).ready(function(){

  $('#seguradoras-slider').owlCarousel({
      loop:true,
      margin:10,
      autoplay:true,
      autoplayTimeout:2000,
      smartSpeed:1000,
      
      autoplayHoverPause:true,
      responsive:{
        0:{
          items:2,
        },
        600:{
            items:4,
        },
        1000:{
            items:7,
        }
    }     
  });

  $("#depoimento-slider").owlCarousel({
      loop:true,
      autoplay:true,
      autoplayTimeout:5000,
      smartSpeed:1000,
      responsive:{
        0:{
            items:1,
            autoplayTimeout:10000,
            smartSpeed:1000,
        },
        750:{
            items:2,
        },
        1000:{
            items:2,
        },
        1300:{
            items:3,
        }
    }     
  });


$('#slider-imagens-80').owlCarousel({
  loop:true,
  autoplay:true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:1
      }
  }
});

$('#testimonial-slider').owlCarousel({
  loop:true,
  autoplay:true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:3
      }
  }
});



});


/* wow animated.css 
new WOW().init();
 */
/* voltar ao topo 
$(function(){
  $(document).on( 'scroll', function(){
      if ($(window).scrollTop() > 100) {
          $('div.smoothscroll-top, div.voltar-topo').addClass('show');
      } else {
          $('div.smoothscroll-top, div.voltar-topo').removeClass('show');
      }
  });
  $('div.smoothscroll-top').on('click', scrollToTop);
});

function scrollToTop() {
  verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
  element = $('body');
  offset = element.offset();
  offsetTop = offset.top;
  $('html, body').animate({scrollTop: offsetTop}, 600, 'linear');
}

*/