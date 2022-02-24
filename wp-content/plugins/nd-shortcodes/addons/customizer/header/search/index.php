<?php


add_action('customize_register','nd_options_customizer_search');
function nd_options_customizer_search( $wp_customize ) {
  


	//ADD section
	$wp_customize->add_section( 'nd_options_customizer_search_section' , array(
	  'title' => __( 'Search', 'nd-shortcodes'),
	  'priority'    => 20,
	  'panel' => 'nd_options_customizer_header_panel',
	) );



	//Icon
	$wp_customize->add_setting( 'nd_options_customizer_header_search_icon', array(
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
			'nd_options_customizer_header_search_icon', 
			array(
			  'label' => __( 'Search Icon', 'nd-shortcodes' ),
			  'section' => 'nd_options_customizer_search_section',
			  'mime_type' => 'image',
			) 
		) 
	);



	//Enable Search Icon
	$wp_customize->add_setting( 'nd_options_customizer_header_search_display', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_header_search_display', array(
	  'label' => __( 'Enable Search Icon', 'nd-shortcodes'),
	  'description' => __( 'Not available for all navigation type', 'nd-shortcodes' ),
	  'type' => 'select',
	  'section' => 'nd_options_customizer_search_section',
	  'choices' => array(
	        '0' => 'Hide Icon',
	        '1' => 'Show icon',
	    ),
	) );



}


//include output file
include "content.php";
