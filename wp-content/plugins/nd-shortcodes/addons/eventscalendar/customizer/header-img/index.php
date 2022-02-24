<?php


add_action('customize_register','nd_options_customizer_eventscalendar_header_img');
function nd_options_customizer_eventscalendar_header_img( $wp_customize ) {
  

	//ADD section 1
	$wp_customize->add_section( 'nd_options_customizer_eventscalendar_header_img_section' , array(
	  'title' => 'Header Image',
	  'priority'    => 10,
	  'panel' => 'nd_options_customizer_eventscalendar',
	) );


	//Disable Header
	$wp_customize->add_setting( 'nd_options_customizer_eventscalendar_header_image_display', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_eventscalendar_header_image_display', array(
	  'label' => __( 'Disable Header Section' ),
	  'type' => 'checkbox',
	  'section' => 'nd_options_customizer_eventscalendar_header_img_section',
	) );

	
	//Header Image
	$wp_customize->add_setting( 'nd_options_customizer_eventscalendar_header_image', array(
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
			'nd_options_customizer_eventscalendar_header_image', 
			array(
			  'label' => __( 'Shop Header Image', 'nd-shortcodes' ),
			  'section' => 'nd_options_customizer_eventscalendar_header_img_section',
			  'mime_type' => 'image',
			) 
		) 
	);



	//image position
	$wp_customize->add_setting( 'nd_options_customizer_eventscalendar_header_image_position', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_eventscalendar_header_image_position', array(
	  'label' => __( 'Image Position' ),
	  'type' => 'select',
	  'section' => 'nd_options_customizer_eventscalendar_header_img_section',
	  'choices' => array(
	        'nd_options_background_position_center_top' => 'Position Top',
	        'nd_options_background_position_center_bottom' => 'Position Bottom',
	        'nd_options_background_position_center' => 'Position Center',
	    ),
	) );





}
