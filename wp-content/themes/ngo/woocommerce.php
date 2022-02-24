<?php get_header(); ?>

<?php  if( function_exists('nicdark_woocommerce')){ do_action("nicdark_woocommerce_nd"); }else{ ?>

<!--start section-->
<div class="nicdark_section nicdark_border_bottom_1_solid_grey">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_grid_12">

            <div class="nicdark_section nicdark_height_80"></div>

            <h1 class="nicdark_font_size_50 nicdark_font_size_40_all_iphone nicdark_line_height_40_all_iphone nicdark_text_align_center nicdark_font_weight_bolder">
                <?php 

                if (is_product()){
                    the_title(); 
                }else{
                    esc_html_e('Shop','ngo');
                }

                ?>
            </h1>

            <div class="nicdark_section nicdark_height_80"></div>

        </div>

    </div>
    <!--end container-->

</div>
<!--end section-->


<div class="nicdark_section nicdark_height_50"></div>


<!--start nicdark_container-->
<div class="nicdark_container nicdark_clearfix">

    
    <div class="nicdark_grid_12">
      
        <!--#post-->
        <div class="nicdark_section nicdark_container_page_php" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <!--start content-->
            <?php woocommerce_content(); ?>
            <!--end content-->

        </div>
        <!--#post-->

    </div>

</div>
<!--end container-->


<div class="nicdark_section nicdark_height_60"></div> 

<?php } ?>     

<?php get_footer(); ?>