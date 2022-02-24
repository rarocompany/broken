<?php




//START add custom css
function nd_options_admin_style() {
  
  wp_enqueue_style( 'nd_options_style', esc_url( plugins_url( 'admin-style.css', __FILE__ ) ) , array(), false, false );
  
}
add_action( 'admin_enqueue_scripts', 'nd_options_admin_style' );
//END add custom css


//START function for get color profile admin
function nd_options_get_profile_bg_color($nd_options_color){
  
  global $_wp_admin_css_colors;
  $nd_options_admin_color = get_user_option( 'admin_color' );
  
  $nd_options_profile_bg_colors = $_wp_admin_css_colors[$nd_options_admin_color]->colors; 


  if ( $nd_options_profile_bg_colors[$nd_options_color] == '#e5e5e5' ) {

    return '#6b6b6b';

  }else{

    return $nd_options_profile_bg_colors[$nd_options_color];
    
  }

  
}
//END



add_action('admin_menu', 'nd_options_create_settings_menu');
function nd_options_create_settings_menu() {
  
  /*1*/
  add_menu_page('Theme Options', 'Theme Options', 'manage_options', 'nd-shortcodes-settings', 'nd_options_settings_menu_page', 'dashicons-admin-settings' );
  add_action( 'admin_init', 'nd_options_settings_datas' );

}

/*1 - options*/
function nd_options_settings_datas() {
  register_setting( 'nd_options_settings_group', 'nd_options_breadcrumbs_enable' );
  register_setting( 'nd_options_settings_group', 'nd_options_archive_enable' );
  register_setting( 'nd_options_settings_group', 'nd_options_comment_enable' );
  register_setting( 'nd_options_settings_group', 'nd_options_page_enable' );
  register_setting( 'nd_options_settings_group', 'nd_options_post_enable' );
  register_setting( 'nd_options_settings_group', 'nd_options_search_enable' );
  register_setting( 'nd_options_settings_group', 'nd_options_woocommerce_enable' );
  register_setting( 'nd_options_settings_group', 'nd_options_eventscalendar_enable' );
  register_setting( 'nd_options_settings_group', 'nd_options_give_enable' );
  register_setting( 'nd_options_settings_group', 'nd_options_customizer_enable' );
  register_setting( 'nd_options_settings_group', 'nd_options_locations_enable' );
}


