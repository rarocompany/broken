<?php


//get values
$nd_options_customizer_woocommerce_archive_products_header_image_display = get_option( 'nd_options_customizer_woocommerce_archive_products_header_image_display' );
if ( $nd_options_customizer_woocommerce_archive_products_header_image_display == '' ) { $nd_options_customizer_woocommerce_archive_products_header_image_display = 0;  }

$nd_options_customizer_woocommerce_archive_products_header_image = get_option( 'nd_options_customizer_woocommerce_archive_products_header_image' );
if ( $nd_options_customizer_woocommerce_archive_products_header_image == '' ) { 
    $nd_options_customizer_woocommerce_archive_products_header_image_src = '';  
}else{
    $nd_options_customizer_woocommerce_archive_products_header_image_src = wp_get_attachment_url($nd_options_customizer_woocommerce_archive_products_header_image);
}

$nd_options_customizer_woocommerce_archive_products_header_image_position = get_option( 'nd_options_customizer_woocommerce_archive_products_header_image_position' );
if ( $nd_options_customizer_woocommerce_archive_products_header_image_position == '' ) { $nd_options_customizer_woocommerce_archive_products_header_image_position = 'nd_options_background_position_center';  }

//layout
$nd_options_customizer_woocommerce_archive_products_layout = get_option( 'nd_options_customizer_woocommerce_archive_products_layout' );
if ( $nd_options_customizer_woocommerce_archive_products_layout == '' ) { $nd_options_customizer_woocommerce_archive_products_layout = 'nd_options_customizer_woocommerce_archive_full_width';  }


//layout header img
$nd_options_customizer_woocommerce_archive_products_layout_header_img = get_option( 'nd_options_customizer_woocommerce_archive_products_layout_header_img' );
if ( $nd_options_customizer_woocommerce_archive_products_layout_header_img == '' ) { $nd_options_customizer_woocommerce_archive_products_layout_header_img = 'layout-1';  }



if ( $nd_options_customizer_woocommerce_archive_products_header_image_display != 1 ) { 	

    include "layout/".$nd_options_customizer_woocommerce_archive_products_layout_header_img.".php"; 
    
    do_action('nd_options_end_header_img_woocommerce_archive_hook');

} 

?>

<style>
@media only screen and (min-width: 320px) and (max-width: 1199px) {
    .nd_options_woocommerce_sidebar,
    #nd_options_woocommerce_content{
        width: 100% !important;
    }   
}
</style>

<div class="nd_options_section nd_options_height_50"></div>

<!--start nd_options_container-->
<div class=" nd_options_woo_template_archive_<?php echo $nd_options_customizer_woocommerce_archive_products_layout_header_img; ?> nd_options_container nd_options_padding_0 nd_options_box_sizing_border_box nd_options_clearfix">

    <!--left sidebar-->
    <?php if ( $nd_options_customizer_woocommerce_archive_products_layout == 'nd_options_customizer_woocommerce_archive_left_sidebar' ){ ?>

        <div class="nd_options_woocommerce_sidebar nd_options_padding_15 nd_options_float_left nd_options_box_sizing_border_box" style="width:33.33%;">   
            <?php dynamic_sidebar('nd_options_woocommerce_sidebar'); ?>
        </div>   

    <?php } ?>



    <?php 

    if ( $nd_options_customizer_woocommerce_archive_products_layout == 'nd_options_customizer_woocommerce_archive_left_sidebar' OR $nd_options_customizer_woocommerce_archive_products_layout == 'nd_options_customizer_woocommerce_archive_right_sidebar'  ){
        $nd_options_woo_archive_content_width = 'width:66.66%;';    
    }else{
        $nd_options_woo_archive_content_width = 'width:100%;';    
    }

    ?>


    <!--post-->
    <div style="float:left; padding:15px; box-sizing:border-box; <?php esc_html_e($nd_options_woo_archive_content_width); ?>" id="nd_options_woocommerce_content" <?php post_class(); ?>>
    	
        <!--start content-->
        <?php woocommerce_content(); ?>
        <!--end content-->

    </div>
    <!--post-->


    <!--right sidebar-->
    <?php if ( $nd_options_customizer_woocommerce_archive_products_layout == 'nd_options_customizer_woocommerce_archive_right_sidebar' ){ ?>

        <div class="nd_options_woocommerce_sidebar nd_options_padding_15 nd_options_float_left nd_options_box_sizing_border_box" style="float:left; width:33.33%;">   
            <?php dynamic_sidebar('nd_options_woocommerce_sidebar'); ?>
        </div>   

    <?php } ?>

</div>
<!--end container-->

<div class="nd_options_section nd_options_height_50"></div>

	

