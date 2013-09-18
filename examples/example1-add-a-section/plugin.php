<?php
/*
Plugin Name: Customizer Example 1: Add a section
Description: Example WordPress customizer code to accompany pdclark's <a href="http://brainstormmedia.github.io/talk-wordpress-customizer">talk on the WordPress Customizer</a>.
Version: 1.0
Author: Brainstorm Media
Author URI: http://brainstormmedia.com
*/

/**
 * Run these actions when the Customizer loads.
 * For example, creation of settings and controls.
 */
add_action( 'customize_register', 'example1_customize_register' );
function example1_customize_register( $wp_customize ) {

	/**
	 * Add section (Need to add controls for section to display)
	 * @param string $id Section ID used to add controls to this section
	 */
	$wp_customize->add_section( 'example1_section_id' , array(
		'title'      => __( 'Example 1', 'example_theme_text_domain' ),
		'priority'   => 1, // Default: 10
	) );

	/**
	 * Add setting (data, not user interface)
	 * Stores in wp_options.theme_mods_THEME-SLUG
	 * 
	 * @example Access with echo get_theme_mod( 'example1_setting_id' );
	 * @param string $id Setting ID used to connect controls to this data
	 */
	$wp_customize->add_setting( 'example1_setting_id' , array(
		'default'     => '#000000',            // Can omit.
		'transport'   => 'refresh',            // Default; can omit. Alt value: 'postMessage'
		'type'        => 'theme_mod',          // Default; can omit. Alt value: 'option'
		'capability'  => 'edit_theme_options', // Default; can omit.
	) );

	/**
	 * Add control to section (user interface, not data)
	 * @param string $id Control ID used for HTML element ID.
	 */
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'example1_control_id', array(
		'label'        => __( 'Color Control', 'example_theme_text_domain' ),
		'section'    => 'example1_section_id', // Match arguement 1 in $wp_customize->add_section
		'settings'   => 'example1_setting_id', // Match arguement 1 in $wp_customize->add_setting
	) ) );

}