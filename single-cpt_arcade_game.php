<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header();
    while ( have_posts() ) : the_post();
    // $postImage = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
    // $back_style='';
    // if( !empty( $postImage ) ){
    //     $back_style = 'style="background-image:url('.$postImage.')"';
    // }

    set_query_var( 'page_id', get_the_ID() );
	get_template_part( 'template-parts/header', 'section' ); 

    $iframeCode = get_field('iframe_code');
    ?>
    <section class="game-list related-games other-page">
        <div class="grid-con">
            <?php if( !empty( $iframeCode ) ): ?>
                <div class="game-card box-46 game-page-card">
                    <?php echo $iframeCode;?>
                </div>
            <?php endif;?>

            
            <div class="game-card box-12">
                <img src="<?php echo THEME_URI?>/images/59.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/15.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/16.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/17.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/18.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/19.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/20.png" class="card-img">
            </div>
            
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/22.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/23.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/24.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/26.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/27.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/28.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/29.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/12.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/13.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/14.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/15.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/16.png" class="card-img">
            </div>
            <div class="game-card box-12">
                <img src="<?php echo THEME_URI?>/images/60.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/18.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/19.png" class="card-img">
            </div>
            <div class="game-card box-22">
                <img src="<?php echo THEME_URI?>/images/57.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/21.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/22.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/23.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/24.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/26.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/27.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/28.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/29.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/30.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/31.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/22.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/23.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/32.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/2.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/4.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/5.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/6.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/7.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/8.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/9.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/10.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/12.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/13.png" class="card-img">
            </div>
        </div>
    </section>

    <?php if( get_the_content() ):?>
        <section class="game-details">
            <?php the_content() ?>
        </section>
    <?php endif;?>
    <?php
    endwhile;
get_footer();