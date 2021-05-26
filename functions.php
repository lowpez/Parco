<?php
/*
* Parco funciones y definiciones
*
*
*
*
* @package Parco
* @subpackage Parco
* @since 1.0
*/


/*
*
* Definiendo constantes del tema
*
* @package Parco
* @subpackage Parco
* @since 1.0
*/

define('THEMEROOT', get_stylesheet_directory_uri());

define('IMAGES', THEMEROOT . '/img');


/*
*
* Definiendo características del tema
*
* @package parco
* @subpackage parco
* @since 1.0
*/

// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 1110;

if ( ! function_exists('parco_custom_theme_features') ) {

// Register Theme Features
function parco_custom_theme_features()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'video', 'audio' ) );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails' );

	// Add theme support for Custom Background
	$background_args = array(
		'default-color'          => 'ffffff',
		'default-image'          => '',
		'default-repeat'         => '',
		'default-position-x'     => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-background', $background_args );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for Translation
	load_theme_textdomain( 'parco', get_template_directory() . '/languages' );

	// Añadir tamaños de imagen personalizados
	//+ https://www.hostinger.com/tutorials/wordpress-images-sizes
	add_image_size('blog_size_image', 825, 533, true);

	// Tamaño personalizado para portada de proyectos en el home
	add_image_size('project_home_size_image', 800, 800, true);

}

add_action( 'after_setup_theme', 'parco_custom_theme_features' );

}

//FAVICON
function add_favicon() {
	echo '<link rel="shortcut icon" type="image/x-icon" href="'.get_template_directory_uri().'/assets/favicon.ico" />';
}

add_action('wp_head', 'add_favicon');
/*
*
* Registrando y cargando hojas de estilo
*
*/
require_once('includes/scripts-styles.php');


/*
*
* Registrando zonas de menu
*
*/
require_once('includes/menus.php');


/*
*
* Registrando zonas de widgets
*
*/
require_once('includes/sidebars.php');

/*
*
* Añadiendo opciones al personalizador
*
*/
require_once('includes/personalizador-tema.php');
function wpcodex_add_excerpt_support_for_post() {
    add_post_type_support( 'portfolio', 'excerpt' );
}
add_action( 'init', 'wpcodex_add_excerpt_support_for_post' );

// Cambiar cantidad de palabras de extracto
function parco_custom_the_excerpt($length){
	$length = 22;
	return $length;
}
add_filter('excerpt_length', 'parco_custom_the_excerpt');


//SOPORTE PARA ESTRACTOS EN PAGINAS
add_post_type_support( 'page', 'excerpt' );

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' ); //change page with your post type slug.
}
//AÑADIMOS '.current-menu-item' A POST_TYPES EN MENU
//+ https://gist.github.com/gerbenvandijk/5253921
function custom_active_item_classes($classes = array(), $menu_item = false){            
    global $post;
        $classes[] = ($menu_item->url == get_post_type_archive_link($post->post_type)) ? 'current-menu-item active' : '';
    return $classes;
}
add_filter( 'nav_menu_css_class', 'custom_active_item_classes', 10, 2 );


//ACTIVAMOS CAMPOS PERSONALIZADOS PARA PAGINAS Y POSTS
//add_filter("acf/settings/remove_wp_meta_box", "__return_false");


//Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

remove_action('shutdown', 'wp_ob_end_flush_all', 1);