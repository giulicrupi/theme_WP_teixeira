








    if (window.matchMedia("(min-width:400px)").matches) {
    $(document).ready(function(){
      $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 390 ) { // check if user scrolled more than 50 from top of the browser 
          // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
$(".headerr").addClass("diminui-menu");
$(".logo").addClass("diminui-logo");
$(".head-pricipal").addClass("troca-cor");






        } else {


$(".headerr").removeClass("diminui-menu");
$(".logo").removeClass("diminui-logo");
$(".head-pricipal").removeClass("troca-cor");


        }
      });
    });}



        if (window.matchMedia("(max-width:980px)").matches) {
    $(document).ready(function(){
      $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 390 ) { // check if user scrolled more than 50 from top of the browser 
          // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
$(".headerr").addClass("diminui-menu");
$(".logo").addClass("diminui-logo");
$(".head-pricipal").addClass("troca-cor");






        } else {


$(".headerr").removeClass("diminui-menu");
$(".logo").removeClass("diminui-logo");
$(".head-pricipal").removeClass("troca-cor");


        }
      });
    });}







    // if (window.matchMedia("(min-width:1080px)").matches) {
    // $(document).ready(function(){
    //   $(window).scroll(function() { // check if scroll event happened
    //     if ($(document).scrollTop() > 3080) { // check if user scrolled more than 50 from top of the browser 
    //       // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)


    //     } 
    //   });
    // });}








     $('.botao a[href^="#"]').on('click', function(e) {
  e.preventDefault();
  var id = $(this).attr('href'),
      targetOffset = $(id).offset().top;
      
  $('html, body').animate({ 
    scrollTop: targetOffset - 100
  }, 500);
});   

     $('.links a[href^="#"]').on('click', function(e) {
  e.preventDefault();
  var id = $(this).attr('href'),
      targetOffset = $(id).offset().top;
      
  $('html, body').animate({ 
    scrollTop: targetOffset - 100
  }, 500);
});   






