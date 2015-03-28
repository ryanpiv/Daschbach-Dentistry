/*$(function() {
    $.vegas('slideshow', {
        delay: 10000,
        backgrounds: [
            { src:'images/land7.jpg', fade:1000 },
            { src:'images/land5.jpg', fade:1000 }
        ]
	});
    $.vegas('overlay', {
        src:'vegas/overlays/06.png'
    });
});*/

$(document).ready(function() {
  $('.dropdown-toggle').dropdown();
});


//debugger;
var classData;
var height = window.innerHeight;
height = height * .85;

$(window).resize(function() {
  //height = screen.height;
  height = window.innerHeight;
  height = height * .85;
  //$("#displayDiv").css("height", height);
  $(".modal-content").css("height", height);
});

$(".formDD").click(function() {
  //debugger;
  //$("#displayDiv").css("height", height);
  $(".modal-content").css("height", height);
});
