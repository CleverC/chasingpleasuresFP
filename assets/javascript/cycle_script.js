jQuery(function($){

    // Cycle code
    $('.slides').cycle({
        fx:     'fade',
        speed:   740,
        timeout: 1000
    }).cycle("pause");

    $('.slidesContact').cycle({
        fx:     'fade',
        speed:   2900,
        timeout: 1000
    }).cycle("resume");

    $('.slidesQuotes').cycle({
        fx:     'fade',
        speed:   1000,
        timeout: 0,
        next:'.cc_qbtn'
    });


    // Pause & play on hover
    $('.slideshow-block').hover(function(){
        $(this).find('.slides').addClass('active').cycle('resume');
    }, function(){
        $(this).find('.slides').removeClass('active').cycle('pause');
    });
});

