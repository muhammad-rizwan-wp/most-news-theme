<?php 

    if (!defined('ABSPATH')) exit;

/**
 * Calculate reading time
*/

function mn_get_reading_time($post_id = null){

    $post = get_post($post_id);

    if(!$post) return '';

    $word_count = str_word_count(strip_tags($post->post_content));
    $minutes = ceil($word_count/200);

    return sprintf(
        esc_html__( '%d min read', 'most-news' ),
        $minutes
    );
}

?>