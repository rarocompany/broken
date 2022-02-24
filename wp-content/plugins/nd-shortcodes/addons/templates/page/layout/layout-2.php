<?php	
	
//get header metabox
$nd_options_meta_box_page_header_img = get_post_meta( get_the_ID(), 'nd_options_meta_box_page_header_img', true );
$nd_options_meta_box_page_header_img_title = get_post_meta( get_the_ID(), 'nd_options_meta_box_page_header_img_title', true );
$nd_options_meta_box_page_header_img_position = get_post_meta( get_the_ID(), 'nd_options_meta_box_page_header_img_position', true );



if ( $nd_options_meta_box_page_header_img != '' ) { ?>	


	<div class="nd_options_section nd_options_background_size_cover <?php echo $nd_options_meta_box_page_header_img_position ?>" style="background-image:url(<?php echo $nd_options_meta_box_page_header_img; ?>);">

        <div class="nd_options_section nd_options_bg_greydark_alpha_2">

            <!--start nd_options_container-->
            <div class="nd_options_container nd_options_clearfix nd_options_text_align_center">


                <div class="nd_options_section nd_options_height_100"></div>

                <div class="nd_options_section nd_options_padding_15 nd_options_box_sizing_border_box">

                    <h1 class="nd_options_color_white nd_options_font_size_45 nd_options_font_size_40_all_iphone nd_options_line_height_40_all_iphone nd_options_first_font"><?php echo $nd_options_meta_box_page_header_img_title; ?></h1>

                </div>

                <div class="nd_options_section nd_options_height_100"></div>

            </div>
            <!--end container-->

        </div>

    </div>


    <?php do_action('nd_options_end_header_img_page_hook'); ?>


<?php } ?>



<!--page margin-->
<?php 

if ( get_post_meta( get_the_ID(), 'nd_options_meta_box_page_margin', true ) != 1 ) { 
	
	$nd_options_meta_box_page_margin = '<div class="nd_options_section nd_options_height_50"></div>';

}else{
	$nd_options_meta_box_page_margin = '';
	
} 

echo $nd_options_meta_box_page_margin; 

?>

<!--start nd_options_container-->
<div class="nd_options_container nd_options_padding_0_15 nd_options_box_sizing_border_box nd_options_clearfix">

	<?php if(have_posts()) :
	    while(have_posts()) : the_post(); ?>
	        
	        <!--post-->
	        <div style="float:left; width:100%;" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	       		<!--automatic title-->
	        	<?php if ( get_post_meta( get_the_ID(), 'nd_options_meta_box_page_title', true ) != 1 ) { echo '<h1 class=""><strong>'.get_the_title().'</strong></h1><div class="nd_options_section nd_options_height_20"></div>'; } ?>
	        	
	            <!--start content-->
	            <?php the_content(); ?>
	            <!--end content-->

	        </div>
	        <!--post-->

	    <?php endwhile; ?>
	<?php endif; ?>

</div>
<!--end container-->

<!--page margin-->
<?php echo $nd_options_meta_box_page_margin; 

	