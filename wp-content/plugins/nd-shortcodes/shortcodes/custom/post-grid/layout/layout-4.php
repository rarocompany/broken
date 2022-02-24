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
$nd_options_image_attributes = wp_get_attachment_image_src( $nd_options_image_id, 'large' );
if ( $nd_options_image_attributes[0] == '' ) { $nd_options_output_image = ''; }else{
  $nd_options_output_image = '<img class="nd_options_section" alt="" src="'.$nd_options_image_attributes[0].'">';
}

//metabox
$nd_options_meta_box_page_color = get_post_meta( $nd_options_id, 'nd_options_meta_box_post_color', true );
if ( $nd_options_meta_box_page_color == '' ) { $nd_options_meta_box_page_color = '#000'; }
  
$str .= '

	<div class=" '.$nd_options_width.' nd_options_padding_15 nd_options_postgrid_posts_layout_4 nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive">
	    
	    <div class="nd_options_section nd_options_padding_40 nd_options_box_sizing_border_box nd_options_background_size_cover" style="background-image:url('.$nd_options_image_attributes[0].');">
            <div class="nd_options_section nd_options_bg_white_alpha_97 nd_options_padding_40 nd_options_box_sizing_border_box nd_options_text_align_center">
                <h3 class="nd_options_color_grey">'.$nd_options_title.'</h3>
                <div class="nd_options_section nd_options_height_20"></div>
                <h5 class="nd_options_color_grey">'.get_the_time('F').' '.get_the_time('j').', '.get_the_time('Y').'</h5>
                <div class="nd_options_section nd_options_height_20"></div>
                <div class="nd_options_section nd_options_line_height_0"><span class="nd_options_height_2 nd_options_width_30 nd_options_display_inline_block nd_options_bg_grey_3"></span></div>
                <p class="nd_options_display_none nd_options_postgrid_posts_layout_4_divider">x</p>
                <div class="nd_options_section nd_options_height_20"></div>
                <p>'.$nd_options_excerpt.'</p>
                <div class="nd_options_section nd_options_height_20"></div>
                <a class="nd_options_display_inline_block nd_options_border_1_solid_grey nd_options_text_align_center nd_options_line_height_16 nd_options_box_sizing_border_box  nd_options_color_grey nd_options_first_font nd_options_padding_10_20" href="'.$nd_options_permalink.'">'.__('READ MORE','nd-shortcodes').'</a>
            </div>
        </div>

	</div>

  ';

endwhile;

$str .= '</div>';