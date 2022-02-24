<?php


add_action('customize_register','nd_options_customizer_header_4');
function nd_options_customizer_header_4( $wp_customize ) {
  


	//ADD section
	$wp_customize->add_section( 'nd_options_customizer_header_4_section' , array(
	  'title' => __( 'Header 4','nd-shortcodes' ),
	  'priority'    => 51,
	  'panel' => 'nd_options_customizer_header_panel',
	) );



	//Navigation Margin
	$wp_customize->add_setting( 'nd_options_customizer_header_4_margin', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_header_4_margin', array(
	  'type' => 'range',
	  'section' => 'nd_options_customizer_header_4_section',
	  'label' => __( 'Navigation Margin Top/Bottom','nd-shortcodes' ),
	  'input_attrs' => array(
	    'min' => 0,
	    'max' => 100,
	    'step' => 1,
	  ),
	) );



	//background
	$wp_customize->add_setting( 'nd_options_customizer_header_4_bg', array(
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
	    'nd_options_customizer_header_4_bg', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Background Color','nd-shortcodes' ),
	      'description' => __('Select header Background','nd-shortcodes'),
	      'section' => 'nd_options_customizer_header_4_section',
	    )
	  )
	);




	//Transparent Menu
	$wp_customize->add_setting( 'nd_options_customizer_header_4_bg_transparent', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_header_4_bg_transparent', array(
	  'label' => __( 'Enable Transparent Menu','nd-shortcodes' ),
	  'type' => 'checkbox',
	  'section' => 'nd_options_customizer_header_4_section',
	) );



	//menu color
	$wp_customize->add_setting( 'nd_options_customizer_header_4_menu_color', array(
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
	    'nd_options_customizer_header_4_menu_color', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Menu Color','nd-shortcodes' ),
	      'description' => __('Select header Menu Color','nd-shortcodes'),
	      'section' => 'nd_options_customizer_header_4_section',
	    )
	  )
	);


	//divider color
	$wp_customize->add_setting( 'nd_options_customizer_header_4_divider_color', array(
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
	    'nd_options_customizer_header_4_divider_color', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Divider Color','nd-shortcodes' ),
	      'description' => __('Select header divider Color','nd-shortcodes'),
	      'section' => 'nd_options_customizer_header_4_section',
	    )
	  )
	);


	//background top header
	$wp_customize->add_setting( 'nd_options_customizer_top_header_4_bg', array(
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
	    'nd_options_customizer_top_header_4_bg', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Background Color Top Header','nd-shortcodes' ),
	      'description' => __('Select top header Background, for more customization use the ID "nd_options_navigation_4_top_header" and add your custom css rules on Customizer -> Additional CSS','nd-shortcodes'),
	      'section' => 'nd_options_customizer_header_4_section',
	    )
	  )
	);



	//text top header
	$wp_customize->add_setting( 'nd_options_customizer_top_header_4_text_color', array(
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
	    'nd_options_customizer_top_header_4_text_color', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Color Text Top Header','nd-shortcodes' ),
	      'description' => __('Select top header text color','nd-shortcodes'),
	      'section' => 'nd_options_customizer_header_4_section',
	    )
	  )
	);


	//TOP header Left Content
	$wp_customize->add_setting( 'nd_options_customizer_top_header_4_left_content', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_top_header_4_left_content', array(
	  'label' => __( 'Top Header Left Content','nd-shortcodes' ),
	  'description' => __('You can use this shortcodes for display icon and text <strong>[nd_icon_text icon="" text="" image="" link="" float=""]</strong>','nd-shortcodes'),
	  'type' => 'textarea',
	  'section' => 'nd_options_customizer_header_4_section',
	) );



	//TOP header Right Content
	$wp_customize->add_setting( 'nd_options_customizer_top_header_4_right_content', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_top_header_4_right_content', array(
	  'label' => __( 'Top Header Right Content','nd-shortcodes' ),
	  'description' => __('You can use this shortcodes for display icon and text <strong>[nd_icon_text icon="" text="" image="" link="" float=""]</strong>','nd-shortcodes'),
	  'type' => 'textarea',
	  'section' => 'nd_options_customizer_header_4_section',
	) );



	//Disable Top Header
	$wp_customize->add_setting( 'nd_options_customizer_top_header_4_display', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_top_header_4_display', array(
	  'label' => __( 'Disable Top Header','nd-shortcodes' ),
	  'type' => 'checkbox',
	  'section' => 'nd_options_customizer_header_4_section',
	) );




	//Icon Responsive
	$wp_customize->add_setting( 'nd_options_customizer_header_4_icon_responsive_menu', array(
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
			'nd_options_customizer_header_4_icon_responsive_menu', 
			array(
			  'label' => __( 'Icon Open Menu Responsive', 'nd-shortcodes' ),
			  'section' => 'nd_options_customizer_header_4_section',
			  'mime_type' => 'image',
			) 
		) 
	);



	//Bg menu responsive
	$wp_customize->add_setting( 'nd_options_customizer_header_4_bg_responsive', array(
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
	    'nd_options_customizer_header_4_bg_responsive', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Menu Responsive Bg Color','nd-shortcodes' ),
	      'description' => __('Select Background for menu responsive','nd-shortcodes'),
	      'section' => 'nd_options_customizer_header_4_section',
	    )
	  )
	);



}
