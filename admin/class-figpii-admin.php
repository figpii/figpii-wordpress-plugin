<?php

// No direct access to this file
defined( 'ABSPATH' ) or die();

class FigPii_Admin {
  public function create_nav_page() {
    add_menu_page(
      esc_html__( 'FigPii', 'figpii' ),
      esc_html__( 'FigPii', 'figpii' ),
      'manage_options',
      'figpii_settings',
      'Figpii_Admin::build_view',
      'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTUiIGhlaWdodD0iMTYiIHZpZXdCb3g9IjAgMCAxNSAxNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE1IDkuNTE0MzRDMTUgMTMuMDI4NiAxMi4zOTY5IDE1LjU0NiA4LjY1NzE0IDE1LjU0NkM0LjkxNzM5IDE1LjU0NiAwIDExLjI4MjcgMCA3LjU0MjkxQzAgMy4zNDI5MSAzIDEuMDI4NjMgNy4wMjg1NyAxLjAyODYzQzEwLjc2ODMgMS4wMjg2MyAxNSAzLjM0MjkxIDE1IDkuNTE0MzRaIiBmaWxsPSIjMjMwQjM2Ii8+CjxwYXRoIGQ9Ik0xMy4yODU3IDBDMTEuNzc3MSAxLjMyNzc0IDkuNDI4NTcgMS4yODU3MSA4LjQ4NTcxIDEuMTE0MjlINy42Mjg1N0wxMy42Mjg2IDQuMzcxNDNDMTMuMjg1NyAzLjEzNzE0IDEzLjgyODYgMS41MTQyOSAxNC4xNDI5IDAuODU3MTQzTDEzLjI4NTcgMFoiIGZpbGw9IiMyMzBCMzYiLz4KPC9zdmc+Cg=='
    );
  }

  public function register_my_setting() {
    register_setting( 'figpii', 'figpii' );
  }

  public static function build_view() {
    require_once plugin_dir_path( __FILE__ ) . 'views/figpii-view.php';
  }
}
?>
