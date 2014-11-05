<?php
/**
 * Plugin Name: Slim Maintenance Mode
 * Plugin URI: https://github.com/wpdocde/slim-maintenance-mode
 * Description: A lightweight solution for scheduled maintenance. Simply activate the plugin and only administrators can see the website.
 * Version: 1.1 
 * Author: Johannes Ries
 * Author URI: http://wpdoc.de
 * Text Domain: slim-maintenance-mode
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /languages
 */

/**
 * Avoid direct calls
*/
defined('ABSPATH') or die("No direct requests for security reasons."); 

/**
 * Activation and deactivation with Cache Support
*/

function slim_maintenance_mode_on_activation()  {
  if ( ! current_user_can( 'activate_plugins' ) )
  return;
  $plugin = isset( $_REQUEST['plugin'] ) ? $_REQUEST['plugin'] : '';
  check_admin_referer( "activate-plugin_{$plugin}" );
  
    // Clear Cachify Cache
    if ( has_action('cachify_flush_cache') ) {
    do_action('cachify_flush_cache');
    }
    
    // Clear Super Cache
    if ( function_exists( 'wp_cache_clear_cache' ) ) {
    ob_end_clean();
    wp_cache_clear_cache();
    }
    
    // Clear W3 Total Cache
    if ( function_exists( 'w3tc_pgcache_flush' ) ) {
    ob_end_clean();
    w3tc_pgcache_flush();
    }
}

function slim_maintenance_mode_on_deactivation() {
  if ( ! current_user_can( 'activate_plugins' ) )
  return;
  $plugin = isset( $_REQUEST['plugin'] ) ? $_REQUEST['plugin'] : '';
  check_admin_referer( "deactivate-plugin_{$plugin}" );
  
    // Clear Cachify Cache
    if ( has_action('cachify_flush_cache') ) {
    do_action('cachify_flush_cache');
    }
    
    // Clear Super Cache
    if ( function_exists( 'wp_cache_clear_cache' ) ) {
    ob_end_clean();
    wp_cache_clear_cache();
    }
    
    // Clear W3 Total Cache
    if ( function_exists( 'w3tc_pgcache_flush' ) ) {
    ob_end_clean();
    w3tc_pgcache_flush();
  }
}

register_activation_hook(   __FILE__, 'slim_maintenance_mode_on_activation' );
register_deactivation_hook( __FILE__, 'slim_maintenance_mode_on_deactivation' );

/**
 * Localization
*/
load_plugin_textdomain( 'slim-maintenance-mode', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 

/**
 * Alert message when active
*/
$smm_active_message = __( '<strong>Maintenance mode</strong> is <strong>active</strong>!', 'slim-maintenance-mode' );
$smm_admin_notice = '<div id="message" class="error fade"><p>' . $smm_active_message . ' <a href="plugins.php#slim-maintenance-mode">' . __( 'Deactivate it, when work is done.', 'slim-maintenance-mode' ) . '</a></p></div>';

if ( is_multisite() && is_plugin_active_for_network( plugin_basename( __FILE__ ) ) )
add_action( 'network_admin_notices', create_function( '', "echo '$smm_admin_notice';" ) ); 
add_action( 'admin_notices', create_function( '', "echo '$smm_admin_notice';" ) ); 
add_filter( 'login_message', create_function( '', "return '<div id=\"login_error\">$smm_active_message</div>';" ) );

/**
 * Maintenance message when active
*/ 
function slim_maintenance_mode()
{
  nocache_headers();
  if(!current_user_can('edit_themes') || !is_user_logged_in()) {
  wp_die( '<h1>' . __( 'Maintenance', 'slim-maintenance-mode' ) . '</h1><p>' . __( 'Please check back soon.', 'slim-maintenance-mode' ) . '</p>', __( 'Maintenance', 'slim-maintenance-mode' ), array('response' => '503'));
  }
}
add_action('get_header', 'slim_maintenance_mode');

?>
