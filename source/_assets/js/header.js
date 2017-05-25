$(document).ready(function() {

	// Declaring selectors ahead of time for speed
	var $window = $(window);
	var $header = $('header');
	var $subHeader = $('section.sub-header');
        var $placeholder = $('#header-placeholder');
	var $subPlaceholder = $('#sub-header-placeholder');

	// For development, exit if the header is hidden
	if( $header.length < 1 ) {
		return false;
	}

	// "Sticky" the navigation when the user scrolls below the header
	var offsetHeader;
	var heightHeader;
	var heightSubHeader;

	var updateHeaderStats = function() {
		if( $placeholder.is(":visible") ) {
			offsetHeader = $placeholder.offset().top;
		} else {
			offsetHeader = $header.offset().top;
		}
   	        heightHeader = $header.outerHeight();
		$placeholder.height( heightHeader );
   	        heightSubHeader = $subHeader.outerHeight();
		$subPlaceholder.height( heightSubHeader );
	};

	updateHeaderStats();

	$window.resize( updateHeaderStats );

	var stickyNavigation = function() {
		if( $window.scrollTop() > offsetHeader ) {
		        $header.addClass('sticky');
			$placeholder.show();
			$subPlaceholder.show();
			$subHeader.addClass('sticky');
 		        $subHeader.css('top', $header.outerHeight());
		}else{
			$header.removeClass('sticky');
		        $subHeader.removeClass('sticky');
 		        $subHeader.css('top', 'inherit');
			$placeholder.hide();
			$subPlaceholder.hide();
		}

	};

	stickyNavigation();

	$window.scroll( stickyNavigation );
	$window.resize( stickyNavigation );

});
