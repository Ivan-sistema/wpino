var $ = jQuery.noConflict();

$(document).ready(function(e){

$('a[href*="#"]:not([href="#"])').click(function() {

    var target = $(this.hash);

    if (target.length) {
      $('html, body').animate({ scrollTop: target.offset().top }, 1000);
      $('.menu-header').removeClass('active-menu');
      $('.abrir-nav').removeClass('abrir-nav-hamburguer');
      return false;
    }

  });

 $('.abrir-nav').click(function(){
  $('.menu-header').toggleClass('active-menu');
  $('.social-menu').toggleClass('active-social');
  $(this).toggleClass('abrir-nav-hamburguer');
 }); 



$('#onde_estamos > div:nth-child(1) > div.col-right >  div').click(function(){
 $('.container.calendar-form').toggleClass('active-calendar');

});

$('.tab-title').hover(function(){
  $(this).find('.border-hover').toggleClass('active-border-hover');
});



$('.tab-1').click(function(){
  $('.tab-content-2,.tab-content-3,.tab-content-4').css('display','none');
  $('.tab-content-1').css('display','block');


});
$('.tab-2').click(function(){
  $('.tab-content-1,.tab-content-3,.tab-content-4').css('display','none');
  $('.tab-content-2').css('display','block');


});

$('.tab-3').click(function(){
  $('.tab-content-1,.tab-content-2,.tab-content-4').css('display','none');
  $('.tab-content-3').css('display','block');


});
$('.tab-4').click(function(){
  $('.tab-content-1,.tab-content-2,.tab-content-3').css('display','none');
  $('.tab-content-4').css('display','block');
});

});

