<?php

//recover font family and color
$nd_options_customizer_font_family_h = get_option( 'nd_options_customizer_font_family_h', 'Montserrat:400,700' );
$nd_options_font_family_h_array = explode(":", $nd_options_customizer_font_family_h);
$nd_options_font_family_h = str_replace("+"," ",$nd_options_font_family_h_array[0]);

$nd_options_customizer_font_family_p = get_option( 'nd_options_customizer_font_family_p', 'Montserrat:400,700' );
$nd_options_font_family_p_array = explode(":", $nd_options_customizer_font_family_p);
$nd_options_font_family_p = str_replace("+"," ",$nd_options_font_family_p_array[0]);

$nd_options_customizer_font_color_h = get_option( 'nd_options_customizer_font_color_h', '#727475' );
$nd_options_customizer_font_color_p = get_option( 'nd_options_customizer_font_color_p', '#a3a3a3' );

//submit form bg
$nd_options_customizer_forms_submit_bg = get_option( 'nd_options_customizer_forms_submit_bg', '#444' );

?>


<!--START  for post-->
<style type="text/css">

    /*sidebar*/
    .elementor-widget-sidebar .widget { margin-bottom: 40px; }
    .elementor-widget-sidebar .widget img, .elementor-widget-sidebar .widget select { max-width: 100%; }
    .elementor-widget-sidebar .widget h3 { margin-bottom: 20px; font-weight: bolder; }

    /*search*/
    .elementor-widget.elementor-widget-wp-widget-search h5 { margin-bottom: 20px; font-weight: bolder; font-size: 23px; line-height: 1.5em; }
    .elementor-widget-sidebar .widget.widget_search input[type="text"],.elementor-widget.elementor-widget-wp-widget-search input[type="text"]  { width: 100%; font-weight: normal; }
    .elementor-widget-sidebar .widget.widget_search input[type="submit"],.elementor-widget.elementor-widget-wp-widget-search input[type="submit"]  { margin-top: 20px; letter-spacing: 2px; text-transform: uppercase; font-weight: bold; font-size: 13px; font-family: '<?php echo $nd_options_font_family_p; ?>', sans-serif; }

    /*list*/
    .elementor-widget-sidebar .widget ul { margin: 0px; padding: 0px; list-style: none; }
    .elementor-widget-sidebar .widget > ul > li { padding: 10px; border-bottom: 1px solid #f1f1f1; }
    .elementor-widget-sidebar .widget > ul > li:last-child { padding-bottom: 0px; border-bottom: 0px solid #f1f1f1; }
    .elementor-widget-sidebar .widget ul li { padding: 10px; }
    .elementor-widget-sidebar .widget ul.children { padding: 10px; }
    .elementor-widget-sidebar .widget ul.children:last-child { padding-bottom: 0px; }

     /*calendar*/
    .elementor-widget-sidebar .widget.widget_calendar table,.elementor-widget.elementor-widget-wp-widget-calendar table { text-align: center; background-color: #fff; width: 100%; border: 1px solid #f1f1f1; line-height: 20px; }
    .elementor-widget-sidebar .widget.widget_calendar table th,.elementor-widget.elementor-widget-wp-widget-calendar table th { padding: 10px 5px; font-size: 12px; }
    .elementor-widget-sidebar .widget.widget_calendar table td,.elementor-widget.elementor-widget-wp-widget-calendar table td { padding: 10px 5px; color: <?php echo $nd_options_customizer_font_color_p;  ?>; font-size: 12px; }
    .elementor-widget-sidebar .widget.widget_calendar table tbody td a,.elementor-widget.elementor-widget-wp-widget-calendar table tbody td a { color: <?php echo $nd_options_customizer_font_color_p;  ?>; padding: 5px; border-radius: 0px; }
    .elementor-widget-sidebar .widget.widget_calendar table tfoot td a,.elementor-widget.elementor-widget-wp-widget-calendar table tfoot td a { color: <?php echo $nd_options_customizer_font_color_p;  ?>; background-color: <?php echo $nd_options_customizer_forms_submit_bg; ?>; padding: 5px; border-radius: 0px; font-size: 12px; text-transform: uppercase; }
    .elementor-widget-sidebar .widget.widget_calendar table tfoot td,.elementor-widget.elementor-widget-wp-widget-calendar table tfoot td  { padding-bottom: 20px; }
    .elementor-widget-sidebar .widget.widget_calendar table tfoot td#prev,.elementor-widget.elementor-widget-wp-widget-calendar table tfoot td#prev { text-align: right; }
    .elementor-widget-sidebar .widget.widget_calendar table tfoot td#next,.elementor-widget.elementor-widget-wp-widget-calendar table tfoot td#next { text-align: left; }
    .elementor-widget-sidebar .widget.widget_calendar table caption,.elementor-widget.elementor-widget-wp-widget-calendar table caption { font-size: 23px; font-weight: bolder; background-color: #fff; padding: 20px; border: 1px solid #f1f1f1; border-bottom: 0px; }
    .elementor-widget-sidebar .widget.widget_calendar nav span.wp-calendar-nav-prev a, .elementor-widget.elementor-widget-wp-widget-calendar nav span.wp-calendar-nav-prev a { background-color: <?php echo $nd_options_customizer_font_color_h;  ?>;color: #fff; padding: 5px 10px;font-size: 10px; line-height: 10px; text-transform: uppercase;letter-spacing: 1px;font-weight: bold; margin-top: 20px; display: inline-block; }


    /*color calendar*/
    .elementor-widget-sidebar .widget.widget_calendar table thead,.elementor-widget.elementor-widget-wp-widget-calendar table thead { color: <?php echo $nd_options_customizer_font_color_h;  ?>; }
    .elementor-widget-sidebar .widget.widget_calendar table tbody td a,.elementor-widget.elementor-widget-wp-widget-calendar table tbody td a { background-color: <?php echo $nd_options_customizer_forms_submit_bg; ?>; color: #fff; }
    .elementor-widget-sidebar .widget.widget_calendar table caption,.elementor-widget.elementor-widget-wp-widget-calendar table caption { color: <?php echo $nd_options_customizer_font_color_h;  ?>; font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif; }

    /*menu*/
    .elementor-widget-sidebar .widget div ul { margin: 0px; padding: 0px; list-style: none; }
    .elementor-widget-sidebar .widget div > ul > li { padding: 10px; border-bottom: 1px solid #f1f1f1; }
    .elementor-widget-sidebar .widget div > ul > li:last-child { padding-bottom: 0px; border-bottom: 0px solid #f1f1f1; }
    .elementor-widget-sidebar .widget div ul li { padding: 10px; }
    .elementor-widget-sidebar .widget div ul.sub-menu { padding: 10px; }
    .elementor-widget-sidebar .widget div ul.sub-menu:last-child { padding-bottom: 0px; }

    /*tag*/
    .elementor-widget-sidebar .widget.widget_tag_cloud a { padding: 8px; border: 1px solid #f1f1f1; border-radius: 0px; display: inline-block; margin: 5px; margin-left: 0px; font-size: 12px !important; line-height: 12px; }

</style>
<!--END css for post-->