<article <?php post_class('news-article'); ?>>
    <?php 
        if(has_post_thumbnail(  )): ?>
            <div class="news-thumb">
                <a href="<?php the_permalink(  ); ?>">
                    <?php the_post_thumbnail( 'medium' ); ?>
                </a>
            </div>
            <?php endif; ?>

            <h2 class="news-title">
                <a href="<?php the_permalink(  );?>">
                    <?php the_title(  ); ?>
                </a>
            </h2>

            <div class="news-meta">
                <?php mn_post_meta(); ?>
            </div>

            <div class="news-excerpt">
                <?php the_excerpt(  ); ?>
            </div>
</article>