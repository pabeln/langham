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
	 	position: 'center top',
	 	speed: .7
	});
	var paraImages = $('section.para');
	paraImages.each( function(){
		//console.log($(this).data('image'));
		$(this).parallax({
			imageSrc: $(this).data('image'),
		 	//position: '-20px -100px',
		 	position: 'center bottom', 
		 	speed: .7
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