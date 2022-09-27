<?php
/**
 * Header Offcanvas Button
 *
 * @package Anzu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$anzu_header_dark_mode = get_theme_mod( 'anzu_header_dark_mode', '' ) ? 'anzu-dark-mode' : 'anzu-light-mode';
$theme_mode = $anzu_header_dark_mode == 'anzu-light-mode' ? 'dark' : 'light';

?>

<div class="anzu-header-offcanvas-button" data-bs-toggle="offcanvas" data-bs-target="#anzu-header-offcanvas" aria-controls="anzu-header-offcanvas">
    <i class="bi bi-three-dots-vertical"></i>
</div>

