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

        // Get initial slide number
        function getParameterByName(name, url) {
	    if (!url) url = window.location.href;
	    name = name.replace(/[\[\]]/g, "\\$&");
	    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
		results = regex.exec(url);
	    if (!results) return null;
	    if (!results[2]) return '';
	    return decodeURIComponent(results[2].replace(/\+/g, " "));
	}

    var initial = getParameterByName('q') ? getParameterByName('q') : 0;

        var slideshow = new Swiper ('.swiper-container', {

		// Optional parameters
		direction: 'horizontal',
		loop: true,

                initialSlide: 1,
   	        onInit: function(swipper) {
		    if (initial > 1) {
			mySwiper.swipeTo(initial);
		    }
	        },
	    
		autoplay: 2000,
		speed: 650,

		// If we need pagination
		pagination: '.swiper-pagination',

	});

});
