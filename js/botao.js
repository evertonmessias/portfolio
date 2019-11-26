$(function () {
    
    $(window).scroll(function(){
        if ($(this).scrollTop() > 200) {
            $('.paracima').fadeIn();
        } else {
            $('.paracima').fadeOut();
        }
    });

    $('.paracima').click(function(){
        $('html').animate({scrollTop : 0},500);
        return false;
    });

})