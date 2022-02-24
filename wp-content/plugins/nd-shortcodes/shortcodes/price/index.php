<?php

//START PRICE
add_shortcode('nd_options_price', 'nd_options_shortcode_price');
function nd_options_shortcode_price($atts, $content = null)
{  

  $atts = shortcode_atts(
  array(
    'nd_options_class' => '',
    'nd_options_image' => '',
    'nd_options_title' => '',
    'nd_options_price' => '',
    'nd_options_description' => '',
    'nd_options_link' => '',
    'nd_options_color' => '',
  ), $atts);

  $str = '';

  //get variables
  $nd_options_class = $atts['nd_options_class'];
  $nd_options_title = $atts['nd_options_title'];
  $nd_options_price = $atts['nd_options_price'];
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


  <!--START PRICE-->
  <div class="nd_options_section '.$nd_options_class.'">
                                        
    
    <!--START image--> 
    <div class="nd_options_section nd_options_box_sizing_border_box">

        <div class="nd_options_section nd_options_position_relative">
                
            <img alt="" class="nd_options_section" src="'.$nd_options_image_src[0].'">

            <div class="nd_options_bg_greydark_alpha_gradient_3 nd_options_position_absolute nd_options_left_0 nd_options_height_100_percentage nd_options_width_100_percentage nd_options_box_sizing_border_box">
                
                <div class="nd_options_position_absolute nd_options_bottom_30 nd_options_width_100_percentage nd_options_padding_botttom_0 nd_options_padding_50 nd_options_box_sizing_border_box nd_options_text_align_center">
                    <h3 class="nd_options_color_white nd_options_margin_0_important"><strong>'.$nd_options_title.'</strong></h3>
                    <div class="nd_options_section nd_options_height_10"></div>
                    <div class="nd_options_section nd_options_height_10 nd_options_display_none_all_iphone"></div>
                    <h1 class="nd_options_color_white nd_options_margin_0_important nd_options_font_size_60 nd_options_font_size_40_all_iphone nd_options_line_height_40_all_iphone"><strong>'.$nd_options_price.'</strong></h1>
                </div>

            </div>

        </div>
          
    </div>
    <!--END image-->


    <!--START content--> 
    <div class="nd_options_section nd_options_border_1_solid_grey">
        <div class="nd_options_section nd_options_padding_20 nd_options_box_sizing_border_box">
            
            '.$nd_options_description.'

            <div class="nd_options_section nd_options_height_20"></div>

            <div class="nd_options_width_100_percentage  nd_options_box_sizing_border_box nd_options_float_left">
                <a rel="'.$nd_options_link_rel.'" target="'.$nd_options_link_target.'" style="background-color:'.$nd_options_color.';" class="nd_options_display_inline_block nd_options_text_align_center nd_options_box_sizing_border_box nd_options_width_100_percentage nd_options_color_white nd_options_padding_10_20 nd_options_border_radius_3 " href="'.$nd_options_link_url.'">'.$nd_options_link_title.'</a>   
            </div>

        </div>
        
    </div>
    <!--END content--> 



  </div>
  <!--END PRICE-->


   ';

   return apply_filters('uds_shortcode_out_filter', $str);
}
//END PRICE





//vc
add_action( 'vc_before_init', 'nd_options_price' );
function nd_options_price() {
   vc_map( array(
      "name" => __( "Price", "nd-shortcodes" ),
      "base" => "nd_options_price",
      'description' => __( 'Add single Price', 'nd-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => esc_url(plugins_url('price.jpg', __FILE__ )),
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
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Price", "nd-shortcodes" ),
            "param_name" => "nd_options_price",
            'admin_label' => true,
            "description" => __( "Insert the price", "nd-shortcodes" )
         ),
         array(
            "type" => "textarea_html",
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