<?php
/**
 * Freedom Way Bail Bonds Theme Functions
 */

function freedom_way_assets() {
    // Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700&display=swap', array(), null);

    // Third-party styles
    wp_enqueue_style('bootstrap-grid', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap-grid.min.css', array(), '5.3.3');

    // Theme styles (assets/css/styles.css)
    wp_enqueue_style('freedom-way-main', get_template_directory_uri() . '/assets/css/styles.css', array(), '1.0.0');

    // Third-party scripts
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true);

    // Load Leaflet only where the interactive NC map exists (Front Page)
    if ( is_front_page() ) {
        wp_enqueue_style('leaflet-css', 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.css', array(), '1.9.4');
        wp_enqueue_script('leaflet-js', 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.js', array(), '1.9.4', true);
    }

    // Theme scripts (assets/js/script.js)
    wp_enqueue_script('freedom-way-script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'freedom_way_assets');

// Preconnect to Google Fonts domain for performance
function freedom_way_resource_hints( $urls, $relation_type ) {
    if ( 'preconnect' === $relation_type ) {
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin' => 'anonymous',
        );
    }
    return $urls;
}
add_filter( 'wp_resource_hints', 'freedom_way_resource_hints', 10, 2 );

// Disable WordPress emojis and hide generator meta for security & speed
function freedom_way_cleanup_head() {
    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'freedom_way_cleanup_head' );

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

/**
 * Audit fix: /category/general/ was rendering as a duplicate of the homepage
 * because no archive/category template exists, so WP fell back to index.php
 * (which pulls home-page content). Until a real category archive template is
 * built, noindex the category/tag/archive views instead of letting them
 * duplicate the homepage.
 */
function freedom_way_noindex_archives() {
    if ( is_category() || is_tag() || is_archive() ) {
        echo '<meta name="robots" content="noindex,follow" />' . "\n";
    }
}
add_action( 'wp_head', 'freedom_way_noindex_archives', 1 );

/**
 * Audit fix (T6): /wp-json/wp/v2/users was exposing the admin username
 * publicly. Restrict the users REST endpoint to authenticated requests.
 */
function freedom_way_restrict_users_rest_route( $result, $server, $request ) {
    if ( strpos( $request->get_route(), '/wp/v2/users' ) === 0 && ! is_user_logged_in() ) {
        return new WP_Error(
            'rest_forbidden',
            __( 'Sorry, you are not allowed to access this endpoint.', 'freedom-way' ),
            array( 'status' => 401 )
        );
    }
    return $result;
}
add_filter( 'rest_pre_dispatch', 'freedom_way_restrict_users_rest_route', 10, 3 );