<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>
    <?php
        global $page, $paged;
        wp_title( '|', true, 'right' );
        bloginfo( 'name' );
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";
        if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
    ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <?php wp_head(); ?>
	<?php if (is_user_logged_in()):?>
		<style>
			body>header.main_header { margin-top: 32px;}
			@media (max-width: 767px) { body>header.main_header { margin-top: 0px;}}
		</style>
	<?php endif?>
</head>
<body <?php body_class(); ?>>

	<header class="main_header">
		<a class="logo" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/main_logo.png" alt="Energydrink"></a>
		<a class="nav-opener"><span></span></a>
        <nav id="main_menu">
            <?php wp_nav_menu(array(
                'theme_location' => 'main', 
                'menu_class' => false, 
                'container' => false, 
                'items_wrap' => '<ul>%3$s</ul>')); 
            ?>
        </nav>
	</header>