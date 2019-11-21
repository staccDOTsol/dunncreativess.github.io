<?php
/**
 * General Settings
 *
 * Register General section, settings and controls for Theme Customizer
 *
 * @package Maxwell
 */

/**
 * Adds all general settings to the Customizer
 *
 * @param object $wp_customize / Customizer Object.
 */
function maxwell_customize_register_general_settings( $wp_customize ) {

	// Add Section for Theme Options.
	$wp_customize->add_section( 'maxwell_section_general', array(
		'title'    => esc_html__( 'General Settings', 'maxwell' ),
		'priority' => 10,
		'panel'    => 'maxwell_options_panel',
	) );

	// Add Settings and Controls for Layout.
	$wp_customize->add_setting( 'maxwell_theme_options[layout]', array(
		'default'           => 'right-sidebar',
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'maxwell_sanitize_select',
	) );

	$wp_customize->add_control( 'maxwell_theme_options[layout]', array(
		'label'    => esc_html__( 'Theme Layout', 'maxwell' ),
		'section'  => 'maxwell_section_general',
		'settings' => 'maxwell_theme_options[layout]',
		'type'     => 'radio',
		'priority' => 10,
		'choices'  => array(
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'maxwell' ),
			'right-sidebar' => esc_html__( 'Right Sidebar', 'maxwell' ),
		),
	) );
}
add_action( 'customize_register', 'maxwell_customize_register_general_settings' );
