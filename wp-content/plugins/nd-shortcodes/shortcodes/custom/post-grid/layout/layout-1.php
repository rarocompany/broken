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

//metabox
$nd_options_meta_box_page_color = get_post_meta( $nd_options_id, 'nd_options_meta_box_post_color', true );
if ( $nd_options_meta_box_page_color == '' ) { $nd_options_meta_box_page_color = '#000'; }
  
$str .= '


    <div style="background-color: '.$nd_options_meta_box_page_color.';" class=" '.$nd_options_width.' nd_options_float_left nd_options_padding_40 nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive">
	    <h3 class="nd_options_color_white nd_options_margin_0_important nd_options_padding_0"><strong>'.$nd_options_title.'</strong></h3>
	    <div class="nd_options_section nd_options_height_20"></div>
	    <p class="nd_options_color_white nd_options_margin_0_important nd_options_padding_0">'.$nd_options_excerpt.'</p>
	    <div class="nd_options_section nd_options_height_20"></div>
	    <a class="nd_options_display_inline_block nd_options_color_white nd_options_border_1_solid_white nd_options_first_font nd_options_padding_8 nd_options_border_radius_3 nd_options_font_size_13" href="'.$nd_options_permalink.'">'.__('READ MORE','nd-shortcodes').'</a>
	</div>


  ';

endwhile;

$str .= '</div>';