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


$str .= '<div class="nd_options_section nd_options_masonry_content '.$nd_options_class.' ">';

while ( $the_query->have_posts() ) : $the_query->the_post();

//info
$nd_options_id = get_the_ID(); 
$nd_options_title = get_the_title();
$nd_options_excerpt = get_the_excerpt();
$nd_options_permalink = get_permalink( $nd_options_id );

//image
$nd_options_image_id = get_post_thumbnail_id( $nd_options_id );
$nd_options_image_attributes = wp_get_attachment_image_src( $nd_options_image_id, 'thumbnail' );
if ( $nd_options_image_attributes[0] == '' ) { $nd_options_output_image = ''; }else{
  $nd_options_output_image = $nd_options_image_attributes[0];
}

//metabox
$nd_options_meta_box_eventscalendar_color = get_post_meta( $nd_options_id, 'nd_options_meta_box_eventscalendar_color', true );
if ( $nd_options_meta_box_eventscalendar_color == '' ) { $nd_options_meta_box_eventscalendar_color = ''; }

  
$str .= '


	<div class="'.$nd_options_width.' nd_options_padding_15 nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive">
		<div class="nd_options_section nd_options_position_relative">
		    <div class="nd_options_position_absolute">
		        <div class="nd_options_background_size_cover" style="background-image:url('.$nd_options_output_image.')">
		            <div style="background-color:'.$nd_options_meta_box_eventscalendar_color.'; opacity:0.85;" class="nd_options_width_80 nd_options_height_80 nd_options_text_align_center">
		                <div class="nd_options_section nd_options_height_20"></div>
		                <a href="'.$nd_options_permalink.'"><h1 class="nd_options_color_white"><strong>'.tribe_get_start_date($nd_options_id,false,'d').'</strong></h1></a>
		                <a href="'.$nd_options_permalink.'"><h5 class="nd_options_color_white nd_options_letter_spacing_2 nd_options_text_transform_uppercase">'.tribe_get_start_date($nd_options_id,false,'M').'</h5></a>
		            </div>
		        </div>
		    </div>
		    <div class="nd_options_section nd_options_padding_left_100 nd_options_box_sizing_border_box">
		        <a href="'.$nd_options_permalink.'"><h3 class="nd_options_color_white nd_options_display_inline_block nd_options_position_relative">'.$nd_options_title.' <span style="top: 0px;right: -80px; border: 1px solid #fff; padding: 4px 8px; font-size: 10px; line-height:10px;" class="nd_options_position_absolute nd_options_display_none_all_iphone">'.tribe_get_start_date($nd_options_id,true,'g:i A').'</span> </h3></a>
		        <div class="nd_options_section nd_options_height_10"></div>
		        <a href="'.$nd_options_permalink.'"><p class="nd_options_color_white">'.$nd_options_excerpt.'</p></a>
		        <div class="nd_options_section nd_options_height_10"></div>
		        <a class="nd_options_display_inline_block nd_options_color_white nd_options_first_font nd_options_font_size_13" href="'.$nd_options_permalink.'"><strong>'.__('READ MORE','nd-shortcodes').'</strong></a>

		    </div>
		</div>
	</div>





  ';

endwhile;

$str .= '</div>';