<?php
/*
Template Name: Receipts Page
*/
 get_header(); ?>
	
	<div class="main receipt_page">
		<div class="receipt nonalcohol">
			<h2>Безалкогольные</h2>
			<?php
			$loop_nona = new WP_Query( array( 
        		'post_type' => 'receipt_nona',   
        		'posts_per_page' => 20 ) );
			$post_type_a = get_post_type( $receipt_nona );
 		
		while ( $loop_nona->have_posts() ) : $loop_nona->the_post(); ?>  
			<div id="post-<?php the_ID(); ?>" <?php post_class('drink_receipt'); ?>>
				<div class="drink_content">
    				<?php the_title( '<h3>', '</h3>' ); ?>
    				<?php the_content(); ?> 
    			</div>
    			<div class="drink_img">
    				<?php the_post_thumbnail('thumbnail'); ?>
    			</div>	
    		</div>
		<?php endwhile; ?>
		</div>
		<div class="receipt alcohol">
			<h2>Алкогольные</h2>
			<?php
			$loop_a = new WP_Query( array( 
        		'post_type' => 'receipt_a',   
        		'posts_per_page' => 20 ) );
			$post_type_a = get_post_type( $receipt_a );
 		
		while ( $loop_a->have_posts() ) : $loop_a->the_post(); ?>  
			<div id="post-<?php the_ID(); ?>" <?php post_class('drink_receipt'); ?>>
				<div class="drink_content">
    				<?php the_title( '<h3>', '</h3>' ); ?>
    				<?php the_content(); ?> 
    			</div>
    			<div class="drink_img">
    				<?php the_post_thumbnail('thumbnail'); ?>
    			</div>	
    		</div>
		<?php endwhile; ?>
		</div>	
	</div>	
	
<?php get_footer(); ?>