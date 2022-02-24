<?php

//START
add_shortcode('nd_options_beforeafter', 'nd_options_shortcode_beforeafter');
function nd_options_shortcode_beforeafter($atts, $content = null)
{  

  $atts = shortcode_atts(
  array(
  	'nd_options_class' => '',
    'nd_options_color' => '',
    'nd_options_image_before' => '',
    'nd_options_image_after' => '',
  ), $atts);

  $str = '';

  //get variables
  $nd_options_color = $atts['nd_options_color']; if ( $nd_options_color == '' ) { $nd_options_color = '#000'; }
  $nd_options_image_before = wp_get_attachment_image_src($atts['nd_options_image_before'],'large');
  $nd_options_image_after = wp_get_attachment_image_src($atts['nd_options_image_after'],'large');
  $nd_options_class = $atts['nd_options_class'];

  wp_enqueue_script('jquery-ui-slider');
  
  $str .= '

  <style>
  
  #nd_options_beforeafter_component img { float:left; width:100%;  }

  #nd_options_beforeafter_component { 
    float: left;
    width: 100% !important;
    margin: 0px !important;
    padding: 0px !important;
    position: relative;
  }

  #nd_options_beforeafter_component .ui-slider-range {
    background-image: url('.$nd_options_image_after[0].');
    background-color: #000;
    z-index: 9;
    position: absolute;
    height: 100%;
    background-repeat: no-repeat;
    background-size: cover;
  }

  #nd_options_beforeafter_component .ui-slider-handle {
    background-color: '.$nd_options_color.';
    width: 4px;
    position: absolute;
    height: 100%;
    outline: 0px;
    cursor: ew-resize;  
  }

  #nd_options_beforeafter_component .ui-slider-handle:after {
    content: "";
    width: 40px;
    height: 40px;
    background-color: '.$nd_options_color.';
    position: absolute;
    top: 50%;
    margin-top: -20px;
    margin-left: -18px;
    z-index: 9;
    border-radius: 100%;
    background-image:url('.esc_url(plugins_url('ico.png', __FILE__ )).');
    background-size: 30px;
    background-position: center;
    background-repeat: no-repeat;
  }

  </style>

  <script>
  jQuery( function() {
    
    jQuery( "#nd_options_beforeafter_component" ).slider({
      value: 50,
      orientation: "horizontal",
      range: "min",
      animate: true
    });
    
  } );
  </script>

  <div class="'.$nd_options_class.' nd_options_section">
	  <div id="nd_options_beforeafter_component">
	    <img src="'.$nd_options_image_before[0].'">
	  </div>
  </div>';

  return apply_filters('uds_shortcode_out_filter', $str);

}
//END


//vc
add_action( 'vc_before_init', 'nd_options_beforeafter' );
function nd_options_beforeafter() {
   vc_map( array(
      "name" => __( "Before After", "nd-shortcodes" ),
      "base" => "nd_options_beforeafter",
      'description' => __( 'Add Before After', 'nd-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => esc_url(plugins_url('badge.jpg', __FILE__ )),
      "class" => "",
      "category" => __( "NDS - Orange Coll.", "nd-shortcodes"),
      "params" => array(


         array(
            'type' => 'attach_image',
            'heading' => __( 'Image Before', 'nd-shortcodes' ),
            'param_name' => 'nd_options_image_before',
            'description' => __( 'Before and After image must have the same size.', 'nd-shortcodes' )
         ),

         array(
            'type' => 'attach_image',
            'heading' => __( 'Image After', 'nd-shortcodes' ),
            'param_name' => 'nd_options_image_after',
            'description' => __( 'Before and After image must have the same size.', 'nd-shortcodes' )
         ),

         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "BG Color", "nd-shortcodes" ),
            "param_name" => "nd_options_color",
            "description" => __( "Choose bg color", "nd-shortcodes" )
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