<?php
/*
Template Name: Map Page
*/
 get_header(); ?>
	
	<div class="main partners_page">
		<p>Россия</p>
		<img src="<?php echo get_template_directory_uri(); ?>/img/russia_img.png">
		<div class="partners_form">
			<p>Хотите стать партнером</p>
			<p>заполните форму:</p>
			<form id="partners_form" action="/" method="post">
				<input id="partners_city" class="required" type="text" name="pcity" placeholder="Город*" autocomplete="off">
			    <input id="partners_name" class="required" type="text" name="pname" placeholder="Имя*" autocomplete="off">
			    <input id="partners_tel" class="required" type="tel" name="ptel" placeholder="Телефон*" autocomplete="off">
			    <input id="partners_email" class="required" type="email" name="pemail" placeholder="Почта*" autocomplete="off">
			    <input type="submit" value="ПРИСОЕДИНИТЬСЯ">
		    </form>
		</div>
		<h2>Наши партнеры</h2>

		
			<?php
			$loop_p = new WP_Query( array( 
        		'post_type' => 'partner',   
        		'posts_per_page' => 30 ) );
			$post_type_p = get_post_type( $partner );
 		
		while ( $loop_p->have_posts() ) : $loop_p->the_post(); ?>  
			<div id="post-<?php the_ID(); ?>" <?php post_class('partners_brand'); ?>>
				<?php the_post_thumbnail(); ?>
				<div class="partners_content">
    				<?php the_title( '<h4>', '</h4>' ); ?>
    				<?php the_content(); ?> 
    			</div>		
    		</div>
		<?php endwhile; ?>
		
	
	</div>	
<!-- Popup Section -->
<div class="popup">
    <img src="<?php echo get_template_directory_uri(); ?>/img/popup_mtv.png">
    <p>Спасибо, ваша заявка принята.</p>
    <a href="#" class="popup_close" data-js="close_form"><img src="<?php echo get_template_directory_uri(); ?>/img/popup_close.png"></a>
</div>
<div class="on_send">
    <img src="<?php echo get_template_directory_uri(); ?>/img/spinnermtvup.gif">
</div>
<!-- End Popup Section -->	
<?php get_footer(); ?>