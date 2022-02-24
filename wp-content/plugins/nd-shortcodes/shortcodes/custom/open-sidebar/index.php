<?php

//START
add_shortcode('nd_options_open_sidebar', 'nd_options_shortcode_open_sidebar');
function nd_options_shortcode_open_sidebar($atts, $content = null)
{  

  $atts = shortcode_atts(
  array(
    'nd_options_class' => '',
    'nd_options_image' => '',
    'nd_options_image_close' => '',
    'nd_options_image_close_width' => '',
    'nd_options_width' => '',
    'nd_options_align' => '',
    'nd_options_pages' => '',
    'nd_options_bg_color' => '',
    'nd_options_sidebar_width' => '',
    'nd_options_image_close_position' => '',
  ), $atts);

  $str = '';

  //get variables
  $nd_options_class = $atts['nd_options_class'];
  $nd_options_width = $atts['nd_options_width'];
  $nd_options_align = $atts['nd_options_align'];
  $nd_options_pages = $atts['nd_options_pages'];
  $nd_options_image_close_position = $atts['nd_options_image_close_position'];
  $nd_options_bg_color = $atts['nd_options_bg_color'];
  $nd_options_sidebar_width = $atts['nd_options_sidebar_width'];
  $nd_options_image = wp_get_attachment_image_src($atts['nd_options_image'],'large');
  $nd_options_image_close = wp_get_attachment_image_src($atts['nd_options_image_close'],'large');
  $nd_options_image_close_width = $atts['nd_options_image_close_width'];
  $nd_options_id_open_sidebar = rand(0, 1000);

  //default
  if ( $nd_options_bg_color == '' ) { $nd_options_bg_color = '#fff'; }
  if ( $nd_options_sidebar_width == '' ) { $nd_options_sidebar_width = '300'; }
  
  if ( $nd_options_image_close[0] == '' ) { 
    $nd_options_image_close_src = esc_url(plugins_url('icon-close-white.svg', __FILE__ ));
  }else{ 
    $nd_options_image_close_src = $nd_options_image_close[0]; 
  }

  if ( $nd_options_image_close_width == '' ) { $nd_options_image_close_width = '20'; }
  if ( $nd_options_image_close_position == '' ) { $nd_options_image_close_position = '20 20'; }
  if ( $nd_options_width == '' ) { $nd_options_width = '25px'; }

  //get position
  $nd_options_icon_positions = explode(" ", $nd_options_image_close_position);
  $nd_options_icon_position_right = $nd_options_icon_positions[0];
  $nd_options_icon_position_top = $nd_options_icon_positions[1];
  
  $str .= '


    <!--START js-->
    <script type="text/javascript">
    //<![CDATA[

    jQuery(document).ready(function() {

      
      //START
      jQuery(function ($) {
        
        //OPEN sidebar content ( navigation 2 )
        $(".nd_options_open_sidebar_'.$nd_options_id_open_sidebar.'").on("click",function(event){

          //add rule to main container only if the component is in header
          if ( $( "#nd_options_header_5 .nd_options_open_sidebar_content_'.$nd_options_id_open_sidebar.', #nd_options_header_5_mobile .nd_options_open_sidebar_content_'.$nd_options_id_open_sidebar.'" ).length ) {
            $(".nicdark_site > .nd_options_container").css({ "position": "relative", "z-index": "0"});
          }
          
          //open sidebar
          $(".nd_options_open_sidebar_content_'.$nd_options_id_open_sidebar.'").css({ "right": "0px",});

        });
        
        //CLOSE sidebar content ( navigation 2 )
        $(".nd_options_close_sidebar_'.$nd_options_id_open_sidebar.'").on("click",function(event){

          $(".nd_options_open_sidebar_content_'.$nd_options_id_open_sidebar.'").css({ "right": "-'.$nd_options_sidebar_width.'px" });

          //add rule to main container only if the component is in header
          if ( $( "#nd_options_header_5 .nd_options_open_sidebar_content_'.$nd_options_id_open_sidebar.', #nd_options_header_5_mobile .nd_options_open_sidebar_content_'.$nd_options_id_open_sidebar.'" ).length ) {
            
            function nd_options_remove_style(){
              $(".nicdark_site > .nd_options_container").css({ "position": "", "z-index": ""});
            }
            setTimeout(nd_options_remove_style, 1000);

          }

        });


      });
      //END

    });

    //]]>
    </script>
    <!--END js-->



    <div style="text-align:'.$nd_options_align.';" class="nd_options_section">
      <img alt="" style="width:'.$nd_options_width.';" class="'.$nd_options_class.' nd_options_cursor_pointer nd_options_open_sidebar_'.$nd_options_id_open_sidebar.' nd_options_margin_0 nd_options_padding_0 " src="'.$nd_options_image[0].'">
    </div>


    <!--START sidebar-->
    <div style="background-color:'.$nd_options_bg_color.'; width:'.$nd_options_sidebar_width.'px; right:-'.$nd_options_sidebar_width.'px;" class="nd_options_open_sidebar_contentt nd_options_open_sidebar_content_'.$nd_options_id_open_sidebar.' nd_options_box_sizing_border_box nd_options_overflow_hidden nd_options_overflow_y_auto nd_options_transition_all_08_ease nd_options_height_100_percentage nd_options_position_fixed nd_options_top_0 nd_options_z_index_999">

        <img style="right:'.$nd_options_icon_position_right.'px; top:'.$nd_options_icon_position_top.'px;" alt="" width="'.$nd_options_image_close_width.'" class="nd_options_close_sidebar_'.$nd_options_id_open_sidebar.' nd_options_cursor_pointer nd_options_z_index_9 nd_options_position_absolute" src="'.$nd_options_image_close_src.'">

        <div class="nd_options_section">';

          //insert page on sidebar
          $nd_options_post_h   = get_post($nd_options_pages);
          $nd_options_post_output_h =  apply_filters( 'the_content', $nd_options_post_h->post_content );

          //echo all page
          $str .= $nd_options_post_output_h;

          $nd_options_strings_h  = $nd_options_post_h->post_content;
          $nd_options_pieces_h = explode('css=".vc_custom_', $nd_options_strings_h);

          //get how many styles inserted
          $nd_options_qnt_styles_h = count($nd_options_pieces_h)-1;

          //echo style
          $str .= '<style>';
          for ($nd_options_i_h = 1; $nd_options_i_h <= $nd_options_qnt_styles_h; $nd_options_i_h++) {
            $nd_options_tests_h = explode(';}"][', $nd_options_pieces_h[$nd_options_i_h]);
            $str .= '.vc_custom_'.$nd_options_tests_h[0].';}';
          }
          $str .= '</style>';

        $str .= '
        </div>

    </div>
    <!--END sidebar-->';

   return apply_filters('uds_shortcode_out_filter', $str);
}
//END PRICE





