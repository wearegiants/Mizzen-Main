$(window).load(function() {
  $(".slider").royalSlider({
    addActive: true,
    transitionType: 'fade',
    arrowsNav: false,
    controlNavigation: 'bullets',
    transitionSpeed: 500,
    keyboardNavEnabled: true,
    loop: true,
    //autoHeight: true,
    autoPlay: {
        // autoplay options go gere
        enabled: true,
        delay: 6000,
        pauseOnHover: true
      }
  });  
  var slider = $(".slider").data('royalSlider');
  function sliderColors(){
    var hue = slider.currSlide.content.attr('data-shade');
    $('#header, #header-main').removeClass('is-dark', 'is-light');
    $('#header, #header-main').addClass(hue);
  }
  sliderColors();
  slider.ev.on('rsBeforeAnimStart', function() {
    sliderColors();
    //alert('yolo');
  });
  $(".home-carousel__nav--next").on('click',function(){
    slider.next();
  });
  $(".home-carousel__nav--prev").on('click',function(){
    slider.prev();
  });
});
