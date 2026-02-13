<?php 

/**
 * Optional template for custom mega menu content
*/

$cat_id = get_post_meta($item->ID, 'mn_mega_category', true);

if($cat_id) {

    $query = new WP_Query(
        [
            'cat' => $cat_id,
            'posts_per_page' => 4
        ]
    );

    if($query->have_posts(  )):
        echo '<div class="mn-mega-menu-inner">';
        while($query->have_posts()) : $query->the_post(  );
            ?>
            <div class="mega-item">
                <a href="<?php the_permalink(  ); ?>">
                    <?php the_post_thumbnail( 'medium' ); ?>
                    <h4>
                        <?php the_title(  ); ?>
                    </h4>
                </a>
            </div>
        <?php endwhile;
        echo '</div>';
        wp_reset_postdata(  );
    endif;
}