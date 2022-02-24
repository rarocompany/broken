<?php 

//get all datas
$nd_options_customizer_header_1_bg = get_option( 'nd_options_customizer_header_1_bg' );
if ( $nd_options_customizer_header_1_bg == '' ) { $nd_options_customizer_header_1_bg = '#444444';  }

$nd_options_customizer_header_1_menu_color = get_option( 'nd_options_customizer_header_1_menu_color' );
if ( $nd_options_customizer_header_1_menu_color == '' ) { $nd_options_customizer_header_1_menu_color = '#ffffff';  }

$nd_options_customizer_header_1_tagline_color = get_option( 'nd_options_customizer_header_1_tagline_color' );
if ( $nd_options_customizer_header_1_tagline_color == '' ) { $nd_options_customizer_header_1_tagline_color = '#a3a3a3';  }

$nd_options_customizer_header_1_divider_color = get_option( 'nd_options_customizer_header_1_divider_color' );
if ( $nd_options_customizer_header_1_divider_color == '' ) { $nd_options_customizer_header_1_divider_color = '#5a5a5a';  }


//get font family H
$nd_options_customizer_font_color_h = get_option( 'nd_options_customizer_font_color_h', '#727475' );


?>


<style type="text/css">

	.nd_options_navigation_1 div > ul { list-style: none; margin: 0px; padding: 0px; text-align: right; }
	.nd_options_navigation_1 div > ul > li { display: inline-block; padding: 10px 0px; }
	.nd_options_navigation_1 div > ul > li:after { content: "|"; display: inline-block; margin: 0px 20px; color: <?php echo $nd_options_customizer_header_1_divider_color; ?>; }
	.nd_options_navigation_1 div > ul > li:last-child:after { content: ""; margin: 0px; }
	.nd_options_navigation_1 div li a { color: <?php echo $nd_options_customizer_header_1_menu_color; ?>; font-size: 16px; }
	.nd_options_navigation_1 div > ul li:hover > ul.sub-menu { display: block; }
	.nd_options_navigation_1 div > ul li > ul.sub-menu { z-index: 999; position: absolute; margin: 0px; padding: 0px; list-style: none; display: none; margin-left: -20px; padding-top: 20px; width: 190px; }
	.nd_options_navigation_1 div > ul li > ul.sub-menu > li { padding: 15px 20px; border-bottom: 1px solid #f1f1f1; text-align: left; background-color: #fff; position: relative; box-shadow: 0px 2px 5px #f1f1f1; float: left; width: 100%; box-sizing:border-box;  }
	.nd_options_navigation_1 div > ul li > ul.sub-menu > li:hover { background-color: #f9f9f9;  }
	.nd_options_navigation_1 div > ul li > ul.sub-menu > li:last-child { border-bottom: 0px solid #000; }
	.nd_options_navigation_1 div > ul li > ul.sub-menu li a { color: #727475; font-size: 14px; line-height: 14px; float: left; width: 100%; }
	.nd_options_navigation_1 div > ul li > ul.sub-menu li > ul.sub-menu { margin-left: 170px; top: 0; padding-top: 0; padding-left: 20px; }

	/*arrow for item has children*/
	.nd_options_navigation_1 .menu ul.sub-menu li.menu-item-has-children > a:after { content:""; float: right; border-style: solid; border-width: 5px 0 5px 5px; border-color: transparent transparent transparent <?php echo $nd_options_customizer_font_color_h; ?>; margin-top: 3px; }

	@media only screen and (min-width: 320px) and (max-width: 1199px) { 
	    .nd_options_navigation_1 div > ul { text-align: center; } 
	}
	@media only screen and (min-width: 320px) and (max-width: 767px) { 
	    .nd_options_navigation_1 div > ul li > ul.sub-menu { margin-left: -85px; left: 50%; }
	    .nd_options_navigation_1 div > ul > li:after { display: none; } 
	    .nd_options_navigation_1 div > ul > li { display: block; }
	    .nd_options_navigation_1 div > ul li > ul.sub-menu li > ul.sub-menu { margin-left: -85px; left: 50%; top: 0; padding-top: 60px; } 
	}	
   
</style>