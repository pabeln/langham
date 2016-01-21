/*
 *  Module: carousel
 */

require('./vendor/jquery.owl.carousel');
var $ = require('jquery');
var $carousel = $('.js-owlCarousel');

/**
 * Initialize carousels
 */
function init() {
	$carousel.owlCarousel({
		items: 1,
		itemsCustom: [
			[0, 1]
		],
		rewindNav: true,
		navigation: true,
		navigationText: ['&lsaquo;', '&rsaquo;'], // use icon font to display arrows
		pagination: true,
		autoplay: true,
		stopOnHover: true,
		responsiveBaseWidth: window //for IE8 set to main wrapper
	});
};

function darkenFadeInOnScroll(){

	/* Every time the window is scrolled ... */
	$(window).scroll( function(){
		/* Check the location of each desired element */
		$('.slider').each( function(i) {
			var overlay = $(this).find('.trans-overlay');
			var txt = $(this).find('.owlCarousel-caption');
			var middle_of_object = $(this).offset().top + ($(this).outerHeight() / 2);
			var bottom_of_window = $(window).scrollTop() + $(window).height();
			
			/* If the object is completely visible in the window, fade it it */
			if( bottom_of_window > middle_of_object ){
				overlay.animate(
					{'opacity':'.6'},
					1000,
					function() {
						txt.animate({'opacity': 1}, 1000);
					});
			}
			
		}); 
	});

};

/**
 * Destroy carousel
 * @param  {string} selector The selector of the carousel to destroy
 * @return {boolean}         True if carousel destroyed
 */
function destroy(selector) {
	if ( $carousel.length ) {
		$carousel.data('owlCarousel').destroy();
		return true;
	}
	return false;
}

/**
 * Public API
 * @type {Object}
 */
module.exports = {
	init: init,
	destroy: destroy,
	darkenFadeInOnScroll: darkenFadeInOnScroll
};