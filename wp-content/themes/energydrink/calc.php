<?php
/*
Template Name: Calc Page
*/
 get_header(); ?>
	
	<div class="main calc_page">
		<div class="calc_header">
			<h2>Партнерам</h2>
			<p>Расчет стоимости, условия сотрудничества, документация</p>
		</div>
        <div class="calc_mobile">
            <p>Для отображения калькулятора стоимости, откройте страницу на планшете или настольном компьютере</p>
        </div>
		<div class="calc_content">
			<h3>Оптовый калькулятор</h3>
			<form id="calc_form" action="/" method="post">
				<table>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th colspan="3">ВАШ ЗАКАЗ:</th>
                    </tr>
					<tr>
    					<th></th>
    					<th>Объем, л.</th>
    					<th></th>
    					<th>Штук в уп.</th>
    					<th>Цена за шт.</th>
    					<th>Банок, шт.</th>
    					<th>Цена, руб.</th>
    					<th>Упаковок, ед.</th>
   					</tr>
   					<tr>
    					<td><img src="<?php echo get_template_directory_uri(); ?>/img/calc_img_classic_b.png"></td>
    					<td>0.5</td>
    					<td>Х</td>
    					<td>24</td>
    					<td><span id="classic_big_p">0</span> руб.</td>
    					<td>0</td>
    					<td>0</td>
    					<td><input id="classic_big" type="text" name="classic_big" placeholder=""></td>
  					</tr>
  					<tr>
    					<td><img src="<?php echo get_template_directory_uri(); ?>/img/calc_img_classic_s.png"></td>
    					<td>0.25</td>
    					<td>Х</td>
    					<td>12</td>
    					<td><span id="classic_small_p">0</span> руб.</td>
    					<td>0</td>
    					<td>0</td>
    					<td><input id="classic_small" type="text" name="classic_small" placeholder=""></td>
  					</tr>
  					<tr>
    					<td><img src="<?php echo get_template_directory_uri(); ?>/img/calc_img_original_b.png"></td>
    					<td>0.5</td>
    					<td>Х</td>
    					<td>24</td>
    					<td><span id="original_big_p">0</span> руб.</td>
    					<td>0</td>
    					<td>0</td>
    					<td><input id="original_big" type="text" name="original_big" placeholder=""></td>
  					</tr>
  					<tr>
    					<td><img src="<?php echo get_template_directory_uri(); ?>/img/calc_img_original_s.png"></td>
    					<td>0.25</td>
    					<td>Х</td>
    					<td>12</td>
    					<td><span id="original_small_p">0</span> руб.</td>
    					<td>0</td>
    					<td>0</td>
    					<td><input id="original_small" type="text" name="original_small" placeholder=""></td>
  					</tr>
				</table>
				<p>Вес брутто: <span class="total_weight"></span> кг</p>
				<p>Объем: <span class="total_volume"></span> паллета (80 х 120 x 160 cm)</p>
				<p>Общая стоимость: <span class="total_value"></span> руб.</p>
				<div class="calc_input">
				    <input id="calc_email" class="required" type="email" name="calcemail" placeholder="ЕМАЙЛ">
				    <input id="calc_tel" type="tel" name="calctel" placeholder="НОМЕР">
				    <input type="submit" value="ЗАКАЗАТЬ">
			    </div>
			</form>
		</div>

		<?php the_post(); ?>
		<?php the_content(); ?>

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