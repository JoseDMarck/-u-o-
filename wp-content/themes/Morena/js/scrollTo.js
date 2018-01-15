//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".menuFixed").offset().top > 100) {
        $(".GotoTop").fadeIn();
    } else {
         $(".GotoTop").fadeOut();
    }
});


$(".GotoTop").click(function() {
    $('html, body').animate({
        scrollTop: $(".topMenu").offset().top
    }, 400);
});