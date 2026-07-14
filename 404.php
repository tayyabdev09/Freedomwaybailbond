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
        <h1 style="font-size: 28px; margin-bottom: 15px; color: #222; font-weight: 700;">
            The page you are looking for was not found.
        </h1>
        <p style="font-size: 18px; margin-bottom: 30px; color: #555; line-height: 1.6;">
            It may have been moved, deleted, or the URL might be incorrect.
        </p>
        
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" 
           style="display: inline-block; padding: 15px 35px; background-color: #d11e24; color: #ffffff; text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 16px; transition: background-color 0.3s ease; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
            Go to Homepage
        </a>
    </div>
</div>

<?php 
get_footer(); 
?>