<?php 
/* Template Name: Upgrade Plan Page */
get_header();
    while ( have_posts() ) : the_post();
    ?>
    
    <?php 
        set_query_var( 'page_id', get_the_ID() );
        get_template_part( 'template-parts/header', 'section' ); 
    ?>

    <section class="contact-section upgrade-section">
        <div class="contact-form-div">
            <h2>This content is only available with a Premium plan</h2>
            <h5>Upgrade now for only $4,99 per month!</h5>
            <p>Please enter your billing details</p>
            <form class="contact-form">
                <div class="form-input half-input">
                    <input type="text" id="address_line_1" name="address_line_1" placeholder="Address Line 1">
                </div>
                <div class="form-input half-input">
                    <input type="text" id="address_line_2" name="address_line_2" placeholder="Address Line 2">
                </div>
                <div class="form-input half-input">
                    <input type="text" id="city" name="city" placeholder="City">
                </div>
                <div class="form-input half-input">
                    <input type="text" id="postcode" name="postcode" placeholder="Postcode">
                </div>
                <div class="form-input half-input">
                    <input type="text" id="state" name="state" placeholder="State">
                </div>
                <div class="form-input half-input">
                    <input type="text" id="country" name="country" placeholder="Country">
                </div>
                <div class="form-submit-btn center">
                    <button type="submit"><?php esc_html_e( 'UPGRADE NOW', 'arcade-game' )?></button>
                </div>
            </form>
        </div>
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