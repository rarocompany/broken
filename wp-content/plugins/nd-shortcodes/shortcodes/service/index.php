<?php

//START SERVICE
add_shortcode('nd_options_service', 'nd_options_shortcode_service');
function nd_options_shortcode_service($atts, $content = null)
{  

  $atts = shortcode_atts(
  array(
    'nd_options_class' => '',
    'nd_options_image' => '',
    'nd_options_title' => '',
    'nd_options_description' => '',
    'nd_options_link' => '',
    'nd_options_color' => '',
  ), $atts);

  $str = '';

  //get variables
  $nd_options_class = $atts['nd_options_class'];
  $nd_options_title = $atts['nd_options_title'];
  $nd_options_description = $atts['nd_options_description'];
  $nd_options_color = $atts['nd_options_color'];

  //nd_options_link 
  $nd_options_link = vc_build_link( $atts['nd_options_link'] );
  $nd_options_link_url = $nd_options_link['url'];
  $nd_options_link_title = $nd_options_link['title'];
  $nd_options_link_target = $nd_options_link['target'];
  $nd_options_link_rel = $nd_options_link['rel'];

  //nd_options_image
  $nd_options_image_src = wp_get_attachment_image_src($atts['nd_options_image'],'large');
      
  
  $str .= '

  <!--START SERVICE-->
  <div class="nd_options_section nd_options_position_relative '.$nd_options_class.' ">
      <img alt="" class="nd_options_position_absolute" width="50" src="'.$nd_options_image_src[0].'">
      <div class="nd_options_section nd_options_padding_left_70 nd_options_box_sizing_border_box">
          <h2 class="nd_options_margin_0_important"><strong>'.$nd_options_title.'</strong></h2>
          <div class="nd_options_section nd_options_height_20"></div>
          <p class="nd_options_margin_0_important">'.$nd_options_description.'</p>
          <div class="nd_options_section nd_options_height_20"></div>
          <a rel="'.$nd_options_link_rel.'" target="'.$nd_options_link_target.'" style="background-color:'.$nd_options_color.';" class="nd_options_display_inline_block nd_options_color_white nd_options_first_font nd_options_padding_8 nd_options_border_radius_3 nd_options_font_size_13" href="'.$nd_options_link_url.'">'.$nd_options_link_title.'</a>
      </div>
  </div>
  <!--END SERVICE-->

   ';

   return apply_filters('uds_shortcode_out_filter', $str);
}
//END SERVICE





//vc
add_action( 'vc_before_init', 'nd_options_service' );
function nd_options_service() {
   vc_map( array(
      "name" => __( "Service", "nd-shortcodes" ),
      "base" => "nd_options_service",
      'description' => __( 'Add single Service', 'nd-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => esc_url(plugins_url('service.jpg', __FILE__ )),
      "class" => "",
      "category" => __( "ND Shortcodes", "nd-shortcodes"),
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
            "heading" => __( "Title", "nd-shortcodes" ),
            "param_name" => "nd_options_title",
            'admin_label' => true,
            "description" => __( "Insert the title", "nd-shortcodes" )
         ),
         array(
            "type" => "textarea",
            "class" => "",
            "heading" => __( "Description", "nd-shortcodes" ),
            "param_name" => "nd_options_description",
            "description" => __( "Insert the description", "nd-shortcodes" )
         ),
         array(
         'type' => 'vc_link',
          'heading' => "Link",
          'param_name' => 'nd_options_link',
          'description' => __( "Insert button link", "nd-shortcodes" )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Color", "nd-shortcodes" ),
            "param_name" => "nd_options_color",
            "value" => '#000',
            "description" => __( "Choose button color", "nd-shortcodes" )
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