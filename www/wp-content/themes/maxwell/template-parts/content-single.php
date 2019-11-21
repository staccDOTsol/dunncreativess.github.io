<?php
/**
 * The template for displaying single posts
 *
 * @package Maxwell
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php maxwell_post_image_single(); ?>

	<header class="entry-header">

		<?php maxwell_entry_meta(); ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<?php maxwell_posted_by(); ?>

	</header><!-- .entry-header -->

	<div class="entry-content clearfix">

		<?php the_content(); ?>

		<?php wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'maxwell' ),
			'after'  => '</div>',
		) ); ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php maxwell_entry_tags(); ?>
		<?php do_action( 'maxwell_author_bio' ); ?>
		<?php maxwell_post_navigation(); ?>

	</footer><!-- .entry-footer -->

</article>
