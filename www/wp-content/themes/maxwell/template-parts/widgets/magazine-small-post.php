<?php
/**
 * The template for displaying small posts in Magazine Post widgets
 *
 * @package Maxwell
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'small-post clearfix' ); ?>>

	<?php maxwell_post_image( 'maxwell-thumbnail-small' ); ?>

	<div class="post-content clearfix">

		<header class="entry-header">

			<?php maxwell_magazine_entry_date(); ?>

			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		</header><!-- .entry-header -->

	</div>

</article>
