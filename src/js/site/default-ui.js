$("input[type=checkbox], input[type=radio]").checkbox();
$('.wallpaper').background();
$('.carousel').carousel();
$(".swap").swap();
$("#wrapper__content").on('click',function(){
  $(".swap").swap("deactivate");
});