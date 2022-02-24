<?php


add_action('customize_register','nd_options_customizer_header');
function nd_options_customizer_header( $wp_customize ) {
  

	//ADD panel
	$wp_customize->add_panel( 'nd_options_customizer_header_panel', array(
	  'title' => __( 'Header','nd-shortcodes' ),
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '',
	  'description' => __( 'Header Settings','nd-shortcodes' ), // Include html tags such as <p>.
	  'priority' => 130, // Mixed with top-level-section hierarchy.
	) );


	//ADD section 1
	$wp_customize->add_section( 'nd_options_customizer_header_layout_section' , array(
	  'title' => __( 'Header Layout','nd-shortcodes' ),
	  'priority'    => 30,
	  'panel' => 'nd_options_customizer_header_panel',
	) );


	//header Layout
	$wp_customize->add_setting( 'nd_options_customizer_header_layout', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_header_layout', array(
	  'label' => __( 'Header Layout','nd-shortcodes' ),
	  'type' => 'select',
	  'description' => __('Select header Layout and manage each layout on its panel.','nd-shortcodes'),
	  'section' => 'nd_options_customizer_header_layout_section',
	  'choices' => array(
	        'header-1' => 'header 1',
	        'header-2' => 'header 2',
	        'header-3' => 'header 3',
	        'header-4' => 'header 4',
	        'header-5' => 'header 5',
	        'header-6' => 'header 6',
	    ),
	) );


}




//include all options
foreach ( glob ( plugin_dir_path( __FILE__ ) . "*/index.php" ) as $file ){
  include_once $file;
}



//put header layout on theme
add_action('nicdark_header_nd','nicdark_headers');
function nicdark_headers() {

	$nd_options_customizer_header_layout = get_option( 'nd_options_customizer_header_layout' );
	if ( $nd_options_customizer_header_layout == '' ) { $nd_options_customizer_header_layout = 'header-1';  }
	include $nd_options_customizer_header_layout.'/content.php';	

	//hook
	do_action("nicdark_header_after_navigation"); 

}


//put style.css on head
function nd_options_customizer_header_style(){

	$nd_options_customizer_header_layout = get_option( 'nd_options_customizer_header_layout' );
	if ( $nd_options_customizer_header_layout == '' ) { $nd_options_customizer_header_layout = 'header-1';  }
	include $nd_options_customizer_header_layout.'/style.php';	

}
add_action('wp_head','nd_options_customizer_header_style');