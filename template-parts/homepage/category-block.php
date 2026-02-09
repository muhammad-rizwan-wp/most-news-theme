<?php 
    $category = get_query_var('mn_category');
    $query = mn_get_category_posts($category->term_id);

    if($query->have_posts()):
        ?>
        <section class="mn-category-block container">
            <h2 class="category-title">
                <a href="<?php echo esc_url(  get_category_link( $category )); ?>">
                    <?php echo esc_html( $category->name ); ?>
                </a>
            </h2>

            <div class="grid">
                <?php 
                    while($query->have_posts()):$query->the_post();
                ?>
                        <article>
                            <a href="<?php the_permalink(  ); ?>">
                                <?php the_post_thumbnail( 'medium' ) ?>
                                <h4>
                                    <?php 
                                        the_title(  );
                                    ?>
                                </h4>
                            </a>
                        </article>
                    <?php endwhile; wp_reset_postdata(  ); ?>
            </div>
        </section>
    <?php endif;
?>