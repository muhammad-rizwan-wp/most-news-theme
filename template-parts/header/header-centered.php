<div class="mn-header-centered container">

    <div class="logo-center">
        <?php 
            the_custom_logo(); 
        ?>
    </div>

    <nav class="main-navigation">
        <?php 
            wp_nav_menu(['theme_location' => 'primary']); 
        ?>
    </nav>

</div>