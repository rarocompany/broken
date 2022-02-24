<?php

//customizer
include "customizer.php";


//put post on theme
add_action('nicdark_single_nd','nicdark_single');
function nicdark_single() { 

    
    //get layout
    $nd_options_customizer_post_layout = get_option( 'nd_options_customizer_post_layout' );
    
    if ( $nd_options_customizer_post_layout == '' ) { 
        $nd_options_customizer_post_layout = 'layout-1';  
    }

    include "layout/".$nd_options_customizer_post_layout.".php";

	
}