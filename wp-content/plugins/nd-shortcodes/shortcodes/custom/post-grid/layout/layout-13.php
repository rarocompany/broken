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


	if ( has_post_format('image') ){


		//categories
		$nd_options_post_categories = get_the_category($nd_options_id);
		foreach ( $nd_options_post_categories as $nd_options_post_category ) {
			$nd_options_post_categories_list = '';
		    $nd_options_post_categories_list .= $nd_options_post_category->name.' ';
		}

		//image for standard post
		$nd_options_image_id = get_post_thumbnail_id( $nd_options_id );
		$nd_options_image_attributes = wp_get_attachment_image_src( $nd_options_image_id, 'large' );
		if ( $nd_options_image_attributes[0] == '' ) { $nd_options_output_image = ''; }else{
		  $nd_options_output_image = $nd_options_image_attributes[0];
		}

		$str .= '
		<div class=" '.$nd_options_width.' nd_options_padding_15 nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive">
		    	
		    <img class="nd_options_section nd_options_display_none nd_options_display_block_all_iphone" src="'.$nd_options_output_image.'">

		    <div style="background-color:'.$nd_options_meta_box_page_color.';" class="nd_options_section nd_options_display_table">';

		        if ( $nd_options_index & 1 ) { } else { 
		        	$str .= '<div style="background-image:url('.$nd_options_output_image.');" class="nd_options_width_50_percentage nd_options_width_100_percentage_all_iphone nd_options_display_table_cell nd_options_display_block_all_iphone nd_options_background_position_center nd_options_background_repeat_no_repeat nd_options_background_size_cover"></div>';
		        } 

		        $str .= '
		        <div class="nd_options_width_50_percentage nd_options_width_100_percentage_all_iphone nd_options_display_table_cell nd_options_display_block_all_iphone">

		        	<div class="nd_options_section nd_options_padding_30 nd_options_box_sizing_border_box">
			            <p class="nd_options_margin_0_important nd_options_padding_0 nd_options_second_font nd_options_color_white nd_options_text_transform_uppercase nd_options_letter_spacing_2 nd_options_font_weight_normal">'.$nd_options_post_categories_list.'</p>
			            <div class="nd_options_section nd_options_height_5"></div>
			            <h3 class="nd_options_margin_0_important nd_options_padding_0 nd_options_letter_spacing_0 nd_options_color_white">'.$nd_options_title.'</h3>
			            <div class="nd_options_section nd_options_height_20"></div>
			            <p class="nd_options_margin_0_important nd_options_padding_0 nd_options_color_white">'.$nd_options_excerpt.'</p>
			            <div class="nd_options_section nd_options_height_20"></div>
			            <a style="color:'.$nd_options_meta_box_page_color.';" class="nd_options_display_inline_block nd_options_bg_white nd_options_box_sizing_border_box nd_options_border_radius_30 nd_options_padding_5_20  " href="'.$nd_options_permalink.'">'.__('READ MORE','nd-shortcodes').'</a>

			        </div>
		        	
		        </div>';

		        if ( $nd_options_index & 1 ) { 
		        	$str .= '<div style="background-image:url('.$nd_options_output_image.');" class="nd_options_width_50_percentage nd_options_width_100_percentage_all_iphone nd_options_display_table_cell nd_options_display_block_all_iphone nd_options_background_position_center nd_options_background_repeat_no_repeat nd_options_background_size_cover"></div>';	 
		        } else { } 	        

		    $str .= '    
		    </div>
		</div>';
	

	}else{


		//categories
		$nd_options_post_categories = get_the_category($nd_options_id);
		foreach ( $nd_options_post_categories as $nd_options_post_category ) {
			$nd_options_post_categories_list = '';
		    $nd_options_post_categories_list .= $nd_options_post_category->name.' ';
		}

		//image for standard post
		$nd_options_image_id = get_post_thumbnail_id( $nd_options_id );
		$nd_options_image_attributes = wp_get_attachment_image_src( $nd_options_image_id, 'large' );
		if ( $nd_options_image_attributes[0] == '' ) { $nd_options_output_image = ''; }else{
		  $nd_options_output_image = $nd_options_image_attributes[0];
		}

		$str .= '

	    <div class=" '.$nd_options_width.' nd_options_padding_15 nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive">

	    	<img class="nd_options_section nd_options_display_none nd_options_display_block_all_iphone" src="'.$nd_options_output_image.'">

		    <div class="nd_options_section nd_options_border_1_solid_grey nd_options_bg_white nd_options_display_table">';

		        if ( $nd_options_index & 1 ) { } else { $str .= '<div style="background-image:url('.$nd_options_output_image.');" class="nd_options_width_50_percentage nd_options_width_100_percentage_all_iphone nd_options_display_table_cell nd_options_display_block_all_iphone nd_options_background_position_center nd_options_background_repeat_no_repeat nd_options_background_size_cover"></div>'; } 

		        $str .= '
		        <div class="nd_options_width_50_percentage nd_options_width_100_percentage_all_iphone nd_options_display_table_cell nd_options_display_block_all_iphone">

		        	<div class="nd_options_section nd_options_padding_30 nd_options_box_sizing_border_box">
			            <p class="nd_options_margin_0_important nd_options_padding_0 nd_options_second_font nd_options_color_grey nd_options_text_transform_uppercase nd_options_letter_spacing_2 nd_options_font_weight_normal">'.$nd_options_post_categories_list.'</p>
			            <div class="nd_options_section nd_options_height_5"></div>
			            <h3 class="nd_options_margin_0_important nd_options_padding_0 nd_options_letter_spacing_0">'.$nd_options_title.'</h3>
			            <div class="nd_options_section nd_options_height_20"></div>
			            <p class="nd_options_margin_0_important nd_options_padding_0">'.$nd_options_excerpt.'</p>
			            <div class="nd_options_section nd_options_height_20"></div>
			            <a style="background-color:'.$nd_options_meta_box_page_color.';" class="nd_options_display_inline_block nd_options_color_white nd_options_box_sizing_border_box nd_options_border_radius_30 nd_options_padding_5_20  " href="'.$nd_options_permalink.'">'.__('READ MORE','nd-shortcodes').'</a>

			        </div>
		        	
		        </div>';

		        if ( $nd_options_index & 1 ) { $str .= '<div style="background-image:url('.$nd_options_output_image.');" class="nd_options_width_50_percentage nd_options_width_100_percentage_all_iphone nd_options_display_table_cell nd_options_display_block_all_iphone nd_options_background_position_center nd_options_background_repeat_no_repeat nd_options_background_size_cover"></div>'; } else { } 

		    $str .= ' 
		    </div>
		</div>';

	}
	//END POST FORMATS


$nd_options_index = $nd_options_index + 1;

endwhile;


$str .= '</div><!--CLOSE MASONRY-->';
