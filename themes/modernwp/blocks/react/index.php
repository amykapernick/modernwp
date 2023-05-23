<?php

	function add_modernwp_custom_block_scripts() {
		// wp_enqueue_script(
		// 	'modernwp/editor-scripts',
		// 	get_stylesheet_directory_uri() . '/dist/index.js',
		// 	array(
		// 		'wp-blocks',
		// 		'wp-components',
		// 		'wp-element',
		// 		'wp-editor'
		// 	),
		// 	null,
		// 	true
		// );

		// wp_register_script(
		// 	'modernwp/banner-scripts',
		// 	get_stylesheet_directory_uri() . './banner/index.js',
		// 	array(
		// 		'wp-blocks',
		// 		'wp-components',
		// 		'wp-element',
		// 		'wp-editor'
		// 	),
		// 	null,
		// 	true
		// );

		// $required_scripts = array(
		// 	'wp-blocks',
		// 	'wp-i18n',
		// 	'wp-element',
		// 	'wp-components',
		// 	'wp-editor'
		// );
	
		// // Add Babel File
		// wp_enqueue_script( 'babel', 'https://unpkg.com/babel-standalone@6/babel.min.js', $required_scripts );
		// $required_scripts[] = 'babel';
	
		// Gutenberg Block JSX code
		wp_enqueue_script( 
			'my-custom-script', 
			get_stylesheet_directory_uri() . './banner/index.js', 
			array(
						'wp-blocks',
						'wp-components',
						'wp-element',
						'wp-i18n',
						'wp-editor'
					),
			null,
			true
		);

		register_block_type( 'modernwp/banner');

		// // Add Gutenberg scripts
		// wp_enqueue_script( 
		// 	'modernwp_custom_block_scripts',
		// 	get_template_directory() . '/dist/index.js',
		// 	array(
		// 		'wp-blocks',
		// 		'wp-components',
		// 		'wp-element',
		// 		'wp-i18n',
		// 		'wp-editor'
		// 	),
		// 	'1.0.0',
		// 	true
		// );

		// Register custom block types
		// register_block_type(
		// 	'modernwp/banner',
		// 	array(
		// 		'editor_script' => 'modernwp/banner-scripts'
		// 	)
		// );
	}

	add_action('init', 'add_modernwp_custom_block_scripts');

	// function my_block_editor_modify_jsx_tag( $tag, $handle, $src ) {

	// 	// Convert the custom block file to be recognized as a JSX file
	// 	if ( 'my-custom-script' == $handle ) {
	// 		$tag = str_replace( "<script type='text/javascript'", "<script type='text/babel'", $tag );
	// 	}
	
	// 	return $tag;
	// }
	// add_filter( 'script_loader_tag', 'my_block_editor_modify_jsx_tag', 10, 3 );

	
	// require_once(__DIR__ . '/banner/index.php');

?>