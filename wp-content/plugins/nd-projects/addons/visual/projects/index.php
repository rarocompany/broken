<?php


//START
add_shortcode('nd_cc_projects_pg', 'nd_cc_vc_shortcode_projects');
function nd_cc_vc_shortcode_projects($atts, $content = null)
{  

  $atts = shortcode_atts(
  array(
    'nd_cc_class' => '',
    'nd_cc_layout' => '',
    'nd_cc_width' => '',
    'nd_cc_qnt' => '',
    'nd_cc_id' => '',
    'nd_cc_order' => '',
    'nd_cc_orderby' => '',
    'nd_cc_image_size' => '',
    'nd_cc_padding' => '',
  ), $atts);

  $str = '';

  //get variables
  $nd_cc_class = $atts['nd_cc_class'];
  $nd_cc_layout = $atts['nd_cc_layout'];
  $nd_cc_width = $atts['nd_cc_width'];
  $nd_cc_qnt = $atts['nd_cc_qnt'];
  $nd_cc_id = $atts['nd_cc_id'];
  $nd_cc_order = $atts['nd_cc_order'];
  $nd_cc_orderby = $atts['nd_cc_orderby'];
  $nd_cc_image_size = $atts['nd_cc_image_size'];
  $nd_cc_padding = $atts['nd_cc_padding'];


  //default value
  if ($nd_cc_layout == '') { $nd_cc_layout = "layout-1"; }
  if ($nd_cc_width == '') { $nd_cc_width = "nd_cc_width_100_percentage"; }
  if ($nd_cc_qnt == '') { $nd_cc_qnt = -1; }
  if ($nd_cc_order == '') { $nd_cc_order = 'DESC'; }
  if ($nd_cc_orderby == '') { $nd_cc_orderby = 'date'; }

  $args = array(
    'post_type' => 'nd_cc_cpt_1',
    'posts_per_page' => $nd_cc_qnt,
    'order' => $nd_cc_order,
    'orderby' => $nd_cc_orderby,
    'p' => $nd_cc_id
  );

  $the_query = new WP_Query( $args );

  //check with realpath
  $nd_cc_layout_selected = dirname( __FILE__ ).'/layout/'.$nd_cc_layout.'.php';
  $nd_cc_layout_selected = realpath($nd_cc_layout_selected);
  
  //include the layout selected
  include $nd_cc_layout_selected;

  wp_reset_postdata();
  
  return apply_filters('uds_shortcode_out_filter', $str);

}
//END





//vc
add_action( 'vc_before_init', 'nd_cc_projects_pg' );
function nd_cc_projects_pg() {


  //START get all layout
  $nd_cc_layouts = array();

  //php function to descover all name files in directory
  $nd_cc_directory = plugin_dir_path( __FILE__ ) .'layout/';
  $nd_cc_layouts = scandir($nd_cc_directory);


  //cicle for delete hidden file that not are php files
  $i = 0;
  foreach ($nd_cc_layouts as $value) {
    
    //remove all files that aren't php
    if ( strpos( $nd_cc_layouts[$i] , ".php" ) != true ){
      unset($nd_cc_layouts[$i]);
    }else{
      $nd_cc_layout_name = str_replace(".php","",$nd_cc_layouts[$i]);
      $nd_cc_layouts[$i] = $nd_cc_layout_name;
    } 
    $i++; 

  }
  //END get all layout


  //START image size
  $nd_cc_image_sizes = get_intermediate_image_sizes(); 
  //END image size


   vc_map( array(
      "name" => __( "Projects", "nd-projects" ),
      "base" => "nd_cc_projects_pg",
      'description' => __( 'Add Projects Post Grid', 'nd-projects' ),
      'show_settings_on_create' => true,
      "icon" => esc_url( plugins_url('pg-projects.jpg', __FILE__ ) ),
      "class" => "",
      "category" => __( "ND Projects", "nd-projects"),
      "params" => array(
   

          array(
           'type' => 'dropdown',
            'heading' => __( 'Layout', 'nd-projects' ),
            'param_name' => 'nd_cc_layout',
            'value' => $nd_cc_layouts,
            'description' => __( "Choose the layout", "nd-projects" )
         ),
          array(
         'type' => 'dropdown',
          "heading" => __( "Width", "nd-projects" ),
          'param_name' => 'nd_cc_width',
          'value' => array( __( 'Select Width', 'nd-projects' ) => 'nd_cc_width_100_percentage nd_cc_float_left', __( '20 %', 'nd-projects' ) => 'nd_cc_width_20_percentage nd_cc_float_left', __( '25 %', 'nd-projects' ) => 'nd_cc_width_25_percentage nd_cc_float_left', __( '33 %', 'nd-projects' ) => 'nd_cc_width_33_percentage nd_cc_float_left', __( '50 %', 'nd-projects' ) => 'nd_cc_width_50_percentage nd_cc_float_left', __( '100 %', 'nd-projects' ) => 'nd_cc_width_100_percentage nd_cc_float_left' ),
          'description' => __( "Select the width for project preview grid", "nd-projects" )
         ),
          array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Qnt projects", "nd-projects" ),
            "param_name" => "nd_cc_qnt",
            "description" => __( "Insert the quantity of projects that you want display.", "nd-projects" )
         ),
          array(
         'type' => 'dropdown',
          "heading" => __( "Order", "nd-projects" ),
          'param_name' => 'nd_cc_order',
          'value' => array('DESC','ASC'),
          'description' => __( "Select the Order paramater, more info <a target='_blank' href='https://codex.wordpress.org/it:Riferimento_classi/WP_Query#Parametri_Order_.26_Orderby'>here</a>", "nd-projects" )
         ),
          array(
         'type' => 'dropdown',
          "heading" => __( "Order By", "nd-projects" ),
          'param_name' => 'nd_cc_orderby',
          'value' => array('none','ID','author','title','name','date','modified','rand','comment_count'),
          'description' => __( "Select the OrderBy paramater, more info <a target='_blank' href='https://codex.wordpress.org/it:Riferimento_classi/WP_Query#Parametri_Order_.26_Orderby'>here</a>", "nd-projects" )
         ),
           array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "ID project", "nd-projects" ),
            "param_name" => "nd_cc_id",
            "description" => __( "Insert the id of the project that you want display ( NB: only one project )", "nd-projects" )
         ),
         array(
          'type' => 'dropdown',
          'heading' => __( 'Image Size', 'nd-projects' ),
          'param_name' => 'nd_cc_image_size',
          'value' => $nd_cc_image_sizes,
          'save_always' => true,
          'description' => __( 'Choose the image size that you want to use', 'nd-projects' ),
        ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Padding", "nd-projects" ),
            "param_name" => "nd_cc_padding",
            "description" => __( "Insert the padding in px ( eg : 20px or 10px 15px 20px 25px )", "nd-projects" ),
            'dependency' => array( 'element' => 'nd_cc_layout', 'value' => array( 'layout-4' ) )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Custom class", "nd-projects" ),
            "param_name" => "nd_cc_class",
            "description" => __( "Insert custom class", "nd-projects" )
         )

        
      )
   ) );
}
//end shortcode