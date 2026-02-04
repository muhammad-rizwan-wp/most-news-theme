<?php
if (!defined('ABSPATH')) exit;

/**
 * Theme Customizer
 */

function mn_customizer_register($wp_customize) {

    /* ========== Layout Section ==========*/
    $wp_customize->add_section('mn_layout_section', [
        'title' => __('Layout Settings', 'most-news'),
        'priority' => 30
    ]);

    $wp_customize->add_setting('mn_site_width', [
        'default' => 'full',
        'sanitize_callback' => 'sanitize_text_field'
    ]);

    $wp_customize->add_control('mn_site_width', [
        'label' => __('Site Width', 'most-news'),
        'section' => 'mn_layout_section',
        'type' => 'select',
        'choices' => [
            'full' => __('Full Width', 'most-news'),
            'boxed' => __('Boxed', 'most-news'),
        ]
    ]);

    /* ========== Header Settings ==========*/
    $wp_customize->add_section('mn_header_section', [
        'title' => __('Header Settings', 'most-news'),
        'priority' => 20,
    ]);

    $wp_customize->add_setting('mn_header_layout', [
        'default' => 'classic',
        'sanitize_callback' => 'sanitize_text_field'
    ]);

    $wp_customize->add_control('mn_header_layout', [
        'label' => __('Header Layout', 'most-news'),
        'section' => 'mn_header_section',
        'type' => 'select',
        'choices' => [
            'classic' => __('Classic', 'most-news'),
            'centered' => __('Centered', 'most-news'),
            'minimal' => __('Minimal', 'most-news')
        ],
    ]);

    /* ========== Sticky Header ==========*/
    $wp_customize->add_setting('mn_sticky_header', [
        'default' => true,
        'sanitize_callback' => 'wp_validate_boolean'
    ]);

    $wp_customize->add_control('mn_sticky_header', [
        'label' => __('Enable Sticky Header', 'most-news'),
        'section' => 'mn_header_section',
        'type' => 'checkbox',
    ]);

    /* ========== Breaking News ==========*/
    $wp_customize->add_setting('mn_breaking_news', [
        'default' => true,
        'sanitize_callback' => 'wp_validate_boolean'
    ]);

    $wp_customize->add_control('mn_breaking_news', [
        'label' => __('Enable Breaking News', 'most-news'),
        'section' => 'mn_header_section',
        'type' => 'checkbox',
    ]);
}

add_action( 'customize_register', 'mn_customizer_register' );