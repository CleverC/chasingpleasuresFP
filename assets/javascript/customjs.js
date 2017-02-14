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

//--Hides/shows right left gallery arrow on scroll--//
$(window).scroll(function() {

    if ($(this).scrollTop()>90)
     {
        $('.scrolliconb').show();
     }else{
      $('.scrolliconb').hide();
     }
 });

//-- Hide toTop arrow on load --//
$(document).scroll(function(){
  if($(this).scrollTop() > 1){  
    $('.scrollicon').css('opacity', '0.5');
    $('.scrollicon').css('visibility', 'visible');
  }
});

//-- Hide toTop arrow on load --//
$(document).scroll(function(){
	if($(this).scrollTop() > 1){  
		$('.scrolliconb').css('opacity', '0.5');
		$('.scrolliconb').css('visibility', 'visible');
	}
});

//-- Closes mobile menu on click anywhere --//
    if($(window).width()<= 480){
        $(".container").click(function(){   
        $('.nodrop').css('display', 'none');
    });
}

//--Remove titile attribute--//

$("a").mouseover(function(){
    $("a").removeAttr("title");
});

//Flips Social Media/Copy/siteby info section for mobile 

 var $iW = $(window).width();
  if ($iW < 415){
     $('.cc_copyR').insertAfter('.cc_social-list');
     $('.cc_sitebyclassLink').insertAfter('.cc_social-list');
  }


//--IE Fix picutes ie--//

function addClass(el, className) {
    if (el.classList) el.classList.add(className);
    else if (!hasClass(el, className)) el.className += ' ' + className;
}

var imgContainers, len;

if (!Modernizr.objectfit) {
    imgContainers = document.querySelectorAll('.post__image-container');
    len = imgContainers.length;

    for (var i=0; i<len; i++) {
        var $container = imgContainers[i],
                imgUrl = $container.querySelector('img').getAttribute('src');
        if (imgUrl) {
            $container.style.backgroundImage = 'url(' + imgUrl + ')';
            addClass($container, 'compat-object-fit');
        }
    }
}