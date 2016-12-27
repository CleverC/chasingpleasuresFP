//-----------------------------------GENERAL---------------------------------//
//--------------------------------------------------------------------------//

//--Page Scroll on nav menu item click--//
$(function() {
    $('.page-scroll a').bind('click', function(event) {
        var $anchor = $(this);
        var $anchor_scroll = $($anchor.attr('href')).offset().top;
        var $anchor_scroll_calc = $anchor_scroll;
        $('html, body').stop().animate({
            scrollTop: $anchor_scroll_calc
        }, 1500);
        event.preventDefault();
    });
});

//--Hides/shows toTop arrow on scroll--//
$(window).scroll(function() {

    if ($(this).scrollTop()>150)
     {
        $('.scrollicon').show();
     }else{
      $('.scrollicon').hide();
     }
 });

//-- Hide toTop arrow on load --//
$(document).scroll(function(){
	if($(this).scrollTop() > 1){  
		$('.scrollicon').css('opacity', '0.5');
		$('.scrollicon').css('visibility', 'visible');
	}
});

//-- Closes mobile menu on click anywhere --//
    if($(window).width()<= 480){
        $(".container").click(function(){   
        $('.nodrop').css('display', 'none');
    });
}

//--Change Hero Image every three seconds--//
// Look in cycle_script.js.




// function displayNextImage() {
//               x = (x === images.length - 1) ? 0 : x + 1;
//               document.getElementById("img").src = images[x];
//           }

//           function displayPreviousImage() {
//               x = (x <= 0) ? images.length - 1 : x - 1;
//               document.getElementById("img").src = images[x];
//           }

//           function startTimer() {
//               setInterval(displayNextImage, 3000);
//           }

//           var images = [], x = -1;
//           images[0] = "_n.jpg.jpg";
//           images[1] = "sdf.jpg.jpg";
//           images[2] = "pregnant.jpg";

