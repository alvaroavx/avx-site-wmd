/*!
 * WMD
 * Álvaro Vargas Quezada
 * 2016
 */
(function ($) {

$(document).ready(function() {

	/* Page Animation*/
	var topPixels = 50;
	$('#home').click(function(){
		$('html, body').animate({
	        scrollTop: $("section#home").offset().top - topPixels - 30
	    }, 1000);
	});
	$('#aboutus').click(function(){
		$('html, body').animate({
	        scrollTop: $("section#aboutus").offset().top - topPixels
	    }, 1000);
	});
	$('#team').click(function(){
		$('html, body').animate({
	        scrollTop: $("section#team").offset().top - topPixels
	    }, 1000);
	});
	$('#focus').click(function(){
		$('html, body').animate({
	        scrollTop: $("section#focus").offset().top - topPixels
	    }, 1000);
	});
	$('#contact').click(function(){
		$('html, body').animate({
	        scrollTop: $("section#contact").offset().top - topPixels
	    }, 1000);
	});

	/* Areas Tabs */
	$( function() {
		$('#tabs').tabs({
			event: "mouseover"
		});
	});

	/* Equipo Imagen Movil */
	var speed = 200;
	$('#div-dgonzalez')
		.mouseenter(function(e) {
			$('#dgonzalez').show(speed, 'linear');
		})
		.mouseleave(function(e) {
			$('#dgonzalez').hide(speed, 'linear');

		});
	$('#div-wmoya')
		.mouseenter(function(e) {
			var left = $(this).css('left');
			if(left == '0px') {
				e.preventDefault();
				$(this).animate({
					'left' : '-370px'
				});	
			}
			$('#wmoya').show(speed, 'linear');
		})
		.mouseleave(function(e) {
			e.preventDefault();
			$(this).animate({
				'left' : '0px'
			});
			$('#wmoya').hide(speed, 'linear');
		});
	$('#div-msandoval')
		.mouseenter(function(e) {
			$('#msandoval').show(speed, 'linear');
		})
		.mouseleave(function(e) {
			$('#msandoval').hide(speed, 'linear');
		});
});

}) (jQuery);

