jQuery(document).ready(function ($) {
	
	$(function(){
		$('.cabecera').data('size','big');
	});

	$(window).scroll(function(){
	console.log($(window).scrollTop());
		var $nav = $('.cabecera');
		if ($('body').scrollTop() > 0) {
		    if ($nav.data('size') == 'big') {
		        $nav.data('size','small').stop().animate({
		            marginTop:'0px',
					marginBottom:'0px'
		        }, 100);
		    }
		} else {
		    if ($nav.data('size') == 'small') {
		        $nav.data('size','big').stop().animate({
		            marginTop:'20px',
					marginBottom:'25px'
		        }, 100);
		    }  
		}
	});

});
