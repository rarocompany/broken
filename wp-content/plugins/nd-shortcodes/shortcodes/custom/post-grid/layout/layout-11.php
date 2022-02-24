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


	//START POST FORMATS
	if ( has_post_format('quote') ) {

		$nd_options_meta_box_post_quote = get_post_meta( $nd_options_id, 'nd_options_meta_box_post_quote', true );
		if ( $nd_options_meta_box_post_quote == '' ) { $nd_options_meta_box_post_quote = __('Insert Quote','nd-shortcodes'); }
		$nd_options_meta_box_post_quote_author = get_post_meta( $nd_options_id, 'nd_options_meta_box_post_quote_author', true );
		if ( $nd_options_meta_box_post_quote_author == '' ) { $nd_options_meta_box_post_quote_author = __('Insert Author','nd-shortcodes'); }

	 	$str .= '

	 		<div class=" '.$nd_options_width.' nd_options_padding_15 nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive">

	 			<div style="background-color: '.$nd_options_meta_box_page_color.';" class="nd_options_section nd_options_text_align_center nd_options_padding_50 nd_options_box_sizing_border_box nd_options_border_radius_4">
	 				
	 				<h3 class="nd_options_color_white nd_options_line_height_35 nd_options_font_weight_normal">
	 					<a class="nd_options_color_white nd_options_first_font" href="'.$nd_options_permalink.'">
	 						'.$nd_options_meta_box_post_quote.'
	 					</a>
	 				</h3>

	 				<div class="nd_options_section nd_options_height_20"></div>

	 				<div class="nd_options_display_inline_block">
                        <div class="nd_options_display_table nd_options_float_left">
                            <img alt="" class="nd_options_margin_right_10 nd_options_display_table_cell nd_options_vertical_align_middle" width="30" height="30" src="'.esc_url(plugins_url('icons/icon-quote-alpha.svg', __FILE__ )).'">
                            <p class="nd_options_color_white nd_options_display_table_cell nd_options_vertical_align_middle">
                            	'.$nd_options_meta_box_post_quote_author.'	
                            </p>
                        </div>
                    </div>



	 			</div>

	 		</div>

	 	';

	}elseif ( has_post_format('link') ){


		$nd_options_meta_box_post_link_title = get_post_meta( $nd_options_id, 'nd_options_meta_box_post_link_title', true );
		if ( $nd_options_meta_box_post_link_title == '' ) { $nd_options_meta_box_post_link_title = 'www.nicdark.com'; }
		$nd_options_meta_box_post_link_url = get_post_meta( $nd_options_id, 'nd_options_meta_box_post_link_url', true );
		if ( $nd_options_meta_box_post_link_url == '' ) { $nd_options_meta_box_post_link_url = 'http://www.nicdark.com'; }

		$str .= '


			<div class=" '.$nd_options_width.' nd_options_padding_15 nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive">

	 			<div style="background-color: '.$nd_options_meta_box_page_color.';" class="nd_options_section nd_options_text_align_center nd_options_padding_50 nd_options_box_sizing_border_box nd_options_border_radius_4">
	 				
	 				<div class="nd_options_display_inline_block">
	                    <img alt="" class="nd_options_margin_right_10" width="20" height="20" src="'.esc_url(plugins_url('icons/icon-link-white.svg', __FILE__ )).'">
	                    <h3 class="nd_options_color_white nd_options_line_height_35 nd_options_display_inline_block nd_options_font_weight_normal">
	                    	<span class="nd_options_padding_botttom_5">
	                    		<a class="nd_options_color_white nd_options_first_font" href="'.$nd_options_meta_box_post_link_url.'">
	                    			'.$nd_options_meta_box_post_link_title.'
	                    		</a>
	                    	</span>
	                    </h3>
	                </div>

	 			</div>

	 		</div>


		';

	}elseif ( has_post_format('image') ){


		//categories
		$nd_options_post_categories = get_the_category($nd_options_id);
		foreach ( $nd_options_post_categories as $nd_options_post_category ) {
			$nd_options_post_categories_list = '';
		    $nd_options_post_categories_list .= '<a class="nd_options_position_absolute nd_options_right_20 nd_options_top_20 nd_options_display_inline_block nd_options_bg_greydark_2 nd_options_color_white nd_options_first_font nd_options_padding_8 nd_options_border_radius_3 nd_options_font_size_13 nd_options_z_index_9 nd_options_text_transform_uppercase" href="'.$nd_options_permalink.'">'.$nd_options_post_category->name.'</a>';
		}


		//image for standard post
		$nd_options_image_id = get_post_thumbnail_id( $nd_options_id );
		$nd_options_image_attributes = wp_get_attachment_image_src( $nd_options_image_id, 'large' );
		if ( $nd_options_image_attributes[0] == '' ) { $nd_options_output_image = ''; }else{
		  $nd_options_output_image = '


		  	<div class="nd_options_section nd_options_position_relative">
		        <a href="'.$nd_options_permalink.'"><img alt="" class="nd_options_section nd_options_border_radius_4_4_0_0" src="'.$nd_options_image_attributes[0].'"></a>
		        <div class=" nd_options_position_absolute nd_options_left_0 nd_options_height_100_percentage nd_options_width_100_percentage nd_options_padding_30 nd_options_box_sizing_border_box"></div>
		        '.$nd_options_post_categories_list.'
		    </div>

		  	';
		}


		$str .= '


	    <div class=" '.$nd_options_width.' nd_options_padding_15 nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive">
		    <div class="nd_options_section ">

		        <div class="nd_options_section nd_options_position_relative">
		            
		            '.$nd_options_output_image.'

		        </div>

		        <div style="background-color: '.$nd_options_meta_box_page_color.';" class="nd_options_section nd_options_border_radius_0_0_4_4 nd_options_padding_20_30 nd_options_box_sizing_border_box">
		            <a href="'.$nd_options_permalink.'"><h3 class="nd_options_color_white nd_options_margin_0_important nd_options_padding_0 nd_options_font_weight_normal">'.$nd_options_title.'</h3></a>
		        </div>

		    </div>
		</div>


	  ';

	}elseif ( has_post_format('video') OR has_post_format('audio') OR has_post_format('gallery') ){

		$nd_options_meta_box_post_media_code = get_post_meta( $nd_options_id, 'nd_options_meta_box_post_media_code', true );

		$str .= '


			<div class=" '.$nd_options_width.' nd_options_padding_15 nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive">
			    <div class="nd_options_section nd_options_border_1_solid_grey">

			        <div class="nd_options_section ">
			            
			            '.do_shortcode($nd_options_meta_box_post_media_code).'

			        </div>

			        <div class="nd_options_section nd_options_padding_30 nd_options_box_sizing_border_box">
			            <h5 class="nd_options_margin_0_important nd_options_padding_0 nd_options_second_font nd_options_color_grey">'.get_the_time('F').' '.get_the_time('j').'</h5>
			            <div class="nd_options_section nd_options_height_10"></div>
			            <h2 class="nd_options_margin_0_important nd_options_padding_0 ">'.$nd_options_title.'</h2>
			            <div class="nd_options_section nd_options_height_20"></div>
			            <p class="nd_options_margin_0_important nd_options_padding_0">'.$nd_options_excerpt.'</p>
			            <div class="nd_options_section nd_options_height_20"></div>
			            <a style="background-color: '.$nd_options_meta_box_page_color.';" class="nd_options_display_inline_block nd_options_line_height_16 nd_options_text_align_center nd_options_box_sizing_border_box  nd_options_color_white nd_options_first_font nd_options_padding_10_20 nd_options_border_radius_3 " href="'.$nd_options_permalink.'">'.__('READ MORE','nd-shortcodes').'</a>

			        </div>



			        <div class="nd_options_section nd_options_padding_20_30 nd_options_box_sizing_border_box nd_options_border_top_1_solid_grey">

					    <div class="nd_options_width_50_percentage nd_options_float_left">
					        <div class="nd_options_display_table nd_options_float_left">
					            <img alt="" class="nd_options_margin_right_10 nd_options_display_table_cell nd_options_vertical_align_middle nd_options_border_radius_100_percentage" width="25" height="25" src="'.get_avatar_url(get_the_author_meta('ID')).'">
					            <p class="nd_options_display_table_cell nd_options_vertical_align_middle nd_options_font_size_15"><a href="'.$nd_options_permalink.'">'.get_the_author().'</a></p>
					        </div>
					    </div> 

					    <div class="nd_options_width_50_percentage nd_options_float_left">
					        <div class="nd_options_display_table nd_options_float_left">
					            <img alt="" class="nd_options_margin_right_10 nd_options_display_table_cell nd_options_vertical_align_middle " width="23" height="23" src="'.esc_url(plugins_url('icons/icon-comment-grey.svg', __FILE__ )).'">
					            <p class="nd_options_display_table_cell nd_options_vertical_align_middle nd_options_font_size_15"><a href="'.$nd_options_permalink.'">'.get_comments_number().' '.__('Comments','nd-shortcodes').'</a></p>
					        </div>
					    </div> 
					    
					</div>

			    </div>
			</div>


		';

	}else{


		//categories
		$nd_options_post_categories = get_the_category($nd_options_id);
		foreach ( $nd_options_post_categories as $nd_options_post_category ) {
			$nd_options_post_categories_list = '';
		    $nd_options_post_categories_list .= '<a class="nd_options_position_absolute nd_options_right_20 nd_options_top_20 nd_options_display_inline_block nd_options_bg_greydark_2 nd_options_color_white nd_options_first_font nd_options_padding_8 nd_options_border_radius_3 nd_options_font_size_13 nd_options_z_index_9 nd_options_text_transform_uppercase" href="'.$nd_options_permalink.'">'.$nd_options_post_category->name.'</a>';
		}


		//image for standard post
		$nd_options_image_id = get_post_thumbnail_id( $nd_options_id );
		$nd_options_image_attributes = wp_get_attachment_image_src( $nd_options_image_id, 'large' );
		if ( $nd_options_image_attributes[0] == '' ) { $nd_options_output_image = ''; }else{
		  $nd_options_output_image = '


		  	<div class="nd_options_section nd_options_position_relative">
		        <a href="'.$nd_options_permalink.'"><img alt="" class="nd_options_section nd_options_border_radius_4_4_0_0" src="'.$nd_options_image_attributes[0].'"></a>
		        <div class=" nd_options_position_absolute nd_options_left_0 nd_options_height_100_percentage nd_options_width_100_percentage nd_options_padding_30 nd_options_box_sizing_border_box"></div>
		        '.$nd_options_post_categories_list.'
		    </div>

		  	';
		}


		$str .= '


	    <div class=" '.$nd_options_width.' nd_options_padding_15 nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive">
		    <div class="nd_options_section ">

		        <div class="nd_options_section nd_options_position_relative">
		            
		            '.$nd_options_output_image.'

		        </div>

		        <div style="background-color: '.$nd_options_meta_box_page_color.';" class="nd_options_section nd_options_border_radius_0_0_4_4 nd_options_padding_30 nd_options_box_sizing_border_box">
		            <a href="'.$nd_options_permalink.'"><h3 class="nd_options_color_white nd_options_margin_0_important nd_options_padding_0 nd_options_font_weight_normal">'.$nd_options_title.'</h3></a>
		            <div class="nd_options_section nd_options_height_20"></div>
		            <p class="nd_options_margin_0_important nd_options_padding_0 nd_options_color_white">'.$nd_options_excerpt.'</p>
		            <div class="nd_options_section nd_options_height_20"></div>
		            <a style="background-color: rgba(0, 0, 0, 0.05);" class="nd_options_display_inline_block nd_options_line_height_16 nd_options_text_align_center nd_options_box_sizing_border_box  nd_options_color_white nd_options_first_font nd_options_padding_10_20 nd_options_border_radius_4 " href="'.$nd_options_permalink.'">'.__('READ MORE','nd-shortcodes').'</a>

		        </div>

		    </div>
		</div>


	  ';

	}
	//END POST FORMATS




endwhile;


$str .= '</div><!--CLOSE MASONRY-->';
