<?php

//START
add_shortcode('nd_options_list', 'nd_options_shortcode_list');
function nd_options_shortcode_list($atts, $content = null)
{  

  $atts = shortcode_atts(
  array(
    'nd_options_class' => '',
    'nd_options_image' => '',
    'nd_options_title' => '',
    'nd_options_price' => '',
    'nd_options_description' => '',
    'nd_options_label' => '',
    'nd_options_label_color' => '',
  ), $atts);

  $str = '';

  //get variables
  $nd_options_class = $atts['nd_options_class'];
  $nd_options_title = $atts['nd_options_title'];
  $nd_options_price = $atts['nd_options_price'];
  $nd_options_description = $atts['nd_options_description'];
  $nd_options_label = $atts['nd_options_label'];

  //label color
  $nd_options_label_color = $atts['nd_options_label_color'];
  if ( $nd_options_label_color == '' ) {
    $nd_options_label_class = 'nd_options_color_grey nd_options_border_1_solid_grey';
  }else{
    $nd_options_label_class = 'nd_options_color_white';
  }

  //declare variables
  $nd_options_image_padding = '';

  //nd_options_image
  $nd_options_image_src = wp_get_attachment_image_src($atts['nd_options_image'],'large');
  if ( $nd_options_image_src != '' ) {
    $nd_options_output_image = '<img alt="" class="nd_options_position_absolute nd_options_left_0 nd_options_position_initial_all_iphone nd_options_width_100_percentage_all_iphone nd_options_z_index_9" width="80" src="'.$nd_options_image_src[0].'">';
    $nd_options_image_padding = 'nd_options_padding_left_100 nd_options_padding_0_all_iphone';
  }else{
    $nd_options_output_image = ''; 
  }


  
  $str .= '
    <div class=" nd_options_list_component_l1 nd_options_section nd_options_position_relative '.$nd_options_class.' ">

        '.$nd_options_output_image.'
        
        <div class="nd_options_section nd_options_height_15"></div>
        <div class="nd_options_section nd_options_position_relative">
            <div class="nd_options_position_absolute nd_options_height_3 nd_options_width_100_percentage nd_options_bottom_2 nd_options_border_bottom_2_dotted_grey"></div>
            <h4 class=" '.$nd_options_image_padding.' nd_options_bg_white nd_options_float_left nd_options_position_relative nd_options_padding_right_10"><strong>'.$nd_options_title.'</strong></h4>
            <h4 class="nd_options_bg_white nd_options_float_right nd_options_position_relative nd_options_padding_left_10"><strong>'.$nd_options_price.'</strong></h4>
        </div>
        <div class="nd_options_section nd_options_height_10"></div>
        <div class="nd_options_section">
            <p class=" '.$nd_options_image_padding.' nd_options_font_weight_lighter nd_options_float_left">'.$nd_options_description.'</p>
            <p style="background-color:'.$nd_options_label_color.';" class=" '.$nd_options_label_class.' nd_options_display_inline_block nd_options_first_font nd_options_padding_5_10 nd_options_border_radius_15 nd_options_float_right nd_options_font_size_13">'.$nd_options_label.'</p>
        </div>
    </div>
  ';

   return apply_filters('uds_shortcode_out_filter', $str);
}
//END PRICE





//vc
add_action( 'vc_before_init', 'nd_options_list' );
function nd_options_list() {
   vc_map( array(
      "name" => __( "List", "nd-shortcodes" ),
      "base" => "nd_options_list",
      'description' => __( 'Add List', 'nd-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => esc_url(plugins_url('list.jpg', __FILE__ )),
      "class" => "",
      "category" => __( "NDS - Violet Coll.", "nd-shortcodes"),
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
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Price", "nd-shortcodes" ),
            "param_name" => "nd_options_price",
            "description" => __( "Insert the price", "nd-shortcodes" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Description", "nd-shortcodes" ),
            "param_name" => "nd_options_description",
            "description" => __( "Insert the description", "nd-shortcodes" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Label", "nd-shortcodes" ),
            "param_name" => "nd_options_label",
            "description" => __( "Insert the label", "nd-shortcodes" )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Label Bg Color", "nd-shortcodes" ),
            "param_name" => "nd_options_label_color",
            "description" => __( "Choose label background color", "nd-shortcodes" )
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