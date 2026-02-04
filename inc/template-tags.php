<?php
if (!defined('ABSPATH')) exit;

/**
 * Post meta: date + author
 */

function mn_post_meta() {
    echo '<span class="post-date">' . esc_html( get_the_date(  ) ) . '</span>';
    echo ' | ';
    echo '<span class="post-author">'  . esc_html( get_the_author(  ) ) . '</span>';
}