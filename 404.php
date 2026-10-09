<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Freedom_Way_Bail_Bonds
 */

get_header(); 
?>

<div class="error-404-container" style="padding: 100px 20px; text-align: center; max-width: 1200px; margin: 0 auto; box-sizing: border-box;">
    <div class="error-404-image" style="margin-bottom: 40px;">
        <img src="https://freedomwaybailbonds.com/wp-content/uploads/2026/07/page-not-found.png" 
             alt="Page Not Found" 
             style="max-width: 100%; height: auto; display: inline-block; border-radius: 8px;" />
    </div>

    <div class="error-404-content" style="font-family: inherit;">
        <h1 style="font-size: 32px; margin-bottom: 15px; color: #1a1f27; font-weight: 700;">
            The page you are looking for was not found.
        </h1>
        <p style="font-size: 18px; margin-bottom: 30px; color: #5a6270; line-height: 1.6; max-width: 600px; margin-left: auto; margin-right: auto;">
            It may have been moved, deleted, or the URL might be incorrect. If you or a loved one needs immediate bail assistance, our licensed bondsmen are standing by 24/7.
        </p>
        
        <div style="display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; margin-bottom: 40px;">
            <a href="tel:+19107822422" class="btn btn-primary" style="text-decoration: none;">
                Call 910-782-2422
            </a>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-ghost" style="text-decoration: none;">
                Go to Homepage
            </a>
        </div>

        <div style="max-width: 800px; margin: 0 auto; padding-top: 30px; border-top: 1px solid #dfe3ea;">
            <h2 style="font-size: 1.1rem; color: #1a1f27; margin-bottom: 16px; font-weight: 600;">Looking for a specific bail bond service?</h2>
            <div style="display: flex; flex-wrap: wrap; gap: 10px; justify-content: center;">
                <a href="<?php echo esc_url( home_url( '/traffic-bond-services/' ) ); ?>" class="toc-chip">Traffic Bail Bonds</a>
                <a href="<?php echo esc_url( home_url( '/domestic-violence-bail-bonds/' ) ); ?>" class="toc-chip">Domestic Violence Bonds</a>
                <a href="<?php echo esc_url( home_url( '/appearance-bonds/' ) ); ?>" class="toc-chip">Appearance Bonds</a>
                <a href="<?php echo esc_url( home_url( '/surety-bond-nc/' ) ); ?>" class="toc-chip">Surety Bonds</a>
                <a href="<?php echo esc_url( home_url( '/24-7-bail-bonds/' ) ); ?>" class="toc-chip">24/7 Bail Bonds</a>
            </div>
        </div>
    </div>
</div>

<?php 
get_footer(); 
?>