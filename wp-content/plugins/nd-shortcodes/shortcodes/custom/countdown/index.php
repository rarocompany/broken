<?php

//START
add_shortcode('nd_options_countdown', 'nd_options_shortcode_countdown');
function nd_options_shortcode_countdown($atts, $content = null)
{  

  $atts = shortcode_atts(
  array(
    'nd_options_class' => '',
    'nd_options_layout' => '',
    'nd_options_date' => '',
    'nd_options_width' => '',
    'nd_options_number_color' => '',
    'nd_options_display_years' => '',
    'nd_options_years_color' => '',
    'nd_options_years_bg_color' => '',
    'nd_options_display_days' => '',
    'nd_options_days_color' => '',
    'nd_options_days_bg_color' => '',
    'nd_options_display_hours' => '',
    'nd_options_hours_color' => '',
    'nd_options_hours_bg_color' => '',
    'nd_options_display_minutes' => '',
    'nd_options_minutes_color' => '',
    'nd_options_minutes_bg_color' => '',
    'nd_options_display_seconds' => '',
    'nd_options_seconds_color' => '',
    'nd_options_seconds_bg_color' => '',
  ), $atts);

  $str = '';

  //get variables
  $nd_options_class = $atts['nd_options_class'];
  $nd_options_layout = $atts['nd_options_layout'];
  $nd_options_date = $atts['nd_options_date'];
  $nd_options_width = $atts['nd_options_width'];
  $nd_options_number_color = $atts['nd_options_number_color'];
  $nd_options_display_years = $atts['nd_options_display_years'];
  $nd_options_years_color = $atts['nd_options_years_color'];
  $nd_options_years_bg_color = $atts['nd_options_years_bg_color'];
  $nd_options_display_days = $atts['nd_options_display_days'];
  $nd_options_days_color = $atts['nd_options_days_color'];
  $nd_options_days_bg_color = $atts['nd_options_days_bg_color'];
  $nd_options_display_hours = $atts['nd_options_display_hours'];
  $nd_options_hours_color = $atts['nd_options_hours_color'];
  $nd_options_hours_bg_color = $atts['nd_options_hours_bg_color'];
  $nd_options_display_minutes = $atts['nd_options_display_minutes'];
  $nd_options_minutes_color = $atts['nd_options_minutes_color'];
  $nd_options_minutes_bg_color = $atts['nd_options_minutes_bg_color'];
  $nd_options_display_seconds = $atts['nd_options_display_seconds'];
  $nd_options_seconds_color = $atts['nd_options_seconds_color'];
  $nd_options_seconds_bg_color = $atts['nd_options_seconds_bg_color'];

  //display
  if ( $nd_options_display_years != 'yes' ) { $nd_options_display_years = 'nd_options_display_none'; }
  if ( $nd_options_display_days != 'yes' ) { $nd_options_display_days = 'nd_options_display_none'; }
  if ( $nd_options_display_hours != 'yes' ) { $nd_options_display_hours = 'nd_options_display_none'; }
  if ( $nd_options_display_minutes != 'yes' ) { $nd_options_display_minutes = 'nd_options_display_none'; }
  if ( $nd_options_display_seconds != 'yes' ) { $nd_options_display_seconds = 'nd_options_display_none'; }

  //translate
  $nd_options_text_years = __('YEARS','nd-shortcodes');
  $nd_options_text_days = __('DAYS','nd-shortcodes');
  $nd_options_text_hours = __('HOURS','nd-shortcodes');
  $nd_options_text_minutes = __('MINUTES','nd-shortcodes');
  $nd_options_text_seconds = __('SECONDS','nd-shortcodes');

  //add script
  wp_enqueue_script( 'nd_options_countdown_plugin', esc_url( plugins_url( 'js/countdown.js', __FILE__ ) ) );





  //default value for avoid error include
  if ($nd_options_layout == '') { $nd_options_layout = "layout-1"; }

  //include the layout selected
  include 'layout/'.$nd_options_layout.'.php';

  $str .= '<div class="nd_options_countdown"></div>';

  return apply_filters('uds_shortcode_out_filter', $str);
}
//END





