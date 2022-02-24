<?php

//START FOCUS
add_shortcode('nd_options_divider', 'nd_options_shortcode_divider');
function nd_options_shortcode_divider($atts, $content = null)
{  

  $atts = shortcode_atts(
  array(
    'nd_options_class' => '',
    'nd_options_layout' => '',
    'nd_options_height' => '',
    'nd_options_width' => '',
    'nd_options_color' => '',
    'nd_options_align' => '',
  ), $atts);

  $str = '';

  //get variables
  $nd_options_class = $atts['nd_options_class'];
  $nd_options_layout = $atts['nd_options_layout'];
  $nd_options_height = $atts['nd_options_height']; if ( $nd_options_height == '' ) { $nd_options_height = '2px'; }
  $nd_options_width = $atts['nd_options_width']; if ( $nd_options_width == '' ) { $nd_options_width = '30px'; }
  $nd_options_color = $atts['nd_options_color']; if ( $nd_options_color == '' ) { $nd_options_color = '#f1f1f1'; }
  $nd_options_align = $atts['nd_options_align']; if ( $nd_options_align == '' ) { $nd_options_align = 'nd_options_text_align_center'; }

  //default value for avoid error include
  if ($nd_options_layout == '') { $nd_options_layout = "layout-1"; }

  //include the layout selected
  include 'layout/'.$nd_options_layout.'.php';

  return apply_filters('uds_shortcode_out_filter', $str);
}
//END FOCUS





//vc
add_action( 'vc_before_init', 'nd_options_divider' );
function nd_options_divider() {


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
      "name" => __( "Divider", "nd-shortcodes" ),
      "base" => "nd_options_divider",
      'description' => __( 'Add single divider', 'nd-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => esc_url(plugins_url('divider.jpg', __FILE__ )),
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
            "heading" => __( "Width", "nd-shortcodes" ),
            "param_name" => "nd_options_width",
            'admin_label' => true,
            "description" => __( "Insert the width: eg 50px or 100%", "nd-shortcodes" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Height", "nd-shortcodes" ),
            "param_name" => "nd_options_height",
            "description" => __( "Insert the height in px: eg 5px", "nd-shortcodes" )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "BG Color", "nd-shortcodes" ),
            "param_name" => "nd_options_color",
            "description" => __( "Choose bg color", "nd-shortcodes" )
         ),
        array(
         'type' => 'dropdown',
          "heading" => __( "Align", "nd-shortcodes" ),
          'param_name' => 'nd_options_align',
          'value' => array('select'=>'','Left'=>'nd_options_text_align_left','Center'=>'nd_options_text_align_center','Right'=>'nd_options_text_align_right'),
          'description' => __( "Select the magic popup type", "nd-shortcodes" )
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