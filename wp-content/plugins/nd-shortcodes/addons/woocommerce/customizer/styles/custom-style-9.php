<?php


//get font family H
$nd_options_customizer_font_family_h = get_option( 'nd_options_customizer_font_family_h', 'Jost:400,700' );
$nd_options_font_family_h_array = explode(":", $nd_options_customizer_font_family_h);
$nd_options_font_family_h = str_replace("+"," ",$nd_options_font_family_h_array[0]);

//get font family P
$nd_options_customizer_font_family_p = get_option( 'nd_options_customizer_font_family_p', 'Jost:400,700' );
$nd_options_font_family_p_array = explode(":", $nd_options_customizer_font_family_p);
$nd_options_font_family_p = str_replace("+"," ",$nd_options_font_family_p_array[0]);

//get font color
$nd_options_customizer_font_color_h = get_option( 'nd_options_customizer_font_color_h', '#282828' );
$nd_options_customizer_font_color_p = get_option( 'nd_options_customizer_font_color_p', '#5c5c5c' );


//get plugin colors
$nd_options_customizer_woocommerce_color_green = get_option( 'nd_options_customizer_woocommerce_color_green', '#22b6af' );
$nd_options_customizer_woocommerce_color_violet = get_option( 'nd_options_customizer_woocommerce_color_violet', '#f2a922' );
$nd_options_customizer_woocommerce_color_greydark = get_option( 'nd_options_customizer_woocommerce_color_greydark', '#282828' );
$nd_options_customizer_woocommerce_color_red = get_option( 'nd_options_customizer_woocommerce_color_red', '#f24a29' );
$nd_options_customizer_woocommerce_color_blue = get_option( 'nd_options_customizer_woocommerce_color_blue', '#2272b6' );

?>


