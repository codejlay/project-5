<?php
/**
 * The main front-page file.
 *
 * @package RED_Starter_Theme
 */

?>

<?php get_header(); ?>

<div class="site-content">
	<div class="content-area">
		<div class="hero">
			<span class="hero-text">Baked to Perfection.</span>
		</div>
	</div>
</div>

<section class="product-info-container">
		<?php
		$terms = get_terms("product-type");
		if ($terms) {?>
		<ul class="product-type-blocks">
			<?php foreach($terms as $term) { ?>
			<li class="product-type-block-wrapper">
				<img src="<?php echo get_template_directory_uri() ?>/images/<?php echo $term->slug ?>.png"
				alt="<?php echo $term->slug ?>">
				<h3><?php echo $term->name ?></h3>
				<p><?php echo $term->description;?>
					<a href="<?php echo get_term_link( $term ); ?>">See More...</a>
				</p>
			</li><?php
			}
		} ?>
		</ul>
</section>

<section class="call-to-action">
	 <p>
	    <span>All our products are made fresh daily from locally-sourced ingredients. Our menu is updated frequently.</span>
	    <a href="/le-red-bread/product/" class="btn">See Our Products</a>
	 </p>
</section>

<section class="latest-news">
	<div class="latest-news-container">
		<h2>Our Latest News</h2>
		<hr class="decorative"></hr>
		<ul>
			
		<?php
		$args = array( 'posts_per_page' => 4);

		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
		
			<li>
				<div class="thumbnail-wrapper" href="<?php the_permalink(); ?>"><?php the_post_thumbnail ('large'); ?></div>
				<div class="post-info-wrapper">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<span class="entry-meta"> <?php the_time ('d M Y');?> / <?php comments_number('0 Comments'); ?></span>
				</div>
		
		<?php endforeach; ?>
			</li>
		</ul>
	</div>
</section>

<?php wp_reset_postdata();?>
<?php get_footer(); ?>



