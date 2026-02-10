<?php 
    $category = get_queried_object(  );
?>

<section class="mn-category-hero" style="border-left: 5px solid var(--cat-color);">
    <h1>
        <?php 
            echo esc_html( $category->name );
        ?>
    </h1>
    <?php 
        if($category->description): ?>
            <p>
                <?php 
                    echo esc_html( $category->description );
                ?>
            </p>
        <?php endif;
    ?>
</section>