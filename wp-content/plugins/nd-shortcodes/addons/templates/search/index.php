<?php


//put page on theme
add_action('nicdark_search_nd','nicdark_search_content');
function nicdark_search_content() {

	
	//get layout
	$nd_options_customizer_archives_search_layout = get_option( 'nd_options_customizer_archives_search_layout' );
	
	if ( $nd_options_customizer_archives_search_layout == '' ) { 
		$nd_options_customizer_archives_search_layout = 'layout-1';  
	}

	include "layout/".$nd_options_customizer_archives_search_layout.".php";
	

}

