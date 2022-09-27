<?php
/**
 * Header Search
 *
 * @package Anzu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$anzu_search_layout_type = get_theme_mod( 'anzu_search_layout_type', 'anzu-header-search--dropdown' );
$anzu_header_search_button = get_theme_mod( 'anzu_header_search_button', '' );
$anzu_search_placeholder = get_theme_mod( 'anzu_search_placeholder', '' );
$anzu_header_dark_mode = get_theme_mod( 'anzu_header_dark_mode', '' ) ? 'anzu-dark-mode' : 'anzu-light-mode';
$search_theme_mode = $anzu_header_dark_mode == 'anzu-light-mode' ? 'dark' : 'light';

?>

<div class="anzu-header-search btn-group d-none d-md-block <?php echo esc_attr( $anzu_search_layout_type ); ?>">

<?php if ( $anzu_search_layout_type == 'anzu-header-search--dropdown') { ?>

    <a class="dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
        <i class="bi bi-search"></i>
    </a>
    <ul style="width:300px;" class="dropdown-menu dropdown-menu-start dropdown-menu-lg-end p-2">
        <form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
            <label class="visually-hidden-focusable" for="s"><?php esc_html_e( 'Search', 'anzu' ); ?></label>
            <div class="input-group">
                <input class="field form-control" id="s" name="s" type="text" placeholder="<?php if ( $anzu_search_placeholder ) { echo esc_attr( $anzu_search_placeholder ); } else { esc_attr_e( 'Search &hellip;', 'anzu' ); } ?>" value="<?php the_search_query(); ?>">
                <?php if ( $anzu_header_search_button ) { ?>
                    <input class="submit btn btn-<?php echo esc_attr( $search_theme_mode ); ?>" id="searchsubmit" name="submit" type="submit" value="<?php esc_attr_e( 'Search', 'anzu' ); ?>">
                <?php } ?>
            </div>
        </form>
    </ul>

<?php } else { ?>

    <form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
        <label class="visually-hidden-focusable" for="s"><?php esc_html_e( 'Search', 'anzu' ); ?></label>
        <div class="input-group">
            <input class="field form-control" id="s" name="s" type="text" placeholder="<?php if ( $anzu_search_placeholder ) { echo esc_attr( $anzu_search_placeholder ); } else { esc_attr_e( 'Search &hellip;', 'anzu' ); } ?>" value="<?php the_search_query(); ?>">
            <?php if ( $anzu_header_search_button ) { ?>
                <input class="submit btn btn-<?php echo esc_attr( $search_theme_mode ); ?>" id="searchsubmit" name="submit" type="submit" value="<?php esc_attr_e( 'Search', 'anzu' ); ?>">
            <?php } ?>
        </div>
    </form>

<?php } ?>

</div>