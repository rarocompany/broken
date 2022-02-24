<?php

$nd_options_all_social = '';

if ( $nd_options_social_img_1[0] != '' ) {$nd_options_all_social .= '<a rel="'.$nd_options_social_link_1_rel.'" title="'.$nd_options_social_link_1_title.'" target="'.$nd_options_social_link_1_target.'" class="nd_options_margin_5" href="'.$nd_options_social_link_1_url.'"><img alt="" width="45" src="'.$nd_options_social_img_1[0].'"></a>';}
if ( $nd_options_social_img_2[0] != '' ) {$nd_options_all_social .= '<a rel="'.$nd_options_social_link_2_rel.'" title="'.$nd_options_social_link_2_title.'" target="'.$nd_options_social_link_2_target.'" class="nd_options_margin_5" href="'.$nd_options_social_link_2_url.'"><img alt="" width="45" src="'.$nd_options_social_img_2[0].'"></a>';}
if ( $nd_options_social_img_3[0] != '' ) {$nd_options_all_social .= '<a rel="'.$nd_options_social_link_3_rel.'" title="'.$nd_options_social_link_3_title.'" target="'.$nd_options_social_link_3_target.'" class="nd_options_margin_5" href="'.$nd_options_social_link_3_url.'"><img alt="" width="45" src="'.$nd_options_social_img_3[0].'"></a>';}
if ( $nd_options_social_img_4[0] != '' ) {$nd_options_all_social .= '<a rel="'.$nd_options_social_link_4_rel.'" title="'.$nd_options_social_link_4_title.'" target="'.$nd_options_social_link_4_target.'" class="nd_options_margin_5" href="'.$nd_options_social_link_4_url.'"><img alt="" width="45" src="'.$nd_options_social_img_4[0].'"></a>';}
  
$str .= '


  <div class="nd_options_section '.$nd_options_class.'">
    
        <div class="nd_options_section nd_options_height_120"></div>                     

        <!--start image-->
        <div class="nd_options_bg_white nd_options_border_bottom_width_0 nd_options_border_4_solid_grey nd_options_section nd_options_box_sizing_border_box nd_options_border_radius_5_5_0_0 nd_options_text_align_center">

            <img width="230px;" alt="" class="nd_options_rotate nd_options_margin_top_negative_120" src="'.$nd_options_image_src[0].'">  

        </div>
        <!--end image-->

        <!--start description and button-->
        <div class="nd_options_bg_white nd_options_border_top_width_0 nd_options_border_4_solid_grey nd_options_section nd_options_box_sizing_border_box nd_options_padding_0_20 nd_options_border_radius_0_0_5_5 nd_options_text_align_center">

            <div class="nd_options_section">
                <div class="nd_options_section nd_options_height_10"></div>
                <h3 class="">'.$nd_options_title.'</h3>
                <div class="nd_options_section nd_options_height_5"></div>
                <p>'.$nd_options_description.'</p>
                <div class="nd_options_section nd_options_height_40"></div>
            </div>

        </div>
        <!--end description and button-->

        <div class="nd_options_section nd_options_height_5"></div>

         <!--start description and button-->
        <div class=" nd_options_bg_white nd_options_border_4_solid_grey nd_options_section nd_options_box_sizing_border_box nd_options_border_radius_5 nd_options_text_align_center">

            <div style="margin-top: -32px; margin-bottom: 10px;" class="nd_options_section nd_options_text_align_center">'.$nd_options_all_social.'</div>

        </div>
        <!--end description and button-->



    </div>


   ';