$(document).ready(function(){
  new WOW().init();

  $("#status").fadeOut();
    $("#preloader").delay(450).fadeOut("slow");

    $(window).scroll(function () {
    if ($(window).scrollTop() > 50) {
      $('.Web-Header').addClass('Sticky');
    }
    if ($(window).scrollTop() < 50) {
      $('.Web-Header').removeClass('Sticky');
    }
  });

  var sideMenu = $(".side-panel");
  var panelOverlay = $(".panel-overlay");
  var popupSearch = $(".popup-search");

  $("#openSideMenu").click(function(event) {
      event.preventDefault();
      if (sideMenu.hasClass('side-panel-open')) {
          sideMenu.removeClass('side-panel-open');
          panelOverlay.removeClass('active');
          // $(this).removeClass('active');
      } else {
          sideMenu.addClass('side-panel-open');
          panelOverlay.addClass('active');
          // $(this).addClass('active');
      }
  });
  $("#closeSideMenu").click(function(event) {
      event.preventDefault();      
      if (sideMenu.hasClass('side-panel-open')) {
          sideMenu.removeClass('side-panel-open');
          panelOverlay.removeClass('active');
          // $(this).removeClass('active');
      } else {
          sideMenu.addClass('side-panel-open');
          panelOverlay.addClass('active');
          // $(this).addClass('active');
      }
  });
  $("#openPopupSearch").click(function(event) {
      event.preventDefault();
      if (popupSearch.hasClass('show')) {
          popupSearch.removeClass('show');
          $(this).removeClass('ic-close');
      } else {
          popupSearch.addClass('show');
          $(this).addClass('ic-close');
      }
  });

  // Animacion de Scroll
  let go = $('.desplazar');

  go.click(function(e) {
    e.preventDefault();

    const target = $(this.hash);
    const offsetTop = target.offset().top;
    const duration = 0;

    $('body, html').animate(
      {
        scrollTop: offsetTop,
      },

      duration
      // {
      //   duration: duration,
      //   easing: 'easeInOutCubic',
      // }
    );

  });
  // Animacion de Scroll END

  var myCarousel = document.querySelector('#carouselHero')
  var carousel = new bootstrap.Carousel(myCarousel, {
      interval: 3000,
      pause: false,
      touch: true,
      // wrap: false,
      // ride: false
  })

  var myTwoCarousel = document.querySelector('#carouselImages')
  var carouselTwo = new bootstrap.Carousel(myTwoCarousel, {
      interval: 3000,
      pause: false,
      touch: true,
      // wrap: false,
      // ride: false
  })

}); 
