<?php get_header(); ?>

<!-- Main Content -->
	<div class="main">
		<!--<a class="home_article" href="single_page.html">
			<img src="<?php echo get_template_directory_uri(); ?>/img/article_img_1.png">
			<h2 class="home_title">Название новости</h2>
			<div class="home_meta">13.02.2017</div>
		</a>
		<a class="home_article" href="single_page.html">
			<img src="<?php echo get_template_directory_uri(); ?>/img/article_img_2.png">
			<h2 class="home_title">Название новости</h2>
			<div class="home_meta">13.02.2017</div>
		</a>
		<a class="home_article" href="single_page.html">
			<img src="<?php echo get_template_directory_uri(); ?>/img/article_img_3.png">
			<h2 class="home_title">Название новости</h2>
			<div class="home_meta">13.02.2017</div>
		</a>
		<a class="home_article" href="single_page.html">
			<img src="<?php echo get_template_directory_uri(); ?>/img/article_img_4.png">
			<h2 class="home_title">Название новости</h2>
			<div class="home_meta">13.02.2017</div>
		</a>-->	
	
	<!-- The Main Loop -->
		<?php $the_query = new WP_Query( 'category_name=news&showposts=4'); ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<a id="post-<?php the_ID(); ?>" <?php post_class('home_article'); ?> href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>	
				<h2 class="home_title"><?php the_title(); ?></h2>
				<div class="home_meta"><?php the_time('d.m.Y'); ?></div>
				</a>
			<?php endwhile; ?>	
		<?php wp_reset_postdata(); ?>
	<!-- -End Loop-->
	</div>		
<!-- End Main Content -->

<?php get_footer(); ?>
