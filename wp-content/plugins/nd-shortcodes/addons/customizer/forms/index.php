<?php


add_action('customize_register','nd_options_customizer_forms');
function nd_options_customizer_forms( $wp_customize ) {
  

	//ADD panel
	$wp_customize->add_panel( 'nd_options_customizer_forms_panel', array(
	  'title' => __( 'Forms','nd-shortcodes' ),
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '',
	  'description' => __( 'Forms Settings','nd-shortcodes' ), // Include html tags such as <p>.
	  'priority' => 170, // Mixed with top-level-section hierarchy.
	) );


}





//include all options
foreach ( glob ( plugin_dir_path( __FILE__ ) . "*/index.php" ) as $file ){
  include_once $file;
}



//add body class for customizer font
add_filter('body_class', 'nd_options_customizer_add_body_class_forms');
function nd_options_customizer_add_body_class_forms($nd_options_body_class_form) {
        $nd_options_body_class_form[] = 'nd_options_customizer_forms';
        return $nd_options_body_class_form;
}

