<?php 
    get_header(  );
?>

<div class="container">
    <main class="site-main">
        <?php 
            if(have_posts(  )):
                while(have_posts(  )): the_post(  );
                    get_template_part(  'template-parts/content', get_post_type(  ) );
                endwhile;

                the_posts_pagination(  );
            endif;
        ?>
    </main>
</div>

<?php 
    get_footer(  );
?>