<?php

require_once 'forms/forms.php';
require_once 'forms/loadmore.php';

remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );

add_filter('the_generator',function ()
{
	return '';
});

//Hide scripts version
add_filter( 'script_loader_src', function ( $src ){
	$parts = explode( '?', $src );
	return $parts[0];
}, 15, 1 );

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

//Add Google Fonts      
function ggl_load_styles() {
  if (!is_admin()) {
    wp_register_style('googleFont', 'https://fonts.googleapis.com/css?family=Raleway:900|Roboto:100,300,400,500" rel="stylesheet');
    wp_enqueue_style('ggl', get_stylesheet_uri(), array('googleFont') );
  }
}
add_action('wp_enqueue_scripts', 'ggl_load_styles');
//Add styles and scripts
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css' );
} );
add_action( 'wp_enqueue_scripts', function () {
 	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/custom.js', array('jquery') );
} );
//Ajax forms sender
add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_script( 'script_f', get_template_directory_uri() . '/js/forms.js', array('jquery') );
    wp_localize_script( 'script_f', 'PJS', array( 
        'ajax_url' => admin_url( 'admin-ajax.php' ), 
        )
    );
} );
//Ajax posts loading on main page
function true_loadmore_scripts() {
    wp_enqueue_script( 'true_loadmore', get_template_directory_uri() . '/js/loadmore.js', array('jquery') );
}
 add_action( 'wp_enqueue_scripts', 'true_loadmore_scripts' );

//Main Menu
add_action( 'after_setup_theme', function () {
	register_nav_menu( 'main', 'Main menu' );
} );

//Footer Widgets
add_action( 'widgets_init', function () {
    register_sidebar( array(
        'name'          => 'Footer Area',
        'id'            => 'footer',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

} );
//Remove container div in widget menus
add_filter( 'widget_nav_menu_args', function ( $nav_menu_args, $nav_menu, $args, $instance ) 
{
    $nav_menu_args['container'] = false;
    return $nav_menu_args; 
}, 10, 4 );

add_filter('widget_text', 'do_shortcode');

//Custom Post Types
add_action( 'init', function() {
    $labels = array(
        'name' => 'Рецепты (безалког.)',
        'singular_name' => 'Рецепт(б/алк)',
        'add_new' => 'Добавить новый',
        'add_new_item' => 'Добавить новый рецепт(б/алк)',
        'edit_item' => 'Редактировать рецепт',
        'new_item' => 'Новый рецепт(б/алк)',
        'view' => 'Смотреть',
        'view_item' => 'Смотреть рецепт(б/алк)',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_icon' => 'dashicons-star-empty',
        'menu_position' => 3,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail',),
    );
    register_post_type('receipt_nona', $args);
} );

add_action( 'init', function() {
    $labels = array(
        'name' => 'Рецепты (алког.)',
        'singular_name' => 'Рецепт(алк)',
        'add_new' => 'Добавить новый',
        'add_new_item' => 'Добавить новый рецепт(алк)',
        'edit_item' => 'Редактировать рецепт',
        'new_item' => 'Новый рецепт(алк)',
        'view' => 'Смотреть',
        'view_item' => 'Смотреть рецепт(алк)',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_icon' => 'dashicons-star-filled',
        'menu_position' => 4,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail',),
    );
    register_post_type('receipt_a', $args);
} );

add_action( 'init', function() {
    $labels = array(
        'name' => 'Партнеры',
        'singular_name' => 'Партнер',
        'add_new' => 'Добавить новый',
        'add_new_item' => 'Добавить нового партнера',
        'edit_item' => 'Редактировать запись',
        'new_item' => 'Новый партнер',
        'view' => 'Смотреть',
        'view_item' => 'Смотреть запись',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_icon' => 'dashicons-businessman',
        'menu_position' => 4,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail',),
    );
    register_post_type('partner', $args);
} );

?>
