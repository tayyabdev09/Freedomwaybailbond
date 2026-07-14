<?php
/**
 * Freedom Way Bail Bonds Theme Functions
 */

function freedom_way_assets() {
    // Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700&display=swap', array(), null);

    // Third-party styles
    wp_enqueue_style('bootstrap-grid', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap-grid.min.css', array(), '5.3.3');
    wp_enqueue_style('leaflet-css', 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.css', array(), '1.9.4');

    // Theme styles (assets/css/styles.css)
    wp_enqueue_style('freedom-way-main', get_template_directory_uri() . '/assets/css/styles.css', array(), '1.0.0');

    // Third-party scripts
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true);
    wp_enqueue_script('leaflet-js', 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.js', array(), '1.9.4', true);

    // Theme scripts (assets/js/script.js)
    wp_enqueue_script('freedom-way-script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'freedom_way_assets');

function freedom_way_theme_setup() {
    // Add title tag support & logo support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

    // Register primary menus
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'freedom-way'),
    ));
}
add_action('after_setup_theme', 'freedom_way_theme_setup');