<?php

  
$str .= '

    <!--START PRICE-->
    <div style="background-color:'.$nd_options_color.';" class="nd_options_section nd_options_box_sizing_border_box nd_options_text_align_center nd_options_border_1_solid_grey '.$nd_options_class.' ">
                
                
        <div class="nd_options_section nd_options_padding_20 nd_options_box_sizing_border_box">
            <h4 class="nd_options_color_white">'.$nd_options_title.'</h4>
        </div>


        <div style="background-image:url('.$nd_options_image_src[0].')" class="nd_options_section nd_options_background_size_cover">
            <div class="nd_options_section nd_options_bg_greydark_alpha_5">

                <div class="nd_options_section nd_options_height_40"></div>
                
                <h1 class="nd_options_color_white nd_options_second_font">'.$nd_options_price.'</h1>
                <div class="nd_options_section nd_options_height_20"></div>
                <div class="nd_options_section nd_options_line_height_0"><span class="nd_options_height_2 nd_options_width_30 nd_options_display_inline_block nd_options_bg_white"></span></div>
                <div class="nd_options_section nd_options_height_20"></div>
                <h4 class="nd_options_color_white nd_options_second_font">'.$nd_options_sub_title.'</h4>

                <div class="nd_options_section nd_options_height_40"></div>

            </div>
        </div>

        <div class="nd_options_section">
            <div class="nd_options_section nd_options_bg_white nd_options_box_sizing_border_box nd_options_padding_20">
                '.do_shortcode($nd_options_description).'
            </div>
            <a rel="'.$nd_options_link_rel.'" '.$nd_options_link_target_output.' style="background-color:'.$nd_options_color.';" class="nd_options_font_size_19 nd_options_display_inline_block nd_options_text_align_center nd_options_box_sizing_border_box nd_options_first_font nd_options_width_100_percentage nd_options_color_white nd_options_padding_20" href="'.$nd_options_link_url.'">'.$nd_options_link_title.'</a> 
        </div>

    
    </div>
    <!--END PRICE-->

   ';