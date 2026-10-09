<?php
/**
 * Template part for displaying service location links (Hub-to-Spoke internal linking).
 *
 * @package FreedomWay
 */

$service_name = ! empty( $args['service_name'] ) ? $args['service_name'] : 'Bail Bonds';
?>
<!-- ===================== SERVICE LOCATIONS (HUB-TO-SPOKE) ===================== -->
<section class="section service-locations" id="service-locations-hub">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Detention Facilities We Serve</span>
      <h2>Where We Post <?php echo esc_html( $service_name ); ?> Across NC</h2>
      <div class="divider"></div>
      <p>Our licensed bail bond agents post <?php echo esc_html( strtolower( $service_name ) ); ?> directly at magistrate offices and detention facilities across all 8 core North Carolina counties 24 hours a day, 7 days a week.</p>
    </div>
    <div class="area-mini-grid reveal">
      <a href="<?php echo esc_url( home_url( '/wilmington-nc-bail-bonds/' ) ); ?>" class="area-mini">
        <strong>Wilmington, NC</strong>
        <span>New Hanover County Detention Center</span>
      </a>
      <a href="<?php echo esc_url( home_url( '/burgaw-pender-county-nc-bail-bonds/' ) ); ?>" class="area-mini">
        <strong>Burgaw, NC</strong>
        <span>Pender County Jail</span>
      </a>
      <a href="<?php echo esc_url( home_url( '/bolivia-nc-bail-bonds/' ) ); ?>" class="area-mini">
        <strong>Bolivia, NC</strong>
        <span>Brunswick County Detention Center</span>
      </a>
      <a href="<?php echo esc_url( home_url( '/raleigh-nc-bail-bonds/' ) ); ?>" class="area-mini">
        <strong>Raleigh, NC</strong>
        <span>Wake County Detention Center</span>
      </a>
      <a href="<?php echo esc_url( home_url( '/whiteville-nc-bail-bonds/' ) ); ?>" class="area-mini">
        <strong>Whiteville, NC</strong>
        <span>Columbus County Detention Center</span>
      </a>
      <a href="<?php echo esc_url( home_url( '/clinton-nc-bail-bonds/' ) ); ?>" class="area-mini">
        <strong>Clinton, NC</strong>
        <span>Sampson County Detention Center</span>
      </a>
      <a href="<?php echo esc_url( home_url( '/kenansville-nc-bail-bonds/' ) ); ?>" class="area-mini">
        <strong>Kenansville, NC</strong>
        <span>Duplin County Detention Center</span>
      </a>
      <a href="<?php echo esc_url( home_url( '/fayetteville-nc-bail-bonds/' ) ); ?>" class="area-mini">
        <strong>Fayetteville, NC</strong>
        <span>Cumberland County Detention Center</span>
      </a>
    </div>
  </div>
</section>
