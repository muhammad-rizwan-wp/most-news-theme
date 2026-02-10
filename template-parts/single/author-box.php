<div class="mn-author-box">
    <div class="author-avator">
        <?php 
            echo get_avatar( get_the_author_meta( 'ID' ), 100 );
        ?>
    </div>

    <div class="author-info">
        <h4>
            <?php 
                the_author(  );
            ?>
        </h4>
        <p>
            <?php the_author_meta('description'); ?>
        </p>
        <a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
            <?php esc_html_e( 'View all posts', 'most-news' ); ?>
        </a>
    </div>
</div>