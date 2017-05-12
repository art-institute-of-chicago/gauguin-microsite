$(document).ready(function() {

	// Declaring selectors ahead of time for speed
	var $window = $(window);
	var $header = $('header');
	var $placeholder = $('#header-placeholder');

	// "Sticky" the navigation when the user scrolls below the header
	var offsetHeader;
	var heightHeader;

	var updateHeaderStats = function() {
		if( $placeholder.is(":visible") ) {
			offsetHeader = $placeholder.offset().top;
		} else {
			offsetHeader = $header.offset().top;
		}
		heightHeader = $header.outerHeight();
		$placeholder.height( heightHeader );
	};

	updateHeaderStats();

	$window.resize( updateHeaderStats );

	var stickyNavigation = function() {
		if( $window.scrollTop() > offsetHeader ) {
			$header.addClass('sticky');
			$placeholder.show();
		}else{
			$header.removeClass('sticky');
			$placeholder.hide();
		}

	};

	stickyNavigation();

	$window.scroll( stickyNavigation );
	$window.resize( stickyNavigation );

	// Helper function to get query string, sufficient for our purpose
	function param(name) {
		return (location.search.split(name + '=')[1] || '').split('&')[0];
	}

	// Get initial slide number
	var initial = param('q') || 0;

	// Initialize the slideshow
	var slideshow = new Swiper ('.swiper-container', {

		loop: true,

		initialSlide: 0, // zero-indexed, default is 0

		onInit: function( swiper ) {
			swiper.slideTo(initial, 0);
		},

		autoplayDisableOnInteraction: false,
		autoplay: 2000,
		speed: 650,

		pagination: '.swiper-pagination',

	});

});
