<?php



add_action('customize_register','nd_options_customizer_exampleregister');
function nd_options_customizer_exampleregister( $wp_customize ) {
  

	//ADD panel
	$wp_customize->add_panel( 'nd_options_customizer_example_panel', array(
	  'title' => __( 'Example Panel' ),
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '',
	  'description' => __( 'Description Example Panel 1' ), // Include html tags such as <p>.
	  'priority' => 160, // Mixed with top-level-section hierarchy.
	) );


	//ADD section
	$wp_customize->add_section( 'nd_options_customizer_example_section' , array(
	  'title' => 'Example Section',
	  'priority'    => 1,
	  'panel' => 'nd_options_customizer_example_panel',
	) );	



	//textarea
	$wp_customize->add_setting( 'nd_options_customizer_example_setting_1', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_example_setting_1', array(
	  'label' => __( 'Textarea Field' ),
	  'type' => 'textarea',
	  'section' => 'nd_options_customizer_example_section',
	) );



	//slider range
	$wp_customize->add_setting( 'nd_options_customizer_example_setting_2', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_example_setting_2', array(
	  'type' => 'range',
	  'section' => 'nd_options_customizer_example_section',
	  'label' => __( 'Range Field' ),
	  'description' => __( 'This is the range control description.' ),
	  'input_attrs' => array(
	    'min' => 0,
	    'max' => 10,
	    'step' => 2,
	  ),
	) );



	//colorpicker
	$wp_customize->add_setting( 'nd_options_customizer_example_setting_3', array(
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
	    'nd_options_customizer_example_setting_3', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Color Field' ),
	      'section' => 'nd_options_customizer_example_section',
	    )
	  )
	);


	//date
	$wp_customize->add_setting( 'nd_options_customizer_example_setting_4', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_example_setting_4', array(
	  'type' => 'date',
	  'priority' => 10, // Within the section.
	  'section' => 'nd_options_customizer_example_section', // Required, core or custom.
	  'label' => __( 'Date Field' ),
	  'description' => __( 'This is a description.' ),
	  'input_attrs' => array(
	    'class' => 'my-custom-class-for-js',
	    'style' => 'border: 1px solid #ccc',
	    'placeholder' => __( 'mm/dd/yyyy' ),
	  ),
	  'active_callback' => 'is_front_page',
	) );


	//Image Uploader
	$wp_customize->add_setting( 'nd_options_customizer_example_setting_5', array(
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
			'nd_options_customizer_example_setting_5', 
			array(
			  'label' => __( 'Image Uploader Field', 'theme_textdomain' ),
			  'section' => 'nd_options_customizer_example_section',
			  'mime_type' => 'image',
			) 
		) 
	);



	//Audio Uploader
	$wp_customize->add_setting( 'nd_options_customizer_example_setting_6', array(
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
			'nd_options_customizer_example_setting_6', 
			array(
			  'label' => __( 'Audio Uploader Field', 'theme_textdomain' ),
			  'section' => 'nd_options_customizer_example_section',
			  'mime_type' => 'audio',
			) 
		) 
	);


	//checkbox
	$wp_customize->add_setting( 'nd_options_customizer_example_setting_7', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_example_setting_7', array(
	  'label' => __( 'Checkbox Field' ),
	  'type' => 'checkbox',
	  'section' => 'nd_options_customizer_example_section',
	) );


	//dropdown-pages
	$wp_customize->add_setting( 'nd_options_customizer_example_setting_8', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_example_setting_8', array(
	  'label' => __( 'Dropdown Pages Field' ),
	  'type' => 'dropdown-pages',
	  'section' => 'nd_options_customizer_example_section',
	) );



	//select
	$wp_customize->add_setting( 'nd_options_customizer_example_setting_9', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_example_setting_9', array(
	  'label' => __( 'Select Field' ),
	  'type' => 'select',
	  'section' => 'nd_options_customizer_example_section',
	  'choices' => array(
	        'select-1' => 'Select 1',
	        'select-2' => 'Select 2',
	        'select-3' => 'Select 3',
	        'select-4' => 'Select 4',
	    ),
	) );



	//radio
	$wp_customize->add_setting( 'nd_options_customizer_example_setting_10', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_example_setting_10', array(
	  'label' => __( 'Radio Field' ),
	  'type' => 'radio',
	  'section' => 'nd_options_customizer_example_section',
	  'choices' => array(
	        'radio-1' => 'Radio 1',
	        'radio-2' => 'Radio 2',
	        'radio-3' => 'Radio 3',
	        'radio-4' => 'Radio 4',
	    ),
	) );


}








