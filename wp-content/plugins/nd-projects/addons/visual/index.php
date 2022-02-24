<?php

if ( get_option('nicdark_theme_author') == 1 ) {

//add image size
if ( function_exists( 'add_image_size' ) ) {  add_image_size( 'nd_cc_image_size_700_1000', 700, 1000, true ); }
if ( function_exists( 'add_image_size' ) ) {  add_image_size( 'nd_cc_image_size_1000_513', 1000, 513, true ); }

//include all shortcodes
foreach ( glob ( plugin_dir_path( __FILE__ ) . "*/index.php" ) as $file ){
	include_once $file;
}

}