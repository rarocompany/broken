<?php

//START
add_shortcode('nd_options_toogle', 'nd_options_shortcode_toogle');
function nd_options_shortcode_toogle($atts, $content = null)
{  

  $atts = shortcode_atts(
  array(
    'nd_options_class' => '',
    'nd_options_title' => '',
    'nd_options_description' => '',
    'nd_options_color' => '',
  ), $atts);

  $str = '';

  //get variables
  $nd_options_class = $atts['nd_options_class'];
  $nd_options_title = $atts['nd_options_title'];
  $nd_options_description = $atts['nd_options_description'];
  $nd_options_color = $atts['nd_options_color'];


  $nd_options_id_component = rand(0, 1000);

  
  $str .='
  
  <script type="text/javascript">
    //<![CDATA[
    
    jQuery(document).ready(function() {

      //toogle
      jQuery( ".nd_options_toogle_title_open_'.$nd_options_id_component.'" ).click(function() {
        jQuery( ".nd_options_toogle_content_'.$nd_options_id_component.'" ).show( "slow", function() {
          jQuery( ".nd_options_toogle_title_open_'.$nd_options_id_component.'" ).css("display","none");
          jQuery( ".nd_options_toogle_title_close_'.$nd_options_id_component.'" ).css("display","block");
        });
      });
      jQuery( ".nd_options_toogle_title_close_'.$nd_options_id_component.'" ).click(function() {
        jQuery( ".nd_options_toogle_content_'.$nd_options_id_component.'" ).hide( "slow", function() {
          jQuery( ".nd_options_toogle_title_close_'.$nd_options_id_component.'" ).css("display","none");
          jQuery( ".nd_options_toogle_title_open_'.$nd_options_id_component.'" ).css("display","block");  
        }); 
      });

    });

    //]]>
  </script>

  ';



  $str .= '

    <div class="nd_options_section '.$nd_options_class.' ">

      <div class="nd_options_section nd_options_box_sizing_border_box">
        <p class="nd_options_toogle_title nd_options_first_font nd_options_font_size_17 nd_options_position_relative nd_options_padding_right_20 nd_options_padding_top_5 nd_options_padding_left_45 nd_options_padding_bottom_5">
          <span style="background-color:'.$nd_options_color.';" class="nd_options_cursor_pointer nd_options_text_align_center nd_options_toogle_title_open_'.$nd_options_id_component.' nd_options_width_25 nd_options_height_25  nd_options_position_absolute nd_options_top_0 nd_options_left_0">
            <img alt="" class="nd_options_margin_top_6" width="12" src="'.esc_url(plugins_url('icon-add-white.png', __FILE__ )).'">
          </span> 
          <span style="background-color:'.$nd_options_color.';"  class="nd_options_cursor_pointer nd_options_text_align_center nd_options_toogle_title_close_'.$nd_options_id_component.' nd_options_width_25 nd_options_display_none nd_options_height_25  nd_options_position_absolute nd_options_top_0 nd_options_left_0">
            <img alt="" class="nd_options_margin_top_6" width="12" src="'.esc_url(plugins_url('icon-less-white.png', __FILE__ )).'">
          </span>
          '.$nd_options_title.'
        </p>
      </div>
      
      <div class="nd_options_display_none nd_options_padding_20 nd_options_padding_left_45 nd_options_toogle_content_'.$nd_options_id_component.' nd_options_section nd_options_box_sizing_border_box">
        <p>'.$nd_options_description.'</p>
      </div>

    </div>

   ';


   return apply_filters('uds_shortcode_out_filter', $str);
}
//END PRICE





//vc
add_action( 'vc_before_init', 'nd_options_toogle' );
function nd_options_toogle() {
   vc_map( array(
      "name" => __( "Toogle", "nd-shortcodes" ),
      "base" => "nd_options_toogle",
      'description' => __( 'Add Toogle', 'nd-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => esc_url(plugins_url('toogle.jpg', __FILE__ )),
      "class" => "",
      "category" => __( "NDS - Violet Coll.", "nd-shortcodes"),
      "params" => array(


        array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Title", "nd-shortcodes" ),
            "param_name" => "nd_options_title",
            "description" => __( "Insert the title", "nd-shortcodes" )
         ),
        array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Description", "nd-shortcodes" ),
            "param_name" => "nd_options_description",
            "description" => __( "Insert the description", "nd-shortcodes" )
         ),
        array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Color", "nd-shortcodes" ),
            "param_name" => "nd_options_color",
            "description" => __( "Choose color", "nd-shortcodes" )
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