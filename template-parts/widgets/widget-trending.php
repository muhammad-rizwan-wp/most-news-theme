<ul class="mn-trending-posts-widget">
    <?php 
        $query = new WP_Query([
            'posts_per_page' => 5,
            'orderby' => 'comment_count'
        ]);

        while($query->have_posts()): $query->the_post();?>
            <li>
                <a href="<?php the_permalink(  ); ?>">
                    <?php the_title(  ); ?>
                </a>
            </li>
        <?php endwhile; wp_reset_postdata(  ); ?>
</ul>