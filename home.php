<?php
/**
 * Template Name: Blog Index
 * Description: The core template file used to render the blog posts index / archive loop with seamless client-side filtering.
 */

get_header(); 
?>

<!-- ===================== LUX HERO SECTION ===================== -->
<section class="lux-hero blog-hero">
  <div class="lux-hero-media">
    <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?auto=format&fit=crop&w=1800&q=70" alt="Reading room"/>
    <div class="lux-hero-scrim"></div>
  </div>
  <div class="container lux-hero-inner">
    <span class="eyebrow reveal">Insight · Guidance · Case notes</span>
    <h1 class="reveal">The <span class="accent">Freedom Way Journal.</span></h1>
    <p class="reveal">Straight-talking articles from the bondsmen you actually call. Written for families, in the language you speak in the kitchen — not the courtroom.</p>
  </div>
</section>

<!-- ===================== POSTS INDEX / ARCHIVE FILTER & GRID ===================== -->
<section class="section">
  <div class="container">
    
    <!-- CATEGORY FILTER CHIPS -->
    <div class="chip-row">
      <a href="#" class="chip active" data-category="all">All</a>
      <?php
      $categories = get_categories( array(
        'orderby'    => 'name',
        'order'      => 'ASC',
        'hide_empty' => 1,
      ) );
      
      if ( ! empty( $categories ) ) :
        foreach ( $categories as $category ) :
          printf(
            '<a href="#" class="chip" data-category="%1$s">%2$s</a>',
            esc_attr( sanitize_title( $category->name ) ),
            esc_html( $category->name )
          );
        endforeach;
      endif;
      ?>
    </div>

    <!-- DYNAMIC POSTS LOOP -->
    <div class="blog-grid">
      <?php 
      if ( have_posts() ) : 
        $count = 0;
        while ( have_posts() ) : the_post(); 
          $count++;
          // Apply 'blog-featured' styling strictly to the very first post on page 1
          $featured_class = ( $count === 1 && ! is_paged() ) ? ' blog-featured' : '';
          
          // Gather categories to apply normalized data-category strings for robust JS filtering
          $post_categories = get_the_category();
          $cat_slugs = array();
          if ( ! empty( $post_categories ) ) {
            foreach ( $post_categories as $cat ) {
              $cat_slugs[] = sanitize_title( $cat->name );
            }
          }
          $data_cat_string = implode( ' ', $cat_slugs );
          ?>
          
          <article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-card reveal' . $featured_class ); ?> data-category="<?php echo esc_attr( $data_cat_string ); ?>">
            <div class="bc-media">
              <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'large', array( 'alt' => esc_attr( get_the_title() ), 'loading' => 'lazy' ) ); ?>
              <?php else : ?>
                <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1200&q=70" alt="Freedom Way Bail Bonds" loading="lazy" />
              <?php endif; ?>
              
              <?php
              if ( ! empty( $post_categories ) ) :
                echo '<span class="bc-tag">' . esc_html( $post_categories[0]->name ) . '</span>';
              endif;
              ?>
            </div>
            
            <div class="bc-body">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 18, '...' ) ); ?></p>
              <a href="<?php the_permalink(); ?>" class="bc-link">
                Read article 
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/>
                </svg>
              </a>
            </div>
          </article>

        <?php 
        endwhile; 
        
        // CUSTOM SCANNABLE ARCHIVE PAGINATION
        echo '<div class="pagination-wrap reveal">';
        the_posts_pagination( array(
          'mid_size'  => 2,
          'prev_text' => __( '← Newer Articles', 'textdomain' ),
          'next_text' => __( 'Older Articles →', 'textdomain' ),
        ) );
        echo '</div>';

      else : 
        ?>
        <div class="no-posts-found reveal" style="grid-column: 1 / -1; text-align: center; padding: 60px 20px;">
          <h3>No articles found</h3>
          <p>We are currently updating our journal case notes. Please check back shortly.</p>
        </div>
      <?php endif; ?>
    </div>

  </div>
</section>

<?php 
// Pull corporate theme assets cleanly
get_template_part( 'template-parts/global', 'cta' ); 

get_footer(); 
?>