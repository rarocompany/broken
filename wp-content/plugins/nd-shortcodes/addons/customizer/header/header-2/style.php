<?php 

//logo
$nd_options_customizer_header_2_logo = get_option( 'nd_options_customizer_header_2_logo' );
if ( $nd_options_customizer_header_2_logo == '' ) { 
    $nd_options_customizer_header_2_logo = esc_url(plugins_url('img/logo.png', __FILE__ )); 
}else{
    $nd_options_customizer_header_2_logo = wp_get_attachment_url($nd_options_customizer_header_2_logo);
}

//logo responsive
$nd_options_customizer_header_2_logo_responsive = get_option( 'nd_options_customizer_header_2_logo_responsive' );
if ( $nd_options_customizer_header_2_logo_responsive == '' ) { 
    $nd_options_customizer_header_2_logo_responsive = esc_url(plugins_url('img/logo.png', __FILE__ )); 
}else{
    $nd_options_customizer_header_2_logo_responsive = wp_get_attachment_url($nd_options_customizer_header_2_logo_responsive);
}


//icon menu responsive
$nd_options_customizer_header_2_icon_responsive_menu = get_option( 'nd_options_customizer_header_2_icon_responsive_menu' );
if ( $nd_options_customizer_header_2_icon_responsive_menu == '' ) { 
    $nd_options_customizer_header_2_icon_responsive_menu = esc_url(plugins_url('img/icon-menu.svg', __FILE__ ));
}else{
    $nd_options_customizer_header_2_icon_responsive_menu = wp_get_attachment_url($nd_options_customizer_header_2_icon_responsive_menu);
}


$nd_options_customizer_header_2_logo_width = get_option( 'nd_options_customizer_header_2_logo_width' );
if ( $nd_options_customizer_header_2_logo_width == '' ) { $nd_options_customizer_header_2_logo_width = '170';  }

$nd_options_customizer_header_2_logo_margin_top = get_option( 'nd_options_customizer_header_2_logo_margin_top' );
if ( $nd_options_customizer_header_2_logo_margin_top == '' ) { $nd_options_customizer_header_2_logo_margin_top = '24';  }


//get all datas
$nd_options_customizer_header_2_margin = get_option( 'nd_options_customizer_header_2_margin' );
if ( $nd_options_customizer_header_2_margin == '' ) { $nd_options_customizer_header_2_margin = '10';  }

$nd_options_customizer_header_2_bg = get_option( 'nd_options_customizer_header_2_bg' );
if ( $nd_options_customizer_header_2_bg == '' ) { $nd_options_customizer_header_2_bg = '#ffffff';  }

$nd_options_customizer_header_2_bg_responsive = get_option( 'nd_options_customizer_header_2_bg_responsive' );
if ( $nd_options_customizer_header_2_bg_responsive == '' ) { $nd_options_customizer_header_2_bg_responsive = '#000';  }

$nd_options_customizer_header_2_bg_transparent = get_option( 'nd_options_customizer_header_2_bg_transparent' );
if ( $nd_options_customizer_header_2_bg_transparent == '' ) { $nd_options_customizer_header_2_bg_transparent = 0;  }

$nd_options_customizer_header_2_menu_color = get_option( 'nd_options_customizer_header_2_menu_color' );
if ( $nd_options_customizer_header_2_menu_color == '' ) { $nd_options_customizer_header_2_menu_color = '#727475';  }

$nd_options_customizer_header_2_divider_color = get_option( 'nd_options_customizer_header_2_divider_color' );
if ( $nd_options_customizer_header_2_divider_color == '' ) { $nd_options_customizer_header_2_divider_color = '#f1f1f1';  }

//top header
$nd_options_customizer_top_header_2_bg = get_option( 'nd_options_customizer_top_header_2_bg' );
if ( $nd_options_customizer_top_header_2_bg == '' ) { $nd_options_customizer_top_header_2_bg = '#444444';  }

$nd_options_customizer_top_header_2_text_color = get_option( 'nd_options_customizer_top_header_2_text_color' );
if ( $nd_options_customizer_top_header_2_text_color == '' ) { $nd_options_customizer_top_header_2_text_color = '#a3a3a3';  }

$nd_options_customizer_top_header_2_left_content = get_option( 'nd_options_customizer_top_header_2_left_content' );
if ( $nd_options_customizer_top_header_2_left_content == '' ) { $nd_options_customizer_top_header_2_left_content = 'ADD SOME TEXT THROUGHT CUSTOMIZER';  }

$nd_options_customizer_top_header_2_right_content = get_option( 'nd_options_customizer_top_header_2_right_content' );
if ( $nd_options_customizer_top_header_2_right_content == '' ) { $nd_options_customizer_top_header_2_right_content = 'ADD SOME TEXT THROUGHT CUSTOMIZER';  }

$nd_options_customizer_top_header_2_display = get_option( 'nd_options_customizer_top_header_2_display' );
if ( $nd_options_customizer_top_header_2_display == '' ) { $nd_options_customizer_top_header_2_display = '0';  }



//get font family H
$nd_options_customizer_font_family_h = get_option( 'nd_options_customizer_font_family_h', 'Montserrat:400,700' );
$nd_options_font_family_h_array = explode(":", $nd_options_customizer_font_family_h);
$nd_options_font_family_h = str_replace("+"," ",$nd_options_font_family_h_array[0]);
$nd_options_customizer_font_color_h = get_option( 'nd_options_customizer_font_color_h', '#727475' );


