<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-block-container">
					<div class="contact">
						<p>Contact</p>
						<p>info@leredbread.com</p>
						<p>(555) 343 456 7891</p>
					</div>

					<div class="footer-logo">
						<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/lrb-logo-white.svg"/>
					</div>

					<div class="business-hours">
						<p>Business Hours</p>
						<p>Monday-Friday: 9am to 5pm</p>
						<p>Saturday: 10am to 2pm</p>
						<p>Sunday: Closed</p>
					</div>

				</div>

				<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
