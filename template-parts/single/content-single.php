<article <?php post_class( 'mn-article' ); ?>>
    <!-- Title -->
    <h1 class="mn-post-title">
        <?php the_title(  ); ?>
    </h1>

    <!-- META -->
    <div class="mn-post-meta">
        <span class="date">
            <?php 
                echo esc_html( get_the_date() );
            ?>
        </span>
        <span class="author">
            <?php 
                the_author(  );
            ?>
        </span>
        <span class="reading-time">
            <?php 
                echo mn_get_reading_time(get_the_ID());
            ?>
        </span>
    </div>

    <!-- Featured Image --> 
    <?php 
        if(has_post_thumbnail(  )): ?>
            <div class="mn-post-thumb">
                <?php the_post_thumbnail( 'large' ); ?>
            </div>
        <?php endif;
    ?>

    <!-- Content -->
    <div class="mn-post-content">
        <?php the_content(); ?>
    </div>

    <!-- Share Buttons -->
    <?php 
        get_template_part( 'template-parts/single/share', 'buttons' );
    ?>

    <!-- Author Box -->
    <?php 
        get_template_part( 'template-parts/single/author', 'box' );
    ?>
</article>