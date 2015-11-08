<?php
/**
 *
 *Template Name:about page
 * @package RED_Starter_Theme
 */
get_header(); ?>

<div class="about-main-container">

	<header class="entry-header">
		<h1 class= "about-title"><?php echo esc_html(CFS()->get('title')); ?></h1>
		<p class= "about-tagline"><?php echo esc_html( CFS()->get('tagline')); ?></p>
		
	</header>

	<hr class="decorative"></hr>

	<div class ="about-content-container">
		<div class="about-content-left">
			<img src= "<?php echo get_template_directory_uri() ?>/images/team.jpg" alt="Le Red Bread team">
			<h3>Le Red Bread Team</h3>
			<p class= "about-blurb1-motto"><?php echo esc_html( CFS()->get('blurb_1_motto')); ?></p>
			<p class= "about-blurb1"><?php echo esc_html( CFS()->get('blurb_1')); ?></p>
		</div>

		<div class="about-content-right">
			<img src= "<?php echo get_template_directory_uri() ?>/images/bakery.jpg" alt="Le Red Bread bakery">
			<h3>Le Red Bread Bakery</h3>
			<p class= "about-blurb2-motto"><?php echo esc_html( CFS()->get('blurb_2_motto')); ?></p>
			<p class= "about-blurb2"><?php echo esc_html(CFS()->get('blurb_2')); ?></p>
		</div>
	</div>
			
	<div class= "about-story">
		<h2>Our Story</h2>
		<?php echo CFS()->get('story'); ?>
	</div>
	
	<section class="call-to-action">
	 <p>
	    <span>Feel free to contact us with any questions coments or suggestions. We even take custom orders!</span>
	    <a href="/le-red-bread/contact/" class="btn">Contact Us</a>
	 </p>
	</section>

</div>

<?php get_footer(); ?>