//vc
add_action( 'vc_before_init', 'nd_options_countdown' );
function nd_options_countdown() {


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
      "name" => __( "Countdown", "nd-shortcodes" ),
      "base" => "nd_options_countdown",
      'description' => __( 'Add Countdown', 'nd-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => esc_url(plugins_url('countdown.jpg', __FILE__ )),
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
            "heading" => __( "Date", "nd-shortcodes" ),
            "param_name" => "nd_options_date",
            "description" => __( "Insert date in this format: June 06, 2017", "nd-shortcodes" )
         ),
        array(
         'type' => 'dropdown',
          "heading" => __( "Width", "nd-shortcodes" ),
          'param_name' => 'nd_options_width',
          'value' => array( __( 'Select Width', 'nd-shortcodes' ) => 'nd_options_width_100_percentage nd_options_float_left', __( '20 %', 'nd-shortcodes' ) => 'nd_options_width_20_percentage nd_options_float_left', __( '25 %', 'nd-shortcodes' ) => 'nd_options_width_25_percentage nd_options_float_left', __( '33 %', 'nd-shortcodes' ) => 'nd_options_width_33_percentage nd_options_float_left', __( '50 %', 'nd-shortcodes' ) => 'nd_options_width_50_percentage nd_options_float_left', __( '100 %', 'nd-shortcodes' ) => 'nd_options_width_100_percentage nd_options_float_left' ),
          'description' => __( "Select the width for counter grid", "nd-shortcodes" )
         ),
        array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Number Color", "nd-shortcodes" ),
            "param_name" => "nd_options_number_color",
            "description" => __( "Choose number text color", "nd-shortcodes" )         
        ),


        //years
        array(
          'type' => 'checkbox',
          'heading' => __( 'Display Years', 'nd-shortcodes' ),
          'param_name' => 'nd_options_display_years',
          'value' => array( __( 'Yes', 'nd-shortcodes' ) => 'yes' ),
          'description' => __( 'Check if you want to display years', 'nd-shortcodes' ),
        ), 
        array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Years Text Color", "nd-shortcodes" ),
            "param_name" => "nd_options_years_color",
            "description" => __( "Choose text color for years", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_display_years', 'value' => array( 'yes' ) )         
        ),
        array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Years Bg Color", "nd-shortcodes" ),
            "param_name" => "nd_options_years_bg_color",
            "description" => __( "Choose bg color for years", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_display_years', 'value' => array( 'yes' ) )         
        ),




        //days
        array(
          'type' => 'checkbox',
          'heading' => __( 'Display Days', 'nd-shortcodes' ),
          'param_name' => 'nd_options_display_days',
          'value' => array( __( 'Yes', 'nd-shortcodes' ) => 'yes' ),
          'description' => __( 'Check if you want to display days', 'nd-shortcodes' ),
        ), 
        array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Days Text Color", "nd-shortcodes" ),
            "param_name" => "nd_options_days_color",
            "description" => __( "Choose text color for days", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_display_days', 'value' => array( 'yes' ) )         
        ),
        array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Days Bg Color", "nd-shortcodes" ),
            "param_name" => "nd_options_days_bg_color",
            "description" => __( "Choose bg color for days", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_display_days', 'value' => array( 'yes' ) )         
        ),



        //hours
        array(
          'type' => 'checkbox',
          'heading' => __( 'Display Hours', 'nd-shortcodes' ),
          'param_name' => 'nd_options_display_hours',
          'value' => array( __( 'Yes', 'nd-shortcodes' ) => 'yes' ),
          'description' => __( 'Check if you want to display hours', 'nd-shortcodes' ),
        ), 
        array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Hours Text Color", "nd-shortcodes" ),
            "param_name" => "nd_options_hours_color",
            "description" => __( "Choose text color for hours", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_display_hours', 'value' => array( 'yes' ) )         
        ),
        array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Hours Bg Color", "nd-shortcodes" ),
            "param_name" => "nd_options_hours_bg_color",
            "description" => __( "Choose bg color for hours", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_display_hours', 'value' => array( 'yes' ) )         
        ),



        //minutes
        array(
          'type' => 'checkbox',
          'heading' => __( 'Display Minutes', 'nd-shortcodes' ),
          'param_name' => 'nd_options_display_minutes',
          'value' => array( __( 'Yes', 'nd-shortcodes' ) => 'yes' ),
          'description' => __( 'Check if you want to display minutes', 'nd-shortcodes' ),
        ), 
        array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Minutes Text Color", "nd-shortcodes" ),
            "param_name" => "nd_options_minutes_color",
            "description" => __( "Choose text color for minutes", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_display_minutes', 'value' => array( 'yes' ) )         
        ),
        array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Minutes Bg Color", "nd-shortcodes" ),
            "param_name" => "nd_options_minutes_bg_color",
            "description" => __( "Choose bg color for minutes", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_display_minutes', 'value' => array( 'yes' ) )         
        ),


        //seconds
        array(
          'type' => 'checkbox',
          'heading' => __( 'Display Seconds', 'nd-shortcodes' ),
          'param_name' => 'nd_options_display_seconds',
          'value' => array( __( 'Yes', 'nd-shortcodes' ) => 'yes' ),
          'description' => __( 'Check if you want to display seconds', 'nd-shortcodes' ),
        ), 
        array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Seconds Text Color", "nd-shortcodes" ),
            "param_name" => "nd_options_seconds_color",
            "description" => __( "Choose text color for seconds", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_display_seconds', 'value' => array( 'yes' ) )         
        ),
        array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Seconds Bg Color", "nd-shortcodes" ),
            "param_name" => "nd_options_seconds_bg_color",
            "description" => __( "Choose bg color for seconds", "nd-shortcodes" ),
            'dependency' => array( 'element' => 'nd_options_display_seconds', 'value' => array( 'yes' ) )         
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