<?php
/********* Include Theme CSS / JS Start *********/
define('THEME_URI',get_template_directory_uri());
function theme_styles()
{   
    wp_enqueue_style( 'bootstrap', THEME_URI . '/css/bootstrap.min.css' );    
    wp_enqueue_style( 'all.min', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' );    
    wp_enqueue_style( 'style', THEME_URI. '/css/style.css' );
	wp_enqueue_style( 'responsive', THEME_URI. '/css/responsive.css' );
    //wp_enqueue_style( 'all.min', THEME_URI. '/css/all.min.css' );    

    wp_enqueue_script( 'bootstrap', THEME_URI . '/js/bootstrap.min.js', array( 'jquery' ), time(),true );
    wp_enqueue_script( 'main', THEME_URI. '/js/main.js', array( 'jquery' ), time(),true );		
    
    wp_enqueue_script( 'ajax-script', THEME_URI . '/js/ajax_script.js', array( 'jquery' ), time(), true );
    wp_localize_script( 'ajax-script', 'admin_url', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );	
}
add_action('wp_enqueue_scripts', 'theme_styles', 99);
/********* Include Theme CSS / JS End *********/

/********* Register Nav Menus Start *********/
register_nav_menus(
    array(
        'footer_menu'  => __( 'Footer Menu', 'twentyseventeen' ),
    )
);
/********* Register Nav Menus End *********/

/********* Disable Gutenberg Start *********/
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);
/********* Disable Gutenberg End *********/

/*==--==--==--==--==-- Arcade Game Custom Post Type --==--==--==--==--==*/
function arcade_game_cpt() {

    $labels = array(
        'name' => _x('Arcade Game', 'plural'),        
        'singular_name' => _x('Arcade Game', 'singular'),
        'menu_name' => _x('Arcade Games', 'admin menu'),
        'name_admin_bar' => _x('Arcade Game', 'admin bar'),
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => __('Add New Arcade Game'),
        'new_item' => __('New Arcade Game'),
        'edit_item' => __('Edit Arcade Game'),
        'view_item' => __('View Arcade Game'),
        'all_items' => __('All Arcade Game'),
        'search_items' => __('Search Arcade Game'),
        'not_found' => __('No Arcade Game found.'),
    );
    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-games',
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
        'show_in_rest' => true,
        'public' => true,
        'archive' => false,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'game'),
        'has_archive' => true,
        'hierarchical' => false,
    );

    /******** Featured Category ********/
    $featured_taxonomy_labels = array(
        'name'          => __('Featured Category','taxonomy general name',''),
        'singular_name' => __('Featured Category','taxonomy singular name','game'),
        'search_items'  => __('Search Featured Categories','game'),
        'all_items'     => __('All Featured Categories','game'),
        'parent_item'   => __('Parent Featured Category','game'),              
        'edit_item'     => __('Edit Featured Category','game'),
        'view_item'     => __('View Featured Category','game'),
        'update_item'   => __('Update Featured Category','game'),
        'add_new_item'  => __('Add New Featured Category','game'),
        'new_item_name' => __('New Featured Category Name','game'),
        'menu_name'     => __('Featured Category','game'),
    );

    $featured_taxonomy_args = array(
        'hierarchical' => true,
        'labels'       => $featured_taxonomy_labels,
        'show_ui'      => true,
        'rewrite'      => array('slug' => 'arcade_game_featured_category','with_front' => false),
    );    
    register_taxonomy('arcade_game_featured_category','cpt_arcade_game',$featured_taxonomy_args);
	/******** FeaturedCategory ********/	

	/******** Category ********/
    $taxonomy_labels = array(
        'name'          => __('Category','taxonomy general name',''),
        'singular_name' => __('Category','taxonomy singular name','game'),
        'search_items'  => __('Search Categories','game'),
        'all_items'     => __('All Categories','game'),
        'parent_item'   => __('Parent Category','game'),              
        'edit_item'     => __('Edit Category','game'),
        'view_item'     => __('View Category','game'),
        'update_item'   => __('Update Category','game'),
        'add_new_item'  => __('Add New Category','game'),
        'new_item_name' => __('New Category Name','game'),
        'menu_name'     => __('Category','game'),
    );

    $taxonomy_args = array(
        'hierarchical' => true,
        'labels'       => $taxonomy_labels,
        'show_ui'      => true,
        'rewrite'      => array('slug' => 'arcade_game_category','with_front' => false),
    );    
    register_taxonomy('arcade_game_category','cpt_arcade_game',$taxonomy_args);
	/******** Category ********/	

    register_post_type('cpt_arcade_game', $args);
}
add_action('init', 'arcade_game_cpt');
/*==--==--==--==--==-- Arcade Game Custom Post Type --==--==--==--==--==*/

