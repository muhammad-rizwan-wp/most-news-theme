<?php 

$latest = mn_get_latest_posts();

if($latest->have_posts()):
    ?>
    <section class="mn-news-grid container">
        <h2 class="section-title">
            <?php 
                esc_html_e( 'Latest News', 'most-news' );
            ?>
        </h2>

        <div class="grid">
            <?php 
                while($latest->have_posts()): $latest->the_post();
            ?>
                <article class="grid-item">
                    <a href="<?php the_permalink(  ); ?>">
                        <?php the_post_thumbnail( 'medium' ); ?>
                        <h3>
                            <?php 
                                the_title(  );
                            ?>
                        </h3>
                    </a>
                </article>
            <?php endwhile; wp_reset_postdata(  ); ?>
        </div>
    </section>
    
<?php endif; ?>