?>


<?php if ( $nd_options_customizer_header_2_bg_transparent != 0 ) { ?>
	
	<!--START css header transparent-->
	<style type="text/css">

		#nd_options_navigation_2_container > div { background: none !important; position: absolute; z-index: 99; border-bottom-width: 0px !important; }
	   
	</style>
	<!--END css header transparent-->

<?php } ?>


<!--START css-->
<style type="text/css">

	.nd_options_navigation_2 div > ul { list-style: none; margin: 0px; padding: 0px; text-align: right; }
	.nd_options_navigation_2 div > ul > li { display: inline-block; padding: 0px; }
	.nd_options_navigation_2 div > ul > li:after { content: "|"; display: inline-block; margin: 0px 20px; color: <?php echo $nd_options_customizer_header_2_divider_color; ?>; }
	.nd_options_navigation_2 div > ul > li:last-child:after { content: ""; margin: 0px; }
	.nd_options_navigation_2 div li a { color: <?php echo $nd_options_customizer_header_2_menu_color; ?>; font-size: 16px; line-height: 16px; font-family: <?php echo $nd_options_font_family_h; ?>; }
	.nd_options_navigation_2 div > ul li:hover > ul.sub-menu { display: block; }
	.nd_options_navigation_2 div > ul li > ul.sub-menu { z-index: 999; position: absolute; margin: 0px; padding: 0px; list-style: none; display: none; margin-left: -20px; padding-top: 20px; width: 190px; }
	.nd_options_navigation_2 div > ul li > ul.sub-menu > li { padding: 15px 20px; border-bottom: 1px solid #f1f1f1; text-align: left; background-color: #fff; position: relative; box-shadow: 0px 2px 5px #f1f1f1; float: left; width: 100%; box-sizing:border-box; }
	.nd_options_navigation_2 div > ul li > ul.sub-menu > li:hover { background-color: #f9f9f9;  }
	.nd_options_navigation_2 div > ul li > ul.sub-menu > li:last-child { border-bottom: 0px solid #000; }
	.nd_options_navigation_2 div > ul li > ul.sub-menu li a { font-size: 14px; color: <?php echo $nd_options_customizer_font_color_h; ?>; float: left; width: 100%; }
	.nd_options_navigation_2 div > ul li > ul.sub-menu li > ul.sub-menu { margin-left: 170px; top: 0; padding-top: 0; padding-left: 20px; }
	/*responsive*/
	.nd_options_navigation_2_sidebar div > ul { list-style: none; margin: 0px; padding: 0px; }
	.nd_options_navigation_2_sidebar div > ul > li { display: inline-block; width: 100%; padding: 0px 0px 20px 0px; }
	.nd_options_navigation_2_sidebar div li a { font-family: <?php echo $nd_options_font_family_h; ?>; }
	.nd_options_navigation_2_sidebar div li > a { padding: 10px 0px; display: inline-block; font-size: 24px; font-family: <?php echo $nd_options_font_family_h; ?>; text-transform: lowercase; color: #fff; }
	.nd_options_navigation_2_sidebar div li > a::first-letter { text-transform: uppercase; }
	.nd_options_navigation_2_sidebar div > ul li > ul.sub-menu { margin: 0px; padding: 0px; list-style: none; }
	.nd_options_navigation_2_sidebar div > ul li > ul.sub-menu > li { padding: 0px 20px; text-align: left; }
	.nd_options_navigation_2_sidebar div > ul li > ul.sub-menu li a { font-size: 14px; }
	.nd_options_navigation_2_sidebar_content li.nd_options_customizer_labels_color_new { padding: 0px !important; background-color: transparent !important; }
	/*top header*/
	.nd_options_navigation_top_header_2 { font-size: 13px; line-height: 18px; }
	.nd_options_navigation_top_header_2 > ul { list-style: none; margin: 0px; padding: 0px; }
	.nd_options_navigation_top_header_2 > ul > li { display: inline-block; }
	.nd_options_navigation_top_header_2> ul > li:after { content: "|"; display: inline-block; margin: 0px 15px; font-size: 13px; }
	.nd_options_navigation_top_header_2 > ul > li:last-child:after { content: ""; margin: 0px; }
	.nd_options_navigation_top_header_2 li a { font-size: 13px; }
	.nd_options_navigation_top_header_2 > ul li:hover > ul.nd_options_sub_menu { display: block; }
	.nd_options_navigation_top_header_2 > ul li > ul.nd_options_sub_menu { padding: 10px 0px 0px 15px; position: absolute; margin: 0px; list-style: none; display: none; z-index: 9; }
	.nd_options_navigation_top_header_2 > ul li > ul.nd_options_sub_menu > li { padding: 7px 15px; font-size: 13px; border-bottom: 1px solid #595959; background-color: #444444; }
	.nd_options_navigation_top_header_2 > ul li > ul.nd_options_sub_menu > li:last-child { border-bottom: 0px solid #000; }
   
	#nd_options_navigation_top_header_2_left div:last-child div a img { margin-right: 0px; }
	#nd_options_navigation_top_header_2_right div:last-child div a img { margin-left: 0px; }

	/*arrow for item has children*/
	.nd_options_navigation_2 .menu ul.sub-menu li.menu-item-has-children > a:after { content:""; float: right; border-style: solid; border-width: 5px 0 5px 5px; border-color: transparent transparent transparent <?php echo $nd_options_customizer_font_color_h; ?>; margin-top: 3px; }

</style>
<!--END css-->



