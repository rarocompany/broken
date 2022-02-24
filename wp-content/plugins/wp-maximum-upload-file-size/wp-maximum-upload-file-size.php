<?php
/**
* Plugin Name: Wp Maximum Upload File Size
* Description: Wp Maximum Upload File Size will increase upload limit with one click. you can easily increase upload file size according to your need.
* Author: CodePopular
* Author URI: https://codepopular.com
* Plugin URI: https://wordpress.org/plugins/wp-maximum-upload-file-size/
* Version: 1.0.7
* License: GPL2
* Text Domain: wp-maximum-upload-file-size
* Requires at least: 4.0
* Tested up to: 5.9
* Requires PHP: 5.6
* @coypright: -2021 CodePopular (support: info@codepopular.com)
*/

define('WMUFS_PLUGIN_FILE', __FILE__);
define('WMUFS_PLUGIN_BASENAME', plugin_basename(__FILE__));
define('WMUFS_PLUGIN_PATH', trailingslashit(plugin_dir_path(__FILE__)));
define('WMUFS_PLUGIN_URL', trailingslashit(plugins_url('/', __FILE__)));
define('WMUFS_PLUGIN_VERSION', '1.0.7');

/**
 * Increase maximum execution time.
 * Default 600.
 */

$wmufs_get_max_execution_time = get_option('wmufs_maximum_execution_time') != '' ? get_option('wmufs_maximum_execution_time') : ini_get('max_execution_time');
set_time_limit($wmufs_get_max_execution_time);


/**----------------------------------------------------------------*/
/* Include all file
/*-----------------------------------------------------------------*/

/**
 *  Load all required files.
 */
include_once(WMUFS_PLUGIN_PATH . 'inc/class-wmufs-loader.php');

if ( function_exists( 'wmufs_run' ) ) {
  wmufs_run();
}


