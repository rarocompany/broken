<?php

if ( $nd_options_type == 'nd_options_mpopup_gallery' ){
    
    $nd_options_link_output_layout_2 = '

        <div class="'.$nd_options_type.'">
            <a class=" nd_options_outline_0 '.$nd_options_type.'" href="'.$nd_options_image_src[0].'">
                <img width="'.$nd_options_image_width.'" alt="" class="nd_options_transition_all_08_ease nd_options_opacity_05_hover" src="'.$nd_options_image_src[0].'">
            </a>
        </div>

    ';

}else{

    $nd_options_link_output_layout_2 = '
    
        <a class=" nd_options_outline_0 '.$nd_options_type.'" href="'.$nd_options_link_url.'">
            <img width="'.$nd_options_image_width.'" alt="" class="nd_options_transition_all_08_ease nd_options_opacity_05_hover" src="'.$nd_options_image_src[0].'">
        </a>

    ';  

}


$str .= '

    <div class=" '.$nd_options_class.' nd_options_section">
        '.$nd_options_link_output_layout_2.'    
    </div>   

';