<?php

//START
add_shortcode('nd_options_services', 'nd_options_shortcode_services');
function nd_options_shortcode_services($atts, $content = null)
{  

  $atts = shortcode_atts(
  array(
    'nd_options_layout' => '',
    'nd_options_class' => '',
    'nd_options_image' => '',
    'nd_options_number' => '',
    'nd_options_number_color' => '',
    'nd_options_title' => '',
    'nd_options_title_color' => '',
    'nd_options_description' => '',
    'nd_options_description_color' => '',
    'nd_options_link' => '',
    'nd_options_button_bg' => '',
    'nd_options_button_text_color' => '',
    'nd_options_button_border_color' => '',
  ), $atts);

  $str = '';

  //get variables
  $nd_options_layout = $atts['nd_options_layout'];
  $nd_options_class = $atts['nd_options_class'];
  $nd_options_title = $atts['nd_options_title'];
  $nd_options_title_color = $atts['nd_options_title_color'];
  $nd_options_description = $atts['nd_options_description'];
  $nd_options_description_color = $atts['nd_options_description_color'];
  $nd_options_button_bg = $atts['nd_options_button_bg'];
  $nd_options_button_text_color = $atts['nd_options_button_text_color'];
  $nd_options_button_border_color = $atts['nd_options_button_border_color'];
  $nd_options_number = $atts['nd_options_number'];
  $nd_options_number_color = $atts['nd_options_number_color'];

  //nd_options_link 
  $nd_options_link = vc_build_link( $atts['nd_options_link'] );
  $nd_options_link_url = $nd_options_link['url'];
  $nd_options_link_title = $nd_options_link['title'];
  $nd_options_link_target = $nd_options_link['target'];
  $nd_options_link_rel = $nd_options_link['rel'];

  //target attr
  if ( $nd_options_link_target == '' ) {
    $nd_options_link_target_output = '';
  }else{
    $nd_options_link_target_output = 'target="'.$nd_options_link_target.'"';
  }

  //nd_options_image
  $nd_options_image_src = wp_get_attachment_image_src($atts['nd_options_image'],'large');


  //default value for avoid error include
  if ($nd_options_layout == '') { $nd_options_layout = "layout-1"; }

  //include the layout selected
  include 'layout/'.$nd_options_layout.'.php';

  //return the code
  return apply_filters('uds_shortcode_out_filter', $str);

}
//END





//vc
add_action( 'vc_before_init', 'nd_options_services' );
function nd_options_services() {



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
      "name" => __( "Service", "nd-shortcodes" ),
      "base" => "nd_options_services",
      'description' => __( 'Add Service', 'nd-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => esc_url(plugins_url('service.jpg', __FILE__ )),
      "class" => "",
      "category" => __( "NDS - Orange Coll.", "nd-shortcodes"),
      "params" => array(
   

        array(
           'type' => 'dropdown',
            'heading' => "Layout",
            'param_name' => 'nd_options_layout',
            'value' => $nd_options_layouts,
            'description' => __( "Choose the layout", "nd-shortcodes" )
         ),
         array(
            'type' => 'attach_image',
            'heading' => __( 'Image', 'nd-shortcodes' ),
            'param_name' => 'nd_options_image',
            'description' => __( 'Select image from media library.', 'nd-shortcodes' ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-1','layout-2','layout-3','layout-5','layout-6','layout-7' ) )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Number", "nd-shortcodes" ),
            "param_name" => "nd_options_number",
            "description" => __( "Insert the number", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-4' ) )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Number Color", "nd-shortcodes" ),
            "param_name" => "nd_options_number_color",
            "description" => __( "Insert the number color", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-4' ) )
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
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Title Color", "nd-shortcodes" ),
            "param_name" => "nd_options_title_color",
            "value" => '#727475',
            "description" => __( "Choose title color", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-1','layout-2','layout-3','layout-4','layout-5','layout-6' ) )
         ),
         array(
            "type" => "textarea",
            "class" => "",
            "heading" => __( "Description", "nd-shortcodes" ),
            "param_name" => "nd_options_description",
            "description" => __( "Insert the description", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-1','layout-2','layout-3','layout-4','layout-6','layout-7' ) )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Color Description", "nd-shortcodes" ),
            "param_name" => "nd_options_description_color",
            "value" => '#a3a3a3',
            "description" => __( "Choose description color", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-1','layout-2','layout-3','layout-4','layout-6' ) )
         ),
         array(
         'type' => 'vc_link',
          'heading' => "Link",
          'param_name' => 'nd_options_link',
          'description' => __( "Insert service link", "nd-shortcodes" ),
          'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-1','layout-2','layout-3','layout-6' ) )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Button Bg", "nd-shortcodes" ),
            "param_name" => "nd_options_button_bg",
            "value" => '#000',
            "description" => __( "Choose button background color", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-2','layout-3' ) )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Button Text Color", "nd-shortcodes" ),
            "param_name" => "nd_options_button_text_color",
            "value" => '#fff',
            "description" => __( "Choose button text color", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-2','layout-3' ) )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Button Border Color", "nd-shortcodes" ),
            "param_name" => "nd_options_button_border_color",
            "value" => '#000',
            "description" => __( "Choose button border color", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-2','layout-3' ) )
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