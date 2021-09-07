<?php

// No direct access to this file
defined( 'ABSPATH' ) or die();

class WP_Figpii_Connector {
  public function load() {
    $this->load_dependencies();
    $this->load_admin();
    $this->enqueue_script();
  }

  private function load_dependencies() {
    require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-wp-figpii-admin.php';
  }

  private function load_admin() {
    $admin = new Wp_Figpii_Admin();
    add_action( 'admin_init', array( $admin, 'register_my_setting' ) );
    add_action( 'admin_menu', array( $admin, 'create_nav_page' ) );
  }

  public static function build_figpii_script() {
    $settings = get_option( 'wp_figpii' );
    $is_admin = is_admin() || current_user_can('manage_options');

    $figpii_id = trim($settings['figpii_id']);
    if (!$figpii_id) {
      return;
    }

    if (!is_array($settings) || ($is_admin && 'yes' === $settings['disable_for_admin'])) {
      return;
    }

    echo "
      <script id=\"piiTester\" type=\"text/javascript\" async=\"async\" crossorigin=\"anonymous\" src=\"//tracking-cdn.figpii.com/" . $figpii_id . ".js\"></script>
    ";
  }

  private function enqueue_script() {
    add_action( 'wp_head', array($this, 'build_figpii_script') );
  }
}
?>
