	<footer class="main_footer">
		<!--<div class="widget">
			<ul>
            	<li><a href="products_page.html">Продукты</a></li>
                <li><a href="partners_page.html">Карта покрытия</a></li>
                <li><a href="calc_page.html">Партнерам</a></li>
                <li><a href="contacts_page.html">Контакты</a></li>
            </ul>
		</div>
		<div class="widget">
			<ul>
            	<li><a href="receipt_page.html">Рецепты коктейлей</a></li>
                <li><a href="#">Состав напитков</a></li>
                <li><a href="calc_page.html">Оптовый калькулятор</a></li>
                <li><a href="#">Фото/Видео</a></li>
            </ul>
		</div>-->
		<?php dynamic_sidebar( 'footer' ); ?>
		<!--<div class="widget search_form">
			<?php get_search_form(); ?>
		</div>-->
		<div class="copyright">
			<img src="<?php echo get_template_directory_uri(); ?>/img/main_logo.png" alt="Energydrink">
			<ul>
				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/vk_icon.png"></a></li>
				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/fb_icon.png"></a></li>
			</ul>
			<p>©  Дрим  Групп  2017</p>
		</div>
	</footer>

    <?php wp_footer();?>
</body>
</html>