//vc
add_action( 'vc_before_init', 'nd_options_open_sidebar' );
function nd_options_open_sidebar() {



  //get all pages
  $nd_options_pages = get_posts( 'post_type="page"&numberposts=-1' );
  $nd_options_all_pages = array();
  if ( $nd_options_pages ) {
    foreach ( $nd_options_pages as $nd_options_page ) {
      $nd_options_all_pages[ $nd_options_page->post_title ] = $nd_options_page->ID;
    }
  } else {
    $nd_options_all_pages[ __( 'No contact forms found', 'nd-shortcodes' ) ] = 0;
  }
  //END get all cf7 forms




   vc_map( array(
      "name" => __( "Open Sidebar", "nd-shortcodes" ),
      "base" => "nd_options_open_sidebar",
      'description' => __( 'Add your open sidebar element', 'nd-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => esc_url(plugins_url('open-sidebar.jpg', __FILE__ )),
      "class" => "",
      "category" => __( "NDS - Orange Coll.", "nd-shortcodes"),
      "params" => array(

        array(
            'type' => 'attach_image',
            'heading' => __( 'Image', 'nd-shortcodes' ),
            'param_name' => 'nd_options_image',
            'description' => __( 'Select image from media library.', 'nd-shortcodes' )
         ),
        array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Width", "nd-shortcodes" ),
            "param_name" => "nd_options_width",
            "description" => __( "Insert image width, '100%' or fixed width as '200px'", "nd-shortcodes" )
         ),
        array(
         'type' => 'dropdown',
          "heading" => __( "Image Align", "nd-shortcodes" ),
          'param_name' => 'nd_options_align',
          'value' => array( __( 'Select', 'nd-shortcodes' ) => '', __( 'Left', 'nd-shortcodes' ) => 'left', __( 'Right', 'nd-shortcodes' ) => 'right', __( 'Center', 'nd-shortcodes' ) => 'center'),
          'description' => __( "Choose alignment for your image", "nd-shortcodes" )
         ),
        array(
          'type' => 'dropdown',
          'heading' => __( 'Page on Sidebar', 'nicdark-shortcodes' ),
          'param_name' => 'nd_options_pages',
          'value' => $nd_options_all_pages,
          'description' => __( 'Choose your page that you want to display on the sidebar.', 'nd-shortcodes' )
        ),
        array(
            "type" => "colorpicker",
            "heading" => __( "Bg Color", "nd-shortcodes" ),
            "param_name" => "nd_options_bg_color",
            "description" => __( "Choose bg color", "nd-shortcodes" )
         ),
        array(
            "type" => "textfield",
            "heading" => __( "Sidebar Width", "nd-shortcodes" ),
            "param_name" => "nd_options_sidebar_width",
            "description" => __( "Insert sidebar width, for example '300' ONLY NUMBER", "nd-shortcodes" )
         ),
        array(
            'type' => 'attach_image',
            'heading' => __( 'Icon Close', 'nd-shortcodes' ),
            'param_name' => 'nd_options_image_close',
            'description' => __( 'Select icon from media library.', 'nd-shortcodes' )
         ),
        array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Icon Close Width", "nd-shortcodes" ),
            "param_name" => "nd_options_image_close_width",
            "description" => __( "Insert image width, example '20' ONLY NUMBER", "nd-shortcodes" )
         ),
        array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Icon Close Position", "nd-shortcodes" ),
            "param_name" => "nd_options_image_close_position",
            "description" => __( "Insert icon position, example '20 20' ONLY NUMBER, the first number is the right position and the second number is the top position", "nd-shortcodes" )
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