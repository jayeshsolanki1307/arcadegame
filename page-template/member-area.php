<?php 
/* Template Name: Member Area Page */

if( !is_user_logged_in() ) {
    $url = get_the_permalink( 23 );
    wp_redirect( $url, 302 );
    exit;
}
get_header();
    while ( have_posts() ) : the_post();
    ?>
    
    <?php 
        set_query_var( 'page_id', get_the_ID() );
        get_template_part( 'template-parts/header', 'section' ); 
    ?>

    <section class="member-data-section">
        <form class="inner-member-div">
            <div class="member-data-boxs">
                <div class="single-member-box">
                    <h3><?php esc_html_e( 'Your Account', 'arcade-game' )?></h3>
                    <div class="user-data">
                        <div class="user-one-data">
                            <label for="name"><?php esc_html_e( 'Name', 'arcade-game' )?>:</label>
                            <input type="text" name="name" id="name" value="" placeholder="John Doe">
                        </div>
                        <div class="user-one-data">
                            <label for="email"><?php esc_html_e( 'Email', 'arcade-game' )?>:</label>
                            <input type="text" id="email" name="email" value="" placeholder="johndoe@hotmail.com">
                        </div>
                    </div>
                </div>
                <div class="single-member-box">
                    <h3><?php esc_html_e( 'Membership Plan', 'arcade-game' )?></h3>
                    <div class="user-data">
                        <div class="user-one-data">
                            <label for="type"><?php esc_html_e( 'Type', 'arcade-game' )?>:</label>
                            <input type="text" id="type" name="type" value="" placeholder="Standard">
                        </div>
                        <div class="user-one-data">
                            <label for="expire_start"><?php esc_html_e( 'Expires', 'arcade-game' )?>:</label>
                            <input type="text" name="expire_start" id="expire_start" value="" placeholder="1 January 2024" >
                        </div>
                    </div>
                </div>
                <div class="single-member-box">
                    <h3><?php esc_html_e( 'Your Account', 'arcade-game' )?></h3>
                    <div class="user-data">
                        <div class="user-one-data">
                            <label for="card"><?php esc_html_e( 'Card', 'arcade-game' )?>:</label>
                            <input type="text" id="card" name="card" value="" placeholder="Visa x5225">
                        </div>
                        <div class="user-one-data">
                            <label for="expire_end"><?php esc_html_e( 'Expires', 'arcade-game' )?>:</label>
                            <input type="text" id="expire_end" name="expire_end" value="" placeholder="04/26"> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="member-buttons">
                <a href="<?php echo get_the_permalink(12)?>"><?php esc_html_e( 'Contact Support', 'arcade-game' )?></a>
                <a href="javascript:void(0)"><?php esc_html_e( 'Cancel Membership', 'arcade-game' )?></a>
                <a href="javascript:void(0)"><?php esc_html_e( 'Update Credit Card', 'arcade-game' )?></a>
                <a href="<?php echo get_the_permalink(141)?>"><?php esc_html_e( 'Upgrade Plan', 'arcade-game' )?></a>
            </div>
        </form>
    </section>

    <section class="game-list near-footer-game-list">
        <div class="grid-con">
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/1.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/3.png" class="card-img">
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
            <div class="game-card box-22">
                <img src="<?php echo THEME_URI?>/images/25.png" class="card-img">
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
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/14.png" class="card-img">
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
                <img src="<?php echo THEME_URI?>/images/32.png" class="card-img">
            </div>
            <div class="game-card box-11">
                <img src="<?php echo THEME_URI?>/images/33.png" class="card-img">
            </div>
        </div>
    </section>
    <?php
    endwhile;
get_footer();
?>