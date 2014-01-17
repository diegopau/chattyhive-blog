jQuery(document).ready(function ($) {
	
	$(function(){
		$('.cabecera').data('size','big');
	});

	$(window).resize(function() {
			
		var $nav = $('.cabecera');
		if ($('#header').css("position")=="fixed"){
			$(window).scroll(function(){
				if ($('body').scrollTop() > 70) {
					if ($nav.data('size') == 'big') {
						$nav.data('size','small').stop().animate({marginTop:'0px',marginBottom:'0px'}, 100);
						$('#main').css("margin","130px 0 0");
						$('.ft-logo img').css("cssText", "max-width: 70% !important");
						$('.ft-logo').css("margin","8px 0 8px 0");
						$('.ft-icons a i').css("font-size","20px");
					}
				}
				else {
					if ($nav.data('size') == 'small') {
						$('#main').css("margin","90px 0 0");
						$nav.data('size','big').stop().animate({marginTop:'22px',marginBottom:'25px'}, 100);
						$('.ft-logo img').css("cssText", "max-width: 100% !important");
						$('.ft-logo').css("margin","0px 0 0px 0");
						$('.ft-icons a i').css("font-size","24px");
					}  
				}
			});
		}
		else{
			$('#main').css("margin","0px 0 0");
			$nav.data('size','big').stop().animate({marginTop:'22px',marginBottom:'25px'}, 100);
			$('.ft-logo img').css("cssText", "max-width: 100% !important");
			$('.ft-logo').css("margin","0px 0 0px 0");
			$('.ft-icons a i').css("font-size","24px");
		}
		      

		
	});

    });
