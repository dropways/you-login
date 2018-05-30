jQuery(window).on("load",function() {
	"use strict";
	jQuery(".pre-loader").fadeToggle("medium");
});
jQuery(document).ready(function(){
	"use strict";

	var signup_slide = jQuery('.signup-slide');
	var login_slide  = jQuery('.login-slide');
	var forgot_password_slide  = jQuery('.forgot-password-slide');

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
		signup_slide.velocity({translateX: ['0%','-100%'] }, {display:"block"});
		login_slide.velocity({translateX: '100%' }, {display:"none"});
	});
	jQuery(document).on('click', '.login-form-slider .login-click', function() {
		login_slide.velocity({translateX: ['0%','-100%'] }, {display:"block"});
		forgot_password_slide.velocity({translateX: '100%' }, {display:"none"});
		signup_slide.velocity({translateX: '100%' }, {display:"none"});
	});
	jQuery(document).on('click', '.login-form-slider .forgot-password-click', function() {
		forgot_password_slide.velocity({translateX: ['0%','-100%'] }, {display:"block"});
		login_slide.velocity({translateX: '100%' }, {display:"none"});
	});


	// floating form
	var refresh = function() {
		jQuery('.floating-form .form-group .form-control').each(function(index, el) {
			var text_val = jQuery(this).val();
			if(text_val === "") {
				jQuery(this).parent().removeClass('has-value');
			}else {
				jQuery(this).parent().addClass('has-value');
			}
			jQuery(this).focus(function(){
				jQuery(this).parent().addClass("is-focus");
				jQuery(this).parent().addClass('has-value');
			})
			.blur(function(){
				if(jQuery(this).val() === "" || jQuery(this).val() === " " || jQuery(this).val() === null){
					jQuery(this).parent().removeClass("is-focus");
					jQuery(this).parent().removeClass('has-value');
				}
			})
		});
	};
	refresh();
});