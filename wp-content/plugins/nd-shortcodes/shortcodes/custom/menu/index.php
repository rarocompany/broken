<?php


//return array with the ids of all children
function nd_options_get_item_children($nd_options_item_id,$nd_options_menu){

  $nd_options_all_children = array();
  $nd_options_i = 0;

  $nd_options_menu_items = wp_get_nav_menu_items( $nd_options_menu );

  foreach( $nd_options_menu_items as $nd_options_menu_item ){

    if ( $nd_options_menu_item->menu_item_parent == $nd_options_item_id ) {

      $nd_options_all_children[$nd_options_i] = $nd_options_menu_item->db_id;
      $nd_options_i = $nd_options_i + 1;

    }

  }

  return sizeof($nd_options_all_children);

}


//START
add_shortcode('nd_options_menu', 'nd_options_shortcode_menu');
function nd_options_shortcode_menu($atts, $content = null)
{  

  $atts = shortcode_atts(
  array(
    'nd_options_class' => '',
    'nd_options_menu' => '',
    'nd_options_menu_color' => '',
    'nd_options_menu_weight' => '',
    'nd_options_menu_font_size' => '',
    'nd_options_menu_letter_spacing' => '',
    'nd_options_menu_family' => '',
    'nd_options_menu_align' => '',
    'nd_options_menu_padding' => '',
  ), $atts);

  $str = '';

  //get variables
  $nd_options_class = $atts['nd_options_class'];
  $nd_options_menu = $atts['nd_options_menu'];
  $nd_options_menu_color = $atts['nd_options_menu_color'];
  $nd_options_menu_weight = $atts['nd_options_menu_weight'];
  $nd_options_menu_font_size = $atts['nd_options_menu_font_size'];
  $nd_options_menu_letter_spacing = $atts['nd_options_menu_letter_spacing'];
  $nd_options_menu_family = $atts['nd_options_menu_family'];
  $nd_options_menu_align = $atts['nd_options_menu_align'];
  $nd_options_menu_padding = $atts['nd_options_menu_padding'];
  $nd_options_menu_id = rand(0, 1000);

  //default
  if ( $nd_options_menu_color == '') { $nd_options_menu_color = '#000'; } 
  if ( $nd_options_menu_weight == '') { $nd_options_menu_weight = 'normal'; } 
  if ( $nd_options_menu_font_size == '') { $nd_options_menu_font_size = '14'; } 
  if ( $nd_options_menu_letter_spacing == '') { $nd_options_menu_letter_spacing = '0'; } 
  if ( $nd_options_menu_family == '') { $nd_options_menu_family = 'nd_options_first_font'; } 
  if ( $nd_options_menu_align == '') { $nd_options_menu_align = 'left'; } 
  if ( $nd_options_menu_padding == '') { $nd_options_menu_padding = '20'; } 


  //get fonts
  //get font family H
  $nd_options_customizer_font_family_h = get_option( 'nd_options_customizer_font_family_h', 'Montserrat:400,700' );
  $nd_options_font_family_h_array = explode(":", $nd_options_customizer_font_family_h);
  $nd_options_font_family_h = str_replace("+"," ",$nd_options_font_family_h_array[0]);
  //get font family P
  $nd_options_customizer_font_family_p = get_option( 'nd_options_customizer_font_family_p', 'Montserrat:400,700' );
  $nd_options_font_family_p_array = explode(":", $nd_options_customizer_font_family_p);
  $nd_options_font_family_p = str_replace("+"," ",$nd_options_font_family_p_array[0]);
  //get font family third
  $nd_options_customizer_font_family_third = get_option( 'nd_options_customizer_font_family_third', 'Montserrat:400,700' );
  $nd_options_font_family_third_array = explode(":", $nd_options_customizer_font_family_third);
  $nd_options_font_family_third = str_replace("+"," ",$nd_options_font_family_third_array[0]);

  if ( $nd_options_menu_family == 'nd_options_first_font' ){
    $nd_options_menu_font = $nd_options_font_family_h;
  }elseif ( $nd_options_menu_family == 'nd_options_second_font' ) {
    $nd_options_menu_font = $nd_options_font_family_p;
  }else{
    $nd_options_menu_font = $nd_options_font_family_third;
  }

  //get color p
  $nd_options_customizer_font_color_p = get_option( 'nd_options_customizer_font_color_p', '#a3a3a3' );


  $args = array(
    'menu'   => $nd_options_menu,
    'echo' => false
  );

  $str .= '<div class=" '.$nd_options_class.' nd_options_menu_component nd_options_section nd_options_menu_component_'.$nd_options_menu_id.'">'.wp_nav_menu( $args ).'</div>';

  $str .= '

  <style>

  .nd_options_menu_component_'.$nd_options_menu_id.' ul.menu{
    margin:0px;
    padding:0px;
    list-style:none;
    display:inline-block;
  }

  .nd_options_menu_component_'.$nd_options_menu_id.' > div{
    float:left;
    width:100%;
    text-align:'.$nd_options_menu_align.'; 
  }

  .nd_options_menu_component_'.$nd_options_menu_id.' ul.menu > li{
    margin:0px;
    padding:0px;
    display:inline-block;
  }

  .nd_options_menu_component_'.$nd_options_menu_id.' ul.menu > li a{
    color:'.$nd_options_menu_color.';
    font-weight:'.$nd_options_menu_weight.';
    font-size:'.$nd_options_menu_font_size.'px;
    line-height:'.$nd_options_menu_font_size.'px;
    letter-spacing:'.$nd_options_menu_letter_spacing.'px;
    padding:'.$nd_options_menu_padding.'px;
    display:inline-block;
    font-family:'.$nd_options_menu_font.';
  }';


  //adjust padding based on aligm
  if ( $nd_options_menu_align == 'left' ) {
    $str .= '.nd_options_menu_component_'.$nd_options_menu_id.' ul.menu > li:first-child a{ padding-left: 0px; }';
  }elseif ( $nd_options_menu_align == 'right' ) {
    $str .= '.nd_options_menu_component_'.$nd_options_menu_id.' ul.menu > li:last-child a{ padding-right: 0px; }';
  }

  $str .= '
  #nd_options_header_5 .vc_row[data-vc-full-width] { overflow:visible; }


  /*dropdown*/
  .nd_options_menu_component_'.$nd_options_menu_id.' div > ul li:hover > ul.sub-menu { display: block; }
  .nd_options_menu_component_'.$nd_options_menu_id.' div > ul li > ul.sub-menu { margin-left: 0px; padding-top: 0px; width: 195px; z-index: 999; position: absolute; margin: 0px; padding: 0px; list-style: none; display: none; }
  
  .nd_options_menu_component_'.$nd_options_menu_id.' div > ul li > ul.sub-menu > li { padding: 15px 25px; border-bottom: 1px solid #f1f1f1; text-align: left; background-color: #fff; position: relative; box-shadow: 0px 2px 5px #f1f1f1; float: left; width: 100%; box-sizing:border-box; }
  .nd_options_menu_component_'.$nd_options_menu_id.' div > ul li > ul.sub-menu > li:hover { background-color: #f9f9f9;  }
  .nd_options_menu_component_'.$nd_options_menu_id.' div > ul li > ul.sub-menu > li:last-child { border-bottom: 0px solid #000; }

  .nd_options_menu_component_'.$nd_options_menu_id.' div > ul li > ul.sub-menu li a { font-size: 14px; float: left; width: 100%; margin:0px; padding:0px; font-weight:normal; letter-spacing:1px; color:'.$nd_options_customizer_font_color_p.'; }
  
  .nd_options_menu_component_'.$nd_options_menu_id.' div > ul li > ul.sub-menu li > ul.sub-menu { margin-left: 165px; top: 0; padding-top: 0; padding-left: 25px; }


  /*arrow for item has children*/
  .nd_options_menu_component_'.$nd_options_menu_id.' div > ul li > ul.sub-menu li.menu-item-has-children > a:after { content:""; float: right; border-style: solid; border-width: 5px 0 5px 5px; border-color: transparent transparent transparent '.$nd_options_customizer_font_color_p.'; margin-top: 1px; }


  </style>

  ';


  return apply_filters('uds_shortcode_out_filter', $str);
}
//END






//vc
add_action( 'vc_before_init', 'nd_options_menu' );
function nd_options_menu() {


    $nd_options_menus = get_terms('nav_menu');
    $nd_options_all_menus = array();
    $nd_options_i = 0;

    foreach($nd_options_menus as $nd_options_menu){
      
      $nd_options_all_menus[$nd_options_i] = $nd_options_menu->name;
      $nd_options_i = $nd_options_i + 1;
    
    } 

   vc_map( array(
      "name" => __( "Menu", "nd-shortcodes" ),
      "base" => "nd_options_menu",
      'description' => __( 'Add Your Menu', 'nd-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => esc_url(plugins_url('menu.jpg', __FILE__ )),
      "class" => "",
      "category" => __( "NDS - Orange Coll.", "nd-shortcodes"),
      "params" => array(
          
         array(
            'type' => 'dropdown',
            'heading' => __( 'Menu', 'nd-shortcodes' ),
            'param_name' => 'nd_options_menu',
            'value' => $nd_options_all_menus,
            "description" => __( "Select your menu", "nd-shortcodes" )
          ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Text Color", "nd-shortcodes" ),
            "param_name" => "nd_options_menu_color",
            "description" => __( "Choose the color for your text", "nd-shortcodes" )
         ),
           array(
         'type' => 'dropdown',
          "heading" => __( "Font Weight", "nd-shortcodes" ),
          'param_name' => 'nd_options_menu_weight',
          'value' => array('Select Weight','normal','bold','lighter'),
          'description' => __( "Select the font weight", "nd-shortcodes" )
         ),
           array(
         'type' => 'dropdown',
          "heading" => __( "Font Family", "nd-shortcodes" ),
          'param_name' => 'nd_options_menu_family',
          'value' => array( 'Select Font' => '', 'First Font' => 'nd_options_first_font' , 'Second Font' => 'nd_options_second_font', 'Third Font' => 'nd_options_third_font' ),
          'description' => __( "Select the font family", "nd-shortcodes" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Font Size", "nd-shortcodes" ),
            "param_name" => "nd_options_menu_font_size",
            "description" => __( "Insert font size in px ( only number )", "nd-shortcodes" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Letter Spacing", "nd-shortcodes" ),
            "param_name" => "nd_options_menu_letter_spacing",
            "description" => __( "Insert letter spacing in px ( only number )", "nd-shortcodes" )
         ),
          array(
         'type' => 'dropdown',
          "heading" => __( "Text Align", "nd-shortcodes" ),
          'param_name' => 'nd_options_menu_align',
          'value' => array( 'Select Align' => 'left', 'Align Left' => 'left' , 'Align Right' => 'right', 'Align Center' => 'center' ),
          'description' => __( "Select the text align", "nd-shortcodes" )
         ),
          array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Text Padding", "nd-shortcodes" ),
            "param_name" => "nd_options_menu_padding",
            "description" => __( "Insert padding in px ( only number )", "nd-shortcodes" )
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