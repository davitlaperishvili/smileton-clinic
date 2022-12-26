<?php

// Services post type
function services_post_type(){
	register_post_type('services', [
		'label'  => null,
		'labels' => [
			'name'				=> 'Services',
			'singular_name'		=> 'Service',
			'add_new'			=> 'Add Service',
			'add_new_item'		=> 'Add Service',
			'edit_item'			=> 'Edit Service',
			'new_item'			=> 'New Service',
			'view_item'			=> 'Watch Service',
			'search_items'		=> 'Search Service',
			'not_found'			=> 'Not found',
		],
		'description'		=> 'Post for Service',
		'public'			=> true,
		'show_in_menu'		=> true,
		'show_in_rest'		=> true,
		'rest_base'			=> true,
		'menu_position'		=> true,
		'menu_icon'			=> 'dashicons-megaphone',
		'hierarchical'		=> true,
		'supports'			=> ['title', 'thumbnail', 'editor'],
		'taxonomies'		=> [],
		'has_archive'		=> true,
		'rewrite'			=> true,
		'query_var'			=> true,
	]);
}
add_action('init', 'services_post_type');