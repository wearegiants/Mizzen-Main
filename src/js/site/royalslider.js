$(window).load(function() {
  $(".slider").royalSlider({
    addActive: true,
    transitionType: 'fade',
    arrowsNav: false,
    controlNavigation: 'none',
    transitionSpeed: 500,
    keyboardNavEnabled: true,
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
});