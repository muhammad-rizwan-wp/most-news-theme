<?php get_header(); ?>

<?php
    mn_breadcrumbs();
?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        the_title('<h2>', '</h2>');
        the_content();
    endwhile;
endif;
?>

<?php get_footer(); ?>