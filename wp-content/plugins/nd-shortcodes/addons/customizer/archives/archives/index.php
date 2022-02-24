<?php


add_action('customize_register','nd_options_customizer_archives_archive');
function nd_options_customizer_archives_archive( $wp_customize ) {
  


	//ADD section
	$wp_customize->add_section( 'nd_options_customizer_archives_archive_section' , array(
	  'title' => __('Archives','nd-shortcodes'),
	  'priority'    => 10,
	  'panel' => 'nd_options_customizer_archives_panel',
	) );




	//archive layout
	$wp_customize->add_setting( 'nd_options_customizer_archives_archive_layout', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_archives_archive_layout', array(
	  'label' => __('Archive Layout','nd-shortcodes'),
	  'type' => 'select',
	  'section' => 'nd_options_customizer_archives_archive_section',
	  'choices' => array(
	        'layout-1' => 'Layout 1',
	        'layout-2' => 'Layout 2',
	        'layout-3' => 'Layout 3',
	        'layout-4' => 'Layout 4',
	        'layout-5' => 'Layout 5',
	        'layout-6' => 'Layout 6',
	        'layout-7' => 'Layout 7',
	        'layout-8' => 'Layout 8',
	        'layout-9' => 'Layout 9',
	    ),
	) );



	//Disable Header
	$wp_customize->add_setting( 'nd_options_customizer_archives_archive_image_display', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_archives_archive_image_display', array(
	  'label' => __('Disable Header Section','nd-shortcodes'),
	  'type' => 'checkbox',
	  'section' => 'nd_options_customizer_archives_archive_section',
	) );


	//Image
	$wp_customize->add_setting( 'nd_options_customizer_archives_archive_image', array(
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
			'nd_options_customizer_archives_archive_image', 
			array(
			  'label' => __('Header Image','nd-shortcodes','nd-shortcodes'),
			  'section' => 'nd_options_customizer_archives_archive_section',
			  'mime_type' => 'image',
			) 
		) 
	);



	//image position
	$wp_customize->add_setting( 'nd_options_customizer_archives_archive_image_position', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_archives_archive_image_position', array(
	  'label' => __('Image Position','nd-shortcodes'),
	  'type' => 'select',
	  'section' => 'nd_options_customizer_archives_archive_section',
	  'choices' => array(
	        'nd_options_background_position_center_top' => 'Position Top',
	        'nd_options_background_position_center_bottom' => 'Position Bottom',
	        'nd_options_background_position_center' => 'Position Center',
	    ),
	) );






}
