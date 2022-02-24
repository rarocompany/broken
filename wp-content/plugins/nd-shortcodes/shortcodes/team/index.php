<?php

//START TEAM
add_shortcode('nd_options_team', 'nd_options_shortcode_team');
function nd_options_shortcode_team($atts, $content = null)
{  

  $atts = shortcode_atts(
  array(
    'nd_options_class' => '',
    'nd_options_layout' => '',
    'nd_options_image' => '',
    'nd_options_title' => '',
    'nd_options_role' => '',
    'nd_options_description' => '',
    'nd_options_link' => '',
    'nd_options_color' => '',
    'nd_options_color_2' => '',
    'nd_options_social_img_1' => '',
    'nd_options_social_link_1' => '',
    'nd_options_social_img_2' => '',
    'nd_options_social_link_2' => '',
    'nd_options_social_img_3' => '',
    'nd_options_social_link_3' => '',
    'nd_options_social_img_4' => '',
    'nd_options_social_link_4' => '',
  ), $atts);

  $str = '';

  //get variables
  $nd_options_class = $atts['nd_options_class'];
  $nd_options_layout = $atts['nd_options_layout'];
  $nd_options_title = $atts['nd_options_title'];
  $nd_options_role = $atts['nd_options_role'];
  $nd_options_description = $atts['nd_options_description'];
  $nd_options_color = $atts['nd_options_color'];
  $nd_options_color_2 = $atts['nd_options_color_2'];

  //nd_options_link 
  $nd_options_link = vc_build_link( $atts['nd_options_link'] );
  $nd_options_link_url = $nd_options_link['url'];
  $nd_options_link_title = $nd_options_link['title'];
  $nd_options_link_target = $nd_options_link['target'];
  $nd_options_link_rel = $nd_options_link['rel'];


  $nd_options_social_link_1 = vc_build_link( $atts['nd_options_social_link_1'] );
  $nd_options_social_link_1_url = $nd_options_social_link_1['url'];
  $nd_options_social_link_1_title = $nd_options_social_link_1['title'];
  $nd_options_social_link_1_target = $nd_options_social_link_1['target'];
  $nd_options_social_link_1_rel = $nd_options_social_link_1['rel'];

  $nd_options_social_link_2 = vc_build_link( $atts['nd_options_social_link_2'] );
  $nd_options_social_link_2_url = $nd_options_social_link_2['url'];
  $nd_options_social_link_2_title = $nd_options_social_link_2['title'];
  $nd_options_social_link_2_target = $nd_options_social_link_2['target'];
  $nd_options_social_link_2_rel = $nd_options_social_link_2['rel'];

  $nd_options_social_link_3 = vc_build_link( $atts['nd_options_social_link_3'] );
  $nd_options_social_link_3_url = $nd_options_social_link_3['url'];
  $nd_options_social_link_3_title = $nd_options_social_link_3['title'];
  $nd_options_social_link_3_target = $nd_options_social_link_3['target'];
  $nd_options_social_link_3_rel = $nd_options_social_link_3['rel'];

  $nd_options_social_link_4 = vc_build_link( $atts['nd_options_social_link_4'] );
  $nd_options_social_link_4_url = $nd_options_social_link_4['url'];
  $nd_options_social_link_4_title = $nd_options_social_link_4['title'];
  $nd_options_social_link_4_target = $nd_options_social_link_4['target'];
  $nd_options_social_link_4_rel = $nd_options_social_link_4['rel'];

  //nd_options_image
  $nd_options_image_src = wp_get_attachment_image_src($atts['nd_options_image'],'large');
  $nd_options_social_img_1 = wp_get_attachment_image_src($atts['nd_options_social_img_1'],'large');
  $nd_options_social_img_2 = wp_get_attachment_image_src($atts['nd_options_social_img_2'],'large');
  $nd_options_social_img_3 = wp_get_attachment_image_src($atts['nd_options_social_img_3'],'large');
  $nd_options_social_img_4 = wp_get_attachment_image_src($atts['nd_options_social_img_4'],'large');
      
  
  //default value for avoid error include
  if ($nd_options_link_target == '') { $nd_options_link_target = "_self"; }
  if ($nd_options_layout == '') { $nd_options_layout = "layout-1"; }

  //include the layout selected
  include 'layout/'.$nd_options_layout.'.php';

  
  return apply_filters('uds_shortcode_out_filter', $str);
}
//END TEAM





