<?php


add_action('admin_menu','nd_cc_add_settings_menu_import_export');
function nd_cc_add_settings_menu_import_export(){

  add_submenu_page( 'nd-projects-settings','Import Export', __('Import Export','nd-projects'), 'manage_options', 'nd-projects-settings-import-export', 'nd_cc_settings_menu_import_export' );

}



function nd_cc_settings_menu_import_export() {

  $nd_cc_import_settings_params = array(
      'nd_cc_ajaxurl_import_settings' => admin_url('admin-ajax.php'),
      'nd_cc_ajaxnonce_import_settings' => wp_create_nonce('nd_cc_import_settings_nonce'),
  );

  wp_enqueue_script( 'nd_cc_import_sett', esc_url( plugins_url( 'js/nd_cc_import_settings.js', __FILE__ ) ), array( 'jquery' ) ); 
  wp_localize_script( 'nd_cc_import_sett', 'nd_cc_my_vars_import_settings', $nd_cc_import_settings_params ); 

?>

  
  <div class="nd_cc_section nd_cc_padding_right_20 nd_cc_padding_left_2 nd_cc_box_sizing_border_box nd_cc_margin_top_25 ">

    

    <div style="background-color:<?php echo nd_cc_get_profile_bg_color(0); ?>; border-bottom:3px solid <?php echo nd_cc_get_profile_bg_color(2); ?>;" class="nd_cc_section nd_cc_padding_20  nd_cc_box_sizing_border_box">
      <h2 class="nd_cc_color_ffffff nd_cc_display_inline_block"><?php _e('ND Projects','nd-projects'); ?></h2><span class="nd_cc_margin_left_10 nd_cc_color_a0a5aa"><?php echo nd_cc_get_plugin_version(); ?></span>
    </div>

    

    <div class="nd_cc_section  nd_cc_box_shadow_0_1_1_000_04 nd_cc_background_color_ffffff nd_cc_border_1_solid_e5e5e5 nd_cc_border_top_width_0 nd_cc_border_left_width_0 nd_cc_overflow_hidden nd_cc_position_relative">
    
      <!--START menu-->
      <div style="background-color:<?php echo nd_cc_get_profile_bg_color(1); ?>;" class="nd_cc_width_20_percentage nd_cc_float_left nd_cc_box_sizing_border_box nd_cc_min_height_3000 nd_cc_position_absolute">

        <ul class="nd_cc_navigation">
          
          <li><a class="" href="<?php echo admin_url('admin.php?page=nd-projects-settings'); ?>"><?php _e('Plugin Settings','nd-projects'); ?></a></li>
          <li><a style="background-color:<?php echo nd_cc_get_profile_bg_color(2); ?>;" class="" href="" ><?php _e('Import Export','nd-projects'); ?></a></li>
        
        </ul>
      </div>
      <!--END menu-->


      <!--START content-->
      <div class="nd_cc_width_80_percentage nd_cc_margin_left_20_percentage nd_cc_float_left nd_cc_box_sizing_border_box nd_cc_padding_20">


        <!--START-->
        <div class="nd_cc_section">
          <div class="nd_cc_width_40_percentage nd_cc_padding_20 nd_cc_box_sizing_border_box nd_cc_float_left">
            <h2 class="nd_cc_section nd_cc_margin_0"><?php _e('Import/Export','nd-projects'); ?></h2>
            <p class="nd_cc_color_666666 nd_cc_section nd_cc_margin_0 nd_cc_margin_top_10"><?php _e('Export or Import your theme options.','nd-projects'); ?></p>
          </div>
        </div>
        <!--END-->

        <div class="nd_cc_section nd_cc_height_1 nd_cc_background_color_E7E7E7 nd_cc_margin_top_10 nd_cc_margin_bottom_10"></div>


        <?php


          $nd_cc_all_options = wp_load_alloptions();
          $nd_cc_my_options  = array();

          $nd_cc_name_write = '';
           
          foreach ( $nd_cc_all_options as $nd_cc_name => $nd_cc_value ) {
              if ( stristr( $nd_cc_name, 'nd_cc_' ) ) {
                  
                $nd_cc_my_options[ $nd_cc_name ] = $nd_cc_value;
                $nd_cc_name_write .= $nd_cc_name.'[nd_cc_option_value]'.$nd_cc_value.'[nd_cc_end_option]';

              }
          }

          $nd_cc_name_write_new_1 = str_replace(" ", "%20", $nd_cc_name_write);
          $nd_cc_name_write_new = str_replace("#", "[SHARP]", $nd_cc_name_write_new_1);
           
        ?>


        <!--START-->
        <div class="nd_cc_section">
          <div class="nd_cc_width_40_percentage nd_cc_padding_20 nd_cc_box_sizing_border_box nd_cc_float_left">
            <h2 class="nd_cc_section nd_cc_margin_0"><?php _e('Export Settings','nd-projects'); ?></h2>
            <p class="nd_cc_color_666666 nd_cc_section nd_cc_margin_0 nd_cc_margin_top_10"><?php _e('Export ND Projects and customizer options.','nd-projects'); ?></p>
          </div>
          <div class="nd_cc_width_60_percentage nd_cc_padding_20 nd_cc_box_sizing_border_box nd_cc_float_left">
            
            <div class="nd_cc_section nd_cc_padding_left_20 nd_cc_padding_right_20 nd_cc_box_sizing_border_box">
              
                <a class="button button-primary" href="data:application/octet-stream;charset=utf-8,<?php echo $nd_cc_name_write_new; ?>" download="nd-projects-export.txt"><?php _e('Export','nd-projects'); ?></a>
              
            </div>

          </div>
        </div>
        <!--END-->

        
        <div class="nd_cc_section nd_cc_height_1 nd_cc_background_color_E7E7E7 nd_cc_margin_top_10 nd_cc_margin_bottom_10"></div>

        

        <!--START-->
        <div class="nd_cc_section">
          <div class="nd_cc_width_40_percentage nd_cc_padding_20 nd_cc_box_sizing_border_box nd_cc_float_left">
            <h2 class="nd_cc_section nd_cc_margin_0"><?php _e('Import Settings','nd-projects'); ?></h2>
            <p class="nd_cc_color_666666 nd_cc_section nd_cc_margin_0 nd_cc_margin_top_10"><?php _e('Paste in the textarea the text of your export file','nd-projects'); ?></p>
          </div>
          <div class="nd_cc_width_60_percentage nd_cc_padding_20 nd_cc_box_sizing_border_box nd_cc_float_left">
            
            <div class="nd_cc_section nd_cc_padding_left_20 nd_cc_padding_right_20 nd_cc_box_sizing_border_box">
              
                <textarea id="nd_cc_import_settings" class="nd_cc_margin_bottom_20 nd_cc_width_100_percentage" name="nd_cc_import_settings" rows="10"><?php echo esc_attr( get_option('nd_cc_textarea') ); ?></textarea>
                
                <a onclick="nd_cc_import_settings()" class="button button-primary"><?php _e('Import','nd-projects'); ?></a>

                <div class="nd_cc_margin_top_20 nd_cc_section" id="nd_cc_import_settings_result_container"></div>
                
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







//START nd_cc_import_settings_php_function for AJAX
function nd_cc_import_settings_php_function() {

  check_ajax_referer( 'nd_cc_import_settings_nonce', 'nd_cc_import_settings_security' );

  //recover datas
  $nd_cc_value_import_settings = sanitize_text_field($_GET['nd_cc_value_import_settings']);

  $nd_cc_import_settings_result .= '';


  //START import and update options only if is superadmin
  if ( current_user_can('manage_options') ) {



    if ( $nd_cc_value_import_settings != '' ) {

      $nd_cc_array_options = explode("[nd_cc_end_option]", $nd_cc_value_import_settings);

      foreach ($nd_cc_array_options as $nd_cc_array_option) {
          
        $nd_cc_array_single_option = explode("[nd_cc_option_value]", $nd_cc_array_option);
        $nd_cc_option = $nd_cc_array_single_option[0];
        $nd_cc_new_value = $nd_cc_array_single_option[1];
        $nd_cc_new_value = str_replace("[SHARP]","#",$nd_cc_new_value);

        if ( $nd_cc_new_value != '' ){



          //START update option only it contains the plugin suffix
          if ( strpos($nd_cc_option, 'nd_cc_') !== false ) {


            $nd_cc_update_result = update_option($nd_cc_option,$nd_cc_new_value);  

            if ( $nd_cc_update_result == 1 ) {
              $nd_cc_import_settings_result .= '

                <div class="notice updated is-dismissible nd_cc_margin_0_important">
                  <p>'.__('Updated option','nd-projects').' "'.$nd_cc_option.'" '.__('with','nd-projects').' '.$nd_cc_new_value.'.</p>
                </div>

                ';

            }else{
              $nd_cc_import_settings_result .= '

                <div class="notice updated is-dismissible nd_cc_margin_0_important">
                  <p>'.__('Updated option','nd-projects').' "'.$nd_cc_option.'" '.__('with the same value','nd-projects').'.</p>
                </div>

              ';    
            }

          
          }else{

            $nd_cc_import_settings_result .= '
              <div class="notice notice-error is-dismissible nd_cc_margin_0">
                <p>'.__('You do not have permission to change this option','nd-projects').'</p>
              </div>
            ';

          }
          //END update option only it contains the plugin suffix



        }else{

          if ( $nd_cc_option != '' ){
            $nd_cc_import_settings_result .= '

          <div class="notice notice-warning is-dismissible nd_cc_margin_0">
            <p>'.__('No value founded for','nd-projects').' "'.$nd_cc_option.'" '.__('option.','nd-projects').'</p>
          </div>
          ';
          }

          
        }
        
      }

    }else{

      $nd_cc_import_settings_result .= '
        <div class="notice notice-error is-dismissible nd_cc_margin_0">
          <p>'.__('Empty textarea, please paste your export options.','nd-projects').'</p>
        </div>
      ';

    }




  
  }else{

    $nd_cc_import_settings_result .= '
      <div class="notice notice-error is-dismissible nd_cc_margin_0">
        <p>'.__('You do not have the privileges to do this.','nd-projects').'</p>
      </div>
    ';

  }
  //END import and update options only if is superadmin

  
  echo $nd_cc_import_settings_result;

  die();


}
add_action( 'wp_ajax_nd_cc_import_settings_php_function', 'nd_cc_import_settings_php_function' );
//END