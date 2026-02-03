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

/*--------------------------------------------------------------
>>> THEME SUPORTS
--------------------------------------------------------------*/
