<?php

//shortcode nd_alert
function nd_options_alert( $nd_options_atts, $nd_options_content = null ) {
    
    $nd_options_alert = shortcode_atts( 
    	array(
	        'image' => '',
            'class' => '',
            'float' => '',
            'id' => '',
            'margin' => '',
            'dropdown-bg-color' => '',
            'number-bg-color' => '',
            'number' => '',
    	), 
    $nd_options_atts );

    //image
    if ( $nd_options_alert['image'] == '' ) { 
        $nd_options_alert['image'] = esc_url(plugins_url('img/icon-message.svg', __FILE__ )); 
    }else{ 
        $nd_options_alert['image'] = $nd_options_alert['image']; 
    }

    //float
    if ( $nd_options_alert['float'] == '' ) { $nd_options_alert_float = 'left'; }

    //dropdown color
    if ( $nd_options_alert['dropdown-bg-color'] == '' ) { 
        $nd_options_alert_dropdown_bg_color = '#fff'; 
    }else{
        $nd_options_alert_dropdown_bg_color = $nd_options_alert['dropdown-bg-color']; 
    }
    
    $nd_options_str = '';
    $nd_options_str .= '

        <div style="margin:'.$nd_options_alert['margin'].';" id="'.$nd_options_alert['id'].'" class=" '.$nd_options_alert['class'].' nd_options_position_relative nd_options_float_'.$nd_options_alert['float'].' ">
            
            <div id="'.$nd_options_alert['id'].'_icon" class="nd_options_position_relative">
                <p class="nd_options_position_absolute nd_options_color_white nd_options_font_size_10" style="line-height: 10px; padding: 2px 3px; left: 13px; top: -7px; background-color:'.$nd_options_alert['number-bg-color'].'; ">'.$nd_options_alert['number'].'</p>
                <img alt="" class="nd_options_float_left" width="20" src="'.$nd_options_alert['image'].'">
            </div>

            <div id="'.$nd_options_alert['id'].'_messages" class="nd_options_display_none">

                <div class="triangle-up"></div>

                <div style="background-color:'.$nd_options_alert_dropdown_bg_color.';" class="nd_options_box_sizing_border_box nd_options_padding_10 nd_options_section nd_options_text_align_left">
                    
                    '.do_shortcode($nd_options_content).'

                </div>
            </div>

        </div>

        <style>
            #'.$nd_options_alert['id'].':hover #'.$nd_options_alert['id'].'_messages { display: block; }  
            #'.$nd_options_alert['id'].'_messages { 
                width: 250px;
                position: absolute;
                left: -115px;
                top: 0px;
                padding-top:35px;
                z-index: 9;
            }

            .triangle-up {
                width: 100%;
                overflow: hidden;
                box-sizing: border-box;
                text-align: center;
                line-height: 10px;
            }
            .triangle-up:after {
                content: "";
                display: inline-block;
                width: 0px;
                height: 0px;
                border-left: 10px solid transparent;
                border-right: 10px solid transparent;
                border-bottom: 10px solid '.$nd_options_alert_dropdown_bg_color.';
                line-height: 10px;
            }

        </style>

    ';
    

    


    return $nd_options_str;
}
add_shortcode( 'nd_alert', 'nd_options_alert' );





//shortcode nd_alert_message
function nd_options_alert_message( $nd_options_atts ) {
    
    $nd_options_alert_message = shortcode_atts( 
        array(
            'image' => '',
            'class' => '',
            'title' => '',
            'title-color' => '',
            'description' => '',
            'description-color' => '',
            'href' => '',
        ), 
    $nd_options_atts );

    //image
    if ( $nd_options_alert_message['image'] == '' ) { 
        $nd_options_alert_message_image = '' ; 
        $nd_options_alert_message_image_padding = '';
    }else{
        $nd_options_alert_message_image = '<img alt="" class="nd_options_position_absolute" width="50" src="'.$nd_options_alert_message['image'].'">';
        $nd_options_alert_message_image_padding = 'nd_options_padding_left_70';
    }

    //title
    if ( $nd_options_alert_message['title'] == '' ) {
        $nd_options_alert_message_title = '';
    }else{

        $nd_options_alert_message_title = '<div class="nd_options_section nd_options_height_10"></div>';

        if ( $nd_options_alert_message['title-color'] == '' ) {
            $nd_options_alert_message_title .= '<a href="'.$nd_options_alert_message['href'].'"><h6>'.$nd_options_alert_message['title'].'</h6></a>';
        }else{
            $nd_options_alert_message_title .= '<a href="'.$nd_options_alert_message['href'].'"><h6 style="color:'.$nd_options_alert_message['title-color'].';">'.$nd_options_alert_message['title'].'</h6></a>'; 
        }

    }


    //description
    if ( $nd_options_alert_message['description'] == '' ) {
        $nd_options_alert_message_description = '';
    }else{


        $nd_options_alert_message_description = '<div class="nd_options_section nd_options_height_10"></div>';

        if ( $nd_options_alert_message['description-color'] == '' ) {
            $nd_options_alert_message_description .= '<a href="'.$nd_options_alert_message['href'].'"><p class="nd_options_font_size_10">'.$nd_options_alert_message['description'].'</p></a>';
        }else{
            $nd_options_alert_message_description .= '<a href="'.$nd_options_alert_message['href'].'"><p class="nd_options_font_size_10" style="color:'.$nd_options_alert_message['description-color'].';">'.$nd_options_alert_message['description'].'</p></a>'; 
        }

    }
    

    //result
    $nd_options_str = '';
    $nd_options_str .= '

        <div class=" '.$nd_options_alert_message['class'].' nd_options_section nd_options_position_relative nd_options_box_sizing_border_box nd_options_padding_10 nd_options_min_height_70">
            '.$nd_options_alert_message_image.'
            <div class="nd_options_section '.$nd_options_alert_message_image_padding.' nd_options_box_sizing_border_box">
                '.$nd_options_alert_message_title.'
                '.$nd_options_alert_message_description.'    
            </div>
        </div>

    ';
    

    


    return $nd_options_str;
}
add_shortcode( 'nd_alert_message', 'nd_options_alert_message' );


