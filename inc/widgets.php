<?php
if (!defined('ABSPATH')) exit;

/**
 * Register Sidebars
 */

function mn_register_sidebars () {

    register_sidebar( [
        'name' => __('Main Sidebar', 'most-news'),
        'id' => 'main-sidebar',
        'description' => __('Main news siderbar', 'most-news'),
        'before_widget' => '<section class="widget">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ] );
}

add_action('widgets_init', 'mn_register_sidebars');