<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" /> -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="full-body">
        <!-- Modal -->
        <div class="modal fade search-modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <form class="search-input" id="search_form">
                            <input type="text" name="search_key" id="search_key" placeholder="Search...">
                            <a href="javascript:void(0)" class="search_game"><i class="fa-solid fa-magnifying-glass"></i></a>
                        </form>
                        <input type="hidden" id="cat_id" value="">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                </div>
            </div>
        </div>
        <header class="game-card nav-icon-div">
            <div class="nav-icon">
                <a href="<?php echo home_url()?>"><i class="fa-solid fa-house-user"></i></a>
                <a href="javascript:void(0)"><i class="fa-solid fa-magnifying-glass" data-toggle="modal" data-target="#exampleModal"></i></a>
            </div>
            <div class="nav-button">
                <button><img src="<?php echo THEME_URI?>/images/dyznic.png"></button>
            </div>
        </header>