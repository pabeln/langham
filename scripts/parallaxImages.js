/*
 *  Module: general site scripts
 */
var $ 			= require('jquery');
var parallax 	= require('./vendor/parallax.min.js');


/**
 * Initialize scripts
 */
function init() {

			/*
	var $img = $('.parallax');

	$img.each(function(){
		var section = $(this);
		var fullImg = $(this).data('image-src');
		//console.log(fullImg);
		var img = $('<img src="' + fullImg + '"/>').load(function(){
			//console.log(this.width + ' x ' + this.height);
			var w = this.width;
			var h = this.height;
			var newH = window.innerWidth * ( h / w );
			console.log('newH: ' + newH);
			section.attr('height', newH+'px');
		});
	});
			*/

	// top image parallax
	$('.top').parallax({
	 	imageSrc: $('.top').data('image'),
	 	position: 'center top',
	 	speed: .8
	});
	/*
	$('.parallax').parallax({
		imageSrc: $(this).data('image'),
		position: 'center bottom', 
		speed: .7
	});

	*/
	var paraImages = $('section.parallax');
	paraImages.each( function(){
		//console.log($(this).data('image'));
		$(this).parallax({
			imageSrc: $(this).data('image'),
		 	//position: '-20px -100px',
		 	position: 'center bottom', 
		 	speed: .8
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