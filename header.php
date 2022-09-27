<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Anzu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'anzu_container', 'container' );
$anzu_header_dark_mode = get_theme_mod( 'anzu_header_dark_mode', '' ) ? 'anzu-dark-mode' : 'anzu-light-mode';
$navbar_theme_mode = $anzu_header_dark_mode == 'anzu-light-mode' ? 'navbar-light' : 'navbar-dark';
$anzu_scroll_to_top_switch = get_theme_mod( 'anzu_scroll_to_top_switch', '1' );
$anzu_notification_bar_switch = get_theme_mod( 'anzu_notification_bar_switch', '' );
$anzu_header_search_switch = get_theme_mod( 'anzu_header_search_switch', '1' );
$anzu_header_cart_switch = get_theme_mod( 'anzu_header_cart_switch', '1' );
$anzu_header_offcanvas_switch = get_theme_mod( 'anzu_header_offcanvas_switch', '' );
$anzu_header_menu_collapsed = get_theme_mod( 'anzu_header_menu_collapsed', '' );

$anzu_transparent_header_switch = get_theme_mod( 'anzu_transparent_header_switch', '' );
$anzu_metabox_transparent_header = ! empty ( get_post_meta( get_the_ID(), 'anzu_metabox_transparent_header', true ) ) ? get_post_meta( get_the_ID(), 'anzu_metabox_transparent_header', true ) : '';
$anzu_layout_disable_header = ! empty ( get_post_meta( get_the_ID(), 'anzu_layout_disable_header', true ) ) ? get_post_meta( get_the_ID(), 'anzu_layout_disable_header', true ) : '';

if ( is_object( $anzu_license ) && $anzu_license->get_api_key_status() ) {
	$anzu_sticky_header_switch = get_theme_mod( 'anzu_sticky_header_switch', '' );
	$anzu_metabox_sticky_header = ! empty ( get_post_meta( get_the_ID(), 'anzu_metabox_sticky_header', true ) ) ? get_post_meta( get_the_ID(), 'anzu_metabox_sticky_header', true ) : '';
} 

// Sticky Header.

$sticky_header = "";

if ($anzu_metabox_sticky_header != 'anzu-sticky-header--disabled') {

	if ( $anzu_metabox_sticky_header ) {
		
		$sticky_header = "anzu-sticky-header";
		$anzu_sticky_header_background_on_scroll = $anzu_metabox_sticky_header;

	} else if ( $anzu_sticky_header_switch ) {

		$anzu_sticky_header_background_on_scroll = get_theme_mod( 'anzu_sticky_header_background_on_scroll', '' );

		$anzu_sticky_header_pages = get_theme_mod( 'anzu_sticky_header_pages', '1' );
		$anzu_sticky_header_posts = get_theme_mod( 'anzu_sticky_header_posts', '1' );
		$anzu_sticky_header_blog_page = get_theme_mod( 'anzu_sticky_header_blog_page', '' );
		$anzu_sticky_header_404_archives_search = get_theme_mod( 'anzu_sticky_header_404_archives_search', '' );

		if ( is_page() && $anzu_sticky_header_pages ) {
			$sticky_header = "anzu-sticky-header";
		} else if ( is_single() && $anzu_sticky_header_posts ) {
			$sticky_header = "anzu-sticky-header";
		} else if ( is_home() && $anzu_sticky_header_blog_page ) {
			$sticky_header = "anzu-sticky-header";
		} else if ( ( is_404() || is_archive() || is_search() ) && $anzu_sticky_header_404_archives_search ) {
			$sticky_header = "anzu-sticky-header";
		}

	} else {

		$anzu_sticky_header_switch = $anzu_sticky_header_background_on_scroll = '';

	}

} else {

	$anzu_sticky_header_switch = $anzu_sticky_header_background_on_scroll = '';

}

// End Sticky Header.

// Transparent Header.

$transparent_header = $anzu_transparent_header_theme_color = "";

