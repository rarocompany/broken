<?php 

//logo
$nd_options_customizer_header_4_logo = get_option( 'nd_options_customizer_header_4_logo' );
if ( $nd_options_customizer_header_4_logo == '' ) { 
    $nd_options_customizer_header_4_logo = esc_url(plugins_url('img/logo.png', __FILE__ )); 
}else{
    $nd_options_customizer_header_4_logo = wp_get_attachment_url($nd_options_customizer_header_4_logo);
}

//logo responsive
$nd_options_customizer_header_4_logo_responsive = get_option( 'nd_options_customizer_header_4_logo_responsive' );
if ( $nd_options_customizer_header_4_logo_responsive == '' ) { 
    $nd_options_customizer_header_4_logo_responsive = esc_url(plugins_url('img/logo.png', __FILE__ )); 
}else{
    $nd_options_customizer_header_4_logo_responsive = wp_get_attachment_url($nd_options_customizer_header_4_logo_responsive);
}


//icon menu responsive
$nd_options_customizer_header_4_icon_responsive_menu = get_option( 'nd_options_customizer_header_4_icon_responsive_menu' );
if ( $nd_options_customizer_header_4_icon_responsive_menu == '' ) { 
    $nd_options_customizer_header_4_icon_responsive_menu = esc_url(plugins_url('img/icon-menu.svg', __FILE__ )); 
}else{
    $nd_options_customizer_header_4_icon_responsive_menu = wp_get_attachment_url($nd_options_customizer_header_4_icon_responsive_menu);
}


$nd_options_customizer_header_4_logo_width = get_option( 'nd_options_customizer_header_4_logo_width' );
if ( $nd_options_customizer_header_4_logo_width == '' ) { $nd_options_customizer_header_4_logo_width = '170';  }

$nd_options_customizer_header_4_logo_margin_top = get_option( 'nd_options_customizer_header_4_logo_margin_top' );
if ( $nd_options_customizer_header_4_logo_margin_top == '' ) { $nd_options_customizer_header_4_logo_margin_top = '24';  }


//get all datas
$nd_options_customizer_header_4_margin = get_option( 'nd_options_customizer_header_4_margin' );
if ( $nd_options_customizer_header_4_margin == '' ) { $nd_options_customizer_header_4_margin = '10';  }

$nd_options_customizer_header_4_bg = get_option( 'nd_options_customizer_header_4_bg' );
if ( $nd_options_customizer_header_4_bg == '' ) { $nd_options_customizer_header_4_bg = '#ffffff';  }

$nd_options_customizer_header_4_bg_responsive = get_option( 'nd_options_customizer_header_4_bg_responsive' );
if ( $nd_options_customizer_header_4_bg_responsive == '' ) { $nd_options_customizer_header_4_bg_responsive = '#000';  }

$nd_options_customizer_header_4_bg_transparent = get_option( 'nd_options_customizer_header_4_bg_transparent' );
if ( $nd_options_customizer_header_4_bg_transparent == '' ) { $nd_options_customizer_header_4_bg_transparent = 0;  }

$nd_options_customizer_header_4_menu_color = get_option( 'nd_options_customizer_header_4_menu_color' );
if ( $nd_options_customizer_header_4_menu_color == '' ) { $nd_options_customizer_header_4_menu_color = '#727475';  }

$nd_options_customizer_header_4_divider_color = get_option( 'nd_options_customizer_header_4_divider_color' );
if ( $nd_options_customizer_header_4_divider_color == '' ) { $nd_options_customizer_header_4_divider_color = '#f1f1f1';  }

//top header
$nd_options_customizer_top_header_4_bg = get_option( 'nd_options_customizer_top_header_4_bg' );
if ( $nd_options_customizer_top_header_4_bg == '' ) { $nd_options_customizer_top_header_4_bg = '#444444';  }

