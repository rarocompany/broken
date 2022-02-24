<?php


/* **************************************** START WORDPRESS INFORMATION **************************************** */

//function for get color profile admin
function nd_cc_get_profile_bg_color($nd_cc_color){
	
	global $_wp_admin_css_colors;
	$nd_cc_admin_color = get_user_option( 'admin_color' );
	
	$nd_cc_profile_bg_colors = $_wp_admin_css_colors[$nd_cc_admin_color]->colors; 


	if ( $nd_cc_profile_bg_colors[$nd_cc_color] == '#e5e5e5' ) {

		return '#6b6b6b';

	}else{

		return $nd_cc_profile_bg_colors[$nd_cc_color];
		
	}

	
}

/* **************************************** END WORDPRESS INFORMATION **************************************** */



/* **************************************** START SETTINGS **************************************** */


function nd_cc_get_container(){

  $nd_cc_container = get_option('nd_cc_container');

  return $nd_cc_container;

}


/* **************************************** END SETTINGS **************************************** */



