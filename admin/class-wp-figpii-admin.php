<?php

// No direct access to this file
defined( 'ABSPATH' ) or die();

class Wp_Figpii_Admin {
  public function create_nav_page() {
    add_menu_page(
      esc_html__( 'Figpii', 'wp-figpii' ), 
      esc_html__( 'Figpii', 'wp-figpii' ), 
      'manage_options',
      'wp_figpii_settings',
      'Wp_Figpii_Admin::build_view',
      'dashicons-editor-code'
    );
  }

  public function register_my_setting() {
    register_setting( 'wp_figpii', 'wp_figpii' );
  }

  public static function build_view() {
    require_once plugin_dir_path( __FILE__ ) . 'views/wp-figpii-view.php';
  }
}
?>
