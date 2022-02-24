<?php


add_action('customize_register','nd_options_customizer_woocommerce');
function nd_options_customizer_woocommerce( $wp_customize ) {
  

  //ADD panel
  $wp_customize->add_panel( 'nd_options_customizer_woocommerce', array(
    'title' => __( 'ND Woo Commerce', 'nd-shortcodes' ),
    'capability' => 'edit_theme_options',
    'theme_supports' => '',
    'description' => __( 'Plugin Settings', 'nd-shortcodes' ), // Include html tags such as <p>.
    'priority' => 230, // Mixed with top-level-section hierarchy.
  ) );


}


//include all options
foreach ( glob ( plugin_dir_path( __FILE__ ) . "*/index.php" ) as $file ){
  include_once $file;
}