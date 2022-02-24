<?php


add_action('customize_register','nd_options_customizer_woocommerce_plugin_styles');
function nd_options_customizer_woocommerce_plugin_styles( $wp_customize ) {
  

	//ADD section 1
	$wp_customize->add_section( 'nd_options_customizer_woocommerce_plugin_styles' , array(
	  'title' => 'Plugin Styles',
	  'priority'    => 10,
	  'panel' => 'nd_options_customizer_woocommerce',
	) );


	
	//styles
	$wp_customize->add_setting( 'nd_options_customizer_woocommerce_plugin_style', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_woocommerce_plugin_style', array(
	  'label' => __( 'Select Style' ),
	  'type' => 'select',
	  'section' => 'nd_options_customizer_woocommerce_plugin_styles',
	  'choices' => array(
	        'default-style' => 'Default Woocommerce Style',
	        'custom-style-1' => 'Custom Style 1',
	        'custom-style-2' => 'Custom Style 2',
	        'custom-style-3' => 'Custom Style 3',
	        'custom-style-4' => 'Custom Style 4',
	        'custom-style-5' => 'Custom Style 5',
	        'custom-style-6' => 'Custom Style 6',
	        'custom-style-7' => 'Custom Style 7',
	        'custom-style-8' => 'Custom Style 8',
	        'custom-style-9' => 'Custom Style 9',
	    ),
	) );




	



}





//css inline
function nd_options_customizer_woocommerce_add_style() { 

	//get colors
	$nd_options_customizer_woocommerce_plugin_style = get_option( 'nd_options_customizer_woocommerce_plugin_style' );
	if ( $nd_options_customizer_woocommerce_plugin_style == '' ) { $nd_options_customizer_woocommerce_plugin_style = 'default-style'; }

	include $nd_options_customizer_woocommerce_plugin_style.".php";

}
add_action('wp_head', 'nd_options_customizer_woocommerce_add_style');
