<?php
/*
Plugin Name: Cowboy Meet Ninja: Content Shortcodes and Filters
Description: Example code to accompany pdclark's <a href="http://pdclark.github.io/talk-cowboy-meet-ninja">Cowboy Meet Ninja</a> presentation.
Version: 1.0
Author: Paul Clark
Author URI: http://pdclark.com
License: GPLv2+
*/

/**
 * COWBOY
 * 
 * Run a plugin to execute PHP in the WordPress editor. 
 * Major security risk, confuses user interface.
 * Crashes on invalid syntax or disabled plugin.
 */

/**
 * NINJA
 * 
 * Use the shortcodes API to output formatted or variable content.
 *
 * Usage:
 *   [example-shortcode foo="bar"]
 */
function example_shortcode_function( $atts ) {
	$atts = extract( shortcode_atts( array(
		'foo' => 'default',
	), $atts ) );

	return "<h2 class='awesome'>Amazing $foo!</h2>";
}
add_shortcode( 'example-shortcode','example_shortcode_function' );


/**
 * SUPER NINJA
 *
 * Use filters to manipulate content.
 *
 * Frameworks often make extensive use of custom filters.
 * WordPress provides MANY filters that are available in all themes.
 */
function example_content_filter( $content ){

	$content .= '<p>By the way, here\'s a kitten: <br/>';
	$content .= '<img src="http://placekitten.com/200/300" /></p>';

	return $content;
}
add_filter( 'the_content', 'example_content_filter' );