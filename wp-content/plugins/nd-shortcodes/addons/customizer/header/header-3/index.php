<?php


add_action('customize_register','nd_options_customizer_header_3');
function nd_options_customizer_header_3( $wp_customize ) {
  


	//ADD section
	$wp_customize->add_section( 'nd_options_customizer_header_3_section' , array(
	  'title' => __( 'Header 3','nd-shortcodes' ),
	  'priority'    => 50,
	  'panel' => 'nd_options_customizer_header_panel',
	) );



	//Navigation Margin
	$wp_customize->add_setting( 'nd_options_customizer_header_3_margin', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_header_3_margin', array(
	  'type' => 'range',
	  'section' => 'nd_options_customizer_header_3_section',
	  'label' => __( 'Navigation Margin Top/Bottom','nd-shortcodes' ),
	  'input_attrs' => array(
	    'min' => 0,
	    'max' => 100,
	    'step' => 1,
	  ),
	) );



	//Navigation Right Content
	$wp_customize->add_setting( 'nd_options_customizer_header_3_right_content', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_header_3_right_content', array(
	  'label' => __( 'Header Right Content','nd-shortcodes' ),
	  'description' => __('You can use this shortcodes for display icon and text <strong>[nd_icon_text icon="" text="" image="" link="" float=""]</strong>','nd-shortcodes'),
	  'type' => 'textarea',
	  'section' => 'nd_options_customizer_header_3_section',
	) );



	//background
	$wp_customize->add_setting( 'nd_options_customizer_header_3_bg', array(
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
	    'nd_options_customizer_header_3_bg', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Background Color','nd-shortcodes' ),
	      'description' => __('Select header Background','nd-shortcodes'),
	      'section' => 'nd_options_customizer_header_3_section',
	    )
	  )
	);




	//Transparent Menu
	$wp_customize->add_setting( 'nd_options_customizer_header_3_bg_transparent', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_header_3_bg_transparent', array(
	  'label' => __( 'Enable Transparent Menu','nd-shortcodes' ),
	  'type' => 'checkbox',
	  'section' => 'nd_options_customizer_header_3_section',
	) );



	//menu color
	$wp_customize->add_setting( 'nd_options_customizer_header_3_menu_color', array(
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
	    'nd_options_customizer_header_3_menu_color', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Menu Color','nd-shortcodes' ),
	      'description' => __('Select header Menu Color','nd-shortcodes'),
	      'section' => 'nd_options_customizer_header_3_section',
	    )
	  )
	);


	//divider color
	$wp_customize->add_setting( 'nd_options_customizer_header_3_divider_color', array(
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
	    'nd_options_customizer_header_3_divider_color', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Border Color','nd-shortcodes' ),
	      'description' => __('Select header border Color','nd-shortcodes'),
	      'section' => 'nd_options_customizer_header_3_section',
	    )
	  )
	);


	//background top header
	$wp_customize->add_setting( 'nd_options_customizer_top_header_3_bg', array(
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
	    'nd_options_customizer_top_header_3_bg', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Background Color Top Header','nd-shortcodes' ),
	      'description' => __('Select top header Background','nd-shortcodes'),
	      'section' => 'nd_options_customizer_header_3_section',
	    )
	  )
	);



	//text top header
	$wp_customize->add_setting( 'nd_options_customizer_top_header_3_text_color', array(
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
	    'nd_options_customizer_top_header_3_text_color', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Color Text Top Header','nd-shortcodes' ),
	      'description' => __('Select top header text color','nd-shortcodes'),
	      'section' => 'nd_options_customizer_header_3_section',
	    )
	  )
	);


	//TOP header Left Content
	$wp_customize->add_setting( 'nd_options_customizer_top_header_3_left_content', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_top_header_3_left_content', array(
	  'label' => __( 'Top Header Left Content','nd-shortcodes' ),
	  'description' => __('You can use this shortcodes for display icon and text <strong>[nd_icon_text icon="" text="" image="" link="" float=""]</strong>','nd-shortcodes'),
	  'type' => 'textarea',
	  'section' => 'nd_options_customizer_header_3_section',
	) );



	//TOP header Right Content
	$wp_customize->add_setting( 'nd_options_customizer_top_header_3_right_content', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_top_header_3_right_content', array(
	  'label' => __( 'Top Header Right Content','nd-shortcodes' ),
	  'description' => __('You can use this shortcodes for display icon and text <strong>[nd_icon_text icon="" text="" image="" link="" float=""]</strong>','nd-shortcodes'),
	  'type' => 'textarea',
	  'section' => 'nd_options_customizer_header_3_section',
	) );



	//Disable Top Header
	$wp_customize->add_setting( 'nd_options_customizer_top_header_3_display', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_top_header_3_display', array(
	  'label' => __( 'Disable Top Header','nd-shortcodes' ),
	  'type' => 'checkbox',
	  'section' => 'nd_options_customizer_header_3_section',
	) );




	//Icon Responsive
	$wp_customize->add_setting( 'nd_options_customizer_header_3_icon_responsive_menu', array(
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
			'nd_options_customizer_header_3_icon_responsive_menu', 
			array(
			  'label' => __( 'Icon Open Menu Responsive', 'nd-shortcodes' ),
			  'section' => 'nd_options_customizer_header_3_section',
			  'mime_type' => 'image',
			) 
		) 
	);



	//Bg menu responsive
	$wp_customize->add_setting( 'nd_options_customizer_header_3_bg_responsive', array(
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
	    'nd_options_customizer_header_3_bg_responsive', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Menu Responsive Bg Color','nd-shortcodes' ),
	      'description' => __('Select Background for menu responsive','nd-shortcodes'),
	      'section' => 'nd_options_customizer_header_3_section',
	    )
	  )
	);



}
