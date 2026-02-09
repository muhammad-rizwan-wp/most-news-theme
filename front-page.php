<?php 
    get_header( );
?>

<div class="mn-homepage">

    <!-- Featured Slider -->
    <?php 
        get_template_part( 'template-parts/homepage/featured', 'slider' );
    ?>

    <!-- LATEST NEWS GRID -->
    <?php 
        get_template_part( 'template-parts/homepage/news', 'grid' );
    ?>

    <!-- CATEGORY BLOCKS -->
    <?php 
        $categories = get_categories( ['number' => 3] );

        foreach($categories as $category) :
            set_query_var( 'mn_category', $category );
            get_template_part(  'template-parts/homepage/category', 'block' );
        endforeach;
    ?>
</div>

<?php 
    get_footer(  );
?>