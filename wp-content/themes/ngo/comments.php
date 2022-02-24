<?php if( function_exists('nicdark_comments')){ do_action("nicdark_comments_nd"); }else{ ?>

<?php if ( post_password_required() ) { return; } ?>

<?php if ( have_comments() ) : ?>

	<!--START comment-->
    <div id="nicdark_comments" class="nicdark_section nicdark_margin_top_50">

		<h3><strong><?php comments_number(esc_html__('No Comments','ngo'),esc_html__('One Comment','ngo'),esc_html__( '% Comments','ngo') );?></strong></h3>
		
		<div class="nicdark_section nicdark_height_10"></div>
	
		<ul class="nicdark_comments_ul nicdark_comments_php">
			<?php wp_list_comments(); ?>
		</ul>

		<!--start navigation comment-->
		<div class="navigation">
			<div class="alignleft"><?php previous_comments_link() ?></div>
			<div class="alignright"><?php next_comments_link() ?></div>
		</div>
		<!--end navigation comment-->

		<?php if ( comments_open() ) : ?>
			
			<!--START comment form-->
		    <div id="nicdark_comments_form" class="nicdark_section nicdark_margin_top_20">
				<?php comment_form(); ?>
			</div>
			<!--END comment form-->

		<?php endif; ?>


	</div>
    <!--END comment-->

<?php else : ?>
	
	
	<?php if ( comments_open() ) : ?>

		<!--START comment form-->
	    <div id="nicdark_comments_form" class="nicdark_section nicdark_margin_top_20">
			<?php comment_form(); ?>
		</div>
		<!--END comment form-->

	<?php endif;


endif; ?>

<?php } ?> 