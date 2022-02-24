<?php


add_action('admin_menu','nd_options_add_settings_menu_import_demo');
function nd_options_add_settings_menu_import_demo(){

  add_submenu_page( 'nd-shortcodes-settings','Import Demo', __('Import Demo','nd-shortcodes'), 'manage_options', 'nd-shortcodes-settings-import-demo', 'nd_options_settings_menu_import_demo' );

}




function nd_options_settings_menu_import_demo() {

  $nd_options_import_demo_params = array(
      'nd_options_ajaxurl_import_demo' => admin_url('admin-ajax.php'),
      'nd_options_ajaxnonce_import_demo' => wp_create_nonce('nd_options_import_demo_nonce'),
  );

  wp_enqueue_script( 'nd_options_import_demo', esc_url( plugins_url( 'js/nd_options_import_demo.js', __FILE__ ) ), array( 'jquery' ) ); 
  wp_localize_script( 'nd_options_import_demo', 'nd_options_my_vars_import_demo', $nd_options_import_demo_params ); 

?>

  
  <div class="nd_options_section nd_options_padding_right_20 nd_options_padding_left_2 nd_options_box_sizing_border_box nd_options_margin_top_25 ">

    

    <div style="background-color:<?php echo nd_options_get_profile_bg_color(0); ?>; border-bottom:3px solid <?php echo nd_options_get_profile_bg_color(2); ?>;" class="nd_options_section nd_options_padding_20  nd_options_box_sizing_border_box">
      <h2 class="nd_options_color_ffffff nd_options_display_inline_block"><?php _e('ND Shortcodes','nd-shortcodes'); ?></h2><span class="nd_options_margin_left_10 nd_options_color_a0a5aa"><?php echo nd_options_get_plugin_version(); ?></span>
    </div>

    

    <div class="nd_options_section  nd_options_box_shadow_0_1_1_000_04 nd_options_background_color_ffffff nd_options_border_1_solid_e5e5e5 nd_options_border_top_width_0 nd_options_border_left_width_0 nd_options_overflow_hidden nd_options_position_relative">
    
      
      <!--START menu-->
      <div style="background-color:<?php echo nd_options_get_profile_bg_color(1); ?>;" class="nd_options_width_20_percentage nd_options_float_left nd_options_box_sizing_border_box nd_options_min_height_3000 nd_options_position_absolute">

        <ul class="nd_options_navigation">
          <li><a class="" href="<?php echo admin_url('admin.php?page=nd-shortcodes-settings'); ?>"><?php _e('Plugin Settings','nd-shortcodes'); ?></a></li>
          <li><a class="" href="<?php echo admin_url('customize.php'); ?>"><?php _e('Theme Options','nd-shortcodes'); ?></a></li>
          <li><a class="" href="<?php echo admin_url('admin.php?page=nd-shortcodes-settings-import-export'); ?>"><?php _e('Import Export','nd-shortcodes'); ?></a></li>
          <li><a style="background-color:<?php echo nd_options_get_profile_bg_color(2); ?>;" href=""><?php _e('Import Demo','nd-shortcodes'); ?></a></li>
          
          <?php

          if ( get_option('nd_options_locations_enable') == 1 ) { ?>

          <li><a class="" href="<?php echo admin_url('admin.php?page=nd-shortcodes-settings-locations'); ?>"><?php _e('Locations','nd-shortcodes'); ?></a></li>

          <?php }

          ?>

          <li><a target="_blank" href="http://documentations.nicdark.com/"><?php _e('Documentation','nd-shortcodes'); ?></a></li>
        </ul>

      </div>
      <!--END menu-->


      <!--START content-->
      <div class="nd_options_width_80_percentage nd_options_margin_left_20_percentage nd_options_float_left nd_options_box_sizing_border_box nd_options_padding_20">


        <!--START-->
        <div class="nd_options_section">
          <div class="nd_options_width_40_percentage nd_options_padding_20 nd_options_box_sizing_border_box nd_options_float_left">
            <h2 class="nd_options_section nd_options_margin_0"><?php _e('Import Demo','nd-shortcodes'); ?></h2>
            <p class="nd_options_color_666666 nd_options_section nd_options_margin_0 nd_options_margin_top_10"><?php _e('Select the demo you want to import options from.','nd-shortcodes'); ?></p>
          </div>
        </div>
        <!--END-->

        <div class="nd_options_section nd_options_height_1 nd_options_background_color_E7E7E7 nd_options_margin_top_10 nd_options_margin_bottom_10"></div>

        <?php

        $nd_options_demos_content_page = '';
        $nd_options_xml_url = esc_url( get_template_directory().'/import/demos-options.xml');

        //start IF
        if ( file_exists($nd_options_xml_url) ) {
            
            $nd_options_demos = simplexml_load_file($nd_options_xml_url);

            $nd_options_i = 0;
            foreach( $nd_options_demos->demo as $nd_options_demo ) { 

              $nd_options_demo_number = $nd_options_i+1;

              $nd_options_demos_content_page .= '

                <!--START demo preview-->
                <div class="nd_options_width_33_percentage nd_options_float_left  nd_options_padding_20 nd_options_box_sizing_border_box" style="text-align:center;">

                  <div class="nd_options_section nd_options_border_1_solid_e5e5e5">
                    <img style="float:left; width:100%" src="'.$nd_options_demo->option->value.'">
                  </div>

                  <div style="background-color:#fafafa" class="nd_options_section nd_options_padding_15_20 nd_options_box_sizing_border_box nd_options_border_1_solid_e5e5e5 nd_options_border_top_width_0">

                    <div class="nd_options_width_50_percentage nd_options_float_left">
                      <h2 style="line-height:28px;" class="nd_options_float_left nd_options_margin_0_important">'.__('Demo','nd-shortcodes').' '.$nd_options_demo_number.'</h2>
                    </div>
                    <div class="nd_options_width_50_percentage nd_options_float_left">
                      <button class="button button-primary nd_options_float_right nd_options_margin_0_important" onclick="nd_options_import_demo('.$nd_options_i.')" style="margin-top:10px;">IMPORT OPTIONS</button>
                    </div>

                  </div>

                </div>
                <!--END demo preview-->

              ';
               
              $nd_options_i = $nd_options_i + 1;

            }


            $nd_options_demos_content_page .= '

            <!--START content result-->
            <div id="nd_options_demo_import_result_content" class="nd_options_section nd_options_padding_20 nd_options_box_sizing_border_box">

              <div style="border-top:1px solid #ebebeb; border-right:1px solid #ebebeb;" class="notice notice-warning is-dismissible nd_options_margin_0 nd_options_section nd_options_box_sizing_border_box ">
                <p>'.__('IMPORTANT : If you import the demo options by clicking the button your existing options will be overwritten.','nd-shortcodes').'</p>
              </div>

            </div>
            <!--END content result-->


            ';


             
        } else {
            
            $nd_options_demos_content_page .= '

            <div style="border-top:1px solid #ebebeb; border-right:1px solid #ebebeb;" class="notice notice-error is-dismissible nd_options_margin_0 nd_options_section nd_options_box_sizing_border_box nd_options_margin_top_20">
              <p>'.__('It seems to be a problem with your server permissions that denies access to the import.xml file, contact your hosting provider to solve it.','nd-shortcodes').'</p>
            </div>

            ';
        
        }
        //END IF

        echo $nd_options_demos_content_page;

        ?>
        
      </div>
      <!--END content-->


    </div>

  </div>

<?php } 
/*END 1*/





