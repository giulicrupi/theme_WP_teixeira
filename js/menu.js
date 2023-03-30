








    if (window.matchMedia("(min-width:400px)").matches) {
    $(document).ready(function(){
      $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 390 ) { // check if user scrolled more than 50 from top of the browser 
          // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
        $(".menu").addClass("bg-scroll");







        } else {


          $(".menu").removeClass("bg-scroll");




        }
      });
    });}



//         if (window.matchMedia("(max-width:980px)").matches) {
//     $(document).ready(function(){
//       $(window).scroll(function() { // check if scroll event happened
//         if ($(document).scrollTop() > 390 ) { // check if user scrolled more than 50 from top of the browser 
//           // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
// $(".logo-nav").addClass("mudar-logo");






//         } else {
// $(".logo-nav").removeClass("mudar-logo");




//         }
//       });
//     });}







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

 


$(".sect2-prod ul li:nth-child(1)").addClass("active");
$(".sect2-prod .tab-content div:nth-child(1)").addClass("active");
$(".sect2-prod .tab-content div:nth-child(1)").addClass("show");

$(".sect4-prod ul li:nth-child(1)").addClass("active");
$(".sect4-prod ul li:nth-child(1) a").addClass("active");
$(".sect4-prod .tab-content div:nth-child(1)").addClass("active");
$(".sect4-prod .tab-content div:nth-child(1)").addClass("show");

$(".sectvideo-prod ul li:nth-child(1)").addClass("active");
$(".sectvideo-prod .tab-content div:nth-child(1)").addClass("active");
$(".sectvideo-prod .tab-content div:nth-child(1)").addClass("show");


