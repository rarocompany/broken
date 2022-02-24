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

//get plugin colors customizer
$nd_options_customizer_woocommerce_color_greydark = get_option( 'nd_options_customizer_woocommerce_color_greydark', '#444444' );
$nd_options_customizer_woocommerce_color_green = get_option( 'nd_options_customizer_woocommerce_color_green', '#77a464' );

//woo info
$nd_options_regular_price = get_post_meta( $nd_options_id, '_price', true);
$nd_options_sale_price = get_post_meta( $nd_options_id, '_sale_price', true);
//info price

 
$str .= '

	<div class="'.$nd_options_width.' nd_options_postgrid_woo_component_l4 nd_options_postgrid_woo_layout_3_'.$nd_options_id.' nd_options_padding_15 nd_options_text_align_center nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive nd_options_position_relative">
        
        <div class="nd_options_section nd_options_position_relative">
          
          '.$nd_options_output_image.'

          <!--start filter-->
          <div class="nd_options_bg_greydark_alpha_gradient_6 nd_options_position_absolute nd_options_left_0 nd_options_height_100_percentage nd_options_width_100_percentage nd_options_padding_30 nd_options_box_sizing_border_box">
          

            <a href="'.$nd_options_permalink.'" style="background-color:'.$nd_options_meta_box_woocommerce_color.';" class=" nd_options_position_absolute nd_options_top_30 nd_options_right_30 nd_options_padding_5_10 nd_options_border_radius_3 nd_options_line_height_14 nd_options_text_transform_uppercase nd_options_color_white nd_options_second_font">'.get_woocommerce_currency_symbol().' '.$nd_options_regular_price.'</a>

            <a class="nd_options_color_white nd_options_position_absolute nd_options_left_0 nd_options_bottom_30 nd_options_section nd_options_text_align_center" href="'.$nd_options_permalink.'">
              <h3 class="nd_options_margin_0_important nd_options_color_white nd_options_second_font">
                '.$nd_options_title.'
              </h3>
            </a>

          </div>
          <!--END filter-->


        </div>

  </div>



  ';

endwhile;

$str .= '</div>';