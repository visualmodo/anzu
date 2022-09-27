<?php
/**
 * Header Search
 *
 * @package Anzu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$anzu_search_layout_type = get_theme_mod( 'anzu_search_layout_type', 'anzu-header-search--collapse' );
$anzu_header_search_button = get_theme_mod( 'anzu_header_search_button', '' );
$anzu_translate_search_input_placeholder = get_theme_mod( 'anzu_translate_search_input_placeholder', '' );
$anzu_translate_search_text_button = get_theme_mod( 'anzu_translate_search_text_button', '' );
$anzu_header_dark_mode = get_theme_mod( 'anzu_header_dark_mode', '' ) ? 'anzu-dark-mode' : 'anzu-light-mode';
$search_theme_mode = $anzu_header_dark_mode == 'anzu-light-mode' ? 'dark' : 'light';
$anzu_header_live_search_switch = get_theme_mod( 'anzu_header_live_search_switch', '' );

?>

    <div class="anzu-header-search-collapse-area container <?php echo esc_attr( $anzu_search_layout_type ); ?>">

        <div id="anzu-header-search-collapse-content" class="collapse">

            <div class="anzu-header-search-collapse-form py-3">

                <form role="search" method="get" autocomplete="off" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <label class="visually-hidden-focusable" for="s"><?php esc_html_e( 'Search', 'anzu' ); ?></label>
                    <div class="input-group">
                    <input class="anzu-header-search-form-input form-control input_search" name="s" type="search" placeholder="<?php if ( $anzu_translate_search_input_placeholder ) { echo esc_attr( $anzu_translate_search_input_placeholder ); } else { esc_html_e( 'Search &hellip;', 'anzu' ); } ?>" value="<?php the_search_query(); ?>" onkeyup="fetch()">
                        <?php if ( $anzu_header_search_button ) { ?>
                            <input class="submit btn btn-<?php echo esc_attr( $search_theme_mode ); ?>" id="searchsubmit" name="submit" type="submit" value="<?php if ( $anzu_translate_search_text_button ) { echo esc_attr( $anzu_translate_search_text_button ); } else { esc_html_e( 'Search', 'anzu' ); } ?>">
                        <?php } ?>
                    </div>
                </form>

            </div>

        </div>

        <?php if ( $anzu_header_live_search_switch ) { ?>
            <div class="anzu-header-live-search search_result pb-3 anzu-header-live-search--data-fetch">
                <ul>
                    <li><?php esc_html_e( 'Please wait &hellip;', 'anzu' ); ?></li>
                </ul>
            </div>
        <?php } ?>

    </div>