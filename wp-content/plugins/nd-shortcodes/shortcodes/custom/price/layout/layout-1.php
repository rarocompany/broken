<?php

  
$str .= '


  <!--START PRICE-->
  <div class="nd_options_section '.$nd_options_class.'">
                                        
    
    <!--START image--> 
    <div class="nd_options_section nd_options_box_sizing_border_box">

        <div class="nd_options_section nd_options_position_relative">
                
            <img alt="" class="nd_options_section" src="'.$nd_options_image_src[0].'">

            <div class="nd_options_bg_greydark_alpha_gradient_3_2 nd_options_position_absolute nd_options_left_0 nd_options_height_100_percentage nd_options_width_100_percentage nd_options_box_sizing_border_box">
                
                <div class="nd_options_position_absolute nd_options_bottom_30 nd_options_width_100_percentage nd_options_padding_botttom_0 nd_options_padding_50 nd_options_box_sizing_border_box nd_options_text_align_center">
                    <h3 class="nd_options_color_white nd_options_margin_0_important"><strong>'.$nd_options_title.'</strong></h3>
                    <div class="nd_options_section nd_options_height_10"></div>
                    <div class="nd_options_section nd_options_height_10 nd_options_display_none_all_iphone"></div>
                    <h1 class="nd_options_color_white nd_options_margin_0_important nd_options_font_size_60 nd_options_font_size_40_all_iphone nd_options_line_height_40_all_iphone"><strong>'.$nd_options_price.'</strong></h1>
                </div>

            </div>

        </div>
          
    </div>
    <!--END image-->


    <!--START content--> 
    <div class="nd_options_section nd_options_border_1_solid_grey">
        <div class="nd_options_section nd_options_padding_20 nd_options_text_align_center nd_options_box_sizing_border_box">
            
            '.do_shortcode($nd_options_description).'

            <div class="nd_options_section nd_options_height_20"></div>

            <div class="nd_options_width_100_percentage  nd_options_box_sizing_border_box nd_options_float_left">
                <a rel="'.$nd_options_link_rel.'" '.$nd_options_link_target_output.' style="background-color:'.$nd_options_color.';" class="nd_options_display_inline_block nd_options_text_align_center nd_options_box_sizing_border_box nd_options_first_font nd_options_width_100_percentage nd_options_color_white nd_options_padding_10_20 nd_options_border_radius_3 " href="'.$nd_options_link_url.'">'.$nd_options_link_title.'</a>   
            </div>

        </div>
        
    </div>
    <!--END content--> 



  </div>
  <!--END PRICE-->


   ';