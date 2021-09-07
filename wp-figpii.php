<?php
/**
* Plugin Name: WP Figpii
* Plugin URI: https://github.com/invesp/wp-figpii
* Description: Figpii integration for WordPress.
* Author: FigPii Development
* Author URI: https://github.com/invesp
* Version: 0.0.3
* Text Domain: wp-figpii
* Domain Path: /languages/
*
* License: GNU General Public License v3.0
* License URI: http://www.gnu.org/licenses/gpl-3.0.html
*
* @package   WP-Figpii
* @author    FigPii Development
* @category  Analytics
* @copyright FigPii
* @license   http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License v3.0
*/

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

require_once plugin_dir_path( __FILE__ ) . 'classes/class-wp-figpii-connector.php';

/**
* # WP Figpii Main Plugin Class
*
* ## Plugin Overview
*
* Plugin to connect your site with figpii changing the Figpii Access Key from wp-admin.
* Also it does not connect with Figpii while you are logged.
*
*/
class WP_Figpii {
  /** plugin version number */
  public static $version = '0.0.1';

  /** @var string the plugin file */
  public static $plugin_file = __FILE__;

  /** @var string the plugin file */
  public static $plugin_dir;

  /**
  * Initializes the plugin
  *
  * @since 0.0.1
  */
  public static function init() {
    self::$plugin_dir = dirname(__FILE__);

    $connector = new WP_Figpii_Connector();
    $connector->load();

    // Load translation files
    add_action('plugins_loaded', __CLASS__ . '::load_plugin_textdomain');
  }
}

WP_Figpii::init();
