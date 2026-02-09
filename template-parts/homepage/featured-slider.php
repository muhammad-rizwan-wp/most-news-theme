<?php 

    $featured = mn_get_featured_posts();

    if($featured->have_posts()):
        ?>
        <section class="mn-featured-slider container">
            <?php 
                while($featured->have_posts(  )): $featured->have_posts();
            ?>
                <article class="slide">
                    <a href="<?php the_permalink(  ); ?>">
                        <?php the_post_thumbnail( 'large' ); ?>
                        <h2>
                            <?php 
                                the_title(  );
                            ?>
                        </h2>
                    </a>
                </article>
            <?php 
                endwhile;
                wp_reset_postdata(  );
            ?>
        </section>
    <?php endif;
?>