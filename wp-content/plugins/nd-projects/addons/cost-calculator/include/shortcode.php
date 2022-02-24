<?php

//shortcode
function nd_cc_cost_calculator_shortcode( $nd_cc_atts ) {


    wp_enqueue_script('jquery-ui-slider');
      
    $nd_cc_cc_att = shortcode_atts( 
      array(
          'id' => '',
      ), 
    $nd_cc_atts );

    $nd_cc_str = '';

    $nd_cc_post_id = $nd_cc_cc_att['id'];

    //get limit datas
    $nd_cc_max_sections = get_post_meta( $nd_cc_post_id, 'nd_cc_meta_box_cc_section_number', true );
    if ( $nd_cc_max_sections == '' ) { $nd_cc_max_sections = 2; }

    $nd_cc_max_sub_sections = get_post_meta( $nd_cc_post_id, 'nd_cc_meta_box_cc_subsection_number', true );
    if ( $nd_cc_max_sub_sections == '' ) { $nd_cc_max_sub_sections = 3; }

    $nd_cc_max_repeater_options = get_post_meta( $nd_cc_post_id, 'nd_cc_meta_box_cc_repeater_number', true );
    if ( $nd_cc_max_repeater_options == '' ) { $nd_cc_max_repeater_options = 4; }

    $nd_cc_sub_section_options = 4;


    $nd_cc_meta_box_cc_price_price = get_post_meta( $nd_cc_post_id, 'nd_cc_meta_box_cc_price_price', true );
    if ( $nd_cc_meta_box_cc_price_price == '' ) { $nd_cc_meta_box_cc_price_price = 0; }

    $nd_cc_meta_box_cc_color = get_post_meta( $nd_cc_post_id, 'nd_cc_meta_box_cc_color', true );
    if ( $nd_cc_meta_box_cc_color == '' ) { $nd_cc_meta_box_cc_color = '#000'; }

    //START Layout
    $nd_cc_meta_box_cc_layout = get_post_meta( $nd_cc_post_id, 'nd_cc_meta_box_cc_layout', true );
    if ( $nd_cc_meta_box_cc_layout == '' ){ $nd_cc_meta_box_cc_layout = 1; } 
    $nd_cc_layout_selected = dirname( __FILE__ ).'/styles/layout-'.$nd_cc_meta_box_cc_layout.'.php';
    $nd_cc_layout_selected = realpath($nd_cc_layout_selected);
    include $nd_cc_layout_selected;
    //END Layout

    $nd_cc_str .= '
    <div id="nd_cc_cc_'.$nd_cc_post_id.'" class="nd_cc_section">

    <script>
    function nd_cc_get_total_price(nd_cc_cc_id,nd_cc_cc_min_price){

      var nd_cc_cc_id = nd_cc_cc_id;
      var nd_cc_cc_min_price = nd_cc_cc_min_price;

      jQuery("#nd_cc_cc_"+nd_cc_cc_id+" .nd_cc_cc_total_price").empty();

      var map = {};
      jQuery(".nd_cc_cc_"+nd_cc_cc_id+"_value_price").each(function() {
          map[jQuery(this).attr("name")] = jQuery(this).val();
      });

      var nd_cc_total_price = nd_cc_cc_min_price;
      jQuery.each(map, function(key, value){

          nd_cc_total_price = nd_cc_total_price + parseInt(value);
      })
      
      jQuery("#nd_cc_cc_"+nd_cc_cc_id+" .nd_cc_cc_total_price").append(nd_cc_total_price);

    }
    </script>
    ';


    //START SECTION WHILE
    $nd_cc_section_i = 1; 
    while ( $nd_cc_section_i <= $nd_cc_max_sections ) {
      
      //section fields
      $nd_cc_section_var_name = "nd_cc_section_name_".$nd_cc_section_i;
      $nd_cc_section_name = get_post_meta( $nd_cc_post_id, $nd_cc_section_var_name, true );
      if ( $nd_cc_section_name != '' ) {
        $nd_cc_section_name_content = '<h3 class="nd_cc_section_name">'.$nd_cc_section_name.'</h3>';
      }else{
        $nd_cc_section_name_content = '';
      }

      $nd_cc_section_var_descr = "nd_cc_section_descr_".$nd_cc_section_i;
      $nd_cc_section_descr = get_post_meta( $nd_cc_post_id, $nd_cc_section_var_descr, true );
      if ( $nd_cc_section_descr != '' ) {
        $nd_cc_section_descr_content = '<p class="nd_cc_section_description">'.$nd_cc_section_descr.'</p>';
      }else{
        $nd_cc_section_descr_content = '';
      }

      $nd_cc_section_var_width = "nd_cc_section_width_".$nd_cc_section_i;
      $nd_cc_section_width = get_post_meta( $nd_cc_post_id, $nd_cc_section_var_width, true );
      if ( $nd_cc_section_width == '' ) { $nd_cc_section_width = 100; }

      
      if ( nd_cc_is_section_used($nd_cc_section_i,$nd_cc_max_sub_sections,$nd_cc_post_id) == 1 ) {
      

        $nd_cc_str .= '
        <div id="nd_cc_section_'.$nd_cc_section_i.'" style="width:'.$nd_cc_section_width.'%;" class="nd_cc_section_cc">

          '.$nd_cc_section_name_content.'
          '.$nd_cc_section_descr_content.'

        ';


        $nd_cc_sub_section_i = 1; 
        while ( $nd_cc_sub_section_i <= $nd_cc_max_sub_sections ) {

          $nd_cc_sub_section_option_active = "nd_cc_sub_section_active_".$nd_cc_section_i."_".$nd_cc_sub_section_i;
          $nd_cc_section_active = get_post_meta( $nd_cc_post_id, $nd_cc_sub_section_option_active, true );

          if ( nd_cc_is_sub_section_used($nd_cc_section_i,$nd_cc_sub_section_i,$nd_cc_section_active,$nd_cc_post_id) == 1 ) {


            $nd_cc_sub_section_var_name = "nd_cc_sub_section_name_".$nd_cc_section_i."_".$nd_cc_sub_section_i;
            $nd_cc_sub_section_name = get_post_meta( $nd_cc_post_id, $nd_cc_sub_section_var_name, true );
            if ( $nd_cc_sub_section_name != '' ) {
              $nd_cc_sub_section_name_content = '<p class="nd_options_color_greydark nd_cc_sub_section_name">'.$nd_cc_sub_section_name.'</p>';
            }else{
              $nd_cc_sub_section_name_content = '';
            }

            $nd_cc_sub_section_var_width = 'nd_cc_sub_section_width_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'';
            $nd_cc_sub_section_width = get_post_meta( $nd_cc_post_id, $nd_cc_sub_section_var_width, true );
            if ( $nd_cc_sub_section_width == '' ) { $nd_cc_sub_section_width = 100; }


            $nd_cc_str .= '
            <div id="nd_cc_sub_section_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'" class="nd_cc_sub_section_cc nd_cc_width_100_percentage_important_responsive " style="width:'.$nd_cc_sub_section_width.'%;">

              '.$nd_cc_sub_section_name_content.'

            ';


            //START SLIDER OPTION
            if( $nd_cc_section_active == 0 ){

              $nd_cc_sub_section_var_slide_min = "nd_cc_sub_section_slide_min_".$nd_cc_section_i."_".$nd_cc_sub_section_i;
              $nd_cc_sub_section_slide_min = get_post_meta( $nd_cc_post_id, $nd_cc_sub_section_var_slide_min, true );

              $nd_cc_sub_section_var_slide_max = "nd_cc_sub_section_slide_max_".$nd_cc_section_i."_".$nd_cc_sub_section_i;
              $nd_cc_sub_section_slide_max = get_post_meta( $nd_cc_post_id, $nd_cc_sub_section_var_slide_max, true );

              $nd_cc_sub_section_var_slide_default = "nd_cc_sub_section_slide_default_".$nd_cc_section_i."_".$nd_cc_sub_section_i;
              $nd_cc_sub_section_slide_default = get_post_meta( $nd_cc_post_id, $nd_cc_sub_section_var_slide_default, true );

              $nd_cc_str .= '
              <script>
              jQuery( function() {
                var handle = jQuery( "#nd_cc_cc_'.$nd_cc_post_id.' #nd_cc_custom_handle_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'" );
                jQuery( "#nd_cc_cc_'.$nd_cc_post_id.' #nd_cc_slider_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'" ).slider({
                  min: '.$nd_cc_sub_section_slide_min.',
                  max: '.$nd_cc_sub_section_slide_max.',
                  value: '.$nd_cc_sub_section_slide_default.',
                  create: function() {
                    handle.text( jQuery( this ).slider( "value" ) );
                    nd_cc_get_total_price('.$nd_cc_post_id.','.$nd_cc_meta_box_cc_price_price.');
                  },
                  slide: function( event, ui ) {
                    handle.text( ui.value );
                    var nd_cc_default_slider_price = '.get_post_meta( $nd_cc_post_id, 'nd_cc_sub_section_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_'.$nd_cc_section_active, true ).'*ui.value;
                    jQuery(".nd_cc_current_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'").val(nd_cc_default_slider_price);
                    nd_cc_get_total_price('.$nd_cc_post_id.','.$nd_cc_meta_box_cc_price_price.');  
                  }
                });
              } );
              </script>


              <div class="nd_cc_slider_'.$nd_cc_post_id.'" id="nd_cc_slider_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'">
                <div id="nd_cc_custom_handle_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'" class="ui-slider-handle  nd_cc_slider_handle_'.$nd_cc_post_id.' "></div>';


                $nd_cc_default_slider_price = get_post_meta( $nd_cc_post_id, 'nd_cc_sub_section_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_'.$nd_cc_section_active, true )*$nd_cc_sub_section_slide_default;
                $nd_cc_str .= '
                <input class=" nd_cc_cc_'.$nd_cc_post_id.'_value_price nd_cc_current_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'" name="nd_cc_current_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'" type="hidden" readonly value="'.$nd_cc_default_slider_price.'">
              </div>




              ';  
            }
            //END SLIDER OPTION


            //START SWITCH OPTION
            if( $nd_cc_section_active == 1 ){

              $nd_cc_sub_section_var_switch_on = "nd_cc_sub_section_switch_on_".$nd_cc_section_i."_".$nd_cc_sub_section_i;
              $nd_cc_sub_section_switch_on = get_post_meta( $nd_cc_post_id, $nd_cc_sub_section_var_switch_on, true );

              $nd_cc_sub_section_var_switch_off = "nd_cc_sub_section_switch_off_".$nd_cc_section_i."_".$nd_cc_sub_section_i;
              $nd_cc_sub_section_switch_off = get_post_meta( $nd_cc_post_id, $nd_cc_sub_section_var_switch_off, true );

              $nd_cc_str .= '

                <script>
                jQuery( function() {
                
                  jQuery( "#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_switch_content_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.' .nd_cc_switch_on" ).click(function() {

                    var nd_cc_switch_enable = jQuery( "#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_switch_content_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.' .nd_cc_switch_on " ).hasClass( "nd_cc_switch_active" );
                    
                    jQuery( "#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_switch_content_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.' .nd_cc_switch_off" ).removeClass( "nd_cc_switch_active" );
                    jQuery( "#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_switch_content_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.' .nd_cc_switch_on" ).addClass( "nd_cc_switch_active" );

                    jQuery( "#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_switch_content_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'" ).addClass( "nd_cc_switch_content_active" );

                    if( nd_cc_switch_enable == false ){
                      jQuery( "#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_current_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'" ).val('.get_post_meta( $nd_cc_post_id, 'nd_cc_sub_section_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_'.$nd_cc_section_active, true ).');
                      nd_cc_get_total_price('.$nd_cc_post_id.','.$nd_cc_meta_box_cc_price_price.');  
                    }

                  });

                  jQuery( "#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_switch_content_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.' .nd_cc_switch_off" ).click(function() {
                    
                    var nd_cc_switch_enable = jQuery( "#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_switch_content_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.' .nd_cc_switch_off " ).hasClass( "nd_cc_switch_active" );

                    jQuery( "#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_switch_content_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.' .nd_cc_switch_on" ).removeClass( "nd_cc_switch_active" );
                    jQuery( "#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_switch_content_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.' .nd_cc_switch_off" ).addClass( "nd_cc_switch_active" );

                    jQuery( "#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_switch_content_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'" ).removeClass( "nd_cc_switch_content_active" );

                    if( nd_cc_switch_enable == false ){
                      jQuery( "#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_current_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'" ).val(0); 
                      nd_cc_get_total_price('.$nd_cc_post_id.','.$nd_cc_meta_box_cc_price_price.');   
                    }

                  });
                  
                } );
                </script>

         
                <div class="nd_cc_switch_content_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.' nd_cc_switch_content_'.$nd_cc_post_id.' ">

                  <div class="nd_cc_switch_off nd_cc_switch_active nd_cc_width_50_percentage nd_cc_float_left">
                    <p class="">'.$nd_cc_sub_section_switch_off.'</p>
                  </div>
                  <div class="nd_cc_switch_on nd_cc_width_50_percentage nd_cc_float_left">
                    <p>'.$nd_cc_sub_section_switch_on.'</p>
                  </div>

                  <input class=" nd_cc_cc_'.$nd_cc_post_id.'_value_price nd_cc_current_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'" name="nd_cc_current_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'" type="hidden" readonly value="0">
                  
                </div>

              ';  
            }
            //END SWITCH OPTION






            //START TAG OPTION
            if( $nd_cc_section_active == 2 ){

              $nd_cc_sub_section_var_tag_type = "nd_cc_sub_section_tag_type_".$nd_cc_section_i."_".$nd_cc_sub_section_i."";
              $nd_cc_sub_section_tag_type = get_post_meta( $nd_cc_post_id, $nd_cc_sub_section_var_tag_type, true );


              if ( $nd_cc_sub_section_tag_type == 0 ) {

                $nd_cc_str .= '
                <script>
                jQuery( function() {
                  
                  jQuery( "#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_tag_content_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.' .nd_cc_tag_default" ).click(function() {
                    
                    jQuery("#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_tag_content_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.' .nd_cc_tag_default").removeClass( "nd_cc_tag_active" );
                    jQuery(this).addClass( "nd_cc_tag_active" );

                    var nd_cc_tag_one_price = jQuery(this).attr("data-price");
                    jQuery("#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_current_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'").val(nd_cc_tag_one_price);

                    nd_cc_get_total_price('.$nd_cc_post_id.','.$nd_cc_meta_box_cc_price_price.');

                  });
                  
                } );
                </script>';

              }else{


                $nd_cc_str .= '
                <script>
                jQuery( function() {
                  
                  jQuery( "#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_tag_content_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.' .nd_cc_tag_default" ).click(function() {

                    var nd_cc_current_tag_price = jQuery("#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_current_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'").val();
                    var nd_cc_tag_multi_price = jQuery(this).attr("data-price");
                    
                    if ( jQuery(this).hasClass( "nd_cc_tag_active" ) ) {
                      jQuery(this).removeClass( "nd_cc_tag_active" );
                      var nd_cc_final_tag_price = parseInt(nd_cc_current_tag_price) - parseInt(nd_cc_tag_multi_price);
                    }else{
                      jQuery(this).addClass( "nd_cc_tag_active" );  
                      var nd_cc_final_tag_price = parseInt(nd_cc_current_tag_price) + parseInt(nd_cc_tag_multi_price);
                    }

                    jQuery("#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_current_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'").val(nd_cc_final_tag_price);

                    nd_cc_get_total_price('.$nd_cc_post_id.','.$nd_cc_meta_box_cc_price_price.');

                  });

                } );
                </script>';

              }

              

              $nd_cc_str .= '
              <div class="nd_cc_tag_content_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'">';

              $nd_cc_tag_i = 1; 
              while ( $nd_cc_tag_i <= $nd_cc_max_repeater_options ) {

                $nd_cc_sub_section_var_name_tag = "nd_cc_sub_section_name_tag_".$nd_cc_section_i."_".$nd_cc_sub_section_i."_2_".$nd_cc_tag_i."";
                $nd_cc_sub_section_name_tag = get_post_meta( $nd_cc_post_id, $nd_cc_sub_section_var_name_tag, true );

                //price
                if ( $nd_cc_tag_i == 1 ) {
                  $nd_cc_sub_section_var_price_tag = "nd_cc_sub_section_price_".$nd_cc_section_i."_".$nd_cc_sub_section_i."_2";
                }else{
                  $nd_cc_sub_section_var_price_tag = "nd_cc_sub_section_price_".$nd_cc_section_i."_".$nd_cc_sub_section_i."_2_".$nd_cc_tag_i."";
                }
                $nd_cc_sub_section_price_tag = get_post_meta( $nd_cc_post_id, $nd_cc_sub_section_var_price_tag, true );
                if ( $nd_cc_sub_section_price_tag == '' ) { $nd_cc_sub_section_price_tag = 0; }
                //end price

                if ( $nd_cc_sub_section_name_tag != '' ) {
                  $nd_cc_str .= '<a data-price="'.$nd_cc_sub_section_price_tag.'" class="nd_cc_tag_default">'.$nd_cc_sub_section_name_tag.' <span class="nd_cc_tag_price">'.$nd_cc_sub_section_price_tag.'</span></a>'; 
                }

                $nd_cc_tag_i++;
              }

              $nd_cc_str .= '

             <input class=" nd_cc_cc_'.$nd_cc_post_id.'_value_price nd_cc_current_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'" name="nd_cc_current_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'" type="hidden" readonly value="0">

              </div>';

               
            }
            //END TAG OPTION






            //START SELECT OPTION
            if( $nd_cc_section_active == 3 ){

              $nd_cc_str .= '
              <script>
              jQuery( function() {
                
                jQuery( "#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_select_content_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.' .nd_cc_select_sub_menu li " ).click(function() {
                    
                  jQuery("#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_select_content_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.' .nd_cc_select_ul li").removeClass( "nd_cc_select_active" );
                  var nd_cc_select_data_position_first = jQuery(this).attr("data-position");
                  var nd_cc_select_data_position = parseInt(nd_cc_select_data_position_first) + 1;
                  jQuery("#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_select_content_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.' .nd_cc_select_ul > li:nth-child("+nd_cc_select_data_position+")").addClass( "nd_cc_select_active" );

                  jQuery("#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_select_content_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.' .nd_cc_select_sub_menu").removeClass( "nd_cc_display_block_important" );


                  var nd_cc_select_price = jQuery(this).attr("data-price");
                  jQuery("#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_current_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'").val(nd_cc_select_price);
                  nd_cc_get_total_price('.$nd_cc_post_id.','.$nd_cc_meta_box_cc_price_price.');


                });

                jQuery( "#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_select_content_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.' .nd_cc_select_ul li.nd_cc_select_active" ).click(function() {
                  jQuery("#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_select_content_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.' .nd_cc_select_sub_menu").addClass( "nd_cc_display_block_important" );       
                });

                jQuery( "#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_select_content_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.' .nd_cc_select_ul" )
                  .mouseenter(function() {
                    jQuery("#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_select_content_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.' .nd_cc_select_sub_menu").addClass( "nd_cc_display_block_important" ); 
                  })
                  .mouseleave(function() {
                    jQuery("#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_select_content_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.' .nd_cc_select_sub_menu").removeClass( "nd_cc_display_block_important" );  
                  });

                } );
              </script>
              ';
              

              $nd_cc_str .= '
              <div class="nd_cc_select_content_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'">
                <ul class="nd_cc_select_ul">

                  <li class="nd_cc_select_active">
                    <img class="nd_cc_select_arrow" src="'.esc_url(plugins_url('down-arrow.png', __FILE__ )).'">
                    <p>'.__('Select Option', 'nd-projects').'</p>
                  </li>';


                  $nd_cc_select_i = 1; 
                  while ( $nd_cc_select_i <= $nd_cc_max_repeater_options ) {

                    $nd_cc_sub_section_var_name_select = "nd_cc_sub_section_name_select_".$nd_cc_section_i."_".$nd_cc_sub_section_i."_3_".$nd_cc_select_i."";
                    $nd_cc_sub_section_name_select = get_post_meta( $nd_cc_post_id, $nd_cc_sub_section_var_name_select, true );

                    $nd_cc_sub_section_var_descr_select = "nd_cc_sub_section_descr_select_".$nd_cc_section_i."_".$nd_cc_sub_section_i."_3_".$nd_cc_select_i."";
                    $nd_cc_sub_section_descr_select = get_post_meta( $nd_cc_post_id, $nd_cc_sub_section_var_descr_select, true );

                    $nd_cc_sub_section_var_icon_select = "nd_cc_sub_section_icon_select_".$nd_cc_section_i."_".$nd_cc_sub_section_i."_3_".$nd_cc_select_i."";
                    $nd_cc_sub_section_icon_select = get_post_meta( $nd_cc_post_id, $nd_cc_sub_section_var_icon_select, true );
                    if ( $nd_cc_sub_section_icon_select != '' ){
                      $nd_cc_icon_content = '<img class="nd_cc_select_li_icon" src="'.$nd_cc_sub_section_icon_select.'">';
                      $nd_cc_icon_class = 'nd_cc_padding_left_60';
                    }else{
                      $nd_cc_icon_content = '';
                      $nd_cc_icon_class = '';  
                    }

                    if ( $nd_cc_sub_section_name_select != '' ) {
                      

                        $nd_cc_str .= '
                      <li class="">
                      '.$nd_cc_icon_content.'
                      <div class="'.$nd_cc_icon_class.'">
                        <p class="nd_options_color_greydark nd_cc_select_name">'.$nd_cc_sub_section_name_select.'</p>
                        <h5 class="nd_options_color_grey">'.$nd_cc_sub_section_descr_select.'</h5>
                      </div>
                      </li>'; 

                      
                    }

                    $nd_cc_select_i++;
                  }

                  $nd_cc_str .= '
                  <ul class="nd_cc_select_sub_menu">
                    <li data-position="0" data-price="0" class="">
                      <p>'.__('Select Option', 'nd-projects').'</p>
                    </li>';

                  $nd_cc_select_i = 1; 
                  while ( $nd_cc_select_i <= $nd_cc_max_repeater_options ) {

                    $nd_cc_sub_section_var_name_select = "nd_cc_sub_section_name_select_".$nd_cc_section_i."_".$nd_cc_sub_section_i."_3_".$nd_cc_select_i."";
                    $nd_cc_sub_section_name_select = get_post_meta( $nd_cc_post_id, $nd_cc_sub_section_var_name_select, true );

                    $nd_cc_sub_section_var_descr_select = "nd_cc_sub_section_descr_select_".$nd_cc_section_i."_".$nd_cc_sub_section_i."_3_".$nd_cc_select_i."";
                    $nd_cc_sub_section_descr_select = get_post_meta( $nd_cc_post_id, $nd_cc_sub_section_var_descr_select, true );

                    //price
                    if ( $nd_cc_select_i == 1 ) {
                      $nd_cc_sub_section_var_price_select = "nd_cc_sub_section_price_".$nd_cc_section_i."_".$nd_cc_sub_section_i."_3";
                    }else{
                      $nd_cc_sub_section_var_price_select = "nd_cc_sub_section_price_".$nd_cc_section_i."_".$nd_cc_sub_section_i."_3_".$nd_cc_select_i."";
                    }
                    $nd_cc_sub_section_price_select = get_post_meta( $nd_cc_post_id, $nd_cc_sub_section_var_price_select, true );
                    if ( $nd_cc_sub_section_price_select == '' ) { $nd_cc_sub_section_price_select = 0; }
                    //price

                    $nd_cc_sub_section_var_icon_select = "nd_cc_sub_section_icon_select_".$nd_cc_section_i."_".$nd_cc_sub_section_i."_3_".$nd_cc_select_i."";
                    $nd_cc_sub_section_icon_select = get_post_meta( $nd_cc_post_id, $nd_cc_sub_section_var_icon_select, true );
                    if ( $nd_cc_sub_section_icon_select != '' ){
                      $nd_cc_icon_content = '<img class="nd_cc_select_li_icon" src="'.$nd_cc_sub_section_icon_select.'">';
                      $nd_cc_icon_class = 'nd_cc_padding_left_60';
                    }else{
                      $nd_cc_icon_content = '';
                      $nd_cc_icon_class = '';  
                    }

                    if ( $nd_cc_sub_section_name_select != '' ) {
                      $nd_cc_str .= '
                      <li data-price="'.$nd_cc_sub_section_price_select.'" data-position="'.$nd_cc_select_i.'" class="">
                      '.$nd_cc_icon_content.'
                      <div class="'.$nd_cc_icon_class.'">
                        <p class="nd_options_color_greydark nd_cc_select_name">'.$nd_cc_sub_section_name_select.' <span class="nd_cc_select_price">'.$nd_cc_sub_section_price_select.'</span></p>
                        <h5 class="nd_options_color_grey">'.$nd_cc_sub_section_descr_select.'</h5>
                      </div>
                      </li>'; 
                    }

                    $nd_cc_select_i++;
                  }

              $nd_cc_str .= '
                  </ul>
                </ul>


                <input class=" nd_cc_cc_'.$nd_cc_post_id.'_value_price nd_cc_current_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'" name="nd_cc_current_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'" type="hidden" readonly value="0">


              </div>';

               
            }
            //END SELECT OPTION




            //get datas
            $nd_cc_price = get_post_meta( $nd_cc_post_id, 'nd_cc_sub_section_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_'.$nd_cc_section_active, true );


            $nd_cc_str .= '
            </div>
            ';
            
          }

          $nd_cc_sub_section_i++; 

        }


        $nd_cc_str .= '
        </div>
        ';

        
      }


      $nd_cc_section_i++; 


    }

    $nd_cc_meta_box_cc_price_currency = get_post_meta( $nd_cc_post_id, 'nd_cc_meta_box_cc_price_currency', true );
    if ( $nd_cc_meta_box_cc_price_currency == '' ) { $nd_cc_meta_box_cc_price_currency = ''; }

    $nd_cc_meta_box_cc_price_title = get_post_meta( $nd_cc_post_id, 'nd_cc_meta_box_cc_price_title', true );
    if ( $nd_cc_meta_box_cc_price_title == '' ) { $nd_cc_meta_box_cc_price_title = ''; }

    $nd_cc_meta_box_cc_price_descr = get_post_meta( $nd_cc_post_id, 'nd_cc_meta_box_cc_price_descr', true );
    if ( $nd_cc_meta_box_cc_price_descr == '' ) { $nd_cc_meta_box_cc_price_descr = ''; }

    $nd_cc_meta_box_cc_price_icon = get_post_meta( $nd_cc_post_id, 'nd_cc_meta_box_cc_price_icon', true );
    if ( $nd_cc_meta_box_cc_price_icon == '' ) { $nd_cc_meta_box_cc_price_icon_content = ''; }else{
      $nd_cc_meta_box_cc_price_icon_content = '

      <img class="nd_cc_cc_icon_price nd_cc_display_none_responsive" src="'.$nd_cc_meta_box_cc_price_icon.'">

      ';
    }


    $nd_cc_str .= '
    <div id="nd_cc_section_price_'.$nd_cc_post_id.'" class="nd_cc_section_price nd_cc_text_align_left_important_responsive ">

      <h1>
        <span>'.$nd_cc_meta_box_cc_price_currency.' </span>
        <span class="nd_cc_cc_total_price">0</span>
      </h1>

      <h3>'.$nd_cc_meta_box_cc_price_title.'</h3>
      <p>'.$nd_cc_meta_box_cc_price_descr.'</p>

      '.$nd_cc_meta_box_cc_price_icon_content.'

    </div>'; 


    $nd_cc_str .= '
    </div>
    ';


    return $nd_cc_str;
}
add_shortcode( 'nd_cost_calculator', 'nd_cc_cost_calculator_shortcode' );