<?php
if (!defined('ABSPATH')) exit;

/**
 * Add Ad options in Customizer
*/

function mn_ads_customizer($wp_customize) {

    $wp_customize->add_section('mn_ads_section', [
        'title' => __('Ads Settings', 'most-news'),
        'priority' => 30,
    ]);

    /* ============> HEADER AD <============ */
    $wp_customize->add_setting('mn_header_ad', [
        'default' => '',
        'sanitize_callback' => 'wp_kses_post'
    ]);

    $wp_customize->add_control('mn_header_ad', [
        'label' => __("Header Ad", 'most-news'),
        'section' => 'mn_ads_section',
        'type' => 'textarea',
    ]);

    /* ============> SIDEBAR AD <============ */
    $wp_customize->add_setting('mn_sidebar_ad', [
        'default' => '',
        'sanitize_callback' => 'wp_kses_post'
    ]);

    $wp_customize->add_control('mn_sidebar_ad', [
        'label' => __("Sidebar Ad", 'most-news'),
        'section' => 'mn_ads_section',
        'type' => 'textarea',
    ]);

    /* ============> FOOTER AD <============ */
    $wp_customize->add_setting('mn_footer_ad', [
        'default' => '',
        'sanitize_callback' => 'wp_kses_post'
    ]);

    $wp_customize->add_control('mn_footer_ad', [
        'label' => __("Footer Ad", 'most-news'),
        'section' => 'mn_ads_section',
        'type' => 'textarea',
    ]);
}

add_action( 'customize_register', 'mn_ads_customizer' );


/*********************************************
 * >>> Display ad helper
**********************************************/

function mn_display_ad($location = 'header'){

    switch($location){
        case 'header':
            echo get_theme_mod('mn_header_ad');
            break;
        case 'sidebar':
            echo get_theme_mod('mn_sidebar_ad');
            break;
        case 'footer':
            echo get_theme_mod('mn_footer_ad');
            break;
    }
}