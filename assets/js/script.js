// Freedom Way Bail Bonds - Interactions
(function(){
  'use strict';

  // Nav scroll shadow
  const nav = document.querySelector('.nav');
  const onScroll = () => {
    if (!nav) return;
    if (window.scrollY > 12) nav.classList.add('scrolled');
    else nav.classList.remove('scrolled');
  };
  window.addEventListener('scroll', onScroll, {passive:true});
  onScroll();

  // Mobile menu
  const hamburger = document.querySelector('.hamburger');
  const drawer = document.querySelector('.mobile-menu');
  const mClose = document.querySelector('.mp-close');
  const openDrawer = () => { drawer && drawer.classList.add('open'); hamburger && hamburger.classList.add('open'); document.body.style.overflow='hidden'; };
  const closeDrawer = () => { drawer && drawer.classList.remove('open'); hamburger && hamburger.classList.remove('open'); document.body.style.overflow=''; };
  hamburger && hamburger.addEventListener('click', () => drawer.classList.contains('open') ? closeDrawer() : openDrawer());
  mClose && mClose.addEventListener('click', closeDrawer);
  drawer && drawer.addEventListener('click', e => { if (e.target === drawer) closeDrawer(); });

  // Mobile submenu toggle
  document.querySelectorAll('[data-msub]').forEach(btn => {
    btn.addEventListener('click', () => {
      const target = document.querySelector(btn.getAttribute('data-msub'));
      if (target) target.classList.toggle('open');
    });
  });

  // FAQ accordion
  document.querySelectorAll('.faq-item').forEach(item => {
    const q = item.querySelector('.faq-q');
    const a = item.querySelector('.faq-a');
    q && q.addEventListener('click', () => {
      const open = item.classList.toggle('open');
      if (open) { a.style.maxHeight = a.scrollHeight + 'px'; }
      else { a.style.maxHeight = 0; }
    });
  });

  // Reveal on scroll
  const io = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting){ e.target.classList.add('in'); io.unobserve(e.target); } });
  }, { threshold:.14, rootMargin:'0px 0px -40px 0px' });
  document.querySelectorAll('.reveal').forEach(el => io.observe(el));

  // Count-up stats
  const counters = document.querySelectorAll('[data-count]');
  const countIO = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (!e.isIntersecting) return;
      const el = e.target;
      const target = parseFloat(el.dataset.count);
      const dur = 1400;
      const start = performance.now();
      const step = t => {
        const p = Math.min(1, (t - start) / dur);
        const eased = 1 - Math.pow(1 - p, 3);
        const val = target * eased;
        el.textContent = target >= 100 ? Math.round(val).toLocaleString() : (Math.round(val*10)/10).toString();
        if (p < 1) requestAnimationFrame(step);
        else el.textContent = target >= 100 ? Math.round(target).toLocaleString() : target;
      };
      requestAnimationFrame(step);
      countIO.unobserve(el);
    });
  }, { threshold:.4 });
  counters.forEach(c => countIO.observe(c));

  // Year
  const y = document.getElementById('year');
  if (y) y.textContent = new Date().getFullYear();

  // Smooth scroll for hash links
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const id = a.getAttribute('href');
      if (id.length > 1) {
        const el = document.querySelector(id);
        if (el){ e.preventDefault(); el.scrollIntoView({behavior:'smooth', block:'start'}); closeDrawer(); }
      }
    });
  });


  // --- Real-time Interactive Map Initialization ---
  window.addEventListener('load', () => {
    const mapContainer = document.getElementById('nc-real-map');
    if (mapContainer && typeof L !== 'undefined') {
      
      // Default view centered on North Carolina
      const map = L.map('nc-real-map', {
        scrollWheelZoom: false // Prevents getting stuck scrolling down the page
      }).setView([34.7, -78.4], 8);

      // Using a clean, light map tile layer that matches your minimal aesthetic
      L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OSM</a>',
        subdomains: 'abcd',
        maxZoom: 19
      }).addTo(map);

      // Custom marker matching your brand red
      const brandIcon = L.divIcon({
        className: 'custom-brand-icon',
        html: `<div style="background: var(--red-600); width: 16px; height: 16px; border-radius: 50%; border: 3px solid #fff; box-shadow: 0 4px 10px rgba(200,16,46,0.5);"></div>`,
        iconSize: [22, 22],
        iconAnchor: [11, 11]
      });

      const tags = document.querySelectorAll('.area-tag');
      
      tags.forEach(tag => {
        const lat = parseFloat(tag.getAttribute('data-lat'));
        const lng = parseFloat(tag.getAttribute('data-lng'));
        const cityName = tag.textContent.trim();

        if (lat && lng) {
          // Add marker to map
          const marker = L.marker([lat, lng], { icon: brandIcon })
            .addTo(map)
            .bindPopup(`${cityName} Bail Bonds<br><span style="color:var(--ink-500); font-weight:400; font-size:0.85rem">Available 24/7</span>`);

          // Handle tag click
          tag.addEventListener('click', (e) => {
            e.preventDefault();
            
            // Manage active state styling
            tags.forEach(t => t.classList.remove('active'));
            tag.classList.add('active');

            // Fly map to the location and open popup
            map.flyTo([lat, lng], 11, {
              duration: 1.5 // Smooth animation duration in seconds
            });
            
            // Delay popup slightly to sync with fly animation
            setTimeout(() => {
              marker.openPopup();
            }, 500);
          });
        }
      });
    }
  });


  
// Blog chip filter (Production Ready Client-Side UI)
document.querySelectorAll('.chip-row .chip').forEach(chip => {
  chip.addEventListener('click', (e) => {
    e.preventDefault(); // Stop default anchor jumping behaviors
    
    // Toggle active state visualization
    document.querySelectorAll('.chip-row .chip').forEach(x => x.classList.remove('active'));
    chip.classList.add('active');
    
    const filterValue = chip.getAttribute('data-category');
    
    // Filter cards match
    document.querySelectorAll('.blog-card').forEach(card => {
      const cardCategories = card.getAttribute('data-category') || '';
      
      if (filterValue === 'all' || cardCategories.split(' ').includes(filterValue)) {
        card.style.display = '';
      } else {
        card.style.display = 'none';
      }
    });
  });
});
})();
