<?php
/*
Plugin Name: Customizer Example: Theme Mod vs. Option
Description: Example WordPress customizer code to accompany pdclark's <a href="http://brainstormmedia.github.io/talk-wordpress-customizer">talk on the WordPress Customizer</a>.
Version: 1.0
Author: Brainstorm Media
Author URI: http://brainstormmedia.com
*/

/**
 * Copyright (c) 2013 Brainstorm Media. All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * **********************************************************************
 */

/**
 * Run these actions when the Customizer loads.
 * For example, creation of settings and controls.
 */
add_action( 'customize_register', 'example2_customize_register' );
function example2_customize_register( $wp_customize ) {

	/**
	 * Add section (Need to add controls for section to display)
	 * @param string $id Section ID used to add controls to this section
	 */
	$wp_customize->add_section( 'example2_section_id' , array(
		'title'      => __( 'Example 2', 'example_theme_text_domain' ),
		'priority'   => 5,
	) );

	/**
	 * Add setting (data, not user interface): Theme Mod
	 * 
	 * @example Access with echo get_theme_mod( 'example2_setting_id_theme_mod' );
	 * @param string $id Setting ID used to connect controls to this data
	 */
	$wp_customize->add_setting( 'example2_setting_id_theme_mod' , array(
		'default'     => '#cc0000',
		'transport'   => 'refresh',
		'type'        => 'theme_mod', // 'theme_mod' or 'option'
		'capability'  => 'edit_theme_options',
	) );

	/**
	 * Add control to section (user interface, not data)
	 * @param string $id Control ID used for HTML element ID.
	 */
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'example2_control_id_theme_mod', array(
		'label'        => __( 'Theme Mod', 'example_theme_text_domain' ),
		'section'    => 'example2_section_id', // Match arguement 1 in $wp_customize->add_section
		'settings'   => 'example2_setting_id_theme_mod', // Match arguement 1 in $wp_customize->add_setting
	) ) );

	/**
	 * Add setting (data, not user interface): Option
	 * 
	 * @example Access with echo get_option( 'example2_setting_id_option' );
	 * @param string $id Setting ID used to connect controls to this data
	 */
	$wp_customize->add_setting( 'example2_setting_id_option' , array(
		'default'     => '#00cc00',
		'transport'   => 'refresh',
		'type'        => 'option', // 'theme_mod' or 'option'
		'capability'  => 'edit_theme_options',
	) );

	/**
	 * Add control to section (user interface, not data)
	 * @param string $id Control ID used for HTML element ID.
	 */
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'example2_control_id_option', array(
		'label'        => __( 'Option', 'example_theme_text_domain' ),
		'section'    => 'example2_section_id', // Match arguement 1 in $wp_customize->add_section
		'settings'   => 'example2_setting_id_option', // Match arguement 1 in $wp_customize->add_setting
	) ) );

	/**
	 * Add setting (data, not user interface): Option
	 * 
	 * @example Access with $options = get_option( 'example2_setting_id_option_array' ); echo $options['sub_setting'];
	 * @param string $id Setting ID used to connect controls to this data
	 */
	$wp_customize->add_setting( 'example2_setting_id_option_array[sub_setting]' , array(
		'default'     => '#0000cc',
		'transport'   => 'refresh',
		'type'        => 'option', // 'theme_mod' or 'option'
		'capability'  => 'edit_theme_options',
	) );

	/**
	 * Add control to section (user interface, not data)
	 * @param string $id Control ID used for HTML element ID.
	 */
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'example2_control_id_option_array', array(
		'label'        => __( 'Option as array', 'example_theme_text_domain' ),
		'section'    => 'example2_section_id', // Match arguement 1 in $wp_customize->add_section
		'settings'   => 'example2_setting_id_option_array[sub_setting]', // Match arguement 1 in $wp_customize->add_setting
	) ) );

}