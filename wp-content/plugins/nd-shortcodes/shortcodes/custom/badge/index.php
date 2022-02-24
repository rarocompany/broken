<?php

//START
add_shortcode('nd_options_badge', 'nd_options_shortcode_badge');
function nd_options_shortcode_badge($atts, $content = null)
{  

  $atts = shortcode_atts(
  array(
    'nd_options_class' => '',
    'nd_options_left_text' => '',
    'nd_options_left_text_color' => '',
    'nd_options_right_text' => '',
    'nd_options_right_text_color' => '',
    'nd_options_advanced_settings' => '',
    'nd_options_left_text_tag' => '',
    'nd_options_left_text_font' => '',
    'nd_options_right_text_tag' => '',
    'nd_options_right_text_font' => '',
  ), $atts);

  $str = '';

  //get variables
  $nd_options_class = $atts['nd_options_class'];
  $nd_options_left_text = $atts['nd_options_left_text'];
  $nd_options_left_text_color = $atts['nd_options_left_text_color'];
  $nd_options_right_text = $atts['nd_options_right_text'];
  $nd_options_right_text_color = $atts['nd_options_right_text_color'];
  $nd_options_left_text_tag = $atts['nd_options_left_text_tag'];
  $nd_options_left_text_font = $atts['nd_options_left_text_font'];
  $nd_options_right_text_tag = $atts['nd_options_right_text_tag'];
  $nd_options_right_text_font = $atts['nd_options_right_text_font'];
  $nd_options_advanced_settings = $atts['nd_options_advanced_settings'];

  //default values
  if ( $nd_options_right_text_tag == '' ) { $nd_options_right_text_tag = 'p'; }
  if ( $nd_options_left_text_tag == '' ) { $nd_options_left_text_tag = 'p'; }

  
  $str .= '


  <div class="nd_options_section '.$nd_options_class.' nd_options_display_table ">
    <div class="nd_options_display_table_cell nd_options_vertical_align_middle nd_options_width_50_percentage nd_options_text_align_left nd_options_padding_10 nd_options_box_sizing_border_box">
      <'.$nd_options_left_text_tag.' class=" '.$nd_options_left_text_font.' nd_options_margin_0 nd_options_padding_0" style="color:'.$nd_options_left_text_color.';">'.$nd_options_left_text.'</'.$nd_options_left_text_tag.'>
    </div>
    <div class="nd_options_display_table_cell nd_options_vertical_align_middle nd_options_width_50_percentage nd_options_text_align_right nd_options_padding_10 nd_options_box_sizing_border_box">
      <'.$nd_options_right_text_tag.' class=" '.$nd_options_right_text_font.' nd_options_margin_0 nd_options_padding_0" style="color:'.$nd_options_right_text_color.';">'.$nd_options_right_text.'</'.$nd_options_right_text_tag.'>
    </div>
  </div>


   ';

   return apply_filters('uds_shortcode_out_filter', $str);
}
//END PRICE





//vc
add_action( 'vc_before_init', 'nd_options_badge' );
function nd_options_badge() {
   vc_map( array(
      "name" => __( "Badge", "nd-shortcodes" ),
      "base" => "nd_options_badge",
      'description' => __( 'Add Badge', 'nd-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => esc_url(plugins_url('badge.jpg', __FILE__ )),
      "class" => "",
      "category" => __( "NDS - Orange Coll.", "nd-shortcodes"),
      "params" => array(


         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Left Text", "nd-shortcodes" ),
            "param_name" => "nd_options_left_text",
            'admin_label' => true,
            "description" => __( "Insert left text", "nd-shortcodes" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Right Text", "nd-shortcodes" ),
            "param_name" => "nd_options_right_text",
            "description" => __( "Insert right text", "nd-shortcodes" )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Left Text Color", "nd-shortcodes" ),
            "param_name" => "nd_options_left_text_color",
            "description" => __( "Choose left text color", "nd-shortcodes" )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Right Text Color", "nd-shortcodes" ),
            "param_name" => "nd_options_right_text_color",
            "description" => __( "Choose right text color", "nd-shortcodes" )
         ),
          array(
         'type' => 'dropdown',
          "heading" => __( "Enable Advanced Settings", "nd-shortcodes" ),
          'param_name' => 'nd_options_advanced_settings',
          'value' => array( __( 'Select', 'nd-shortcodes' ) => '', __( 'No', 'nd-shortcodes' ) => '0', __( 'Yes', 'nd-shortcodes' ) => '1'),
          'description' => __( "Enable Advanced Settings for more settings", "nd-shortcodes" )
         ),
           array(
         'type' => 'dropdown',
          "heading" => __( "Left Text Tag", "nd-shortcodes" ),
          'param_name' => 'nd_options_left_text_tag',
          'value' => array('select','p','h1','h2','h3','h4','h5','h6'),
          'description' => __( "Select Tag for left text", "nd-shortcodes" ),
          'dependency' => array( 'element' => 'nd_options_advanced_settings', 'value' => array( '1' ) )
         ),
             array(
         'type' => 'dropdown',
          "heading" => __( "Left Text Font", "nd-shortcodes" ),
          'param_name' => 'nd_options_left_text_font',
          'value' => array('select'=>'','First Font'=>'nd_options_first_font','Second Font'=>'nd_options_second_font'),
          'description' => __( "Select Font for left text", "nd-shortcodes" ),
          'dependency' => array( 'element' => 'nd_options_advanced_settings', 'value' => array( '1' ) )
         ),
          array(
         'type' => 'dropdown',
          "heading" => __( "Right Text Tag", "nd-shortcodes" ),
          'param_name' => 'nd_options_right_text_tag',
          'value' => array('select','p','h1','h2','h3','h4','h5','h6'),
          'description' => __( "Select Tag for right text", "nd-shortcodes" ),
          'dependency' => array( 'element' => 'nd_options_advanced_settings', 'value' => array( '1' ) )
         ),
          array(
         'type' => 'dropdown',
          "heading" => __( "Right Text Font", "nd-shortcodes" ),
          'param_name' => 'nd_options_right_text_font',
          'value' => array('select'=>'','First Font'=>'nd_options_first_font','Second Font'=>'nd_options_second_font'),
          'description' => __( "Select Font for right text", "nd-shortcodes" ),
          'dependency' => array( 'element' => 'nd_options_advanced_settings', 'value' => array( '1' ) )
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