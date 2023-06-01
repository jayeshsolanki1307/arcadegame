<?php 
/* Template Name: Register Page */

if( is_user_logged_in() ) {
    $url = get_the_permalink( 133 );
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
    <section class="contact-section sign-up-section">
        <div class="contact-form-div">
            <h2>Create your free account today</h2>
            <form class="contact-form" id="register_form" method="POST" name="register_form">
                <?php
                    if ( function_exists( 'wp_nonce_field' ) ){
                        wp_nonce_field( 'user_registration_action', 'user_registration_nonce' );
                    }
                ?>
                <div class="form-input">
                    <input type="text" name="user_name" placeholder="First Name" id="user_name">
                </div>
                <div class="form-input">
                    <input type="text" name="user_email" placeholder="Email Address" id="user_email">
                </div>
                <div class="form-input">
                    <input type="phone" name="user_phone" placeholder="Phone Number" id="user_phone">
                </div>
                <div class="form-input">
                    <input type="password" name="user_password" placeholder="Password" id="user_password">
                </div>
                <div class="form-input">
                    <input type="password" name="conf_password" placeholder="Re-enter Password" id="conf_password">
                </div>
                <input type="hidden" name="action" value="ajaxUserRegister">
                <div class="form-submit-btn">
                    <button type="submit">CREATE ACCOUNT</button>
                </div>
            </form>
            <p class="register-message" style="display:none"></p>
        </div>
                
        <?php if( get_the_content() ) : ?>
			<div class="contact-detail register-page-content">
				<?php the_content();?>
			</div>
		<?php endif;?>
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