<?php get_header(); ?>
	
	<?php if ( in_category('news') ) { ?>
	<!-- Single News -->
		<div class="main single_page">	
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="article_header">
				<?php the_post_thumbnail(); ?>
				<?php the_title( '<h2>', '</h2>' ); ?>
				<div class="home_meta"><?php the_time('d.m.Y'); ?></div>
			</div>
			<article id="post-<?php the_ID(); ?>" <?php post_class('single_article'); ?>>
				<?php the_content(); ?>
			</article>
			<div class="prev_next">
				<div class="prev_next_inner">
					<?php 
					$prev_post = get_previous_post(true);
					if( ! empty($prev_post) ){
						?>
					<a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="prev_post"><?php echo get_the_post_thumbnail($prev_post->ID); ?><p><?php echo get_the_title( $prev_post->ID ); ?></p></a>
					<?php
					}?>
				</div>
				<div class="prev_next_inner">
					<?php
					$next_post = get_next_post(true);
					if( ! empty($next_post) ){
						?>
					<a href="<?php echo get_permalink( $next_post->ID ); ?>" class="next_post"><?php echo get_the_post_thumbnail($next_post->ID); ?><p><?php echo get_the_title( $next_post->ID ); ?></p></a>
					<?php
					}?>
				</div>
			</div>
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