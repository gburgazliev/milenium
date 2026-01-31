<?php

// Enable support
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('menus');

// Register menu
register_nav_menus([
    'primary' => 'Primary Menu'
]);

function mytheme_assets() {
    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        [],
        null
    );

    // Theme CSS
    wp_enqueue_style(
        'mytheme-style',
        get_stylesheet_uri(),
        ['bootstrap-css'],
        time()
    );

    // Bootstrap JS (needs Popper included automatically in bundle)
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        [],
        null,
        true
    );

    // Theme JS
    wp_enqueue_script(
        'mytheme-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        ['bootstrap-js', 'jquery'],
        time(),
        true
    );
}
add_action('wp_enqueue_scripts', 'mytheme_assets');
