<?php

add_action('customize_register','nd_options_customizer_footer_2');
function nd_options_customizer_footer_2( $wp_customize ) {
  


	//ADD section
	$wp_customize->add_section( 'nd_options_customizer_footer_2_section' , array(
	  'title' => __( 'Footer 2', 'nd-shortcodes' ),
	  'priority'    => 3,
	  'panel' => 'nd_options_customizer_footer_panel',
	) );



	//Logo
	$wp_customize->add_setting( 'nd_options_customizer_footer_2_logo', array(
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
			'nd_options_customizer_footer_2_logo', 
			array(
			  'label' => __( 'Logo', 'nd-shortcodes' ),
			  'section' => 'nd_options_customizer_footer_2_section',
			  'mime_type' => 'image',
			) 
		) 
	);


	//social
	$wp_customize->add_setting( 'nd_options_customizer_footer_2_social_content', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_footer_2_social_content', array(
	  'label' => __( 'Social','nd-shortcodes' ),
	  'description' => __('Use this shortcode for display your social icon. Example: <strong>[nd_social social="" link=""]</strong>','nd-shortcodes'),
	  'type' => 'textarea',
	  'section' => 'nd_options_customizer_footer_2_section',
	) );


	//background
	$wp_customize->add_setting( 'nd_options_customizer_footer_2_bg', array(
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
	    'nd_options_customizer_footer_2_bg', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Background Color','nd-shortcodes' ),
	      'description' => __('Select Footer Background','nd-shortcodes'),
	      'section' => 'nd_options_customizer_footer_2_section',
	    )
	  )
	);



	//text color
	$wp_customize->add_setting( 'nd_options_customizer_footer_2_text_color', array(
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
	    'nd_options_customizer_footer_2_text_color', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Text Color','nd-shortcodes' ),
	      'description' => __('Select Footer Text Color','nd-shortcodes'),
	      'section' => 'nd_options_customizer_footer_2_section',
	    )
	  )
	);


	//Copyright Left Content
	$wp_customize->add_setting( 'nd_options_customizer_footer_2_left_content', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_footer_2_left_content', array(
	  'label' => __( 'Text Copyright Left','nd-shortcodes' ),
	  'type' => 'textarea',
	  'section' => 'nd_options_customizer_footer_2_section',
	) );



	//Copyright Right Content
	$wp_customize->add_setting( 'nd_options_customizer_footer_2_right_content', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_footer_2_right_content', array(
	  'label' => __( 'Text Copyright Right','nd-shortcodes' ),
	  'type' => 'textarea',
	  'section' => 'nd_options_customizer_footer_2_section',
	) );



	//border
	$wp_customize->add_setting( 'nd_options_customizer_footer_2_border', array(
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
	    'nd_options_customizer_footer_2_border', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Border Copyright Color','nd-shortcodes' ),
	      'description' => __('Select Border Copyright Color','nd-shortcodes'),
	      'section' => 'nd_options_customizer_footer_2_section',
	    )
	  )
	);





}
