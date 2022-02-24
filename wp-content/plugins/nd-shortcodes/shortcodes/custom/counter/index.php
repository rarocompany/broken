<?php

//START
add_shortcode('nd_options_counter', 'nd_options_shortcode_counter');
function nd_options_shortcode_counter($atts, $content = null)
{  

  $atts = shortcode_atts(
  array(
    'nd_options_class' => '',
    'nd_options_layout' => '',
    'nd_options_number' => '',
    'nd_options_padding' => '',
    'nd_options_number_color' => '',
    'nd_options_bg_color' => '',
    'nd_options_number_font_size' => '',
    'nd_options_text_align' => '',
  ), $atts);

  $str = '';

  //get variables
  $nd_options_class = $atts['nd_options_class'];
  $nd_options_layout = $atts['nd_options_layout'];
  $nd_options_number = $atts['nd_options_number'];
  $nd_options_padding = $atts['nd_options_padding'];
  $nd_options_number_color = $atts['nd_options_number_color'];
  $nd_options_number_font_size = $atts['nd_options_number_font_size'];
  $nd_options_text_align = $atts['nd_options_text_align'];
  $nd_options_bg_color = $atts['nd_options_bg_color'];

  wp_enqueue_script( 'nd_options_counter_plugin', esc_url( plugins_url( 'js/counter.js', __FILE__ ) ) );

  $str .='
 
  <script type="text/javascript">
    //<![CDATA[
    
    jQuery(document).ready(function() {

      //START counter
      jQuery(function ($) {
        
        // start all the timers
        $(".nd_options_counter").each(count);
        
        function count(options) {
            var $this = $(this);
            options = $.extend({}, options || {}, $this.data("countToOptions") || {});
            $this.countTo(options);
        }

      });
      //END counter

    });

    //]]>
  </script>

  ';


  //default value for avoid error include
  if ($nd_options_layout == '') { $nd_options_layout = "layout-1"; }

  //include the layout selected
  include 'layout/'.$nd_options_layout.'.php';


  return apply_filters('uds_shortcode_out_filter', $str);
}
//END





//vc
add_action( 'vc_before_init', 'nd_options_counter' );
function nd_options_counter() {



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
      "name" => __( "Counter", "nd-shortcodes" ),
      "base" => "nd_options_counter",
      'description' => __( 'Add Counter', 'nd-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => esc_url(plugins_url('counter.jpg', __FILE__ )),
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
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Number", "nd-shortcodes" ),
            "param_name" => "nd_options_number",
            "description" => __( "Insert number", "nd-shortcodes" )
         ),
          array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Number Color", "nd-shortcodes" ),
            "param_name" => "nd_options_number_color",
            "value" => '#727475',
            "description" => __( "Choose color for the number", "nd-shortcodes" )
         ),
          array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Bg Color", "nd-shortcodes" ),
            "param_name" => "nd_options_bg_color",
            "value" => '#000',
            "description" => __( "Choose color for the background", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-2' ) )
         ),
          array(
         'type' => 'dropdown',
          "heading" => __( "Number Padding", "nd-shortcodes" ),
          'param_name' => 'nd_options_padding',
          'value' => array('select'=>'','Padding 5px 10px'=>'5px 10px','Padding 5px'=>'5px','Padding 10px 20px'=>'10px 20px','Padding 10px'=>'10px','Padding 20px'=>'20px'),
          'description' => __( "Select padding for number 'TOP/BOTTOM' and 'LEFT/RIGHT'", "nd-shortcodes" ),
          'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-2' ) )
         ),
          array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Number Font Size", "nd-shortcodes" ),
            "param_name" => "nd_options_number_font_size",
            "description" => __( "Insert the font size in px ( only numbers )", "nd-shortcodes" )
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
            "heading" => __( "Custom class", "nd-shortcodes" ),
            "param_name" => "nd_options_class",
            "description" => __( "Insert custom class", "nd-shortcodes" )
         )

        
      )
   ) );
}
//end shortcode