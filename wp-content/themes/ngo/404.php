<?php get_header(); ?>

<?php if( function_exists('nicdark_404_content')){ do_action( "nicdark_404_nd" ); }else{ ?>

<div class="nicdark_section nicdark_height_150"></div>

<section class="nicdark_section">
    <div class="nicdark_container nicdark_clearfix">
        <div class="nicdark_grid_12 nicdark_text_align_center">

        	<h1 class="nicdark_font_size_100"><strong>404</strong></h1>
        	<div class="nicdark_section nicdark_height_20"></div>
            <p><?php esc_html_e('That page can not be found','ngo'); ?></p>
                 
        </div>    
    </div>
</section>

<div class="nicdark_section nicdark_height_150"></div>

<?php } ?>

<?php get_footer(); ?>