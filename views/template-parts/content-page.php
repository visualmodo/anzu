<?php
/**
 * Partial template for content in page.php
 *
 * @package Anzu
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$hero = ! empty ( get_post_meta( get_the_ID(), 'anzu_hero_type_and_style', true ) ) ? get_post_meta( get_the_ID(), 'anzu_hero_type_and_style', true ) : 'default';

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php if ( $hero == 'default'|| is_home() ) { ?>

		<header class="entry-header">

			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		</header><!-- .entry-header -->

		<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<?php } ?>

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'anzu' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'anzu' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
