<?php


add_action('customize_register','nd_options_customizer_woocommerce_archive_products');
function nd_options_customizer_woocommerce_archive_products( $wp_customize ) {
  

	//ADD section 1
	$wp_customize->add_section( 'nd_options_customizer_woocommerce_archive_products_section' , array(
	  'title' => 'Archive Shop',
	  'priority'    => 10,
	  'panel' => 'nd_options_customizer_woocommerce',
	) );


	//Disable Header
	$wp_customize->add_setting( 'nd_options_customizer_woocommerce_archive_products_header_image_display', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_woocommerce_archive_products_header_image_display', array(
	  'label' => __( 'Disable Header Section' ),
	  'type' => 'checkbox',
	  'section' => 'nd_options_customizer_woocommerce_archive_products_section',
	) );

	
	//Courses Header Image
	$wp_customize->add_setting( 'nd_options_customizer_woocommerce_archive_products_header_image', array(
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
			'nd_options_customizer_woocommerce_archive_products_header_image', 
			array(
			  'label' => __( 'Shop Header Image', 'nd-shortcodes' ),
			  'section' => 'nd_options_customizer_woocommerce_archive_products_section',
			  'mime_type' => 'image',
			) 
		) 
	);



	//image position
	$wp_customize->add_setting( 'nd_options_customizer_woocommerce_archive_products_header_image_position', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_woocommerce_archive_products_header_image_position', array(
	  'label' => __( 'Image Position' ),
	  'type' => 'select',
	  'section' => 'nd_options_customizer_woocommerce_archive_products_section',
	  'choices' => array(
	        'nd_options_background_position_center_top' => 'Position Top',
	        'nd_options_background_position_center_bottom' => 'Position Bottom',
	        'nd_options_background_position_center' => 'Position Center',
	    ),
	) );


	//header image layout
	$wp_customize->add_setting( 'nd_options_customizer_woocommerce_archive_products_layout_header_img', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_woocommerce_archive_products_layout_header_img', array(
	  'label' => __( 'Header Image Layout' ),
	  'type' => 'select',
	  'section' => 'nd_options_customizer_woocommerce_archive_products_section',
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


	//layout
	$wp_customize->add_setting( 'nd_options_customizer_woocommerce_archive_products_layout', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_woocommerce_archive_products_layout', array(
	  'label' => __( 'Sidebar' ),
	  'type' => 'select',
	  'section' => 'nd_options_customizer_woocommerce_archive_products_section',
	  'choices' => array(
	        'nd_options_customizer_woocommerce_archive_full_width' => 'Full Width',
	        'nd_options_customizer_woocommerce_archive_right_sidebar' => 'Right Sidebar',
	        'nd_options_customizer_woocommerce_archive_left_sidebar' => 'Left Sidebar',
	    ),
	) );



}
