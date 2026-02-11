<?php
if (!defined('ABSPATH')) exit;

/**
 * Register Sidebars
 */

function mn_register_widget_areas () {

    register_sidebar( [
        'name' => __('Main Sidebar', 'most-news'),
        'id' => 'main-sidebar',
        'description' => __('Main news siderbar', 'most-news'),
        'before_widget' => '<section class="widget">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ] );

    register_sidebar( [
        'name' => __('Footer Widget 1', 'most-news'),
        'id' => 'footer-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ] );
}

add_action('widgets_init', 'mn_register_widget_areas');


/*****************************************************
* >>> Trending Posts Widget (by comment count)
******************************************************/

class MN_Trending_Widget extends WP_Widget {

    /** Contructor */
    function __construct() {
        parent::__construct(
            'mn_trending_widget',
            __('Trending Posts', 'most-news'),
            ['description' => __('Show posts with highest comment count', 'most-news')]
        );
    }


    public function widget($args, $instance) {
        $title = apply_filters('widget_title', $instance['title']??__('Trending', 'most-news'));
        $count = $instance['count'] ?? 5;

        echo $args['before_widget'];
        if($title) echo $args['before_title'] . $title . $args['after_title'];

        $query = new WP_Query([
            'posts_per_page' => $count,
            'orderby' => 'comment_count',
        ]);

        if($query->have_posts(  )):
            echo '<ul class="mn-trending-posts">';
            while($query->have_posts(  )): $query->the_post(  );
                echo '<li><a href="'. get_permalink(  ) .'">'  . get_the_title() . '</a></li>';
            endwhile;
            echo '</ul>';
            wp_reset_postdata(  );
        endif;

        echo $args['after_widget'];
    }

    public function form($instance){
        $title = $instance['title'] ?? __('Trending', 'most-news');
        $count = $instance['count'] ?? 5;
        ?>
        <p>
            <label>
                <?php esc_html_e( 'Title:', 'most-news' ); ?>
            </label>
            <input type="text" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr( $title ); ?>" class="widefat" />
        </p>
        <p>
            <label>
                <?php esc_html_e( 'Numbers of posts', 'most-news' )?>
            </label>
            <input 
                type="text" 
                name="<?php echo $this->get_field_name('count'); ?>" 
                value="<?php echo esc_attr( $count ); ?>" 
                class="tiny-text"
            />
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = [];
        $instance['title'] = sanitize_text_field( $new_instance['title'] );
        $instance['count'] = intval($new_instance['count']);

        return $instance;
    }
}

add_action( 'widgets_init', function(){
    register_widget( 'MN_Trending_Widget' );
} );

/*******************************************************
 * >>> Popular Posts Widget (requires post views meta)
********************************************************/

class MN_Popular_Widget extends WP_Widget{

    function __construct(){
        parent::__construct(
            'mn_popular_widget',
            __('Popular Posts', 'most-news'),
            ['description' => __('Show most viewed posts', 'most-news')]
        );
    }

    public function widget($args, $instance){
        $title = apply_filters( 'widget_title', $instance['title'] ?? __('Popular Posts', 'most-news') );
        $count = $instance['count'] ?? 5;

        echo $args['before_widget'];

        if($title) echo $args['before_title'] . $title . $args['after_title'];

        $query = new WP_Query([
            'posts_per_page' => $count,
            'meta_key' => 'mn_post_videos',
            'orderby' => 'meta_value_num',
            'order' => 'DESC',
        ]);

        if($query->have_posts(  )):
            echo '<ul class="mn-popular-post">';
            while($query->have_posts(  )): $query->the_post(  );
                echo '<li><a href="' . get_permalink(  ) .'">' . get_title() . '</a></li>';
            endwhile;
            echo '</ul>';
            wp_reset_postdata(  );
        endif;

        echo $args['after_widget'];
    }

    public function form($instance) {
        $title = $instance['title'] ?? __('Popular', 'most-news');
        $count = $instance['count'] ?? 5;
        ?>
        <p>
            <label>
                <?php esc_html_e( 'Title: ', 'most-news' ); ?>
            </label>
            <input type="text" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr( $title ); ?>" class="widefat" />
        </p>
        <p>
            <label>
                <?php esc_html_e( 'Number of posts: ', 'most-news' ); ?>
            </label>
            <input type="text" name="<?php echo $this->get_field_name('count'); ?>" value="<?php echo esc_attr( $count ); ?>" class="tiny-text" />
        </p>
        <?php
    }

    public function update($new_instance, $old_instance){
        $instance = [];
        $instance['title'] = sanitize_text_field( $new_instance['title'] );
        $instance['count'] = intval($new_instance['count']);
        return $instance;
    }
}

add_action( 'widgets_init',  function(){
    register_widget( 'MN_Popular_Widget' );
});


/*******************************************************
 * >>> Advertisement Widget
********************************************************/

class MN_Ad_Widget extends WP_Widget{

    function __construct(){
        parent::__construct(
            'mn_ad_widget',
            __('Advertisment', 'most-news'),
            ['description' => __('Custom HTML/JS Ad', 'most-news')]
        );
    }

    public function widget($args, $instance){
        echo $args['before_widget'];

        if(!empty($instance['ad_code'])){
            echo '<div class="mn-ad">' . $instance['ad_code'] . '</div>';
        }

        echo $args['after_widget'];
    }

    public function form($instance){
        $ad_code = $instance['ad_code'] ?? '';
        ?>
        <p>
            <label>
                <?php esc_html_e( 'Ad Code', 'most-news' ); ?>
            </label>
            <textarea name="<?php echo $this->get_field_name('ad_code'); ?>" class="widefat" rows="6">
                <?php 
                    echo esc_textarea( $ad_code );
                ?>
            </textarea>
        </p>
        <?php
    }

    public function update($new_instance, $old_instance){
        $instance = [];
        $instance['ad_code'] = $new_instance['ad_code'];
        return $instance;
    }
}

add_action( 'widgets_init', function(){
    register_widget( 'MN_Ad_Widget' );
} );