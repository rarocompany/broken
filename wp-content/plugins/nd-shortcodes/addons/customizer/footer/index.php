<?php


add_action('customize_register','nd_options_customizer_footer');
function nd_options_customizer_footer( $wp_customize ) {
  

	//ADD panel
	$wp_customize->add_panel( 'nd_options_customizer_footer_panel', array(
	  'title' => __('Footer','nd-shortcodes'),
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '',
	  'description' => __('Footer Settings','nd-shortcodes'), // Include html tags such as <p>.
	  'priority' => 140, // Mixed with top-level-section hierarchy.
	) );


	//ADD section 1
	$wp_customize->add_section( 'nd_options_customizer_footer_layout_section' , array(
	  'title' => __('Footer Layout','nd-shortcodes'),
	  'priority'    => 1,
	  'panel' => 'nd_options_customizer_footer_panel',
	) );


	//Footer Layout
	$wp_customize->add_setting( 'nd_options_customizer_footer_layout', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_footer_layout', array(
	  'label' => __('Footer Layout','nd-shortcodes'),
	  'type' => 'select',
	  'description' => __('Select Footer Layout and manage each layout on its panel.','nd-shortcodes'),
	  'section' => 'nd_options_customizer_footer_layout_section',
	  'choices' => array(
	        'footer-1' => 'Footer 1',
	        'footer-2' => 'Footer 2',
	        'footer-3' => 'Footer 3',
	        'footer-4' => 'Footer 4',
	        'footer-5' => 'Footer 5',
	        'footer-6' => 'Footer 6',
	    ),
	) );


}




//include all options
foreach ( glob ( plugin_dir_path( __FILE__ ) . "*/index.php" ) as $file ){
  include_once $file;
}



//put footer layout on theme
add_action('nicdark_footer_nd','nicdark_footers');
function nicdark_footers() {

	$nd_options_customizer_footer_layout = get_option( 'nd_options_customizer_footer_layout' );
	if ( $nd_options_customizer_footer_layout == '' ) { $nd_options_customizer_footer_layout = 'footer-1';  }
	include $nd_options_customizer_footer_layout.'/content.php';	

}