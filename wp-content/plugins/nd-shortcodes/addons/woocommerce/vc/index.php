<?php


//START
add_shortcode('nd_options_woo_post_grid', 'nd_options_shortcode_woo_post_grid');
function nd_options_shortcode_woo_post_grid($atts, $content = null)
{  

  $atts = shortcode_atts(
  array(
    'nd_options_class' => '',
    'nd_options_layout' => '',
    'nd_options_width' => '',
    'nd_options_qnt' => '',
    'nd_options_id' => '',
    'nd_options_order' => '',
    'nd_options_orderby' => '',
  ), $atts);

  $str = '';

  //get variables
  $nd_options_class = $atts['nd_options_class'];
  $nd_options_layout = $atts['nd_options_layout'];
  $nd_options_width = $atts['nd_options_width'];
  $nd_options_qnt = $atts['nd_options_qnt'];
  $nd_options_id = $atts['nd_options_id'];
  $nd_options_order = $atts['nd_options_order'];
  $nd_options_orderby = $atts['nd_options_orderby'];


  //default value
  if ($nd_options_layout == '') { $nd_options_layout = "layout-1"; }
  if ($nd_options_width == '') { $nd_options_width = "nd_options_width_100_percentage"; }
  if ($nd_options_qnt == '') { $nd_options_qnt = -1; }
  if ($nd_options_order == '') { $nd_options_order = 'DESC'; }
  if ($nd_options_orderby == '') { $nd_options_orderby = 'date'; }



  $args = array(
    'post_type' => 'product',
    'posts_per_page' => $nd_options_qnt,
    'order' => $nd_options_order,
    'orderby' => $nd_options_orderby,
    'p' => $nd_options_id
  );

  $the_query = new WP_Query( $args );

  
  //include the layout selected
  include 'layout/'.$nd_options_layout.'.php';


  wp_reset_postdata();


   return apply_filters('uds_shortcode_out_filter', $str);
}
//END





//vc
add_action( 'vc_before_init', 'nd_options_woo_post_grid' );
function nd_options_woo_post_grid() {


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
      "name" => __( "WooCommerce", "nd-shortcodes" ),
      "base" => "nd_options_woo_post_grid",
      'description' => __( 'Add Post Grid', 'nd-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => esc_url(plugins_url('post-grid.jpg', __FILE__ )),
      "class" => "",
      "category" => __( "NDS - Violet Coll.", "nd-shortcodes"),
      "params" => array(
   

          array(
           'type' => 'dropdown',
            'heading' => "Layout",
            'param_name' => 'nd_options_layout',
            'value' => $nd_options_layouts,
            'description' => __( "Choose the layout", "nd-shortcodes" )
         ),
          array(
         'type' => 'dropdown',
          "heading" => __( "Width", "nd-shortcodes" ),
          'param_name' => 'nd_options_width',
          'value' => array( __( 'Select Width', 'nd-shortcodes' ) => 'nd_options_width_100_percentage nd_options_float_left', __( '20 %', 'nd-shortcodes' ) => 'nd_options_width_20_percentage nd_options_float_left', __( '25 %', 'nd-shortcodes' ) => 'nd_options_width_25_percentage nd_options_float_left', __( '33 %', 'nd-shortcodes' ) => 'nd_options_width_33_percentage nd_options_float_left', __( '50 %', 'nd-shortcodes' ) => 'nd_options_width_50_percentage nd_options_float_left', __( '100 %', 'nd-shortcodes' ) => 'nd_options_width_100_percentage nd_options_float_left' ),
          'description' => __( "Select the width for post preview grid", "nd-shortcodes" )
         ),
          array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Qnt Posts", "nd-shortcodes" ),
            "param_name" => "nd_options_qnt",
            "description" => __( "Insert the quantity of posts that you want display.", "nd-shortcodes" )
         ),
          array(
         'type' => 'dropdown',
          "heading" => __( "Order", "nd-shortcodes" ),
          'param_name' => 'nd_options_order',
          'value' => array('DESC','ASC'),
          'description' => __( "Select the Order paramater, more info <a target='_blank' href='https://codex.wordpress.org/it:Riferimento_classi/WP_Query#Parametri_Order_.26_Orderby'>here</a>", "nd-shortcodes" )
         ),
          array(
         'type' => 'dropdown',
          "heading" => __( "Order By", "nd-shortcodes" ),
          'param_name' => 'nd_options_orderby',
          'value' => array('none','ID','author','title','name','date','modified','rand','comment_count'),
          'description' => __( "Select the OrderBy paramater, more info <a target='_blank' href='https://codex.wordpress.org/it:Riferimento_classi/WP_Query#Parametri_Order_.26_Orderby'>here</a>", "nd-shortcodes" )
         ),
           array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "ID Posts", "nd-shortcodes" ),
            "param_name" => "nd_options_id",
            "description" => __( "Insert the id of the post that you want display ( NB: only one post )", "nd-shortcodes" )
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