<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>
</div>
<footer class="last-footer">
	<div class="nav-bar">
		<div class="left-button">
			<?php if ( is_user_logged_in() ) { ?>
				<button><a href="<?php echo home_url('/')?>member-area"><i class="fa-solid fa-user"></i><?php esc_html_e('Member Area','game')?></a></button>
			<?php }else{ ?>
				<button><a href="<?php echo home_url('/')?>sign-up"><i class="fa-solid fa-user"></i><?php esc_html_e('Login','game')?></a></button>
			<?php } ?>			
		</div>
		
		<?php
			if ( has_nav_menu( 'footer_menu' ) ) :
				?>
				<div class="nav-links">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer_menu',
								'container' => false,
							)
						);
					?>
					</div>
				<?php
			endif;
		?>
	</div>
	<p>ARCADE Copyright 2022</p>
</footer>

<?php wp_footer(); ?>
</body>
</html>
