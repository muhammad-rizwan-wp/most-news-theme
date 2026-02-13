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

    wp_enqueue_style(
        'mn-homepage-css',
        MN_THEME_URI . '/assets/css/homepage.css',
        [],
        '1.0'
    );

    wp_enqueue_style(
        'mn-single-css',
        MN_THEME_URI . '/assets/css/single.css',
        [],
        '1.0'
    );

    wp_enqueue_style(
        'mn-category-css',
        MN_THEME_URI . '/assets/css/category.css',
        [],
        '1.0'
    );

    wp_enqueue_style(
        'mn-widgets-css',
        MN_THEME_URI . '/assets/css/widgets.css',
        [],
        '1.0'
    );

    wp_enqueue_style(
        'mn-dark-mode-css',
        MN_THEME_URI . '/assets/css/dark-mode.css',
        [],
        '1.0'
    );

    wp_enqueue_style(
        'mn-mega-menu-css',
        MN_THEME_URI . '/assets/css/mega-menu.css',
        [],
        '1.0'
    );

    wp_enqueue_style(
        'mn-ads-css',
        MN_THEME_URI . '/assets/css/ads.css',
        [],
        '1.0'
    );

    wp_enqueue_style(
        'mn-breadcrumbs-css',
        MN_THEME_URI . '/assets/css/breadcrumbs.css',
        [],
        '1.0'
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

    wp_enqueue_script(
        'mn-reading-progress',
        MN_THEME_URI . '/assets/js/reading-progress.js',
        [],
        '1.0',
        true
    );

    wp_enqueue_script(
        'mn-dark-mode-js',
        MN_THEME_URI . '/assets/js/dark-mode.js',
        [],
        '1.0',
        true
    );

    wp_enqueue_script(
        'mn-mega-menu-js',
        MN_THEME_URI . '/assets/js/mega-menu.js',
        [],
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'mn_enqueue_assets');