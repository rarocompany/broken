<?php

//START FOCUS
add_shortcode('nd_options_magic_popup', 'nd_options_shortcode_magic_popup');
function nd_options_shortcode_magic_popup($atts, $content = null)
{  

  $atts = shortcode_atts(
  array(
    'nd_options_class' => '',
    'nd_options_layout' => '',
    'nd_options_type' => '',
    'nd_options_image' => '',
    'nd_options_image_width' => '',
    'nd_options_title' => '',
    'nd_options_subtitle' => '',
    'nd_options_price' => '',
    'nd_options_label_text' => '',
    'nd_options_label_color' => '',
    'nd_options_description' => '',
    'nd_options_title_adv_options' => '',
    'nd_options_title_font' => '',
    'nd_options_title_size' => '',
    'nd_options_title_color' => '',
    'nd_options_link' => '',
    'nd_options_link_adv_options' => '',
    'nd_options_link_size' => '',
    'nd_options_link_font' => '',
    'nd_options_link_color' => '',
    'nd_options_icon' => '',
    'nd_options_bg_icon' => '',
    'nd_options_bg_link' => '',
    'nd_options_link_type' => '',

  ), $atts);

  $str = '';

  //get variables
  $nd_options_bg_icon = $atts['nd_options_bg_icon']; 
  $nd_options_bg_link = $atts['nd_options_bg_link'];
  $nd_options_class = $atts['nd_options_class'];
  $nd_options_layout = $atts['nd_options_layout'];
  $nd_options_type = $atts['nd_options_type']; if ( $nd_options_type == '' ) { $nd_options_type = 'nd_options_mpopup_gallery'; }
  $nd_options_link_type = $atts['nd_options_link_type'];
  $nd_options_title = $atts['nd_options_title'];
  $nd_options_subtitle = $atts['nd_options_subtitle'];
  $nd_options_price = $atts['nd_options_price'];
  $nd_options_label_text = $atts['nd_options_label_text'];
  $nd_options_label_color = $atts['nd_options_label_color'];
  $nd_options_description = $atts['nd_options_description'];
  $nd_options_image_width = $atts['nd_options_image_width'];
  $nd_options_title_adv_options = $atts['nd_options_title_adv_options'];
  $nd_options_title_font = $atts['nd_options_title_font']; 
  $nd_options_title_size = $atts['nd_options_title_size']; if ( $nd_options_title_size == '' ) { $nd_options_title_size = '17'; }
  $nd_options_title_color = $atts['nd_options_title_color']; if ( $nd_options_title_color == '' ) { $nd_options_title_color = '#fff'; }
  $nd_options_link_adv_options = $atts['nd_options_link_adv_options'];
  $nd_options_link_font = $atts['nd_options_link_font'];
  $nd_options_link_size = $atts['nd_options_link_size']; if ( $nd_options_link_size == '' ) { $nd_options_link_size = '15'; }
  $nd_options_link_color = $atts['nd_options_link_color']; if ( $nd_options_link_color == '' ) { $nd_options_link_color = '#fff'; }
  $nd_options_image_src = wp_get_attachment_image_src($atts['nd_options_image'],'large');
  $nd_options_icon_src = wp_get_attachment_image_src($atts['nd_options_icon'],'large');

  //nd_options_link 
  $nd_options_link = vc_build_link( $atts['nd_options_link'] );
  $nd_options_link_url = $nd_options_link['url'];
  $nd_options_link_title = $nd_options_link['title'];
  $nd_options_link_target = $nd_options_link['target'];
  $nd_options_link_rel = $nd_options_link['rel'];

  if ( $nd_options_type == 'nd_options_mpopup_gallery' ){
    $nd_options_link_output = '<div class="'.$nd_options_type.'"><a style="font-size:'.$nd_options_link_size.'px; line-height:'.$nd_options_link_size.'px; color:'.$nd_options_link_color.';" class=" nd_options_outline_0 '.$nd_options_link_font.' '.$nd_options_type.'" href="'.$nd_options_image_src[0].'">'.$nd_options_link_title.'</a></div>';
  }else{
    $nd_options_link_output = '<a style="font-size:'.$nd_options_link_size.'px; line-height:'.$nd_options_link_size.'px; color:'.$nd_options_link_color.';" class=" nd_options_outline_0 '.$nd_options_link_font.' '.$nd_options_type.'" href="'.$nd_options_link_url.'">'.$nd_options_link_title.'</a>';  
  }
  
  wp_enqueue_script( 'nd_options_magnific_popup_plugin', esc_url( plugins_url( 'js/jquery.magnific-popup.min.js', __FILE__ ) ) );
  wp_enqueue_style( 'nd_options_magnific_popup_style', esc_url( plugins_url( 'css/magnific-popup.css', __FILE__ ) ) );

  //default value for avoid error include
  if ($nd_options_image_width == '') { $nd_options_image_width = "100%"; }
  if ($nd_options_layout == '') { $nd_options_layout = "layout-1"; }

  //include the layout selected
  include 'layout/'.$nd_options_layout.'.php';

  return apply_filters('uds_shortcode_out_filter', $str);
}
//END FOCUS





