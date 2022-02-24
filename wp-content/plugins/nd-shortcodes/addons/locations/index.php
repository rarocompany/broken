<?php


$nd_options_locations_enable = get_option('nd_options_locations_enable');

if ( $nd_options_locations_enable == 1 ) { 

	if ( function_exists( 'add_image_size' ) ) {  add_image_size( 'nd_options_location_image_376_308', 376, 308, true ); }

	foreach ( glob ( plugin_dir_path( __FILE__ ) . "*/index.php" ) as $file ){
		include_once $file;
	}

}
