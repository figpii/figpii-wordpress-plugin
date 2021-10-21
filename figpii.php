<?php
/**
* Plugin Name: FigPii
* Plugin URI: https://figpii.com
* Description: FigPii integration for WordPress.
* Author: FigPii Development
* Author URI: https://github.com/figpii
* Version: 2.0
* Text Domain: figpii
* Domain Path: /languages/
*
* License: GNU General Public License v3.0
* License URI: http://www.gnu.org/licenses/gpl-3.0.html
*
* @package   FigPii
* @author    FigPii Development
* @category  Analytics
* @copyright FigPii
* @license   http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License v3.0
*/

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

require_once plugin_dir_path( __FILE__ ) . 'classes/class-figpii-connector.php';

/**
* # FigPii Main Plugin Class
*
* ## Plugin Overview
*
* Integrate FigPii ALL-IN-ONE CRO platform with your WordPress site in 2 clicks. all you need to do is retrieve your access key from * https://figpii.com/dashboard and activate the plugin.
*
*/
class WP_Figpii {
  /** plugin version number */
  public static $version = '2.0';

  /** @var string the plugin file */
  public static $plugin_file = __FILE__;

  /** @var string the plugin file */
  public static $plugin_dir;

  /**
  * Initializes the plugin
  *
  * @since 2.0
  */
  public static function init() {
    self::$plugin_dir = dirname(__FILE__);

    $connector = new Figpii_Connector();
    $connector->load();

    // Load translation files
    add_action('plugins_loaded', __CLASS__ . '::load_plugin_textdomain');
  }
}

WP_Figpii::init();
