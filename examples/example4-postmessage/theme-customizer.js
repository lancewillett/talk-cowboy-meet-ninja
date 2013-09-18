/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and 
 * then make any necessary changes to the page using jQuery.
 */
( function( $ ) {

	// Update menu link color
	// @arg setting_id
	// @arg handler function
	wp.customize( 'example4_menu_link_color', function( value ) {
		value.bind( function( newval ) {
			// Select your elements with a CSS selector,
			// then modify in any way you want
			$('#navbar .nav-menu > li > a').css( 'color', newval );
		} );
	} );
	
} )( jQuery );