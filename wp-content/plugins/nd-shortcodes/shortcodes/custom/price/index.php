<?php

//START PRICE
add_shortcode('nd_options_prices', 'nd_options_shortcode_prices');
function nd_options_shortcode_prices($atts, $content = null)
{  

  $atts = shortcode_atts(
  array(
    'nd_options_class' => '',
    'nd_options_layout' => '',
    'nd_options_image' => '',
    'nd_options_image_price' => '',
    'nd_options_title' => '',
    'nd_options_sub_title' => '',
    'nd_options_price' => '',
    'nd_options_currency' => '',
    'nd_options_description' => '',
    'nd_options_description_2' => '',
    'nd_options_link' => '',
    'nd_options_color_header_bg' => '',
    'nd_options_bg_color' => '',
    'nd_options_color' => '',
  ), $atts);

  $str = '';

  //get variables
  $nd_options_class = $atts['nd_options_class'];
  $nd_options_layout = $atts['nd_options_layout'];
  $nd_options_title = $atts['nd_options_title'];
  $nd_options_sub_title = $atts['nd_options_sub_title'];
  $nd_options_price = $atts['nd_options_price'];
  $nd_options_currency = $atts['nd_options_currency'];
  $nd_options_description =  htmlentities( rawurldecode( base64_decode( strip_tags( $atts['nd_options_description'] ) ) ), ENT_COMPAT, 'UTF-8' );
  $nd_options_description_2 = $atts['nd_options_description_2'];
  $nd_options_color = $atts['nd_options_color'];
  $nd_options_color_header_bg = $atts['nd_options_color_header_bg'];
  $nd_options_bg_color = $atts['nd_options_bg_color'];

  //nd_options_link 
  $nd_options_link = vc_build_link( $atts['nd_options_link'] );
  $nd_options_link_url = $nd_options_link['url'];
  $nd_options_link_title = $nd_options_link['title'];
  $nd_options_link_target = $nd_options_link['target'];
  $nd_options_link_rel = $nd_options_link['rel'];

  //target attr
  if ( $nd_options_link_target == '' ) {
    $nd_options_link_target_output = '';
  }else{
    $nd_options_link_target_output = 'target="'.$nd_options_link_target.'"';
  }

  //nd_options_image
  $nd_options_image_src = wp_get_attachment_image_src($atts['nd_options_image'],'large');
  $nd_options_image_price_src = wp_get_attachment_image_src($atts['nd_options_image_price'],'large');



  //default value for avoid error include
  if ($nd_options_layout == '') { $nd_options_layout = "layout-1"; }

  //include the layout selected
  include 'layout/'.$nd_options_layout.'.php';
      
   return apply_filters('uds_shortcode_out_filter', $str);
}
//END PRICE