//START AJAX Function
function nd_options_import_demo_php_function() {

  check_ajax_referer( 'nd_options_import_demo_nonce', 'nd_options_import_demo_security' );

  $nd_options_demoset = sanitize_text_field($_GET['nd_options_demo']);

  $nd_options_result = '';




  //START import and update options only if is superadmin
  if ( current_user_can('manage_options') ) {


    $nd_options_xml_url = esc_url( get_template_directory().'/import/demos-options.xml');
  
    if ( file_exists($nd_options_xml_url) ) {
          
          
          $nd_options_demos = simplexml_load_file($nd_options_xml_url);

          $nd_options_i = 0;
          foreach( $nd_options_demos->demo as $nd_options_demo ) { 

              if ( $nd_options_i == $nd_options_demoset ) {

                  
                  //echo tutte le opzioni
                  $nd_options_ii = 0;
                  foreach( $nd_options_demo->option as $nd_options_option ) { 

                      if ( $nd_options_ii != 0 ){

                          $nd_options_option_name = esc_attr($nd_options_option->name);
                          $nd_options_option_value = esc_attr($nd_options_option->value);

                          //START update option only it contains the plugin suffix
                          if ( strpos($nd_options_option_name, 'wpb_') !== false OR strpos($nd_options_option_name, 'nd_options_') !== false OR strpos($nd_options_option_name, 'nd_booking_') !== false OR strpos($nd_options_option_name, 'nd_donations_') !== false OR strpos($nd_options_option_name, 'nd_learning_') !== false OR strpos($nd_options_option_name, 'nd_rst_') !== false OR strpos($nd_options_option_name, 'nd_travel_') !== false OR strpos($nd_options_option_name, 'nd_cc_') !== false ) {
                            update_option($nd_options_option_name,$nd_options_option_value);
                          } 
                          //END update option only it contains the plugin suffix

                          //$nd_options_result .= $nd_options_option_name.' - ';

                      }

                      $nd_options_ii = $nd_options_ii + 1;

                  }
                  //echo tutte le opzioni


              }

              $nd_options_i = $nd_options_i + 1;   

          }




          $nd_options_result .= '

            <div style="border-top:1px solid #ebebeb; border-right:1px solid #ebebeb;" class="notice updated is-dismissible nd_options_margin_0_important nd_options_section nd_options_box_sizing_border_box nd_options_margin_top_20">
                <p>'.__('The demo options have been imported correctly, please ','nd-shortcodes').' <a href="admin.php?import=wordpress">'.__('click here','nd-shortcodes').'</a> '.__('for import also the dummy content.','nd-shortcodes').'</p>
            </div>

          ';




          
       
      } else {
          
          $nd_options_result .= '

            <div style="border-top:1px solid #ebebeb; border-right:1px solid #ebebeb;" class="notice notice-error is-dismissible nd_options_margin_0 nd_options_section nd_options_box_sizing_border_box ">
                <p>'.__('It seems to be a problem with your server permissions that denies access to the import.xml file, contact your hosting provider to solve it.','nd-shortcodes').'</p>
              </div>

          ';

      }



  }else{

    $nd_options_result .= '

      <div style="border-top:1px solid #ebebeb; border-right:1px solid #ebebeb;" class="notice notice-error is-dismissible nd_options_margin_0 nd_options_section nd_options_box_sizing_border_box ">
          <p>'.__('You do not have permission to import options, contact the site administrator.','nd-shortcodes').'</p>
        </div>

    ';

  }
  //END import and update options only if is superadmin 




  

    echo $nd_options_result;
  
  die();


}
add_action( 'wp_ajax_nd_options_import_demo_php_function', 'nd_options_import_demo_php_function' );
//END AJAX Function


