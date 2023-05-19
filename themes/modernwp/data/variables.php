<?php

	$menu_list = array (
		'main_menu' => 'Main Menu',
		'footer_menu' => 'Footer Menu',
		'social_menu' => 'Social Menu',
	);

	$icon_menus = array('social_menu');

	$blocks = array(
		'standard',
		'news',
	);

	$widgets = array(
		'aoc',
	);

	$image_sizes = [
		array(
			'name' => 'news_feed_block',
			'width' => 576,
			'height' => 478.5,
			'crop' => true
		),
	];

	$custom_info = [
		array(
			'default' => 'GTM-XXXXXX',
			'name' => 'gtm_tag_id',
			'type' => 'text',
			'label' => 'Enter Google Tag Manager ID',
		),
	];

	$colours = [
		[
			'name'  => 'Bright Purple',
			'slug'  => 'purple_bright',
			'color' => '#CE76DB',
		],
		[
			'name'  => 'Purple',
			'slug'  => 'purple',
			'color' => '#9B8ADC',
		],
		[
			'name'  => 'Navy',
			'slug'  => 'navy',
			'color' => '#7294FA',
		],
		
		[
			'name'  => 'Blue',
			'slug'  => 'blue',
			'color' => '#4A9AEA',
		],
		[
			'name'  => 'Green',
			'slug'  => 'green',
			'color' => '#64ad66',
		],
		[
			'name'  => 'Red',
			'slug'  => 'red',
			'color' => '#FF697C',
		],
		[
			'name'  => 'Pink',
			'slug'  => 'pink',
			'color' => '#D976AF',
		],
		[
			'name'  => 'Orange',
			'slug'  => 'orange',
			'color' => '#f78d2b',
		],
		[
			'name'  => 'Yellow',
			'slug'  => 'yellow',
			'color' => '#ffce03',
		],
		[
			'name'  => 'White',
			'slug'  => 'white',
			'color' => '#f5f0f0',
		],
		[
			'name'  => 'Black',
			'slug'  => 'black',
			'color' => '#0d0d0d',
		],
		[
			'name'  => 'Background',
			'slug'  => 'background',
			'color' => '#f7f0eb',
		],
	];
?>