jQuery(document).ready(function ($) {
	
	$(function(){
		$('.cabecera').data('size','big');
	});

	$(window).scroll(function(){
		var $nav = $('.cabecera');
		if ($('body').scrollTop() > 0) {
		    if ($nav.data('size') == 'big') {
		        $nav.data('size','small').stop().animate({
		            marginTop:'0px',
					marginBottom:'0px'
		        }, 100)
				$('.ft-logo img').style.setProperty('max-width', '70%','important');
				$('.menuarriba').css("font-size","17px");
				$('.ft-icons a i').css("font-size","20px");
		    }
		} else {
		    if ($nav.data('size') == 'small') {
		        $nav.data('size','big').stop().animate({
		            marginTop:'22px',
					marginBottom:'25px'
		        }, 100);
				$('.ft-logo img').style.setProperty('max-width', '100%','important');
				$('.menuarriba').css("font-size","20px");
				$('.ft-icons a i').css("font-size","24px");
		    }  
		}
	});

});
