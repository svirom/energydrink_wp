<?php get_header(); ?>
<!--Search Page-->
	<div class="main search_page">
		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<div class="post_meta">
				Опубл.: <span><?php the_time('j M Y'); ?></span>
			</div>
			<?php the_excerpt(); ?>
		</article>
		<?php endwhile; ?>
		<?php else : ?>
		<p class="error-404"><?php _e("По Вашему запросу ничего не найдено. Попробуйте другой вариант") ?></p>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
	</div>
<?php get_footer(); ?>