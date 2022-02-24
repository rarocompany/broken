<?php

//shortcode nd_social
function nd_options_icon_text( $nd_options_atts ) {
    
    $nd_options_icon_text = shortcode_atts( 
    	array(
	        'icon' => '',
            'image' => '',
	        'text' => '',
            'text-color' => '',
	        'link' => '',
            'float' => '',
            'image-width' => '',
            'class' => '',
            'margin' => '',
            'font' => '',
    	), 
    $nd_options_atts );

    //define
    $nd_options_str = '';
    

    


    //float and margin
    if ( $nd_options_icon_text['float'] == '' ) { 
        $nd_options_icon_text_float = "left";
        $nd_options_text_margin = "nd_options_margin_right_20";
        $nd_options_icon_margin = "nd_options_margin_right_10";
    }else{
        $nd_options_icon_text_float = $nd_options_icon_text['float'];
        $nd_options_text_margin = "nd_options_margin_left_10";
        $nd_options_icon_margin = "nd_options_margin_left_20"; 
    }



    //icon text
    if ( $nd_options_icon_text['text'] == '' ) {
        $nd_options_icon_text_text = '';
    }else {
        
        $nd_options_icon_text_color = $nd_options_icon_text['text-color'];
        if ( $nd_options_icon_text_color == '' ) { $nd_options_icon_text_color == ''; }

        $nd_options_icon_text_text = '
        
            <div class="nd_options_display_table_cell nd_options_vertical_align_middle    ">
                <a style="color:'.$nd_options_icon_text_color.';" class="'.$nd_options_text_margin.' nd_options_'.$nd_options_icon_text['font'].'_font " href="'.$nd_options_icon_text['link'].'">'.$nd_options_icon_text['text'].'</a>
            </div>

        ';

    }



    //icon image or empty
    if ( $nd_options_icon_text['icon'] != '' ) {


        $nd_options_icon_path = 'img/'.$nd_options_icon_text['icon'].'.svg';
        $nd_options_icon_text_image = esc_url(plugins_url($nd_options_icon_path, __FILE__ ));


        $nd_options_icon_text_icon = '
        
            <div class="nd_options_display_table_cell nd_options_vertical_align_middle    ">
                <a href="'.$nd_options_icon_text['link'].'"><img alt="" width="15" height="15" class="'.$nd_options_icon_margin.' nd_options_float_left" src="'.$nd_options_icon_text_image.'"></a>
            </div>

        ';


    }elseif ( $nd_options_icon_text['image'] != '' ){

        $nd_options_icon_text_image_width = $nd_options_icon_text['image-width'];
        if ( $nd_options_icon_text_image_width == '' ) { $nd_options_image_width = 15; }else { $nd_options_image_width = $nd_options_icon_text_image_width; }

        $nd_options_icon_text_image = $nd_options_icon_text['image'];

        $nd_options_icon_text_icon = '
        
            <div class="nd_options_display_table_cell nd_options_vertical_align_middle    ">
                <a href="'.$nd_options_icon_text['link'].'"><img alt="" width="'.$nd_options_image_width.'" class="'.$nd_options_icon_margin.' nd_options_float_left" src="'.$nd_options_icon_text_image.'"></a>
            </div>

        ';  

    }else{

        $nd_options_icon_text_icon = '';

    }


   	$nd_options_str .= '

        <div style="margin:'.$nd_options_icon_text['margin'].';" class=" '.$nd_options_icon_text['class'].' nd_options_display_table nd_options_float_'.$nd_options_icon_text_float.'">
            '.$nd_options_icon_text_icon.'
            '.$nd_options_icon_text_text.'    
        </div>

    ';


    return $nd_options_str;
}
add_shortcode( 'nd_icon_text', 'nd_options_icon_text' );
