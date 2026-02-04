<div class="mn-header-classic container"> 
    <?php 
        if(get_theme_mod('mn_breaking_news', 'true')): ?>
            <?php get_template_part( 'template-parts/header/header', 'breaking' ); ?>
        <?php endif; ?>

        <div class="header-main">
            <div class="logo">
                <?php 
                    if(has_custom_logo(  )) {
                        the_custom_logo(  );
                    } else {
                        bloginfo( 'name' );
                    }
                ?>
            </div>

            <nav class="main-navigation">
                <?php 
                    wp_nav_menu( [
                        'theme_location' => 'primary',
                        'container' => false
                    ] );
                ?>
            </nav>
        </div>
</div>