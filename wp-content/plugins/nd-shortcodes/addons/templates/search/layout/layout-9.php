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
$nd_options_customizer_archives_search_image_display = get_option( 'nd_options_customizer_archives_search_image_display' );
if ( $nd_options_customizer_archives_search_image_display == '' ) { $nd_options_customizer_archives_search_image_display = 0;  }


if ( $nd_options_customizer_archives_search_image_display != 1 ) { ?>



	<?php

		//header image
		$nd_options_customizer_archives_search_image = get_option( 'nd_options_customizer_archives_search_image' );
		if ( $nd_options_customizer_archives_search_image == '' ) { 
		    $nd_options_customizer_archives_search_image = '';  
		}else{
		    $nd_options_customizer_archives_search_image = wp_get_attachment_url($nd_options_customizer_archives_search_image);
		}


		//position
		$nd_options_customizer_archives_search_image_position = get_option( 'nd_options_customizer_archives_search_image_position' );
		if ( $nd_options_customizer_archives_search_image_position == '' ) { 
		    $nd_options_customizer_archives_search_image_position = 'nd_options_background_position_center_top';  
		}

	?>




	<div id="nd_options_search_header_img_layout_9" class="nd_options_section nd_options_background_size_cover <?php echo $nd_options_customizer_archives_search_image_position; ?> nd_options_bg_greydark" style="background-image:url(<?php echo $nd_options_customizer_archives_search_image; ?>);">

        <div class="nd_options_section nd_options_bg_greydark_alpha_3">
            
            <!--start nd_options_container-->
            <div class="nd_options_container nd_options_clearfix">



            	<div id="nd_options_search_header_img_layout_9_space_top" class="nd_options_section nd_options_height_100"></div>

                <div class="nd_options_section nd_options_padding_15 nd_options_box_sizing_border_box nd_options_text_align_center">

                    <h1 class="nd_options_color_white nd_options_font_size_60 nd_options_line_height_60 nd_options_font_size_40_all_iphone nd_options_line_height_40_all_iphone">


                    	<?php if (is_category()): ?>
                    		<span class="nd_options_display_block nd_options_font_weight_bold"><?php _e('Category','nd-shortcodes'); ?></span>
							<span class="nd_options_display_block nd_options_font_size_14 nd_options_second_font nd_options_margin_top_20 nd_options_letter_spacing_1 nd_options_text_transform_uppercase"><?php single_cat_title(); ?></span>
						<?php elseif (is_tag()): ?>
							<span class="nd_options_display_block nd_options_font_weight_bold"><?php _e('Tag','nd-shortcodes'); ?></span>
							<span class="nd_options_display_block nd_options_font_size_14 nd_options_second_font nd_options_margin_top_20 nd_options_letter_spacing_1 nd_options_text_transform_uppercase"><?php single_tag_title() ?></span>
						<?php elseif (is_month()): ?>
							<span class="nd_options_display_block nd_options_font_weight_bold"><?php _e('Archive','nd-shortcodes'); ?></span> 
							<span class="nd_options_display_block nd_options_font_size_14 nd_options_second_font nd_options_margin_top_20 nd_options_letter_spacing_1 nd_options_text_transform_uppercase"><?php single_month_title(' '); ?></span>
						<?php elseif (is_author()): ?>
							<span class="nd_options_display_block nd_options_font_weight_bold"><?php _e('Author','nd-shortcodes'); ?></span>
							<span class="nd_options_display_block nd_options_font_size_14 nd_options_second_font nd_options_margin_top_20 nd_options_letter_spacing_1 nd_options_text_transform_uppercase"><?php the_author(); ?></span>
						<?php elseif (is_search()): ?>
							<span class="nd_options_display_block nd_options_font_weight_bold"><?php _e('Search','nd-shortcodes'); ?></span>
							<span class="nd_options_display_block nd_options_font_size_14 nd_options_second_font nd_options_margin_top_20 nd_options_letter_spacing_1 nd_options_text_transform_uppercase"><?php the_search_query(); ?></span>
						<?php else: ?>
							<span class="nd_options_display_block nd_options_font_weight_bold"><?php _e('Archive','nd-shortcodes'); ?></span>
						<?php endif ?>


                    </h1>

                </div>

                <div id="nd_options_search_header_img_layout_9_space_bottom" class="nd_options_section nd_options_height_100"></div>  


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
				
				<?php while(have_posts()) : the_post(); ?>

					<?php

						//info
						$nd_options_id = get_the_ID(); 
						$nd_options_title = get_the_title();
						$nd_options_excerpt = get_the_excerpt();
						$nd_options_permalink = get_permalink( $nd_options_id );

						//image
						$nd_options_image_id = get_post_thumbnail_id( $nd_options_id );
						$nd_options_image_attributes = wp_get_attachment_image_src( $nd_options_image_id, 'large' );
						if ( $nd_options_image_attributes[0] == '' ) { $nd_options_output_image = ''; }else{
						  $nd_options_output_image = '

						  	<div class="nd_options_section nd_options_position_relative">
						        <a href="'.$nd_options_permalink.'"><img alt="" class="nd_options_section" src="'.$nd_options_image_attributes[0].'"></a>
						    </div>

						  	';
						}

						//metabox
						$nd_options_meta_box_page_color = get_post_meta( $nd_options_id, 'nd_options_meta_box_post_color', true );
						if ( $nd_options_meta_box_page_color == '' ) { $nd_options_meta_box_page_color = '#000'; }

					?>
					
					<!--post-->
					<div class=" nd_options_width_33_percentage nd_options_padding_15 nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive">
					    <div class="nd_options_section nd_options_box_shadow_0_0_15_0_0001 nd_options_bg_white">

					        <div class="nd_options_section nd_options_position_relative">
					            
					            <?php echo $nd_options_output_image ?>

					        </div>

					        
					        <div class="nd_options_section nd_options_padding_30 nd_options_box_sizing_border_box">
					            
					        	<p class="nd_options_color_grey nd_options_font_size_13 nd_options_text_transform_uppercase nd_options_letter_spacing_1"><?php the_time('j') ?> <?php the_time('M') ?></p>
					            <div class="nd_options_section nd_options_height_15"></div>
					        	<h3 class="nd_options_letter_spacing_1 nd_options_font_size_23"><strong><?php echo $nd_options_title; ?></strong></h3>
						        <div class="nd_options_section nd_options_height_20"></div>
						        <p class="nd_options_line_height_2_em"><?php echo $nd_options_excerpt; ?></p>
						        <div class="nd_options_section nd_options_height_20"></div>
						        <a style="background-color: <?php echo $nd_options_meta_box_page_color; ?>;" class="nd_options_display_inline_block nd_options_line_height_16 nd_options_font_size_13 nd_options_text_align_center nd_options_box_sizing_border_box  nd_options_color_white nd_options_first_font nd_options_padding_10_20 nd_options_font_weight_bold nd_options_letter_spacing_1" href="<?php echo $nd_options_permalink; ?>"><?php _e('READ MORE','nd-shortcodes'); ?></a>

					        </div>


					    </div>
					</div>
					<!--post-->




						
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