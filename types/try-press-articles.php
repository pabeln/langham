<?php

/**
 * Post Type Declaration
 */	
$labels = array(
	'name'                  => _x( 'Press Articles', 'Post Type General Name', 'text_domain' ),
	'singular_name'         => _x( 'press-article', 'Post Type Singular Name', 'text_domain' ),
	'menu_name'             => __( 'Press Articles', 'text_domain' ),
	'name_admin_bar'        => __( 'Press Articles', 'text_domain' ),
	'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
	'all_items'             => __( 'All Press Articles', 'text_domain' ),
	'add_new_item'          => __( 'Add New Press Article', 'text_domain' ),
	'add_new'               => __( 'Add New', 'text_domain' ),
	'new_item'              => __( 'New Press Article', 'text_domain' ),
	'edit_item'             => __( 'Edit Press Article', 'text_domain' ),
	'update_item'           => __( 'Update Press Article', 'text_domain' ),
	'view_item'             => __( 'View Press Article', 'text_domain' ),
	'search_items'          => __( 'Search Press Articles', 'text_domain' ),
	'not_found'             => __( 'Not found', 'text_domain' ),
	'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
	'items_list'            => __( 'Items list', 'text_domain' ),
	'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
	'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
);
$args = array(
	'label'                 => __( 'press-article', 'text_domain' ),
	'description'           => __( 'Post Type Description', 'text_domain' ),
	'labels'                => $labels,
	'supports'              => array( 'title', 'editor', ),
	'taxonomies'            => array( 'category', 'post_tag' ),
	'hierarchical'          => false,
	'public'                => true,
	'show_ui'               => true,
	'show_in_menu'          => true,
	'menu_position'         => 5,
	'show_in_admin_bar'     => true,
	'show_in_nav_menus'     => true,
	'can_export'            => true,
	'has_archive'           => true,		
	'exclude_from_search'   => false,
	'publicly_queryable'    => true,
	'capability_type'       => 'page',
);
register_post_type( 'press-article', $args );
