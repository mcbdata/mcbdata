<?php 
	// Add theme support for Featured Images
	add_theme_support('post-thumbnails', array(
		'post',
		'page',
		'custom-post-type-name',
	));
	add_filter( 'wpseo_json_ld_output', '__return_false' );
?>
