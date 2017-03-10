<!-- Single Classic Drink-->
<div class="main single_product_page">
	<?php the_post_thumbnail(); ?> 
	<?php the_post(); ?>
	<?php the_content(); ?>
	<div class="product_footer">
		<div class="product_link left">
			<a href="receipt_page.html">
				<img src="<?php echo get_template_directory_uri(); ?>/img/receipt_img_n.png">
				<span class="caption">
					<h2 class="home_title">Рецепты коктейлей</h2>
					<p>с энергетическими напитками</p>
				</span>
			</a>
		</div>
		<div class="product_link">
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
</div>
<!-- End Single Classic Drink-->