//vc
add_action( 'vc_before_init', 'nd_options_magic_popup' );
function nd_options_magic_popup() {


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
      "name" => __( "Magic PopUp", "nd-shortcodes" ),
      "base" => "nd_options_magic_popup",
      'description' => __( 'Add single popup', 'nd-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => esc_url(plugins_url('magic-popup.jpg', __FILE__ )),
      "class" => "",
      "category" => __( "NDS - Violet Coll.", "nd-shortcodes"),
      "params" => array(

        array(
           'type' => 'dropdown',
            'heading' => __( 'Layout', 'nd-shortcodes' ),
            'param_name' => 'nd_options_layout',
            'value' => $nd_options_layouts,
            'description' => __( "Choose the layout", "nd-shortcodes" )
         ),
        array(
         'type' => 'dropdown',
          "heading" => __( "Popup Type", "nd-shortcodes" ),
          'param_name' => 'nd_options_type',
          'value' => array('select'=>'','Gallery'=>'nd_options_mpopup_gallery','Youtube'=>'nd_options_mpopup_iframe','Google Maps'=>'nd_options_mpopup_iframe','Vimeo'=>'nd_options_mpopup_iframe'),
          'description' => __( "Select the magic popup type", "nd-shortcodes" ),
          'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-1','layout-2' ) )
         ),
          array(
            'type' => 'attach_image',
            'heading' => __( 'Image', 'nd-shortcodes' ),
            'param_name' => 'nd_options_image',
            'description' => __( 'Select image from media library.', 'nd-shortcodes' ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-1','layout-2','layout-3','layout-5' ) )
         ),
          array(
            'type' => 'attach_image',
            'heading' => __( 'Icon', 'nd-shortcodes' ),
            'param_name' => 'nd_options_icon',
            'description' => __( 'Select icon from media library.', 'nd-shortcodes' ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-3','layout-5' ) )
         ),
          array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Bg Icon", "nd-shortcodes" ),
            "param_name" => "nd_options_bg_icon",
            "value" => '#000',
            "description" => __( "Choose background icon color", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-3','layout-5' ) )
         ),
          array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Image Width", "nd-shortcodes" ),
            "param_name" => "nd_options_image_width",
            "description" => __( "Insert the image width, eg: 100px or 50%", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-2' ) )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Title", "nd-shortcodes" ),
            "param_name" => "nd_options_title",
            'admin_label' => true,
            "description" => __( "Insert the title", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-1','layout-3','layout-5' ) )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Subtitle", "nd-shortcodes" ),
            "param_name" => "nd_options_subtitle",
            "description" => __( "Insert the subtitle", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-5' ) )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Price", "nd-shortcodes" ),
            "param_name" => "nd_options_price",
            "description" => __( "Insert the price", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-5' ) )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Label text", "nd-shortcodes" ),
            "param_name" => "nd_options_label_text",
            "description" => __( "Insert the label text", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-5' ) )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Label Bg Color", "nd-shortcodes" ),
            "param_name" => "nd_options_label_color",
            "value" => '#000',
            "description" => __( "Choose label bg color", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-5' ) )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Description", "nd-shortcodes" ),
            "param_name" => "nd_options_description",
            "description" => __( "Insert the description", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-3','layout-5' ) )
         ),
         array(
         'type' => 'dropdown',
          "heading" => __( "Link Type", "nd-shortcodes" ),
          'param_name' => 'nd_options_link_type',
          'value' => array('select'=>'','Sample Link'=>'','Gallery'=>'nd_options_mpopup_gallery','Iframe'=>'nd_options_mpopup_iframe'),
          'description' => __( "Select the link type", "nd-shortcodes" ),
          'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-5' ) )
         ),
         array(
         'type' => 'vc_link',
          'heading' => "Link",
          'param_name' => 'nd_options_link',
          'description' => __( "Insert popup link", "nd-shortcodes" ),
          'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-1','layout-2','layout-4','layout-5' ) )
         ),
         //title options
         array(
         'type' => 'dropdown',
          "heading" => __( "Title Advanced Options", "nd-shortcodes" ),
          'param_name' => 'nd_options_title_adv_options',
          'value' => array('select'=>'','Yes'=>'yes','No'=>'no'),
          'description' => __( "Enable advanced options for title", "nd-shortcodes" ),
          'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-1' ) )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Title Color", "nd-shortcodes" ),
            "param_name" => "nd_options_title_color",
            "value" => '#000',
            "description" => __( "Choose title color", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_title_adv_options', 'value' => array( 'yes' ) )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Title Font Size", "nd-shortcodes" ),
            "param_name" => "nd_options_title_size",
            "description" => __( "Insert the font size for the title, eg: 20 (only numbers)", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_title_adv_options', 'value' => array( 'yes' ) )
         ),
         array(
         'type' => 'dropdown',
          "heading" => __( "Title Font", "nd-shortcodes" ),
          'param_name' => 'nd_options_title_font',
          'value' => array('select'=>'','First Font'=>'nd_options_first_font','Second Font'=>'nd_options_second_font','Third Font'=>'nd_options_third_font'),
          'description' => __( "Select font for title", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_title_adv_options', 'value' => array( 'yes' ) )
         ),
         //link options
         array(
         'type' => 'dropdown',
          "heading" => __( "Link Advanced Options", "nd-shortcodes" ),
          'param_name' => 'nd_options_link_adv_options',
          'value' => array('select'=>'','Yes'=>'yes','No'=>'no'),
          'description' => __( "Enable advanced options for link", "nd-shortcodes" ),
          'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-1' ) )
         ),
         array(
         'type' => 'dropdown',
          "heading" => __( "Link Font", "nd-shortcodes" ),
          'param_name' => 'nd_options_link_font',
          'value' => array('select'=>'','First Font'=>'nd_options_first_font','Second Font'=>'nd_options_second_font','Third Font'=>'nd_options_third_font'),
          'description' => __( "Select font for link", "nd-shortcodes" ),
          'dependency' => array( 'element' => 'nd_options_link_adv_options', 'value' => array( 'yes' ) )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Link Font Size", "nd-shortcodes" ),
            "param_name" => "nd_options_link_size",
            "description" => __( "Insert the font size for the link, eg: 20 (only numbers)", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_link_adv_options', 'value' => array( 'yes' ) )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Link Text Color", "nd-shortcodes" ),
            "param_name" => "nd_options_link_color",
            "value" => '#ccc',
            "description" => __( "Choose text color", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_link_adv_options', 'value' => array( 'yes' ) )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Bg Link", "nd-shortcodes" ),
            "param_name" => "nd_options_bg_link",
            "value" => '#ccc',
            "description" => __( "Choose background color", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-4','layout-5' ) )
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