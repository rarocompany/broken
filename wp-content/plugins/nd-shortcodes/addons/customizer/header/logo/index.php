<?php


add_action('customize_register','nd_options_customizer_logo');
function nd_options_customizer_logo( $wp_customize ) {
  


	//ADD section
	$wp_customize->add_section( 'nd_options_customizer_logo_section' , array(
	  'title' => __( 'Logo', 'nd-shortcodes' ),
	  'priority'    => 10,
	  'panel' => 'nd_options_customizer_header_panel',
	) );



	//Logo
	$wp_customize->add_setting( 'nd_options_customizer_header_2_logo', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 
		new WP_Customize_Media_Control( 
			$wp_customize, 
			'nd_options_customizer_header_2_logo', 
			array(
			  'label' => __( 'Logo', 'nd-shortcodes' ),
			  'section' => 'nd_options_customizer_logo_section',
			  'mime_type' => 'image',
			) 
		) 
	);


	//Logo Width
	$wp_customize->add_setting( 'nd_options_customizer_header_2_logo_width', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_header_2_logo_width', array(
	  'type' => 'range',
	  'section' => 'nd_options_customizer_logo_section',
	  'label' => __( 'Logo Width', 'nd-shortcodes' ),
	  'input_attrs' => array(
	    'min' => 100,
	    'max' => 400,
	    'step' => 1,
	  ),
	) );


	//Logo Margin Top
	$wp_customize->add_setting( 'nd_options_customizer_header_2_logo_margin_top', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_header_2_logo_margin_top', array(
	  'type' => 'range',
	  'section' => 'nd_options_customizer_logo_section',
	  'label' => __( 'Logo Margin Top', 'nd-shortcodes' ),
	  'input_attrs' => array(
	    'min' => 0,
	    'max' => 200,
	    'step' => 1,
	  ),
	) );



	//Logo Responsive
	$wp_customize->add_setting( 'nd_options_customizer_header_2_logo_responsive', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 
		new WP_Customize_Media_Control( 
			$wp_customize, 
			'nd_options_customizer_header_2_logo_responsive', 
			array(
			  'label' => __( 'Logo Responsive', 'nd-shortcodes' ),
			  'section' => 'nd_options_customizer_logo_section',
			  'mime_type' => 'image',
			) 
		) 
	);



}
