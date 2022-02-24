<?php
/*
Plugin Name:       Cost Calculator
Description:       The plugin is used to create Cost Calculator. To get started: 1) Click the "Activate" link to the left of this description. 2) Follow the documentation on the plugin page for installation for use the plugin in the better way.
Version:           1.6
Plugin URI:        https://nicdark.com
Author:            Nicdark
Author URI:        https://nicdark.com
License:           GPLv2 or later
*/

///////////////////////////////////////////////////TRANSLATIONS///////////////////////////////////////////////////////////////

//translation
function nd_cc_load_textdomain()
{
  load_plugin_textdomain("nd-projects", false, dirname(plugin_basename(__FILE__)) . '/languages');
}
add_action('plugins_loaded', 'nd_cc_load_textdomain');


///////////////////////////////////////////////////CSS STYLE///////////////////////////////////////////////////////////////

//add custom css
function nd_cc_scripts() {
  
  //basic css plugin
  wp_enqueue_style( 'nd_cc_style', esc_url(plugins_url('assets/css/style.css', __FILE__ )) );

  wp_enqueue_script('jquery');
  
}
add_action( 'wp_enqueue_scripts', 'nd_cc_scripts' );


//START add admin custom css
function nd_cc_admin_style() {
  
  wp_enqueue_style( 'nd_cc_admin_style', esc_url(plugins_url('assets/css/admin-style.css', __FILE__ )), array(), false, false );
  
}
add_action( 'admin_enqueue_scripts', 'nd_cc_admin_style' );
//END add custom css


///////////////////////////////////////////////////GET TEMPLATE ///////////////////////////////////////////////////////////////

//single Cpt 1
function nd_cc_get_cpt_1_template($nd_cc_single_cpt_1_template) {
     global $post;

     if ($post->post_type == 'nd_cc_cpt_1') {
          $nd_cc_single_cpt_1_template = dirname( __FILE__ ) . '/templates/single-cpt-1.php';
     }
     return $nd_cc_single_cpt_1_template;
}
add_filter( 'single_template', 'nd_cc_get_cpt_1_template' );


//single Cpt 2
function nd_cc_get_cpt_2_template($nd_cc_single_cpt_2_template) {
     global $post;

     if ($post->post_type == 'nd_cc_cpt_2') {
          $nd_cc_single_cpt_2_template = dirname( __FILE__ ) . '/templates/single-cpt-2.php';
     }
     return $nd_cc_single_cpt_2_template;
}
add_filter( 'single_template', 'nd_cc_get_cpt_2_template' );


//update theme options
function nd_cc_theme_setup_update(){
    update_option( 'nicdark_theme_author', 0 );
}
add_action( 'after_switch_theme' , 'nd_cc_theme_setup_update');


///////////////////////////////////////////////////CPT///////////////////////////////////////////////////////////////
foreach ( glob ( plugin_dir_path( __FILE__ ) . "inc/cpt/*.php" ) as $file ){
  include_once $file;
}


///////////////////////////////////////////////////ADDONS ///////////////////////////////////////////////////////////////
foreach ( glob ( plugin_dir_path( __FILE__ ) . "addons/*/index.php" ) as $file ){
  include_once $file;
}


///////////////////////////////////////////////////FUNCTIONS///////////////////////////////////////////////////////////////
require_once dirname( __FILE__ ) . '/inc/functions/functions.php';


///////////////////////////////////////////////////METABOX ///////////////////////////////////////////////////////////////
foreach ( glob ( plugin_dir_path( __FILE__ ) . "inc/metabox/*.php" ) as $file ){
  include_once $file;
}


///////////////////////////////////////////////////PLUGIN SETTINGS ///////////////////////////////////////////////////////////
require_once dirname( __FILE__ ) . '/inc/admin/plugin-settings.php';


//function for get plugin version
function nd_cc_get_plugin_version(){

    $nd_cc_plugin_data = get_plugin_data( __FILE__ );
    $nd_cc_plugin_version = $nd_cc_plugin_data['Version'];

    return $nd_cc_plugin_version;

}



///////////////////////////////////////////////////WELCOME PAGE///////////////////////////////////////////////////////////


