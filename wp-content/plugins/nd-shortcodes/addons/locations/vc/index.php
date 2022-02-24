<?php

/////////////////////////////////////////////////////////gmaps_markers/////////////////////////////////////////
add_shortcode('nd_options_gmaps_markers', 'nd_options_shortcode_gmaps_markers');
function nd_options_shortcode_gmaps_markers($atts, $content = null)
{  

   $atts = shortcode_atts(
      array(
         'nd_options_height' => '',
         'nd_options_layout' => '',
         'nd_options_color' => '',
         'nd_options_zoom' => '',
         'nd_options_image' => '',
         'nd_options_image_width' => '',
         'nd_options_position' => ''
      ), $atts);
      
   $nd_options_str = '';

  //directory
  $nd_options_theme_directory = esc_url( plugins_url('/',dirname(__FILE__)) );

  //get values
  $nd_options_height = $atts['nd_options_height']; if ( $nd_options_height == '' ) { $nd_options_height = '400'; }
  $nd_options_color = $atts['nd_options_color']; if ( $nd_options_color == '' ) { $nd_options_color = '#000'; }
  $nd_options_image = wp_get_attachment_image_src($atts['nd_options_image'],'large'); if ( $nd_options_image == '' ) { $nd_options_image[0] = $nd_options_theme_directory.'img/gmaps/marker.png'; }
  $nd_options_image_width = $atts['nd_options_image_width']; if ( $nd_options_image_width == '' ) { $nd_options_image_width = '45,45'; }
  $nd_options_layout = $atts['nd_options_layout']; if ( $nd_options_layout == '' ) { $nd_options_layout = 'layout-1'; }
  $nd_options_zoom = $atts['nd_options_zoom']; if ( $nd_options_zoom == '' ) { $nd_options_zoom = '14'; }
  $nd_options_position = $atts['nd_options_position']; if ( $nd_options_position == '' ) { $nd_options_position = '40.726164, -73.993886'; }

  //get settings values
  $nd_options_locations_googlemaps_key = get_option('nd_options_locations_googlemaps_key');


  //check if the server is https
  if ( is_ssl() ) {
    $nd_options_protocol = 'https';
  }else {
    $nd_options_protocol = 'http';  
  }


  //build result
  $nd_options_str .= '

    <!--START ALL JAVASCRIPT INCLUSION-->
    
    <!--first-->
    <script src="'.$nd_options_protocol.'://maps.googleapis.com/maps/api/js?key='.$nd_options_locations_googlemaps_key.'&sensor=false"></script>
          
    <!--START all datas-->
    <script type="text/javascript">      
    
      <!--pass images-->
      var theme_directory = "'.$nd_options_theme_directory.'";
      var nd_options_layout = "'.$nd_options_layout.'";
      var markerImage = new google.maps.MarkerImage("'.$nd_options_image[0].'", null, null, null, new google.maps.Size('.$nd_options_image_width.'));

      var data = {
       "photos": [

    ';

    //prepare query
    $nd_options_args = array('post_type' => 'locations','orderby' => 'name','order' => 'ASC','posts_per_page' => -1);
    $nd_options_the_query = new WP_Query( $nd_options_args ); 
        
    //START loop
    while ( $nd_options_the_query->have_posts() ) : $nd_options_the_query->the_post();

      //image
      $nd_options_post_id = get_the_ID();
      $nd_options_attachment_id = get_post_thumbnail_id( $nd_options_post_id );
      $nd_options_image_attributes = wp_get_attachment_image_src( $nd_options_attachment_id, 'nd_options_location_image_376_308' );

      //coordinates
      $nd_options_locations_coordinates = get_post_meta( get_the_ID(), 'nd_options_meta_box_location_coordinates', true );
      $nd_options_locations_coordinates_ll = explode(",", $nd_options_locations_coordinates);
      if ($nd_options_locations_coordinates == '') {
        $nd_options_locations_coordinates_ll[0]  = '-37.854861';
        $nd_options_locations_coordinates_ll[1]  = '145.126308';
      }

      //datas
      $nd_options_locations_title = get_post_meta( get_the_ID(), 'nd_options_meta_box_location_title', true );
      $nd_options_locations_subtitle = get_post_meta( get_the_ID(), 'nd_options_meta_box_location_sub_title', true );
      $nd_options_locations_description = get_post_meta( get_the_ID(), 'nd_options_meta_box_location_description', true );

      $nd_options_str .= '{"photo_id": '.$nd_options_post_id.', "photo_title": "'.get_the_title().'", "locations_title": "'.$nd_options_locations_title.'", "locations_subtitle": "'.$nd_options_locations_subtitle.'", "locations_description": "'.$nd_options_locations_description.'", "photo_url": "'.$nd_options_image_attributes[0].'", "latitude": '.$nd_options_locations_coordinates_ll[0].', "longitude": '.$nd_options_locations_coordinates_ll[1].', "width": 500, "height": 375 },';
      
    endwhile;
    //END loop
     

    //get qnt results
    $nd_options_qnt_results_posts = $nd_options_the_query->found_posts;

    
    $nd_options_str .= ']}

    var MY_MAPTYPE_ID = "custom_style";
    var nd_options_center_map = new google.maps.LatLng('.$nd_options_position.');
    var nd_options_zoom = '.$nd_options_zoom.';

    var options = {
      "zoom": nd_options_zoom,
      "center": nd_options_center_map,
      "mapTypeId": MY_MAPTYPE_ID,

      mapTypeControl: false,

      disableDefaultUI: true,
      scrollwheel: false

    };
    </script>
    <!--END all datas-->

    <!--plugin-->
    <script src="'.$nd_options_theme_directory.'js/markerclusterer.js" type="text/javascript"></script>
    
    <!--Settings-->
    <script type="text/javascript" src="'.$nd_options_theme_directory.'js/speed_test.js"></script>
    
    <!--call the function settings-->
    <script type="text/javascript">      
      google.maps.event.addDomListener(window, "load", speedTest.init);
    </script>

    <!--END ALL JAVASCRIPT INCLUSION-->


    <!--ALL HTML CODE-->
    <div class="nd_options_display_none"><input type="checkbox" checked="checked" id="usegmm"/><select id="nummarkers"><option value="'.$nd_options_qnt_results_posts.'" selected="selected">'.$nd_options_qnt_results_posts.'</option></select><span>Time used: <span id="timetaken"></span> ms</span></div>
    <div class="nd_options_display_none" id="markerlist"></div>

    <div class="nd_options_section">
      
      <div class="nd_options_section">
        
        <!--buttons-->
        <div class="nd_options_background_repeat_no_repeat nd_options_background_position_center nd_options_background_size_15" style="background-color:'.$nd_options_color.'; background-image:url('.$nd_options_theme_directory.'/img/icons/icon-add-white.png);" id="nd_options_gmaps_plus"></div>
        <div class="nd_options_background_repeat_no_repeat nd_options_background_position_center nd_options_background_size_15" style="background-color:'.$nd_options_color.'; background-image:url('.$nd_options_theme_directory.'/img/icons/icon-less-white.png);" id="nd_options_gmaps_minus"></div>
        
        <!--map-->
        <div class="nd_options_section" style="height:'.$nd_options_height.'px;" id="map"></div>
      
      </div>
              
    </div>
    <!--END HTML CODE-->';


  //include the layout selected
  include 'layout/'.$nd_options_layout.'.php';

  return apply_filters('uds_shortcode_out_filter', $nd_options_str);
}




//vc
add_action( 'vc_before_init', 'nd_options_gmaps_markers' );
function nd_options_gmaps_markers() {


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
      "name" => __( "Gmaps Markers", "nd-shortcodes" ),
      "base" => "nd_options_gmaps_markers",
      'description' => __( 'Add gmaps markers', 'nd-shortcodes' ),
      'show_settings_on_create' => true,
      "icon" => esc_url(plugins_url('gmaps-markers.jpg', __FILE__ )),
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
            "heading" => __( "Height", "nd-shortcodes" ),
            "param_name" => "nd_options_height",
            'admin_label' => true,
            "description" => __( "Insert the map height", "nd-shortcodes" )
         ),
        array(
          "type" => "textfield",
          "class" => "",
          "heading" => __( "Zoom Map", "nd-shortcodes" ),
          "param_name" => "nd_options_zoom",
          "description" => __( "Insert a different zoom of the map ( Ex: from 0 to 14 )", "nd-shortcodes" )
       ),
        array(
          "type" => "textfield",
          "class" => "",
          "heading" => __( "Center Map", "nd-shortcodes" ),
          "param_name" => "nd_options_position",
          "description" => __( "Insert a different center position coordinates of the map ( Ex: 34.263079, 16.993682 )", "nd-shortcodes" )
       ),
        array(
            'type' => 'attach_image',
            'heading' => __( 'Pointer', 'nd-shortcodes' ),
            'param_name' => 'nd_options_image',
            'description' => __( 'Select image from media library for pointer locations (pin).', 'nd-shortcodes' )
         ),
        array(
          "type" => "textfield",
          "class" => "",
          "heading" => __( "Pointer Size", "nd-shortcodes" ),
          "param_name" => "nd_options_image_width",
          "description" => __( "Insert pointer size ( Ex: 45,45 )", "nd-shortcodes" )
       ),
        array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Color", "nd-shortcodes" ),
            "param_name" => "nd_options_color",
            "description" => __( "Choose color", "nd-shortcodes" )
        )

      )
   ) );
}
//end shortcode