$( window ).resize(function() {
	var wh = $(window).height();
	var ch = $('#cart-sidebar__header').height();
	var cf = $('#cart-sidebar__footer').height();
	var ih = wh - (ch + cf);
	$('#cart-sidebar__content').css('height', ih);
}).resize();