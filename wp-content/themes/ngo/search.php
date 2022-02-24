<?php get_header(); ?>

<?php if( function_exists('nicdark_search_content')){ do_action( "nicdark_search_nd" ); }else{ ?>

<!--start section-->
<div class="nicdark_section nicdark_border_bottom_1_solid_grey">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

    	<div class="nicdark_grid_12">

    		<div class="nicdark_section nicdark_height_80"></div>

			<h1 class="nicdark_font_size_50 nicdark_font_size_40_all_iphone nicdark_line_height_40_all_iphone nicdark_text_align_center nicdark_font_weight_bolder"><?php esc_html_e('Search for','ngo'); ?></h1>
			<div class="nicdark_section nicdark_height_20"></div>
			<h4 class="nicdark_text_transform_uppercase nicdark_color_grey  nicdark_second_font nicdark_text_align_center nicdark_font_size_15 nicdark_letter_spacing_2">" <?php the_search_query(); ?> "</h4>

    		<div class="nicdark_section nicdark_height_80"></div>

    	</div>

    </div>
    <!--end container-->

</div>
<!--end section-->


<div class="nicdark_section nicdark_height_50"></div>


<!--start section-->
<div class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

	
		<!--start all posts previews-->
    	<?php if ( is_active_sidebar( 'nicdark_sidebar' ) ) { ?>  
    		<div class="nicdark_grid_8"> 
    	<?php }else{ ?>

    		<div class="nicdark_grid_12">
    	<?php } ?>
    	
    	
    		<?php if(have_posts()) : ?>
				
				<?php while(have_posts()) : the_post(); ?>
					
					

					<!--#post-->
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<div class="nicdark_section nicdark_box_shadow_0_0_15_0_000_01">

							<!--START PREVIEW-->
							<?php if (has_post_thumbnail()): ?>
								<div class="nicdark_section nicdark_image_archive">
									<?php the_post_thumbnail(); ?>
								</div>
							<?php endif ?>

							<div class="nicdark_section ">

								<div class="nicdark_section nicdark_float_left nicdark_padding_40 nicdark_padding_20_responsive  nicdark_box_sizing_border_box">
									
									<p class="nicdark_archive_date nicdark_color_grey nicdark_font_size_13 nicdark_second_font nicdark_letter_spacing_1 nicdark_padding_left_15"><?php the_time(get_option('date_format')) ?></p>
									<div class="nicdark_section nicdark_height_20"></div>
									<h2 class="nicdark_font_weight_bolder nicdark_font_size_30">
										<a class="nicdark_color_greydark nicdark_first_font" href="<?php the_permalink(); ?>">
											<?php the_title(); ?>
											<?php if ( has_post_format( 'video' )) { esc_html_e(' - Video','ngo'); } ?>
										</a>
									</h2>
									<div class="nicdark_section nicdark_height_20"></div>
									<div class="nicdark_section nicdark_archive_excerpt"><?php the_excerpt(); ?></div>
									<div class="nicdark_section nicdark_height_20"></div>
									<a class="nicdark_bg_btn_archive nicdark_display_inline_block nicdark_font_size_13 nicdark_text_align_center nicdark_letter_spacing_1 nicdark_box_sizing_border_box  nicdark_color_white nicdark_first_font nicdark_padding_10_20 nicdark_font_weight_bolder nicdark_bg_orange " href="<?php the_permalink(); ?>"><?php esc_html_e('READ MORE','ngo'); ?></a>

								</div>
							</div>
							<!--END PREVIEW-->

						</div>

					</div>
					<!--#post-->

					<div class="nicdark_section nicdark_height_50"></div>


						
				<?php endwhile; ?>


			<?php else: ?>
	
	            <p><?php esc_html_e('NOTHING FOUND: Search again','ngo'); ?></p>

			<?php endif; ?>



			<!--START pagination-->
			<div class="nicdark_section">

				<?php

		    	the_posts_pagination( array(
					'prev_text'          => esc_html__( 'Prev', 'ngo' ),
					'next_text'          => esc_html__( 'Next', 'ngo' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'ngo' ) . ' </span>',
				) );

				?>

				<div class="nicdark_section nicdark_height_50"></div>
			</div>
			<!--END pagination-->


    	</div>
    	<!--end all posts previews-->

    	<!--sidebar-->
    	<?php if ( is_active_sidebar( 'nicdark_sidebar' ) ) { ?>  
    		
	    	<div class="nicdark_grid_4">
	    		<?php if ( ! get_sidebar( 'nicdark_sidebar' ) ) : ?><?php endif ?>
	    		<div class="nicdark_section nicdark_height_50"></div>
	    	</div>
	    	
    	<?php } ?>
    	<!--end sidebar-->

    	
	</div>
	<!--end container-->

</div>
<!--end section-->

<?php } ?>

<?php get_footer(); ?>