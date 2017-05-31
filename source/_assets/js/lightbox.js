// Declare variable in global scope
var Lightbox;

$(document).ready(function() {

	Lightbox = new LightboxManager();

});


function LightboxManager( ) {

	// Capture elements
	$html = $('html');
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
		viewportMargins: {
			top: 15,
			left: 15,
			right: 15,
			bottom: 15,
		},

		// zoomPerClick: Math.pow(maxZoomLevel, 1/3),
		// zoomPerScroll: Math.pow(maxZoomLevel, 1/6),
		// maxZoomLevel: maxZoomLevel,

		// TODO: Replace w/ custom buttons on desktop
		showNavigationControl: false,

	});

	function open( id, returnTo ) {

		// Find our data source container
		var $data = $('#artwork-' + id );

		// Load the data contents into lightbox
		$content.html( $data.html() );

		// Load the image into OSD!
		// console.log($('#artwork-' + id + '-image').data("image"));
		viewer.open($('#artwork-' + id + '-image').data("image"));

		// Show the lightbox
		$html.css('overflow-y','hidden');
		$lightbox.addClass('opened');
		$lightbox.show();

		// Scroll to the top of lightbox
		$lightbox[0].scrollTop = 0;

		// Press ESC to close lightbox
		// TODO: Unbind this after close
		$( document ).keyup( function( event ) {

			if ( event.keyCode == 27 ) {

				if ( $lightbox.hasClass('opened')) {
					Lightbox.unload(returnTo);
				}

			}

		});

		// Jump keyboard focus to the lightbox
		$('#lightbox h1').focus();

		// Get all, first and last focusable elements from the Menu.
		var focusable, firstFocusable, lastFocusable;

		focusable      = $lightbox.find( '*' ).filter( ':visible' );
		firstFocusable = focusable.first();
		lastFocusable  = focusable.last();

		// For debugging:
		// console.log(firstFocusable, lastFocusable);

		// Redirect last tab to first input.
		// Set focus on first element - that's actually close menu button.
		lastFocusable.on( 'keydown', function ( e ) {

			if ( e.keyCode === 9 && !e.shiftKey ) {

				e.preventDefault();
				firstFocusable.focus();

			}

		});

		// Redirect first shift+tab to last input.
		// Set focus on last element.
		firstFocusable.on( 'keydown', function ( e ) {

			if ( e.keyCode === 9 && e.shiftKey ) {

				e.preventDefault();
				lastFocusable.focus();

			}

		});

		$('#btn-close').attr("href", "javascript:Lightbox.unload('" + returnTo + "')");
	}


	function close(returnTo) {

		// Hide the lightbox
		$html.css('overflow-y','');
		$lightbox.removeClass('opened');
		$lightbox.hide();

		$(returnTo).focus();
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
