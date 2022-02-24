<?php


add_action('customize_register','nd_options_customizer_header_5');
function nd_options_customizer_header_5( $wp_customize ) {
  


	//ADD section
	$wp_customize->add_section( 'nd_options_customizer_header_5_section' , array(
	  'title' => __( 'Header 5','nd-shortcodes' ),
	  'priority'    => 51,
	  'panel' => 'nd_options_customizer_header_panel',
	) );


	$wp_customize->add_setting( 'nd_options_customizer_header_5_content', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_header_5_content', array(
	  'label' => __('Header Page','nd-shortcodes'),
	  'type' => 'dropdown-pages',
	  'description' => __('Select the page that you want to use for your header','nd-shortcodes'),
	  'section' => 'nd_options_customizer_header_5_section',
	) );


	$wp_customize->add_setting( 'nd_options_customizer_header_5_content_mobile', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_header_5_content_mobile', array(
	  'label' => __('Header Page Responsive','nd-shortcodes'),
	  'type' => 'dropdown-pages',
	  'description' => __('Select the page that you want to use for your header in responsive mode','nd-shortcodes'),
	  'section' => 'nd_options_customizer_header_5_section',
	) );



}





//START create sidebars
$nd_options_customizer_header_layout = get_option( 'nd_options_customizer_header_layout' );
if ( $nd_options_customizer_header_layout == '' ) { $nd_options_customizer_header_layout = 'header-1';  }

if (  $nd_options_customizer_header_layout == 'header-5' ) {

	
	function nd_options_header_5_sidebars() {

	    // Footer 4 - Column 1
	    register_sidebar(array(
	        'name' =>  esc_html__('Header 5 Sidebar 1','nd-shortcodes'),
	        'id' => 'nd_options_header_5_sidebar_1',
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3>',
	        'after_title' => '</h3>',
	    ));
	    // Footer 4 - Column 2
	    register_sidebar(array(
	        'name' =>  esc_html__('Header 5 Sidebar 2','nd-shortcodes'),
	        'id' => 'nd_options_header_5_sidebar_2',
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3>',
	        'after_title' => '</h3>',
	    ));

	}
	add_action( 'widgets_init', 'nd_options_header_5_sidebars' );

}
//END create sidebars
