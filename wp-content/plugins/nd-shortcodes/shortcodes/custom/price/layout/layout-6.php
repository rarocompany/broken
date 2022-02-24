<?php



if ( $nd_options_image_price_src[0] != '' ) {
  $nd_options_price_style = ' background-image:url('.$nd_options_image_price_src[0].'); background-repeat: repeat; background-position: center; background-size: contain; ';
}else{
  $nd_options_price_style = ' background-color:'.$nd_options_color.'; '; 
}



  
$str .= '



    <!--START PRICE-->
    <div class="nd_options_section '.$nd_options_class.'">
    
        <div class="nd_options_section nd_options_height_90"></div>                     

        <!--start image-->
        <div style="background-color:#f9f9f9;" class="nd_options_border_bottom_width_0 nd_options_border_5_solid_white nd_options_section nd_options_box_sizing_border_box nd_options_border_radius_5_5_0_0 nd_options_text_align_center">

            <img width="180px;" alt="" class="nd_options_rotate nd_options_margin_top_negative_90" src="'.$nd_options_image_src[0].'"> 

            <div class="nd_options_section nd_options_height_20"></div>   

        </div>
        <!--end image-->


        <!--start title-->
        <div style=" '.$nd_options_price_style.' " class="nd_options_section nd_options_text_align_center">
            <h3 class="nd_options_color_white nd_options_line_height_30 nd_options_padding_10_10_5_10"><span class="nd_options_font_size_30">'.$nd_options_price.'</span> - '.$nd_options_title.'</h3>
        </div>
        <!--end title-->


        <!--start description and button-->
        <div style="background-color:#f9f9f9;" class="nd_options_border_top_width_0 nd_options_border_5_solid_white nd_options_section nd_options_box_sizing_border_box nd_options_padding_20 nd_options_border_radius_0_0_5_5 nd_options_text_align_center">

            <div class="nd_options_section">
                '.do_shortcode($nd_options_description).' 
            </div>

            <div class="nd_options_section nd_options_height_15"></div>

            <div class="nd_options_section">
                <a rel="'.$nd_options_link_rel.'" '.$nd_options_link_target_output.' style="background-color:'.$nd_options_color.';" class="nd_options_display_inline_block nd_options_text_align_center nd_options_box_sizing_border_box nd_options_first_font nd_options_color_white nd_options_padding_10_20 nd_options_font_size_17 nd_options_border_radius_3 " href="'.$nd_options_link_url.'">'.$nd_options_link_title.'</a>      
            </div>

            <div class="nd_options_section nd_options_height_15"></div>

        </div>
        <!--end description and button-->



    </div>
    <!--END PRICE-->

   ';