<?php


add_action('admin_menu','nd_options_add_settings_menu_import_export');
function nd_options_add_settings_menu_import_export(){

  add_submenu_page( 'nd-shortcodes-settings','Import Export', __('Import Export','nd-shortcodes'), 'manage_options', 'nd-shortcodes-settings-import-export', 'nd_options_settings_menu_import_export' );

}



function nd_options_settings_menu_import_export() {

  $nd_options_import_settings_params = array(
      'nd_options_ajaxurl_import_settings' => admin_url('admin-ajax.php'),
      'nd_options_ajaxnonce_import_settings' => wp_create_nonce('nd_options_import_settings_nonce'),
  );

  wp_enqueue_script( 'nd_options_import_sett', esc_url( plugins_url( 'js/nd_options_import_settings.js', __FILE__ ) ), array( 'jquery' ) ); 
  wp_localize_script( 'nd_options_import_sett', 'nd_options_my_vars_import_settings', $nd_options_import_settings_params ); 

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
          <li><a style="background-color:<?php echo nd_options_get_profile_bg_color(2); ?>;" href=""><?php _e('Import Export','nd-shortcodes'); ?></a></li>
          <li id="nd_options_import_demo_li"><a class="" href="<?php echo admin_url('admin.php?page=nd-shortcodes-settings-import-demo'); ?>"><?php _e('Import Demo','nd-shortcodes'); ?></a></li>
          
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
            <h2 class="nd_options_section nd_options_margin_0"><?php _e('Import/Export','nd-shortcodes'); ?></h2>
            <p class="nd_options_color_666666 nd_options_section nd_options_margin_0 nd_options_margin_top_10"><?php _e('Export or Import your theme options.','nd-shortcodes'); ?></p>
          </div>
        </div>
        <!--END-->

        <div class="nd_options_section nd_options_height_1 nd_options_background_color_E7E7E7 nd_options_margin_top_10 nd_options_margin_bottom_10"></div>


        <?php
        
          $nd_options_all_options = wp_load_alloptions();
          $nd_options_my_options  = array();

          $nd_options_name_write = '';
           
          foreach ( $nd_options_all_options as $nd_options_name => $nd_options_value ) {
              if ( stristr( $nd_options_name, 'nd_options_' ) ) {
                  
                $nd_options_my_options[ $nd_options_name ] = $nd_options_value;
                $nd_options_name_write .= $nd_options_name.'[nd_options_option_value]'.$nd_options_value.'[nd_options_end_option]';

              }
          }

          $nd_options_name_write_new_1 = str_replace(" ", "%20", $nd_options_name_write);
          $nd_options_name_write_new = str_replace("#", "[SHARP]", $nd_options_name_write_new_1);

        ?>


        <!--START-->
        <div class="nd_options_section">
          <div class="nd_options_width_40_percentage nd_options_padding_20 nd_options_box_sizing_border_box nd_options_float_left">
            <h2 class="nd_options_section nd_options_margin_0"><?php _e('Export Settings','nd-shortcodes'); ?></h2>
            <p class="nd_options_color_666666 nd_options_section nd_options_margin_0 nd_options_margin_top_10"><?php _e('Export Nd Shortcodes and customizer options.','nd-shortcodes'); ?></p>
          </div>
          <div class="nd_options_width_60_percentage nd_options_padding_20 nd_options_box_sizing_border_box nd_options_float_left">
            
            <div class="nd_options_section nd_options_padding_left_20 nd_options_padding_right_20 nd_options_box_sizing_border_box">
              
                <a class="button button-primary" href="data:application/octet-stream;charset=utf-8,<?php echo $nd_options_name_write_new; ?>" download="nd-shortcodes-export.txt"><?php _e('Export','nd-shortcodes'); ?></a>
              
            </div>

          </div>
        </div>
        <!--END-->

        
        <div class="nd_options_section nd_options_height_1 nd_options_background_color_E7E7E7 nd_options_margin_top_10 nd_options_margin_bottom_10"></div>

        

        <!--START-->
        <div class="nd_options_section">
          <div class="nd_options_width_40_percentage nd_options_padding_20 nd_options_box_sizing_border_box nd_options_float_left">
            <h2 class="nd_options_section nd_options_margin_0"><?php _e('Import Settings','nd-shortcodes'); ?></h2>
            <p class="nd_options_color_666666 nd_options_section nd_options_margin_0 nd_options_margin_top_10"><?php _e('Paste in the textarea the text of your export file','nd-shortcodes'); ?></p>
          </div>
          <div class="nd_options_width_60_percentage nd_options_padding_20 nd_options_box_sizing_border_box nd_options_float_left">
            
            <div class="nd_options_section nd_options_padding_left_20 nd_options_padding_right_20 nd_options_box_sizing_border_box">
              
                <textarea id="nd_options_import_settings" class="nd_options_margin_bottom_20 nd_options_width_100_percentage" name="nd_options_import_settings" rows="10"><?php echo esc_attr( get_option('nd_options_textarea') ); ?></textarea>
                
                <a onclick="nd_options_import_poptions()" class="button button-primary"><?php _e('Import','nd-shortcodes'); ?></a>

                <div class="nd_options_margin_top_20 nd_options_section" id="nd_options_import_settings_result_container"></div>
                
            </div>

          </div>
        </div>
        <!--END-->


      </div>
      <!--END content-->


    </div>

  </div>

<?php } 
/*END 1*/







