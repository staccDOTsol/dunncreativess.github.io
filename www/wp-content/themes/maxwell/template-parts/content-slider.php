<?php
/**
 * The template for displaying articles in the slideshow loop
 *
 * @package Maxwell
 */

?>

<li id="slide-<?php the_ID(); ?>" class="zeeslide clearfix">

	<?php maxwell_slider_image( 'maxwell-slider-image', array( 'class' => 'slide-image' ) ); ?>

	<div class="slide-content clearfix">

		<?php maxwell_slider_meta(); ?>

		<?php the_title( sprintf( '<h2 class="slide-title entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<div class="entry-content clearfix">

			<?php the_excerpt(); ?>
			<?php maxwell_more_link(); ?>

		</div><!-- .entry-content -->

	</div>

</li>
