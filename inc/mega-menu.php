<?php
if (!defined('ABSPATH')) exit;

/**
 * Register Primary Menu
*/

function mn_register_menus(){
    register_nav_menus( [
        'primary' => __('Primary Menu', 'most-news'),
    ]);
}

add_action( 'after_setup_theme', 'mn_register_menus' );

/***********************************************
 * >>> Add custom walker for mega menu
************************************************/

class MN_Mega_Menu_Walker extends Walker_Nav_Menu {

    /*============= START LEVEL =============*/
    function start_lvl(&$output, $depth = 0, $args=[]) {
        
        $indent = str_repeat('\t', $depth);
        $classes = ($depth === 0) ? 'mn-mega-menu' : 'sub-menu';
        $output .= "\n$indent<ul class=\"$classes\"> \n";

    }

    /*============= START ELEMENT =============*/
    function str_el(&$output, $item, $depth = 0, $args = [], $id = 0) {

        $indent = str_repeat('\t', $depth);
        $classes = empty($item->classes) ? [] : (array)$item->classes;
        $classes[] = 'menu-item';

        if(in_array('menu-item-has-children', $classes) && $depth === 0 ){
            $classes[] = 'has-mega-menu';
        }

        $class_names = implode(' ', array_map('sanitize_html_css', $classes));
        $output .= "$indent<li class=\"$class_names\">";

        $attributes = !empty($item->url) ? ' href="' . esc_attr( $item->url ) .'"' : '';
        $title = apply_filters( 'the_title', $item->title, $item->ID );

        $output .= '<a>' . $attributes . '>' .$title . '</a>';
    }

    /*============= END ELEMENT =============*/
    function end_el(&$output, $item, $depth = 0, $args=[]) {
        $output .= "</li>\n";
    }

    /*============= END LEVEL =============*/
    function end_lvl(&$output, $depth = 0, $args=[]) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }
}