//START nd_options_import_plugin_function for AJAX
function nd_options_import_plugin_function() {

  check_ajax_referer( 'nd_options_import_settings_nonce', 'nd_options_import_settings_security' );

  //recover datas
  $nd_options_value_import_settings = sanitize_text_field($_GET['nd_options_value_import_settings']);

  $nd_options_import_settings_result .= '';


  //START import and update options only if is superadmin
  if ( current_user_can('manage_options') ) {



    if ( $nd_options_value_import_settings != '' ) {

      $nd_options_array_options = explode("[nd_options_end_option]", $nd_options_value_import_settings);

      foreach ($nd_options_array_options as $nd_options_array_option) {
          
        $nd_options_array_single_option = explode("[nd_options_option_value]", $nd_options_array_option);
        
        $nd_options_option = $nd_options_array_single_option[0];
        $nd_options_new_value = $nd_options_array_single_option[1];
        $nd_options_new_value = str_replace("[SHARP]","#",$nd_options_new_value);

        if ( $nd_options_new_value != '' ){

          //remove \ from new value
          $nd_options_new_value_str_replace = str_replace("\'", "'", $nd_options_new_value );


          //START update option only it contains the plugin suffix
          if ( strpos($nd_options_option, 'nd_options_') !== false ) {

            $nd_options_update_result = update_option($nd_options_option,$nd_options_new_value_str_replace);  

            if ( $nd_options_update_result == 1 ) {

                $nd_options_import_settings_result .= '
                <div class="notice updated is-dismissible nd_options_margin_0_important">
                <p>'.__('Updated option','nd-shortcodes').' "'.$nd_options_option.'" '.__('with','nd-shortcodes').' '.$nd_options_new_value.'.</p>
                </div>';

            }else{

              $nd_options_import_settings_result .= '
              <div class="notice updated is-dismissible nd_options_margin_0_important">
              <p>'.__('Updated option','nd-shortcodes').' "'.$nd_options_option.'" '.__('with the same value','nd-shortcodes').'.</p>
              </div>'; 

            }


          }else{

            $nd_options_import_settings_result .= '
            <div class="notice notice-error is-dismissible nd_options_margin_0">
              <p>'.__('You do not have permission to change this option','nd-shortcodes').'</p>
            </div>';

          }
          //END update option only it contains the plugin suffix


          

        }else{

          if ( $nd_options_option != '' ){
            $nd_options_import_settings_result .= '

          <div class="notice notice-warning is-dismissible nd_options_margin_0">
            <p>'.__('No value founded for','nd-shortcodes').' "'.$nd_options_option.'" '.__('option.','nd-shortcodes').'</p>
          </div>
          ';
        }

          
        }
        
      }

    }else{

      $nd_options_import_settings_result .= '
        <div class="notice notice-error is-dismissible nd_options_margin_0">
          <p>'.__('Empty textarea, please paste your export options.','nd-shortcodes').'</p>
        </div>
      ';

    }


    
  }
  else{
    

    $nd_options_import_settings_result .= '
      <div class="notice notice-error is-dismissible nd_options_margin_0">
        <p>'.__('You do not have the privileges to do this.','nd-shortcodes').'</p>
      </div>
    ';


  }
  //START import and update options only if is superadmin

  echo $nd_options_import_settings_result;

  die();


}
add_action( 'wp_ajax_nd_options_import_plugin_function', 'nd_options_import_plugin_function' );
//END