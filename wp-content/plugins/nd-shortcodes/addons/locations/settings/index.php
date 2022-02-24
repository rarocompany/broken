<?php


add_action('nd_options_admin_navigation_hook','nd_options_admin_navigation_new_locations_page');
function nd_options_admin_navigation_new_locations_page(){
  
  $nd_options_result = '';

  $nd_options_result .= '
    <li>
      <a class="" href="'.admin_url("admin.php?page=nd-shortcodes-settings-locations").'">
        '.__('Locations','nd-shortcodes').'
      </a>
    </li>
  ';

  echo $nd_options_result;

}


add_action('nd_options_create_new_admin_setting_page','nd_options_create_new_admin_setting_page_locations');

//START nd_options_create_new_admin_setting_page_locations
function nd_options_create_new_admin_setting_page_locations(){

  add_action('admin_menu','nd_options_add_settings_menu_locations');
  function nd_options_add_settings_menu_locations(){

    add_submenu_page( 'nd-shortcodes-settings','Locations', __('Locations','nd-shortcodes'), 'manage_options', 'nd-shortcodes-settings-locations', 'nd_options_settings_menu_locations' );

    add_action( 'admin_init', 'nd_options_settings_locations_datas' );

  }


  /*1 - options*/
  function nd_options_settings_locations_datas() {
    register_setting( 'nd_options_settings_group_locations', 'nd_options_locations_googlemaps_key' );
  }


  function nd_options_settings_menu_locations() {?>

    <form method="post" action="options.php">

    <?php settings_fields( 'nd_options_settings_group_locations' ); ?>
    <?php do_settings_sections( 'nd_options_settings_group_locations' ); ?>

    <div class="nd_options_section nd_options_padding_right_20 nd_options_padding_left_2 nd_options_box_sizing_border_box nd_options_margin_top_25 ">

      

      <div style="background-color:<?php echo nd_options_get_profile_bg_color(0); ?>; border-bottom:3px solid <?php echo nd_options_get_profile_bg_color(2); ?>;" class="nd_options_section nd_options_padding_20  nd_options_box_sizing_border_box">
        <h2 class="nd_options_color_ffffff nd_options_display_inline_block"><?php _e('ND Shortcodes','nd-shortcodes'); ?></h2><span class="nd_options_margin_left_10 nd_options_color_a0a5aa"><?php echo nd_options_get_plugin_version(); ?></span>
      </div>

      

      <div class="nd_options_section nd_options_min_height_400 nd_options_box_shadow_0_1_1_000_04 nd_options_background_color_ffffff nd_options_border_1_solid_e5e5e5 nd_options_border_top_width_0 nd_options_border_left_width_0 nd_options_overflow_hidden nd_options_position_relative">
      
        <!--START menu-->
        <div style="background-color:<?php echo nd_options_get_profile_bg_color(1); ?>;" class="nd_options_width_20_percentage nd_options_float_left nd_options_box_sizing_border_box nd_options_min_height_3000 nd_options_position_absolute">

          <ul class="nd_options_navigation">
            <li><a class="" href="<?php echo admin_url('admin.php?page=nd-shortcodes-settings'); ?>"><?php _e('Plugin Settings','nd-shortcodes'); ?></a></li>
            <li><a class="" href="<?php echo admin_url('customize.php'); ?>"><?php _e('Theme Options','nd-shortcodes'); ?></a></li>
            <li><a class="" href="<?php echo admin_url('admin.php?page=nd-shortcodes-settings-import-export'); ?>"><?php _e('Import Export','nd-shortcodes'); ?></a></li>
            <li><a class="" href="<?php echo admin_url('admin.php?page=nd-shortcodes-settings-import-demo'); ?>"><?php _e('Import Demo','nd-shortcodes'); ?></a></li>

            <?php

            if ( get_option('nd_options_locations_enable') == 1 ) { ?>

            <li><a style="background-color:<?php echo nd_options_get_profile_bg_color(2); ?>;" href=""><?php _e('Locations','nd-shortcodes'); ?></a></li>

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
              <h2 class="nd_options_section nd_options_margin_0"><?php _e('Location Settings','nd-shortcodes'); ?></h2>
              <p class="nd_options_color_666666 nd_options_section nd_options_margin_0 nd_options_margin_top_10"><?php _e('Below some important location settings.','nd-shortcodes'); ?></p>
            </div>
          </div>
          <!--END-->

          <div class="nd_options_section nd_options_height_1 nd_options_background_color_E7E7E7 nd_options_margin_top_10 nd_options_margin_bottom_10"></div>

          <!--START-->
          <div class="nd_options_section">
            <div class="nd_options_width_40_percentage nd_options_padding_20 nd_options_box_sizing_border_box nd_options_float_left">
              <h2 class="nd_options_section nd_options_margin_0"><?php _e('Api Key','nd-shortcodes'); ?></h2>
              <p class="nd_options_color_666666 nd_options_section nd_options_margin_0 nd_options_margin_top_10"><?php _e('Insert Google Maps Api Key','nd-shortcodes'); ?></p>
            </div>
            <div class="nd_options_width_60_percentage nd_options_padding_20 nd_options_box_sizing_border_box nd_options_float_left">
              
              <input class="nd_options_width_100_percentage" type="text" name="nd_options_locations_googlemaps_key" value="<?php echo esc_attr( get_option('nd_options_locations_googlemaps_key') ); ?>" />
              <p class="nd_options_color_666666 nd_options_section nd_options_margin_0 nd_options_margin_top_20"><?php _e('Insert Google Maps Api Key - <a target="_blank" href="https://developers.google.com/maps/documentation/javascript/get-api-key">View Documentation</a>','nd-shortcodes'); ?></p>

            </div>
          </div>
          <!--END-->

          <div class="nd_options_section nd_options_height_1 nd_options_background_color_E7E7E7 nd_options_margin_top_10 nd_options_margin_bottom_10"></div>

          <div class="nd_options_section nd_options_padding_left_20 nd_options_padding_right_20 nd_options_box_sizing_border_box">
            <?php submit_button(); ?>
          </div>


        
        </div>
        <!--END content-->


      </div>

    </div>
  </form>

  <?php }


}
//END



