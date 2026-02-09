<?php
if (!defined('ABSPATH')) exit;

/**======================================================================================
 * >>> Featured Post Query
=======================================================================================*/

function mn_get_featured_posts ($count = 5) {
    return new WP_Query([
        'post_per_page' => $count,
        'meta_key' => 'mn_featured_post',
        'meta_value' => '1',
    ]);
}

/**======================================================================================
 * >>> Latest Post Query
=======================================================================================*/

function mn_get_latest_posts ($count = 6) {
    return new WP_Query([
        'post_per_page' => $count,
    ]);
}

/**======================================================================================
 * >>> Category Post Query
=======================================================================================*/

function mn_get_category_posts ($cat_id, $count = 4) {
    return new WP_Query([
        'cat' => $cat_id,
        'post_per_page' => $count,
    ]);
}