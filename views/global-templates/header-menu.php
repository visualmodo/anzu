<?php
/**
 * Header Menu
 *
 * @package Anzu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$anzu_translate_menu = get_theme_mod( 'anzu_translate_menu', '' );
$anzu_header_menu_position = get_theme_mod( 'anzu_header_menu_position', 'justify-content-end' );
$anzu_header_dark_mode = get_theme_mod( 'anzu_header_dark_mode', '' ) ? 'anzu-dark-mode' : 'anzu-light-mode';
$dark_mode = $anzu_header_dark_mode == 'anzu-light-mode' ? '' : 'text-bg-dark';
$offcanvas_btn_dark_mode = $anzu_header_dark_mode == 'anzu-light-mode' ? '' : 'btn-close-white';

?>

<div class="offcanvas offcanvas-end <?php echo esc_attr( $dark_mode ); ?>" data-bs-backdrop="static" tabindex="-1" id="anzu-header-menu-offcanvas" aria-labelledby="anzuHeaderMenuCanvasLabel">

    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="anzuHeaderMenuCanvasLabel"><?php if ( $anzu_translate_menu ) { echo esc_attr( $anzu_translate_menu ); } else { esc_html_e( 'Menu', 'anzu' ); } ?></h5>
        <button type="button" class="btn-close <?php echo esc_attr( $offcanvas_btn_dark_mode ); ?>" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <?php

    wp_nav_menu(
        array(
            'theme_location'  => 'primary',
            'container_class' => 'offcanvas-body '.esc_attr( $anzu_header_menu_position ),
            'container_id'    => 'navbarNavDropdown',
            'menu_class'      => 'navbar-nav ml-auto',
            'fallback_cb'     => '',
            'menu_id'         => 'main-menu',
            'depth'           => 2,
            'walker'          => new Anzu_WP_Bootstrap_Navwalker(),
        )
    );

    ?>
    
</div>