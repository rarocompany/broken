<?php

add_action('customize_register','nd_options_customizer_footer_3');
function nd_options_customizer_footer_3( $wp_customize ) {
  


	//ADD section
	$wp_customize->add_section( 'nd_options_customizer_footer_3_section' , array(
	  'title' => __('Footer 3','nd-shortcodes'),
	  'priority'    => 3,
	  'panel' => 'nd_options_customizer_footer_panel',
	) );


	//background
	$wp_customize->add_setting( 'nd_options_customizer_footer_3_bg', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control(
	  new WP_Customize_Color_Control(
	    $wp_customize, // WP_Customize_Manager
	    'nd_options_customizer_footer_3_bg', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __('Background Color','nd-shortcodes'),
	      'description' => __('Select Footer Background','nd-shortcodes'),
	      'section' => 'nd_options_customizer_footer_3_section',
	    )
	  )
	);



	//text color
	$wp_customize->add_setting( 'nd_options_customizer_footer_3_text_color', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control(
	  new WP_Customize_Color_Control(
	    $wp_customize, // WP_Customize_Manager
	    'nd_options_customizer_footer_3_text_color', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __('Text Color','nd-shortcodes'),
	      'description' => __('Select Footer Text Color','nd-shortcodes'),
	      'section' => 'nd_options_customizer_footer_3_section',
	    )
	  )
	);


	//content 1
	$wp_customize->add_setting( 'nd_options_customizer_footer_3_content_1', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_footer_3_content_1', array(
	  'label' => __('Content 1','nd-shortcodes'),
	  'type' => 'textarea',
	  'section' => 'nd_options_customizer_footer_3_section',
	) );


	//content 2
	$wp_customize->add_setting( 'nd_options_customizer_footer_3_content_2', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_footer_3_content_2', array(
	  'label' => __('Content 2','nd-shortcodes'),
	  'type' => 'textarea',
	  'section' => 'nd_options_customizer_footer_3_section',
	) );


}
