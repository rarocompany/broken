<?php

add_action('customize_register','nd_options_customizer_footer_1');
function nd_options_customizer_footer_1( $wp_customize ) {
  


	//ADD section
	$wp_customize->add_section( 'nd_options_customizer_footer_1_section' , array(
	  'title' => __('Footer 1','nd-shortcodes'),
	  'priority'    => 2,
	  'panel' => 'nd_options_customizer_footer_panel',
	) );


	//background
	$wp_customize->add_setting( 'nd_options_customizer_footer_1_bg', array(
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
	    'nd_options_customizer_footer_1_bg', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __('Background Color','nd-shortcodes'),
	      'description' => __('Select Footer Background','nd-shortcodes'),
	      'section' => 'nd_options_customizer_footer_1_section',
	    )
	  )
	);



	//text color
	$wp_customize->add_setting( 'nd_options_customizer_footer_1_text_color', array(
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
	    'nd_options_customizer_footer_1_text_color', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __('Text Color','nd-shortcodes'),
	      'description' => __('Select Footer Text Color','nd-shortcodes'),
	      'section' => 'nd_options_customizer_footer_1_section',
	    )
	  )
	);


	//textarea
	$wp_customize->add_setting( 'nd_options_customizer_footer_1_content', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_footer_1_content', array(
	  'label' => __('Text Copyright','nd-shortcodes'),
	  'type' => 'textarea',
	  'section' => 'nd_options_customizer_footer_1_section',
	) );


}
