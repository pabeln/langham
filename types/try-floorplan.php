<?php

/**
 * Post Type Declaration
 */
$labels = array(
	'name'                  => _x( 'Floor plans', 'Post Type General Name', 'text_domain' ),
	'singular_name'         => _x( 'floorplan', 'Post Type Singular Name', 'text_domain' ),
	'menu_name'             => __( 'Floor Plans', 'text_domain' ),
	'name_admin_bar'        => __( 'Floor Plans', 'text_domain' ),
	'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
	'all_items'             => __( 'All Floorplans', 'text_domain' ),
	'add_new_item'          => __( 'Add New Floorplan', 'text_domain' ),
	'add_new'               => __( 'Add New', 'text_domain' ),
	'new_item'              => __( 'New Floorplan', 'text_domain' ),
	'edit_item'             => __( 'Edit Floorplan', 'text_domain' ),
	'update_item'           => __( 'Update Floorplan', 'text_domain' ),
	'view_item'             => __( 'View Floorplan', 'text_domain' ),
	'search_items'          => __( 'Search Floorplans', 'text_domain' ),
	'not_found'             => __( 'Not found', 'text_domain' ),
	'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
	'items_list'            => __( 'Items list', 'text_domain' ),
	'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
	'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
);
$args = array(
	'label'                 => __( 'floorplan', 'text_domain' ),
	'description'           => __( 'floorplans', 'text_domain' ),
	'labels'                => $labels,
	'supports'              => array( 'title', 'page-attributes'),
	'taxonomies'            => array( 'category', 'post_tag' ),
	'hierarchical'          => true,
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
register_post_type( 'floorplan', $args );
