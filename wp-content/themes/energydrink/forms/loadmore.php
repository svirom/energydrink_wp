<?php
function true_load_posts(){
	$args = unserialize(stripslashes($_POST['query']));
	$args['paged'] = $_POST['page'] + 1; // следующая страница
	$args['post_status'] = 'publish';
	$q = new WP_Query($args);
	if( $q->have_posts() ):
		while($q->have_posts()): $q->the_post();
			?>
			<a id="post-<?php the_ID(); ?>" <?php post_class('home_article'); ?> href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>	
				<h2 class="home_title"><?php the_title(); ?></h2>
				<div class="home_meta"><?php the_time('d.m.Y'); ?></div>
			</a>
			<?php
		endwhile;
	endif;
	wp_reset_postdata();
	die();
}
 
add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');