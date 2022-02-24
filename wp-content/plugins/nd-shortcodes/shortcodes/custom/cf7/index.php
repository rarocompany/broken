<?php

//START CF7
add_shortcode('nd_options_cf7', 'nd_options_shortcode_cf7');
function nd_options_shortcode_cf7($atts, $content = null)
{  

  $atts = shortcode_atts(
  array(
    'nd_options_class' => '',
    'nd_options_layout' => '',
    'nd_options_label_color' => '',
    'nd_options_label_text' => '',
    'nd_options_title' => '',
    'nd_options_cf7' => '',
    'nd_options_fields_full_width' => '',
  ), $atts);

  $str = '';

  //get variables
  $nd_options_class = $atts['nd_options_class'];
  $nd_options_layout = $atts['nd_options_layout'];
  $nd_options_label_color = $atts['nd_options_label_color'];
  $nd_options_label_text = $atts['nd_options_label_text'];
  $nd_options_title = $atts['nd_options_title'];
  $nd_options_cf7 = $atts['nd_options_cf7'];
  $nd_options_fields_full_width = $atts['nd_options_fields_full_width'];



  //default value for avoid error include
  if ($nd_options_layout == '') { $nd_options_layout = "layout-1"; }

  //include the layout selected
  include 'layout/'.$nd_options_layout.'.php';


   return apply_filters('uds_shortcode_out_filter', $str);
}
//END CF7





//vc
add_action( 'vc_before_init', 'nd_options_cf7' );
function nd_options_cf7() {


  //get all cf7 forms
  $nd_options_cf7 = get_posts( 'post_type="wpcf7_contact_form"&numberposts=-1' );
  $nd_options_contact_forms = array();
  if ( $nd_options_cf7 ) {
    foreach ( $nd_options_cf7 as $nd_options_cform ) {
      $nd_options_contact_forms[ $nd_options_cform->post_title ] = $nd_options_cform->ID;
    }
  } else {
    $nd_options_contact_forms[ __( 'No contact forms found', 'nd-shortcodes' ) ] = 0;
  }
  //END get all cf7 forms


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
      "name" => __( "Contact Form 7", "nd-shortcodes" ),
      "base" => "nd_options_cf7",
      'description' => __( 'Add single cf7', 'nd-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => esc_url(plugins_url('cf7.jpg', __FILE__ )),
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
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Label Color", "nd-shortcodes" ),
            "param_name" => "nd_options_label_color",
            "value" => '#000',
            "description" => __( "Choose label color", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-1' ) )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Label Text", "nd-shortcodes" ),
            "param_name" => "nd_options_label_text",
            "description" => __( "Insert the label text", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-1' ) )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Title", "nd-shortcodes" ),
            "param_name" => "nd_options_title",
            'admin_label' => true,
            "description" => __( "Insert the title", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-1' ) )
         ), 
         array(
          'type' => 'dropdown',
          'heading' => __( 'CF7 Form', 'nicdark-shortcodes' ),
          'param_name' => 'nd_options_cf7',
          'value' => $nd_options_contact_forms,
          'save_always' => true,
          'description' => __( 'Choose your Form that you would like to show.', 'nd-shortcodes' ),
        ),
        array(
          'type' => 'checkbox',
          'heading' => __( 'Fields Full Width', 'nd-shortcodes' ),
          'param_name' => 'nd_options_fields_full_width',
          'value' => array( __( 'Yes', 'nd-shortcodes' ) => '1' ),
          'description' => __( 'Check if you want to make all contact form fields width 100%', 'nd-shortcodes' ),
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



//enable shortcode on cf7
add_filter( 'wpcf7_form_elements', 'nd_options_wpcf7_form_elements' );

function nd_options_wpcf7_form_elements( $nd_options_form ) {
    $nd_options_form = do_shortcode( $nd_options_form );

    return $nd_options_form;
}