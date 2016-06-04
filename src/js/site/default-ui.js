$("input[type=checkbox], input[type=radio]").checkbox();
$('.wallpaper').background();
$('.carousel').carousel();
$('.perf__carousel').carousel();
$("input[type=number]").number();
$(".swap").swap();
$("#wrapper__content").on('click',function(){
  $(".swap").swap("deactivate");
});