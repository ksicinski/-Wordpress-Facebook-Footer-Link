<?php
/**
 * Plugin Name: Facebook Footer Link
 * Description: Ads a Facebook profile link to the end of post
 * Version: 1.0
 * Author: Krzysztof Siciński
 * Author URI: https://www.fradnet.com
 **/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

//Global Option Variable
$wffl_options = get_option('wffl_settings');

//Load scripts
require_once(plugin_dir_path(__FILE__) . '/includes/facebook-footer-link-scripts.php');

//Load content
require_once(plugin_dir_path(__FILE__) . '/includes/facebook-footer-link-content.php');

if (is_admin()) {
    //Load settings
    require_once(plugin_dir_path(__FILE__) . '/includes/facebook-footer-link-settings.php');
}