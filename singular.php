<?php

defined( 'ABSPATH' ) || exit;


$post_type = get_queried_object()->post_type;

if ( $post_type ) {
	get_template_part( 'templates/single/' . $post_type );
} else {
	wp_die( 'not template found!' );
}
