<?php

//START
add_shortcode('nd_options_post_search', 'nd_options_shortcode_post_search');
function nd_options_shortcode_post_search($atts, $content = null)
{  

  $atts = shortcode_atts(
  array(
    'nd_options_class' => '',
    'nd_options_layout' => '',
    'nd_options_category_slug' => '',
  ), $atts);

  $str = '';

  //get variables
  $nd_options_class = $atts['nd_options_class'];
  $nd_options_layout = $atts['nd_options_layout'];
  $nd_options_category_slug = $atts['nd_options_category_slug'];

  //default value
  if ($nd_options_category_slug == '') { $nd_options_category_slug = ''; }

  //ajax results
  $nd_options_get_search_results_params = array(
      'nd_options_ajaxurl_get_search_results' => admin_url('admin-ajax.php'),
      'nd_options_ajaxnonce_get_search_results' => wp_create_nonce('nd_options_get_search_results_nonce'),
  );

  wp_enqueue_script( 'nd_options_post_search_plugin', esc_url( plugins_url( 'js/post_search.js', __FILE__ ) ), array( 'jquery' ) ); 
  wp_localize_script( 'nd_options_post_search_plugin', 'nd_options_my_vars_get_search_results', $nd_options_get_search_results_params ); 

  //default value for avoid error include
  if ($nd_options_layout == '') { $nd_options_layout = "layout-1"; }

  //include the layout selected
  include 'layout/'.$nd_options_layout.'.php';


  $str .='
 
  <script type="text/javascript">
    //<![CDATA[
    
    jQuery(document).ready(function() {

      //START counter
      jQuery(function ($) {
        
        $("#nd_options_autocomplete_search").on("click", function () { 
          $( "#nd_options_site_filter" ).addClass("nd_options_active");
          $( "#nd_options_autocomplete_search_result" ).css("display","block");
        });

        $( "#nd_options_site_filter" ).on( "click", function() {
          $( "#nd_options_site_filter" ).removeClass("nd_options_active");
          $( "#nd_options_autocomplete_search_result" ).css("display","none");
        });
        
        $("#nd_options_autocomplete_search").on("input",function(e){
            var nd_options_keyword = $( this ).val();
            var nd_options_category_slug = $("#nd_options_autocomplete_search_category_slug").val();
            nd_options_get_ajax_search_results(nd_options_keyword,nd_options_category_slug);
        });

      });
      //END counter

    });

    //]]>
  </script>

  ';

   return apply_filters('uds_shortcode_out_filter', $str);
}
//END





//vc
add_action( 'vc_before_init', 'nd_options_post_search' );
function nd_options_post_search() {


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
      "name" => __( "Post Search", "nd-shortcodes" ),
      "base" => "nd_options_post_search",
      'description' => __( 'Add Search Form Posts', 'nd-shortcodes' ),
      "icon" => esc_url(plugins_url('post-search.jpg', __FILE__ )),
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
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Search in Category/s Slug", "nd-shortcodes" ),
            "param_name" => "nd_options_category_slug",
            "description" => __( "Insert the slug of your category ( NB: you can use multiple slug divided by ',' eg: slug1,slug2,slug3 ), leave empty if you want to search in all site", "nd-shortcodes" )
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






//START nd_options_get_search_results_php_function for AJAX
function nd_options_get_search_results_php_function() {

  check_ajax_referer( 'nd_options_get_search_results_nonce', 'nd_options_get_search_results_security' );

  //recover datas
  $nd_options_keyword = sanitize_text_field($_GET['nd_options_keyword']);
  $nd_options_category_slug = sanitize_text_field($_GET['nd_options_category_slug']);
  
  // La Query
  $args = array(
    'posts_per_page' => 5,
    's' => ''.$nd_options_keyword.'',
    'category_name' => ''.$nd_options_category_slug.'',
  );

  $the_query = new WP_Query( $args );

  $nd_options_autocomplete_search_result = '';



    // Il Loop
    while ( $the_query->have_posts() ) :
      
      $the_query->the_post();


      //datas
      $nd_options_id = get_the_ID();
      $nd_options_title = get_the_title();
      $nd_options_excerpt = get_the_excerpt();
      $nd_options_permalink = get_permalink();

      //image
      $nd_options_image_id = get_post_thumbnail_id( $nd_options_id );
      $nd_options_image_attributes = wp_get_attachment_image_src( $nd_options_image_id, 'thumbnail' );
      if ( $nd_options_image_attributes[0] == '' ) { 
        $nd_options_output_image = ''; 
        $nd_options_output_image_class = ''; 
      }else{
        $nd_options_output_image = '<a href="'.$nd_options_permalink.'"><img class="nd_options_position_absolute nd_options_left_20" width="50" alt="" src="'.$nd_options_image_attributes[0].'"></a>';
        $nd_options_output_image_class = 'nd_options_padding_left_70'; 
      }

      //categories
      $categories = wp_get_post_categories(get_the_ID());
      $cats = '';
      foreach($categories as $category){
          $cats .= '<span class="nd_options_bg_white nd_options_float_left nd_options_color_grey nd_options_border_1_solid_grey nd_options_padding_4_8 nd_options_border_radius_15 nd_options_font_size_10 nd_options_margin_0_5">'.get_cat_name($category).'</span>';
      }


      $nd_options_autocomplete_search_result .= '

      <div class="nd_options_section nd_options_position_relative nd_options_text_align_left nd_options_border_top_1_solid_grey nd_options_padding_20 nd_options_box_sizing_border_box">
        
        '.$nd_options_output_image.'

        <div class="nd_options_section '.$nd_options_output_image_class.' nd_options_box_sizing_border_box">
          <h4 class="nd_options_margin_bottom_10 nd_options_float_left"><a class="nd_options_color_greydark nd_options_float_left nd_options_margin_right_10 nd_options_first_font" href="'.$nd_options_permalink.'">'.$nd_options_title.'</a>'.$cats.'</h4>
          <div class="nd_options_section">
            <p class="nd_options_font_size_14 nd_options_line_height_25 nd_options_font_weight_lighter"><a href="'.$nd_options_permalink.'">'.$nd_options_excerpt.'</a></p>
          </div>
        </div>
      </div>

      ';
    
    endwhile;
    //end loop


    if ( $nd_options_autocomplete_search_result != '' ) {

      $nd_options_autocomplete_search_result .= '
        <div class="nd_options_section nd_options_text_align_center">
          <input type="submit" value="'.__('VIEW MORE RESULTS','nd-shortcodes').'" id="nd_options_btn_view_more_results" class="nd_options_cursor_pointer nd_options_section nd_options_box_sizing_border_box">
        </div>
      ';

    } 


  

  echo $nd_options_autocomplete_search_result;

  // Ripristina Query & Post Data originali
  wp_reset_query();
  wp_reset_postdata();

        
  //close the function to avoid wordpress errors
  die();

}
add_action( 'wp_ajax_nd_options_get_search_results_php_function', 'nd_options_get_search_results_php_function' );
add_action( 'wp_ajax_nopriv_nd_options_get_search_results_php_function', 'nd_options_get_search_results_php_function' );
//END nd_options_get_search_results_php_function for AJAX