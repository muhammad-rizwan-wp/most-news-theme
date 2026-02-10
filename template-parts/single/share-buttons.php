<?php 

    $url = urlencode(get_permalink(  ));
    $title = urlencode(get_the_title(  ));
?>

<div class="mn-share-buttons">
    <span>
        <?php esc_html_e( "Share: ", "most-news" ); ?>
    </span>

    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>" target="_blank" rel="noopener">
        Facebook
    </a>

    <a href="https://twitter.com/intent/tweet?url=<?php echo $url; ?>&text=<?php echo $title; ?>" target="_blank" rel="noopener">
        Twitter
    </a>

    <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $url; ?>" target="_blank" rel="noopener">
        LinkedIn
    </a>
</div>