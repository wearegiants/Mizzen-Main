// @codekit-prepend "site/default-ui.js"
// @codekit-prepend "site/hero.js"
// @codekit-prepend "site/cartsize.js"
// @codekit-prepend "site/royalslider.js"
// @codekit-prepend "site/menusize.js"

function mobileMenu(){
	// Clone that thing
	var a = $('#header-navigation').html();
	var b = $('#mobile-menu_container').html(a);
	$('#mobile-menu_container a').removeClass('btn-nav').addClass('btn-mobile');
	$(".mobile-toggle").swap();
}

function openModal(){
	$('.open--modal').magnificPopup({
		type: 'inline',
		preloader: false,
		modal: true
	});
	$('.fit-link').magnificPopup({
		type: 'ajax',
		midClick: true,
		removalDelay: 1000,
		alignTop: true,
		overflowY: 'scroll',
		callbacks: {
		  parseAjax: function(mfpResponse) {
		    mfpResponse.data = $(mfpResponse.data).find('#fitguide');
		  },
		  ajaxContentAdded: function() {
		  	$('.wallpaper').background();
		  	//$('body').addClass('is-viewing--cart');
		  	//cartSize();
		  	//$(".message-toggle").swap();
		  },
		  beforeClose: function() {
		  	//$('body').removeClass('is-viewing--cart');	
		  }
		}
	});
	$('.cart-link').magnificPopup({
		type: 'ajax',
		midClick: true,
		removalDelay: 1000,
		alignTop: true,
		overflowY: 'scroll',
		//modal: true,
		mainClass: 'mfp-cart fs-grid',
		callbacks: {
		  parseAjax: function(mfpResponse) {
		    mfpResponse.data = $(mfpResponse.data).find('#cart-sidebar');
		  },
		  open: function() {
		  	$('.mfp-wrap').append('<div class="mfp-closer mfp-cover covered"></div>');
		  },
		  ajaxContentAdded: function() {
		  	$('body').addClass('is-viewing--cart');
		  	cartSize();
		  	$(".message-toggle").swap();
		  },
		  beforeClose: function() {
		  	$('body').removeClass('is-viewing--cart');	
		  }
		}
	});
	$(document).on('click', '.popup-modal-dismiss, .mfp-closer', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
	});
}
function closePopup() {
  $.magnificPopup.close();
}

function headerScroll(){
	$(window).scroll(function() {    
		var scroll = $(window).scrollTop();
		//>=, not <=
		if (scroll >= 50) {
		//clearHeader, not clearheader - caps H
			if ($("#header-main").hasClass("index-page")) {
				$("#header-main").addClass("active");
			}
		} else {
			if ($("#header-main").hasClass("index-page")) {
				$("#header-main").removeClass("active");
			}
		}
	});
}

$(document).ready(function(){
	mobileMenu();
	openModal();
	headerScroll();
	$(".fitVids").fitVids();
});