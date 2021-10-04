<?php
/**
 * Sockbrew Theme Theme Customizer
 *
 * @package Sockbrew_Theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function a_custom_theme_for_sockbrew_design_customize_register( $wp_customize ) {
	// $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	// $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	// $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// if ( isset( $wp_customize->selective_refresh ) ) {
	// 	$wp_customize->selective_refresh->add_partial(
	// 		'blogname',
	// 		array(
	// 			'selector'        => '.site-title a',
	// 			'render_callback' => 'a_custom_theme_for_sockbrew_design_customize_partial_blogname',
	// 		)
	// 	);
	// 	$wp_customize->selective_refresh->add_partial(
	// 		'blogdescription',
	// 		array(
	// 			'selector'        => '.site-description',
	// 			'render_callback' => 'a_custom_theme_for_sockbrew_design_customize_partial_blogdescription',
	// 		)
	// 	);
	// }
	$wp_customize->add_section( 'a_custom_theme_for_sockbrew_design_footer' , array(
		'title'      => __( 'Footer', 'a_custom_theme_for_sockbrew_design' ),
		'priority'   => 30,
	) );

	// Setting for address
	$wp_customize->add_setting( 'a_custom_theme_for_sockbrew_design_footer_address',
	array(
		'default'           => __( 'Building 1, 11 Kirinari St Bruce ACT 2617', 'a_custom_theme_for_sockbrew_design' ),
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'refresh',
	)
	);

	// Control for address
	$wp_customize->add_control( 'a_custom_theme_for_sockbrew_design_footer_address', 
		array(
			'type'        => 'text',
			'priority'    => 10,
			'section'     => 'a_custom_theme_for_sockbrew_design_footer',
			'label'       => 'Residential address',
			'description' => 'Text put here will be outputted in the footer in the address field',
		) 
	);

	// Setting for phone number
	$wp_customize->add_setting( 'a_custom_theme_for_sockbrew_design_footer_phone',
	array(
		'default'           => __( '+61 2 6201 5111', 'a_custom_theme_for_sockbrew_design' ),
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'refresh',
	)
	);

	// Control for phone number
	$wp_customize->add_control( 'a_custom_theme_for_sockbrew_design_footer_phone', 
		array(
			'type'        => 'text',
			'priority'    => 10,
			'section'     => 'a_custom_theme_for_sockbrew_design_footer',
			'label'       => 'Phone number',
			'description' => 'Text put here will be outputted in the footer in the phone number field',
		) 
	);


	// Setting for Email
	$wp_customize->add_setting( 'a_custom_theme_for_sockbrew_design_footer_email',
	array(
		'default'           => __( 'ibqc@canberra.edu.au', 'a_custom_theme_for_sockbrew_design' ),
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'refresh',
	)
	);

	// Control for Email
	$wp_customize->add_control( 'a_custom_theme_for_sockbrew_design_footer_email', 
		array(
			'type'        => 'text',
			'priority'    => 10,
			'section'     => 'a_custom_theme_for_sockbrew_design_footer',
			'label'       => 'Email address',
			'description' => 'Text put here will be outputted in the footer in the email field',
		) 
	);

	
}
add_action( 'customize_register', 'a_custom_theme_for_sockbrew_design_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function a_custom_theme_for_sockbrew_design_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function a_custom_theme_for_sockbrew_design_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function a_custom_theme_for_sockbrew_design_customize_preview_js() {
	wp_enqueue_script( 'a-custom-theme-for-sockbrew-design-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'a_custom_theme_for_sockbrew_design_customize_preview_js' );

