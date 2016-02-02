/*
 *  Module: general site scripts
 */
var $ 			= require('jquery');


/**
 * Initialize scripts
 */
function init() {

	// top image overlay fade in
	$('section.top .fadeIn').delay(1000).animate({ opacity: 1 }, 700);
	$(window).scroll(function () {
		var scrollTop = $(window).scrollTop();
		var height = $(window).height();
		$('.top .copy').css({	
			'opacity' : ((height - scrollTop) / height)
		});
	});

	// expando for pressroom and floor plans
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

	// mobile nav
	$('.mobile-nav-icon').on('click', function (){
		$('.mobile-nav').slideToggle('slow');
	});


	// fix menu
	var nav = $('header .nav');
    
    $(window).scroll(function () {
        if ($(this).scrollTop() > 136) {
            nav.addClass("fixed");
        } else {
            nav.removeClass("fixed");
        }
    });
}

/**
 * Public API
 * @type {Object}
 */
module.exports = {
	init: init
};