<?php get_header(); ?>
	<div class="main blanc_page">
	<?php while ( have_posts() ) : the_post();
		the_content(); ?>
	<?php endwhile; ?>
	</div>
<?php get_footer(); ?>