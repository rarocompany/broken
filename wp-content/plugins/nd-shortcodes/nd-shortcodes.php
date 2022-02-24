<?php
/*
Plugin Name:       ND Shortcodes
Description:       The plugin adds some useful components to your page builder ( Elementor or WP Bakery Page Builder ). All components are full responsive and retina ready.
Version:           6.4
Plugin URI:        https://nicdark.com
Author:            Nicdark
Author URI:        https://nicdark.com
License:           GPLv2 or later
*/



//translation
function nd_options_load_textdomain()
{
  load_plugin_textdomain("nd-shortcodes", false, dirname(plugin_basename(__FILE__)) . '/languages');
}
add_action('plugins_loaded', 'nd_options_load_textdomain');



//START add custom css and js
function nd_options_scripts() {
  
  //basic css plugin
  wp_enqueue_style( 'nd_options_style', esc_url( plugins_url( 'css/style.css', __FILE__ ) ) );

  wp_enqueue_script('jquery');
  
}
add_action( 'wp_enqueue_scripts', 'nd_options_scripts' );
//END add custom css and js



//START check if visual Composer is present
if( function_exists('vc_map')){

  //include all shortcodes
  foreach ( glob ( plugin_dir_path( __FILE__ ) . "shortcodes/*/index.php" ) as $file ){
    include_once $file;
  }
  

}
//END check if visual Composer is present



//include all addons
foreach ( glob ( plugin_dir_path( __FILE__ ) . "addons/*/index.php" ) as $file ){
  include_once $file;
}


//enable svg media uploader
function nd_options_enable_svg_media_upload( $nd_options_mimes = array() ) {
  $nd_options_mimes['svg']  = 'image/svg+xml';
  $nd_options_mimes['svgz'] = 'image/svg+xml';
  return $nd_options_mimes;
}
add_filter( 'upload_mimes', 'nd_options_enable_svg_media_upload' );


//enable shortcode in the widget text
add_filter('widget_text', 'do_shortcode');


//update theme options
function nd_options_theme_setup_update(){
    update_option( 'nicdark_theme_author', 0 );
}
add_action( 'after_switch_theme' , 'nd_options_theme_setup_update');


//function for get plugin version
function nd_options_get_plugin_version(){

    $nd_options_plugin_data = get_plugin_data( __FILE__ );
    $nd_options_plugin_version = $nd_options_plugin_data['Version'];

    return $nd_options_plugin_version;

}


//include settings
if ( get_option('nicdark_theme_author') == 1 ){
  require_once dirname( __FILE__ ) . '/inc/settings/index.php'; 
}

