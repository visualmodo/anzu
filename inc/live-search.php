<?php
/**
 * Live Search
 *
 * @package Anzu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// add the ajax fetch js
add_action( 'wp_footer', 'ajax_fetch' );
function ajax_fetch() {
?>
<script type="text/javascript">
function fetch(){

    jQuery.ajax({
        url: '<?php echo admin_url('admin-ajax.php'); ?>',
        type: 'post',
        data: { action: 'data_fetch', keyword: jQuery('.anzu-header-search-form-input').val() },
        success: function(data) {
            jQuery('.anzu-header-live-search--data-fetch').html( data );
        }
    });

}
</script>

<?php
}

// the ajax function
add_action('wp_ajax_data_fetch' , 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch','data_fetch');
function data_fetch(){

    $anzu_header_search_post_types = get_theme_mod( 'anzu_header_search_post_types', '' )?: array('page','post');

    $the_query = new WP_Query( array( 'posts_per_page' => -1, 's' => esc_attr( $_POST['keyword'] ), 'post_type' => $anzu_header_search_post_types ) );
    if( $the_query->have_posts() ) :
        echo '<div class="anzu-header-live-search-results">';
        while( $the_query->have_posts() ): $the_query->the_post(); ?>

            <a class="anzu-header-live-search-result" href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title();?></a>

        <?php endwhile;
       echo '</div>';
        wp_reset_postdata();  
    endif;

    die();
}


add_filter( 'posts_search', 'include_password_posts_in_search' );
function include_password_posts_in_search( $search ) {
    global $wpdb;
    if( !is_user_logged_in() ) {    
        $pattern = " AND ({$wpdb->prefix}posts.post_password = '')";
        $search = str_replace( $pattern, '', $search );
    }
    return $search;
}

