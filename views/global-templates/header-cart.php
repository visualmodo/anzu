<?php
/**
 * Header Cart
 *
 * @package Anzu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

global $woocommerce;
if ( $woocommerce ) {

    $anzu_translate_woocommerce_title_cart = get_theme_mod( 'anzu_translate_woocommerce_title_cart', '' );

    if ( !is_woocommerce() || !is_cart() || !is_checkout() || !is_account_page() ) { ?>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="anzu-header-cart-offcanvas" aria-labelledby="anzuHeaderCartOffcanvasLabel">
            <div class="offcanvas-header">
                <h5 id="anzuHeaderCartOffcanvasLabel"><?php if ( $anzu_translate_woocommerce_title_cart ) { echo esc_attr( $anzu_translate_woocommerce_title_cart ); } else { esc_html_e( 'Shopping Cart', 'anzu' ); } ?></h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="widget_shopping_cart_content">
                    <?php woocommerce_mini_cart() ?>
                </div>
            </div>
        </div>
    <?php } ?>
<?php } ?>