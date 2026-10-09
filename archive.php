<?php
/**
 * The template for displaying archive pages
 *
 * Prevents archive/category queries from falling back to index.php (homepage duplicate).
 *
 * @package Freedom_Way_Bail_Bonds
 */

get_header(); 
?>

<!-- ===================== ARCHIVE HERO SECTION ===================== -->
<section class="lux-hero blog-hero">
  <div class="lux-hero-media">
    <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?auto=format&fit=crop&w=1800&q=70" alt="Reading room"/>
    <div class="lux-hero-scrim"></div>
  </div>
  <div class="container lux-hero-inner">
    <span class="eyebrow reveal">The Freedom Way Journal</span>
    <h1 class="reveal"><?php the_archive_title(); ?></h1>
    <p class="reveal"><?php the_archive_description(); ?></p>
  </div>
</section>

<!-- ===================== ARCHIVE POSTS GRID ===================== -->
<section class="section">
  <div class="container">
    <div class="blog-grid">
      <?php 
      if ( have_posts() ) : 
        while ( have_posts() ) : the_post(); 
          $post_categories = get_the_category();
          ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-card reveal' ); ?>>
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
        
        echo '<div class="pagination-wrap reveal" style="grid-column: 1 / -1; display: flex; justify-content: center; margin-top: 40px;">';
        the_posts_pagination( array(
          'mid_size'  => 2,
          'prev_text' => __( '← Newer Articles', 'freedom-way' ),
          'next_text' => __( 'Older Articles →', 'freedom-way' ),
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
get_template_part( 'template-parts/global', 'cta' ); 
get_footer(); 
?>
