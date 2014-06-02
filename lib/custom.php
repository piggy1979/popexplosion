<?php
/**
 * Custom functions
 */

// new image Sizes

add_image_size( 'featured', 1600, 600, true);
add_image_size( 'profilepic', 220, 180 );
add_image_size( 'newsitem', 760, 544, true);
add_image_size( 'ads', 300, 250, true );


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

register_post_type('advertisement',
	array(
		'labels'	=> array(
			'name' 			=> __('Advertisements'),
			'singular_name'	=> __('Advertisement')
			),
		'public'		=> true,
		'has_archive'	=> true,
		'menu_position'	=> 5,
		'publicly_queryable' => true,
		'supports' => array('title', 'thumbnail', 'revisions')
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
		$image = wp_get_attachment_image_src($imageID, 'newsitem');

		$output .= "<section class='news-cta col-sm-6'>\n";
		$output .= "<time class=\"published\" datetime=\"" . processDate($post->post_date, 'c') . "\">" . processDate($post->post_date, 'M') . "<br>" . processDate($post->post_date, 'd') . "</time>\n";
		$output .= "<img src=\"".$image[0]."\">\n";
		$output .= "<h2>". $post->post_title . "</h2>\n";
		$output .=  "<p>" . limit_words($post->post_content, 30) . "</p>\n";
		$output .= "</section>\n";
	}
	return $output;
}

function getAds($n = null){
	
	$args = array(
		'post_type'			=> 'advertisement',
		'posts_per_page'	=> 1,
		'orderby'			=> 'rand'
	);

	if($n !== null){
		//we have a possible id listed. Display ad that matches the id number.
		$args['p'] = $n;
	}

	$query = new WP_Query($args);
	$output = '';

	foreach($query->posts as $post){
		$imageID = get_post_thumbnail_id($post->ID);
		$image = wp_get_attachment_image_src($imageID, 'ads');
		$output .= "<a href='". get_field('url', $post->ID ) ."'>\n";
		$output .= "<img src=\"".$image[0]."\">\n";
		$output .= "</a>\n";
	}
	return $output;
}

function featuredSlides($n){
	$args = array(
		'post_type'			=> 'marcato_artist',
		'meta_key'			=> 'featured',
	//	'meta_value' 		=> 'featured',
		'posts_per_page'	=> $n
	);

	$query = new WP_Query($args);
	$output = "";
	foreach($query->posts as $post){
		$imageID = get_post_thumbnail_id($post->ID);
		$image = wp_get_attachment_image_src($imageID, 'featured');


		$background = " style='background-image: url(".$image[0].")' ";
		$output .= "<div class='slide' ".$background.">\n";
		$output .= "<div class='slidecontent'><div class='addpadding'>\n";
		$output .= "<h2>".$post->post_title."</h2>\n";
		$output .= "<a href='". get_permalink($post->ID) ."' class='profile'>See Profile</a>\n";
		$output .= "</div></div>\n";
		$output .= "</div>\n";
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

add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);

function my_css_attributes_filter($var) {
  return is_array($var) ? array_intersect($var, array('current-menu-item', 'active', 'current-page-item')) : '';
}


class Page_List_Walker extends Walker_page {
  function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
  {
  //	print_r($item);
    $output .= sprintf( "\n<li class='cat-item'><a href='%s'%s>%s</a></li>\n",
            get_permalink($item->ID),
            ( $item->ID === get_the_ID() ) ? ' class="current"' : '',
            $item->post_title );
  }

}


