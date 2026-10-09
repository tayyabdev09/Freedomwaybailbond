<?php
/**
 * Breadcrumbs UI and BreadcrumbList JSON-LD Schema
 *
 * @package FreedomWay
 */

function freedom_way_breadcrumbs() {
    if ( is_front_page() ) {
        return;
    }

    $crumbs = array();
    $crumbs[] = array(
        'name' => 'Home',
        'url'  => home_url( '/' ),
    );

    if ( is_single() ) {
        $crumbs[] = array(
            'name' => 'Blog',
            'url'  => home_url( '/blog/' ),
        );
        $crumbs[] = array(
            'name' => get_the_title(),
            'url'  => '',
        );
    } elseif ( is_category() || is_tag() || is_archive() ) {
        $crumbs[] = array(
            'name' => 'Blog',
            'url'  => home_url( '/blog/' ),
        );
        $crumbs[] = array(
            'name' => single_cat_title( '', false ) ? single_cat_title( '', false ) : 'Archive',
            'url'  => '',
        );
    } elseif ( is_page() ) {
        global $post;
        $slug = $post ? $post->post_name : '';

        $service_slugs = array(
            'traffic-bond-services',
            'domestic-violence-bail-bonds',
            'appearance-bonds',
            'surety-bond-nc',
            '24-7-bail-bonds',
        );

        $area_slugs = array(
            'wilmington-nc-bail-bonds',
            'burgaw-pender-county-nc-bail-bonds',
            'bolivia-nc-bail-bonds',
            'raleigh-nc-bail-bonds',
            'whiteville-nc-bail-bonds',
            'clinton-nc-bail-bonds',
            'kenansville-nc-bail-bonds',
            'fayetteville-nc-bail-bonds',
        );

        if ( in_array( $slug, $service_slugs, true ) ) {
            $crumbs[] = array(
                'name' => 'Services',
                'url'  => home_url( '/services/' ),
            );
            $crumbs[] = array(
                'name' => get_the_title(),
                'url'  => '',
            );
        } elseif ( in_array( $slug, $area_slugs, true ) ) {
            $crumbs[] = array(
                'name' => 'Areas We Serve',
                'url'  => home_url( '/areas-we-serve/' ),
            );
            $crumbs[] = array(
                'name' => get_the_title(),
                'url'  => '',
            );
        } else {
            $crumbs[] = array(
                'name' => get_the_title(),
                'url'  => '',
            );
        }
    } elseif ( is_404() ) {
        $crumbs[] = array(
            'name' => '404 Not Found',
            'url'  => '',
        );
    }

    if ( count( $crumbs ) <= 1 ) {
        return;
    }

    // Render HTML Breadcrumb UI
    echo '<nav class="fw-breadcrumbs" aria-label="Breadcrumb">' . "\n";
    echo '  <div class="container">' . "\n";
    echo '    <ol class="breadcrumb-list">' . "\n";
    foreach ( $crumbs as $index => $crumb ) {
        $is_last = ( $index === count( $crumbs ) - 1 );
        if ( $is_last || empty( $crumb['url'] ) ) {
            echo '      <li class="breadcrumb-item active" aria-current="page">' . esc_html( $crumb['name'] ) . '</li>' . "\n";
        } else {
            echo '      <li class="breadcrumb-item"><a href="' . esc_url( $crumb['url'] ) . '">' . esc_html( $crumb['name'] ) . '</a><span class="sep" aria-hidden="true">/</span></li>' . "\n";
        }
    }
    echo '    </ol>' . "\n";
    echo '  </div>' . "\n";
    echo '</nav>' . "\n";

    // Render BreadcrumbList JSON-LD Schema
    $schema_items = array();
    foreach ( $crumbs as $index => $crumb ) {
        $item_url = ! empty( $crumb['url'] ) ? $crumb['url'] : get_permalink();
        $schema_items[] = array(
            '@type'    => 'ListItem',
            'position' => $index + 1,
            'name'     => $crumb['name'],
            'item'     => esc_url( $item_url ),
        );
    }

    $schema = array(
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => $schema_items,
    );

    echo '<script type="application/ld+json">' . json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>' . "\n";
}
