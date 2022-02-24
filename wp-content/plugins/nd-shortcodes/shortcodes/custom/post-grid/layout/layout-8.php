<?php


wp_enqueue_script('masonry');


$str .= '


	<script type="text/javascript">
    //<![CDATA[
    
    jQuery(document).ready(function() {

      //START masonry
      jQuery(function ($) {
        
        //Masonry
		var $nd_options_masonry_content = $(".nd_options_masonry_content").imagesLoaded( function() {
		  // init Masonry after all images have loaded
		  $nd_options_masonry_content.masonry({
		    itemSelector: ".nd_options_masonry_item"
		  });
		});


      });
      //END masonry

    });

    //]]>
  </script>


';


$str .= '<!--START MASONRY--><div class="nd_options_section nd_options_masonry_content '.$nd_options_class.' ">';

$nd_options_index = 0;

while ( $the_query->have_posts() ) : $the_query->the_post();

	//basic info
	$nd_options_id = get_the_ID(); 
	$nd_options_title = get_the_title();
	$nd_options_excerpt = get_the_excerpt();
	$nd_options_permalink = get_permalink( $nd_options_id );

	//metabox color
	$nd_options_meta_box_page_color = get_post_meta( $nd_options_id, 'nd_options_meta_box_post_color', true );
	if ( $nd_options_meta_box_page_color == '' ) { $nd_options_meta_box_page_color = '#000'; }

	//image for standard post
	$nd_options_image_id = get_post_thumbnail_id( $nd_options_id );
	$nd_options_image_attributes = wp_get_attachment_image_src( $nd_options_image_id, 'large' );
	if ( $nd_options_image_attributes[0] == '' ) { $nd_options_output_image = ''; }else{

	  if ( $nd_options_index & 1 ) { $nd_options_top_class = 'nd_options_top_22_negative'; } else { $nd_options_top_class = 'nd_options_bottom_22_negative'; } 

	  $nd_options_output_image = '

	
		<div class="nd_options_section nd_options_position_relative">
			<img alt="" class="nd_options_section" src="'.$nd_options_image_attributes[0].'">
			<div class="nd_options_bg_greydark_alpha nd_options_position_absolute nd_options_left_0 nd_options_height_100_percentage nd_options_width_100_percentage nd_options_padding_30 nd_options_box_sizing_border_box"></div>


			<div class="nd_options_position_absolute nd_options_bottom_20 nd_options_left_30">
			    <div class="nd_options_display_table nd_options_float_left">
			        <img alt="" class="nd_options_display_none_all_iphone nd_options_margin_right_10 nd_options_display_table_cell nd_options_vertical_align_middle" width="20" src="'.esc_url(plugins_url('icons/icon-user-white.svg', __FILE__ )).'">
			        <p class=" nd_options_color_white nd_options_display_table_cell nd_options_vertical_align_middle nd_options_font_size_13">'.__('By','nd-shortcodes').' '.get_the_author().'</p>
			    </div>
			    <div class="nd_options_display_table nd_options_float_left nd_options_margin_left_20">
			        <img alt="" class="nd_options_display_none_all_iphone nd_options_margin_right_10 nd_options_display_table_cell nd_options_vertical_align_middle" width="20" src="'.esc_url(plugins_url('icons/icon-comment-3-white.svg', __FILE__ )).'">
			        <p class=" nd_options_color_white nd_options_display_table_cell nd_options_vertical_align_middle nd_options_font_size_13">'.get_comments_number().' '.__('Comments','nd-shortcodes').'</p>
			    </div>
			</div>

			<div style="background-color:'.$nd_options_meta_box_page_color.';" class="nd_options_position_absolute nd_options_right_20 '.$nd_options_top_class.' nd_options_display_inline_block nd_options_border_radius_100_percentage nd_options_padding_10 nd_options_text_align_center nd_options_width_25 nd_options_height_25">
			    <img alt="" class="" width="20" src="'.esc_url(plugins_url('icons/icon-picture-white.svg', __FILE__ )).'">
			</div>
		
		</div>';

	}


	$str .= '

	<div class=" nd_options_postgrid_posts_layout_8 '.$nd_options_width.' nd_options_postgrid_posts_layout_8_'.$nd_options_id.'  nd_options_padding_15 nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive">
		<div class="nd_options_section nd_options_border_1_solid_grey">';
		    
			if ( $nd_options_index & 1 ) { } else { $str .= $nd_options_output_image; } 

			$str .= '
		    <div class="nd_options_section nd_options_padding_40 nd_options_box_sizing_border_box">
		        <h3 class="nd_options_postgrid_posts_title"><a class="nd_options_first_font nd_options_color_greydark" href="'.$nd_options_permalink.'">'.$nd_options_title.'</a></h3>
		        <div class="nd_options_section nd_options_height_10"></div>
		        <p class="nd_options_postgrid_posts_description"><a href="'.$nd_options_permalink.'">'.$nd_options_excerpt.'</a></p>
		        <div class="nd_options_section nd_options_height_10"></div>
		        <a style="color:'.$nd_options_meta_box_page_color.';" class="nd_options_postgrid_posts_button nd_options_display_inline_block nd_options_first_font nd_options_font_size_13" href="'.$nd_options_permalink.'"><strong>'.__('READ MORE','nd-shortcodes').'</strong></a>
		    </div>';

		    if ( $nd_options_index & 1 ) { $str .= $nd_options_output_image; } else { } 

		$str .= '    
		</div>
	</div>







  ';
	
$nd_options_index = $nd_options_index + 1;

endwhile;


$str .= '</div><!--CLOSE MASONRY-->';