############### Custom User Registraton Code Start ###############
add_action('wp_ajax_ajaxUserRegister','ajaxUserRegister_callback');
add_action('wp_ajax_nopriv_ajaxUserRegister','ajaxUserRegister_callback');	
function ajaxUserRegister_callback()
{
    $response_msg = '';
    $status = false;
    $emailSend='';
    $errorName = '';
    $nonce = $_POST['user_registration_nonce'];
    if ( ! wp_verify_nonce( $nonce, 'user_registration_action' ) )
    {
        return;
    }  
    
    $user_name  = stripcslashes($_POST['user_name']);
    $user_email = stripcslashes($_POST['user_email']);
    $user_phone = stripcslashes($_POST['user_phone']);
    $user_pass  = $_POST['user_password'];
    $conf_pass  = $_POST['conf_password'];
    
    if( empty( $user_name ) ) {
        $response_msg = __( 'First Name is required.', 'arcade-game' );
        $errorName = 'user_name';
        $status = false;
    } else if( username_exists( $user_name ) ) {
        $response_msg = __( 'User name already exists.', 'arcade-game' );
        $errorName = 'user_name';
        $status = false;
    } else if( empty( $user_email ) ) {
        $response_msg = __( 'E-mail is required.', 'arcade-game' );
        $errorName = 'user_email';
        $status = false;
    } else if( !filter_var( $user_email, FILTER_VALIDATE_EMAIL) ) {
        $response_msg = __( 'E-mail is not valid', 'arcade-game' );
        $errorName = 'user_email';
        $status = false;
    } else if( email_exists( $user_email ) ) {
        $errorName = 'user_email';
        $response_msg = __( 'E-mail is already registered', 'arcade-game' );
        $status = false;
    } else if( empty( $user_phone ) ) {
        $errorName = 'user_phone';
        $response_msg = __( 'Phone Number is required', 'arcade-game' );
        $status = false;
    } else if( empty( $user_pass ) ) {
        $errorName = 'user_pass';
        $response_msg = __( 'Password is required', 'arcade-game' );
        $status = false;
    } else if( empty( $conf_pass ) ) {
        $errorName = 'conf_pass';
        $response_msg = __( 'Confirm Password is required', 'arcade-game' );
        $status = false;
    } else if( $user_pass != $conf_pass ) {
        $errorName = 'conf_pass';
        $response_msg = __( 'Password and Confirm password not matched', 'arcade-game' );
        $status = false;
    }else{
        $user_data = array(
            'user_login' => $user_name,
            'user_email' => $user_email,
            'user_pass' => $user_pass,
            'user_nicename' => $user_name,
            'display_name' => $user_name,
            'role' => 'subscriber'
        );
        $user_id = wp_insert_user($user_data);
        update_user_meta( $user_id, 'user_phone', $user_phone );

        if ( !is_wp_error( $user_id ) ) {
            $response_msg = __( 'We have Created an account for you.', 'arcade-game' );
            $status = true;
        }

        /*$subject = 'Your Access Credentials ' . get_bloginfo('url');
       
        $body = '<p>Dear Customer,</p>';
        $body .= '<p>we have set an account for you on <span style="font-weight: bold;"><a href="'.get_bloginfo('url').'">'.get_bloginfo('name').'</a></span>.</p>';
        $body .= '<p>You can use this account to update your information.</p>';
        $body .= '<div style="width: 90%; margin-left: 5%; background-color: #edf2f7; text-align: center; padding: 15px 0;"> ';
        $body .= '<p>Your Login Credentials are:</p>';
        $body .= '<p><span style="font-weight: bold;">Email: </span>'.$user_email.'</p>';
        $body .= '<p><span style="font-weight: bold;">Password: </span>'.$user_pass.'</p>';
        $body .= '</div>';
        $body .= '<p>To access your account you can login <a href="'.get_bloginfo('url').'/login">here</a></p>';
        $body .= '<p>Kind Regards,</p><p>'.get_bloginfo('name').' Team</p>';
       
        $admin_email = 'jayesh.dazzlebirds@gmail.com';

        $headers[] = 'Content-type: text/plain; charset=utf-8'. "\r\n";
        $headers[] .= 'From: '.get_bloginfo('name').' <'.$admin_email.'>'. "\r\n"; 
        
        $sentEmail = wp_mail( $user_email, $subject, $body, $headers );
        if( $sentEmail ){
            $emailSend='Send Successfully';
        }*/
    }
    $response_Arr = array();
    $response_Arr['results']   = $response_msg;
    $response_Arr['status']    = $status;
    $response_Arr['sentEmail'] = $emailSend;
    $response_Arr['errorName'] = $errorName;
    echo json_encode( $response_Arr );
    die();
}
############### Custom User Registraton Code End ###############

