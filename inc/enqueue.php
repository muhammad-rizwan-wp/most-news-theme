<?php
if (!defined('ABSPATH')) exit;

/**
 * Enqueue CSS & JS
 */

function mn_enqueue_assets() {

    wp_enqueue_style( 
        'mm-main-css',
        MN_THEME_URI . '/assets/css/main.css',
        [],
        '1.0.0'
    );

    wp_enqueue_style(
        'mn-header-css',
        MN_THEME_URI . '/assets/css/header.css',
        [],
        '1.0.0'
    );

    wp_enqueue_script( 
        'mm-main-js',
        MN_THEME_URI . '/assets/js/main.js',
        ['jquery'],
        '1.0.0'
    );

    wp_enqueue_script(
        'mn-header-js',
        MN_THEME_URI . '/assets/js/header.js',
        [],
        '1.0.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'mn_enqueue_assets');