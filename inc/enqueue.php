<?php
if (!defined('ABSPATH')) exit;

/**
 * Enqueue CSS & JS
 */

function mm_enqueue_assets() {

    wp_enqueue_style( 
        'mm-main-css',
        MN_THEME_URI . '/assets/css/main.css',
        [],
        '1.0.0'
     );

    wp_enqueue_script( 
        'mm-main-js',
        MN_THEME_URI . '/assets/js/main.js',
        ['jquery'],
        '1.0.0'
     );
}

add_action('wp_enqueue_scripts', 'mn_enqueue_assets');