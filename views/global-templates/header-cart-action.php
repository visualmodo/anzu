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
    if ( is_woocommerce() || is_cart() || is_checkout() || is_account_page() ) { ?>
        <div class="anzu-header-cart">
            <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'anzu' ); ?>"><i class="bi bi-bag-fill"></i><span class="cart-content-count"><?php echo $woocommerce->cart->cart_contents_count; ?></span></a>
        </div>
    <?php } else { ?>
        <div class="anzu-header-cart">
            <div data-bs-toggle="offcanvas" data-bs-target="#anzu-header-cart-offcanvas" aria-controls="anzu-header-cart-offcanvas">
                <i class="bi bi-bag-fill"></i>
                <span class="cart-content-count"><?php echo $woocommerce->cart->cart_contents_count; ?></span>
            </div>
        </div>
    <?php } ?>
<?php } ?>