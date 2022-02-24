<?php

$nd_options_woocommerce_enable = get_option('nd_options_woocommerce_enable');

//include all files
if ( $nd_options_woocommerce_enable == 1 ) { 
	include "template/index.php"; 
	include "metabox/index.php"; 
	include "customizer/index.php";
	include "vc/index.php";

	// Sidebar
	function nd_options_woocommerce_sidebars() {

	    // Sidebar Main
	    register_sidebar(array(
	        'name' =>  esc_html__('WooCommerce Sidebar','nd-shortcodes'),
	        'id' => 'nd_options_woocommerce_sidebar',
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3>',
	        'after_title' => '</h3>',
	    ));

	}
	add_action( 'widgets_init', 'nd_options_woocommerce_sidebars' );

	//add lightbox on product single page
	add_theme_support( 'wc-product-gallery-lightbox' );

}
