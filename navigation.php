<nav class="navigation panel">
    <?php 
        wp_nav_menu(
            array(
                'theme_location' => 'main-menu',
            )
        );
    ?>
    <?php get_search_form(); ?>
</nav>
