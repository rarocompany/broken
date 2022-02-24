<?php 

//get all datas
$nd_options_customizer_footer_2_bg = get_option( 'nd_options_customizer_footer_2_bg' );
if ( $nd_options_customizer_footer_2_bg == '' ) { $nd_options_customizer_footer_2_bg = '#444444';  }

$nd_options_customizer_footer_2_border = get_option( 'nd_options_customizer_footer_2_border' );
if ( $nd_options_customizer_footer_2_border == '' ) { $nd_options_customizer_footer_2_border = '#595959';  }

$nd_options_customizer_footer_2_text_color = get_option( 'nd_options_customizer_footer_2_text_color' );
if ( $nd_options_customizer_footer_2_text_color == '' ) { $nd_options_customizer_footer_2_text_color = '#a3a3a3';  }

$nd_options_customizer_footer_2_left_content = get_option( 'nd_options_customizer_footer_2_left_content' );
if ( $nd_options_customizer_footer_2_left_content == '' ) { $nd_options_customizer_footer_2_left_content = '© Copyright 2016 nicdark.com';  }

$nd_options_customizer_footer_2_right_content = get_option( 'nd_options_customizer_footer_2_right_content' );
if ( $nd_options_customizer_footer_2_right_content == '' ) { $nd_options_customizer_footer_2_right_content = 'Wonderful NicDark WP Theme';  }

$nd_options_customizer_footer_2_logo = get_option( 'nd_options_customizer_footer_2_logo' );
if ( $nd_options_customizer_footer_2_logo == '' ) { 
    $nd_options_customizer_footer_2_logo = esc_url(plugins_url('logo.png', __FILE__ ));
}else{
    $nd_options_customizer_footer_2_logo = wp_get_attachment_url($nd_options_customizer_footer_2_logo);
}

$nd_options_customizer_footer_2_social_content = get_option( 'nd_options_customizer_footer_2_social_content' );
$nd_options_customizer_footer_2_social_content = str_replace("&#039;","'",$nd_options_customizer_footer_2_social_content);
if ( $nd_options_customizer_footer_2_social_content == '' ) { $nd_options_customizer_footer_2_social_content = '';  }

?>



<!--START footer-->
<div id="nd_options_footer_2" style="background-color: <?php echo $nd_options_customizer_footer_2_bg; ?>" class="nd_options_section">

    <div class="nd_options_section nd_options_height_50"></div>

    <!--start nd_options_container-->
        <div class="nd_options_container nd_options_clearfix">
    
        
        <div class="grid nd_options_grid_12 nd_options_text_align_center">
            
            <div class="nd_options_section">
                <a href="<?php echo home_url(); ?>"><img alt="" width="200" class="" src="<?php echo $nd_options_customizer_footer_2_logo; ?>"></a>
            </div>
            
            <div class="nd_options_section nd_options_height_20"></div>
            
            <div style="color: <?php echo $nd_options_customizer_footer_2_text_color; ?>" class="nd_options_display_inline_block">
                
               <?php echo do_shortcode($nd_options_customizer_footer_2_social_content); ?>

            </div>

        </div>

    </div>
    <!--end container-->

    <div class="nd_options_section nd_options_height_50"></div>

</div>
<!--END footer-->


<!--START copyright-->
<div id="nd_options_footer_2_copyright" style="background-color: <?php echo $nd_options_customizer_footer_2_bg; ?>" class="nd_options_section">

    <!--start nd_options_container-->
        <div style="border-top: 1px solid <?php echo $nd_options_customizer_footer_2_border; ?> " class="nd_options_container nd_options_clearfix">
    
        
        <div class="grid nd_options_grid_6 nd_options_text_align_center_responsive">
            <p class="nd_options_font_size_14" style="color: <?php echo $nd_options_customizer_footer_2_text_color; ?>"><?php echo $nd_options_customizer_footer_2_left_content; ?></p>
        </div>

        <div class="grid nd_options_grid_6 nd_options_text_align_right nd_options_text_align_center_responsive">
            <p class="nd_options_font_size_14" style="color: <?php echo $nd_options_customizer_footer_2_text_color; ?>"><?php echo $nd_options_customizer_footer_2_right_content; ?></p>    
        </div>

   
    </div>
    <!--end container-->

</div>
<!--END copyright-->