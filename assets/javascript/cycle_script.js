jQuery(function($){

    // Cycle plugin
    $('.slides').cycle({
        fx:     'fade',
        speed:   10,
        timeout: 1000
    }).cycle("pause");

    // Pause & play on hover
    $('.slideshow-block').hover(function(){
        $(this).find('.slides').addClass('active').cycle('resume');
    }, function(){
        $(this).find('.slides').removeClass('active').cycle('pause');
    });

});