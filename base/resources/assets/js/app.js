
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

$(".hover").mouseleave(
    function () {
      $(this).removeClass("hover");
    }
  );

$('.carousel').carousel({
  interval: 2000
})