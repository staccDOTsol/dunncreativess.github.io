<?php
/**
 * Post Slider Setup
 *
 * Enqueues scripts and styles for the slideshow
 * Sets slideshow excerpt length and slider animation parameter
 *
 * The template for displaying the slideshow can be found under /template-parts/post-slider.php
 *
 * @package Maxwell
 */

/**
 * Enqueue slider scripts and styles.
 */
function maxwell_slider_scripts() {

	// Get theme options from database.
	$theme_options = maxwell_theme_options();

	// Register and enqueue FlexSlider JS and CSS if necessary.
	if ( true === $theme_options['slider_blog'] or true === $theme_options['slider_magazine'] or is_page_template( 'template-slider.php' ) ) :

		// FlexSlider JS.
		wp_enqueue_script( 'jquery-flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js', array( 'jquery' ), '2.6.0' );

		// Register and enqueue slider setup.
		wp_enqueue_script( 'maxwell-slider', get_template_directory_uri() . '/assets/js/slider.js', array( 'jquery-flexslider' ), '20170421' );

		// Register and enqueue slider CSS.
		wp_enqueue_style( 'maxwell-slider', get_template_directory_uri() . '/assets/css/flexslider.css', array(), '20170421' );

	endif;

}
add_action( 'wp_enqueue_scripts', 'maxwell_slider_scripts' );


/**
 * Function to change excerpt length for post slider
 *
 * @param int $length Length of excerpt in number of words.
 * @return int
 */
function maxwell_slider_excerpt_length( $length ) {
	return 20;
}


if ( ! function_exists( 'maxwell_slider_image' ) ) :
	/**
	 * Displays the featured image of the post as slider image
	 *
	 * @param string $size Post thumbnail size.
	 * @param array  $attr Post thumbnail attributes.
	 */
	function maxwell_slider_image( $size = 'post-thumbnail', $attr = array() ) {

		// Display Post Thumbnail.
		if ( has_post_thumbnail() ) : ?>

			<a class="slide-image-link" href="<?php the_permalink(); ?>" rel="bookmark">
				<figure class="slide-image-wrap">
					<?php the_post_thumbnail( $size, $attr ); ?>
				</figure>
			</a>

		<?php else : ?>

			<a class="slide-image-link" href="<?php the_permalink(); ?>" rel="bookmark">
				<figure class="slide-image-wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-slider-image.png" class="slide-image default-slide-image wp-post-image" />
				</figure>
			</a>

		<?php endif;
	}
endif;


if ( ! function_exists( 'maxwell_slider_meta' ) ) :
	/**
	 * Displays the date and author on slider posts
	 */
	function maxwell_slider_meta() {

		$postmeta = maxwell_meta_date();
		$postmeta .= maxwell_meta_author();

		echo '<div class="entry-meta">' . $postmeta . '</div>';

	}
endif;


/**
 * Sets slider animation effect
 *
 * Passes parameters from theme options to the javascript files (js/slider.js)
 */
function maxwell_slider_options() {

	// Get theme options from database.
	$theme_options = maxwell_theme_options();

	// Set parameters array.
	$params = array();

	// Set slider animation.
	$params['animation'] = ( 'fade' === $theme_options['slider_animation'] ) ? 'fade' : 'slide';

	// Set slider speed.
	$params['speed'] = absint( $theme_options['slider_speed'] );

	// Passing parameters to Flexslider.
	wp_localize_script( 'maxwell-slider', 'maxwell_slider_params', $params );

}
add_action( 'wp_enqueue_scripts', 'maxwell_slider_options' );
