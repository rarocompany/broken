<?php


//START decide link type
if ( $nd_options_link_type == '' ) {

	$nd_options_btn_link = '<div class="nd_options_section"><a target="'.$nd_options_link_target.'" rel="'.$nd_options_link_rel.'" class="nd_options_padding_8_20 nd_options_border_radius_3 nd_options_color_white" style="background-color:'.$nd_options_bg_link.';" href="'.$nd_options_link_url.'">'.$nd_options_link_title.'</a></div>';

}elseif ( $nd_options_link_type == 'nd_options_mpopup_gallery' ) {

	$nd_options_btn_link = '<div class="nd_options_section nd_options_mpopup_gallery"><a class="nd_options_padding_8_20 nd_options_mpopup_gallery nd_options_border_radius_3 nd_options_color_white" style="background-color:'.$nd_options_bg_link.';" href="'.$nd_options_image_src[0].'">'.$nd_options_link_title.'</a></div>';

}else{

	$nd_options_btn_link = '<div class="nd_options_section"><a class="nd_options_padding_8_20 nd_options_mpopup_iframe nd_options_border_radius_3 nd_options_color_white" style="background-color:'.$nd_options_bg_link.';" href="'.$nd_options_link_url.'">'.$nd_options_link_title.'</a></div>';

}
//END decide link type


//set padding
if ( $nd_options_image_src[0] == '' ) {
	$nd_options_set_padding = 'nd_options_padding_0';
}else{
	$nd_options_set_padding = 'nd_options_padding_left_185 nd_options_min_height_165';
}
//set padding


$str .= '


   <div class="nd_options_section nd_options_position_relative '.$nd_options_class.' ">


   		<div style="background-color:'.$nd_options_bg_icon.';" class="nd_options_height_40 nd_options_width_40 nd_options_position_absolute nd_options_border_radius_100_percentage nd_options_left_10_negative nd_options_top_10_negative nd_options_z_index_9">
   			<img style="" alt="" class="nd_options_position_absolute nd_options_top_10 nd_options_left_10 " width="20" src="'.$nd_options_icon_src[0].'">
   		</div>

   		<img alt="" class="nd_options_position_absolute nd_options_width_100_percentage_all_iphone nd_options_position_initial_all_iphone nd_options_top_0 nd_options_left_0 " width="165" src="'.$nd_options_image_src[0].'">

   		
   		<div class="nd_options_section '.$nd_options_set_padding.' nd_options_padding_left_0_all_iphone nd_options_box_sizing_border_box nd_options_margin_top_20_all_iphone">


   			<div class="nd_options_section nd_options_position_relative">
		        <div class="nd_options_position_absolute nd_options_height_3 nd_options_width_100_percentage nd_options_bottom_2 nd_options_border_bottom_2_dotted_grey"></div>
		        <h4 class=" nd_options_bg_white nd_options_float_left nd_options_position_relative nd_options_padding_right_10">'.$nd_options_title.'</h4>
		        <h4 class="nd_options_bg_white nd_options_float_right nd_options_position_relative nd_options_padding_left_10">'.$nd_options_price.'</h4>
		    </div>

		    <div class="nd_options_section nd_options_height_10"></div>

		    <div class="nd_options_section">
		        <p class="nd_options_float_left nd_options_font_size_12 nd_options_padding_5_0">'.$nd_options_subtitle.'</p>
		        <p style="background-color:'.$nd_options_label_color.';" class=" nd_options_display_inline_block nd_options_color_white nd_options_padding_5_10 nd_options_border_radius_3 nd_options_float_right nd_options_font_size_12">'.$nd_options_label_text.'</p>
		    </div>

		    <div class="nd_options_section nd_options_height_13"></div>

		    <div class="nd_options_section">
		    	<p class="">'.$nd_options_description.'</p>
		    </div>

		    <div class="nd_options_section nd_options_height_20"></div>

		   
		    '.$nd_options_btn_link.'
		    


   		</div>
	    
	    
	</div>



   
   ';