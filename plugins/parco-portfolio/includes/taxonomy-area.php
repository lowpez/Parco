<?php
if (!function_exists( 'parco_area_custom_taxonomy' ) ) {

// Register Custom Taxonomy
function parco_area_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Areas', 'Taxonomy General Name', 'parco' ),
		'singular_name'              => _x( 'Area', 'Taxonomy Singular Name', 'parco' ),
		'menu_name'                  => __( 'Area', 'parco' ),
		'all_items'                  => __( 'Todas las Areas', 'parco' ),
		'parent_item'                => __( 'Area padre', 'parco' ),
		'parent_item_colon'          => __( 'Area padre:', 'parco' ),
		'new_item_name'              => __( 'Nueva Area', 'parco' ),
		'add_new_item'               => __( 'Añadir nueva Area', 'parco' ),
		'edit_item'                  => __( 'Editar Area', 'parco' ),
		'update_item'                => __( 'Actualizar Area', 'parco' ),
		'view_item'                  => __( 'Ver Area', 'parco' ),
		'separate_items_with_commas' => __( 'Separar Areas por comas', 'parco' ),
		'add_or_remove_items'        => __( 'Añadir o remover Area', 'parco' ),
		'choose_from_most_used'      => __( 'Escoger de las más usadas', 'parco' ),
		'popular_items'              => __( 'Areas populares', 'parco' ),
		'search_items'               => __( 'Buscar Areas', 'parco' ),
		'not_found'                  => __( 'No encontrado', 'parco' ),
		'no_terms'                   => __( 'No hay Areas', 'parco' ),
		'items_list'                 => __( 'Lista de Areas', 'parco' ),
		'items_list_navigation'      => __( 'Navegacion en lista de Areas', 'parco' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'area', array( 'portfolio' ), $args );

}
add_action( 'init', 'parco_area_custom_taxonomy', 0 );

}