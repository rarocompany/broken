<?php


$nd_options_customizer_enable = get_option('nd_options_customizer_enable');

//include all files
if ( $nd_options_customizer_enable == 1 ) { 

	foreach ( glob ( plugin_dir_path( __FILE__ ) . "*/index.php" ) as $file ){
  		include_once $file;
	}

}