if ($anzu_metabox_transparent_header != 'anzu-transparent-header--disabled') {

	if ( $anzu_metabox_transparent_header ) {

		$transparent_header = "anzu-transparent-header";
		$anzu_transparent_header_theme_color = $anzu_metabox_transparent_header;

	} else if ( $anzu_transparent_header_switch ) {

		$anzu_transparent_header_pages = get_theme_mod( 'anzu_transparent_header_pages', '1' );
		$anzu_transparent_header_posts = get_theme_mod( 'anzu_transparent_header_posts', '1' );
		$anzu_transparent_header_blog_page = get_theme_mod( 'anzu_transparent_header_blog_page', '' );
		$anzu_transparent_header_404_archives_search = get_theme_mod( 'anzu_transparent_header_404_archives_search', '' );

		if ( is_page() && $anzu_transparent_header_pages ) {
			$transparent_header = "anzu-transparent-header";
			$anzu_transparent_header_theme_color = get_theme_mod( 'anzu_transparent_header_theme_color', 'anzu-transparent-header--theme-dark-mode' );
		} else if ( is_single() && $anzu_transparent_header_posts ) {
			$transparent_header = "anzu-transparent-header";
			$anzu_transparent_header_theme_color = get_theme_mod( 'anzu_transparent_header_theme_color', 'anzu-transparent-header--theme-dark-mode' );
		} else if ( is_home() && $anzu_transparent_header_blog_page ) {
			$transparent_header = "anzu-transparent-header";
			$anzu_transparent_header_theme_color = get_theme_mod( 'anzu_transparent_header_theme_color', 'anzu-transparent-header--theme-dark-mode' );
		} else if ( ( is_404() || is_archive() || is_search() ) && $anzu_transparent_header_404_archives_search ) {
			$transparent_header = "anzu-transparent-header";
			$anzu_transparent_header_theme_color = get_theme_mod( 'anzu_transparent_header_theme_color', 'anzu-transparent-header--theme-dark-mode' );
		}

	}

}

// End Transparent Header.

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php anzu_body_attributes(); ?>>

<?php
// Scroll To Top.
if ( $anzu_scroll_to_top_switch ) {
	get_template_part( 'views/global-templates/scroll-to-top' );
}
?>

<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<?php
		// Notification Bar.
		if ( $anzu_notification_bar_switch ) {
			get_template_part( 'views/global-templates/notification-bar' );
		}
	?>

	<?php if ($anzu_layout_disable_header != '1') { ?>

		<?php do_action( 'anzu_hook_before_header' ); ?>

		<header id="wrapper-navbar" class="anzu-header <?php echo esc_attr( $anzu_header_dark_mode ) .' '. esc_attr( $transparent_header ) .' '. esc_attr( $sticky_header ) .' '. esc_attr( $anzu_sticky_header_background_on_scroll ) .' '. esc_attr( $anzu_transparent_header_theme_color ); ?>">

			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'anzu' ); ?></a>

			<nav id="main-nav" class="navbar <?php if ( !$anzu_header_menu_collapsed ) { echo 'navbar-expand-lg'; } ?> <?php echo esc_attr( $navbar_theme_mode ); ?>" aria-labelledby="main-nav-label">

				<h2 id="main-nav-label" class="visually-hidden-focusable">
					<?php esc_html_e( 'Main Navigation', 'anzu' ); ?>
				</h2>

				<?php if ( 'container' === $container ) : ?>
					<div class="container">
				<?php endif; ?>

					<?php get_template_part( 'views/global-templates/header', 'branding' ); ?>

					<?php get_template_part( 'views/global-templates/header', 'menu' ); ?>

					<div class="anzu-header-actions">

						<!-- Header Search Action -->
						<?php if ( $anzu_header_search_switch ) {
							get_template_part( 'views/global-templates/header', 'search-action' );
						} ?>

						<!-- Header Cart Action -->
						<?php if ( $anzu_header_cart_switch ) {
							get_template_part( 'views/global-templates/header', 'cart-action' );
						} ?>

						<!-- Header Offcanvas Action -->
						<?php if ( $anzu_header_offcanvas_switch ) {
							get_template_part( 'views/global-templates/header', 'offcanvas-action' );
						} ?>

						<!-- Header Menu Toggler -->
						<div class="anzu-header-menu-toggler" data-bs-toggle="offcanvas" data-bs-target="#anzu-header-menu-offcanvas" aria-controls="anzu-header-menu-offcanvas">
							<i class="bi bi-list"></i>
							<span class="visually-hidden-focusable"><?php esc_html_e( 'Menu', 'anzu' ); ?></span>
						</div>

					</div>

			</nav><!-- .site-navigation -->

			<!-- Header Search Content -->
			<?php if ( $anzu_header_search_switch ) {
				get_template_part( 'views/global-templates/header', 'search' );
			} ?>

		</header><!-- #wrapper-navbar end -->

		<!-- Header Offcanvas Content -->
		<?php if ( $anzu_header_offcanvas_switch ) { 
			get_template_part( 'views/global-templates/header', 'offcanvas' );
		} ?>

		<!-- Header Cart Content -->
		<?php if ( $anzu_header_cart_switch ) { 
			get_template_part( 'views/global-templates/header', 'cart' );
		} ?>

		<?php do_action( 'anzu_hook_after_header' ); ?>

	<?php } ?>
