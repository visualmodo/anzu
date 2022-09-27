<?php
/**
 * Header Offcanvas
 *
 * @package Anzu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$anzu_translate_offcanvas = get_theme_mod( 'anzu_translate_offcanvas', '' );
$anzu_header_offcanvas_dark_mode = get_theme_mod( 'anzu_header_offcanvas_dark_mode', '' );
$anzu_header_offcanvas_alert_dark_mode = $anzu_header_offcanvas_dark_mode == '' ? 'dark' : 'light';
$offcanvas_btn_dark_mode = $anzu_header_offcanvas_dark_mode == '' ?: 'btn-close-white';
$anzu_header_offcanvas_dark_mode = $anzu_header_offcanvas_dark_mode == '' ?: 'text-bg-dark';

?>

<div class="anzu-header-offcanvas offcanvas offcanvas-end <?php echo esc_attr( $anzu_header_offcanvas_dark_mode ); ?>" data-bs-backdrop="static" tabindex="-1" id="anzu-header-offcanvas" aria-labelledby="anzuHeaderOffcanvasLabel">
			<div class="offcanvas-header">
				<h5 class="offcanvas-title" id="anzuHeaderOffcanvasLabel"><?php if ( $anzu_translate_offcanvas ) { echo esc_attr( $anzu_translate_offcanvas ); } else { esc_html_e( 'Offcanvas', 'anzu' ); } ?></h5>
				<button type="button" class="btn-close <?php echo esc_attr( $offcanvas_btn_dark_mode ); ?>" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
                <?php if ( is_active_sidebar( 'offcanvas' ) ) { ?>
                    <?php dynamic_sidebar( 'offcanvas' ); ?>
                <?php } else { ?>
                    <p class="alert alert-<?php echo esc_attr( $anzu_header_offcanvas_alert_dark_mode ); ?> m-3"><?php esc_html_e( 'Your site doesn’t have any widgets in the Offcanvas Sidebar, so there’s nothing to display here at the moment.', 'anzu' ); ?></p>
                <?php } ?>
			</div>
		</div>
