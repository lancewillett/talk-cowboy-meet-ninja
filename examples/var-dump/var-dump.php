<?php
/*
Plugin Name: Cowboy Meet Ninja: Var Dump
Description: Example code to accompany pdclark's <a href="http://pdclark.github.io/talk-cowboy-meet-ninja">Cowboy Meet Ninja</a> presentation.
Version: 1.0
Author: Paul Clark
Author URI: http://pdclark.com
License: GPLv2+
*/

/**
 * COWBOY
 * 
 * Output errors and debugging to everyone.
 */
global $wp_query;
echo '<pre>';
var_dump( $wp_query );
echo '</pre>';

/**
 * NINJA
 */
if (
	( defined( 'WP_DEBUG' ) && WP_DEBUG )
	|| '123.456.789.0' == $_SERVER[ 'REMOTE_HOST' ]
){
	// Enable error messages and debug
	define( 'WP_DEBUG', true );
	
	// --- ......


}else {
	// Disable error output for end-users
	ini_set( 'display_errors', 'off' );
}