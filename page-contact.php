<?php
/**
 * Template Name: Contact Us
 */

get_header(); 
?>

<!-- ===================== LUX HERO SECTION ===================== -->
<section class="lux-hero">
  <div class="lux-hero-media">
    <img src="https://images.unsplash.com/photo-1521791055366-0d553872125f?auto=format&fit=crop&w=1800&q=70" alt="Hands on a desk"/>
    <div class="lux-hero-scrim"></div>
  </div>
  <div class="container lux-hero-inner">
    <span class="eyebrow reveal">Contact us</span>
    <h1 class="reveal">One call. <span class="accent">Any hour.</span> Any county.</h1>
    <p class="reveal">A licensed North Carolina bondsman is standing by. Call, email, or send the form below — whichever feels easiest right now.</p>
    <div class="lux-hero-cta reveal">
      <a href="tel:+9107822422" class="btn btn-primary">Call 910-782-2422</a>
      <a href="mailto:freedomwaybailbonds@gmail.com" class="btn btn-white-outline">Email us</a>
    </div>
  </div>
</section>

<!-- ===================== CONTACT CONTENT GRID ===================== -->
<section class="section">
  <div class="container contact-grid">
    
    <!-- LEFT SIDE: DYNAMIC WPFORMS INTEGRATION -->
    <div class="reveal">
      <span class="eyebrow">Send a message</span>
      <h2>We answer in minutes.</h2>
      <div class="divider"></div>
      <p>Fill in the essentials. If it's urgent, please call — the phone gets a bondsman on the line faster than the inbox.</p>
      
      <div class="contact-form-wpforms-container">
        <?php echo do_shortcode('[wpforms id="172"]'); ?>
      </div>
    </div>
    
    <!-- RIGHT SIDE: DIRECT OFFICE INFO -->
    <div class="reveal">
      <div class="glass-card">
        <h3>Reach us directly</h3>
        <ul class="fact-list">
          <li><span>Phone</span><strong><a href="tel:+9105990868">910-782-2422</a></strong></li>
          <li><span>Email</span><strong><a href="mailto:freedomwaybailbonds@gmail.com">freedomwaybailbonds@gmail.com</a></strong></li>
          <li><span>Hours</span><strong>Open 24 / 7 / 365</strong></li>
          <li><span>Coverage</span><strong>All 100 NC counties</strong></li>
          <li><span>Languages</span><strong>English &amp; Spanish</strong></li>
        </ul>
      </div>
      <div class="glass-card" style="margin-top:20px">
        <h3>Fastest to a bondsman</h3>
        <p style="margin:0">Call. Every time. The phone puts a licensed bondsman on the line in under a minute, quotes a firm premium, and starts the paperwork before you hang up.</p>
        <a href="tel:+19105990868" class="btn btn-primary" style="width:100%;justify-content:center;margin-top:14px">Call now</a>
      </div>
    </div>

  </div>
</section>

<!-- ===================== MINI COVERAGE LINKS ===================== -->
<section class="section section-soft">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Where to find us</span>
      <h2>Statewide license. Neighborhood presence.</h2>
      <div class="divider"></div>
    </div>
    <div class="area-mini-grid">
      <a href="<?php echo esc_url( home_url( '/area-wilmington/' ) ); ?>" class="area-mini"><strong>Wilmington</strong><span>New Hanover Co.</span></a>
      <a href="<?php echo esc_url( home_url( '/area-burgaw/' ) ); ?>" class="area-mini"><strong>Burgaw</strong><span>Pender Co.</span></a>
      <a href="<?php echo esc_url( home_url( '/area-bolivia/' ) ); ?>" class="area-mini"><strong>Bolivia</strong><span>Brunswick Co.</span></a>
      <a href="<?php echo esc_url( home_url( '/area-raleigh/' ) ); ?>" class="area-mini"><strong>Raleigh</strong><span>Wake Co.</span></a>
      <a href="<?php echo esc_url( home_url( '/area-whiteville/' ) ); ?>" class="area-mini"><strong>Whiteville</strong><span>Columbus Co.</span></a>
      <a href="<?php echo esc_url( home_url( '/area-clinton/' ) ); ?>" class="area-mini"><strong>Clinton</strong><span>Sampson Co.</span></a>
      <a href="<?php echo esc_url( home_url( '/area-kenansville/' ) ); ?>" class="area-mini"><strong>Kenansville</strong><span>Duplin Co.</span></a>
      <a href="<?php echo esc_url( home_url( '/area-fayetteville/' ) ); ?>" class="area-mini"><strong>Fayetteville</strong><span>Cumberland Co.</span></a>
    </div>
  </div>
</section>

<!-- ===================== CONTACT FREQUENT QUESTIONS ===================== -->
<section class="section section-soft" id="faq">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Contact FAQ</span>
      <h2>A few questions before you call.</h2>
      <div class="divider"></div>
    </div>
    <div class="faq-wrap">
      
      <div class="faq-item">
        <button class="faq-q">How fast do you answer the phone?<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><polyline points="6 9 12 15 18 9"/></svg></button>
        <div class="faq-a"><p>Under 30 seconds on average — a live, licensed bondsman, not a phone tree.</p></div>
      </div>

      <div class="faq-item">
        <button class="faq-q">Do you take collect calls from the jail?<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><polyline points="6 9 12 15 18 9"/></svg></button>
        <div class="faq-a"><p>Yes. Give the operator our number and we'll accept.</p></div>
      </div>

      <div class="faq-item">
        <button class="faq-q">Can I meet in person?<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><polyline points="6 9 12 15 18 9"/></svg></button>
        <div class="faq-a"><p>Absolutely. We meet clients at home, the jail lobby, or a location that feels safe.</p></div>
      </div>

      <div class="faq-item">
        <button class="faq-q">Do you charge for a consultation?<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><polyline points="6 9 12 15 18 9"/></svg></button>
        <div class="faq-a"><p>No. Quotes and consultations are free.</p></div>
      </div>

    </div>
  </div>
</section>

<!-- ===================== CONTACT PAGE SCHEMA ===================== -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How fast do you answer the phone?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Under 30 seconds on average — a live, licensed bondsman, not a phone tree."
      }
    },
    {
      "@type": "Question",
      "name": "Do you take collect calls from the jail?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Give the operator our number and we'll accept."
      }
    },
    {
      "@type": "Question",
      "name": "Can I meet in person?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Absolutely. We meet clients at home, the jail lobby, or a location that feels safe."
      }
    },
    {
      "@type": "Question",
      "name": "Do you charge for a consultation?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. Quotes and consultations are free."
      }
    }
  ]
}
</script>

<?php 
// Pull global template elements natively 
get_template_part( 'template-parts/global', 'cta' ); 

get_footer(); 
?>