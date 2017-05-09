$(document).ready(function() {

	// Declaring selectors ahead of time for speed
	var $window = $(window);
	var $header = $('header');
	var $placeholder = $('#header-placeholder');

	// "Sticky" the navigation when the user scrolls below the header
	var offsetHeader;
	var heightHeader;

	var updateHeaderStats = function() {
		offsetHeader = $header.offset().top;
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

	// Initialize the slideshow
	var slideshow = new Swiper ('.swiper-container', {

		// Optional parameters
		direction: 'horizontal',
		loop: true,

		hashnav: true,
		replaceState: true,

		autoplay: 2000,
		speed: 650,

		// If we need pagination
		pagination: '.swiper-pagination',

	});

});