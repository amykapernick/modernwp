<?php

	acf_add_local_field_group(array(
		'key' => 'group_62986a47a0e33_news',
		'title' => 'Blocks - News',
		'fields' => array(
			array(
				'key' => 'field_626a09519ef3b_news',
				'label' => 'Heading',
				'name' => 'heading',
				'type' => 'text',
			),
			array(
				'key' => 'field_626a09a89ef3e_news',
				'label' => 'Content',
				'name' => 'content',
				'type' => 'wysiwyg',
			),
			array(
				'key' => 'field_626a09fb9ef41_news',
				'label' => 'CTA',
				'name' => 'cta',
				'type' => 'link',
				'return_format' => 'array',
			),
			
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/news-block',
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