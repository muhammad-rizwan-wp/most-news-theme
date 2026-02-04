<?php
if (!defined('ABSPATH')) exit;

/**
 * Get selected header layout
*/

function mn_get_header_layout() {
    return get_theme_mod( 'mn_header_layout', 'classic' );
}

/**
 * Check sticky header
*/

function mn_is_sticky_header(){
    return get_theme_mod( 'mn_sticky_header', true );
}

/**
 * Breaking News Query
*/

function mn_get_breaking_news(){

    return new WP_Query([
        'post_per_page' => 5,
        'post_type' => ['post', 'news'],
        'meta_key' => 'mn_breaking_news',
        'meta_value' => '1'
    ]);
    
}