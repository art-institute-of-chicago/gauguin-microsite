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

$(document).ready(function() {

	// Declaring selectors ahead of time for speed
	var $window = $(window);
	var $header = $('header');
	var $placeholder = $('#header-placeholder');

	// For development, exit if the header is hidden
	if( $header.length < 1 ) {
		return false;
	}

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

});

// Declare variable in global scope
var Lightbox;

$(document).ready(function() {

	Lightbox = new LightboxManager();

});


function LightboxManager( ) {

	// Capture elements
	$body = $('body');
	$lightbox = $('#lightbox');

	$viewer = $('#viewer');
	$content = $('#content');

	// Initialize the OSD container w/o a tileSource
	// var maxZoomLevel = 6;

	var viewer = OpenSeadragon({

		element: $viewer[0],
		prefixUrl: "https://cdn.jsdelivr.net/npm/openseadragon@2.2/build/openseadragon/images/",
		placeholderFillStyle: "#1F1F1F",

		visibilityRatio: 1,
		minZoomImageRatio: 1,

		// zoomPerClick: Math.pow(maxZoomLevel, 1/3),
		// zoomPerScroll: Math.pow(maxZoomLevel, 1/6),
		// maxZoomLevel: maxZoomLevel,

		showFullPageControl: false,

	});


	// tileSources:


	function open( id ) {

	    // Find our data source container
	    var $data = $('#artwork-' + id );

	    // Load the data contents into lightbox
	    $content.html( $data.html() );

	    // Load the image into OSD!
	    viewer.open({
			type: 'image',
			url:  'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Paul_Gauguin_-_The_Ancestors_of_Tehamana_OR_Tehamana_Has_Many_Parents_%28Merahi_metua_no_Tehamana%29_-_Google_Art_Project.jpg/1200px-Paul_Gauguin_-_The_Ancestors_of_Tehamana_OR_Tehamana_Has_Many_Parents_%28Merahi_metua_no_Tehamana%29_-_Google_Art_Project.jpg'
		});

	    // Show the lightbox
		$body.css('overflow-y','hidden');
		$lightbox.addClass('opened');

		// Scroll to the top of lightbox
		$lightbox[0].scrollTop = 0;

	}


	function close() {

		// Hide the lightbox
		$body.css('overflow-y','');
		$lightbox.removeClass('opened');

	}

	// Expose public methods
	return {
		load: open,
		unload: close,
	}

}
