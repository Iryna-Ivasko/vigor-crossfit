// to inlude foundation plugins add "=" sign below
// require jquery.min.js

// require what-input.min.js

// Core Foundation files
//=require foundation.core.min.js
//=require foundation.util.*.min.js

// require foundation.dropdown.min.js
// require foundation.responsiveMenu.min.js
//=require foundation.responsiveToggle.min.js
//=require foundation.toggler.min.js
//=require foundation.offcanvas.min.js
// require foundation.abide.min.js
// require foundation.accordion.min.js
// require foundation.accordionMenu.min.js
// require foundation.drilldown.min.js
// require foundation.dropdownMenu.min.js
//=require foundation.equalizer.min.js
// require foundation.interchange.min.js
// require foundation.magellan.min.js

// require foundation.reveal.min.js
// require foundation.slider.min.js
// require foundation.sticky.min.js
// require foundation.tabs.min.js
// require foundation.tooltip.min.js
// require foundation.zf.responsiveAccordionTabs.min.js

//=require slick.min.js
//
// Google Map ACF functions
//=require components/map.js

;
(function($) {
	// init Foundation
	$(document).foundation();

	$(document).ready(function() {

		//slick slider
		let $coachesSlider = $('.js-coaches-slider');

		$coachesSlider.slick({
			dots: true,
			infinite: false
		});
	});

	$(window).load(function() {

	});

	$(window).on('resize', function() {

	});

})(jQuery);


















