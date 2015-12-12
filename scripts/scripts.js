/*
 *  Module: dealer filter
 */
var $ 			= require('jquery');
var parallax 	= require('./vendor/parallax.min.js');


/**
 * Initialize dealer filter
 */
function init() {

	$('section.top .fadeIn').delay(1000).animate({ opacity: 1 }, 700);

	$(window).scroll(function () {
		var scrollTop = $(window).scrollTop();
		var height = $(window).height();
		$('.top .copy').css({	
			'opacity' : ((height - scrollTop) / height)
		});
	});

	$('.top').parallax({
		imageSrc: $('.top').data('image-src'),
		positionY: 'top'
	});

	// expando
	/*$('.plan-wrapper').each(function(){
		var header = $(this).find('.plan-header');
		var content = $(this).find('.floorplan');
		header.on('click', function(){
			if (content.is(':visible')) {
				content.slideUp('slow');
			} else {
				content.slideDown('slow');
			}
		});

	});*/
	$('.expando-wrapper').each(function(){
		var header = $(this).find('.expando-trigger');
		var content = $(this).find('.expando');
		header.on('click', function(){
			if (content.is(':visible')) {
				content.slideUp('slow');
			} else {
				content.slideDown('slow');
			}
		});

	});
}

/**
 * Public API
 * @type {Object}
 */
module.exports = {
	init: init
};