<?php


add_action('customize_register','nd_options_customizer_header_1');
function nd_options_customizer_header_1( $wp_customize ) {
  


	//ADD section
	$wp_customize->add_section( 'nd_options_customizer_header_1_section' , array(
	  'title' => __('Header 1','nd-shortcodes'),
	  'priority'    => 40,
	  'panel' => 'nd_options_customizer_header_panel',
	) );


	//background
	$wp_customize->add_setting( 'nd_options_customizer_header_1_bg', array(
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
	    'nd_options_customizer_header_1_bg', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Background Color','nd-shortcodes' ),
	      'description' => __('Select header Background','nd-shortcodes'),
	      'section' => 'nd_options_customizer_header_1_section',
	    )
	  )
	);



	//menu color
	$wp_customize->add_setting( 'nd_options_customizer_header_1_menu_color', array(
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
	    'nd_options_customizer_header_1_menu_color', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Menu Color','nd-shortcodes' ),
	      'description' => __('Select header Menu Color','nd-shortcodes'),
	      'section' => 'nd_options_customizer_header_1_section',
	    )
	  )
	);



	//tagline color
	$wp_customize->add_setting( 'nd_options_customizer_header_1_tagline_color', array(
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
	    'nd_options_customizer_header_1_tagline_color', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Tagline Color','nd-shortcodes' ),
	      'description' => __('Select header Tagline Color','nd-shortcodes'),
	      'section' => 'nd_options_customizer_header_1_section',
	    )
	  )
	);




	//divider color
	$wp_customize->add_setting( 'nd_options_customizer_header_1_divider_color', array(
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
	    'nd_options_customizer_header_1_divider_color', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Divider Color','nd-shortcodes' ),
	      'description' => __('Select header divider Color','nd-shortcodes'),
	      'section' => 'nd_options_customizer_header_1_section',
	    )
	  )
	);


}
