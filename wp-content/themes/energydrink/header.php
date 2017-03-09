<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Energydrink</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Raleway:900|Roboto:100,300,400,500" rel="stylesheet">
    <?php wp_head(); ?>
	<?php if (is_user_logged_in()):?>
		<style>
			body>header.main_header { margin-top: 32px;}
			@media (max-width: 767px) { body>header.main_header { margin-top: 0px;}}
		</style>
	<?php endif?>
    <script type='text/javascript' src='/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.40.0-2013.08.13'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Sending ..."};
/* ]]> */
</script>
<script type='text/javascript' src='/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=3.5.2'></script>
</head>
<body <?php body_class(); ?>>

	<header class="main_header">
		<a class="logo" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/main_logo.png" alt="Energydrink"></a>
		<a class="nav-opener"><span></span></a>
        <nav id="main_menu">
            <!--<ul>
            	<li><a href="products_page.html">MTVUP! Продукты</a></li>
                <li><a href="partners_page.html">Карта</a></li>
                <li><a href="calc_page.html">Партнерам</a></li>
                <li><a href="contacts_page.html">Контакты</a></li>
            </ul>-->
            <?php wp_nav_menu(array(
                'theme_location' => 'main', 
                'menu_class' => false, 
                'container' => false, 
                'items_wrap' => '<ul>%3$s</ul>')); 
            ?>
        </nav>
	</header>