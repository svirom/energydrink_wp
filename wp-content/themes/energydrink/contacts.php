<?php
/*
Template Name: Contacts Page
*/
 get_header(); ?>
	
	<div class="main contacts_page">
        <div class="contacts_header">
            <h2>Контакты</h2>
            <p>Генеральный представитель России</p>
        </div>
        <div class="contacts_form">
            <form id="contacts_form" action="/" method="post">
                <label for="contacts_select">Вы хотите:</label>
                <select id="contacts_select" name="sel">
                    <option value="0"></option>
                    <option value="become">Стать региональным представителем</option>
                    <option value="opt">Связаться по вопросам опта</option>
                    <option value="adv">Связаться по вопросам рекламы</option>
                    <option value="idea">Предложить идею</option>
                </select>
                <label for="contacts_name">Компания:</label>
                <input id="contacts_name" type="text" name="name" placeholder="" autocomplete="off">
                <label for="contacts_full_name">Ваше имя:</label>
                <input id="contacts_full_name" class="required" type="text" name="full_name" placeholder="" autocomplete="off">
                <p class="required">обязательное поле</p>
                <label for="contacts_email">Ваш электронный адрес:</label>
                <input id="contacts_email" class="required" type="email" name="email" placeholder="" autocomplete="off">
                <p class="required">обязательное поле</p>
                <label for="contacts_tel">Телефон:</label>
                <input id="contacts_tel" type="tel" name="tel" placeholder="" autocomplete="off">
                <label for="contacts_message">Сообщение:</label>
                <textarea id="contacts_message" name="message" placeholder=""></textarea>
                <input type="submit" value="ОТПРАВИТЬ">
            </form>
        </div>
        <div class="contacts_address">
            <?php the_post(); ?>
            <?php the_content(); ?>
            <div class="map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=8UjB34aGvqrSfMZiTCbCxsDwPVWjQ2aB&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
            </div>
        </div>

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