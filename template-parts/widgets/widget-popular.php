<ul class="mn-popular-post-widget">
    <?php 
        $query = new WP_Query([
            'posts_per_page' => 5,
            'meta_key' => 'mn_post_views',
            'orderby' => 'meta_value_num',
            'order' => 'DESC'
        ]);

        while($query->have_posts()): $query->the_post();?>
            <li>
                <a href="<?php the_permalink(  ); ?>">
                    <?php the_title(  ); ?>
                </a>
            </li>
        <?php endwhile; wp_reset_postdata(  ); ?>
</ul>