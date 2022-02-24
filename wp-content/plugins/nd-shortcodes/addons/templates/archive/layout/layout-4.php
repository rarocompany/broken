<?php wp_enqueue_script('masonry'); ?>


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





<?php


//display
$nd_options_customizer_archives_archive_image_display = get_option( 'nd_options_customizer_archives_archive_image_display' );
if ( $nd_options_customizer_archives_archive_image_display == '' ) { $nd_options_customizer_archives_archive_image_display = 0;  }


if ( $nd_options_customizer_archives_archive_image_display != 1 ) { ?>



	<?php

		//header image
		$nd_options_customizer_archives_archive_image = get_option( 'nd_options_customizer_archives_archive_image' );
		if ( $nd_options_customizer_archives_archive_image == '' ) { 
		    $nd_options_customizer_archives_archive_image = '';  
		}else{
		    $nd_options_customizer_archives_archive_image = wp_get_attachment_url($nd_options_customizer_archives_archive_image);
		}


		//position
		$nd_options_customizer_archives_archive_image_position = get_option( 'nd_options_customizer_archives_archive_image_position' );
		if ( $nd_options_customizer_archives_archive_image_position == '' ) { 
		    $nd_options_customizer_archives_archive_image_position = 'nd_options_background_position_center_top';  
		}

	?>




	<div id="nd_options_archives_header_img_layout_4" class="nd_options_section nd_options_background_size_cover <?php echo $nd_options_customizer_archives_archive_image_position; ?> nd_options_bg_greydark" style="background-image:url(<?php echo $nd_options_customizer_archives_archive_image; ?>);">

        <div class="nd_options_section nd_options_bg_greydark_alpha_2">
            
            <!--start nd_options_container-->
            <div class="nd_options_container nd_options_clearfix">

                <div id="nd_options_archive_header_image_space_top" class="nd_options_section nd_options_height_130"></div>

                <div class="nd_options_section nd_options_padding_15 nd_options_box_sizing_border_box">
                    <?php if (is_category()): ?>

							<h4 class="nd_options_color_white nd_options_text_transform_uppercase nd_options_second_font nd_options_letter_spacing_2 nd_options_font_weight_lighter">
								<?php _e('Category','nd-shortcodes'); ?>
							</h4>
							<div class="nd_options_section nd_options_height_10"></div>
							<h1 class="nd_options_color_white nd_options_font_size_40 nd_options_font_size_40_all_iphone nd_options_line_height_40_all_iphone nd_options_first_font">
								<?php single_cat_title(); ?>
							</h1>

						<?php elseif (is_tag()): ?>

							<h4 class="nd_options_color_white nd_options_text_transform_uppercase nd_options_second_font nd_options_letter_spacing_2 nd_options_font_weight_lighter">
								<?php _e('Tag','nd-shortcodes'); ?>
							</h4>
							<div class="nd_options_section nd_options_height_10"></div>
							<h1 class="nd_options_color_white nd_options_font_size_40 nd_options_font_size_40_all_iphone nd_options_line_height_40_all_iphone nd_options_first_font">
								<?php single_tag_title(); ?>
							</h1>

						<?php elseif (is_month()): ?>

							<h4 class="nd_options_color_white nd_options_text_transform_uppercase nd_options_second_font nd_options_letter_spacing_2 nd_options_font_weight_lighter">
								<?php _e('Archive for','nd-shortcodes'); ?>
							</h4>
							<div class="nd_options_section nd_options_height_10"></div>
							<h1 class="nd_options_color_white nd_options_font_size_40 nd_options_font_size_40_all_iphone nd_options_line_height_40_all_iphone nd_options_first_font">
								<?php single_month_title(' '); ?>
							</h1>

						<?php elseif (is_author()): ?>

							<h4 class="nd_options_color_white nd_options_text_transform_uppercase nd_options_second_font nd_options_letter_spacing_2 nd_options_font_weight_lighter">
								<?php _e('Author','nd-shortcodes'); ?>
							</h4>
							<div class="nd_options_section nd_options_height_10"></div>
							<h1 class="nd_options_color_white nd_options_font_size_40 nd_options_font_size_40_all_iphone nd_options_line_height_40_all_iphone nd_options_first_font">
								<?php the_author(); ?>
							</h1>

						<?php elseif (is_search()): ?>

							<h4 class="nd_options_color_white nd_options_text_transform_uppercase nd_options_second_font nd_options_letter_spacing_2 nd_options_font_weight_lighter">
								<?php _e('Search for','nd-shortcodes'); ?>
							</h4>
							<div class="nd_options_section nd_options_height_10"></div>
							<h1 class="nd_options_color_white nd_options_font_size_40 nd_options_font_size_40_all_iphone nd_options_line_height_40_all_iphone nd_options_first_font">
								<?php the_search_query(); ?>
							</h1>

						<?php else: ?>

							<h1 class="nd_options_color_white nd_options_font_size_40 nd_options_font_size_40_all_iphone nd_options_line_height_40_all_iphone nd_options_first_font">
								<?php _e('Archive','nd-shortcodes'); ?>
							</h1>

						<?php endif ?>
                </div>

                <div id="nd_options_archive_header_image_space_bottom" class="nd_options_section nd_options_height_130"></div>


            </div>
            <!--end container-->

        </div>

    </div>


    


<?php } ?>






<div class="nd_options_section nd_options_height_40"></div>


