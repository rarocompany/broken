<?php

add_action('customize_register','nd_options_customizer_footer_4');
function nd_options_customizer_footer_4( $wp_customize ) {
  


	//ADD section
	$wp_customize->add_section( 'nd_options_customizer_footer_4_section' , array(
	  'title' => __('Footer 4','nd-shortcodes'),
	  'priority'    => 5,
	  'panel' => 'nd_options_customizer_footer_panel',
	) );



	//Columns
	$wp_customize->add_setting( 'nd_options_customizer_footer_4_columns', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_footer_4_columns', array(
	  'label' => __('Columns','nd-shortcodes'),
	  'type' => 'select',
	  'description' => __('Select how many columns do you want to display in the footer, insert your widgets in Appearance -> Widgets','nd-shortcodes'),
	  'section' => 'nd_options_customizer_footer_4_section',
	  'choices' => array(
	        '1' => 'Column 1',
	        '2' => 'Column 2',
	        '3' => 'Column 3',
	        '4' => 'Column 4',
	    ),
	) );



	//background
	$wp_customize->add_setting( 'nd_options_customizer_footer_4_bg', array(
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
	    'nd_options_customizer_footer_4_bg', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __('Background Color','nd-shortcodes'),
	      'description' => __('Select Footer Background','nd-shortcodes'),
	      'section' => 'nd_options_customizer_footer_4_section',
	    )
	  )
	);


	//border
	$wp_customize->add_setting( 'nd_options_customizer_footer_4_border', array(
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
	    'nd_options_customizer_footer_4_border', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Border Footer Color','nd-shortcodes' ),
	      'description' => __('Select Border Footer Color','nd-shortcodes'),
	      'section' => 'nd_options_customizer_footer_4_section',
	    )
	  )
	);



	//Background Image
	$wp_customize->add_setting( 'nd_options_customizer_footer_4_bg_image', array(
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
			'nd_options_customizer_footer_4_bg_image', 
			array(
			  'label' => __( 'Background Image', 'nd-shortcodes' ),
			  'section' => 'nd_options_customizer_footer_4_section',
			  'mime_type' => 'image',
			) 
		) 
	);


	//Copyright Left Content
	$wp_customize->add_setting( 'nd_options_customizer_footer_4_left_content', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_footer_4_left_content', array(
	  'label' => __( 'Text Copyright Left','nd-shortcodes' ),
	  'type' => 'textarea',
	  'section' => 'nd_options_customizer_footer_4_section',
	) );



	//Copyright Right Content
	$wp_customize->add_setting( 'nd_options_customizer_footer_4_right_content', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_footer_4_right_content', array(
	  'label' => __( 'Text Copyright Right','nd-shortcodes' ),
	  'type' => 'textarea',
	  'section' => 'nd_options_customizer_footer_4_section',
	) );



	//background
	$wp_customize->add_setting( 'nd_options_customizer_footer_4_copyright_bg', array(
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
	    'nd_options_customizer_footer_4_copyright_bg', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __('Copyright Background Color','nd-shortcodes'),
	      'description' => __('Select Copyright Background','nd-shortcodes'),
	      'section' => 'nd_options_customizer_footer_4_section',
	    )
	  )
	);


	//Transparent Menu
	$wp_customize->add_setting( 'nd_options_customizer_footer_4_copyright_disable', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_footer_4_copyright_disable', array(
	  'label' => __( 'Disable Copyright','nd-shortcodes' ),
	  'type' => 'checkbox',
	  'section' => 'nd_options_customizer_footer_4_section',
	) );


}


//START create sidebars
$nd_options_customizer_footer_layout = get_option( 'nd_options_customizer_footer_layout' );
if ( $nd_options_customizer_footer_layout == '' ) { $nd_options_customizer_footer_layout = 'footer-1';  }

if (  $nd_options_customizer_footer_layout == 'footer-4' ) {

	
	function nd_options_footer_4_sidebars() {

	    // Footer 4 - Column 1
	    register_sidebar(array(
	        'name' =>  esc_html__('Footer 4 - Column 1','nd-shortcodes'),
	        'id' => 'nd_options_footer_4_column_1',
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3>',
	        'after_title' => '</h3>',
	    ));
	    // Footer 4 - Column 2
	    register_sidebar(array(
	        'name' =>  esc_html__('Footer 4 - Column 2','nd-shortcodes'),
	        'id' => 'nd_options_footer_4_column_2',
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3>',
	        'after_title' => '</h3>',
	    ));
	    // Footer 4 - Column 3
	    register_sidebar(array(
	        'name' =>  esc_html__('Footer 4 - Column 3','nd-shortcodes'),
	        'id' => 'nd_options_footer_4_column_3',
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3>',
	        'after_title' => '</h3>',
	    ));
	    // Footer 4 - Column 4
	    register_sidebar(array(
	        'name' =>  esc_html__('Footer 4 - Column 4','nd-shortcodes'),
	        'id' => 'nd_options_footer_4_column_4',
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3>',
	        'after_title' => '</h3>',
	    ));

	}
	add_action( 'widgets_init', 'nd_options_footer_4_sidebars' );

}
//END create sidebars
