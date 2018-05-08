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

	// login form slider js
	jQuery(document).on('click', '.login-form-slider .sign-up-click', function() {
		jQuery('.signup-slide').velocity({translateX: ['0%','-100%'] }, {display:"block"});
		jQuery('.login-slide').velocity({translateX: '100%' }, {display:"none"});
	});
	jQuery(document).on('click', '.login-form-slider .login-click', function() {
		jQuery('.login-slide').velocity({translateX: ['0%','-100%'] }, {display:"block"});
		jQuery('.forgot-password-slide').velocity({translateX: '100%' }, {display:"none"});
		jQuery('.signup-slide').velocity({translateX: '100%' }, {display:"none"});
	});
	jQuery(document).on('click', '.login-form-slider .forgot-password-click', function() {
		jQuery('.forgot-password-slide').velocity({translateX: ['0%','-100%'] }, {display:"block"});
		jQuery('.login-slide').velocity({translateX: '100%' }, {display:"none"});
	});
});