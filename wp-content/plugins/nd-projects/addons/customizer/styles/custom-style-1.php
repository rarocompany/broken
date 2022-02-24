<?php

//recover font family and color
$nd_cc_customizer_font_family_h = get_option( 'nd_options_customizer_font_family_h', 'Poppins:400,700' );
$nd_cc_font_family_h_array = explode(":", $nd_cc_customizer_font_family_h);
$nd_cc_font_family_h = str_replace("+"," ",$nd_cc_font_family_h_array[0]);

$nd_cc_customizer_font_family_p = get_option( 'nd_options_customizer_font_family_p', 'Poppins:400,700' );
$nd_cc_font_family_p_array = explode(":", $nd_cc_customizer_font_family_p);
$nd_cc_font_family_p = str_replace("+"," ",$nd_cc_font_family_p_array[0]);

$nd_cc_customizer_font_color_h = get_option( 'nd_options_customizer_font_color_h', '#2d2d2d' );
$nd_cc_customizer_font_color_p = get_option( 'nd_options_customizer_font_color_p', '#7e7e7e' );

//submit form bg
$nd_cc_customizer_forms_submit_bg = get_option( 'nd_options_customizer_forms_submit_bg', '#ebc858' );

?>


<!--START  for post-->
<style type="text/css">

    /*sidebar*/
    .nd_cc_sidebar .widget { margin-bottom: 40px; }
    .nd_cc_sidebar .widget img, .nd_cc_sidebar .widget select { max-width: 100%; }
    .nd_cc_sidebar .widget h3 { margin-bottom: 20px; font-weight: normal; }

    /*search*/
    .nd_cc_sidebar .widget.widget_search input[type="text"] { width: 100%; font-weight: lighter; }
    .nd_cc_sidebar .widget.widget_search input[type="submit"] { margin-top: 20px; letter-spacing: 2px; text-transform: uppercase; font-weight: normal; font-size: 13px; font-family: '<?php echo $nd_cc_font_family_p; ?>', sans-serif; }

    /*list*/
    .nd_cc_sidebar .widget ul { margin: 0px; padding: 0px; list-style: none; }
    .nd_cc_sidebar .widget > ul > li { padding: 10px; border-bottom: 1px solid #f1f1f1; }
    .nd_cc_sidebar .widget > ul > li:last-child { padding-bottom: 0px; border-bottom: 0px solid #f1f1f1; }
    .nd_cc_sidebar .widget ul li { padding: 10px; }
    .nd_cc_sidebar .widget ul.children { padding: 10px; }
    .nd_cc_sidebar .widget ul.children:last-child { padding-bottom: 0px; }

    /*calendar*/
    .nd_cc_sidebar .widget.widget_calendar table { text-align: center; background-color: #1c1c1c; width: 100%; border: 0px solid #f1f1f1; line-height: 20px; }
    .nd_cc_sidebar .widget.widget_calendar table th { padding: 10px 5px; font-size: 12px; }
    .nd_cc_sidebar .widget.widget_calendar table td { padding: 10px 5px; color: #fff; font-size: 12px; }
    .nd_cc_sidebar .widget.widget_calendar table tbody td a { color: #fff; padding: 5px; border-radius: 0px; }
    .nd_cc_sidebar .widget.widget_calendar table tfoot td a { color: #fff; background-color: <?php echo $nd_cc_customizer_forms_submit_bg; ?>; padding: 5px; border-radius: 0px; font-size: 12px; text-transform: uppercase; }
    .nd_cc_sidebar .widget.widget_calendar table tfoot td { padding-bottom: 20px; }
    .nd_cc_sidebar .widget.widget_calendar table tfoot td#prev { text-align: right; }
    .nd_cc_sidebar .widget.widget_calendar table tfoot td#next { text-align: left; }
    .nd_cc_sidebar .widget.widget_calendar table caption { font-size: 20px; font-weight: bolder; background-color: #151515; padding: 20px; border: 0px solid #f1f1f1; border-bottom: 0px; }

    /*color calendar*/
    .nd_cc_sidebar .widget.widget_calendar table thead { color: <?php echo $nd_cc_customizer_font_color_p;  ?>; }
    .nd_cc_sidebar .widget.widget_calendar table tbody td a { background-color: <?php echo $nd_cc_customizer_forms_submit_bg; ?>; }
    .nd_cc_sidebar .widget.widget_calendar table caption { color:#fff; font-family: '<?php echo $nd_cc_font_family_h; ?>', sans-serif; }

    /*menu*/
    .nd_cc_sidebar .widget div ul { margin: 0px; padding: 0px; list-style: none; }
    .nd_cc_sidebar .widget div > ul > li { padding: 10px; border-bottom: 1px solid #f1f1f1; }
    .nd_cc_sidebar .widget div > ul > li:last-child { padding-bottom: 0px; border-bottom: 0px solid #f1f1f1; }
    .nd_cc_sidebar .widget div ul li { padding: 10px; }
    .nd_cc_sidebar .widget div ul.sub-menu { padding: 10px; }
    .nd_cc_sidebar .widget div ul.sub-menu:last-child { padding-bottom: 0px; }

    /*tag*/
    .nd_cc_sidebar .widget.widget_tag_cloud a { padding: 8px; border: 1px solid #f1f1f1; border-radius: 0px; display: inline-block; margin: 5px; margin-left: 0px; font-size: 12px !important; line-height: 12px; }

    /*single project*/
    .nd_cc_single_project_tags_container a{ border:1px solid #f1f1f1; padding: 5px 10px; font-size: 13px; line-height: 13px; text-transform: uppercase; margin-left: 20px; }
    #nd_cc_single_cpt_1_image_and_box_iframe iframe { float: left; }

</style>
<!--END css for post-->