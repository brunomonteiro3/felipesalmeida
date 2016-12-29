<?php
	add_theme_support( 'post-thumbnails' ); 

	// Register Custom Post Type
	function background() {

		$labels = array(
			'name'                  => 'Backgrounds',
			'singular_name'         => 'Background',
		);
		$args = array(
			'label'                 => 'Background',
			'labels'                => $labels,
			'supports'              => array(
											'title', 
											'thumbnail'),
			'taxonomies'            => array(),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'menu_icon'				=> 'dashicons-format-image'
		);
		register_post_type( 'background', $args );

	}
	add_action( 'init', 'background', 0 );
?>