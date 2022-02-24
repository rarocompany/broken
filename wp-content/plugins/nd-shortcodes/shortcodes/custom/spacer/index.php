<?php

//START
add_shortcode('nd_options_spacer', 'nd_options_shortcode_spacer');
function nd_options_shortcode_spacer($atts, $content = null)
{  

  $atts = shortcode_atts(
  array(
    'nd_options_class' => '',
    'nd_options_height' => '',
    'nd_options_bg' => '',
  ), $atts);

  $str = '';

  //get variables
  $nd_options_class = $atts['nd_options_class'];
  $nd_options_height = $atts['nd_options_height'];
  $nd_options_bg = $atts['nd_options_bg'];

  
  $str .= '<div style="background-color:'.$nd_options_bg.'; height: '.$nd_options_height.'px;" class="nicdark_section '.$nd_options_class.' "></div>';

   return apply_filters('uds_shortcode_out_filter', $str);
}
//END





//vc
add_action( 'vc_before_init', 'nd_options_spacer' );
function nd_options_spacer() {

   vc_map( array(
      "name" => __( "Spacer", "nd-shortcodes" ),
      "base" => "nd_options_spacer",
      'description' => __( 'Add Spacer', 'nd-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => esc_url(plugins_url('spacer.jpg', __FILE__ )),
      "class" => "",
      "category" => __( "NDS - Orange Coll.", "nd-shortcodes"),
      "params" => array(
          

         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Spacer Height", "nd-shortcodes" ),
            "param_name" => "nd_options_height",
            'admin_label' => true,
            "description" => __( "Insert the height in px ( only numbers )", "nd-shortcodes" )
         ), 
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Spacer Bg", "nd-shortcodes" ),
            "param_name" => "nd_options_bg",
            "description" => __( "Choose spacer color", "nd-shortcodes" )
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