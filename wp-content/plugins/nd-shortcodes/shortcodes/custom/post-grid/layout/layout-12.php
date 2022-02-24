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

while ( $the_query->have_posts() ) : $the_query->the_post();

	//basic info
	$nd_options_id = get_the_ID(); 
	$nd_options_title = get_the_title();
	$nd_options_excerpt = get_the_excerpt();
	$nd_options_permalink = get_permalink( $nd_options_id );


	//metabox color
	$nd_options_meta_box_page_color = get_post_meta( $nd_options_id, 'nd_options_meta_box_post_color', true );
	if ( $nd_options_meta_box_page_color == '' ) { $nd_options_meta_box_page_color = '#000'; }


	$str .= '
    <div class=" '.$nd_options_width.' nd_options_padding_15 nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive">
	    <div class="nd_options_section ">

	        <div class="nd_options_section nd_options_padding_30 nd_options_box_sizing_border_box nd_options_border_1_solid_grey">
	            
	            <p class="nd_options_color_grey nd_options_font_weight_normal nd_options_letter_spacing_2 nd_options_text_transform_uppercase">'.get_the_date().'</p>
	            <div class="nd_options_section nd_options_height_10"></div>
	            <a href="'.$nd_options_permalink.'"><h2 class=" nd_options_margin_0_important nd_options_padding_0 nd_options_letter_spacing_0">'.$nd_options_title.'</h2></a>
	            <div class="nd_options_section nd_options_height_20"></div>
	            <p class="nd_options_margin_0_important nd_options_padding_0 ">'.$nd_options_excerpt.'</p>
	            <div class="nd_options_section nd_options_height_20"></div>
	            
	            <a style="background-color:'.$nd_options_meta_box_page_color.'" class="nd_options_display_inline_block nd_options_text_align_center nd_options_box_sizing_border_box  nd_options_color_white nd_options_first_font nd_options_padding_5_20 nd_options_border_radius_30 " href="'.$nd_options_permalink.'">'.__('READ MORE','nd-shortcodes').'</a>

	        </div>

	    </div>
	</div>

  ';



endwhile;


$str .= '</div><!--CLOSE MASONRY-->';
