<?php 
    $cat = get_queried_object(  );

    $query = new WP_Query([
        'cat' => $cat->term_id,
        'posts_per_page' => 6
    ]);

    if($query->have_posts(  )): ?>
    
        <section class="mn_category_grid">
            <div class="grid">
                <?php while($query->have_posts()): $query->the_post(); ?>
                    <article class="grid-item">
                        <a href="<?php the_permalink(  ); ?>">
                            <?php the_post_thumbnail( 'medium' ); ?>
                            <h3 style="color: var(--cat-color);">
                                <?php the_title(); ?>
                            </h3>
                        </a>
                    </article>
                <?php endwhile; wp_reset_postdata(  ); ?>
            </div>
        </section>
    <?php endif; ?>