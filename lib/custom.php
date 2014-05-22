<?php
/**
 * Custom functions
 */

// new image Sizes

add_image_size( 'featured', 1600, 700 );
add_image_size( 'profilepic', 220, 180 );

register_nav_menus(array(
	'secondary_nav' => __('Secondary Navigation', 'roots')
));

/** 
/* RESGISTER POST TYPES
**/

function create_post_types(){

register_post_type('news', 
	array(
		'labels'	=> array(
			'name' 			=> __('News'),
			'singular_name'	=> __('News')
			),
		'public'		=> true,
		'has_archive'	=> true,
		'menu_position'	=> 5,
		'publicly_queryable' => true,
		'supports' => array('title', 'excerpt', 'editor', 'thumbnail', 'revisions')
	)
);

}

add_action('init', 'create_post_types');