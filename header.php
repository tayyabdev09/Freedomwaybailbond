<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta name="theme-color" content="#c8102e" />
    <?php wp_head(); ?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LegalService",
      "@id": "<?php echo esc_url( home_url( '/#organization' ) ); ?>",
      "name": "Freedom Way Bail Bonds",
      "url": "<?php echo esc_url( home_url( '/' ) ); ?>",
      "logo": "<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.webp' ); ?>",
      "telephone": "+1-910-782-2422",
      "email": "freedomwaybailbonds@gmail.com",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Wilmington",
        "addressRegion": "NC",
        "addressCountry": "US"
      },
      "openingHoursSpecification": [{
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
        "opens": "00:00",
        "closes": "23:59"
      }],
      "areaServed": [
        {"@type": "AdministrativeArea", "name": "New Hanover County, NC"},
        {"@type": "AdministrativeArea", "name": "Pender County, NC"},
        {"@type": "AdministrativeArea", "name": "Brunswick County, NC"},
        {"@type": "AdministrativeArea", "name": "Wake County, NC"},
        {"@type": "AdministrativeArea", "name": "Columbus County, NC"},
        {"@type": "AdministrativeArea", "name": "Sampson County, NC"},
        {"@type": "AdministrativeArea", "name": "Duplin County, NC"},
        {"@type": "AdministrativeArea", "name": "Cumberland County, NC"}
      ]
    }
    <!-- TODO(SMT): confirm/insert real streetAddress + postalCode once the owner confirms the public business address (audit flags an address mismatch across citations — see report Section 21/13). sameAs (Facebook/Instagram/Yelp/GBP) also needs the owner's real profile URLs added here. -->
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MZ2V883');</script>
    <!-- End Google Tag Manager -->
</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MZ2V883"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php wp_body_open(); ?>

<!-- ===================== TOPBAR ===================== -->
<div class="topbar">
  <div class="container topbar-inner">
    <div class="tb-left">
      <span class="tb-item"><span class="live"></span> Available 24/7 — call anytime</span>
    </div>
    <div class="tb-right">
      <a class="tb-item" href="tel:+19107822422">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        910-782-2422
      </a>
      <a class="tb-item" href="mailto:freedomwaybailbonds@gmail.com">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
        freedomwaybailbonds@gmail.com
      </a>
      <span class="tb-item">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
        Serving all of North Carolina
      </span>
    </div>
  </div>
</div>

