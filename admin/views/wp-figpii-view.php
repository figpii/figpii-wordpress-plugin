<?php

  // No direct access to this file
  defined( 'ABSPATH' ) or die();

  $default_settings = array('figpii_id' => '', 'disable_for_admin' => 'yes');

  $settings = get_option( 'wp_figpii' );
  $settings = is_array($settings) ? $settings : $default_settings;
?>
<div id="business-info-wrap" class="wrap">

    <img src="https://www.figpii.com/bundles/figpii/images/figpii-logo.png?v1.19.4.2" alt="figpii-logo" width="75" height="auto">

  <hr class="wp-header-end">

  <?php if ( isset( $_GET['settings-updated'] ) ) : ?>

    <div id="message" class="notice notice-success is-dismissible">
      <p><strong><?php esc_html_e( 'Settings saved. ' ); ?></strong><a href="https://www.figpii.com/dashboard">Verify your installation</a></p>
    </div>

  <?php endif; ?>

  <p><?php
    $url = 'https://www.figpii.com/dashboard/account-management';
    $link = sprintf( wp_kses( __( 'Visit your <a href="%s" target="_blank">Figpii dashboard</a> and get your Access Key. <a href="https://kb.figpii.com/article/115-how-to-install-figpii-code-on-wordpress" target="_blank">Step By Step Guide</a>', 'wp-figpii' ), array(  'a' => array( 'href' => array(), 'target' =>  '_blank' ) ) ), esc_url( $url ) );
    echo $link;
  ?></p>

  <form method="post" action="options.php">
    <?php settings_fields( 'wp_figpii' ); ?>

    <table class="form-table">

      <tbody>

        <tr>

          <th scope="row">
            <label for="wp_figpii_id"><?php esc_html_e( 'Figpii Access Key', 'wp-figpii' ); ?></label>
          </th>

          <td>
            <input type="text" name="wp_figpii[figpii_id]" id="wp_figpii_id" value="<?php echo $settings['figpii_id']; ?>" maxlength="100" />
            <p class="description" id="wp_figpii_id_description"><?php esc_html_e( '(Leave blank to disable)', 'wp-figpii' ); ?></p>
          </td>

        </tr>

        <tr>

          <th scope="row">
            <label for="wp_figpii_disable_for_admin"><?php esc_html_e( 'Disable for admin?', 'wp-figpii' ); ?></label>
          </th>

          <td>
            <input type="hidden" name="wp_figpii[disable_for_admin]" value="no">
            <input type="checkbox" name="wp_figpii[disable_for_admin]" id="wp_figpii_disable_for_admin" value="yes" <?php if('yes' === $settings['disable_for_admin']) { ?>checked="checked"<?php } ?> />
          </td>

        </tr>

      </tbody>

    </table>

    <?php submit_button(); ?>

  </form>

</div>
