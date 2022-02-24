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




	<div class="nd_options_section nd_options_background_size_cover <?php echo $nd_options_customizer_archives_archive_image_position; ?> nd_options_bg_greydark" style="background-image:url(<?php echo $nd_options_customizer_archives_archive_image; ?>);">

        <div class="nd_options_section nd_options_bg_greydark_alpha_gradient_2">
            
            <!--start nd_options_container-->
            <div class="nd_options_container nd_options_clearfix">

                <div class="nd_options_section nd_options_height_200"></div>

                <div class="nd_options_section nd_options_padding_15 nd_options_box_sizing_border_box">
                    <strong class="nd_options_color_white nd_options_font_size_60 nd_options_font_size_40_all_iphone nd_options_line_height_40_all_iphone nd_options_first_font">

                    	<?php if (is_category()): ?>
							<?php _e('Category','nd-shortcodes'); ?> <span class="nd_options_font_size_20 nd_options_second_font nd_options_font_weight_normal"><?php single_cat_title(); ?></span>
						<?php elseif (is_tag()): ?>
							<?php _e('Tag','nd-shortcodes'); ?> <span class="nd_options_font_size_20 nd_options_second_font nd_options_font_weight_normal"><?php single_tag_title() ?></span>
						<?php elseif (is_month()): ?>
							<?php _e('Archive for','nd-shortcodes'); ?> <span class="nd_options_font_size_20 nd_options_second_font nd_options_font_weight_normal"><?php single_month_title(' '); ?></span>
						<?php elseif (is_author()): ?>
							<?php _e('Author','nd-shortcodes'); ?> <span class="nd_options_font_size_20 nd_options_second_font nd_options_font_weight_normal"><?php the_author(); ?></span>
						<?php elseif (is_search()): ?>
							<?php _e('Search for','nd-shortcodes'); ?> <span class="nd_options_font_size_20 nd_options_second_font nd_options_font_weight_normal"><?php the_search_query(); ?></span>
						<?php else: ?>
							<?php _e('Archive','nd-shortcodes'); ?>
						<?php endif ?>

                   	</strong>
                </div>

                <div class="nd_options_section nd_options_height_20"></div>

            </div>
            <!--end container-->

        </div>

    </div>


    <?php do_action('nd_options_end_header_img_archive_hook'); ?>


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
						  $nd_options_output_image = '<img class="nd_options_section" alt="" src="'.$nd_options_image_attributes[0].'">';
						}

						//metabox
						$nd_options_meta_box_page_color = get_post_meta( $nd_options_id, 'nd_options_meta_box_post_color', true );
						if ( $nd_options_meta_box_page_color == '' ) { $nd_options_meta_box_page_color = '#000'; }

					?>
					
					<!--post-->
					<div class="nd_options_width_33_percentage nd_options_padding_15 nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive">
					    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
						    <div class="nd_options_section nd_options_border_1_solid_grey">

						        <div class="nd_options_section nd_options_position_relative">
						            
						            <?php echo $nd_options_output_image ?>

						        </div>

						        <div class="nd_options_section nd_options_padding_30 nd_options_box_sizing_border_box">
						            <h5 class="nd_options_margin_0_important nd_options_padding_0 nd_options_second_font nd_options_color_grey"><?php the_time('j') ?> <?php the_time('M') ?></h5>
						            <div class="nd_options_section nd_options_height_10"></div>
						            <h2 class="nd_options_margin_0_important nd_options_padding_0 "><?php echo $nd_options_title; ?></h2>
						            <div class="nd_options_section nd_options_height_20"></div>
						            <p class="nd_options_margin_0_important nd_options_padding_0"><?php echo $nd_options_excerpt; ?></p>
						            <div class="nd_options_section nd_options_height_20"></div>
						            <a style="background-color: <?php echo $nd_options_meta_box_page_color; ?>;" class="nd_options_display_inline_block nd_options_text_align_center nd_options_line_height_16 nd_options_box_sizing_border_box  nd_options_color_white nd_options_first_font nd_options_padding_10_20 nd_options_border_radius_3 " href="<?php echo $nd_options_permalink; ?>"><?php _e('READ MORE','nd-shortcodes'); ?></a>

						        </div>
						    </div>
						</div>
					</div>

						
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