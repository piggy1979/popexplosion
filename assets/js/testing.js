
/*
 Ridiculously Responsive Social Sharing Buttons
 Team: @dbox, @seagoat
 Site: http://www.kurtnoble.com/labs/rrssb
 Twitter: @therealkni

        ___           ___
       /__/|         /__/\        ___
      |  |:|         \  \:\      /  /\
      |  |:|          \  \:\    /  /:/
    __|  |:|      _____\__\:\  /__/::\
   /__/\_|:|____ /__/::::::::\ \__\/\:\__
   \  \:\/:::::/ \  \:\~~\~~\/    \  \:\/\
    \  \::/~~~~   \  \:\  ~~~      \__\::/
     \  \:\        \  \:\          /__/:/
      \  \:\        \  \:\         \__\/
       \__\/         \__\/
*/


;(function(window, jQuery, undefined) {
	'use strict';


	var popupCenter = function(url, title, w, h) {
		// Fixes dual-screen position                         Most browsers      Firefox
		var dualScreenLeft = window.screenLeft !== undefined ? window.screenLeft : screen.left;
		var dualScreenTop = window.screenTop !== undefined ? window.screenTop : screen.top;

		var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
		var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

		var left = ((width / 2) - (w / 2)) + dualScreenLeft;
		var top = ((height / 3) - (h / 3)) + dualScreenTop;

		var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

		// Puts focus on the newWindow
		if (window.focus) {
			newWindow.focus();
		}
	};

	var waitForFinalEvent = (function () {
		var timers = {};
		return function (callback, ms, uniqueId) {
			if (!uniqueId) {
				uniqueId = "Don't call this twice without a uniqueId";
			}
			if (timers[uniqueId]) {
				clearTimeout (timers[uniqueId]);
			}
			timers[uniqueId] = setTimeout(callback, ms);
		};
	})();

	/*
	 * Event listners
	 */

	jQuery('.rrssb-buttons a.popup').on('click', function(e){
		var _this = jQuery(this);
		popupCenter(_this.attr('href'), _this.find('.text').html(), 580, 470);
		e.preventDefault();
	});


})(window, jQuery);




function resizeFunction(){
		var bannerHeight = $('header.banner').height();
		var windowHeight = $(window).height();
		var newHeight = windowHeight-bannerHeight;
		$(".flexslider").height(newHeight);
		$(".slide").height(newHeight);
		//console.log("testing");

}

var slowdown = _.throttle(resizeFunction, 100);
$(window).resize(slowdown);

function init(){
	resizeFunction();
}



$(function(){

	init();

	$(".flexslider").flexslider({
		selector: ".slides > div.slide",
		useCSS: true,
		directionNav: false
	});

	$("#lineuplist").mixItUp({
		selectors : {
			target : 'li.act'
		}
	});
});