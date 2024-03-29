<?php

/**
 * Register all stylesheets.
 */
function load_styles()
{
    wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), false, 'all');
    wp_enqueue_style('normalize');
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');
    if ($_COOKIE['theme'] == 'dark') {
        wp_register_style('dark', get_template_directory_uri() . '/css/dark.css', array('style'), false, 'all');
        wp_enqueue_style('dark');
    }
}

// Execute the function to load all styles.
add_action('wp_enqueue_scripts', 'load_styles');

// Switch on menu theme support and post thumbnails in WP.
add_theme_support('menus');
add_theme_support('post-thumbnails');

// Add some menu options.
register_nav_menus(
    array(
        'main-menu' => __('Main Menu', 'theme'),
    )
);

// Set up uploaded image resize options.
add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);
