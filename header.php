<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php 
        $header_layout = mn_get_header_layout();
        $sticky_class = mn_is_sticky_header() ? 'mn-sticky-header' : '';
    ?>
    <header class="site-header <?php echo esc_attr( $sticky_class ); ?>">
        <?php 
            get_template_part( 'template-parts/header/header', $header_layout );
        ?>
    </header> 