############### Custom Ajax Header Search Code Start ###############
add_action('wp_ajax_search_game_action','search_game_action_callback');
add_action('wp_ajax_nopriv_search_game_action','search_game_action_callback');	
function search_game_action_callback()
{
    $search_key = trim( $_REQUEST['search_key'] );
    $cat_id = $_REQUEST['cat_id'];
    $posts_per_page = -1;

    $tax_query='';
    $tax_query_arr = array();
    $status = false;

    $args = array(							
        'post_type' => 'cpt_arcade_game',
        'post_status' => 'publish',
        'posts_per_page' => $posts_per_page,						
        'order'  => 'desc',
        'orderby' => 'date',	
        's' => $search_key,	
    );


    if( !empty( $cat_id ) ) {        
        $tax_query='yes';        
        $tax_query_arr[] = array(
            'taxonomy' => 'arcade_game_featured_category',
            'field' => 'term_id',
            'terms' =>  $cat_id,
        );    
    }

    if( $tax_query=='yes' )
    {
        $args['tax_query'] = array(
            'relation' => 'AND',   
            $tax_query_arr,
        );
    }

    $query = new WP_Query( $args );

    ob_start();
    if( !empty( $search_key ) ){
        if ( $query->have_posts() ) {     
            $status = true;

            $terms = get_terms( array(
                'taxonomy' => 'arcade_game_featured_category',
                'hide_empty' => false,
            ) );
            if( $terms ):
            ?>
            <div class="filter-btn">
                <?php foreach ( $terms as $key => $term ) { ?>
                    <div class="filter-btn-link"><a href="javascript:void(0)" class="cat-click <?php if( $term->term_id==$cat_id ) { echo 'active';}?>" data-id="<?php echo $term->term_id?>"><?php echo $term->name?></a></div>
                <?php } ?>
            </div>
            <?php endif;?>

            <h4><?php esc_html_e( 'Recently Added', 'arcade-game' )?></h4>
            <div class="modal-games-box">
                <div class="inner-modal-box">
                    <?php
                        while ( $query->have_posts() ) : $query->the_post();  
                            $game_id = get_the_ID();
                            $gameImage = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID()) );
                            ?>
                            <div class="single-modal-box">
                                <img src="<?php echo $gameImage?>">
                            </div>
                            <?php            
                        endwhile;
                    ?>
                </div>
            </div>
            <?php            
        }else{
            $status = false;
            $terms = get_terms( array(
                'taxonomy' => 'arcade_game_featured_category',
                'hide_empty' => false,
            ) );
            if( $terms ):
            ?>
            <div class="filter-btn">
                <?php foreach ( $terms as $key => $term ) { ?>
                    <div class="filter-btn-link"><a href="javascript:void(0)" class="cat-click <?php if( $term->term_id==$cat_id ) { echo 'active';}?>" data-id="<?php echo $term->term_id?>"><?php echo $term->name?></a></div>
                <?php } ?>
            </div>
            <?php endif;
            echo '<p>Search results not found</p>';
        }
    }else{
        $status = false;
        echo '<p>Please enter search keywords</p>';
    }    
    
    $result = ob_get_clean();

    $maxPage = $query->max_num_pages;  
    $res_arr = array();
    $res_arr['status'] = $status;
    $res_arr['result'] = $result;
    $res_arr['total_page'] = $maxPage;

    echo json_encode( $res_arr );
    die();
}
############### Custom Ajax Header Search Code End ###############

############### Display User Phone Number in Backend Start ###############
function add_user_columns($column) {
    $column['user_phone'] = 'Phone Number';
    return $column;
}
add_filter( 'manage_users_columns', 'add_user_columns' );

//add the data
function add_user_column_data( $val, $column_name, $user_id ) {
    $user = get_userdata($user_id);

    switch ($column_name) {
        case 'user_phone' :
            return $user->user_phone;
            break;
        default:
    }
    return;
}
add_filter( 'manage_users_custom_column', 'add_user_column_data', 10, 3 );
############### Display User Phone Number in Backend End ###############
