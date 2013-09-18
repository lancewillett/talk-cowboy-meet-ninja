<?php
/*
Plugin Name: Customizer Example 4: postMessage
Description: Example WordPress customizer code to accompany pdclark's <a href="http://brainstormmedia.github.io/talk-wordpress-customizer">talk on the WordPress Customizer</a>.
Version: 1.0
Author: Brainstorm Media
Author URI: http://brainstormmedia.com
*/

/**
 * Run these actions when the Customizer loads.
 * For example, creation of settings and controls.
 */
add_action( 'customize_register', 'example4_customize_register' );
function example4_customize_register( $wp_customize ) {

	/**
	 * Add section (Need to add controls for section to display)
	 * @param string $id Section ID used to add controls to this section
	 */
	$wp_customize->add_section( 'example4_section_id' , array(
		'title'      => __( 'Example 4 — postMessage', 'example_theme_text_domain' ),
		'priority'   => 4,
	) );

	/**
	 * Add setting (data, not user interface): Theme Mod
	 * 
	 * Stores value in wp_options.theme_mods_THEME-SLUG['option'] (changes with child theme)
	 * 
	 * @example echo get_theme_mod( 'example4_menu_link_color' );
	 * @param string $id Setting ID used to connect controls to this data
	 */
	$wp_customize->add_setting( 'example4_menu_link_color' , array(
		'default'     => '#000000',              // Can omit.
		'transport'   => 'postMessage',
		//'type'        => 'theme_mod',          // Default; can omit. Alt value: 'option'
		//'capability'  => 'edit_theme_options', // Default; can omit.
	) );

	/**
	 * Add control to section (user interface, not data)
	 * @param string $id Control ID used for HTML element ID.
	 */
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'example4_control_id_theme_mod', array(
		'label'        => __( 'Menu Link Color', 'example_theme_text_domain' ),
		'section'    => 'example4_section_id', // Match arguement 1 in $wp_customize->add_section
		'settings'   => 'example4_menu_link_color', // Match arguement 1 in $wp_customize->add_setting
	) ) );

}

/**
 * Output generated CSS based on options set in the database.
 * Note that get_theme_mod allows you to set a default value.
 */
add_action( 'wp_head', 'example4_wp_head', 991 );
function example4_wp_head() {
  ?>
  <style id="example4-postmessage">
    #navbar .nav-menu > li > a {
      color: <?php echo get_theme_mod( 'example4_menu_link_color', '#000000' ) ?>;
    }
  </style>
  <?php
}

add_action( 'customize_preview_init', 'example4_customize_preview_init' );
function example4_customize_preview_init() {
  wp_enqueue_script( 
    'example4-theme-customizer', // script ID
    // Use get_template_directory_uri().'/path-to/file.js' for files in a theme.
    plugins_url( 'theme-customizer.js', __FILE__ ), // script URL
    array( 'jquery','customize-preview' ),	// dependencies
    '1.0',  // Script version (for cachebusting)
    true    // script in footer?
  );
}