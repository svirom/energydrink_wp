<?php

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
//Hide styles version
add_filter( 'style_loader_src', function ( $src ){
	$parts = explode( '?', $src );
	return $parts[0];
}, 15, 1 );

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

//Add Google Fonts      
function wpb_add_google_fonts() {
wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Raleway:900|Roboto:100,300,400,500', false ); 
}
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

//Add styles and scripts
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css' );
} );
add_action( 'wp_enqueue_scripts', function () {
 	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/custom.js', array('jquery') );
} );

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