<!-- ===================== NAV ===================== -->
<header class="nav">
  <div class="container nav-inner">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="brand" aria-label="Freedom Way Bail Bonds">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.webp'); ?>" alt="Freedom Way Bail Bonds Logo" />
    </a>

    <nav class="nav-links" aria-label="Primary">
      <!-- Home Link Active Condition -->
      <a class="nl <?php echo (is_front_page() && !is_paged()) ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/')); ?>">Home</a>
      
      <!-- About Us Link Active Condition -->
      <a class="nl <?php echo is_page('about-us') ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/about-us/')); ?>">About Us</a>

      <!-- SERVICES DROPDOWN -->
      <div class="has-drop">
        <?php 
        $is_services_active = is_page(array(
            'services', 
            'traffic-bond-services', 
            'domestic-violence-bail-bonds', 
            'appearance-bonds', 
            'surety-bond-nc', 
            '24-7-bail-bonds'
        ));
        ?>
        <button class="nl <?php echo $is_services_active ? 'active' : ''; ?>" aria-haspopup="true" aria-expanded="false">
         <a href="<?php echo esc_url(home_url('/services/')); ?>"> Services</a>
          <svg class="drop-caret" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="dropdown" role="menu">
          <a class="drop-item <?php echo is_page('traffic-bond-services') ? 'active' : ''; ?>" role="menuitem" href="<?php echo esc_url(home_url('/traffic-bond-services/')); ?>">
            <span class="drop-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 16H9m10 0h3v-3.15a1 1 0 0 0-.84-.99L16 11l-2.7-3.6a1 1 0 0 0-.8-.4H5.24a2 2 0 0 0-1.8 1.1l-.8 1.63A6 6 0 0 0 2 12.42V16h2"/><circle cx="6.5" cy="16.5" r="2.5"/><circle cx="16.5" cy="16.5" r="2.5"/></svg></span>
            <span class="drop-text"><div><span class="dt-title">Traffic Bail Bonds</span></div><span class="dt-sub">DWI, reckless driving, license suspension</span></span>
          </a>
          <a class="drop-item <?php echo is_page('domestic-violence-bail-bonds') ? 'active' : ''; ?>" role="menuitem" href="<?php echo esc_url(home_url('/domestic-violence-bail-bonds/')); ?>">
            <span class="drop-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span>
            <span class="drop-text"><div><span class="dt-title">Domestic Violence Bonds</span></div><span class="dt-sub">Discreet, judgment-free representation</span></span>
          </a>
          <a class="drop-item <?php echo is_page('appearance-bonds') ? 'active' : ''; ?>" role="menuitem" href="<?php echo esc_url(home_url('/appearance-bonds/')); ?>">
            <span class="drop-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="9" y1="15" x2="15" y2="15"/></svg></span>
            <span class="drop-text"><div><span class="dt-title">Appearance Bonds</span></div><span class="dt-sub">Guaranteed court appearance</span></span>
          </a>
          <a class="drop-item <?php echo is_page('surety-bond-nc') ? 'active' : ''; ?>" role="menuitem" href="<?php echo esc_url(home_url('/surety-bond-nc/')); ?>">
            <span class="drop-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></span>
            <span class="drop-text"><div><span class="dt-title">Surety Bonds</span></div><span class="dt-sub">State-licensed surety across NC</span></span>
          </a>
          <a class="drop-item <?php echo is_page('24-7-bail-bonds') ? 'active' : ''; ?>" role="menuitem" href="<?php echo esc_url(home_url('/24-7-bail-bonds/')); ?>">
            <span class="drop-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></span>
            <span class="drop-text"><div><span class="dt-title">24/7 Bail Bonds</span></div><span class="dt-sub">Emergency response, day or night</span></span>
          </a>
        </div>
      </div>

      <!-- AREAS SERVED DROPDOWN -->
      <div class="has-drop">
        <?php 
        $is_areas_active = is_page(array(
            'areas-we-serve', 
            'wilmington-nc-bail-bonds', 
            'burgaw-pender-county-nc-bail-bonds', 
            'bolivia-nc-bail-bonds', 
            'raleigh-nc-bail-bonds', 
            'whiteville-nc-bail-bonds', 
            'clinton-nc-bail-bonds', 
            'kenansville-nc-bail-bonds', 
            'fayetteville-nc-bail-bonds'
        ));
        ?>
        <button class="nl <?php echo $is_areas_active ? 'active' : ''; ?>" aria-haspopup="true" aria-expanded="false">
           <a href="<?php echo esc_url(home_url('/areas-we-serve/')); ?>"> Areas We Serve</a>
          <svg class="drop-caret" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="dropdown served-areas-dropdown" role="menu">
          <a class="drop-item <?php echo is_page('wilmington-nc-bail-bonds') ? 'active' : ''; ?>" role="menuitem" href="<?php echo esc_url(home_url('/wilmington-nc-bail-bonds/')); ?>">
            <span class="drop-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 1 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></span>
            <span class="drop-text"><div><span class="dt-title">Wilmington</span></div><span class="dt-sub">New Hanover County</span></span>
          </a>
          <a class="drop-item <?php echo is_page('burgaw-pender-county-nc-bail-bonds) ? \'active\' : \'\';') ? 'active' : ''; ?>" role="menuitem" href="<?php echo esc_url(home_url('/burgaw-pender-county-nc-bail-bonds/')); ?>">
            <span class="drop-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 1 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></span>
            <span class="drop-text"><div><span class="dt-title">Burgaw</span></div><span class="dt-sub">Pender County</span></span>
          </a>
          <a class="drop-item <?php echo is_page('bolivia-nc-bail-bonds') ? 'active' : ''; ?>" role="menuitem" href="<?php echo esc_url(home_url('/bolivia-nc-bail-bonds/')); ?>">
            <span class="drop-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 1 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></span>
            <span class="drop-text"><div><span class="dt-title">Bolivia</span></div><span class="dt-sub">Brunswick County</span></span>
          </a>
          <a class="drop-item <?php echo is_page('raleigh-nc-bail-bonds') ? 'active' : ''; ?>" role="menuitem" href="<?php echo esc_url(home_url('/raleigh-nc-bail-bonds/')); ?>">
            <span class="drop-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 1 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></span>
            <span class="drop-text"><div><span class="dt-title">Raleigh</span></div><span class="dt-sub">Wake County</span></span>
          </a>
          <a class="drop-item <?php echo is_page('whiteville-nc-bail-bonds') ? 'active' : ''; ?>" role="menuitem" href="<?php echo esc_url(home_url('/whiteville-nc-bail-bonds/')); ?>">
            <span class="drop-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 1 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></span>
            <span class="drop-text"><div><span class="dt-title">Whiteville</span></div><span class="dt-sub">Columbus County</span></span>
          </a>
          <a class="drop-item <?php echo is_page('clinton-nc-bail-bonds') ? 'active' : ''; ?>" role="menuitem" href="<?php echo esc_url(home_url('/clinton-nc-bail-bonds/')); ?>">
            <span class="drop-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 1 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></span>
            <span class="drop-text"><div><span class="dt-title">Clinton</span></div><span class="dt-sub">Sampson County</span></span>
          </a>
          <a class="drop-item <?php echo is_page('kenansville-nc-bail-bonds') ? 'active' : ''; ?>" role="menuitem" href="<?php echo esc_url(home_url('/kenansville-nc-bail-bonds/')); ?>">
            <span class="drop-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 1 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></span>
            <span class="drop-text"><div><span class="dt-title">Kenansville</span></div><span class="dt-sub">Duplin County</span></span>
          </a>
          <a class="drop-item <?php echo is_page('fayetteville-nc-bail-bonds') ? 'active' : ''; ?>" role="menuitem" href="<?php echo esc_url(home_url('/fayetteville-nc-bail-bonds/')); ?>">
            <span class="drop-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 1 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></span>
            <span class="drop-text"><div><span class="dt-title">Fayetteville</span></div><span class="dt-sub">Cumberland County</span></span>
          </a>
        </div>
      </div>

      <!-- Blog Link Active Condition (includes category/archive/single posts) -->
      <?php 
      $is_blog_active = (is_home() && !is_front_page()) || is_singular('post') || is_category() || is_tag() || is_archive();
      ?>
      <a class="nl <?php echo $is_blog_active ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a>
      
      <!-- Contact Us Link Active Condition -->
      <a class="nl <?php echo is_page('contact-us') ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/contact-us/')); ?>">Contact Us</a>
    </nav>

    <div class="nav-cta">
      <a class="call" href="tel:+19107822422">
        <span class="ring">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        </span>
        <span>Call Now<br><small style="font-weight:400;color:var(--ink-500);font-size:.72rem">910-782-2422</small></span>
      </a>
      <button class="hamburger" aria-label="Menu"><span></span></button>
    </div>
  </div>
