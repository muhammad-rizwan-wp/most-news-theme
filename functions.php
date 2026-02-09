<?php
// Exit if accessed directly

if (!defined('ABSPATH')) {
    exit;
}

/*--------------------------------------------------------------
>>> THEME CONSTANTS
--------------------------------------------------------------*/
define('MN_THEME_DIR', get_template_directory());
define('MN_THEME_URI', get_template_directory_uri());

/*--------------------------------------------------------------
>>> INCLUDE CORE FILES
--------------------------------------------------------------*/

require_once MN_THEME_DIR . '/inc/setup.php';
require_once MN_THEME_DIR . '/inc/enqueue.php';
require_once MN_THEME_DIR . '/inc/customizer.php';
require_once MN_THEME_DIR . '/inc/post-types.php';
require_once MN_THEME_DIR . '/inc/widgets.php';
require_once MN_THEME_DIR . '/inc/template-tags.php';
require_once MN_THEME_DIR . '/inc/header.php';
require_once MN_THEME_DIR . '/inc/homepage.php';
