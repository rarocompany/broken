<?php

//shortcode
function nd_options_columns( $nd_options_atts, $nd_options_content = null ) {
    
    $nd_options_column = shortcode_atts( 
    	array(
	        'width' => '',
            'padding' => '',
    	), 
    $nd_options_atts );


    $nd_options_width = $nd_options_column['width'];
    $nd_options_padding = $nd_options_column['padding'];
    
    if ( $nd_options_column['width'] == '' ) { $nd_options_width = '100%'; }
    if ( $nd_options_column['padding'] == '' ) { $nd_options_padding = '10px'; }


    return '<div class="nd_options_float_left nd_options_box_sizing_border_box nd_options_width_100_percentage_all_iphone_important nd_options_padding_0_right_important_all_iphone nd_options_padding_0_left_important_all_iphone " style="padding: '.$nd_options_padding.'; width:'.$nd_options_width.';" >'.do_shortcode($nd_options_content).'</div>';
}

add_shortcode( 'nd_column', 'nd_options_columns' );