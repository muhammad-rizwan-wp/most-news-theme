<?php
if (!defined('ABSPATH')) exit;

/**
 * Customizer: Dark Mode default
*/

function mn_dark_mode_customizer($wp_customize) {

    $wp_customize->add_section('mn_dark_mode', [
        'title' => __('Dark Mode', 'most-news'),
        'priority' => 25,
    ]);

    $wp_customize->add_setting('mn_dark_mode_default', [
        'default' => false,
        'sanitize_callback' => 'wp_validate_boolean',
    ]);

    $wp_customize->add_control('mn_dark_mode_default', [
        'label' => __('Enable Dark Mode by Default', 'most-news'),
        'section' => 'mn_dark_mode',
        'type' => 'checkbox',
    ]);
}

add_action( 'customize_register', 'mn_dark_mode_customizer');

function mn_dark_mode_body_class($classes) {
    $default = get_theme_mod('mn_dark_mode_default', false);
    if ($default) $classes[] = 'mn-dark-mode';
    return $classes;
}
add_filter('body_class', 'mn_dark_mode_body_class');