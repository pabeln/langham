<?php

function try_theme_setup() {


	// Enable support for post thumbnails on posts and pages
	add_theme_support('post-thumbnails');

	// Add custom image sizes
	// add_image_size( $name, $width = 0, $height = 0, $crop = false );

	// Enable support for post formats
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array('comment-list', 'search-form', 'comment-form', 'gallery', 'caption') );

	// Add default posts and comments RSS feed links to head
	add_theme_support('automatic-feed-links');

	// Enable admin to set custom background images in 'appearance > background'
	// add_theme_support('custom-background');

	// Add WYSIWYG editor stylesheet
	add_editor_style('/dist/styles/editor.css');

	// Register commonly used menus
	register_nav_menus(array(
		'primary-navigation' => 'Primary Navigation',
		'secondary-navigation' => 'Secondary Navigation'
	));
	function remove_menus(){
		remove_menu_page( 'index.php' );                  //Dashboard
		remove_menu_page( 'edit-comments.php' );          //Comments
		remove_menu_page( 'edit.php' );                   //Posts
	}
	add_action( 'admin_menu', 'remove_menus' );

	function remove_linkmanager() {
		$enabled = get_option( 'link_manager_enabled' );
		if ( 0 !== $enabled  )
			update_option( 'link_manager_enabled', 0 );
	}
	add_action('admin_init', 'remove_linkmanager');

	//Page Slug Body Class
	function add_slug_body_class( $classes ) {
		global $post;
		if ( isset( $post ) ) {
			$classes[] = $post->post_type . '-' . $post->post_name;
		}
		return $classes;
	}
	add_filter( 'body_class', 'add_slug_body_class' );

	// Disables the admin bar
	// add_filter('show_admin_bar', '__return_false');

	// Cleanup Head
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

	// Include custom post types, custom taxonomies, and general includes
	$includes = array_merge(
		glob( get_theme_root() . '/' . get_template() . '/taxonomies/*.php'), // All taxonomies
		glob( get_theme_root() . '/' . get_template() . '/types/*.php'), // All custom post types
		glob( get_theme_root() . '/' . get_template() . '/includes/*.php') // All includes
	);

	// Ignore files starting with an underscore
	if( $includes ) {
		foreach( $includes as $include ) {
			$exploded_path = explode('/', $include );
			$filename = end( $exploded_path );
			if ( strpos( $filename, '_') !== 0 ) {
				include_once( $include );
			}
		}
	}
}
add_action('after_setup_theme', 'try_theme_setup');

function disable_wp_emojicons() {

  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

  // filter to remove TinyMCE emojis
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );
function disable_emojicons_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
    return array();
  }
}