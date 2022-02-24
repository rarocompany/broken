<?php

//START
add_shortcode('nd_options_service_pro', 'nd_options_shortcode_service_pro');
function nd_options_shortcode_service_pro($atts, $content = null)
{  

  $atts = shortcode_atts(
  array(
    'nd_options_layout' => '',
    'nd_options_image' => '',
    'nd_options_align' => '',
    'nd_options_title' => '',
    'nd_options_description' => '',
    'nd_options_link' => '',
    'nd_options_image_adv_options' => '',
    'nd_options_image_width' => '',
    'nd_options_image_margin_top' => '',
    'nd_options_title_adv_options' => '',
    'nd_options_title_text_color' => '',
    'nd_options_title_size' => '',
    'nd_options_title_font' => '',
    'nd_options_title_margin' => '',
    'nd_options_title_class' => '',
    'nd_options_description_adv_options' => '',
    'nd_options_description_text_color' => '',
    'nd_options_description_size' => '',
    'nd_options_description_font' => '',
    'nd_options_description_margin' => '',
    'nd_options_description_class' => '',
    'nd_options_link_adv_options' => '',
    'nd_options_link_font' => '',
    'nd_options_link_padding' => '',
    'nd_options_link_text_color' => '',
    'nd_options_link_bg_color' => '',
    'nd_options_link_border_color' => '',
    'nd_options_link_size' => '',
    'nd_options_link_border_width' => '',
    'nd_options_link_border_radius' => '',
    'nd_options_class' => '',
  ), $atts);

  $str = '';

  //get variables
  $nd_options_layout = $atts['nd_options_layout'];
  $nd_options_class = $atts['nd_options_class'];
  $nd_options_align = $atts['nd_options_align']; if ($nd_options_align == '') { $nd_options_align = 'nd_options_text_align_left'; }
  $nd_options_title = $atts['nd_options_title'];
  $nd_options_description = $atts['nd_options_description'];
  $nd_options_image_adv_options = $atts['nd_options_image_adv_options'];
  $nd_options_image_width = $atts['nd_options_image_width']; if ($nd_options_image_width == '') { $nd_options_image_width = "50"; }
  $nd_options_image_margin_top = $atts['nd_options_image_margin_top'];
  $nd_options_title_adv_options = $atts['nd_options_title_adv_options'];
  $nd_options_title_text_color = $atts['nd_options_title_text_color'];
  $nd_options_title_size = $atts['nd_options_title_size'];
  $nd_options_title_font = $atts['nd_options_title_font'];
  $nd_options_title_margin = $atts['nd_options_title_margin'];
  $nd_options_title_class = $atts['nd_options_title_class'];
  $nd_options_description_adv_options = $atts['nd_options_description_adv_options'];
  $nd_options_description_text_color = $atts['nd_options_description_text_color'];
  $nd_options_description_size = $atts['nd_options_description_size'];
  $nd_options_description_font = $atts['nd_options_description_font'];
  $nd_options_description_margin = $atts['nd_options_description_margin']; if ($nd_options_description_margin == '') { $nd_options_description_margin = "20px 0px"; }
  $nd_options_description_class = $atts['nd_options_description_class'];
  $nd_options_link_adv_options = $atts['nd_options_link_adv_options'];
  $nd_options_link_font = $atts['nd_options_link_font'];
  $nd_options_link_padding = $atts['nd_options_link_padding'];
  $nd_options_link_text_color = $atts['nd_options_link_text_color'];
  $nd_options_link_bg_color = $atts['nd_options_link_bg_color'];
  $nd_options_link_border_color = $atts['nd_options_link_border_color'];
  $nd_options_link_size = $atts['nd_options_link_size'];
  $nd_options_link_border_width = $atts['nd_options_link_border_width'];
  $nd_options_link_border_radius = $atts['nd_options_link_border_radius'];

  //nd_options_link 
  $nd_options_link = vc_build_link( $atts['nd_options_link'] );
  $nd_options_link_url = $nd_options_link['url'];
  $nd_options_link_title = $nd_options_link['title'];
  $nd_options_link_target = $nd_options_link['target'];
  $nd_options_link_rel = $nd_options_link['rel'];
  //target attr
  if ( $nd_options_link_target == '' ) { $nd_options_link_target_output = ''; }else{ $nd_options_link_target_output = 'target="'.$nd_options_link_target.'"'; }
  //link output
  if ( $nd_options_link_title == '' ) {  
    $nd_options_link_output = '';
  }else{
    $nd_options_link_output = '<a class="'.$nd_options_link_font.' nd_options_display_inline_block " style="font-size:'.$nd_options_link_size.'px; line-height:'.$nd_options_link_size.'px; border-radius:'.$nd_options_link_border_radius.'; border:'.$nd_options_link_border_width.' solid '.$nd_options_link_border_color.'; background-color:'.$nd_options_link_bg_color.'; padding:'.$nd_options_link_padding.'; color:'.$nd_options_link_text_color.';" rel="'.$nd_options_link_rel.'" '.$nd_options_link_target_output.' href="'.$nd_options_link_url.'">'.$nd_options_link_title.'</a>';
  }

  //nd_options_image
  $nd_options_image_src = wp_get_attachment_image_src($atts['nd_options_image'],'large');

  //output values
  if ($nd_options_title == '') { $nd_options_title_output = ''; }else{ $nd_options_title_output = '<h3 class="'.$nd_options_title_font.' '.$nd_options_title_class.' " style="margin:'.$nd_options_title_margin.'; color:'.$nd_options_title_text_color.'; font-size:'.$nd_options_title_size.'px;line-height:'.$nd_options_title_size.'px;">'.$nd_options_title.'</h3>'; }
  if ($nd_options_description == '') { $nd_options_description_output = ''; }else{ $nd_options_description_line_height = $nd_options_description_size + 10; $nd_options_description_output = '<p class="'.$nd_options_description_font.' '.$nd_options_description_class.' " style="margin:'.$nd_options_description_margin.'; color:'.$nd_options_description_text_color.'; font-size:'.$nd_options_description_size.'px;line-height:'.$nd_options_description_line_height.'px;">'.$nd_options_description.'</p>'; }
  if ($nd_options_image_src[0] == '') { 
    $nd_options_image_src_ouput = '';
    $nd_options_image_src_ouput_2 = ''; 
  }else{ 
    $nd_options_image_src_ouput = '<img style="top:'.$nd_options_image_margin_top.'px;" alt="" class="nd_options_position_absolute nd_options_left_0" width="'.$nd_options_image_width.'" src="'.$nd_options_image_src[0].'">'; 
    $nd_options_image_src_ouput_2 = '<img style="margin-top:'.$nd_options_image_margin_top.'px;" alt="" width="'.$nd_options_image_width.'" src="'.$nd_options_image_src[0].'">'; 
  }

  //default value for avoid error include
  if ($nd_options_layout == '') { $nd_options_layout = "layout-1"; }

  //include the layout selected
  include 'layout/'.$nd_options_layout.'.php';

  //return the code
  return apply_filters('uds_shortcode_out_filter', $str);

}
//END





