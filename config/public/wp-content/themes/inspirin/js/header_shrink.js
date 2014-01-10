$(function(){
    $('#header').data('size','big');
});

$(window).scroll(function(){
console.log($(window).scrollTop());
    var $nav = $('#header');
    if ($('body').scrollTop() > 0) {
        if ($nav.data('size') == 'big') {
            $nav.data('size','small').stop().animate({
                margin:'0px'
            }, 600);
        }
    } else {
        if ($nav.data('size') == 'small') {
            $nav.data('size','big').stop().animate({
                margin:'5px'
            }, 600);
        }  
    }
});
