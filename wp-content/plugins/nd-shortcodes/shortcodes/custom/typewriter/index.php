<?php

//START
add_shortcode('nd_options_typewriter', 'nd_options_shortcode_typewriter');
function nd_options_shortcode_typewriter($atts, $content = null)
{  

  $atts = shortcode_atts(
  array(
    'nd_options_class' => '',
    'nd_options_text_fixed' => '',
    'nd_options_text_typed_1' => '',
    'nd_options_text_typed_2' => '',
    'nd_options_text_typed_3' => '',
    'nd_options_text_color' => '',
    'nd_options_text_font_size' => '',
    'nd_options_text_underline_color' => '',
  ), $atts);


  $nd_options_id_component = rand(0, 100);
  
  $str = '';

  //get variables
  $nd_options_class = $atts['nd_options_class'];
  $nd_options_text_fixed = $atts['nd_options_text_fixed'];
  $nd_options_text_typed_1 = $atts['nd_options_text_typed_1'];
  $nd_options_text_typed_2 = $atts['nd_options_text_typed_2'];
  $nd_options_text_typed_3 = $atts['nd_options_text_typed_3'];
  $nd_options_text_color = $atts['nd_options_text_color'];
  $nd_options_text_font_size = $atts['nd_options_text_font_size'];
  $nd_options_text_underline_color = $atts['nd_options_text_underline_color'];

  
  wp_enqueue_script( 'nd_options_typed_plugin', esc_url( plugins_url( 'js/typewriter.js', __FILE__ ) ) );
  
  
  $str .='
  
  


  <script type="text/javascript">
    //<![CDATA[
    
    jQuery(document).ready(function() {

      //typed
      jQuery(".nd_options_typed_'.$nd_options_id_component.'").typed({
          stringsElement: jQuery(".nd_options_typed_strings_'.$nd_options_id_component.'"),
          typeSpeed: 100,
          backDelay: 500,
          loop: true,
          contentType: "html",
          loopCount: false
      });
   
    });

    //]]>
  </script>

  


  <style type="text/css">

    .nd_options_typewriter_'.$nd_options_id_component.' .typed-cursor{ 

      font-size: '.$nd_options_text_font_size.'px;
      color: '.$nd_options_text_color.';
    
    }

  </style>

  ';



  $str .= '



      <!--START typed words-->
      <div class="nd_options_display_none_all_iphone nd_options_section '.$nd_options_class.' nd_options_typewriter_'.$nd_options_id_component.' ">
          

          <strong style="color:'.$nd_options_text_color.'; font-size:'.$nd_options_text_font_size.'px; " class="nd_options_first_font">'.$nd_options_text_fixed.' </strong>

          <div class="nd_options_typed_strings_'.$nd_options_id_component.'">

              <p><strong style="color:'.$nd_options_text_color.'; font-size:'.$nd_options_text_font_size.'px;" class="nd_options_first_font"> '.$nd_options_text_typed_1.'</strong></p>
              <p><strong style="color:'.$nd_options_text_color.'; font-size:'.$nd_options_text_font_size.'px;" class="nd_options_first_font"> '.$nd_options_text_typed_2.'</strong></p>
              <p><strong style="color:'.$nd_options_text_color.'; font-size:'.$nd_options_text_font_size.'px;" class="nd_options_first_font"> '.$nd_options_text_typed_3.'</strong></p>

          </div>

          <span class="nd_options_typed_'.$nd_options_id_component.' nd_options_padding_botttom_5" style="white-space:pre; border-bottom: 5px solid '.$nd_options_text_underline_color.'; "></span>
      
      </div>
      <!--END typed words-->




  ';

   return apply_filters('uds_shortcode_out_filter', $str);
}
//END





//vc
add_action( 'vc_before_init', 'nd_options_typewriter' );
function nd_options_typewriter() {

   vc_map( array(
      "name" => __( "Typewriter", "nd-shortcodes" ),
      "base" => "nd_options_typewriter",
      'description' => __( 'Add Text Typewriter', 'nd-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => esc_url(plugins_url('typewriter.jpg', __FILE__ )),
      "class" => "",
      "category" => __( "NDS - Orange Coll.", "nd-shortcodes"),
      "params" => array(
          

         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Title Fixed", "nd-shortcodes" ),
            "param_name" => "nd_options_text_fixed",
            "description" => __( "Insert Fixed Text", "nd-shortcodes" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Text Typed 1", "nd-shortcodes" ),
            "param_name" => "nd_options_text_typed_1",
            "description" => __( "Insert Typed Text 1", "nd-shortcodes" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Text Typed 2", "nd-shortcodes" ),
            "param_name" => "nd_options_text_typed_2",
            "description" => __( "Insert Typed Text 2", "nd-shortcodes" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Text Typed 3", "nd-shortcodes" ),
            "param_name" => "nd_options_text_typed_3",
            "description" => __( "Insert Typed Text 3", "nd-shortcodes" )
         ), 
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Text Color", "nd-shortcodes" ),
            "param_name" => "nd_options_text_color",
            "value" => '#727475',
            "description" => __( "Choose text color", "nd-shortcodes" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Text Font Size", "nd-shortcodes" ),
            "param_name" => "nd_options_text_font_size",
            "description" => __( "Insert the font size in px ( only numbers )", "nd-shortcodes" )
         ), 
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Border Color", "nd-shortcodes" ),
            "param_name" => "nd_options_text_underline_color",
            "value" => '#727475',
            "description" => __( "Choose border color for typed text", "nd-shortcodes" )
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