</header>

<!-- Mobile Drawer -->
<div class="mobile-menu" aria-hidden="true">
  <div class="mobile-panel">
    <div class="mp-head">
      <div class="brand"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.webp'); ?>" alt="Freedom Way Logo"/></div>
      <button class="mp-close" aria-label="Close">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
      </button>
    </div>
    <div class="mobile-links">
      <a class="<?php echo (is_front_page() && !is_paged()) ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/')); ?>">Home</a>
      <a class="nl <?php echo is_page('about-us') ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/about-us/')); ?>">About Us</a>

      <!-- MOBILE SERVICES ACCORDION -->
      <button class="mlbtn <?php echo $is_services_active ? 'active' : ''; ?>" data-msub="#msvc">
        Services
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><polyline points="6 9 12 15 18 9"/></svg>
      </button>
      <div class="msub" id="msvc">
        <a class="<?php echo is_page('traffic-bond-services') ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/traffic-bond-services/')); ?>">Traffic Bail Bonds</a>
        <a class="<?php echo is_page('domestic-violence-bail-bonds') ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/domestic-violence-bail-bonds/')); ?>">Domestic Violence Bail Bonds</a>
        <a class="<?php echo is_page('appearance-bonds') ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/appearance-bonds/')); ?>">Appearance Bonds</a>
        <a class="<?php echo is_page('surety-bond-nc') ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/surety-bond-nc/')); ?>">Surety Bonds</a>
        <a class="<?php echo is_page('24-7-bail-bonds') ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/24-7-bail-bonds/')); ?>">24/7 Bail Bonds</a>
      </div>

      <!-- MOBILE AREAS ACCORDION -->
      <button class="mlbtn <?php echo $is_areas_active ? 'active' : ''; ?>" data-msub="#mrec">
        Areas We Serve
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><polyline points="6 9 12 15 18 9"/></svg>
      </button>
      <div class="msub" id="mrec">
        <a class="<?php echo is_page('wilmington-nc-bail-bonds') ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/wilmington-nc-bail-bonds/')); ?>">Wilmington</a>
        <a class="<?php echo is_page('burgaw-pender-county-nc-bail-bonds') ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/burgaw-pender-county-nc-bail-bonds/')); ?>">Burgaw</a>
        <a class="<?php echo is_page('bolivia-nc-bail-bonds') ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/bolivia-nc-bail-bonds/')); ?>">Bolivia</a>
        <a class="<?php echo is_page('raleigh-nc-bail-bonds') ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/raleigh-nc-bail-bonds/')); ?>">Raleigh</a>
        <a class="<?php echo is_page('whiteville-nc-bail-bonds') ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/whiteville-nc-bail-bonds/')); ?>">Whiteville</a>
        <a class="<?php echo is_page('clinton-nc-bail-bonds') ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/clinton-nc-bail-bonds/')); ?>">Clinton</a>
        <a class="<?php echo is_page('kenansville-nc-bail-bonds') ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/kenansville-nc-bail-bonds/')); ?>">Kenansville</a>
        <a class="<?php echo is_page('fayetteville-nc-bail-bonds') ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/fayetteville-nc-bail-bonds/')); ?>">Fayetteville</a>
      </div>
      <a class="nl <?php echo $is_blog_active ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a>
      <a class="nl <?php echo is_page('contact-us') ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/contact-us/')); ?>">Contact Us</a>

      <a href="tel:+19107822422" class="btn btn-primary" style="justify-content:center;margin-top:14px">Call 910-782-2422</a>
    </div>
  </div>
</div>