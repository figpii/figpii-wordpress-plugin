<?php

// No direct access to this file
defined('ABSPATH') or die();

$default_settings = array('figpii_id' => '', 'disable_for_admin' => 'yes');

$settings = get_option('wp_figpii');
$settings = is_array($settings) ? $settings : $default_settings;
?>
<div id="business-info-wrap" class="wrap">
    <style>

        input#submit {
            background: #421C59;
            border: none;
            color: #fff;
            padding: 5px 20px;
            margin: 10px 0px;
            border-radius: 20px;
            width: 184px;
            cursor: pointer;
            margin-top: -9px;

            margin-left: -50px;
        }

        p.submit {
            margin-top: -6px !important;
        }

        #wp_figpii_id {
            border: 2px solid #230936;

            border-radius: 24px;
            width: 350px;
            height: 37px;
        }

        .description {
            font-style: normal;
            font-weight: normal;
            font-size: 18px;
            line-height: 154.19%;
            letter-spacing: 0.02em;
            color: #230936;

        }
        .sub-description {
            font-style: normal;
            font-weight: normal;
            font-size: 18px!important;
            line-height: 154.19%;
            letter-spacing: 0.02em;
            color: #230936;
            margin-left: 20px !important;
        }

        .signup_btn > span {
            margin-left: 15px;
            font-size: 15px;
            text-transform: capitalize;
        }

        h2 {
            font-weight: bold;
            font-size: 24px;
            line-height: 154.2%;
            /* identical to box height, or 37px */

            letter-spacing: 0.02em;
            text-transform: capitalize;

            color: #51266D;
        }

        .main-h2 {
            margin-bottom: 0;
        }

        p {
            font-style: normal;
            font-weight: normal;
            font-size: 20px;
            line-height: 31px;
            letter-spacing: 0.02em;

            color: #000000;
        }

        .signup_btn > a {
            background: #12E584;
            border: none;
            color: #fff;
            padding: 10px 20px;
            margin: 10px 0px;
            border-radius: 20px;
            width: 184px;
            cursor: pointer;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
    <img alt="figpii-logo.png"
         src="data:image/png;base64,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">
    <hr class="wp-header-end">

    <?php if (isset($_GET['settings-updated'])) : ?>

        <div id="message" class="notice notice-success is-dismissible">
            <p><strong><?php esc_html_e('Tracking code inserted. '); ?></strong><a
                        href="https://www.figpii.com/dashboard">Visit your dashboard</a></p>
        </div>

    <?php endif; ?>

    <div class="description">
        <h2>Craft A Shopping Experience That Turns Visitors Into Customers</h2>
        <p>Instantly find problematic areas on your website before you lose more potential customers.<br> FigPii
            provides valuable optimization ideas based on how visitors interact with your website.</p>
    </div>

    <h2 class="main-h2">I already have a figPii Account</h2>

    <form method="post" action="options.php">
        <?php settings_fields('wp_figpii'); ?>

        <table class="form-table">

            <tbody>

            <tr>

                <th scope="row" style="display: none">
                    <label for="wp_figpii_id"><?php esc_html_e('Figpii Access Key', 'wp-figpii'); ?></label>
                </th>

                <td>
                    <input type="text" name="wp_figpii[figpii_id]" id="wp_figpii_id"
                           value="<?php echo $settings['figpii_id']; ?>" maxlength="100"/>
                    <p class="sub-description">
                        <a href="https://figpii.com/dashboard/?guide=wordpress" target="_blank">Where's my Access Key?</a>
                    </p>
                    <p style="display: none" class=""
                       id="wp_figpii_id_description"><?php esc_html_e('(Leave blank to disable)', 'wp-figpii'); ?></p>
                </td>
                <td>
                    <?php submit_button($text = 'Connect To FigPii'); ?>
                </td>

            </tr>

            <tr>

                <th scope="row" style="    padding-top: 0px;padding-top: 0px;    padding-left: 32px;   font-size: 18px;    padding-bottom: 0px; color: #230936;">
                    <label for="wp_figpii_disable_for_admin"><?php esc_html_e('Disable for admin?', 'wp-figpii'); ?></label>
                </th>

                <td style="    padding-top: 0px;">
                    <input type="hidden" name="wp_figpii[disable_for_admin]" value="no">
                    <input type="checkbox" name="wp_figpii[disable_for_admin]" id="wp_figpii_disable_for_admin"
                           value="yes"
                           <?php if ('yes' === $settings['disable_for_admin']) { ?>checked="checked"<?php } ?> />
                </td>

            </tr>

            </tbody>

        </table>


        <div class="signup">
            <h2>Don't Have An Account Yet?</h2>
            <div class="signup_btn" style="    margin-left: 20px;">
                <a href="https://figpii.com/register" target="_blank">
                    Start Your Free Trial
                </a>
                <span>14 days free trial</span>
            </div>
        </div>

    </form>

</div>
