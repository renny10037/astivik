<?php
/*
Plugin Name: CPT Search
Plugin URI:
Description:
Version:
Author:
Author URI:
License:
License URI:
*/
if ( ! function_exists('search') ) {

// Register Custom Post Type
function search() {

	$labels = array(
		'name'                  => _x( 'Preguntas que Aparecerán en el Buscador', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'search', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Buscador', 'text_domain' ),
		'name_admin_bar'        => __( 'Buscador', 'text_domain' ),
		'archives'              => __( 'Archivos de Buscador', 'text_domain' ),
		'attributes'            => __( 'Atributos de Buscador', 'text_domain' ),
		'parent_item_colon'     => __( 'Item de Buscador', 'text_domain' ),
		'all_items'             => __( 'Todos', 'text_domain' ),
		'add_new_item'          => __( 'Añadir Nueva Pregunta', 'text_domain' ),
		'add_new'               => __( 'Añadir Nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo', 'text_domain' ),
		'edit_item'             => __( 'Editar', 'text_domain' ),
		'update_item'           => __( 'Actualizar', 'text_domain' ),
		'view_item'             => __( 'Ver', 'text_domain' ),
		'view_items'            => __( 'Ver Todos', 'text_domain' ),
		'search_items'          => __( 'Buscar', 'text_domain' ),
		'not_found'             => __( 'No Encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen Destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Configurar Imagen Destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Borrar Imagen Destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como Imagen Destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en Buscador', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizar en Buscador', 'text_domain' ),
		'items_list'            => __( 'Listado de Buscador', 'text_domain' ),
		'items_list_navigation' => __( 'Listado Navegable de Buscador', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro de Lista de Buscador', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'search', 'text_domain' ),
		'description'           => __( 'search', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title','editor','thumbnail'),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 2,
		'menu_icon'             => 'dashicons-search',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'search', $args );

}
add_action( 'init', 'search', 0 );

}