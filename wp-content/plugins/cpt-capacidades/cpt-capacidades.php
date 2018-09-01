<?php
/*
Plugin Name: CPT Capacidades
Plugin URI:
Description:
Version:
Author:
Author URI:
License:
License URI:
*/
if ( ! function_exists('capacidades') ) {

// Register Custom Post Type
function capacidades() {

	$labels = array(
		'name'                  => _x( 'capacidades', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'capacidades', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'capacidades', 'text_domain' ),
		'name_admin_bar'        => __( 'Capacidades', 'text_domain' ),
		'archives'              => __( 'Archivos de Capacidades', 'text_domain' ),
		'attributes'            => __( 'Atributos de Capacidades', 'text_domain' ),
		'parent_item_colon'     => __( 'Item de Capacidades', 'text_domain' ),
		'all_items'             => __( 'Todos', 'text_domain' ),
		'add_new_item'          => __( 'Añadir Nueva Capacidad', 'text_domain' ),
		'add_new'               => __( 'Añadir Nueva', 'text_domain' ),
		'new_item'              => __( 'Nueva', 'text_domain' ),
		'edit_item'             => __( 'Editar', 'text_domain' ),
		'update_item'           => __( 'Actualizar', 'text_domain' ),
		'view_item'             => __( 'Ver', 'text_domain' ),
		'view_items'            => __( 'Ver Todas', 'text_domain' ),
		'search_items'          => __( 'Buscar', 'text_domain' ),
		'not_found'             => __( 'No Encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen Destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Configurar Imagen Destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Borrar Imagen Destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como Imagen Destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en Capacidades', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizar en Capacidades', 'text_domain' ),
		'items_list'            => __( 'Listado de Capacidades', 'text_domain' ),
		'items_list_navigation' => __( 'Listado Navegable de Capacidades', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro de Lista de Capacidades', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'capacidades', 'text_domain' ),
		'description'           => __( 'capacidades', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title','editor','thumbnail'),
		'taxonomies'            => array( 'servicios'),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-hammer',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'capacidades', $args );

}
add_action( 'init', 'capacidades', 0 );

}

//Register Custom Taxonomy
function servicios() {

	$labels = array(
		'name'                       => _x( 'servicios', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'servicio', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Servicios', 'text_domain' ),
		'all_items'                  => __( 'Todos los Servicios', 'text_domain' ),
		'parent_item'                => __( 'Servicio Padre', 'text_domain' ),
		'parent_item_colon'          => __( 'Servicio Padre:', 'text_domain' ),
		'new_item_name'              => __( '-nuevo Servicio', 'text_domain' ),
		'add_new_item'               => __( 'Añadir Nuevo Servicio', 'text_domain' ),
		'edit_item'                  => __( 'Editar Servicio', 'text_domain' ),
		'update_item'                => __( 'Actualizar Servicio', 'text_domain' ),
		'view_item'                  => __( 'Ver Servicio', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Agregar o Remover Servicio', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Servicios Populares', 'text_domain' ),
		'search_items'               => __( 'Buscar Servicios', 'text_domain' ),
		'not_found'                  => __( 'No Encontrado', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Lista de Servicios', 'text_domain' ),
		'items_list_navigation'      => __( 'Listado Navegable de Servicios', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'Servicios', array( 'capacidades' ), $args );

}
add_action( 'init', 'servicios', 0 );