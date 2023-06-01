<?php 
/* Template Name: Contact Page */
get_header();       
    while ( have_posts() ) : the_post();
    set_query_var( 'page_id', get_the_ID() );
    get_template_part( 'template-parts/header', 'section' ); 
    ?>
    <section class="contact-section">
        <?php
            $formShortcode = get_field('form_shortcode', get_the_ID() );
            if( !empty( $formShortcode ) ):
            ?>
            <div class="contact-form-div">
                <h2><?php _e('Reach out to us!','');?></h2>
                <?php echo do_shortcode( $formShortcode )?>
            </div>
        <?php endif;?>
			
		<div class="contact-detail contact-page-content">
            <?php the_content();?>
        </div>
    </section>
    <?php    
    endwhile;
get_footer();
?>