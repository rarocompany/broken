<?php


add_action('customize_register','nd_options_customizer_general');
function nd_options_customizer_general( $wp_customize ) {
  

	//ADD panel
	$wp_customize->add_panel( 'nd_options_customizer_general_panel', array(
	  'title' => __( 'General','nd-shortcodes' ),
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '',
	  'description' => __( 'General Settings','nd-shortcodes' ), // Include html tags such as <p>.
	  'priority' => 129, // Mixed with top-level-section hierarchy.
	) );

}




//include all options
foreach ( glob ( plugin_dir_path( __FILE__ ) . "*/index.php" ) as $file ){
  include_once $file;
}