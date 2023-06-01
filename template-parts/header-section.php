<?php
    $sec_cls='';
    if ( is_single() && 'cpt_arcade_game' == get_post_type() ) {
        $sec_cls='game-detail-page';
    }else{
        $sec_cls='';
    }    
?>
<section class="game-list one-line-game-list <?php echo $sec_cls?> other-page">
    <div class="grid-con">
        <div class="game-card box-11">
            <img src="<?php echo THEME_URI?>/images/1.png" class="card-img">
        </div>
        <?php
            $page_id = get_query_var( 'page_id' );
            if( is_404() ){ 
                $pageTitle = '404';
            }else{
                $pageTitle = get_the_title( $page_id );
            }
            
            $posts_per_page = 10;
            $args = array(							
                'post_type' => 'cpt_arcade_game',
                'post_status' => 'publish',
                'posts_per_page' => $posts_per_page,						
                'order'  => 'desc',
                'orderby' => 'date',	
            );
            $query = new WP_Query( $args );

            if ( $query->have_posts() ) {  
                $counter = 0;
                while ( $query->have_posts() ) : $query->the_post();  
                    $counter++;
                    $game_id = get_the_ID();
                    $gameImage = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID()) );
                    if( $counter == 2 ){
                        if ( is_single() && 'cpt_arcade_game' == get_post_type() ) {
                            $postImage = wp_get_attachment_url( get_post_thumbnail_id( $page_id ) );
                            $back_style='';
                            if( !empty( $postImage ) ){
                                $back_style = 'style="background-image:url('.$postImage.')"';
                            }
                            ?>
                            <div class="game-card box-12 game-page-title" <?php echo $back_style?>>
                                <h1><?php echo $pageTitle;?></h1>
                            </div>
                            <?php
                        }else{
                        ?>
                        <div class="game-card box-12 game-page-title">
                            <h1><?php echo $pageTitle;?></h1>
                        </div>
                        <?php
                        }
                    }else{
                        ?>
                        <div class="game-card box-11">
                            <img src="<?php echo $gameImage?>" class="card-img">
                        </div>
                        <?php
                    }         
                endwhile; wp_reset_query();
            }                
        ?>			
    </div>
</section>