//vc
add_action( 'vc_before_init', 'nd_options_service_pro' );
function nd_options_service_pro() {



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
      "name" => __( "Service Pro", "nd-shortcodes" ),
      "base" => "nd_options_service_pro",
      'description' => __( 'Add Service Pro', 'nd-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => esc_url(plugins_url('service-pro.jpg', __FILE__ )),
      "class" => "",
      "category" => __( "NDS - Violet Coll.", "nd-shortcodes"),
      "params" => array(
   
        //default
        array(
           'type' => 'dropdown',
            'heading' => "Layout",
            'param_name' => 'nd_options_layout',
            'value' => $nd_options_layouts,
            'description' => __( "Choose the layout", "nd-shortcodes" )
         ),
        array(
         'type' => 'dropdown',
          "heading" => __( "Align", "nd-shortcodes" ),
          'param_name' => 'nd_options_align',
          'value' => array('select'=>'','Left'=>'nd_options_text_align_left','Center'=>'nd_options_text_align_center','Right'=>'nd_options_text_align_right'),
          'description' => __( "Select align for service", "nd-shortcodes" ),
          'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-2' ) )
         ),
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
          'description' => __( "Insert service link", "nd-shortcodes" )
         ),
         //image options
         array(
         'type' => 'dropdown',
          "heading" => __( "Image Advanced Options", "nd-shortcodes" ),
          'param_name' => 'nd_options_image_adv_options',
          'value' => array('select'=>'','Yes'=>'yes','No'=>'no'),
          'description' => __( "Enable advanced options for image", "nd-shortcodes" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Image Width", "nd-shortcodes" ),
            "param_name" => "nd_options_image_width",
            "description" => __( "Insert the width, eg: 60 (only numbers)", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_image_adv_options', 'value' => array( 'yes' ) )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Image Margin Top", "nd-shortcodes" ),
            "param_name" => "nd_options_image_margin_top",
            "description" => __( "Insert the margin-top for the image, eg: 10 (only numbers)", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_image_adv_options', 'value' => array( 'yes' ) )
         ),
         //title options
         array(
         'type' => 'dropdown',
          "heading" => __( "Title Advanced Options", "nd-shortcodes" ),
          'param_name' => 'nd_options_title_adv_options',
          'value' => array('select'=>'','Yes'=>'yes','No'=>'no'),
          'description' => __( "Enable advanced options for title", "nd-shortcodes" )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Title Color", "nd-shortcodes" ),
            "param_name" => "nd_options_title_text_color",
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
          'value' => array('select'=>'','First Font'=>'nd_options_first_font','Second Font'=>'nd_options_second_font'),
          'description' => __( "Select font for title", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_title_adv_options', 'value' => array( 'yes' ) )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Title Margin", "nd-shortcodes" ),
            "param_name" => "nd_options_title_margin",
            "description" => __( "Insert the margin for the title, eg: 10px 20px 10px 0px (TOP/RIGHT/BOTTOM/LEFT)", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_title_adv_options', 'value' => array( 'yes' ) )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Title Class", "nd-shortcodes" ),
            "param_name" => "nd_options_title_class",
            "description" => __( "Insert your custom class for the title", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_title_adv_options', 'value' => array( 'yes' ) )
         ),
         //description options
         array(
         'type' => 'dropdown',
          "heading" => __( "Description Advanced Options", "nd-shortcodes" ),
          'param_name' => 'nd_options_description_adv_options',
          'value' => array('select'=>'','Yes'=>'yes','No'=>'no'),
          'description' => __( "Enable advanced options for description", "nd-shortcodes" )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Description Color", "nd-shortcodes" ),
            "param_name" => "nd_options_description_text_color",
            "value" => '#000',
            "description" => __( "Choose title color", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_description_adv_options', 'value' => array( 'yes' ) )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Description Font Size", "nd-shortcodes" ),
            "param_name" => "nd_options_description_size",
            "description" => __( "Insert the font size for the title, eg: 20 (only numbers)", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_description_adv_options', 'value' => array( 'yes' ) )
         ),
         array(
         'type' => 'dropdown',
          "heading" => __( "Description Font", "nd-shortcodes" ),
          'param_name' => 'nd_options_description_font',
          'value' => array('select'=>'','First Font'=>'nd_options_first_font','Second Font'=>'nd_options_second_font'),
          'description' => __( "Select font for title", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_description_adv_options', 'value' => array( 'yes' ) )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Description Margin", "nd-shortcodes" ),
            "param_name" => "nd_options_description_margin",
            "description" => __( "Insert the margin for the title, eg: 10px 20px 10px 0px (TOP/RIGHT/BOTTOM/LEFT)", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_description_adv_options', 'value' => array( 'yes' ) )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Description Class", "nd-shortcodes" ),
            "param_name" => "nd_options_description_class",
            "description" => __( "Insert the class for the description", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_description_adv_options', 'value' => array( 'yes' ) )
         ),
        //link options
         array(
         'type' => 'dropdown',
          "heading" => __( "Link Advanced Options", "nd-shortcodes" ),
          'param_name' => 'nd_options_link_adv_options',
          'value' => array('select'=>'','Yes'=>'yes','No'=>'no'),
          'description' => __( "Enable advanced options for link", "nd-shortcodes" )
         ),
         array(
         'type' => 'dropdown',
          "heading" => __( "Button Font", "nd-shortcodes" ),
          'param_name' => 'nd_options_link_font',
          'value' => array('select'=>'','First Font'=>'nd_options_first_font','Second Font'=>'nd_options_second_font'),
          'description' => __( "Select font for button", "nd-shortcodes" ),
          'dependency' => array( 'element' => 'nd_options_link_adv_options', 'value' => array( 'yes' ) )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Button Font Size", "nd-shortcodes" ),
            "param_name" => "nd_options_link_size",
            "description" => __( "Insert the font size for the button, eg: 20 (only numbers)", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_link_adv_options', 'value' => array( 'yes' ) )
         ),
         array(
         'type' => 'dropdown',
          "heading" => __( "Button Padding", "nd-shortcodes" ),
          'param_name' => 'nd_options_link_padding',
          'value' => array('select'=>'','Padding 5px 10px'=>'5px 10px','Padding 5px'=>'5px','Padding 8px 12px'=>'8px 12px','Padding 10px 20px'=>'10px 20px','Padding 10px'=>'10px','Padding 20px'=>'20px','Padding 5px 20px'=>'5px 20px','Padding 5px 25px'=>'5px 25px'),
          'description' => __( "Select padding for button 'TOP/BOTTOM' and 'LEFT/RIGHT'", "nd-shortcodes" ),
          'dependency' => array( 'element' => 'nd_options_link_adv_options', 'value' => array( 'yes' ) )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Button Text Color", "nd-shortcodes" ),
            "param_name" => "nd_options_link_text_color",
            "value" => '#ccc',
            "description" => __( "Choose text color", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_link_adv_options', 'value' => array( 'yes' ) )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Button Bg Color", "nd-shortcodes" ),
            "param_name" => "nd_options_link_bg_color",
            "value" => '#000',
            "description" => __( "Choose bg color", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_link_adv_options', 'value' => array( 'yes' ) )
         ),
         //link border
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Border Color", "nd-shortcodes" ),
            "param_name" => "nd_options_link_border_color",
            "value" => '#000',
            "description" => __( "Choose border color", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_link_adv_options', 'value' => array( 'yes' ) )
         ),
         array(
         'type' => 'dropdown',
          "heading" => __( "Border Width", "nd-shortcodes" ),
          'param_name' => 'nd_options_link_border_width',
          'value' => array('select'=>'','0px'=>'0px','1px'=>'1px','2px'=>'2px','3px'=>'3px','4px'=>'4px','5px'=>'5px'),
          'description' => __( "Select border width", "nd-shortcodes" ),
          'dependency' => array( 'element' => 'nd_options_link_adv_options', 'value' => array( 'yes' ) )
         ),
         array(
         'type' => 'dropdown',
          "heading" => __( "Border Radius", "nd-shortcodes" ),
          'param_name' => 'nd_options_link_border_radius',
          'value' => array('select'=>'','0px'=>'0px','1px'=>'1px','2px'=>'2px','3px'=>'3px','4px'=>'4px','5px'=>'5px','6px'=>'6px','7px'=>'7px','8px'=>'8px','9px'=>'9px','10px'=>'10px','15px'=>'15px','30px'=>'30px'),
          'description' => __( "Select border width", "nd-shortcodes" ),
          'dependency' => array( 'element' => 'nd_options_link_adv_options', 'value' => array( 'yes' ) )
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