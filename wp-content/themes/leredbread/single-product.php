<?php
/**
 * The template for displaying all single products.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="single-product-main-container">
				<div class="single-product-content-area">
					<div class="single-product-item">
						<?php while ( have_posts() ) : the_post(); ?>
								
								<?php get_template_part( 'template-parts/content', 'product' ); ?>
						
						<?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						?>
						<?php endwhile; // End of the loop. ?>
					</div>
				</div>

				<div class="single-product-sidebar-area">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
