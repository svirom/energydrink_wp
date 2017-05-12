<?php 
/*
Template Name: Articles Page
*/
get_header(); ?>

<!-- Articles -->
	<div class="main">	
	<!-- The Main Loop -->
		<?php $the_query = new WP_Query( 'category_name=news&showposts=4'); ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<a id="post-<?php the_ID(); ?>" <?php post_class('home_article'); ?> href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>	
				<h2 class="home_title"><?php the_title(); ?></h2>
				<div class="home_meta"><?php the_time('d.m.Y'); ?></div>
				</a>
			<?php endwhile; ?>

		<?php if (  $the_query->max_num_pages > 1 ) : ?>
			<script>
				var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
				var true_posts = '<?php echo serialize($the_query->query_vars); ?>';
				var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
				var max_pages = '<?php echo $the_query->max_num_pages; ?>';
			</script>
			<div id="true_loadmore">Смотреть больше новостей</div>
		<?php endif; ?>	
				
		<?php wp_reset_postdata(); ?>
	<!-- -End Loop-->
	</div>		
<!-- End Articles -->

<?php get_footer(); ?>
