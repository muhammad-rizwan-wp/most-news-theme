<?php 
    get_header(  );

    $category_color = mn_get_category_color();
?>

<div class="mn-category-archive" style="--cat-color: <?php echo esc_attr( $category_color ); ?>;">


    <!-- Hero Block --> 
    <?php 
        get_template_part( 'template-parts/category/category', 'hero' );
    ?>

    <!-- Grid Block --> 
    <?php 
        get_template_part( 'template-parts/category/category', 'grid' );
    ?>

</div>

<?php 
    get_footer(  );
?>