/*1 - page*/
function nd_options_settings_menu_page() {
?>
<form method="post" action="options.php">
    
  <?php settings_fields( 'nd_options_settings_group' ); ?>
  <?php do_settings_sections( 'nd_options_settings_group' ); ?>


  <div class="nd_options_section nd_options_padding_right_20 nd_options_padding_left_2 nd_options_box_sizing_border_box nd_options_margin_top_25 ">

    

    <div style="background-color:<?php echo nd_options_get_profile_bg_color(0); ?>; border-bottom:3px solid <?php echo nd_options_get_profile_bg_color(2); ?>;" class="nd_options_section nd_options_padding_20   nd_options_box_sizing_border_box">
      <h2 class="nd_options_color_ffffff nd_options_display_inline_block"><?php _e('ND Shortcodes','nd-shortcodes'); ?></h2><span class="nd_options_margin_left_10 nd_options_color_a0a5aa"><?php echo nd_options_get_plugin_version(); ?></span>
    </div>

    

    <div class="nd_options_section  nd_options_box_shadow_0_1_1_000_04 nd_options_background_color_ffffff nd_options_border_1_solid_e5e5e5 nd_options_border_top_width_0 nd_options_border_left_width_0 nd_options_overflow_hidden nd_options_position_relative">
    
      <!--START menu-->
      <div style="background-color:<?php echo nd_options_get_profile_bg_color(1); ?>;" class="nd_options_width_20_percentage nd_options_float_left nd_options_box_sizing_border_box nd_options_min_height_3000 nd_options_position_absolute">

        <ul class="nd_options_navigation">
          <li><a style="background-color:<?php echo nd_options_get_profile_bg_color(2); ?>;" href="#"><?php _e('Plugin Settings','nd-shortcodes'); ?></a></li>
          <li><a class="" href="<?php echo admin_url('customize.php'); ?>"><?php _e('Theme Options','nd-shortcodes'); ?></a></li>
          <li><a class="" href="<?php echo admin_url('admin.php?page=nd-shortcodes-settings-import-export'); ?>"><?php _e('Import Export','nd-shortcodes'); ?></a></li>
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
            <h2 class="nd_options_section nd_options_margin_0"><?php _e('Plugin Settings','nd-shortcodes'); ?></h2>
            <p class="nd_options_color_666666 nd_options_section nd_options_margin_0 nd_options_margin_top_10"><?php _e('Below some important plugin settings.','nd-shortcodes'); ?></p>
          </div>
        </div>
        <!--END-->

        <div class="nd_options_section nd_options_height_1 nd_options_background_color_E7E7E7 nd_options_margin_top_10 nd_options_margin_bottom_10"></div>

        <!--START-->
        <div id="nd_options_breadcrumbs_option_setting" class="nd_options_section">
          <div class="nd_options_width_40_percentage nd_options_padding_20 nd_options_box_sizing_border_box nd_options_float_left">
            <h2 class="nd_options_section nd_options_margin_0"><?php _e('Breadcrumbs','nd-shortcodes'); ?></h2>
            <p class="nd_options_color_666666 nd_options_section nd_options_margin_0 nd_options_margin_top_10"><?php _e('Check for Enable Breadcrumbs on all site.','nd-shortcodes'); ?></p>
          </div>
          <div class="nd_options_width_60_percentage nd_options_padding_20 nd_options_box_sizing_border_box nd_options_float_left">
            
            <label class="nd_options_section"><input <?php if( get_option('nd_options_breadcrumbs_enable') == 1 ) { echo 'checked="checked"'; } ?> name="nd_options_breadcrumbs_enable" type="checkbox" value="1"> <?php _e('Enable','nd-shortcodes'); ?></label>

          </div>
        </div>
        <!--END-->



        <div class="nd_options_section nd_options_height_1 nd_options_background_color_E7E7E7 nd_options_margin_top_10 nd_options_margin_bottom_10"></div>



        <!--START-->
        <div class="nd_options_section">
          <div class="nd_options_width_40_percentage nd_options_padding_20 nd_options_box_sizing_border_box nd_options_float_left">
            <h2 class="nd_options_section nd_options_margin_0"><?php _e('Template Plugin','nd-shortcodes'); ?></h2>
            <p class="nd_options_color_666666 nd_options_section nd_options_margin_0 nd_options_margin_top_10"><?php _e('Override default theme template with plugin template','nd-shortcodes'); ?></p>
          </div>
          <div class="nd_options_width_60_percentage nd_options_padding_20 nd_options_box_sizing_border_box nd_options_float_left">
            
            <label class="nd_options_section"><input <?php if( get_option('nd_options_archive_enable') == 1 ) { echo 'checked="checked"'; } ?> name="nd_options_archive_enable" type="checkbox" value="1"> <?php _e('Archive Template','nd-shortcodes'); ?></label>
            <div class="nd_options_section nd_options_height_10"></div>
            <label class="nd_options_section"><input <?php if( get_option('nd_options_comment_enable') == 1 ) { echo 'checked="checked"'; } ?> name="nd_options_comment_enable" type="checkbox" value="1"> <?php _e('Comment Template','nd-shortcodes'); ?></label>
            <div class="nd_options_section nd_options_height_10"></div>
            <label class="nd_options_section"><input <?php if( get_option('nd_options_page_enable') == 1 ) { echo 'checked="checked"'; } ?> name="nd_options_page_enable" type="checkbox" value="1"> <?php _e('Page Template','nd-shortcodes'); ?></label>
            <div class="nd_options_section nd_options_height_10"></div>
            <label class="nd_options_section"><input <?php if( get_option('nd_options_post_enable') == 1 ) { echo 'checked="checked"'; } ?> name="nd_options_post_enable" type="checkbox" value="1"> <?php _e('Post Template','nd-shortcodes'); ?></label>
            <div class="nd_options_section nd_options_height_10"></div>
            <label class="nd_options_section"><input <?php if( get_option('nd_options_search_enable') == 1 ) { echo 'checked="checked"'; } ?> name="nd_options_search_enable" type="checkbox" value="1"> <?php _e('Search Template','nd-shortcodes'); ?></label>

          </div>
        </div>
        <!--END-->



        <div class="nd_options_section nd_options_height_1 nd_options_background_color_E7E7E7 nd_options_margin_top_10 nd_options_margin_bottom_10"></div>



        <!--START-->
        <div class="nd_options_section">
          <div class="nd_options_width_40_percentage nd_options_padding_20 nd_options_box_sizing_border_box nd_options_float_left">
            <h2 class="nd_options_section nd_options_margin_0"><?php _e('Plugin Compatibility','nd-shortcodes'); ?></h2>
            <p class="nd_options_color_666666 nd_options_section nd_options_margin_0 nd_options_margin_top_10"><?php _e('Override default plugin style with nd shortcodes custom style','nd-shortcodes'); ?></p>
          </div>
          <div class="nd_options_width_60_percentage nd_options_padding_20 nd_options_box_sizing_border_box nd_options_float_left">
            
            <label class="nd_options_section"><input <?php if( get_option('nd_options_woocommerce_enable') == 1 ) { echo 'checked="checked"'; } ?> name="nd_options_woocommerce_enable" type="checkbox" value="1"> <?php _e('WooCommerce','nd-shortcodes'); ?></label>
            <div class="nd_options_section nd_options_height_10"></div>
            <label class="nd_options_section"><input <?php if( get_option('nd_options_eventscalendar_enable') == 1 ) { echo 'checked="checked"'; } ?> name="nd_options_eventscalendar_enable" type="checkbox" value="1"> <?php _e('Events Calendar','nd-shortcodes'); ?></label>
            <div class="nd_options_section nd_options_height_10"></div>
            <label class="nd_options_section"><input <?php if( get_option('nd_options_give_enable') == 1 ) { echo 'checked="checked"'; } ?> name="nd_options_give_enable" type="checkbox" value="1"> <?php _e('Give Donation','nd-shortcodes'); ?></label>

          </div>
        </div>
        <!--END-->



        <div class="nd_options_section nd_options_height_1 nd_options_background_color_E7E7E7 nd_options_margin_top_10 nd_options_margin_bottom_10"></div>



        <!--START-->
        <div class="nd_options_section">
          <div class="nd_options_width_40_percentage nd_options_padding_20 nd_options_box_sizing_border_box nd_options_float_left">
            <h2 class="nd_options_section nd_options_margin_0"><?php _e('Custom Post Types','nd-shortcodes'); ?></h2>
            <p class="nd_options_color_666666 nd_options_section nd_options_margin_0 nd_options_margin_top_10"><?php _e('Add some custom post types on your theme','nd-shortcodes'); ?></p>
          </div>
          <div class="nd_options_width_60_percentage nd_options_padding_20 nd_options_box_sizing_border_box nd_options_float_left">
            
            <label class="nd_options_section"><input <?php if( get_option('nd_options_locations_enable') == 1 ) { echo 'checked="checked"'; } ?> name="nd_options_locations_enable" type="checkbox" value="1"> <?php _e('Locations','nd-shortcodes'); ?></label>

          </div>
        </div>
        <!--END-->



        <div class="nd_options_section nd_options_height_1 nd_options_background_color_E7E7E7 nd_options_margin_top_10 nd_options_margin_bottom_10"></div>


        <!--START-->
        <div class="nd_options_section">
          <div class="nd_options_width_40_percentage nd_options_padding_20 nd_options_box_sizing_border_box nd_options_float_left">
            <h2 class="nd_options_section nd_options_margin_0"><?php _e('Customizer','nd-shortcodes'); ?></h2>
            <p class="nd_options_color_666666 nd_options_section nd_options_margin_0 nd_options_margin_top_10"><?php _e('Check for Enable Customizer with all plugin settings','nd-shortcodes'); ?></p>
          </div>
          <div class="nd_options_width_60_percentage nd_options_padding_20 nd_options_box_sizing_border_box nd_options_float_left">
            
            <label class="nd_options_section"><input <?php if( get_option('nd_options_customizer_enable') == 1 ) { echo 'checked="checked"'; } ?> name="nd_options_customizer_enable" type="checkbox" value="1"> <?php _e('Enable','nd-shortcodes'); ?></label>

          </div>
        </div>
        <!--END-->


        <div class="nd_options_section nd_options_padding_left_20 nd_options_padding_right_20 nd_options_box_sizing_border_box">
          <?php submit_button(); ?>
        </div>
      


      </div>
      <!--END content-->


    </div>

  </div>
</form>
<?php } 
/*END 1*/




//include all options
foreach ( glob ( plugin_dir_path( __FILE__ ) . "*/index.php" ) as $file ){
  include_once $file;
}


//hook
do_action('nd_options_create_new_admin_setting_page');
