<?php 

//get all datas
$nd_options_customizer_footer_4_bg = get_option( 'nd_options_customizer_footer_4_bg' );
if ( $nd_options_customizer_footer_4_bg == '' ) { $nd_options_customizer_footer_4_bg = '#fff';  }

$nd_options_customizer_footer_4_copyright_bg = get_option( 'nd_options_customizer_footer_4_copyright_bg' );
if ( $nd_options_customizer_footer_4_copyright_bg == '' ) { $nd_options_customizer_footer_4_copyright_bg = '#fff';  }

$nd_options_customizer_footer_4_border = get_option( 'nd_options_customizer_footer_4_border' );
if ( $nd_options_customizer_footer_4_border == '' ) { $nd_options_customizer_footer_4_border = '#f1f1f1';  }

$nd_options_customizer_footer_4_left_content = get_option( 'nd_options_customizer_footer_4_left_content' );
$nd_options_customizer_footer_4_left_content = str_replace("&#039;","'",$nd_options_customizer_footer_4_left_content);
if ( $nd_options_customizer_footer_4_left_content == '' ) { $nd_options_customizer_footer_4_left_content = '© Copyright 2016 nicdark.com';  }

$nd_options_customizer_footer_4_right_content = get_option( 'nd_options_customizer_footer_4_right_content' );
$nd_options_customizer_footer_4_right_content = str_replace("&#039;","'",$nd_options_customizer_footer_4_right_content);
if ( $nd_options_customizer_footer_4_right_content == '' ) { $nd_options_customizer_footer_4_right_content = 'Wonderful Theme';  }

$nd_options_customizer_footer_4_columns = get_option( 'nd_options_customizer_footer_4_columns' );
if ( $nd_options_customizer_footer_4_columns == '' ) { $nd_options_customizer_footer_4_columns = '1';  }

$nd_options_customizer_footer_4_bg_image = get_option( 'nd_options_customizer_footer_4_bg_image' );
if ( $nd_options_customizer_footer_4_bg_image == '' ) { 
    $nd_options_customizer_footer_4_bg_image = '';  
}else{
    $nd_options_customizer_footer_4_bg_image = 'background-image:url('.wp_get_attachment_url($nd_options_customizer_footer_4_bg_image).'); background-repeat:no-repeat; background-size:cover; background-position:center; ';
}

$nd_options_customizer_footer_4_copyright_disable = get_option( 'nd_options_customizer_footer_4_copyright_disable' );
if ( $nd_options_customizer_footer_4_copyright_disable == '' ) { $nd_options_customizer_footer_4_copyright_disable = 0;  }

?>



<!--START footer-->
<div style="background-color:<?php echo $nd_options_customizer_footer_4_bg; ?>; border-top: 1px solid <?php echo $nd_options_customizer_footer_4_border; ?>; <?php echo $nd_options_customizer_footer_4_bg_image; ?> " id="nd_options_footer_4" class="nd_options_section">

    <div class="nd_options_section nd_options_height_50"></div>

    	<!--start nd_options_container-->
        <div class="nd_options_container nd_options_clearfix">
    
            <?php

                if ( $nd_options_customizer_footer_4_columns == '1' ) { ?>
                    
                    <div class="grid nd_options_grid_12 wpb_widgetised_column"> <?php dynamic_sidebar("nd_options_footer_4_column_1"); ?> </div>
                
                <?php } elseif ( $nd_options_customizer_footer_4_columns == '2' ){ ?>
                    
                    <div class="grid nd_options_grid_6 wpb_widgetised_column"> <?php dynamic_sidebar("nd_options_footer_4_column_1"); ?> </div>
                    <div class="grid nd_options_grid_6 wpb_widgetised_column"> <?php dynamic_sidebar("nd_options_footer_4_column_2"); ?> </div>
                    
                <?php }elseif ( $nd_options_customizer_footer_4_columns == '3' ){ ?>
                    
                    <div class="grid nd_options_grid_4 wpb_widgetised_column"> <?php dynamic_sidebar("nd_options_footer_4_column_1"); ?> </div>
                    <div class="grid nd_options_grid_4 wpb_widgetised_column"> <?php dynamic_sidebar("nd_options_footer_4_column_2"); ?> </div>
                    <div class="grid nd_options_grid_4 wpb_widgetised_column"> <?php dynamic_sidebar("nd_options_footer_4_column_3"); ?> </div>
                    
                <?php }else{ ?>
                    
                    <div class="grid nd_options_grid_3 wpb_widgetised_column"> <?php dynamic_sidebar("nd_options_footer_4_column_1"); ?> </div>
                    <div class="grid nd_options_grid_3 wpb_widgetised_column"> <?php dynamic_sidebar("nd_options_footer_4_column_2"); ?> </div>
                    <div class="grid nd_options_grid_3 wpb_widgetised_column"> <?php dynamic_sidebar("nd_options_footer_4_column_3"); ?> </div>
                    <div class="grid nd_options_grid_3 wpb_widgetised_column"> <?php dynamic_sidebar("nd_options_footer_4_column_4"); ?> </div>
                    
                <?php }

            ?>
            
	    </div>
	    <!--end container-->

    <div class="nd_options_section nd_options_height_10"></div>

</div>
<!--END footer-->



<?php 

if ( $nd_options_customizer_footer_4_copyright_disable != 1 ) { ?>


    <!--START copyright-->
    <div style="background-color:<?php echo $nd_options_customizer_footer_4_copyright_bg; ?>;" id="nd_options_footer_4_copyright" class="nd_options_section">

        <!--start nd_options_container-->
        <div style="border-top: 1px solid <?php echo $nd_options_customizer_footer_4_border; ?> " class="nd_options_container nd_options_clearfix">
        
            
            <div class="grid nd_options_grid_6 nd_options_text_align_center_responsive">
                <p class="nd_options_font_size_14 nd_options_line_height_25_responsive"><?php echo do_shortcode($nd_options_customizer_footer_4_left_content); ?></p>
            </div>

            <div class="grid nd_options_grid_6 nd_options_text_align_right nd_options_text_align_center_responsive">
                <p class="nd_options_font_size_14 nd_options_line_height_25_responsive"><?php echo do_shortcode($nd_options_customizer_footer_4_right_content); ?></p>    
            </div>
       
        </div>
        <!--end container-->

    </div>
    <!--END copyright-->


<?php } ?>

