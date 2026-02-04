<?php
if (!defined('ABSPATH')) exit;

/**
 * News Post Type
 */

function mn_register_news_cpt(){

    register_post_type( 
        'news',
        [
            'labels' => [
                'name' => __('News', 'most-news'),
                'singular_name' => __('News Article', 'most-news'),
            ],
            'public' => true,
            'menu_icon' => 'dashicons-megaphone',
            'has_archive' => true,
            'rewrite' => ['slug' => 'news'],
            'supports' => [
                'title',
                'editor',
                'thumbnail',
                'author',
                'excerpt',
                'comments',
            ]
        ]
     );
}

add_action('init', 'mn_register_news_cpt');