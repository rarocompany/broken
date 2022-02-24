<?php

//customizer
include "customizer.php";

//get layout
$nd_options_customizer_page_layout = get_option( 'nd_options_customizer_page_layout' );
if ( $nd_options_customizer_page_layout == '' ) { 
	$nd_options_customizer_page_layout = 'layout-1';  
}

//include layout sidebar
include "layout/sidebar/".$nd_options_customizer_page_layout.".php";


//put page on theme
add_action('nicdark_page_nd','nicdark_page');
function nicdark_page() { 
    

	//get layout
	$nd_options_customizer_page_layout = get_option( 'nd_options_customizer_page_layout' );
	
	if ( $nd_options_customizer_page_layout == '' ) { 
		$nd_options_customizer_page_layout = 'layout-1';  
	}

	include "layout/".$nd_options_customizer_page_layout.".php";


}

