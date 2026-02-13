        <footer class="site-footer">
            <div  class="container">
                <p>
                    © <?php echo esc_html(date('Y')); ?>
                    <?php bloginfo('name'); ?>. All rights reserved.
                </p>
                <nav  class="footer-navigation">
                    <?php 
                        wp_nav_menu([
                            'theme_location' => 'footer',
                            'container' => false,
                        ])
                    ?>
                </nav>
            </div>
            <div class="container">
                <?php get_template_part('template-parts/ads/ad', 'footer'); ?>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>