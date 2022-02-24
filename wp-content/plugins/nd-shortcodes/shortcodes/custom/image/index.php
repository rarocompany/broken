<?php

//START
add_shortcode('nd_options_image', 'nd_options_shortcode_image');
function nd_options_shortcode_image($atts, $content = null)
{  

  $atts = shortcode_atts(
  array(
    'nd_options_class' => '',
    'nd_options_image' => '',
    'nd_options_width' => '',
    'nd_options_align' => '',
  ), $atts);

  $str = '';

  //get variables
  $nd_options_class = $atts['nd_options_class'];
  $nd_options_width = $atts['nd_options_width'];
  $nd_options_align = $atts['nd_options_align'];
  $nd_options_image = wp_get_attachment_image_src($atts['nd_options_image'],'large');

  
  $str .= '
    <div style="text-align:'.$nd_options_align.';" class="nd_options_section">
      <img alt="" style="width:'.$nd_options_width.';" class="'.$nd_options_class.' nd_options_margin_0 nd_options_padding_0 " src="'.$nd_options_image[0].'">
    </div>
   ';

   return apply_filters('uds_shortcode_out_filter', $str);
}
//END PRICE





//vc
add_action( 'vc_before_init', 'nd_options_image' );
function nd_options_image() {
   vc_map( array(
      "name" => __( "Image", "nd-shortcodes" ),
      "base" => "nd_options_image",
      'description' => __( 'Add Image', 'nd-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => esc_url(plugins_url('image.jpg', __FILE__ )),
      "class" => "",
      "category" => __( "NDS - Orange Coll.", "nd-shortcodes"),
      "params" => array(

        array(
            'type' => 'attach_image',
            'heading' => __( 'Image', 'nd-shortcodes' ),
            'param_name' => 'nd_options_image',
            'description' => __( 'Select image from media library.', 'nd-shortcodes' )
         ),
        array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Width", "nd-shortcodes" ),
            "param_name" => "nd_options_width",
            "description" => __( "Insert image width, '100%' or fixed width as '200px'", "nd-shortcodes" )
         ),
        array(
         'type' => 'dropdown',
          "heading" => __( "Image Align", "nd-shortcodes" ),
          'param_name' => 'nd_options_align',
          'value' => array( __( 'Select', 'nd-shortcodes' ) => '', __( 'Left', 'nd-shortcodes' ) => 'left', __( 'Right', 'nd-shortcodes' ) => 'right', __( 'Center', 'nd-shortcodes' ) => 'center'),
          'description' => __( "Choose alignment for your image", "nd-shortcodes" )
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