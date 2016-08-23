/*//navigation
var a = $("nav").offset().top;
if ($(window).width() > 768) {
$(window).scroll(function(){
    if($(this).scrollTop() > a)
    {
        $("nav").css("background", "white");
    } else {
       $("nav").css("background", "rgba(255,255,255,0.5)");
    }
});
} else {
	     $("nav").css("background", "white");
	}

 $(window).resize(function() {
  if ($(window).width() < 768) {
							$("nav").css("background", "white");
  }
});

var a = $("nav").offset().top;
 $(window).resize(function() {
  if ($(window).width() > 768) {
									if($(this).scrollTop() > a)
							{
											$("nav").css("background", "white");
							} else {
										$("nav").css("background", "rgba(255,255,255,0.5)");
							}
  }

});
//*/
$(document).ready(function () {
        window.scrollTo(0,0);
    });

//fade jumbotron

//$(window).scroll(function(){
  //  $(".jumbotron").css("opacity", 1 - $(window).scrollTop() / 800);
  //});

//smooth scrolling

//Default active on home
$('#s1').addClass("active");


/*
Smooth scrolling
*/
$("#home").click(function() {
     $('html, body').animate({
         scrollTop: $("#1").offset().top
     }, 600);
  return false;
 });

$("#s1").click(function() {
     $('html, body').animate({
         scrollTop: $("#1").offset().top
     }, 600);
  return false;
 });

$("#s2").click(function() {
     $('html, body').animate({
         scrollTop: $("#2").offset().top-50
     }, 600);
  return false;
 });

	$("#portfolio").click(function() {
     $('html, body').animate({
         scrollTop: $("#2").offset().top
     }, 600);
  return false;
 });

$("#s3").click(function() {
     $('html, body').animate({
         scrollTop: $("#3").offset().top
     }, 600);
  return false;
 });
 $("#s4").click(function() {
      $('html, body').animate({
          scrollTop: $("#4").offset().top
      }, 600);
   return false;
  });

		/*
Using jquery waypoints to change active on scroll
*/
$('#2').waypoint(function() {
		$("ul li").children().removeClass("active");
  $("#s2").addClass("active");

}, { offset: 50 });

$('#3').waypoint(function() {
  $("ul li").children().removeClass("active");
  $("#s3").addClass("active");
}, { offset: 100 });

$('#4').waypoint(function() {
  $("ul li").children().removeClass("active");
  $("#s4").addClass("active");
}, { offset: 0 });

$('#1').waypoint(function() {
  $("ul li").children().removeClass("active");
  $("#s1").addClass("active");
}, { offset: -100 });

/*
Close mobile menu on click
*/
$(".navbar-default .navbar-nav>li>a").click(function() {
console.log("Clicked");
$(".navbar-collapse").removeClass("in");
});
