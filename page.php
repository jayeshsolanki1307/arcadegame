<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
	<?php while ( have_posts() ) : the_post(); ?>
		<section class="game-details">
			<h3><?php the_title()?></h3>
			<?php the_content();?>
		</section>
	<?php endwhile; ?>
	<?php
get_footer();