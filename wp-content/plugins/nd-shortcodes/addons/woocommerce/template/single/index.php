<?php

	
$nd_options_meta_box_woocommerce_header_img = get_post_meta( get_the_ID(), 'nd_options_meta_box_woocommerce_header_img', true );
$nd_options_meta_box_woocommerce_header_img_title = get_post_meta( get_the_ID(), 'nd_options_meta_box_woocommerce_header_img_title', true );
$nd_options_meta_box_woocommerce_header_img_position = get_post_meta( get_the_ID(), 'nd_options_meta_box_woocommerce_header_img_position', true );


//layout header img
$nd_options_customizer_woocommerce_single_product_layout_header_img = get_option( 'nd_options_customizer_woocommerce_single_product_layout_header_img' );
if ( $nd_options_customizer_woocommerce_single_product_layout_header_img == '' ) { $nd_options_customizer_woocommerce_single_product_layout_header_img = 'layout-1';  }


if ( $nd_options_meta_box_woocommerce_header_img != '' ) {

    include "layout/".$nd_options_customizer_woocommerce_single_product_layout_header_img.".php"; 
	
    do_action('nd_options_end_header_img_woocommerce_single_hook');

} ?>


<div class="nd_options_section nd_options_height_50"></div>

<!--start nd_options_container-->
<div class=" nd_options_woo_template_single_<?php echo $nd_options_customizer_woocommerce_single_product_layout_header_img; ?> nd_options_container nd_options_padding_0_15 nd_options_box_sizing_border_box nd_options_clearfix">

    <!--post-->
    <div style="float:left; width:100%;" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    	
        <!--start content-->
        <?php woocommerce_content(); ?>
        <!--end content-->

    </div>
    <!--post-->

</div>
<!--end container-->

<div class="nd_options_section nd_options_height_50"></div>

	

