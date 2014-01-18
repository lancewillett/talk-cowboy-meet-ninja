<?php
/*
Plugin Name: Cowboy Meet Ninja: Namespacing
Description: Example code to accompany pdclark's <a href="http://pdclark.github.io/talk-cowboy-meet-ninja">Cowboy Meet Ninja</a> presentation.
Version: 1.0
Author: Paul Clark
Author URI: http://pdclark.com
License: GPLv2+
*/

/**
 * COWBOY
 * 
 * Uses non-specific function names.
 * Doesn't safeguard against name conflicts.
 * Uses global functions or variables instead of classes.
 * Fires plugin init before WordPress is done loading.
 */
$plugin_name = 'The Greatest';

function my_plugin_init() {
	global $plugin_name;
	echo $plugin_name;
}
my_plugin_init();

/**
 * NINJA
 * 
 * Vendor prefixes.
 * Variables scoped within functions.
 * Waits for 'init' or 'plugins_loaded' to do anything.
 */
function tenup_greatest_plugin_init() {
	$plugin_name = 'The Greatest';
	echo $plugin_name;
}
add_action( 'init', 'tenup_greatest_plugin_init' );

/**
 * SUPER NINJA
 *
 * Groups of behavior scoped within classes.
 */
class TenUp_Greatest_Plugin {

	var $plugin_name = 'The Greatest';

	function __construct() {
		add_action( 'init', array( $this, 'init' ) );
	}

	function init() {
		echo $this->plugin_name;
	}

}
$TenUp_Greatest_Plugin = new TenUp_Greatest_Plugin();


/**
 * SUPER-DUPER NINJA
 *
 * Singleton pattern for plugin wrapper.
 * Allows global access to single plugin instance.
 * Prevents multiple instances of plugin from running accidentally.
 */

/**
 * Plugin wrapper
 **/
class TenUp_Super_Duper_Plugin {

	/**
	 * @var TenUp_Super_Duper_Plugin Instance of this class.
	 */
	private static $instance = false;

	/**
	 * Don't use this. Use ::get_instance() instead.
	 */
	public function __construct() {
		if ( !self::$instance ) {
			$message = '<code>' . __CLASS__ . '</code> is a singleton.<br/> Please get an instantiate it with <code>' . __CLASS__ . '::get_instance();</code>';
			wp_die( $message );
		}       
	}

	/**
	 * Maybe instantiate, then return instance of this class.
	 * @return TenUp_Super_Duper_Plugin instance.
	 */
	public static function get_instance() {
		if ( !is_a( self::$instance, __CLASS__ ) ) {
			self::$instance = true;
			self::$instance = new self();
			self::$instance->init();
		}
		return self::$instance;
	}

	/**
	 * Initial setup. Called by get_instance.
	 */
	protected function init() {
		add_filter( 'the_content', array( $this, 'the_content' ) );
	}

	/**
	 * Add a kitten to the end of all content.
	 */
	public function the_content( $content ) {
		$content .= '<p>By the way, here\'s a kitten: <br/>';
		$content .= '<img src="http://placekitten.com/200/300" /></p>';

		return $content;
	}

}

add_action( 'plugins_loaded', 'TenUp_Super_Duper_Plugin::get_instance' );