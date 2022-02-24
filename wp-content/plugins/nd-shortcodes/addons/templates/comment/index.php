<?php

//customizer
include "customizer.php";

//put post on theme
add_action('nicdark_comments_nd','nicdark_comments');
function nicdark_comments() { 


    //get layout
    $nd_options_customizer_comments_layout = get_option( 'nd_options_customizer_comments_layout' );
    
    if ( $nd_options_customizer_comments_layout == '' ) { 
        $nd_options_customizer_comments_layout = 'layout-1';  
    }

    include "layout/".$nd_options_customizer_comments_layout.".php";
	
}
//end function

