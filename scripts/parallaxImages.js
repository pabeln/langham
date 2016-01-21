/*
 *  Module: general site scripts
 */
var $ 			= require('jquery');
var parallax 	= require('./vendor/parallax.min.js');


/**
 * Initialize scripts
 */
function init() {

	// top image parallax
	$('.top').parallax({
	 	imageSrc: $('.top').data('image'),
	 	positionY: 'bottom'
	});
	var paraImages = $('section.para');
	paraImages.each( function(){
		//console.log($(this).data('image'));
		$(this).parallax({
			imageSrc: $(this).data('image'),
		 	position: 'left bottom', 
		 	bleed: 2000
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