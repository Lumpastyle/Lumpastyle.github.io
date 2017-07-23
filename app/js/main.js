$(function() {
    $('a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top)-100
        }, 1000, 'easeInOutExpo');
        event.preventDefault();
    });
});