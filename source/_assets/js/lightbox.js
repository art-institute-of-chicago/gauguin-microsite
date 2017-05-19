// Declare variable in global scope
var Lightbox;

$(document).ready(function() {

	Lightbox = new LightboxManager();

});


function LightboxManager( ) {

	// Capture elements
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

		// TODO: Replace w/ custom buttons on desktop
		showNavigationControl: false,

	});


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
		$lightbox.addClass('opened');

		// Scroll to the top of lightbox
		$lightbox[0].scrollTop = 0;

	}


	function close() {

		// Hide the lightbox
		$lightbox.removeClass('opened');

	}


	function expand( ) {
		$lightbox.toggleClass('expanded');
	}


	// Expose public methods
	return {
		load: open,
		unload: close,
		expand: expand,
	}

}
