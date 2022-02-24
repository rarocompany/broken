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
$nd_options_meta_box_woocommerce_color = get_post_meta( $nd_options_id, 'nd_options_meta_box_woocommerce_color', true );
if ( $nd_options_meta_box_woocommerce_color == '' ) { $nd_options_meta_box_woocommerce_color = '#000'; }

//customizer
$nd_options_customizer_woocommerce_color_greydark = get_option( 'nd_options_customizer_woocommerce_color_greydark', '#444444' );

//woo info
$nd_options_regular_price = get_post_meta( $nd_options_id, '_regular_price', true);
$nd_options_sale_price = get_post_meta( $nd_options_id, '_sale_price', true);

  
$str .= '


	<div class="'.$nd_options_width.' nd_options_padding_15 nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive">
		<div class="nd_options_section nd_options_border_1_solid_grey">
			
			'.$nd_options_output_image.'

			<div style="background-color:'.$nd_options_customizer_woocommerce_color_greydark.';" class="nd_options_section nd_options_padding_20 nd_options_box_sizing_border_box">
				<h4 class="nd_options_color_white">'.$nd_options_title.'</h4>
			</div>
				
			<div class="nd_options_section nd_options_padding_20 nd_options_box_sizing_border_box">
				<p>'.get_woocommerce_currency_symbol().' '.$nd_options_regular_price.'</p>
				<div class="nd_options_section nd_options_height_20"></div>
				<a class="nd_options_display_inline_block nd_options_line_height_16 nd_options_box_sizing_border_box nd_options_first_font nd_options_padding_10_20 nd_options_border_1_solid_grey" href="'.$nd_options_permalink.'">'.__('READ MORE','nd-shortcodes').'</a>
			</div>

		</div>
	</div>


  ';

endwhile;

$str .= '</div>';