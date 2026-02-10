<?php

    $cat = get_queried_object();

    $query = new WP_Query([
        'cat' => $cat->term_id,
        'posts_per_page' => 10,
        'offset' => 6
    ]);

    if ($query->have_posts()) : ?>

    <section class="mn-category-list">
        <ul>
            <?php while($query->have_posts()): $query->the_post(); ?>
                <li>
                    <a href="<?php the_permalink(  ); ?>" style="color: var(--cat-color);">
                        <?php the_title(  ); ?>
                    </a>
                </li>
            <?php endwhile; wp_reset_postdata(  ); ?>
        </ul>
    </section>
    <?php endif; ?>