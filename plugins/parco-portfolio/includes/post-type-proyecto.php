<?php
if (!function_exists('parco_portfolio_custom_post_type') ) {

// Register Custom Post Type
function parco_portfolio_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Portfolio', 'Post Type General Name', 'parco' ),
		'singular_name'         => _x( 'Portfolio', 'Post Type Singular Name', 'parco' ),
		'menu_name'             => __( 'Portfolio', 'parco' ),
		'name_admin_bar'        => __( 'Portfolio', 'parco' ),
		'archives'              => __( 'Archivo de Portfolio', 'parco' ),
		'attributes'            => __( 'Atributos de Portfolio', 'parco' ),
		'parent_item_colon'     => __( 'Portfolio padre:', 'parco' ),
		'all_items'             => __( 'Todos los Portfolio', 'parco' ),
		'add_new_item'          => __( 'Añadir nuevo Portfolio', 'parco' ),
		'add_new'               => __( 'Añadir Nuevo', 'parco' ),
		'new_item'              => __( 'Nuevo Portfolio', 'parco' ),
		'edit_item'             => __( 'Editar Portfolio', 'parco' ),
		'update_item'           => __( 'Actualizar Portfolio', 'parco' ),
		'view_item'             => __( 'Ver Portfolio', 'parco' ),
		'view_items'            => __( 'Ver Portfolio', 'parco' ),
		'search_items'          => __( 'Buscar Portfolio', 'parco' ),
		'not_found'             => __( 'No encontrado', 'parco' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'parco' ),
		'featured_image'        => __( 'Imagen destacada', 'parco' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'parco' ),
		'remove_featured_image' => __( 'Remover imagen destacada', 'parco' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'parco' ),
		'insert_into_item'      => __( 'Insertar en Portfolio', 'parco' ),
		'uploaded_to_this_item' => __( 'Subido a Portfolio', 'parco' ),
		'items_list'            => __( 'Lista de Portfolio', 'parco' ),
		'items_list_navigation' => __( 'Navegacion en lista de Portfolio', 'parco' ),
		'filter_items_list'     => __( 'Filtrar lista de Portfolio', 'parco' ),
	);
	$args = array(
		'label'                 => __( 'Portfolio', 'parco' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-multisite',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'parco_portfolio_custom_post_type', 0 );

}