<?php

//START HEADER DECISION
$nd_options_price_layout_4_header_result = '';

if ( $nd_options_color_header_bg == 'yes' ) {

    $nd_options_price_layout_4_header_result = '
    <div style="background-color:'.$nd_options_color.';" class=" nd_options_price_component_l4_top nd_options_border_radius_25_25_0_0 nd_options_section nd_options_box_sizing_border_box nd_options_padding_40">

        <h5 class="nd_options_text_transform_uppercase nd_options_second_font nd_options_letter_spacing_3 nd_options_color_white"><strong>'.$nd_options_title.'</strong></h5>
        <div class="nd_options_section nd_options_height_10"></div>
        <h1 class="nd_options_font_size_40 nd_options_color_white">'.$nd_options_price.'</h1>
        <div class="nd_options_section nd_options_height_20"></div>
        <h4 class="nd_options_color_white nd_options_font_size_12 nd_options_text_transform_uppercase nd_options_letter_spacing_3 nd_options_second_font nd_options_font_weight_lighter">'.$nd_options_sub_title.'</h4>

    </div>';

}else{

    $nd_options_price_layout_4_header_result = '
    <div class="nd_options_price_component_l4_top nd_options_price_component_l4_top_light nd_options_section nd_options_box_sizing_border_box nd_options_padding_40">

        <h5 style="color:'.$nd_options_color.';" class="nd_options_text_transform_uppercase nd_options_second_font nd_options_letter_spacing_3"><strong>'.$nd_options_title.'</strong></h5>
        <div class="nd_options_section nd_options_height_10"></div>
        <h1 class="nd_options_font_size_40">'.$nd_options_price.'</h1>
        <div class="nd_options_section nd_options_height_20"></div>
        <h4 class="nd_options_color_grey nd_options_font_size_12 nd_options_text_transform_uppercase nd_options_letter_spacing_3 nd_options_second_font nd_options_font_weight_lighter">'.$nd_options_sub_title.'</h4>

    </div>';

}
//END HEADER DECISION

  

$str .= '

    <!--START PRICE-->
    <div class=" nd_options_price_component_l4 nd_options_section nd_options_bg_white nd_options_border_radius_25 '.$nd_options_class.' ">
                            
        '.$nd_options_price_layout_4_header_result.'

        <div class="nd_options_section nd_options_price_component_l4_middle nd_options_bg_white nd_options_box_sizing_border_box nd_options_padding_0_40">
            '.do_shortcode($nd_options_description).'
        </div>

        <div class="nd_options_section nd_options_price_component_l4_bottom nd_options_box_sizing_border_box nd_options_padding_40">

            <a rel="'.$nd_options_link_rel.'" '.$nd_options_link_target_output.' style="background-color:'.$nd_options_color.';" class="nd_options_display_inline_block nd_options_color_white nd_options_first_font nd_options_padding_8_12 nd_options_border_radius_20 nd_options_font_size_13" href="'.$nd_options_link_url.'">'.$nd_options_link_title.'</a>

        </div>

    </div>
    <!--END PRICE-->

   ';