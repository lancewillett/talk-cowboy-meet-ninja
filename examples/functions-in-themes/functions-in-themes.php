<?php
/*
Plugin Name: Cowboy Meet Ninja: Functions in Themes
Description: Example code to accompany pdclark's <a href="http://pdclark.github.io/talk-cowboy-meet-ninja">Cowboy Meet Ninja</a> presentation.
Version: 1.0
Author: Paul Clark
Author URI: http://pdclark.com
License: GPLv2+
*/

/**
 * COWBOY
 * 
 * Will crash if function is removed or plugin is disabled.
 * 
 * Usage:
 *   <?php echo example_function_for_theme_use( 1 ); ?>
 */
function example_function_for_theme_use( $example_number = 1 ) {
	return 'Example number ' . $example_number;
}


/**
 * NINJA
 * 
 * Actions and filters allow functions to be used when available,
 * but are ignored when not available.
 *
 * Usage:
 *   <?php do_action( 'custom_action', 2 ); ?>
 */
function example_on_action( $example_number = 1 ) {
	return 'Example number ' . $example_number;
}
add_action( 'custom_action', 'example_on_action', 10, 1 );

/**
 * Usage:
 *   Example number <?php echo apply_filters( 'example_number', 2 ); ?>
 */
function example_on_filter( $example_number = 1 ) {
	return $example_number;
}
add_filter( 'example_number', 'example_on_filter', 10, 0 );