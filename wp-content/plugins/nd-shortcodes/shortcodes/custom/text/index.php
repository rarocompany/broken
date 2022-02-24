<?php


//START
add_shortcode('nd_options_text', 'nd_options_shortcode_text');
function nd_options_shortcode_text($atts, $content = null)
{  


  $atts = shortcode_atts(
  array(
    'nd_options_class' => '',
    'nd_options_text' => '',
    'nd_options_text_tag' => '',
    'nd_options_text_color' => '',
    'nd_options_text_weight' => '',
    'nd_options_text_font_size' => '',
    'nd_options_text_line_height' => '',
    'nd_options_text_letter_spacing' => '',
    'nd_options_text_family' => '',
    'nd_options_text_align' => '',
    'nd_options_text_padding' => '',
    'nd_options_underline_effect_color' => '',
    'nd_options_underline_effect' => '',
  ), $atts);

  $str = '';

  //get variables
  $nd_options_class = $atts['nd_options_class'];
  $nd_options_text = $atts['nd_options_text'];
  $nd_options_text_tag = $atts['nd_options_text_tag'];
  $nd_options_text_color = $atts['nd_options_text_color'];
  $nd_options_text_weight = $atts['nd_options_text_weight'];
  $nd_options_text_font_size = $atts['nd_options_text_font_size'];
  $nd_options_text_line_height = $atts['nd_options_text_line_height'];
  $nd_options_text_letter_spacing = $atts['nd_options_text_letter_spacing'];
  $nd_options_text_family = $atts['nd_options_text_family'];
  $nd_options_text_align = $atts['nd_options_text_align'];
  $nd_options_text_padding = $atts['nd_options_text_padding'];

  //underline

  $nd_options_id_underline = rand(0, 1000);

  $nd_options_underline_effect_color = $atts['nd_options_underline_effect_color']; if ( $nd_options_underline_effect_color == '' ) { $nd_options_underline_effect_color = ''; }
  $nd_options_underline_effect = $atts['nd_options_underline_effect']; if ( $nd_options_underline_effect == '' ) { $nd_options_underline_effect = ''; }
  if ( $nd_options_underline_effect == 'yes' ) {
    $nd_options_underline_effect_class = 'nd_options_underline_effect nd_options_underline_effect_'.$nd_options_id_underline; 

    $str .= '

      <style>
      .nd_options_underline_effect.nd_options_underline_effect_'.$nd_options_id_underline.' u:after {
        background-color:'.$nd_options_underline_effect_color.';
      }
      </style>

    ';

  }else{
    $nd_options_underline_effect_class = ''; 
  }


  $str .= ' <'.$nd_options_text_tag.' style="color:'.$nd_options_text_color.'; padding:'.$nd_options_text_padding.'px; text-align:'.$nd_options_text_align.'; font-size:'.$nd_options_text_font_size.'px; line-height:'.$nd_options_text_line_height.'px; letter-spacing: '.$nd_options_text_letter_spacing.'px; font-weight:'.$nd_options_text_weight.';" class=" '.$nd_options_underline_effect_class.' '.$nd_options_class.' '.$nd_options_text_family.' ">'.$nd_options_text.'</'.$nd_options_text_tag.'> ';

   return apply_filters('uds_shortcode_out_filter', $str);
}
//END





//vc
add_action( 'vc_before_init', 'nd_options_text' );
function nd_options_text() {

   vc_map( array(
      "name" => __( "Text", "nd-shortcodes" ),
      "base" => "nd_options_text",
      'description' => __( 'Add Some Text', 'nd-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => esc_url(plugins_url('text.jpg', __FILE__ )),
      "class" => "",
      "category" => __( "NDS - Orange Coll.", "nd-shortcodes"),
      "params" => array(
          

         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Text", "nd-shortcodes" ),
            "param_name" => "nd_options_text",
            "description" => __( "Insert Text", "nd-shortcodes" )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Text Color", "nd-shortcodes" ),
            "param_name" => "nd_options_text_color",
            "description" => __( "Choose the color for your text", "nd-shortcodes" )
         ),
          array(
         'type' => 'dropdown',
          "heading" => __( "Tag", "nd-shortcodes" ),
          'param_name' => 'nd_options_text_tag',
          'value' => array( 'Select Tag','h1','h2','h3','h4','h5','h6','p'),
          'description' => __( "Select the tag for your text", "nd-shortcodes" )
         ),
           array(
         'type' => 'dropdown',
          "heading" => __( "Font Weight", "nd-shortcodes" ),
          'param_name' => 'nd_options_text_weight',
          'value' => array('Select Weight','normal','bold','lighter'),
          'description' => __( "Select the font weight", "nd-shortcodes" )
         ),
           array(
         'type' => 'dropdown',
          "heading" => __( "Font Family", "nd-shortcodes" ),
          'param_name' => 'nd_options_text_family',
          'value' => array( 'Select Font' => '', 'First Font' => 'nd_options_first_font' , 'Second Font' => 'nd_options_second_font', 'Third Font' => 'nd_options_third_font' ),
          'description' => __( "Select the font family", "nd-shortcodes" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Font Size", "nd-shortcodes" ),
            "param_name" => "nd_options_text_font_size",
            "description" => __( "Insert font size in px ( only number )", "nd-shortcodes" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Line Height", "nd-shortcodes" ),
            "param_name" => "nd_options_text_line_height",
            "description" => __( "Insert line height in px ( only number )", "nd-shortcodes" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Letter Spacing", "nd-shortcodes" ),
            "param_name" => "nd_options_text_letter_spacing",
            "description" => __( "Insert letter spacing in px ( only number )", "nd-shortcodes" )
         ),
          array(
         'type' => 'dropdown',
          "heading" => __( "Text Align", "nd-shortcodes" ),
          'param_name' => 'nd_options_text_align',
          'value' => array( 'Select Align' => 'left', 'Align Left' => 'left' , 'Align Right' => 'right', 'Align Center' => 'center' ),
          'description' => __( "Select the text align", "nd-shortcodes" )
         ),
          array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Text Padding", "nd-shortcodes" ),
            "param_name" => "nd_options_text_padding",
            "description" => __( "Insert padding in px ( only number )", "nd-shortcodes" )
         ),
           array(
         'type' => 'dropdown',
          "heading" => __( "Add Underline Effect", "nd-shortcodes" ),
          'param_name' => 'nd_options_underline_effect',
          'value' => array( 'Select' => 'not', 'Not' => 'not' , 'Yes' => 'yes' ),
          'description' => __( "Select if you want to add the underline effect on your text. Remember to inser the proper u tag, Example : &lt;u&gt;Text&lt;/u&gt;", "nd-shortcodes" )
         ),
          array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Underline Color", "nd-shortcodes" ),
            "param_name" => "nd_options_underline_effect_color",
            "value" => '#000',
            "description" => __( "Choose underline color", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_underline_effect', 'value' => array( 'yes' ) )
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