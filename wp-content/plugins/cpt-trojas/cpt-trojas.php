<?php
/*
Plugin Name: CPT Trojas
Plugin URI:
Description:
Version:
Author:
Author URI:
License:
License URI:
*/
if ( ! function_exists('trojas') ) {

// Register Custom Post Type
function trojas() {

	$labels = array(
		'name'                  => _x( 'trojas', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'trojas', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Trojas', 'text_domain' ),
		'name_admin_bar'        => __( 'Trojas', 'text_domain' ),
		'archives'              => __( 'Archivos de Trojas', 'text_domain' ),
		'attributes'            => __( 'Atributos de Trojas', 'text_domain' ),
		'parent_item_colon'     => __( 'Item de Trojas', 'text_domain' ),
		'all_items'             => __( 'Todas', 'text_domain' ),
		'add_new_item'          => __( 'Añadir Nueva Troja', 'text_domain' ),
		'add_new'               => __( 'Añadir Nueva', 'text_domain' ),
		'new_item'              => __( 'Nueva', 'text_domain' ),
		'edit_item'             => __( 'Editar', 'text_domain' ),
		'update_item'           => __( 'Actualizar', 'text_domain' ),
		'view_item'             => __( 'Ver', 'text_domain' ),
		'view_items'            => __( 'Ver Todas', 'text_domain' ),
		'search_items'          => __( 'Buscar', 'text_domain' ),
		'not_found'             => __( 'No Encontrada', 'text_domain' ),
		'not_found_in_trash'    => __( 'No Encontrada en Papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen Destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Configurar Imagen Destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Borrar Imagen Destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como Imagen Destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en Trojas', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizar en Trojas', 'text_domain' ),
		'items_list'            => __( 'Listado de Trojas', 'text_domain' ),
		'items_list_navigation' => __( 'Listado Navegable de Trojas', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro de Lista de Trojas', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'trojas', 'text_domain' ),
		'description'           => __( 'trojas', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title','thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-welcome-write-blog',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'trojas', $args );

}
add_action( 'init', 'trojas', 0 );

}