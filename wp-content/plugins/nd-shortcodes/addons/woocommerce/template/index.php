<?php


//put page on theme
add_action('nicdark_woocommerce_nd','nicdark_woocommerce');
function nicdark_woocommerce() {

    if ( is_product() ){

        include "single/index.php";

    }else{

        include "archive/index.php";

    }
	
}

