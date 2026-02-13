<?php
if (!defined('ABSPATH')) exit;

/**
 * Add schema markup in head
*/

function mn_add_schema() {
    
    if(is_single(  )) {
        global $post;
        $author_id = $post->post_author;
        $schema = [
            "@context" => "https://schema.org",
            "@type" => "NewsArticle",
            "headline" => get_the_title(  ),
            "image" => get_the_post_thumbnail_url( $post, 'full' ),
            "datePublished" => get_the_date('c'),
            "dateModified" => get_the_modified_date('c'),
            "author" => [
                "@type" => "Person",
                "name" => get_the_author_meta('display_name', $author_id),
            ],
            "publisher" => [
                "@type" => "Organization",
                "name" => get_bloginfo( 'name' ),
                "logo" => [
                    "@type" => "ImageObject",
                    "url" => get_theme_mod('custom-logo') ? wp_get_attachment_image(get_theme_mod('custom_logo'),'full') : '',
                ],
            ],
             "description" => get_the_excerpt(),
        ];
        echo '<script type="application/ld+json">' . wp_json_encode($schema) . '</script>';
    }
}

add_action('wp_head', 'mn_add_schema', 1);

/**
 * Add Open Graph and Twitter meta tags
*/

function mn_add_social_meta(){
    if(is_single(  )) {
        global $post;
        ?>
        <!-- Open Graph --> 
        <meta property="og:title" content="<?php echo esc_attr( get_the_title( )); ?>" />
        <meta property="og:description" content="<?php echo esc_attr( get_the_excerpt( )); ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo esc_url( get_permalink( )); ?>" />
        <meta property="og:image" content="<?php echo esc_url( get_the_post_thumbnail( $post,'full' ) ); ?>" />

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="<?php echo esc_attr(get_the_title()); ?>" />
        <meta name="twitter:description" content="<?php echo esc_attr(get_the_excerpt()); ?>" />
        <meta name="twitter:image" content="<?php echo esc_url(get_the_post_thumbnail_url($post,'full')); ?>" />
        <?php
    }
}
add_action('wp_head', 'mn_add_social_meta', 1);

/**
 * Filter title for custom SEO support
*/

function mn_filter_wp_title($title){

    if(is_front_page(  )){
        $title = get_bloginfo('name') . '|' . get_bloginfo( 'description' );
    } elseif (is_category(  )) {
        $title = single_cat_title( '', false ) . '|' . get_bloginfo( 'name' );
    } elseif(is_single(  )){
        $title = get_the_title(  ) . '|' . get_bloginfo( 'description' );
    }

    return $title;
}

add_filter( 'wp_title', 'mn_filter_wp_title', 10, 1 );