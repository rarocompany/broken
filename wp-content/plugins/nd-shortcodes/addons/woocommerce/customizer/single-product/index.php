<?php


add_action('customize_register','nd_options_customizer_woocommerce_single_product');
function nd_options_customizer_woocommerce_single_product( $wp_customize ) {
  

	//ADD section 1
	$wp_customize->add_section( 'nd_options_customizer_woocommerce_single_product_section' , array(
	  'title' => 'Single Product',
	  'priority'    => 10,
	  'panel' => 'nd_options_customizer_woocommerce',
	) );



	//header image layout
	$wp_customize->add_setting( 'nd_options_customizer_woocommerce_single_product_layout_header_img', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_woocommerce_single_product_layout_header_img', array(
	  'label' => __( 'Header Image Layout' ),
	  'type' => 'select',
	  'section' => 'nd_options_customizer_woocommerce_single_product_section',
	  'choices' => array(
	        'layout-1' => 'Layout 1',
	        'layout-2' => 'Layout 2',
	        'layout-3' => 'Layout 3',
	        'layout-4' => 'Layout 4',
	        'layout-5' => 'Layout 5',
	        'layout-6' => 'Layout 6',
	        'layout-7' => 'Layout 7',
	        'layout-8' => 'Layout 8',
	        'layout-9' => 'Layout 9',
	    ),
	) );



}