//vc
add_action( 'vc_before_init', 'nd_options_team' );
function nd_options_team() {


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
      "name" => __( "Team", "nd-shortcodes" ),
      "base" => "nd_options_team",
      'description' => __( 'Add single Team', 'nd-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => esc_url(plugins_url('team.jpg', __FILE__ )),
      "class" => "",
      "category" => __( "ND Shortcodes", "nd-shortcodes"),
      "params" => array(


          array(
           'type' => 'dropdown',
            'heading' => __( 'Layout', 'nd-shortcodes' ),
            'param_name' => 'nd_options_layout',
            'value' => $nd_options_layouts,
            'description' => __( "Choose the layout", "nd-shortcodes" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Name", "nd-shortcodes" ),
            "param_name" => "nd_options_title",
            'admin_label' => true,
            "description" => __( "Insert the name", "nd-shortcodes" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Role", "nd-shortcodes" ),
            "param_name" => "nd_options_role",
            'admin_label' => true,
            "description" => __( "Insert the role", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-1','layout-2','layout-3','layout-4','layout-5' ) )
         ),
         array(
            "type" => "textarea",
            "class" => "",
            "heading" => __( "Description", "nd-shortcodes" ),
            "param_name" => "nd_options_description",
            "description" => __( "Insert the description", "nd-shortcodes" )
         ),
         array(
            'type' => 'attach_image',
            'heading' => __( 'Image', 'nd-shortcodes' ),
            'param_name' => 'nd_options_image',
            'description' => __( 'Select image from media library.', 'nd-shortcodes' )
         ),
         array(
         'type' => 'vc_link',
          'heading' => "Link",
          'param_name' => 'nd_options_link',
          'description' => __( "Insert button link", "nd-shortcodes" ),
          'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-1','layout-2','layout-3','layout-4','layout-5' ) )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Color", "nd-shortcodes" ),
            "param_name" => "nd_options_color",
            "value" => '#000',
            "description" => __( "Choose color", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-1','layout-2','layout-3' ) )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Color 2", "nd-shortcodes" ),
            "param_name" => "nd_options_color_2",
            "value" => '#000',
            "description" => __( "Choose color 2", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-2' ) )
         ),
         array(
            'type' => 'attach_image',
            'heading' => __( 'Icon Social 1', 'nd-shortcodes' ),
            'param_name' => 'nd_options_social_img_1',
            'description' => __( 'Select image for social 1.', 'nd-shortcodes' ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-6' ) )
         ),
         array(
         'type' => 'vc_link',
          'heading' => "Link Social 1",
          'param_name' => 'nd_options_social_link_1',
          'description' => __( "Insert link for Social 1", "nd-shortcodes" ),
          'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-6' ) )
         ),

         array(
            'type' => 'attach_image',
            'heading' => __( 'Icon Social 2', 'nd-shortcodes' ),
            'param_name' => 'nd_options_social_img_2',
            'description' => __( 'Select image for social 2.', 'nd-shortcodes' ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-6' ) )
         ),
         array(
         'type' => 'vc_link',
          'heading' => "Link Social 2",
          'param_name' => 'nd_options_social_link_2',
          'description' => __( "Insert link for Social 2", "nd-shortcodes" ),
          'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-6' ) )
         ),

         array(
            'type' => 'attach_image',
            'heading' => __( 'Icon Social 3', 'nd-shortcodes' ),
            'param_name' => 'nd_options_social_img_3',
            'description' => __( 'Select image for social 3.', 'nd-shortcodes' ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-6' ) )
         ),
         array(
         'type' => 'vc_link',
          'heading' => "Link Social 3",
          'param_name' => 'nd_options_social_link_3',
          'description' => __( "Insert link for Social 3", "nd-shortcodes" ),
          'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-6' ) )
         ),

         array(
            'type' => 'attach_image',
            'heading' => __( 'Icon Social 4', 'nd-shortcodes' ),
            'param_name' => 'nd_options_social_img_4',
            'description' => __( 'Select image for social 4.', 'nd-shortcodes' ),
            'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-6' ) )
         ),
         array(
         'type' => 'vc_link',
          'heading' => "Link Social 4",
          'param_name' => 'nd_options_social_link_4',
          'description' => __( "Insert link for Social 4", "nd-shortcodes" ),
          'dependency' => array( 'element' => 'nd_options_layout', 'value' => array( 'layout-6' ) )
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