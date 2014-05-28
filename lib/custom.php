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

/**
Clean up functions
**/

function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_action('init', 'create_post_types');


// pass hashtag to function it searches for a hashtag and if none exists it adds one otherwise it will return 
// the original text including the hash.
function check_hash($n){
	if(!$n) return;
	$hashpos = strpos($n, "#");

	if($hashpos === false){
		$output = "#" . $n;
	}else if($hashpos == 0){
		$output = $n;
	}
	return $output;
}

/* pull latest news */

function getNews($n){

	$output= "";

	$args = array(
		'post_type' 		=> 'post',
		'posts_per_page'	=> $n,
		'order'				=> 'DESC'
		);

	$query = new WP_Query($args);

	foreach($query->posts as $post){

		$imageID = get_post_thumbnail_id($post->ID);
		$image = wp_get_attachment_image_src($imageID, 'large');


		$output .= "<section class='news-cta col-md-6'>\n";
		$output .= "<time class=\"published\" datetime=\"" . processDate($post->post_date, 'c') . "\">" . processDate($post->post_date, 'd') . "<br>" . processDate($post->post_date, 'M') . "</time>\n";
		$output .= "<img src=\"".$image[0]."\">\n";
		$output .= "<h2>". $post->post_title . "</h2>\n";
		$output .=  "<p>" . limit_words($post->post_content, 30) . "</p>\n";
		$output .= "</section>\n";
	}

	return $output;

}

function limit_words($string, $word_limit){
	$newstring = strip_tags($string);
    $words = explode(" ",$newstring);
    return implode(" ",array_splice($words,0,$word_limit));
}

function processDate($t, $format){
	$date = strtotime($t);
	return date($format, $date);
}






