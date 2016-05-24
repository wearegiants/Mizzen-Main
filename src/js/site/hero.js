$(window).resize(function(){

	var wh = $(window).height();

	$('.hero--wh, .slider, .slider .carousel__slide').css({
		height: wh,
	});

}).resize();