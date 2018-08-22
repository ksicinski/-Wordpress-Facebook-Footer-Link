<?php

/**
 * Add scripts
 */
function wffl_add_scripts(){
    wp_enqueue_style('wffl-main-styles', plugins_url() . '/wordpress-facebook-footer-link/css/styles.css');
    wp_enqueue_script('wffl-main-script', plugins_url() . '/wordpress-facebook-footer-link/js/main.js');
}

add_action('wp_enqueue_scripts', 'wffl_add_scripts');