//create transient
register_activation_hook( __FILE__, 'nd_cc_welcome_set_trans' );
function nd_cc_welcome_set_trans(){ if ( ! is_network_admin() ) { set_transient( 'nd_cc_welcome_page_redirect', 1, 30 ); } }

//create page
add_action('admin_menu', 'nd_cc_create_welcome_page');
function nd_cc_create_welcome_page() {
    add_submenu_page( 'nd-projects-settings','About', __('About','nd-projects'), 'edit_theme_options', 'nd-cc-welcome-theme-page', 'nd_cc_welcome_page_content' );
}

//set redirect
add_action( 'admin_init', 'nd_cc_welcome_theme_page_redirect' );
function nd_cc_welcome_theme_page_redirect() {

    if ( ! get_transient( 'nd_cc_welcome_page_redirect' ) ) { return; }
    delete_transient( 'nd_cc_welcome_page_redirect' );
    if ( is_network_admin() ) { return; }
    wp_safe_redirect( add_query_arg( array( 'page' => 'nd-cc-welcome-theme-page' ), esc_url( admin_url('admin.php') ) ) );
    exit;

}

//page content
function nd_cc_welcome_page_content(){
    
    $nicdark_welcome_color_1 = '#2d2d2de6';
    $nicdark_welcome_color_2 = '#2d2d2de6';

    echo '

    <style>
        #setting-error-tgmpa { display:none !important; }
    </style>

    <div style="position: relative; margin: 25px 40px 0 20px; max-width: 1050px; font-size: 15px; display: block;">
    
        <div style="float:left; width:100%; padding-right:200px; box-sizing:border-box;">
            <h1 style="margin:0px; margin: .2em 200px 0 0; padding: 0; color: #32373c; line-height: 1.2; font-size: 2.8em; font-weight: 400;">'.esc_html__( 'Thanks by Nicdark Themes', 'nd-projects' ).'</h1>                
            <p style="color:#555d66; font-weight: 400; line-height: 1.6; font-size: 19px;">'.esc_html__( 'We develop FREE', 'nd-projects' ).' <a target="_blank" href="https://profiles.wordpress.org/nicdark/#content-plugins">'.esc_html__( 'WordPress Plugins', 'nd-projects' ).'</a> '.esc_html__( 'and Premium', 'nd-projects' ).' <a target="_blank" href="https://1.envato.market/P9jZN">'.esc_html__( 'WordPress Themes', 'nd-projects' ).'</a> '.esc_html__( 'that you can check through our ThemeForest profile. If you have a minute, take a look at our projects', 'nd-projects' ).' :)</p>
        </div>

        <img style="position: absolute;right: 0px;width: 110px;top: 20px;" src="https://secure.gravatar.com/avatar/0229d779828e62328bbdbe168118a84a?s=200&d=mm&r=g">
        
        <div style="float:left; width:100%;">
            <h3 style="margin-top:30px; margin: 1.25em 0 .6em; font-size: 1.4em; line-height: 1.5;">'.esc_html__( 'Stay Tuned :', 'nd-projects' ).'</h3>
            <p style="line-height: 1.5; font-size: 16px;">'.esc_html__( 'Follow the video below to understand in few simple steps how to create your first cost calculator. I advise you to subscribe to our YouTube Channel in order to stay up to date on new features and tutorials to use this plugin in the best possible way !', 'nd-projects' ).'</p>
        </div>

        <div style="float:left; width:100%;">

            <div style="float:left; width:100%;">

                <div style="float:left; width:25%;">
                    <p style="line-height: 1.5; font-size: 16px; display:inline-block; margin-right: 10px;">
                        <strong>1 : </strong> 
                        '.esc_html__( 'Subscribe', 'nd-projects' ).'

                        <script src="https://apis.google.com/js/platform.js"></script>
                        <div class="g-ytsubscribe" data-channel="newgraphicses" data-layout="default" data-count="hidden"></div>
                        
                    </p>
                </div>
                <div style="float:left; width:25%;">
                    <p style="line-height: 1.5; font-size: 16px;"><strong>2 : </strong> '.esc_html__( 'Enable Notifications', 'nd-projects' ).'</p>
                </div>
                <div style="float:left; width:25%;">
                    <p style="line-height: 1.5; font-size: 16px;"><strong>3 : </strong> '.esc_html__( 'Check Videos', 'nd-projects' ).'</p>
                </div>
                <div style="float:left; width:25%;">
                    <p style="line-height: 1.5; font-size: 16px;"><strong>4 : </strong> '.esc_html__( 'Enjoy It :)', 'nd-projects' ).'</p>
                </div>
                
            </div>


            <div style="float:left; width:100%; margin-top:20px;">
                
                <div style="float:left; width:50%; padding-right:15px; box-sizing:border-box;">
                    
                    <div style="float:left; width:100%; position:relative; height:287px;">
                        
                        <div style="background-image:url('.esc_url(plugins_url('/assets/img/video.jpg', __FILE__ )).'); background-size: cover; float: left;width: 100%;position: absolute;height: 100%;top: 0px; left: 0px; ">

                            <div style="background: '.$nicdark_welcome_color_1.'; background: -moz-linear-gradient(45deg, '.$nicdark_welcome_color_1.' 0%, '.$nicdark_welcome_color_2.' 100%); background: -webkit-linear-gradient(45deg, '.$nicdark_welcome_color_1.' 0%,'.$nicdark_welcome_color_2.' 100%); background: linear-gradient(45deg, '.$nicdark_welcome_color_1.' 0%,'.$nicdark_welcome_color_2.' 100%); width: 100%;height: 100%;display: table;text-align: center;">
                                <div style="display: table-cell; vertical-align: middle;">
                                    <a style="text-decoration:none; margin:0px; padding:0px;" target="_blank" href="https://youtu.be/4NVsiLfQv98"><h3 style="color:#fff; margin:0px; padding;0px; display: inline-block; border-bottom:2px solid #fff;">'.esc_html__( 'Video Tutorial', 'nd-projects' ).'</h3></a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div style="float:left; width:50%; padding-left:15px; box-sizing:border-box;">
                    
                    <div style="float:left; width:100%; position:relative; height:287px;">
                        
                        <div style=" background-image:url('.esc_url(plugins_url('/assets/img/themes.jpg', __FILE__ )).'); background-size: cover; float: left;width: 100%;position: absolute;height: 100%;top: 0px; left: 0px; ">

                            <div style=" width: 100%;height: 100%;display: table;text-align: center; background: '.$nicdark_welcome_color_1.'; background: -moz-linear-gradient(45deg, '.$nicdark_welcome_color_1.' 0%, '.$nicdark_welcome_color_2.' 100%); background: -webkit-linear-gradient(45deg, '.$nicdark_welcome_color_1.' 0%,'.$nicdark_welcome_color_2.' 100%); background: linear-gradient(45deg, '.$nicdark_welcome_color_1.' 0%,'.$nicdark_welcome_color_2.' 100%);">
                                <div style="display: table-cell; vertical-align: middle;">
                                    <a style="text-decoration:none; width: 100%; float: left; margin:0px; padding:0px;" target="_blank" href="https://1.envato.market/P9jZN"><h3 style="color:#fff; margin:0px; padding;0px; display: inline-block; border-bottom:2px solid #fff;">'.esc_html__( 'WP Themes', 'nd-projects' ).'</h3></a>
                                    <div style="float:left; width:100%; height:20px;"></div>
                                    <a style="text-decoration:none; width: 100%; float: left; margin:0px; padding:0px;" target="_blank" href="https://profiles.wordpress.org/nicdark/#content-plugins"><h3 style="color:#fff; margin:0px; padding;0px; display: inline-block; border-bottom:2px solid #fff;">'.esc_html__( 'FREE Plugins', 'nd-projects' ).'</h3></a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div style="float:left; width:100%;">  
            <p style="margin-top:60px; line-height: 1.5; font-size: 16px; color: #777;">'.esc_html__( 'Thank you for choosing us', 'nd-projects' ).',<br>'.esc_html__( 'Nicdark Team', 'nd-projects' ).'</p>
        </div>

    </div>';

}
//END create welcome page on activation

