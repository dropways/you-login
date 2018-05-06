jQuery(window).on("load",function() {
	"use strict";
	jQuery(".pre-loader").fadeToggle("medium");
});
jQuery(document).ready(function(){
	"use strict";
	// Background images
	jQuery(".bg_img").each( function ( i, elem ) {
		var img = jQuery( elem );
		jQuery(this).hide();
		jQuery(this).parent().css( {
			background: "url(" + img.attr( "src" ) + ") no-repeat center center",
		});
	});

	// Dropdown Slide Animation
	jQuery('.dropdown').on('show.bs.dropdown', function(e){
		jQuery(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
	});
	jQuery('.dropdown').on('hide.bs.dropdown', function(e){
		jQuery(this).find('.dropdown-menu').first().stop(true, true).slideUp(200);
	});
});