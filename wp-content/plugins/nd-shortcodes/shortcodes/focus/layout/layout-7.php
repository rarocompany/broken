<?php


$str .= '
<!--START FOCUS-->
<div class="nd_options_section '.$nd_options_class.' ">';


  if ( $nd_options_image_src[0] != '' ) {
  
  $str .= '
  <div class="nd_options_section nd_options_position_relative">
                      
      <img alt="" class="nd_options_section" src="'.$nd_options_image_src[0].'">

      <div class="nd_options_bg_greydark_alpha_gradient_cc_1 nd_options_position_absolute nd_options_left_0 nd_options_height_100_percentage nd_options_width_100_percentage nd_options_padding_30 nd_options_box_sizing_border_box">
          
          <h5 class="nd_options_color_white nd_options_letter_spacing_2">'.$nd_options_subtitle.'</h5>
          <div class="nd_options_section nd_options_height_20"></div>
          <h2 class="nd_options_color_white">'.$nd_options_title.'</h2>
          <div class="nd_options_section nd_options_height_30"></div>
          <p class="nd_options_color_white nd_options_display_none_all_iphone">'.$nd_options_descr.'</p>

      </div>

  </div>';

  }
  

  if ( $nd_options_link_url != '' ) {

  $str .= '
  <a style="background-color:'.$nd_options_bg_color.'" rel="'.$nd_options_link_rel.'" title="'.$nd_options_link_title.'" target="'.$nd_options_link_target.'" class="nd_options_color_white nd_options_box_sizing_border_box nd_options_padding_20_30 nd_options_section" href="'.$nd_options_link_url.'">
    
    <img alt="" class="nd_options_float_left nd_options_width_20 nd_options_margin_right_20" src="'.$nd_options_icon_src[0].'">

    <h4 class="nd_options_margin_0_important nd_options_line_height_20 nd_options_color_white nd_options_color_white nd_options_second_font nd_options_letter_spacing_3 nd_options_font_weight_lighter">
      '.$nd_options_title.'
    </h4>
  </a>';

  }


$str .= '
</div>
 <!--END FOCUS-->';
  