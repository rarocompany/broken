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

	//padding
	if ( $nd_options_padding == '' ) {
		$nd_options_padding_class = 'nd_options_padding_15';
		$nd_options_padding_style = '';
	}else{
		$nd_options_padding_class = '';	
		$nd_options_padding_style = ' padding:'.$nd_options_padding.'; ';
	}

	//START POST FORMATS
	if ( has_post_format('link') ){

		//image for standard post
		$nd_options_image_id = get_post_thumbnail_id( $nd_options_id );
		$nd_options_image_attributes = wp_get_attachment_image_src( $nd_options_image_id, 'thumbnail' );
		if ( $nd_options_image_attributes[0] == '' ) { $nd_options_output_image = ''; }else{
		  $nd_options_output_image = '

		        <a class="nd_options_position_absolute nd_options_width_100 nd_options_top_0 nd_options_left_0" href="'.$nd_options_permalink.'"><img alt="" class="nd_options_section" src="'.$nd_options_image_attributes[0].'"></a>
		       
		  	';
		}




		$str .= '



	 		<div style=" '.$nd_options_padding_style.' " class=" '.$nd_options_width.' '.$nd_options_padding_class.' nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive">
			    <div class="nd_options_section nd_options_position_relative">

			        
			        '.$nd_options_output_image.'
			       

			        <div class="nd_options_section nd_options_padding_left_120 nd_options_box_sizing_border_box">
			        	
			        	<div class="nd_options_section nd_options_height_5"></div>
			        	<a href="'.$nd_options_permalink.'"><h3 class="nd_options_margin_0_important nd_options_padding_0 ">'.$nd_options_title.'</h3></a>
			        	<div class="nd_options_section nd_options_height_10"></div>
			        	<h6 class="nd_options_display_table_cell nd_options_vertical_align_middle"><a href="'.$nd_options_permalink.'">'.get_the_author().' '.__('on','nd-shortcodes').' '.get_the_time(get_option('date_format')).'</a></h6>
           
			            <div class="nd_options_section nd_options_height_20"></div>
			            <a style="background-color: '.$nd_options_meta_box_page_color.';" class=" nd_options_color_white nd_options_first_font nd_options_padding_5_10 nd_options_padding_top_7 nd_options_display_inline_block nd_options_font_size_12 nd_options_line_height_12  " href="'.$nd_options_permalink.'">'.__('READ MORE','nd-shortcodes').'</a>

			        </div>

			    </div>
			</div>




		';

	}elseif ( has_post_format('image') ){


		

		//image for standard post
		$nd_options_image_id = get_post_thumbnail_id( $nd_options_id );
		$nd_options_image_attributes = wp_get_attachment_image_src( $nd_options_image_id, 'large' );
		if ( $nd_options_image_attributes[0] == '' ) { $nd_options_output_image = ''; }else{
		  $nd_options_output_image = '


		  	<div class="nd_options_section nd_options_position_relative">
		        
		        <a href="'.$nd_options_permalink.'"><img alt="" class="nd_options_section" src="'.$nd_options_image_attributes[0].'"></a>
		        
		        <div class="nd_options_bg_greydark_alpha_gradient_cc_2 nd_options_position_absolute nd_options_left_0 nd_options_height_100_percentage nd_options_width_100_percentage nd_options_padding_30 nd_options_box_sizing_border_box">
				    <div class="nd_options_position_absolute nd_options_bottom_30">
				        
				    	<a href="'.$nd_options_permalink.'"><h3 class="nd_options_margin_0_important nd_options_padding_0 nd_options_color_white">'.$nd_options_title.'</h3></a>
			        	<div class="nd_options_section nd_options_height_10"></div>


			        	<div class="nd_options_section">
					        <div class="nd_options_display_table nd_options_float_left">
					            <img alt="" class="nd_options_margin_right_10 nd_options_display_table_cell nd_options_vertical_align_middle nd_options_border_radius_100_percentage" width="25" height="25" src="'.get_avatar_url(get_the_author_meta('ID')).'">
					            <h6 class="nd_options_display_table_cell nd_options_vertical_align_middle"><a class="nd_options_color_white" href="'.$nd_options_permalink.'">'.get_the_author().' '.__('on','nd-shortcodes').' '.get_the_time(get_option('date_format')).'</a></h6>
					        </div>
					    </div> 
			            
				    </div>

				</div>


		    </div>

		  	';
		}
		


		$str .= '

			<div style=" '.$nd_options_padding_style.' " class=" '.$nd_options_width.' '.$nd_options_padding_class.' nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive">
			    

		        <div class="nd_options_section nd_options_position_relative">
		            
		            '.$nd_options_output_image.'

		        </div>

			    
			</div>

		';

	}else{


		//categories
		$nd_options_post_categories = get_the_category($nd_options_id);
		foreach ( $nd_options_post_categories as $nd_options_post_category ) {
			$nd_options_post_categories_list = '';
		    $nd_options_post_categories_list .= '<a class="nd_options_position_absolute nd_options_right_20 nd_options_top_20 nd_options_display_inline_block nd_options_bg_greydark_4 nd_options_color_white nd_options_first_font nd_options_padding_5_10 nd_options_padding_top_7 nd_options_font_size_12 nd_options_line_height_12 nd_options_z_index_9 nd_options_text_transform_uppercase" href="'.$nd_options_permalink.'">'.$nd_options_post_category->name.'</a>';
		}


		//image for standard post
		$nd_options_image_id = get_post_thumbnail_id( $nd_options_id );
		$nd_options_image_attributes = wp_get_attachment_image_src( $nd_options_image_id, 'large' );
		if ( $nd_options_image_attributes[0] == '' ) { $nd_options_output_image = ''; }else{
		  $nd_options_output_image = '

		  	<div class="nd_options_section nd_options_position_relative">
		        <a href="'.$nd_options_permalink.'"><img alt="" class="nd_options_section" src="'.$nd_options_image_attributes[0].'"></a>
		        <div class="nd_options_bg_greydark_alpha_gradient_cc_1 nd_options_position_absolute nd_options_left_0 nd_options_height_100_percentage nd_options_width_100_percentage nd_options_padding_30 nd_options_box_sizing_border_box"></div>
		        '.$nd_options_post_categories_list.'

		       	<a style="background-color:'.$nd_options_meta_box_page_color.'" class=" nd_options_text_align_center nd_options_width_30 nd_options_height_20 nd_options_color_white nd_options_position_absolute nd_options_right_30 nd_options_bottom_30 nd_options_font_size_13 nd_options_line_height_22" href="'.$nd_options_permalink.'">
		       		'.get_comments_number().'
		       		<span style="border-width: 0 6px 6px 0; border-color: transparent '.$nd_options_meta_box_page_color.' transparent transparent;" class="triangle nd_options_width_0 nd_options_height_0 nd_options_border_style_solid nd_options_position_absolute nd_options_right_0 nd_options_bottom_6_negative "></span>
		       	</a>


		    </div>';
		}


		$str .= '


	    <div style=" '.$nd_options_padding_style.' " class=" '.$nd_options_width.' '.$nd_options_padding_class.' nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive">
		    <div class="nd_options_section">

		        <div class="nd_options_section nd_options_position_relative">
		            '.$nd_options_output_image.'
		        </div>

		        <div class="nd_options_section nd_options_padding_30 nd_options_box_sizing_border_box">
		        	
		        	<a href="'.$nd_options_permalink.'"><h3 class="nd_options_margin_0_important nd_options_padding_0 ">'.$nd_options_title.'</h3></a>
		        	<div class="nd_options_section nd_options_height_10"></div>


		        	<div class="nd_options_section">
				        <div class="nd_options_display_table nd_options_float_left">
				            <img alt="" class="nd_options_margin_right_10 nd_options_display_table_cell nd_options_vertical_align_middle nd_options_border_radius_100_percentage" width="25" height="25" src="'.get_avatar_url(get_the_author_meta('ID')).'">
				            <h6 class="nd_options_display_table_cell nd_options_vertical_align_middle"><a href="'.$nd_options_permalink.'">'.get_the_author().' '.__('on','nd-shortcodes').' '.get_the_time(get_option('date_format')).'</a></h6>
				        </div>
				    </div> 
		            
		            <div class="nd_options_section nd_options_height_20"></div>
		            <p class="nd_options_margin_0_important nd_options_padding_0">'.$nd_options_excerpt.'</p>
		            <div class="nd_options_section nd_options_height_20"></div>
		            <a style="background-color: '.$nd_options_meta_box_page_color.';" class="nd_options_display_inline_block nd_options_line_height_13 nd_options_font_size_13 nd_options_text_align_center nd_options_box_sizing_border_box  nd_options_color_white nd_options_first_font nd_options_padding_10_20 " href="'.$nd_options_permalink.'">'.__('READ MORE','nd-shortcodes').'</a>

		        </div>

		    </div>
		</div>


	  ';

	}
	//END POST FORMATS




endwhile;


$str .= '</div><!--CLOSE MASONRY-->';
