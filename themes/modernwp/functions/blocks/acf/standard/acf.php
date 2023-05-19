<?php

	acf_add_local_field_group(array(
		'key' => 'group_626a02d222904',
		'title' => 'Blocks - Standard Block',
		'fields' => array(
			array(
				'key' => 'field_626a09519ef3b',
				'label' => 'Heading',
				'name' => 'heading',
				'type' => 'text',
			),
			array(
				'key' => 'field_626a09869ef3d',
				'label' => 'Image',
				'name' => 'image',
				'type' => 'image',
			),
			array(
				'key' => 'field_626a09fb9ef41',
				'label' => 'CTA',
				'name' => 'cta',
				'type' => 'link',
			),
			array(
				'key' => 'field_626a09a89ef3e',
				'label' => 'Content',
				'name' => 'content',
				'type' => 'wysiwyg',
			),
			array(
				'key' => 'field_block_colour',
				'label' => 'Block Colour',
				'name' => 'colour',
				'type' => 'color_picker',
				'default_value' => '#f0eee9',
				'enable_opacity' => 0,
				'return_format' => 'string',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/standard-block',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'active' => true,
	));


?>