<style>

	/*-------------------------WooCommerce for 3.x-------------------------*/

	.post-type-archive-product.woocommerce .product { text-align: left; }

	/*title product*/
	.woocommerce ul.products li.product a h2.woocommerce-loop-product__title{font-size: 23px;line-height: 23px;padding: 10px 0px; font-weight: bold; letter-spacing: 1px;}

	/*image*/
	.woocommerce.woocommerce-page .product figure {margin: 0px;}

	/*price*/
	.woocommerce.woocommerce-page .product .summary.entry-summary  .price {font-size: 30px;line-height: 30px;color: <?php echo $nd_options_customizer_font_color_p;  ?>;	font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif;}
	.woocommerce.woocommerce-page .product .summary.entry-summary  .price span { display: inline-block !important; }
	.woocommerce.woocommerce-page .product .summary.entry-summary  .price .woocommerce-Price-amount{display: table;}
	.woocommerce.woocommerce-page .product .summary.entry-summary  .price .woocommerce-Price-amount .woocommerce-Price-currencySymbol{display: table-cell;vertical-align: top;font-size: 20px;line-height: 20px;padding-right: 10px;}
	.woocommerce.woocommerce-page .product .summary.entry-summary .price ins{ text-decoration: none;font-weight: normal;}
	.woocommerce.woocommerce-page .product .summary.entry-summary .price del{ float: left; margin-right: 20px;}


	.woocommerce .star-rating {
		height: 15px;
    	line-height: 15px;
    	width: 80px;
	}


	.woocommerce.post-type-archive-product .star-rating {
    	width: 70px;
	}


	/*-------------------------WooCommerce Archive Page-------------------------*/
	/*page-title*/
	.woocommerce.woocommerce-page.post-type-archive-product h1.page-title,
	.woocommerce.woocommerce-page.tax-product_cat h1.page-title,
	.woocommerce.woocommerce-page.tax-product_tag h1.page-title
	{
		display: none;
	}

	/*result-count*/
	.woocommerce.woocommerce-page.post-type-archive-product p.woocommerce-result-count,
	.woocommerce.woocommerce-page.tax-product_cat p.woocommerce-result-count,
	.woocommerce.woocommerce-page.tax-product_tag p.woocommerce-result-count
	{
		display: none;
	}
	
	/*woocommerce-ordering*/
	.woocommerce.woocommerce-page.post-type-archive-product form.woocommerce-ordering,
	.woocommerce.woocommerce-page.tax-product_cat form.woocommerce-ordering,
	.woocommerce.woocommerce-page.tax-product_tag form.woocommerce-ordering
	{
		display: none;
	}

	/*img product*/
	.woocommerce ul.products li.product a img{
		margin-bottom: 10px;
	}

	/*onsale*/
	.woocommerce ul.products li.product a span.onsale{
		top:20px !important;
		right: 20px !important;	
		left: initial !important;
	}

	/*title product*/
	.woocommerce ul.products li.product a h3{
		font-size: 20px;
		line-height: 20px;
		padding: 10px 0px;
	}

	/*price*/
	.woocommerce ul.products li.product a .price{
		color: <?php echo $nd_options_customizer_font_color_p;  ?>!important;
		font-size: 20px !important;
		line-height: 20px !important;
		margin-top: 25px;
		letter-spacing: 1px;
	}
	.woocommerce ul.products li.product a .price del,
	.woocommerce ul.products li.product a .price ins{
		font-weight: normal;
	}


	.post-type-archive-product.woocommerce ul.products li.product .button.product_type_variable.add_to_cart_button,
	.post-type-archive-product.woocommerce ul.products li.product .button.product_type_simple.add_to_cart_button,
	.post-type-archive-product.woocommerce ul.products li.product .button.product_type_external
	 { 
		font-size: 13px !important;
	    letter-spacing: 1px;
	    font-weight: bold !important;
	    padding: 10px 20px;
	    border-radius: 0px !important;
	    color: #fff !important;
	    background-color: <?php echo $nd_options_customizer_woocommerce_color_green;  ?> !important;
	    border-width: 0px !important;
	}



	/*-------------------------WooCommerce Single Product-------------------------*/

	/*gallery*/
	.woocommerce div.product div.images .woocommerce-product-gallery__image:nth-child(n+2){
		width: 25%;
	    display: inline-block;
	    border: 4px solid #fff;
	    box-sizing: border-box;
	    margin-top: 4px;
	}


	/*.woocommerce.single-product .related.products > h2:after {
		width: 30px;
		height: 2px;
		background-color: #f1f1f1;
		content : "";
		position: absolute;
		left: 0px;
		bottom: -20px;
	}*/
	.woocommerce.single-product .related.products ul li{
		text-align: center;
	}
	.woocommerce.single-product .related.products > h2{
		position: relative;
		margin-bottom: 35px;
	}


	.woocommerce.single-product .woocommerce-Reviews .comment-text .meta {
		color: <?php echo $nd_options_customizer_font_color_h; ?> !important;
	}
	.woocommerce.single-product .woocommerce-Reviews .comment-text .meta strong {
		font-weight: normal;
	}


	.woocommerce.single-product table.shop_attributes {
		text-align: left;
	}
	.woocommerce.single-product table.shop_attributes th {
		font-weight: normal;
		color: <?php echo $nd_options_customizer_font_color_h; ?>;
    	padding: 15px 20px;	
	}
	.woocommerce.single-product table.shop_attributes th,
	.woocommerce.single-product table.shop_attributes td {
    	border-bottom: 1px solid #f1f1f1;
	}
	.woocommerce.single-product table.shop_attributes{
		border-top: 1px solid #f1f1f1;
	}


	.woocommerce.single-product .summary.entry-summary .woocommerce-product-rating {
		margin-top: -15px;
	}


	.woocommerce.single-product .woocommerce-product-details__short-description {
		margin-top: 10px;
	    display: inline-block;
	    margin-bottom: 10px;
	}

	/*title*/
	.woocommerce.single-product .product_title{
		font-weight: normal;
		margin-bottom: 30px;
	}


	.woocommerce.single-product .variations_form.cart p.stock.out-of-stock {
		background-color: <?php echo $nd_options_customizer_woocommerce_color_red; ?>; 
		color: #fff;
		padding: 5px 10px;	
	}

	
	/*tab description*/
	.woocommerce-Tabs-panel.woocommerce-Tabs-panel--description{
		margin-bottom: 60px !important;
	}
	.woocommerce-Tabs-panel.woocommerce-Tabs-panel--description h2{
		font-size: 20px;
		line-height: 20px;
		font-weight: normal;
		margin-bottom: 20px;
	}

	/*tab additional*/
	.woocommerce-Tabs-panel--additional_information h2 {
		font-weight: normal;
		font-size: 20px;
		margin-bottom: 20px;
	}

	/*tab reviews*/
	.woocommerce-Tabs-panel.woocommerce-Tabs-panel--reviews{
		margin-bottom: 60px !important;
	}
	.woocommerce-Tabs-panel.woocommerce-Tabs-panel--reviews .woocommerce-Reviews #comments h2{
		font-size: 20px;
		line-height: 20px;
		font-weight: normal;
		margin-bottom: 40px;		
	}
	.woocommerce-Tabs-panel.woocommerce-Tabs-panel--reviews .woocommerce-Reviews #comments ol.commentlist{
		margin: 0px;
		padding: 0px;	
	}
	.woocommerce-Tabs-panel.woocommerce-Tabs-panel--reviews .woocommerce-Reviews #comments ol.commentlist li{
		border-bottom: 1px solid #f1f1f1 !important;	
	}
	.woocommerce-Tabs-panel.woocommerce-Tabs-panel--reviews .woocommerce-Reviews #comments ol.commentlist li .avatar{
	    border: 0px !important;
	    padding: 0px !important;
	    border-radius: 100%;
	    width: 40px !important;
	}
	.woocommerce-Tabs-panel.woocommerce-Tabs-panel--reviews .woocommerce-Reviews #comments ol.commentlist li div .comment-text{
		border: 0px solid #f1f1f1 !important;
    	padding: 15px 10px !important;
	}
	.woocommerce-Tabs-panel.woocommerce-Tabs-panel--reviews .woocommerce-Reviews #comments ol.commentlist li div .comment-text .meta{
		font-size: 16px !important;
		line-height: 16px !important;
		font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif;
		font-weight: normal;
	}
	.woocommerce-Tabs-panel.woocommerce-Tabs-panel--reviews .woocommerce-Reviews #review_form .submit{
		background-color: <?php echo $nd_options_customizer_woocommerce_color_green; ?> !important; 
		border-radius: 0px !important;
		font-weight: normal;
		padding: 10px 20px !important;
		text-transform: uppercase;
		font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif;
		color: #fff !important;	 	      
	}

	/*top description*/
	.woocommerce.woocommerce-page .product.type-product .summary.entry-summary div p{
		margin: 20px 0px;
	}

	/*button add to cart*/
	.woocommerce.woocommerce-page .product .summary.entry-summary form .single_add_to_cart_button{
		background-color: <?php echo $nd_options_customizer_woocommerce_color_green; ?>; 
		border-radius: 3px;
		padding: 10px 20px;
		text-transform: uppercase;
		font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif;
	}

	/*qnt form*/
	.woocommerce.woocommerce-page .product .summary.entry-summary form div.quantity{
		margin-right: 20px;
	}

	/*product_meta*/
	.woocommerce.woocommerce-page .product .summary.entry-summary .product_meta{
		color: <?php echo $nd_options_customizer_font_color_h;  ?>;	
	}
	.woocommerce.woocommerce-page .product .summary.entry-summary .product_meta > span{
		font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif;
		display: block;
	}
	.woocommerce.woocommerce-page .product .summary.entry-summary .product_meta span a{
		padding: 8px;
	    border: 1px solid #f1f1f1;
	    font-size: 13px;
	    line-height: 13px;
	    display: inline-block;
	    margin: 5px 10px;
	    margin-left: 0px;
	    border-radius: 3px;	
	}


	/*sku*/
	.woocommerce.woocommerce-page .product .summary.entry-summary .product_meta .sku_wrapper span.sku{
		padding: 8px;
	    border: 1px solid #f1f1f1;
	    font-size: 13px;
	    line-height: 13px;
	    display: inline-block;
	    margin: 5px 10px;
	    margin-left: 0px;
	    border-radius: 0px;
	    color: <?php echo $nd_options_customizer_font_color_p;  ?>;
	    font-family: '<?php echo $nd_options_font_family_p; ?>', sans-serif !important;	 
	}
	
	/*variations*/
	.woocommerce.woocommerce-page .product .summary.entry-summary .variations .value .reset_variations{
		background-color: <?php echo $nd_options_customizer_woocommerce_color_red; ?>;
	    margin: 0px;
	    padding: 8px;
	    color: #fff;
	    text-transform: uppercase;
	    font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif;
	    font-size: 13px;
	    line-height: 13px;
	    border-radius: 0px;
	}
	.woocommerce.woocommerce-page .product .summary.entry-summary .variations .label label{
		font-size: 16px;
		line-height: 16px;
		color: <?php echo $nd_options_customizer_font_color_h;  ?>; 
		font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif;
		font-weight: normal;	
	}

	/*price*/
	.woocommerce.woocommerce-page .product .summary.entry-summary div .price {
		font-size: 30px;
		line-height: 30px;
		color: <?php echo $nd_options_customizer_font_color_p;  ?>;	
		font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif;
	}

	.woocommerce.woocommerce-page .product .single_variation_wrap .woocommerce-variation.single_variation {
		margin-top: 30px;
    	margin-bottom: 30px;
	}

	.woocommerce.woocommerce-page .product .summary.entry-summary div .price .woocommerce-Price-amount{
		display: table;
	}
	.woocommerce.woocommerce-page .product .summary.entry-summary div .price .woocommerce-Price-amount .woocommerce-Price-currencySymbol{
	    display: table-cell;
	    vertical-align: top;
	    font-size: 20px;
	    line-height: 20px;
	    padding-right: 10px;
	}
	.woocommerce.woocommerce-page .product .summary.entry-summary div .price ins{
	    text-decoration: none;
	    font-weight: normal;
	}
	.woocommerce.woocommerce-page .product .summary.entry-summary div .price del{
	    float: left;
	    margin-right: 20px;
	}
	
	/*tab*/
	.woocommerce.woocommerce-page .product .woocommerce-tabs ul{
		margin: 0px 0px 40px 0px !important;
		padding: 0px !important;
		border-bottom: 1px solid #f1f1f1;
		overflow: visible !important;
	}
	.woocommerce.woocommerce-page .product .woocommerce-tabs ul:before{
		border-bottom: 0px solid #f1f1f1 !important;
	}
	.woocommerce.woocommerce-page .product .woocommerce-tabs ul li{
		background-color: #fff !important;
		border: 0px !important;
		margin: 0px !important;
	}
	.woocommerce.woocommerce-page .product .woocommerce-tabs ul li a{
		color: <?php echo $nd_options_customizer_font_color_h;  ?> !important;	
		font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif !important;	
		font-size: 17px !important;
		line-height: 17px;
		font-weight: normal !important;
		padding: 20px 10px !important;
	}
	.woocommerce.woocommerce-page .product .woocommerce-tabs ul li.active{
		box-shadow: 0px 1px 0px <?php echo $nd_options_customizer_woocommerce_color_green; ?> !important;
	}
	.woocommerce.woocommerce-page .product .woocommerce-tabs ul li.active:before,
	.woocommerce.woocommerce-page .product .woocommerce-tabs ul li.active:after,
	.woocommerce.woocommerce-page .product .woocommerce-tabs ul li:after,
	.woocommerce.woocommerce-page .product .woocommerce-tabs ul li:before{
		display: none;
	}


	/*-------------------------WooCommerce General-------------------------*/
	/*onsale*/
	.woocommerce span.onsale {
		top:20px !important;
		left: 20px !important;
	    border-radius: 3px;
	    min-width: initial;
	    min-height: initial;
	    padding: 8px;
	    line-height: 13px;
	    font-size: 13px;
	    text-transform: uppercase;
	    font-weight: normal;
	    font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif;
	    background-color: <?php echo $nd_options_customizer_woocommerce_color_green; ?>;
	}

	/*button*/
	.add_to_cart_button,
	.button.product_type_variable,
	.button.product_type_grouped,
	.button.product_type_external{
		font-size: 13px !important;
		line-height: 13px !important;
		color: <?php echo $nd_options_customizer_font_color_p;  ?>!important;
		font-weight: normal !important;
		text-transform: uppercase;
		border-radius: 3px !important;
		border: 1px solid #f1f1f1 !important;
		background-color: #fff !important;
		font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif !important;
	}
	.added_to_cart{
		background-color: <?php echo $nd_options_customizer_woocommerce_color_green; ?> !important; 
		color: #fff !important;
		text-transform: uppercase;
		font-size: 13px !important;
		line-height: 13px !important;
		margin: 0px;
		margin-left: 5px;
		padding: .618em 1em !important;
		font-weight: normal !important;
		border-radius: 0px !important;
		font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif !important;	
	}


	/*return-to-shop*/
	.return-to-shop .button{
		background-color: <?php echo $nd_options_customizer_woocommerce_color_green; ?> !important; 
		border-radius: 0px !important;
		text-transform: uppercase;
		font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif;	
		color:#fff !important;
		margin-top: 20px !important;
		font-weight: normal !important;
    	padding: 15px 20px !important;
	}


	/*qnt form*/
	.woocommerce .quantity .qty{
		min-width: 100px;
		height: 34px;
	}


	/*woocommerce-pagination*/
	.woocommerce nav.woocommerce-pagination ul{
		border: 0px;
	}
	.woocommerce nav.woocommerce-pagination ul li{
		border: 0px;
	}
	.woocommerce nav.woocommerce-pagination ul li span.current{
		background-color: #fff;
		color: <?php echo $nd_options_customizer_font_color_h;  ?>!important;
		font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif !important;
		font-size: 20px;
		line-height: 20px;
		font-weight: normal;
		padding: 5px
	}
	.woocommerce nav.woocommerce-pagination ul li a{
		font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif !important;
		color: <?php echo $nd_options_customizer_font_color_p;  ?>!important;	
		font-size: 20px;
		line-height: 20px;
		font-weight: normal;
		padding: 5px;
	}
	.woocommerce nav.woocommerce-pagination ul li a:hover{
		background-color: #fff;
	}


	/*related products*/
	.related.products h2{
		margin-bottom: 25px;
		font-weight: normal;
	}

	.woocommerce.single-product .related.products .star-rating { display: none; }

	/*upsells products*/
	.up-sells.upsells.products h2{
		margin-bottom: 25px;	
	}

	/*reviews link*/
	.woocommerce-review-link{
		display: none;
	}

	/*woocommerce-message*/
	.woocommerce-message{
		border-top: 0px;
		background-color: <?php echo $nd_options_customizer_woocommerce_color_green; ?>;
		border-radius: 0px;
		color: #fff;	
		line-height: 36px;	
	}
	.woocommerce-message:before{
		color: #fff;	
	}
	.woocommerce-message a{
		background-color: <?php echo $nd_options_customizer_woocommerce_color_greydark; ?> !important;
	    border-radius: 0px !important;
	    color: #fff !important;
	    text-transform: uppercase;
	    padding: 10px 20px !important;
	    font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif;		
	}

	/*woocommerce-error*/
	.woocommerce-error{
		border-top: 0px;
		background-color: <?php echo $nd_options_customizer_woocommerce_color_red; ?>;
		border-radius: 0px;
		color: #fff;	
		line-height: 36px;		
	}
	.woocommerce-checkout .woocommerce-error li strong{
		font-weight: normal;	
	}
	.woocommerce-error:before{
		color: #fff;	
	}
	.woocommerce-error a{
		color: #fff;
		text-decoration: underline;		
	}

	/*woocommerce-info*/
	.woocommerce-info{
		border-top: 0px;
		background-color: <?php echo $nd_options_customizer_woocommerce_color_blue; ?>;
		border-radius: 0px;
		color: #fff !important;	
		line-height: 36px;		
	}
	.woocommerce-info a{
		color: #fff;
		text-decoration: underline;		
	}
	.woocommerce-info:before{
		color: #fff;	
	}

	/*required*/
	.woocommerce form .form-row .required{
		color: <?php echo $nd_options_customizer_font_color_p; ?>;
	}
	.woocommerce form .form-row.woocommerce-invalid label{
		color: <?php echo $nd_options_customizer_font_color_p; ?>;	
	}


	/*-------------------------WooCommerce Cart-------------------------*/
	.woocommerce-cart .woocommerce table.shop_table thead tr th {
		font-weight: normal;
		color: <?php echo $nd_options_customizer_font_color_h; ?>;
	}

	.woocommerce-cart .woocommerce table.shop_table tr button[type="submit"]{
		font-weight: normal;
		color: #fff;
	}

	.woocommerce-cart .woocommerce .shop_table.cart td{
		border-color: #f1f1f1;	
	}
	.woocommerce-cart .woocommerce .shop_table.cart{
		border: 1px solid #f1f1f1;	
		border-radius: 0px !important;
	}
	.woocommerce-cart .woocommerce .shop_table.cart .actions{
		background-color:#f9f9f9;
	}
	.woocommerce-cart .woocommerce .shop_table.cart th,
	.woocommerce-cart .woocommerce .shop_table.cart td{
		padding: 20px;
	}
	.woocommerce-cart .woocommerce .shop_table.cart thead{
		background-color:#f9f9f9;
	}
	.woocommerce-cart .woocommerce .shop_table.cart tr.cart_item .product-thumbnail a img{
		float: left;
	}
	.woocommerce-cart .woocommerce .shop_table.cart tr.cart_item .product-name .variation{
		display: none;
	}
	.woocommerce-cart .woocommerce .shop_table.cart .product-remove .remove{
		color: <?php echo $nd_options_customizer_woocommerce_color_red; ?> !important; 
	    background-color: #fff !important;
	    font-size: 15px;
	    padding: 5px;
	}

	.woocommerce-cart .cart-collaterals{
		margin-top: 50px;
	}
	.woocommerce-cart .cart-collaterals h2:after {
		width: 30px;
		height: 2px;
		background-color: #f1f1f1;
		content : "";
		position: absolute;
		left: 0px;
		bottom: -20px;
	}

	.woocommerce-cart .cart-collaterals h2{
		position: relative;
		margin-bottom: 45px;
		font-weight: normal;
	}


	.woocommerce-cart .shop_table tr th,
	.woocommerce-cart .shop_table tr td strong { font-weight: normal !important; }


	.woocommerce-cart .cart-collaterals .cart_totals table{
		border: 1px solid #f1f1f1;
		border-radius: 0px !important;
	}
	.woocommerce-cart .cart-collaterals .cart_totals table th,
	.woocommerce-cart .cart-collaterals .cart_totals table td{
		padding: 20px;
	}

	.woocommerce-cart .cart-collaterals .cart_totals .wc-proceed-to-checkout a{
		background-color: <?php echo $nd_options_customizer_woocommerce_color_blue; ?>; 
		border-radius: 0px;
		padding: 20px;
		text-transform: uppercase;
		font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif;	
		font-weight: normal;
	}

	.woocommerce-cart .woocommerce .shop_table.cart .actions input[type="submit"]{
		background-color: <?php echo $nd_options_customizer_woocommerce_color_green; ?>; 
		border-radius: 0px;
		padding: 10px 20px;
		text-transform: uppercase;
		font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif;
		color: #fff;	
		font-weight: normal;
	}
	.woocommerce-cart .woocommerce .shop_table.cart .actions .coupon #coupon_code{
		border-radius: 0px;
		border: 1px solid #f1f1f1;
		min-width: 180px;
		padding: 8px 20px;
	}
	@media only screen and (min-width: 320px) and (max-width: 767px) {
   		.woocommerce-cart .woocommerce .shop_table.cart .actions .coupon #coupon_code{
			min-width: 0px;
		}
	}


	/*-------------------------WooCommerce Checkout-------------------------*/


	.woocommerce form.woocommerce-checkout .col-1 h3:after,
	.woocommerce form.woocommerce-checkout .col-2 h3:after,
	.woocommerce form.woocommerce-checkout h3#order_review_heading:after {
		width: 30px;
		height: 2px;
		background-color: #f1f1f1;
		content : "";
		position: absolute;
		left: 0px;
		bottom: -20px;
	}
	.woocommerce form.woocommerce-checkout .col-1 h3,
	.woocommerce form.woocommerce-checkout .col-2 h3,
	.woocommerce form.woocommerce-checkout h3#order_review_heading {
		position: relative;
		margin-bottom: 45px;
		font-weight: normal;	
	}

	.woocommerce form.checkout_coupon button[type="submit"],
	.woocommerce form.woocommerce-checkout #order_review .woocommerce-checkout-payment .place-order button[type="submit"]{ font-weight: normal; }


	.woocommerce form.woocommerce-checkout #order_review table tr th,
	.woocommerce form.woocommerce-checkout #order_review table tr td,
	.woocommerce form.woocommerce-checkout #order_review table tr td strong{
		font-weight: normal;
	}

	.woocommerce-checkout .woocommerce .checkout_coupon{
		border-radius: 0px;
		border: 1px solid #f1f1f1;
	}
	.woocommerce-checkout .woocommerce form.login{
		border-radius: 0px;
		border: 1px solid #f1f1f1;
	}
	.woocommerce-checkout .woocommerce .checkout_coupon input[type="submit"],
	.woocommerce-checkout .woocommerce form.login p .button{
		background-color: <?php echo $nd_options_customizer_woocommerce_color_green; ?>; 
		border-radius: 0px;
		padding: 10px 20px;
		text-transform: uppercase;
		font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif;
		color: #fff;	
		font-weight: normal;
	}

	.woocommerce-checkout .woocommerce .woocommerce-billing-fields h3,
	.woocommerce-checkout .woocommerce .woocommerce-shipping-fields h3,
	.woocommerce-checkout #order_review_heading{
		font-weight: normal;
		margin-bottom: 25px;
	}
	.woocommerce-checkout #order_review_heading{
		margin-top: 40px;
	}


	.woocommerce-checkout.checkout #customer_details .woocommerce-billing-fields p{
		margin: 0px 0px 20px 0px;
	}

	.woocommerce-checkout.checkout #customer_details .woocommerce-shipping-fields textarea{
		height: 100px;
	}

	.woocommerce-checkout.checkout  #order_review .shop_table.woocommerce-checkout-review-order-table{
		border: 1px solid #f1f1f1;
		border-collapse: collapse;
	}
	.woocommerce-checkout.checkout  #order_review .shop_table.woocommerce-checkout-review-order-table th,
	.woocommerce-checkout.checkout  #order_review .shop_table.woocommerce-checkout-review-order-table td{
		border-color: #f1f1f1;
		padding: 20px;
	}
	.woocommerce-checkout.checkout  #order_review .shop_table.woocommerce-checkout-review-order-table thead,
	.woocommerce-checkout.checkout  #order_review .shop_table.woocommerce-checkout-review-order-table tfoot{
		background-color: #f9f9f9;
	}

	/*select drop*/
	.select2-container .select2-choice {
		border-color:#f1f1f1;
		color: <?php echo $nd_options_customizer_font_color_p; ?>;	
		border-width: 0px;
		border-bottom-width: 2px;
		font-size: 15px;
		line-height: 19px;
		padding: 10px 20px;
		border-radius: 0px;
	}
	.select2-drop.select2-drop-above{
		border-color:#f1f1f1;
	}
	.select2-drop.select2-drop-above.select2-drop-active{
		border-color:#f1f1f1;	
	}
	.select2-drop-active{
		border-color:#f1f1f1;		
	}
	.select2-drop{
		color: <?php echo $nd_options_customizer_font_color_p; ?> !important;
	}
	.select2-results .select2-highlighted{
		color: <?php echo $nd_options_customizer_font_color_h; ?> !important;	
	}


	.woocommerce-checkout.checkout .woocommerce-checkout-payment .about_paypal{
		display: none;
	}

	/*placeorder*/
	.woocommerce-checkout.checkout .woocommerce-checkout-payment #place_order{
		background-color: <?php echo $nd_options_customizer_woocommerce_color_blue; ?>; 
		border-radius: 0px;
		text-transform: uppercase;
		font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif;
	}
	.woocommerce-checkout.checkout .woocommerce-checkout-payment .form-row.place-order{
		padding: 30px !important;
	}


	/*payment block*/
	.woocommerce-checkout.checkout .woocommerce-checkout-payment {
		background-color: <?php echo $nd_options_customizer_woocommerce_color_greydark; ?> !important; 	
		border-radius: 0px !important;
	}
	.woocommerce-checkout.checkout .woocommerce-checkout-payment ul{
		border-bottom-width: 0px !important;
	}

	.woocommerce-checkout.checkout .woocommerce-checkout-payment .wc_payment_method.payment_method_paypal img{
		display: none;
	}

	.woocommerce-checkout.checkout .woocommerce-checkout-payment .wc_payment_methods{
		padding: 20px 30px 0px 30px !important;
	}
	.woocommerce-checkout.checkout .woocommerce-checkout-payment .wc_payment_methods li{
		padding: 5px 0px; 	
	}
	.woocommerce-checkout.checkout .woocommerce-checkout-payment .wc_payment_method div{
		background-color: <?php echo $nd_options_customizer_woocommerce_color_greydark; ?> !important; 	
		padding: 0px !important;
	}
	.woocommerce-checkout.checkout .woocommerce-checkout-payment .wc_payment_method div:before{
		border-color: <?php echo $nd_options_customizer_woocommerce_color_greydark; ?> !important; 	
	}
	.woocommerce-checkout.checkout .woocommerce-checkout-payment .wc_payment_method label{
		color: #fff;
		text-transform: uppercase;	
	}


	.woocommerce form .form-row.woocommerce-validated input.input-text{
		border-color: <?php echo $nd_options_customizer_woocommerce_color_green; ?>;
	}
	.woocommerce form .form-row.woocommerce-invalid input.input-text{
		border-color: <?php echo $nd_options_customizer_woocommerce_color_red; ?>;
	}



	/*-------------------------WooCommerce Account-------------------------*/
	.woocommerce-account .woocommerce > h2 {
		display: none;
	}

	.woocommerce-account .woocommerce .login{
		border-radius: 0px;
		border-color:#f1f1f1;
	}

	.woocommerce-account .woocommerce .login p .woocommerce-Button,
	.woocommerce-account .lost_reset_password p .woocommerce-Button{
		background-color: <?php echo $nd_options_customizer_woocommerce_color_green; ?> !important; 
		border-radius: 0px;
		text-transform: uppercase;
		font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif;	
		color:#fff !important;
	}


	/*-------------------------WooCommerce Order Completed-------------------------*/
	.woocommerce-checkout .woocommerce .woocommerce-thankyou-order-details,
	.woocommerce-checkout .woocommerce .wc-bacs-bank-details.order_details.bacs_details{
		margin: 20px 0px;
		padding: 30px;
	    background-color: #f9f9f9;
	    border: 1px solid #f1f1f1;
	}
	.woocommerce-checkout .woocommerce .wc-bacs-bank-details.order_details.bacs_details{
		margin-bottom: 40px;
	}

	.woocommerce-checkout .woocommerce table.shop_table.order_details{
		border-color: #f1f1f1;
		border-collapse: collapse;
		margin-top: 25px;
	}
	.woocommerce-checkout .woocommerce table.shop_table.order_details thead{
		background-color: #f9f9f9;
	}
	.woocommerce-checkout .woocommerce table.shop_table.order_details tr,
	.woocommerce-checkout .woocommerce table.shop_table.order_details td,
	.woocommerce-checkout .woocommerce table.shop_table.order_details th{
		border-color: #f1f1f1;
		padding: 20px;
	}


	.woocommerce-checkout .woocommerce h2.wc-bacs-bank-details-heading{
		margin-top: 40px;
		margin-bottom: 20px;
	}




	.woocommerce h2.woocommerce-order-details__title:after{
		width: 30px;
		height: 2px;
		background-color: #f1f1f1;
		content : "";
		position: absolute;
		left: 0px;
		bottom: -20px;
	}
	.woocommerce h2.woocommerce-order-details__title{
		position: relative;
		margin-bottom: 45px;
		font-weight: normal;	
		margin-top: 40px;
	}

	.woocommerce .woocommerce-table--order-details tr td,
	.woocommerce .woocommerce-table--order-details tr th,
	.woocommerce .woocommerce-table--order-details tr td strong {
		font-weight: normal !important;
	}

	.woocommerce ul.woocommerce-thankyou-order-details li strong {
		font-weight: normal !important;
		color: <?php echo $nd_options_customizer_font_color_p;  ?>;
	}

	.woocommerce ul.woocommerce-thankyou-order-details li {
		color: <?php echo $nd_options_customizer_font_color_h;  ?>;
	}

	/*-------------------------WooCommerce Widgets-------------------------*/
	.nd_options_woocommerce_sidebar .widget h3{
		font-weight: normal;
		margin-bottom: 20px;
	}
	.nd_options_woocommerce_sidebar .widget{
		margin-bottom: 40px;
	}

	.widget_shopping_cart .woocommerce-mini-cart__buttons {
		margin-top: 15px;
	}

	.widget.woocommerce.widget_layered_nav li {
		padding: 10px;
		border-bottom: 1px solid #f1f1f1;
	}
	.widget.woocommerce.widget_layered_nav li:last-child {
		border-bottom-width: 0px;
	}

	.widget.woocommerce.widget_shopping_cart ul,
	.widget.woocommerce.widget_recent_reviews ul,
	.widget.woocommerce.widget_top_rated_products ul,
	.widget.woocommerce.widget_recently_viewed_products ul,
	.widget.woocommerce.widget_products ul{
		margin: 0px;
		padding: 0px;
	}
	.widget.woocommerce.widget_shopping_cart ul li,
	.widget.woocommerce.widget_recent_reviews ul li,
	.widget.woocommerce.widget_top_rated_products ul li,
	.widget.woocommerce.widget_recently_viewed_products ul li,
	.widget.woocommerce.widget_products ul li{
		margin: 0px;
		padding: 20px 90px;
		position: relative;
	}
	.widget.woocommerce.widget_shopping_cart ul li:last-child{
		padding-bottom: 20px;
	}
	.widget.woocommerce.widget_shopping_cart ul .empty{
		padding:20px;
		border:1px solid #f1f1f1;
	}
	.widget.woocommerce.widget_shopping_cart ul li .variation,
	.widget.woocommerce.widget_shopping_cart .total,
	.widget.woocommerce.widget_recent_reviews ul li .reviewer,
	.widget.woocommerce.widget_top_rated_products ul li .amount{
		display: none;
	}
	.widget.woocommerce.widget_shopping_cart ul li .remove{
		right: 0px;
	    left: initial;
	    top: 40px;
	    font-size: 20px;
	    color: <?php echo $nd_options_customizer_woocommerce_color_red; ?> !important;		
	}
	.widget.woocommerce.widget_shopping_cart ul li .remove:hover{
		color: #fff !important;
		background-color: <?php echo $nd_options_customizer_woocommerce_color_red; ?> !important;	
	}
	.widget.woocommerce.widget_shopping_cart ul li a{
		font-weight: normal;	
		color: <?php echo $nd_options_customizer_font_color_h;  ?>!important;
	}
	.widget.woocommerce.widget_shopping_cart .buttons a{
		background-color: <?php echo $nd_options_customizer_woocommerce_color_green; ?>; 
		border-radius: 0px;
		padding: 10px 20px;
		text-transform: uppercase;
		font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif;
		color: #fff;	
		font-weight: normal;	
	}
	.widget.woocommerce.widget_shopping_cart .buttons a.checkout{
		background-color: <?php echo $nd_options_customizer_woocommerce_color_blue; ?>; 
		float: right;	
	}
	.widget.woocommerce.widget_shopping_cart ul li a img,
	.widget.woocommerce.widget_recent_reviews ul li a img,
	.widget.woocommerce.widget_top_rated_products ul li a img,
	.widget.woocommerce.widget_recently_viewed_products ul li a img,
	.widget.woocommerce.widget_products ul li a img{
		position:absolute;
		left: 0px;
		top: 13px;
		width: 70px;
		margin: 0px;
		padding: 0px;
	}
	.widget.woocommerce.widget_recent_reviews ul li,
	.widget.woocommerce.widget_top_rated_products ul li{
		padding-bottom: 30px;
	}
	.widget.woocommerce.widget_product_tag_cloud .tagcloud a{
		padding: 5px 10px;
	    border: 1px solid #f1f1f1;
	    border-radius: 0px;
	    display: inline-block;
	    margin: 5px;
	    margin-left: 0px;
	    font-size: 13px !important;
	    line-height: 20px;
	}
	.widget.woocommerce.widget_product_categories ul { margin: 0px; padding: 0px; list-style: none; }
    .widget.woocommerce.widget_product_categories > ul > li { padding: 10px; border-bottom: 1px solid #f1f1f1; }
    .widget.woocommerce.widget_product_categories > ul > li:last-child { padding-bottom: 0px; border-bottom: 0px solid #f1f1f1; }
    .widget.woocommerce.widget_product_categories ul li { padding: 10px; }
    .widget.woocommerce.widget_product_categories ul.sub-menu { padding: 10px; }
    .widget.woocommerce.widget_product_categories ul.sub-menu:last-child { padding-bottom: 0px; }

    .widget.woocommerce.widget_products ul li a,
    .widget.woocommerce.widget_top_rated_products ul li a,
    .widget.woocommerce.widget_recent_reviews ul li a,
    .widget.woocommerce.widget_recently_viewed_products ul li a{
    	font-weight: normal;
    	color: <?php echo $nd_options_customizer_font_color_h;  ?>;
    }
    .widget.woocommerce.widget_products ul li{
    	min-height: 54px;
    }

    .widget.woocommerce.widget_top_rated_products ul li,
    .widget.woocommerce.widget_recent_reviews  ul li,
    .widget.woocommerce.widget_recently_viewed_products ul li
    {
    	min-height: 44px;
    }

    .widget.woocommerce.widget_price_filter .price_slider_amount .button{
    	background-color: <?php echo $nd_options_customizer_woocommerce_color_green; ?>; 
		border-radius: 0px;
		padding: 10px 20px;
		text-transform: uppercase;
		font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif;
		color: #fff;	
		font-weight: normal;
    }
    .widget.woocommerce.widget_price_filter .price_slider_amount .price_label{
    	font-size: 16px;
    }
    .woocommerce.widget_price_filter .price_slider{
    	margin-top: 40px;
    	margin-bottom: 20px;
    }
    .woocommerce.widget_price_filter .ui-slider .ui-slider-handle,
    .woocommerce.widget_price_filter .ui-slider .ui-slider-range{
    	background-color: <?php echo $nd_options_customizer_woocommerce_color_green; ?>; 
    }
    .woocommerce.widget_price_filter .price_slider_wrapper .ui-widget-content
    {
    	background-color: #f1f1f1;
    	height: 4px;
	    border-radius: 0px;
    }

    .widget.woocommerce.widget_price_filter .price_slider_amount { margin-top: 30px; }

    .widget.woocommerce.widget_layered_nav_filters ul li a:before {
    	color: <?php echo $nd_options_customizer_woocommerce_color_red; ?>; 
    }

    .widget.woocommerce.widget_product_search button[type="submit"]{
    	    text-transform: uppercase;
		    font-size: 14px;
		    padding: 11px 22px;
    }
    .widget.woocommerce.widget_product_search input[type="search"]::placeholder{
   		color: <?php echo $nd_options_customizer_font_color_p;  ?>;	
    }
    

</style>
