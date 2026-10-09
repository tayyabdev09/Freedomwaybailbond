<?php
/**
 * Template part for displaying neighboring county detention facilities (Spoke-to-Spoke linking).
 *
 * @package FreedomWay
 */

$current_area = ! empty( $args['current_area'] ) ? $args['current_area'] : '';

$nearby_areas = array(
    'wilmington' => array(
        array( 'title' => 'Burgaw, NC', 'county' => 'Pender County', 'desc' => 'Pender County Jail' , 'url' => '/burgaw-pender-county-nc-bail-bonds/' ),
        array( 'title' => 'Bolivia, NC', 'county' => 'Brunswick County', 'desc' => 'Brunswick County Detention Center', 'url' => '/bolivia-nc-bail-bonds/' ),
        array( 'title' => 'Whiteville, NC', 'county' => 'Columbus County', 'desc' => 'Columbus County Detention Center', 'url' => '/whiteville-nc-bail-bonds/' ),
    ),
    'burgaw' => array(
        array( 'title' => 'Wilmington, NC', 'county' => 'New Hanover County', 'desc' => 'New Hanover County Detention Facility', 'url' => '/wilmington-nc-bail-bonds/' ),
        array( 'title' => 'Kenansville, NC', 'county' => 'Duplin County', 'desc' => 'Duplin County Detention Center', 'url' => '/kenansville-nc-bail-bonds/' ),
        array( 'title' => 'Clinton, NC', 'county' => 'Sampson County', 'desc' => 'Sampson County Detention Center', 'url' => '/clinton-nc-bail-bonds/' ),
    ),
    'bolivia' => array(
        array( 'title' => 'Wilmington, NC', 'county' => 'New Hanover County', 'desc' => 'New Hanover County Detention Facility', 'url' => '/wilmington-nc-bail-bonds/' ),
        array( 'title' => 'Whiteville, NC', 'county' => 'Columbus County', 'desc' => 'Columbus County Detention Center', 'url' => '/whiteville-nc-bail-bonds/' ),
        array( 'title' => 'Burgaw, NC', 'county' => 'Pender County', 'desc' => 'Pender County Jail', 'url' => '/burgaw-pender-county-nc-bail-bonds/' ),
    ),
    'raleigh' => array(
        array( 'title' => 'Fayetteville, NC', 'county' => 'Cumberland County', 'desc' => 'Cumberland County Detention Center', 'url' => '/fayetteville-nc-bail-bonds/' ),
        array( 'title' => 'Clinton, NC', 'county' => 'Sampson County', 'desc' => 'Sampson County Detention Center', 'url' => '/clinton-nc-bail-bonds/' ),
        array( 'title' => 'Wilmington, NC', 'county' => 'New Hanover County', 'desc' => 'New Hanover County Detention Facility', 'url' => '/wilmington-nc-bail-bonds/' ),
    ),
    'whiteville' => array(
        array( 'title' => 'Bolivia, NC', 'county' => 'Brunswick County', 'desc' => 'Brunswick County Detention Center', 'url' => '/bolivia-nc-bail-bonds/' ),
        array( 'title' => 'Wilmington, NC', 'county' => 'New Hanover County', 'desc' => 'New Hanover County Detention Facility', 'url' => '/wilmington-nc-bail-bonds/' ),
        array( 'title' => 'Clinton, NC', 'county' => 'Sampson County', 'desc' => 'Sampson County Detention Center', 'url' => '/clinton-nc-bail-bonds/' ),
    ),
    'clinton' => array(
        array( 'title' => 'Fayetteville, NC', 'county' => 'Cumberland County', 'desc' => 'Cumberland County Detention Center', 'url' => '/fayetteville-nc-bail-bonds/' ),
        array( 'title' => 'Kenansville, NC', 'county' => 'Duplin County', 'desc' => 'Duplin County Detention Center', 'url' => '/kenansville-nc-bail-bonds/' ),
        array( 'title' => 'Burgaw, NC', 'county' => 'Pender County', 'desc' => 'Pender County Jail', 'url' => '/burgaw-pender-county-nc-bail-bonds/' ),
    ),
    'kenansville' => array(
        array( 'title' => 'Clinton, NC', 'county' => 'Sampson County', 'desc' => 'Sampson County Detention Center', 'url' => '/clinton-nc-bail-bonds/' ),
        array( 'title' => 'Burgaw, NC', 'county' => 'Pender County', 'desc' => 'Pender County Jail', 'url' => '/burgaw-pender-county-nc-bail-bonds/' ),
        array( 'title' => 'Wilmington, NC', 'county' => 'New Hanover County', 'desc' => 'New Hanover County Detention Facility', 'url' => '/wilmington-nc-bail-bonds/' ),
    ),
    'fayetteville' => array(
        array( 'title' => 'Clinton, NC', 'county' => 'Sampson County', 'desc' => 'Sampson County Detention Center', 'url' => '/clinton-nc-bail-bonds/' ),
        array( 'title' => 'Raleigh, NC', 'county' => 'Wake County', 'desc' => 'Wake County Detention Center', 'url' => '/raleigh-nc-bail-bonds/' ),
        array( 'title' => 'Kenansville, NC', 'county' => 'Duplin County', 'desc' => 'Duplin County Detention Center', 'url' => '/kenansville-nc-bail-bonds/' ),
    ),
);

$items = ! empty( $nearby_areas[ $current_area ] ) ? $nearby_areas[ $current_area ] : array();
if ( ! empty( $items ) ) :
?>
<!-- ===================== NEARBY REGIONAL FACILITIES ===================== -->
<section class="section section-soft" id="nearby-areas">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Adjacent Counties</span>
      <h2>Nearby Detention Facilities We Serve</h2>
      <div class="divider"></div>
      <p>Arrested in an adjoining county? Our licensed North Carolina bondsmen provide direct 24/7 service across the entire regional corridor.</p>
    </div>
    <div class="area-mini-grid reveal">
      <?php foreach ( $items as $item ) : ?>
        <a href="<?php echo esc_url( home_url( $item['url'] ) ); ?>" class="area-mini">
          <strong><?php echo esc_html( $item['title'] ); ?></strong>
          <span><?php echo esc_html( $item['county'] ); ?> · <?php echo esc_html( $item['desc'] ); ?></span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>
