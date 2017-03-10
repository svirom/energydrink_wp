<?php 
/*
Template Name: Drinks Page
*/
get_header(); ?>
<!-- Drinks Page-->
	<div class="main products_page">
		<div class="products_row">
			<div class="products_cell left">
				<a href="<?php the_permalink( 54 ); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/products_img_n_1.png">
					<span><img src="<?php echo get_template_directory_uri(); ?>/img/products_can_n_1.png"></span>
					<span class="caption">
						<h2 class="home_title">Classic</h2>
						<p>Energy drink</p>
					</span>
				</a>
			</div>
			<div class="products_cell">
				<a href="<?php the_permalink( 69 ); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/products_img_n_2.png">
					<span><img src="<?php echo get_template_directory_uri(); ?>/img/products_can_n_2.png"></span>
					<span class="caption">
						<h2 class="home_title">Original</h2>
						<p>Energy drink</p>
					</span>
				</a>
			</div>
		</div>
		<div class="products_row">
			<div class="products_cell left">
				<a>
					<img src="<?php echo get_template_directory_uri(); ?>/img/products_img_n_3.png">
					<span><img src="<?php echo get_template_directory_uri(); ?>/img/products_can_n_3.png"></span>
					<span class="caption">
						<h2 class="home_title">Sugar free</h2>
						<p>Скоро</p>
					</span>
				</a>
			</div>
			<div class="products_cell">
				<img src="<?php echo get_template_directory_uri(); ?>/img/products_img_n_4.png">
				<span class="caption">
					<h2 class="home_title new">Новые вкусы</h2>
					<p>Скоро</p>
				</span>
			</div>
		</div>
		<?php the_post(); ?>
		<?php the_content(); ?>	
	</div>
<!-- End Drinks Page-->
<?php get_footer(); ?>