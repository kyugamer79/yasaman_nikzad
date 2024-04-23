<?php
defined( 'ABSPATH' ) || exit;

global $wp_query;

if ( isset ( $wp_query->post->post_type ) ) {
	get_template_part( 'templates/archive/' . $wp_query->post->post_type );
	exit();
}

if ( is_category() || is_date() || is_tag() || is_author() ) {
	get_template_part( 'templates/archive/post' );
	exit();
}

$query_array = explode( ' ', $wp_query->request );
$query_array = array_splice( $query_array, 0 );
$post_type_needle_index = array_search( '((wp_posts.post_type', $query_array );
$req_post_type = str_replace( "'", "", $query_array[ $post_type_needle_index + 2 ] );

if ( $req_post_type ) {
	get_template_part( 'templates/archive/' . $req_post_type );
} else {
	wp_die( 'not template found!' );
}