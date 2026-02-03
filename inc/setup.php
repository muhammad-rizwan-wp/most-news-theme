<?php
if (!defined('ABSPATH')) exit;

/**
 * Theme setup
 */

function mn_theme_setup() {

    /** Support Features */
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', [
        'height' => 60,
        'width' => 200,
        'flex-width' => true,
    ] );
    add_theme_support( 'custom-header' );
    add_theme_support( 'custom-backgroun' );
    add_theme_support('html5', [
        'search-form', 
        'comment-form', 
        'comment-list', 
        'gallery', 
        'caption'
    ]
    );

    register_nav_menu( [
        'primary' => __('Primary Menu', 'most-news'),
        'secondary' => __('Top Menu', 'most-news'),
        'footer' => __('Footer Menu', 'most-news'),
    ] )

}

add_action('after_setup_theme', 'mn_theme_setup');