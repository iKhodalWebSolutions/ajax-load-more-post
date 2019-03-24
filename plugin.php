<?php 
/*
  Plugin Name: Ajax post list widget and shortcode wordpress plugin
  Description: Posts list and grid view as a widget and content block
  Author: iKhodal Web Solution
  Plugin URI: https://www.ikhodal.com/ajax-post-list-widget-and-shortcode-wordpress-plugin
  Author URI: https://www.ikhodal.com
  Version: 2.1 
  Text Domain: richpostslistandgrid
*/ 
  
  
//////////////////////////////////////////////////////
// Defines the constants for use within the plugin. //
////////////////////////////////////////////////////// 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly  


/**
*  Assets of the plugin
*/
$rplg_plugins_url = plugins_url( "/assets/", __FILE__ );

define( 'rplg_media', $rplg_plugins_url ); 

/**
*  Plugin DIR
*/
$rplg_plugin_dir = plugin_basename(dirname(__FILE__));

define( 'rplg_plugin_dir', $rplg_plugin_dir );  

 
/**
 * Include abstract class for common methods
 */
require_once 'include/abstract.php';


///////////////////////////////////////////////////////
// Include files for widget and shortcode management //
///////////////////////////////////////////////////////

/**
 * Register custom post type for shortcode
 */ 
require_once 'include/shortcode.php';

/**
 * Admin panel widget configuration
 */ 
require_once 'include/admin.php';

/**
 * Load Category and Post View on frontent pages
 */
require_once 'include/richpostslistandgrid.php'; 

/**
 * Clean data on activation / deactivation
 */
require_once 'include/activation_deactivation.php';  
 