/*
	Breakpoints.js
	version 1.0
	
	Creates handy events for your responsive design breakpoints
	
	Copyright 2011 XOXCO, Inc
	http://xoxco.com/

	Documentation for this plugin lives here:
	http://xoxco.com/projects/code/breakpoints
	
	Licensed under the MIT license:
	http://www.opensource.org/licenses/mit-license.php

*/
(function(jQuery) {

	var lastSize = 0;
	var interval = null;

	jQuery.fn.resetBreakpoints = function() {
		jQuery(window).unbind('resize');
		if (interval) {
			clearInterval(interval);
		}
		lastSize = 0;
	};
	
	jQuery.fn.setBreakpoints = function(settings) {
		var options = jQuery.extend({
							distinct: true,
							breakpoints: new Array(320,480,768,1024)
				    	},settings);


		interval = setInterval(function() {
	
			var w = jQuery(window).width();
			var done = false;
			
			for (var bp in options.breakpoints.sort(function(a,b) { return (b-a) })) {
			
				// fire onEnter when a browser expands into a new breakpoint
				// if in distinct mode, remove all other breakpoints first.
				if (!done && w >= options.breakpoints[bp] && lastSize < options.breakpoints[bp]) {
					if (options.distinct) {
						for (var x in options.breakpoints.sort(function(a,b) { return (b-a) })) {
							if (jQuery('body').hasClass('breakpoint-' + options.breakpoints[x])) {
								jQuery('body').removeClass('breakpoint-' + options.breakpoints[x]);
								jQuery(window).trigger('exitBreakpoint' + options.breakpoints[x]);
							}
						}
						done = true;
					}
					jQuery('body').addClass('breakpoint-' + options.breakpoints[bp]);
					jQuery(window).trigger('enterBreakpoint' + options.breakpoints[bp]);

				}				

				// fire onExit when browser contracts out of a larger breakpoint
				if (w < options.breakpoints[bp] && lastSize >= options.breakpoints[bp]) {
					jQuery('body').removeClass('breakpoint-' + options.breakpoints[bp]);
					jQuery(window).trigger('exitBreakpoint' + options.breakpoints[bp]);

				}
				
				// if in distinct mode, fire onEnter when browser contracts into a smaller breakpoint
				if (
					options.distinct && // only one breakpoint at a time
					w >= options.breakpoints[bp] && // and we are in this one
					w < options.breakpoints[bp-1] && // and smaller than the bigger one
					lastSize > w && // and we contracted
					lastSize >0 &&  // and this is not the first time
					!jQuery('body').hasClass('breakpoint-' + options.breakpoints[bp]) // and we aren't already in this breakpoint
					) {					
					jQuery('body').addClass('breakpoint-' + options.breakpoints[bp]);
					jQuery(window).trigger('enterBreakpoint' + options.breakpoints[bp]);

				}						
			}
			
			// set up for next call
			if (lastSize != w) {
				lastSize = w;
			}
		},250);
	};
	
})(jQuery);