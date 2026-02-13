<?php 

if(!function_exists('mn_breadcrumbs')){
    function mn_breadcrumbs(){
        echo '<nav class="mn-breadcrumbs" />';
        echo '<a href="'. home_url(  ) .'">' . __('Home', 'most-news' ). '</a>';

        if(is_category(  ) || is_single(  ) ) {
            $category = get_the_category(  );
            if($category) {
                $cat = $category[0];
                echo ' &gt; <a href="'. get_category_link( $cat->term_id ) .'">' . $cat->name . '</a>';
            }
        }

        if(is_single(  )){
            echo ' &gt; <span>' . get_the_title() . '</span>';
        }

        if(is_page(  )){
            echo ' &gt; <span>' . get_the_title() . '</span>';
        }

        echo '</nav>';
    }
}