<?php
/**
 * Single Blog Post
 *
 *
 * @package Modern WordPress
 * @version 1.0
 */

	get_template_part(
		'partials/layout/index', 
		null, 
		array(
			'template' => 'post',
			'class' => 'post'
		)
	);

?>