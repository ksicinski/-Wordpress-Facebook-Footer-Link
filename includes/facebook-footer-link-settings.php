<?php

/**
 * Create menu link
 */
function wffl_options_menu_link()
{
    add_options_page(
        'Facebook Footer Link Options',
        'Facebook Footer Link',
        'manage_options',
        'wffl-options',
        'wffl_options_content'
    );
}

/**
 * Create options
 */
function wffl_options_content()
{
    //Init options global
    global $wffl_options;

    ob_start(); ?>
    <div class="wrap">
        <h2><?php _e('Facebook Footer Link Settings', 'wffl_domain') ?></h2>
        <p><?php _e('Settings for the Facebook Footer Link plugin.', 'wffl_domain') ?></p>
        <form action="options.php" method="post">
            <?php settings_fields('wffl_settings_group'); ?>
            <table class="form-table">
                <tbody>
                <tr>
                    <th scope="row">
                        <label for="wffl_settings[enable]">
                            <?php _e('Enable', 'wffl_domain') ?>
                        </label>
                    </th>
                    <td>
                        <input type="checkbox" name="wffl_settings[enable]" id="wffl_settings[enable]"
                               value="1" <?php checked(1, $wffl_options['enable']); ?> >
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="wffl_settings[facebook_url]">
                            <?php _e('Facebook profile URL ', 'wffl_domain') ?>
                        </label>
                    </th>
                    <td>
                        <input type="url" name="wffl_settings[facebook_url]" id="wffl_settings[facebook_url]"
                               value="<?php echo $wffl_options['facebook_url']; ?>" class="regular-text">
                        <p class="description"><?php _e('Enter your facebook profile URL', 'wffl_domain'); ?></p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="wffl_settings[link_color]">
                            <?php _e('Link Color ', 'wffl_domain') ?>
                        </label>
                    </th>
                    <td>
                        <input type="text" name="wffl_settings[link_color]" id="wffl_settings[link_color]"
                               value="<?php echo $wffl_options['link_color']; ?>" class="regular-text">
                        <p class="description"><?php _e('Enter color or HEX value with a #', 'wffl_domain'); ?></p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="wffl_settings[show_in_feed]">
                            <?php _e('Show in post feed', 'wffl_domain') ?>
                        </label>
                    </th>
                    <td>
                        <input type="checkbox" name="wffl_settings[show_in_feed]" id="wffl_settings[show_in_feed]"
                               value="1" <?php checked(1, $wffl_options['show_in_feed']); ?> >
                    </td>
                </tr>
                </tbody>
            </table>
            <p class="submit">
                <input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Save Changes', 'wffl_domain') ?>">
            </p>
        </form>
    </div>
    <?php
    echo ob_get_clean();
}

add_action('admin_menu', 'wffl_options_menu_link');

/**
 * Register settings
 */
function wffl_register_settings()
{
    register_setting('wffl_settings_group', 'wffl_settings');
}

add_action('admin_init', 'wffl_register_settings');