$nd_options_customizer_top_header_4_text_color = get_option( 'nd_options_customizer_top_header_4_text_color' );
if ( $nd_options_customizer_top_header_4_text_color == '' ) { $nd_options_customizer_top_header_4_text_color = '#a3a3a3';  }

$nd_options_customizer_top_header_4_left_content = get_option( 'nd_options_customizer_top_header_4_left_content' );
if ( $nd_options_customizer_top_header_4_left_content == '' ) { $nd_options_customizer_top_header_4_left_content = 'ADD SOME TEXT THROUGHT CUSTOMIZER';  }

$nd_options_customizer_top_header_4_right_content = get_option( 'nd_options_customizer_top_header_4_right_content' );
if ( $nd_options_customizer_top_header_4_right_content == '' ) { $nd_options_customizer_top_header_4_right_content = 'ADD SOME TEXT THROUGHT CUSTOMIZER';  }

$nd_options_customizer_top_header_4_display = get_option( 'nd_options_customizer_top_header_4_display' );
if ( $nd_options_customizer_top_header_4_display == '' ) { $nd_options_customizer_top_header_4_display = '0';  }



//get font family H
$nd_options_customizer_font_family_h = get_option( 'nd_options_customizer_font_family_h', 'Montserrat:400,700' );
$nd_options_font_family_h_array = explode(":", $nd_options_customizer_font_family_h);
$nd_options_font_family_h = str_replace("+"," ",$nd_options_font_family_h_array[0]);

//get font family P
$nd_options_customizer_font_family_p = get_option( 'nd_options_customizer_font_family_p', 'Montserrat:400,700' );
$nd_options_font_family_p_array = explode(":", $nd_options_customizer_font_family_p);
$nd_options_font_family_p = str_replace("+"," ",$nd_options_font_family_p_array[0]);

//get font color
$nd_options_customizer_font_color_h = get_option( 'nd_options_customizer_font_color_h', '#727475' );


?>


<?php if ( $nd_options_customizer_header_4_bg_transparent != 0 ) { ?>
	
	<!--START css header transparent-->
	<style type="text/css">

		#nd_options_navigation_4_container > div { background: none !important; position: absolute; z-index: 99; border-bottom-width: 0px !important; }
	   
	</style>
	<!--END css header transparent-->

<?php } ?>


