<?php


if ( $nd_options_bg_color == 'yes' ) {
    $nd_options_text_class = 'nd_options_color_white';
    $nd_options_bg_class = '';
    $nd_options_bg_style = 'background-color:'.$nd_options_color.';';
    $nd_options_subtitle_class = 'nd_options_background_none';
}else{
    $nd_options_text_class = '';
    $nd_options_bg_class = 'nd_options_border_1_solid_grey';
    $nd_options_bg_style = '';
    $nd_options_subtitle_class = '';
}

  
$str .= '

    <!--START PRICE-->
    <div style="'.$nd_options_bg_style.'" class="nd_options_section nd_options_box_sizing_border_box '.$nd_options_bg_class.' nd_options_padding_30 '.$nd_options_class.' ">
                
        
        <div class="nd_options_section nd_options_height_20"></div>
        <div class="nd_options_section nd_options_position_relative">
            
            <h1 class="nd_options_font_size_60 nd_options_font_weight_normal nd_options_display_inline_block nd_options_float_left '.$nd_options_text_class.' ">
                '.$nd_options_price.' 
            </h1>

            <h1 class="nd_options_font_size_30 nd_options_float_left nd_options_margin_left_10 nd_options_font_weight_normal '.$nd_options_text_class.' ">'.$nd_options_currency.'</h1>


            <span class="nd_options_bg_greydark_3 nd_options_position_absolute nd_options_top_15 nd_options_right_0 nd_options_color_white nd_options_font_size_11 nd_options_letter_spacing_2 nd_options_padding_5_10 nd_options_border_radius_30 nd_options_border_1_solid_white '.$nd_options_subtitle_class.' ">'.$nd_options_sub_title.'</span>

        </div>
        <div class="nd_options_section nd_options_height_40"></div>

        <div class="nd_options_section">
            <h2 class="'.$nd_options_text_class.'">'.$nd_options_title.'</h2>
            <div class="nd_options_section nd_options_height_20"></div>
            <div class="nd_options_section nd_options_height_1 nd_options_border_bottom_1_solid_grey"></div>
            <div class="nd_options_section nd_options_height_20"></div>
        </div>

        <div class="nd_options_section">
            '.do_shortcode($nd_options_description).'
        </div>

        <div class="nd_options_section nd_options_height_30"></div>

        <div class="nd_options_section">
            <a rel="'.$nd_options_link_rel.'" '.$nd_options_link_target_output.' style="background-color:'.$nd_options_color.';" class=" nd_options_border_1_solid_white nd_options_display_inline_block nd_options_box_sizing_border_box nd_options_first_font nd_options_color_white nd_options_padding_5_20 nd_options_border_radius_30" href="'.$nd_options_link_url.'">'.$nd_options_link_title.'</a> 
        </div>

        <div class="nd_options_section nd_options_height_20"></div>

    
    </div>
    <!--END PRICE-->


   ';