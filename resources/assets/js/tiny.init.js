// Review
if (document.getElementsByClassName('carrusel_show')[0] != undefined) {
  var slider = tns({
      container: '.carrusel_show',
      loop: true,
      items: 1,
      mouseDrag: true,
      nav: true,
      navPosition: 'bottom',
      autoplay: true,
      autoplayButtonOutput: false,
      swipeAngle: false,
      autoWidth: true,
      controls: false,
      // controlsContainer: '#review_slide_control',
      responsive: {
        320: {},
        576: {},
        992: {}
      }
  });
}

// Carrusel Programa
if (document.getElementsByClassName('carrusel_programa')[0] != undefined) {
  var slider = tns({
      container: '.carrusel_programa',
      loop: true,
      items: 1,
      mouseDrag: true,
      nav: false,
      autoplay: true,
      autoplayButtonOutput: false,
      swipeAngle: false,
      controls: false,
      speed: 300,
      swipeAngle: false,
      edgePadding: 60,
      autoWidth: true,
      gutter: 18,
      center: true,
      // controlsContainer: '#product_all_slide_01_control',
      responsive: {
        320: {},
        576: {},
        992: {}
      }
  });
}

// Carrusel Cena y show
if (document.getElementsByClassName('carrusel_info')[0] != undefined) {
  var slider = tns({
      container: '.carrusel_info',
      loop: true,
      items: 1,
      mouseDrag: true,
      nav: false,
      autoplay: false,
      autoplayButtonOutput: false,
      swipeAngle: false,
      controls: false,
      speed: 300,
      swipeAngle: false,
      edgePadding: 60,
      autoWidth: true,
      gutter: 18,
      center: true,
      // controlsContainer: '#product_all_slide_01_control',
      responsive: {
        320: {},
        576: {},
        992: {}
      }
  });
}