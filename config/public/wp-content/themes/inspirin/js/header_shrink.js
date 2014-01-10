jQuery(document).ready(function ($) {
	
	$(function(){
		$('.wrapper').data('size','big');
	});

	$(window).scroll(function(){
	console.log($(window).scrollTop());
		var $nav = $('.wrapper');
		if ($('body').scrollTop() > 0) {
		    if ($nav.data('size') == 'big') {
		        $nav.data('size','small').stop().animate({
		            margin-top:'0px'
		        }, 300);
		    }
		} else {
		    if ($nav.data('size') == 'small') {
		        $nav.data('size','big').stop().animate({
		            margin-top:'5px'
		        }, 300);
		    }  
		}
	});

});
