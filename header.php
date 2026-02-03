<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container">

            <!-- LOGO -->
            <div class="site-logo">
                <?php 
                    if(has_custom_logo(  )) {
                        the_custom_logo(  );
                    } else {
                        bloginfo( 'name' );
                    }
                ?>
            </div>

            <!-- MAIN MENU -->
            <nav class="main-navigation">
                <?php 
                    wp_nav_menu( [
                        'theme_location'    => 'primary',
                        'container'         => false,
                        'fallback_cb'       => false,
                    ] );
                ?>
            </nav>
        </div>
    </header>