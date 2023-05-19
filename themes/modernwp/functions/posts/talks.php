<?php

	function modernwp_talks_post_type() {
		$singular = 'Talk';
		$plural = 'Talks';
		$description = 'Talks that I have given';
		$icon = 'dashicons-megaphone';

		$labels = array(
		'name'               => _x( $plural, 'post type general name' ),
		'singular_name'      => _x( $singular, 'post type singular name' ),
		'add_new'            => _x( 'Add New', $singular ),
		'add_new_item'       => __( 'Add New ' . $singular ),
		'edit_item'          => __( 'Edit ' . $singular ),
		'new_item'           => __( 'New ' . $singular ),
		'all_items'          => __( 'All ' . $plural ),
		'view_item'          => __( 'View ' . $singular ),
		'search_items'       => __( 'Search ' . $plural ),
		'not_found'          => __( 'No ' . $plural . ' found' ),
		'not_found_in_trash' => __( 'No ' . $plural . ' found in the Trash' ), 
		'menu_name'          => $plural
		);

		$args = array(
			'labels'        => $labels,
			'description'   => $description,
			'public'        => true,
			'show_in_rest' => true,
			'has_archive'   => 'stories',
			'menu_icon' => $icon,
			'supports' => array(
				'editor',
				'title',
				'thumbnail',
				'revisions',
				'custom-fields',
				'excerpt'
			)
		);

		register_post_type( 'talk', $args ); 
	}

	add_action( 'init', 'modernwp_talks_post_type' );
?>