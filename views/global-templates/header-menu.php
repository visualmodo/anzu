<?php
/**
 * Header Menu
 *
 * @package Anzu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$anzu_header_menu_position = get_theme_mod( 'anzu_header_menu_position', 'justify-content-end' );
$anzu_header_dark_mode = get_theme_mod( 'anzu_header_dark_mode', '' ) ? 'anzu-dark-mode' : 'anzu-light-mode';
$dark_mode = $anzu_header_dark_mode == 'anzu-light-mode' ? '' : 'text-bg-dark';

?>

<div class="offcanvas offcanvas-end <?php echo esc_attr( $dark_mode ); ?>" data-bs-backdrop="static" tabindex="-1" id="anzu-header-menu-offcanvas" aria-labelledby="anzuHeaderMenuCanvasLabel">

    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="anzuHeaderMenuCanvasLabel"><?php esc_html_e( 'Menu', 'anzu' ); ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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