//vc
add_action( 'vc_before_init', 'nd_options_prices' );
function nd_options_prices() {


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
      "name" => __( "Price", "nd-shortcodes" ),
      "base" => "nd_options_prices",
      'description' => __( 'Add single Price', 'nd-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => esc_url(plugins_url('price.jpg', __FILE__ )),
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
            'type' => 'attach_image',
            'heading' => __( 'Image', 'nd-shortcodes' ),
            'param_name' => 'nd_options_image',
            'description' => __( 'Select image from media library.', 'nd-shortcodes' ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-1','layout-2','layout-3','layout-6' ) )
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
            "heading" => __( "Sub Title", "nd-shortcodes" ),
            "param_name" => "nd_options_sub_title",
            "description" => __( "Insert the sub title", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-2','layout-3','layout-4','layout-5' ) )
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
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Currency", "nd-shortcodes" ),
            "param_name" => "nd_options_currency",
            "description" => __( "Insert the currency", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-5' ) )
         ),
         array(
            "type" => "textarea_raw_html",
            "class" => "",
            "heading" => __( "Description", "nd-shortcodes" ),
            "param_name" => "nd_options_description",
            "description" => __( "Use this shortcode for price rows [nd_price_row image='yes' text='Your text']", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-1','layout-2','layout-4','layout-5','layout-6' ) )
         ),
         array(
            "type" => "textarea",
            "class" => "",
            "heading" => __( "Description", "nd-shortcodes" ),
            "param_name" => "nd_options_description_2",
            "description" => __( "Insert the description", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-3' ) )
         ),
         array(
         'type' => 'vc_link',
          'heading' => "Link",
          'param_name' => 'nd_options_link',
          'description' => __( "Insert button link", "nd-shortcodes" ),
          'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-1','layout-2','layout-4','layout-5','layout-6' ) )
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
            'type' => 'attach_image',
            'heading' => __( 'Image Bg Price', 'nd-shortcodes' ),
            'param_name' => 'nd_options_image_price',
            'description' => __( 'Select image that you want to use as a bg for the price section', 'nd-shortcodes' ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-6' ) )
         ),
         array(
         'type' => 'dropdown',
          "heading" => __( "Bg Color", "nd-shortcodes" ),
          'param_name' => 'nd_options_bg_color',
          'value' => array('select'=>'','Yes'=>'yes','No'=>'no'),
          'description' => __( "Use the color above as bg color", "nd-shortcodes" ),
          'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-5' ) )
         ),
         array(
         'type' => 'dropdown',
          "heading" => __( "Header Bg Color", "nd-shortcodes" ),
          'param_name' => 'nd_options_color_header_bg',
          'value' => array('select'=>'','Yes'=>'yes','No'=>'no'),
          'description' => __( "Use the color above as header bg color", "nd-shortcodes" ),
          'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-4' ) )
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




//shortcode nd_price_row
function nd_options_price_row( $nd_options_atts ) {
    
    $nd_options_price_row = shortcode_atts( 
      array(
          'image' => '',
          'text' => '',
          'imagesize' => '',
          'border' => '',
          'textsize' => '',
          'textcolor' => '',
      ), 
    $nd_options_atts );

    //start
    $nd_options_str = '';

    if ( $nd_options_price_row['imagesize'] == '') { 
      $nd_options_price_row_image_size = 13; 
    }else{
      $nd_options_price_row_image_size = $nd_options_price_row['imagesize']; 
    }

    //border
    if ( $nd_options_price_row['border'] == '') { 
      $nd_options_price_row_border = 2; 
    }else{
      $nd_options_price_row_border = $nd_options_price_row['border']; 
    }


    //textsize
    if ( $nd_options_price_row['textsize'] == '') { 
      $nd_options_price_row_textsize = 16; 
    }else{
      $nd_options_price_row_textsize = $nd_options_price_row['textsize']; 
    }

    //textcolor
    if ( $nd_options_price_row['textcolor'] == '') { 
      $nd_options_price_row_textcolor = ''; 
    }else{
      $nd_options_price_row_textcolor = $nd_options_price_row['textcolor']; 
    }

    
    //image
    if ( $nd_options_price_row['image'] == 'yes' OR $nd_options_price_row['image'] == 'not' ) { 

      $nd_options_img_path = 'img/'.$nd_options_price_row['image'].'.svg';

      $nd_options_str .= '

      <div class=" nicdark_border_bottom_'.$nd_options_price_row_border.'_solid_grey nd_options_padding_5 nd_options_section nd_options_box_sizing_border_box">
        <img alt="" class="nd_options_display_inline_block nd_options_margin_right_10" width="'.$nd_options_price_row_image_size.'" src="'.esc_url(plugins_url($nd_options_img_path, __FILE__ )).'">
        <p style="font-size: '.$nd_options_price_row_textsize.'px; color:'.$nd_options_price_row_textcolor.'" class="nd_options_display_inline_block">'.$nd_options_price_row['text'].'</p>
      </div>'; 

    }elseif ( $nd_options_price_row['image'] == '' ){

      $nd_options_str .= '

      <div class=" nicdark_border_bottom_'.$nd_options_price_row_border.'_solid_grey nd_options_padding_5 nd_options_section nd_options_box_sizing_border_box">
        <p style="font-size: '.$nd_options_price_row_textsize.'px; color:'.$nd_options_price_row_textcolor.'" class="nd_options_display_inline_block">'.$nd_options_price_row['text'].'</p>
      </div>'; 

    }else {

      $nd_options_str .= '

        <div class=" nicdark_border_bottom_'.$nd_options_price_row_border.'_solid_grey nd_options_padding_5 nd_options_section nd_options_box_sizing_border_box">
        <img alt="" class="nd_options_display_inline_block nd_options_margin_right_10" width="'.$nd_options_price_row_image_size.'" src="'.$nd_options_price_row['image'].'">
        <p style="font-size: '.$nd_options_price_row_textsize.'px; color:'.$nd_options_price_row_textcolor.'" class="nd_options_display_inline_block">'.$nd_options_price_row['text'].'</p>
      </div>

      ';

    }


    return $nd_options_str;
}
add_shortcode( 'nd_price_row', 'nd_options_price_row' );



