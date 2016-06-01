function cartSize(){
  $( window ).resize(function() {
  	var wh = $(window).height();
  	var ch = $('#cart-sidebar__header').height();
  	var cf = $('#cart-sidebar__footer').height();
  	var ih = wh - ch;
  	$('#cart-sidebar__content').css('height', ih);
    //console.log(wh);
    //console.log(ih);
  }).resize();
}

cartSize();