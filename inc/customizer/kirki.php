<?php

use Kirki\L10n;
use Kirki\Compatibility\Modules;
use Kirki\Compatibility\Framework;
use Kirki\Compatibility\Kirki;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// No need to proceed if Kirki already exists.
if ( class_exists( 'Kirki' ) ) {
	return;
}

if ( ! defined( 'KIRKI_PLUGIN_FILE' ) ) {
	define( 'KIRKI_PLUGIN_FILE', __FILE__ );
}

require_once __DIR__ . '/extended/vendor/mapsteps/kirki-pro-headline-divider/vendor/autoload.php';// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude
require_once __DIR__ . '/extended/vendor/mapsteps/kirki-pro-input-slider/vendor/autoload.php';// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude
require_once __DIR__ . '/extended/vendor/mapsteps/kirki-pro-margin-padding/vendor/autoload.php';// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude
require_once __DIR__ . '/extended/vendor/mapsteps/kirki-pro-responsive/vendor/autoload.php';// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude
require_once __DIR__ . '/extended/vendor/mapsteps/kirki-pro-tabs/vendor/autoload.php';// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude
require_once __DIR__ . '/lib/class-aricolor.php'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude
require_once __DIR__ . '/lib/class-kirki-color.php'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude
require_once __DIR__ . '/packages/autoload.php'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude
require_once __DIR__ . '/inc/bootstrap.php'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude

// Define the KIRKI_VERSION constant.
if ( ! defined( 'KIRKI_VERSION' ) ) {
	define( 'KIRKI_VERSION', '4.0.23' );
}

if ( ! function_exists( 'Kirki' ) ) {
	/**
	 * Returns an instance of the Kirki object.
	 */
	function kirki() {
		$kirki = Framework::get_instance();
		return $kirki;
	}
}

// Start Kirki.
global $kirki;
$kirki = kirki();

// Instantiate the modules.
$kirki->modules = new Modules();

// Instantiate classes.
new Kirki();
new L10n( 'kirki', __DIR__ . '/languages' );

// ? Bagus: Do we really need to-reinclude this file? It was included above.
// Include the ariColor library.
require_once wp_normalize_path( dirname( __FILE__ ) . '/lib/class-aricolor.php' ); // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude

// Add an empty config for global fields.
Kirki::add_config( '' ); // ? Bagus: what is this for? Adding empty config.

// ? Bagus: Do we really need this line? custom-config.php here is supposed to inside this plugin. Or is this just in case we need it in the future?
$custom_config_path = dirname( __FILE__ ) . '/custom-config.php';
$custom_config_path = wp_normalize_path( $custom_config_path );
if ( file_exists( $custom_config_path ) ) {
	require_once $custom_config_path; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude
}
