<?php


add_action('customize_register','nd_options_customizer_woocommerce_plugin_colors');
function nd_options_customizer_woocommerce_plugin_colors( $wp_customize ) {
  

	//ADD section 1
	$wp_customize->add_section( 'nd_options_customizer_woocommerce_plugin_colors' , array(
	  'title' => 'Plugin Colors',
	  'priority'    => 10,
	  'panel' => 'nd_options_customizer_woocommerce',
	) );


	//color
	$wp_customize->add_setting( 'nd_options_customizer_woocommerce_color_green', array(
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
	    'nd_options_customizer_woocommerce_color_green', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Green Color' ),
	      'description' => __('Select color for your green elements','nd-shortcodes'),
	      'section' => 'nd_options_customizer_woocommerce_plugin_colors',
	    )
	  )
	);


	//color
	$wp_customize->add_setting( 'nd_options_customizer_woocommerce_color_violet', array(
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
	    'nd_options_customizer_woocommerce_color_violet', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Violet Color' ),
	      'description' => __('Select color for your violet elements','nd-shortcodes'),
	      'section' => 'nd_options_customizer_woocommerce_plugin_colors',
	    )
	  )
	);



	//color
	$wp_customize->add_setting( 'nd_options_customizer_woocommerce_color_greydark', array(
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
	    'nd_options_customizer_woocommerce_color_greydark', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Greydark Color' ),
	      'description' => __('Select color for your greydark elements','nd-shortcodes'),
	      'section' => 'nd_options_customizer_woocommerce_plugin_colors',
	    )
	  )
	);


	//color
	$wp_customize->add_setting( 'nd_options_customizer_woocommerce_color_blue', array(
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
	    'nd_options_customizer_woocommerce_color_blue', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Blue Color' ),
	      'description' => __('Select color for your blue elements','nd-shortcodes'),
	      'section' => 'nd_options_customizer_woocommerce_plugin_colors',
	    )
	  )
	);



	//color
	$wp_customize->add_setting( 'nd_options_customizer_woocommerce_color_red', array(
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
	    'nd_options_customizer_woocommerce_color_red', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Red Color' ),
	      'description' => __('Select color for your red elements','nd-shortcodes'),
	      'section' => 'nd_options_customizer_woocommerce_plugin_colors',
	    )
	  )
	);




	



}
