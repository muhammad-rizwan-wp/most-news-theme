<?php 

wp_nav_menu( [
    'theme_location' => 'primary',
    'menu_class' => 'mn-primary-menu',
    'container' => 'nav',
    'container_class' => 'mn-nav',
    'walker' => new MN_Mega_Menu_Walker(),
] );