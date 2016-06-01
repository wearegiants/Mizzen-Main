function menusize(){
	$( window ).resize(function() {
  	var wh = $(window).height();
  	var hh = $("#header-main__inner").height();
  	var mh = wh - hh;
  	$('#header__dropdown').css('max-height', mh);
  }).resize();
}

menusize();