// Handle query string for slideshow
$(document).ready( function() {

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
