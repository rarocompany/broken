<?php

//START progress
add_shortcode('nd_options_progress', 'nd_options_shortcode_progress');
function nd_options_shortcode_progress($atts, $content = null)
{  

  $atts = shortcode_atts(
  array(
    'nd_options_class' => '',
    'nd_options_layout' => '',
    'nd_options_image' => '',
    'nd_options_color' => '',
    'nd_options_color_2' => '',
    'nd_options_progress' => '',
  ), $atts);

  $str = '';

  //get variables
  $nd_options_class = $atts['nd_options_class'];
  $nd_options_layout = $atts['nd_options_layout'];
  $nd_options_color = $atts['nd_options_color'];
  $nd_options_color_2 = $atts['nd_options_color_2'];
  $nd_options_progress = $atts['nd_options_progress'];

  //nd_options_image
  $nd_options_image_src = wp_get_attachment_image_src($atts['nd_options_image'],'large');
      

  //default value for avoid error include
  if ($nd_options_layout == '') { $nd_options_layout = "layout-1"; }

  //include the layout selected
  include 'layout/'.$nd_options_layout.'.php';

  
  return apply_filters('uds_shortcode_out_filter', $str);
}
//END progress





//vc
add_action( 'vc_before_init', 'nd_options_progress' );
function nd_options_progress() {


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
      "name" => __( "Progress", "nd-shortcodes" ),
      "base" => "nd_options_progress",
      'description' => __( 'Add progress bar', 'nd-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => esc_url(plugins_url('progress.jpg', __FILE__ )),
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
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Progress", "nd-shortcodes" ),
            "param_name" => "nd_options_progress",
            'admin_label' => true,
            "description" => __( "Insert the number of the progress, from 1 % to 100 % ( ONLY NUMBER ) ", "nd-shortcodes" )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Bar Color", "nd-shortcodes" ),
            "param_name" => "nd_options_color",
            "value" => '#000',
            "description" => __( "Choose bar color", "nd-shortcodes" )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "BG Color", "nd-shortcodes" ),
            "param_name" => "nd_options_color_2",
            "value" => '#fff',
            "description" => __( "Choose the background color", "nd-shortcodes" )
         ),
         array(
            'type' => 'attach_image',
            'heading' => __( 'Bar Image', 'nd-shortcodes' ),
            'param_name' => 'nd_options_image',
            'description' => __( 'Set the image for replace the bar color', 'nd-shortcodes' )
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