<!--START css-->
<style type="text/css">

	.nd_options_navigation_4 div > ul { list-style: none; margin: 0px; padding: 0px; text-align: center; }
	.nd_options_navigation_4 div > ul > li { display: inline-block; padding: 0px; }
	.nd_options_navigation_4 div > ul > li:after { content: "|"; display: inline-block; margin: 0px 20px; color: <?php echo $nd_options_customizer_header_4_divider_color; ?>; }
	.nd_options_navigation_4 div > ul > li:last-child:after { content: ""; margin: 0px; }
	.nd_options_navigation_4 div li a { color: <?php echo $nd_options_customizer_header_4_menu_color; ?>; font-size: 13px; line-height: 13px; font-family: <?php echo $nd_options_font_family_p; ?>; font-weight: lighter; letter-spacing: 3px;}
	.nd_options_navigation_4 div > ul li:hover > ul.sub-menu { display: block; }
	.nd_options_navigation_4 div > ul li > ul.sub-menu { z-index: 999; position: absolute; margin: 0px; padding: 0px; list-style: none; display: none; margin-left: -20px; padding-top: 16px; width: 200px; }
	.nd_options_navigation_4 div > ul li > ul.sub-menu > li { padding: 15px 20px; border-bottom: 1px solid #f1f1f1; text-align: left; background-color: #fff; position: relative; box-shadow: 0px 2px 5px #f1f1f1; float: left; width: 100%; box-sizing:border-box; }
	.nd_options_navigation_4 div > ul li > ul.sub-menu > li:hover { background-color: #f9f9f9;  }
	.nd_options_navigation_4 div > ul li > ul.sub-menu > li:last-child { border-bottom: 0px solid #000; }
	.nd_options_navigation_4 div > ul li > ul.sub-menu li a { font-size: 12px; color: <?php echo $nd_options_customizer_font_color_h; ?>; float: left; width: 100%; }
	.nd_options_navigation_4 div > ul li > ul.sub-menu li > ul.sub-menu { margin-left: 180px; top: 0; padding-top: 0; padding-left: 20px; }
	/*responsive*/
	.nd_options_navigation_4_sidebar div > ul { list-style: none; margin: 0px; padding: 0px; }
	.nd_options_navigation_4_sidebar div > ul > li { display: inline-block; width: 100%; padding: 0px 0px 20px 0px !important; background-color: transparent; }
	.nd_options_navigation_4_sidebar div li a { font-family: <?php echo $nd_options_font_family_p; ?>; }
	.nd_options_navigation_4_sidebar div li > a { padding: 10px 0px; display: inline-block; font-size: 24px; font-family: <?php echo $nd_options_font_family_p; ?>; text-transform: lowercase; color: #fff; }
	.nd_options_navigation_4_sidebar div li > a::first-letter { text-transform: uppercase; }
	.nd_options_navigation_4_sidebar div > ul li > ul.sub-menu { margin: 0px; padding: 0px; list-style: none; }
	.nd_options_navigation_4_sidebar div > ul li > ul.sub-menu > li { padding: 0px 20px; text-align: left; }
	.nd_options_navigation_4_sidebar div > ul li > ul.sub-menu li a { font-size: 14px; }
	/*top header*/
	.nd_options_navigation_top_header_4 { font-size: 13px; line-height: 18px; }
	.nd_options_navigation_top_header_4 > ul { list-style: none; margin: 0px; padding: 0px; }
	.nd_options_navigation_top_header_4 > ul > li { display: inline-block; }
	.nd_options_navigation_top_header_4> ul > li:after { content: "|"; display: inline-block; margin: 0px 15px; font-size: 13px; }
	.nd_options_navigation_top_header_4 > ul > li:last-child:after { content: ""; margin: 0px; }
	.nd_options_navigation_top_header_4 li a { font-size: 13px; }
	.nd_options_navigation_top_header_4 > ul li:hover > ul.nd_options_sub_menu { display: block; }
	.nd_options_navigation_top_header_4 > ul li > ul.nd_options_sub_menu { padding: 10px 0px 0px 15px; position: absolute; margin: 0px; list-style: none; display: none; z-index: 9; }
	.nd_options_navigation_top_header_4 > ul li > ul.nd_options_sub_menu > li { padding: 7px 15px; font-size: 13px; border-bottom: 1px solid #595959; background-color: #444444; }
	.nd_options_navigation_top_header_4 > ul li > ul.nd_options_sub_menu > li:last-child { border-bottom: 0px solid #000; }
   
	#nd_options_navigation_top_header_4_left div:last-child div a img { margin-right: 0px; }
	#nd_options_navigation_top_header_4_right div:last-child div a img { margin-left: 0px; }

	/*arrow for item has children*/
	.nd_options_navigation_4 .menu ul.sub-menu li.menu-item-has-children > a:after { content:""; float: right; border-style: solid; border-width: 5px 0 5px 5px; border-color: transparent transparent transparent <?php echo $nd_options_customizer_font_color_h; ?>; margin-top: 3px; }

	/*search*/
	#nd_options_container_search_icon_navigation { position: absolute; right: 20px; top: 20px; }

	/*labels*/
	.nd_options_navigation_4 .menu li.nd_options_new_label > a:after { border-radius: 15px; padding: 3px 8px; letter-spacing: 0px; }
	.nd_options_navigation_4 .menu li.nd_options_hot_label > a:after { border-radius: 15px; padding: 3px 8px; letter-spacing: 0px; }
	.nd_options_navigation_4 .menu li.nd_options_best_label > a:after { border-radius: 15px; padding: 3px 8px; letter-spacing: 0px; }

</style>
<!--END css-->