<!--start section-->
<div class="nd_options_section">

    <!--start nd_options_container-->
    <div class="nd_options_container nd_options_clearfix">

	
		<!--start all posts previews-->
    	<div class="nd_options_width_100_percentage">

    		<!--start masonry-->
    		<div class="nd_options_section nd_options_masonry_content">
    	
    		<?php if(have_posts()) : ?>

    			<?php $nd_options_index = 0; ?>
				
				<?php while(have_posts()) : the_post(); ?>

					<?php

						//info
						$nd_options_id = get_the_ID(); 
						$nd_options_title = get_the_title();
						$nd_options_excerpt = get_the_excerpt();
						$nd_options_permalink = get_permalink( $nd_options_id );

						//metabox
						$nd_options_meta_box_page_color = get_post_meta( $nd_options_id, 'nd_options_meta_box_post_color', true );
						if ( $nd_options_meta_box_page_color == '' ) { $nd_options_meta_box_page_color = '#000'; }

						//image
						$nd_options_image_id = get_post_thumbnail_id( $nd_options_id );
						$nd_options_image_attributes = wp_get_attachment_image_src( $nd_options_image_id, 'large' );
						if ( $nd_options_image_attributes[0] == '' ) { $nd_options_output_image = ''; }else{

						  if ( $nd_options_index & 1 ) { $nd_options_top_class = 'nd_options_top_22_negative'; } else { $nd_options_top_class = 'nd_options_bottom_22_negative'; } 

						  $nd_options_output_image = '

						
							<div class="nd_options_section nd_options_position_relative">
								<a href="'.$nd_options_permalink.'"><img alt="" class="nd_options_section" src="'.$nd_options_image_attributes[0].'"></a>
								<div class="nd_options_bg_greydark_alpha nd_options_position_absolute nd_options_left_0 nd_options_height_100_percentage nd_options_width_100_percentage nd_options_padding_30 nd_options_box_sizing_border_box"></div>


								<div class="nd_options_position_absolute nd_options_bottom_20 nd_options_left_30">
								    <div class="nd_options_display_table nd_options_float_left">
								        <img alt="" class="nd_options_margin_right_10 nd_options_display_table_cell nd_options_vertical_align_middle" width="20" src="'.esc_url(plugins_url('icons/icon-user-white.svg', __FILE__ )).'">
								        <p class=" nd_options_color_white nd_options_display_table_cell nd_options_vertical_align_middle nd_options_font_size_13">'.__('By','nd-shortcodes').' '.get_the_author().'</p>
								    </div>
								    <div class="nd_options_display_table nd_options_float_left nd_options_margin_left_20">
								        <img alt="" class="nd_options_margin_right_10 nd_options_display_table_cell nd_options_vertical_align_middle" width="20" src="'.esc_url(plugins_url('icons/icon-comment-3-white.svg', __FILE__ )).'">
								        <p class=" nd_options_color_white nd_options_display_table_cell nd_options_vertical_align_middle nd_options_font_size_13">'.get_comments_number().' '.__('Comments','nd-shortcodes').'</p>
								    </div>
								</div>

								<div style="background-color:'.$nd_options_meta_box_page_color.';" class="nd_options_position_absolute nd_options_right_20 '.$nd_options_top_class.' nd_options_display_inline_block nd_options_border_radius_100_percentage nd_options_padding_10 nd_options_text_align_center nd_options_width_25 nd_options_height_25">
								    <img alt="" class="" width="20" src="'.esc_url(plugins_url('icons/icon-picture-white.svg', __FILE__ )).'">
								</div>
							
							</div>';

						}

					?>
					
					<!--post-->
					<div class="nd_options_width_33_percentage nd_options_padding_15 nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive">
						<div class="nd_options_section nd_options_border_1_solid_grey">
						    
							<?php if ( $nd_options_index & 1 ) { } else { echo $nd_options_output_image; }  ?>

							
						    <div class="nd_options_section nd_options_padding_40 nd_options_box_sizing_border_box">
						        <h3><a class="nd_options_first_font nd_options_color_greydark" href="<?php echo $nd_options_permalink; ?>"><?php echo $nd_options_title; ?></a></h3>
						        <div class="nd_options_section nd_options_height_10"></div>
						        <p><a href="<?php echo $nd_options_permalink; ?>"><?php echo $nd_options_excerpt; ?></a></p>
						        <div class="nd_options_section nd_options_height_10"></div>
						        <a style="color:<?php echo $nd_options_meta_box_page_color; ?>;" class="nd_options_display_inline_block nd_options_first_font nd_options_font_size_13" href="<?php echo $nd_options_permalink; ?>"><strong><?php _e('READ MORE','nd-shortcodes'); ?></strong></a>
						    </div>

						    <?php if ( $nd_options_index & 1 ) { echo $nd_options_output_image; } else { } ?>
   
						</div>
					</div>
					<!--post-->

						
				<?php $nd_options_index = $nd_options_index + 1; ?>


				<?php endwhile; ?>
			<?php endif; ?>

			</div>
			<!--END masonry-->


			<!--START pagination-->
			<div class="nd_options_section">
				<div class="nd_options_section nd_options_height_30"></div>

				<?php

		    	the_posts_pagination( array(
					'prev_text'          => __( 'Prev', 'nd-shortcodes' ),
					'next_text'          => __( 'Next', 'nd-shortcodes' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'nd-shortcodes' ) . ' </span>',
				) );

				?>

				<div class="nd_options_section nd_options_height_50"></div>
			</div>
			<!--END pagination-->


    	</div>
    	<!--end all posts previews-->

 
    
    	
	</div>
	<!--end container-->

</div>
<!--end section-->