<?php 
/*
Template Name: Standart Page
*/
get_header(); ?>
	<div class="main products_page">
		<?php the_post(); ?>
		<?php the_content(); ?>	
	</div>

<?php get_footer(); ?>