<?php
/**
 * Plugin Name: ModernWP Blocks
 */
function modernwp_blocks_register_blocks() {
	// require_once('./src/index.asset.php');
//   register_block_type( __DIR__ . '/build' );

	wp_register_script(
		'modernwp/editor-scripts',
		plugins_url( '/build/index.js', __FILE__ ),
		[ 'wp-blocks', 'wp-element', 'wp-editor', 'wp-components', 'wp-i18n' ],
		null
	);

	register_block_type('modernwp/banner', array(
		'editor_script' => 'modernwp/editor-scripts',  
	));
}
add_action( 'init', 'modernwp_blocks_register_blocks' );