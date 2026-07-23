<?php
/**
 * Template Name: Single Post
 * Description: The template for displaying all single posts / journal entries.
 */

get_header(); 
?>

<?php 
if ( have_posts() ) : 
  while ( have_posts() ) : the_post(); 
?>

<!-- ===================== PREMIUM POST HERO ===================== -->
<section class="lux-hero blog-hero single-hero">
  <div class="lux-hero-media">
    <?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail( 'full', array( 'alt' => esc_attr( get_the_title() ) ) ); ?>
    <?php else : ?>
      <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?auto=format&fit=crop&w=1800&q=70" alt="Freedom Way Bail Bonds"/>
    <?php endif; ?>
    <div class="lux-hero-scrim"></div>
  </div>
  <div class="container lux-hero-inner">
    <div class="post-meta-top " style="margin-bottom: 16px;">
      <?php
      $categories = get_the_category();
      if ( ! empty( $categories ) ) :
        foreach ( $categories as $category ) :
          printf(
            '<span class="eyebrow" style="margin-right: 10px; display: inline-block;">%1$s</span>',
            esc_html( $category->name )
          );
        endforeach;
      endif;
      ?>
      <span class="post-date" style="color: rgba(255,255,255,0.7); font-size: 0.85rem; letter-spacing: 1px; text-transform: uppercase;">
        <?php echo esc_html( get_the_date() ); ?>
      </span>
    </div>
    <h1 class=""><?php the_title(); ?></h1>
    <p class="">Written and verified by the licensed field professionals at Freedom Way Bail Bonds.</p>
  </div>
</section>

<!-- ===================== MAIN ARTICLE BODY ===================== -->
<section class="section post-article-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10 ">
        
        <!-- BACK TO JOURNAL LINK -->
        <div style="margin-bottom: 30px;">
          <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="bc-link" style="display: inline-flex; align-items: center; gap: 8px; text-decoration: none;">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 16px; height: 16px; transform: scaleX(-1);">
              <line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/>
            </svg>
            Back to Journal
          </a>
        </div>

        <!-- THE WP DYNAMIC CONTENT BLOCK -->
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'entry-content' ); ?>>
          <?php 
            the_content(); 
            
            // Handle clean standard multi-page post pagination if needed
            wp_link_pages( array(
              'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'textdomain' ),
              'after'  => '</div>',
            ) );
          ?>
        </article>
        
        <div class="divider" style="margin: 50px 0 30px 0;"></div>
        
        <!-- POST FOOTER NOTES -->
        <div class="post-disclaimer-card" style="background: var(--ink-100, #f8f9fa); padding: 24px; border-left: 3px solid var(--accent, #c8102e); border-radius: 4px;">
          <h4 style="margin-top: 0; margin-bottom: 8px; font-weight: 600;">Need immediate legal guidance or bail verification?</h4>
          <p style="margin: 0; font-size: 0.95rem; color: var(--ink-700, #4a4a4a);">
            Case files, bond updates, and booking logistics change quickly across different North Carolina counties. For immediate personal clarification on an open case or hold status, connect straight to an active agent on our 24-hour phone line.
          </p>
        </div>

      </div>
    </div>
  </div>
</section>

<?php 
  endwhile;
endif; 
?>

<?php 
// Pull production theme dynamic blocks natively
get_template_part( 'template-parts/global', 'cta' ); 

get_footer(); 
?>