<?php
/**
 * The main template file
 *
 *
 * @package Modern WordPress
 * @version 1.0
 */
	
 
	if($wp_query->is_posts_page) {
		get_template_part(
			'partials/layout/index', 
			null, 
			array(
				'template' => 'blog',
				'page_id' => get_option('page_for_posts')
			)
		);
	}
	else if (is_archive()) {
		$post_type = get_post_type();
		$custom_page_header = false;

		if($post_type == 'story') {
			$custom_page_header = true;
		}
		
		get_template_part(
			'partials/layout/index', 
			null, 
			array(
				'template' => $post_type,
				'page_id' => get_page_by_path(strtok($_SERVER["REQUEST_URI"], '/'))->ID,
				'custom_page_header' => $custom_page_header
			)
		);
	}
	else if(is_search()) {
		get_template_part(
			'partials/layout/index', 
			null, 
			array(
				'template' => 'search',
				'custom_page_header' => true
			)
		);
	}
  	else {
		get_template_part('partials/layout/index');
	}

?>
