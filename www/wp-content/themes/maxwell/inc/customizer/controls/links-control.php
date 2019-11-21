<?php
/**
 * Theme Links Control for the Customizer
 *
 * @package Maxwell
 */

/**
 * Make sure that custom controls are only defined in the Customizer
 */
if ( class_exists( 'WP_Customize_Control' ) ) :

	/**
	 * Displays the theme links in the Customizer.
	 */
	class Maxwell_Customize_Links_Control extends WP_Customize_Control {
		/**
		 * Render Control
		 */
		public function render_content() {
			?>

			<div class="theme-links">

				<span class="customize-control-title"><?php esc_html_e( 'Theme Links', 'maxwell' ); ?></span>

				<p>
					<a href="<?php echo esc_url( __( 'https://themezee.com/themes/maxwell/', 'maxwell' ) ); ?>?utm_source=customizer&utm_medium=textlink&utm_campaign=maxwell&utm_content=theme-page" target="_blank">
						<?php esc_html_e( 'Theme Page', 'maxwell' ); ?>
					</a>
				</p>

				<p>
					<a href="http://preview.themezee.com/?demo=maxwell&utm_source=customizer&utm_campaign=maxwell" target="_blank">
						<?php esc_html_e( 'Theme Demo', 'maxwell' ); ?>
					</a>
				</p>

				<p>
					<a href="<?php echo esc_url( __( 'https://themezee.com/docs/maxwell-documentation/', 'maxwell' ) ); ?>?utm_source=customizer&utm_medium=textlink&utm_campaign=maxwell&utm_content=documentation" target="_blank">
						<?php esc_html_e( 'Theme Documentation', 'maxwell' ); ?>
					</a>
				</p>

				<p>
					<a href="<?php echo esc_url( __( 'https://themezee.com/changelogs/?action=themezee-changelog&type=theme&slug=maxwell/', 'maxwell' ) ); ?>" target="_blank">
						<?php esc_html_e( 'Theme Changelog', 'maxwell' ); ?>
					</a>
				</p>

				<p>
					<a href="<?php echo esc_url( __( 'https://wordpress.org/support/theme/maxwell/reviews/', 'maxwell' ) ); ?>" target="_blank">
						<?php esc_html_e( 'Rate this theme', 'maxwell' ); ?>
					</a>
				</p>

			</div>

			<?php
		}
	}

endif;
