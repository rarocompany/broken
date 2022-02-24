<?php


add_action('customize_register','nd_options_customizer_header_2');
function nd_options_customizer_header_2( $wp_customize ) {
  


	//ADD section
	$wp_customize->add_section( 'nd_options_customizer_header_2_section' , array(
	  'title' => __( 'Header 2','nd-shortcodes' ),
	  'priority'    => 50,
	  'panel' => 'nd_options_customizer_header_panel',
	) );



	//Navigation Margin
	$wp_customize->add_setting( 'nd_options_customizer_header_2_margin', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_header_2_margin', array(
	  'type' => 'range',
	  'section' => 'nd_options_customizer_header_2_section',
	  'label' => __( 'Navigation Margin Top/Bottom','nd-shortcodes' ),
	  'input_attrs' => array(
	    'min' => 0,
	    'max' => 100,
	    'step' => 1,
	  ),
	) );



	//background
	$wp_customize->add_setting( 'nd_options_customizer_header_2_bg', array(
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
	    'nd_options_customizer_header_2_bg', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Background Color','nd-shortcodes' ),
	      'description' => __('Select header Background','nd-shortcodes'),
	      'section' => 'nd_options_customizer_header_2_section',
	    )
	  )
	);




	//Transparent Menu
	$wp_customize->add_setting( 'nd_options_customizer_header_2_bg_transparent', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_header_2_bg_transparent', array(
	  'label' => __( 'Enable Transparent Menu','nd-shortcodes' ),
	  'type' => 'checkbox',
	  'section' => 'nd_options_customizer_header_2_section',
	) );



	//menu color
	$wp_customize->add_setting( 'nd_options_customizer_header_2_menu_color', array(
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
	    'nd_options_customizer_header_2_menu_color', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Menu Color','nd-shortcodes' ),
	      'description' => __('Select header Menu Color','nd-shortcodes'),
	      'section' => 'nd_options_customizer_header_2_section',
	    )
	  )
	);


	//divider color
	$wp_customize->add_setting( 'nd_options_customizer_header_2_divider_color', array(
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
	    'nd_options_customizer_header_2_divider_color', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Divider Color','nd-shortcodes' ),
	      'description' => __('Select header divider Color','nd-shortcodes'),
	      'section' => 'nd_options_customizer_header_2_section',
	    )
	  )
	);


	//background top header
	$wp_customize->add_setting( 'nd_options_customizer_top_header_2_bg', array(
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
	    'nd_options_customizer_top_header_2_bg', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Background Color Top Header','nd-shortcodes' ),
	      'description' => __('Select top header Background','nd-shortcodes'),
	      'section' => 'nd_options_customizer_header_2_section',
	    )
	  )
	);



	//text top header
	$wp_customize->add_setting( 'nd_options_customizer_top_header_2_text_color', array(
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
	    'nd_options_customizer_top_header_2_text_color', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Color Text Top Header','nd-shortcodes' ),
	      'description' => __('Select top header text color','nd-shortcodes'),
	      'section' => 'nd_options_customizer_header_2_section',
	    )
	  )
	);


	//TOP header Left Content
	$wp_customize->add_setting( 'nd_options_customizer_top_header_2_left_content', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_top_header_2_left_content', array(
	  'label' => __( 'Top Header Left Content','nd-shortcodes' ),
	  'description' => __('You can use this shortcodes for display icon and text <strong>[nd_icon_text icon="" text="" image="" link="" float=""]</strong>','nd-shortcodes'),
	  'type' => 'textarea',
	  'section' => 'nd_options_customizer_header_2_section',
	) );



	//TOP header Right Content
	$wp_customize->add_setting( 'nd_options_customizer_top_header_2_right_content', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_top_header_2_right_content', array(
	  'label' => __( 'Top Header Right Content','nd-shortcodes' ),
	  'description' => __('You can use this shortcodes for display icon and text <strong>[nd_icon_text icon="" text="" image="" link="" float=""]</strong>','nd-shortcodes'),
	  'type' => 'textarea',
	  'section' => 'nd_options_customizer_header_2_section',
	) );



	//Disable Top Header
	$wp_customize->add_setting( 'nd_options_customizer_top_header_2_display', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_top_header_2_display', array(
	  'label' => __( 'Disable Top Header','nd-shortcodes' ),
	  'type' => 'checkbox',
	  'section' => 'nd_options_customizer_header_2_section',
	) );



	//Disable Top Header In Responsive Mode
	$wp_customize->add_setting( 'nd_options_customizer_top_header_2_display_responsive', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_top_header_2_display_responsive', array(
	  'label' => __( 'Disable Top Header In Responsive Mode','nd-shortcodes' ),
	  'type' => 'checkbox',
	  'section' => 'nd_options_customizer_header_2_section',
	) );




	//Icon Responsive
	$wp_customize->add_setting( 'nd_options_customizer_header_2_icon_responsive_menu', array(
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
			'nd_options_customizer_header_2_icon_responsive_menu', 
			array(
			  'label' => __( 'Icon Open Menu Responsive', 'nd-shortcodes' ),
			  'section' => 'nd_options_customizer_header_2_section',
			  'mime_type' => 'image',
			) 
		) 
	);



	//Bg menu responsive
	$wp_customize->add_setting( 'nd_options_customizer_header_2_bg_responsive', array(
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
	    'nd_options_customizer_header_2_bg_responsive', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Menu Responsive Bg Color','nd-shortcodes' ),
	      'description' => __('Select Background for menu responsive','nd-shortcodes'),
	      'section' => 'nd_options_customizer_header_2_section',
	    )
	  )
	);


	//Sticky Navigation
	$wp_customize->add_setting( 'nd_options_customizer_header_2_sticky', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_header_2_sticky', array(
	  'label' => __( 'Enable Sticky Menu','nd-shortcodes' ),
	  'type' => 'checkbox',
	  'section' => 'nd_options_customizer_header_2_section',
	) );



}
