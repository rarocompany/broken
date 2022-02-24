<?php

//START FOCUS
add_shortcode('nd_options_focus', 'nd_options_shortcode_focus');
function nd_options_shortcode_focus($atts, $content = null)
{  

  $atts = shortcode_atts(
  array(
    'nd_options_class' => '',
    'nd_options_layout' => '',
    'nd_options_color' => '',
    'nd_options_text_color' => '',
    'nd_options_bg_color' => '',
    'nd_options_image' => '',
    'nd_options_icon' => '',
    'nd_options_title' => '',
    'nd_options_subtitle' => '',
    'nd_options_link' => '',
    'nd_options_descr' => '',
  ), $atts);

  $str = '';

  //get variables
  $nd_options_class = $atts['nd_options_class'];
  $nd_options_layout = $atts['nd_options_layout'];
  $nd_options_title = $atts['nd_options_title'];
  $nd_options_subtitle = $atts['nd_options_subtitle'];
  $nd_options_color = $atts['nd_options_color'];
  $nd_options_text_color = $atts['nd_options_text_color'];
  $nd_options_bg_color = $atts['nd_options_bg_color'];
  $nd_options_descr = $atts['nd_options_descr'];

  //nd_options_link 
  $nd_options_link = vc_build_link( $atts['nd_options_link'] );
  $nd_options_link_url = $nd_options_link['url'];
  $nd_options_link_title = $nd_options_link['title'];
  $nd_options_link_target = $nd_options_link['target'];
  $nd_options_link_rel = $nd_options_link['rel'];


  //nd_options_image
  $nd_options_image_src = wp_get_attachment_image_src($atts['nd_options_image'],'large');
  $nd_options_icon_src = wp_get_attachment_image_src($atts['nd_options_icon'],'large');


  //default value for avoid error include
  if ($nd_options_layout == '') { $nd_options_layout = "layout-1"; }
  if ($nd_options_link_target == '') { $nd_options_link_target = "_self"; }
  if ($nd_options_color == '') { $nd_options_color = "#000"; }
  if ($nd_options_text_color == '') { $nd_options_text_color = "#fff"; }
  if ($nd_options_bg_color == '') { $nd_options_bg_color = "#000"; }

  //include the layout selected
  include 'layout/'.$nd_options_layout.'.php';

      
   return apply_filters('uds_shortcode_out_filter', $str);
}
//END FOCUS





//vc
add_action( 'vc_before_init', 'nd_options_focus' );
function nd_options_focus() {


  //START get all layout
  $nd_options_layouts = array();

  //php function to descover all name files in directory
  $nd_options_directory = plugin_dir_path( __FILE__ ) .'layout/';
  $nd_options_layouts = scandir($nd_options_directory);


  //cicle for delete hidden file that not are php files
  $i = 0;
  foreach ($nd_options_layouts as $value) {
    
    //remove all files that aren't php
    if ( strpos( $nd_options_layouts[$i] , ".php" ) != true ){
      unset($nd_options_layouts[$i]);
    }else{
      $nd_options_layout_name = str_replace(".php","",$nd_options_layouts[$i]);
      $nd_options_layouts[$i] = $nd_options_layout_name;
    } 
    $i++; 

  }
  //END get all layout


   vc_map( array(
      "name" => __( "Focus", "nd-shortcodes" ),
      "base" => "nd_options_focus",
      'description' => __( 'Add single Focus', 'nd-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => esc_url(plugins_url('focus.jpg', __FILE__ )),
      "class" => "",
      "category" => __( "ND Shortcodes", "nd-shortcodes"),
      "params" => array(

        array(
           'type' => 'dropdown',
            'heading' => __( 'Layout', 'nd-shortcodes' ),
            'param_name' => 'nd_options_layout',
            'value' => $nd_options_layouts,
            'description' => __( "Choose the layout", "nd-shortcodes" )
         ),
          array(
            'type' => 'attach_image',
            'heading' => __( 'Image', 'nd-shortcodes' ),
            'param_name' => 'nd_options_image',
            'description' => __( 'Select image from media library.', 'nd-shortcodes' )
         ),
           array(
            'type' => 'attach_image',
            'heading' => __( 'Icon', 'nd-shortcodes' ),
            'param_name' => 'nd_options_icon',
            'description' => __( 'Select icon from media library.', 'nd-shortcodes' ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-4','layout-7' ) )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Title", "nd-shortcodes" ),
            "param_name" => "nd_options_title",
            'admin_label' => true,
            "description" => __( "Insert the title", "nd-shortcodes" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Subtitle", "nd-shortcodes" ),
            "param_name" => "nd_options_subtitle",
            "description" => __( "Insert the subtitle", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-1','layout-2','layout-3','layout-4','layout-7' ) )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Description", "nd-shortcodes" ),
            "param_name" => "nd_options_descr",
            "description" => __( "Insert the description", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-7' ) )
         ),
         array(
         'type' => 'vc_link',
          'heading' => "Link",
          'param_name' => 'nd_options_link',
          'description' => __( "Insert title link", "nd-shortcodes" ),
          'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-1','layout-2','layout-5','layout-6', 'layout-7' ) )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Color", "nd-shortcodes" ),
            "param_name" => "nd_options_color",
            "description" => __( "Choose color for the elements", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-2','layout-5' ) )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Text Color", "nd-shortcodes" ),
            "param_name" => "nd_options_text_color",
            "description" => __( "Choose color for text", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-4' ) )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Bg Color", "nd-shortcodes" ),
            "param_name" => "nd_options_bg_color",
            "description" => __( "Choose color for the background", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-4','layout-7' ) )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Custom class", "nd-shortcodes" ),
            "param_name" => "nd_options_class",
            "description" => __( "Insert custom class", "nd-shortcodes" )
         )

         

      )
   ) );
}
//end shortcode