<?php


$str .= '

  <div class=" '.$nd_options_class.' nd_options_section nd_options_position_relative nd_options_fadein_fadeout nd_options_overflow_hidden">    

    <img alt="" class="nd_options_section nd_options_zoom_image" src="'.$nd_options_image_src[0].'">

    <!--filter-->
    <div class="nd_options_fadeout nd_options_bg_greydark_alpha_2_2 nd_options_position_absolute nd_options_height_100_percentage nd_options_width_100_percentage">  
    </div>
    <!--end filter-->

    <!--start content-->
    <div class="nd_options_fadein nd_options_bg_greydark_alpha_5 nd_options_position_absolute nd_options_height_100_percentage nd_options_width_100_percentage">
        <div class="nd_options_position_absolute nd_options_display_table nd_options_height_100_percentage nd_options_width_100_percentage">
            <div class="nd_options_display_table_cell nd_options_vertical_align_middle nd_options_text_align_center">
                <h3 style="color:'.$nd_options_title_color.'; font-size:'.$nd_options_title_size.'px; line-height:'.$nd_options_title_size.'px;" class="'.$nd_options_title_font.'">'.$nd_options_title.'</h3>
                <div class="nd_options_section nd_options_height_20"></div>
                '.$nd_options_link_output.'
            </div>   
        </div>   
    </div>
    <!--end content-->

</div>

   ';