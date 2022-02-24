<?php


add_action('customize_register','nd_options_customizer_comment');
function nd_options_customizer_comment( $wp_customize ) {
  

	//ADD panel
	$wp_customize->add_panel( 'nd_options_customizer_comment', array(
	'title' => __( 'Comments Template', 'nd-shortcodes' ),
	'capability' => 'edit_theme_options',
	'theme_supports' => '',
	'description' => __( 'Comments Template Settings', 'nd-shortcodes' ), // Include html tags such as <p>.
	'priority' => 230, // Mixed with top-level-section hierarchy.
	) );


	//ADD section 1
	$wp_customize->add_section( 'nd_options_customizer_comments_layout_section' , array(
	  'title' => 'Layout',
	  'priority'    => 10,
	  'panel' => 'nd_options_customizer_comment',
	) );


	//styles
	$wp_customize->add_setting( 'nd_options_customizer_comments_layout', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_comments_layout', array(
	  'label' => __( 'Select Layout' ),
	  'type' => 'select',
	  'section' => 'nd_options_customizer_comments_layout_section',
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