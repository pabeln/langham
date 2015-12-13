/*
 *  Main entry point
 */

require('es5-shim');
require('consolelog');

var $               = require('jquery');
var responsive      = require('./responsive.js');
var AnalyticsModule = require('./analytics.js');
var analytics 		= new AnalyticsModule({ gaid: '' });
var scripts 		= require('./scripts.js');
var fadeInOnScroll	= require('./fadeInOnScroll.js');

/**
 * Initialize the app on DOM ready
 */
$(function() {
	//analytics.init();
	responsive.init();
	scripts.init();
	fadeInOnScroll.init();
});