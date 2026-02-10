<?php 
    get_header(  );
?>

<div class="mn-reading-progress"></div>

<div class="container">
    <main class="mn-single-post">
        <?php 
            while(have_posts(  )):
                the_post(  );
                get_template_part( 'template-parts/single/content', 'single' );
            endwhile;
        ?>
    </main>
</div>

<?php 
    get_footer();
?>