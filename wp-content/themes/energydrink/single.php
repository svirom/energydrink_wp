<?php get_header(); ?>
	
	<?php if ( in_category('news') ) { ?>
	<!-- Single News -->
		<div class="main single_page">	
			<?php while ( have_posts() ) : the_post();
			the_post_thumbnail(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('single_article'); ?>>
				<?php the_title( '<h2>', '</h2>' ); ?>
				<?php the_content(); ?>
			</article>
	<!-- End Single News -->		
		<?php endwhile; ?>
		</div>
	<?php 
	} elseif ( in_category('classic') ) {
		include 'single-classic.php';
	} elseif ( in_category('original') ) {
		include 'single-original.php';
	}?>	
	
<?php get_footer(); ?>