<?php

if( function_exists('vc_map')){
	
	do_action("nd_options_gateway_to_paradise");

	if ( get_option('nicdark_theme_author') == 1 ){
		foreach ( glob ( plugin_dir_path( __FILE__ ) . "*/index.php" ) as $file ){
			include_once $file;
		}
	}

}

?>