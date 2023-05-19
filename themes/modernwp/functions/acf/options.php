<?php

	// Add Business Details Page
	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page(array(
			'page_title' 	=> 'Business Details',
			'menu_title'	=> 'Business Details',
			'menu_slug' 	=> 'business-details',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
	}

	// Options - Business Info
	if(function_exists('acf_add_local_field_group')) {
		acf_add_local_field_group(array(
			'key' => 'modernwp_business_info',
			'title' => 'Business Info',
			'fields' => array(
				array(
					'key' => 'modernwp_business_info_field_email',
					'label' => 'Email Address',
					'name' => 'email',
					'type' => 'text',
					'wrapper' => array(
						'width' => '51',
						'class' => '',
						'id' => '',
					),
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'business-details',
					),
				),
			),
			'style' => 'seamless',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'active' => true,
		));
	}


?>