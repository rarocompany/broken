<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
 
    <meta charset="<?php bloginfo('charset'); ?>"> 
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        	
<?php wp_head(); ?>	  
</head>  

<body id="start_nicdark_framework" <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!--START theme-->
<div class="nicdark_site nicdark_bg_white <?php if ( is_front_page() ) { echo esc_html("nicdark_front_page"); } ?> ">	
	
<?php if( function_exists('nicdark_headers')){ do_action("nicdark_header_nd"); }else{ ?>

<!--START section-->
<div class="nicdark_section nicdark_bg_greydark">

    <!--start container-->
    <div class="nicdark_container nicdark_clearfix">
        
        <!--START LOGO OR TAGLINE-->
        <?php
            
            $nicdark_customizer_logo_img = get_option( 'nicdark_customizer_logo_img' );
            if ( $nicdark_customizer_logo_img == '' or $nicdark_customizer_logo_img == 0 ) { ?>
                
            <div class="nicdark_grid_2 nicdark_text_align_center_responsive">
                <a href="<?php echo esc_url(home_url()); ?>"><h3 class="nicdark_color_white nicdark_font_size_25 nicdark_font_weight_bolder nicdark_letter_spacing_2 nicdark_margin_top_10"><?php echo esc_html(get_bloginfo( 'name' )); ?></h3></a>
            </div>

        <?php

            }else{ 

                $nicdark_customizer_logo_img = wp_get_attachment_url($nicdark_customizer_logo_img);

            ?>

            <div class="nicdark_grid_2 nicdark_text_align_center_responsive">
                <a href="<?php echo esc_url(home_url()); ?>">
                    <img class="nicdark_section" src="<?php echo esc_url($nicdark_customizer_logo_img); ?>">
                </a>
            </div>

        <?php } ?>
        <!--END LOGO OR TAGLINE-->
        


        <div class="nicdark_grid_10 nicdark_text_align_center_responsive">

            <!--open menu responsive icon-->
            <div class="nicdark_section nicdark_display_none nicdark_display_block_all_iphone">
                <a class="nicdark_open_navigation_1_sidebar_content nicdark_open_navigation_1_sidebar_content" href="#">
                    <img alt="icon-menu" class="" width="25" src="<?php echo get_template_directory_uri(); ?>/img/icon-menu.svg">
                </a>
            </div>
            <!--open menu responsive icon-->



        	<div class="nicdark_section nicdark_navigation_1">        
        		<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>       
        	</div>



        </div>

    </div>
    <!--end container-->

</div>
<!--END section-->


<!--START menu responsive-->
<div class="nicdark_bg_greydark nicdark_navigation_1_sidebar_content nicdark_padding_40 nicdark_box_sizing_border_box nicdark_overflow_hidden nicdark_overflow_y_auto nicdark_transition_all_08_ease nicdark_height_100_percentage nicdark_position_fixed nicdark_width_300 nicdark_right_300_negative nicdark_z_index_999">

    <img alt="icon-close" width="25" class="nicdark_close_navigation_1_sidebar_content nicdark_cursor_pointer nicdark_right_20 nicdark_top_20 nicdark_position_absolute" src="<?php echo get_template_directory_uri(); ?>/img/icon-close-white.svg">

    <div class="nicdark_navigation_1_sidebar">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    </div>

</div>
<!--END menu responsive-->


<?php } ?>

