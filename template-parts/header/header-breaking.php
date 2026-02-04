<?php 
    $query = mn_get_breaking_news();

    if($query->have_posts(  )):
        ?>
        <div class="mn-breaking-news">
            <span class="label">
                <?php 
                    esc_html_e( 'Breaking', 'most-news' );
                ?>
            </span>

            <div class="ticker">
                <?php 
                    while($query->have_posts()) : $query->the_post(  ); ?>
                        <a href="<?php the_permalink(  ); ?>">
                            <?php 
                                the_title(  );
                            ?>
                        </a>
                    <?php endwhile; 
                    wp_reset_postdata(  );
                ?>
            </div>
        </div>
    <?php endif; ?>