<?php

if ( $nd_options_image_src[0] != '' ) {
  $nd_options_bar_style = ' background-image:url('.$nd_options_image_src[0].'); background-repeat: repeat; background-position: center; background-size: contain; ';
}else{
  $nd_options_bar_style = ' background-color:'.$nd_options_color.'; '; 
}
  
$str .= '


  <!--START team-->
  <div class="nd_options_section nd_options_component_progress '.$nd_options_class.'">
                                        
    <div style="background-color:'.$nd_options_color_2.';" class=" nd_options_progress_bg nd_options_section nd_options_padding_5 nd_options_border_radius_5 nd_options_box_sizing_border_box">
      
      <div style="width:'.$nd_options_progress.'%;  '.$nd_options_bar_style.' " class=" nd_options_progress_bar nd_options_height_25 nd_options_float_left nd_options_border_radius_5"></div>

    </div>

  </div>
  <!--END team-->


   ';