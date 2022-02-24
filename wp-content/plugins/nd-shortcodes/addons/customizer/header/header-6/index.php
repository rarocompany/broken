<?php


add_action('customize_register','nd_options_customizer_header_6');
function nd_options_customizer_header_6( $wp_customize ) {
  


	//ADD section
	$wp_customize->add_section( 'nd_options_customizer_header_6_section' , array(
	  'title' => __( 'Header 6','nd-shortcodes' ),
	  'priority'    => 52,
	  'panel' => 'nd_options_customizer_header_panel',
	) );


	$wp_customize->add_setting( 'nd_options_customizer_header_6_content', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_header_6_content', array(
	  'label' => __('Header Page','nd-shortcodes'),
	  'type' => 'dropdown-pages',
	  'description' => __('Select the page that you want to use for your header','nd-shortcodes'),
	  'section' => 'nd_options_customizer_header_6_section',
	) );

}