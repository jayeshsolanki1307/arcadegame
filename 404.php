<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header();
set_query_var( 'page_id', get_the_ID() );
get_template_part( 'template-parts/header', 'section' );
?>
<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="error-404 not-found">
				<div class="page-content">
					<img src="<?php echo THEME_URI?>/images/404.png">
					<p><?php _e( 'It looks like nothing was found at this location.', 'arcade-game' ); ?></p>
					<div class="back-home-btn"><a href="<?php echo home_url()?>" class="globle-btn"><?php _e('Back to home','arcade-game')?></a></div>					
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();
