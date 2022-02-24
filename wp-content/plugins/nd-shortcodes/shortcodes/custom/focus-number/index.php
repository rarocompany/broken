<?php

//START FOCUS
add_shortcode('nd_options_focus_number', 'nd_options_shortcode_focus_number');
function nd_options_shortcode_focus_number($atts, $content = null)
{  

  $atts = shortcode_atts(
  array(
    'nd_options_class' => '',
    'nd_options_layout' => '',
    'nd_options_title' => '',
    'nd_options_description' => '',
    'nd_options_number' => '',
    'nd_options_text_color' => '',
    'nd_options_bg_color' => '',
    'nd_options_image_bg' => '',
  ), $atts);

  $str = '';

  //get variables
  $nd_options_class = $atts['nd_options_class'];
  $nd_options_layout = $atts['nd_options_layout'];
  $nd_options_title = $atts['nd_options_title'];
  $nd_options_description = $atts['nd_options_description'];
  $nd_options_number = $atts['nd_options_number'];
  $nd_options_text_color = $atts['nd_options_text_color'];
  $nd_options_bg_color = $atts['nd_options_bg_color'];
  $nd_options_image_src = wp_get_attachment_image_src($atts['nd_options_image_bg'],'large');

  //default value for avoid error include
  if ($nd_options_layout == '') { $nd_options_layout = "layout-1"; }
  if ($nd_options_text_color == '') { $nd_options_text_color = "#fff"; }
  if ($nd_options_bg_color == '') { $nd_options_bg_color = "#000"; }

  if ($nd_options_image_src[0] == '') { 
    $nd_options_bg_style = ' background-color: '.$nd_options_bg_color.' ';
  }else{ 
    $nd_options_bg_style = ' background-image:url('.$nd_options_image_src[0].'); '; 
  }

  //include the layout selected
  include 'layout/'.$nd_options_layout.'.php';

      
   return apply_filters('uds_shortcode_out_filter', $str);
}
//END FOCUS





//vc
add_action( 'vc_before_init', 'nd_options_focus_number' );
function nd_options_focus_number() {


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
      "name" => __( "Focus Number", "nd-shortcodes" ),
      "base" => "nd_options_focus_number",
      'description' => __( 'Add single Focus Number', 'nd-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => esc_url(plugins_url('focus-number.jpg', __FILE__ )),
      "class" => "",
      "category" => __( "NDS - Violet Coll.", "nd-shortcodes"),
      "params" => array(

        array(
           'type' => 'dropdown',
            'heading' => __( 'Layout', 'nd-shortcodes' ),
            'param_name' => 'nd_options_layout',
            'value' => $nd_options_layouts,
            'description' => __( "Choose the layout", "nd-shortcodes" )
         ),
        array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Number", "nd-shortcodes" ),
            "param_name" => "nd_options_number",
            "description" => __( "Insert the number", "nd-shortcodes" )
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
            "heading" => __( "Description", "nd-shortcodes" ),
            "param_name" => "nd_options_description",
            "description" => __( "Insert the description", "nd-shortcodes" )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Bg Color", "nd-shortcodes" ),
            "param_name" => "nd_options_bg_color",
            "description" => __( "Choose color for the background", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-1','layout-2','layout-4','layout-5' ) )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Text Color", "nd-shortcodes" ),
            "param_name" => "nd_options_text_color",
            "description" => __( "Choose color for text", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-1','layout-3','layout-4' ) )
         ),
         array(
            'type' => 'attach_image',
            'heading' => __( 'Image Bg', 'nd-shortcodes' ),
            'param_name' => 'nd_options_image_bg',
            'description' => __( 'Select image from media library.', 'nd-shortcodes' ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-4' ) )
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