<?php

/**
 * get category info
 * 
 * @todo change for custom taxonomy
 *
 * @param int $post_id
 * @param string $url_all
 * @param WP_TERM | string | int $taxonomy
 * 
 * 
 * @return array
 */
function cyn_category_info($post_id, $url_all, $taxonomy)
{
    $current_post_cat_ids = [];
    foreach (get_the_category($post_id) as $cat) {
        array_push($current_post_cat_ids, $cat->term_id);
    }

    $categories = get_categories([
        'orderby' => 'id',
        'hide_empty' => false,
        'taxonomy' => $taxonomy
    ]);

    $categories_link = [];
    foreach ($categories as $cat) {
        array_push($categories_link, get_category_link($cat->term_id));
    }

    $info_categories = [
        [
            'name' => 'All',
            'link' => $url_all,
            'in_category_exist' => true
        ]
    ];

    for ($i = 0; $i < count($categories); $i++) {
        array_push(
            $info_categories,
            [
                'name' => $categories[$i]->name,
                'link' => $categories_link[$i],
                'in_category_exist' => in_array($categories[$i]->term_id, $current_post_cat_ids)
            ]
        );
    }
    return $info_categories;
}


/**
 * CYN Reading Time
 *
 * @param int $id //post id
 * @return string //reading time + ' Min'
 */
function cyn_reading_time($id)
{
    $content = get_post_field('post_content', $id);
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 50);
    return $reading_time . ' Min';
}

function cyn_get_component( $name, $args = [] ) {
	get_template_part( '/partials/components/' . $name, null, $args );
}

function cyn_get_card( $name, $args = [] ) {
	get_template_part( '/partials/cards/' . $name, null, $args );
}

/**
 * Summary of cyn_format_date
 * @param DateTime $date
 * @return bool|string
 */
function cyn_format_date( $date, $format = '' ) {

	if ( $format == '' ) {
		$format = 'yyyy/MM/dd';
	}

	$formatter = new IntlDateFormatter(
		"en_US@calendar=persian",
		IntlDateFormatter::FULL,
		IntlDateFormatter::FULL,
		'Asia/Tehran',
		IntlDateFormatter::TRADITIONAL,
		$format );

	return $formatter->format( $date );
}

function cyn_format_acf_date( $field_name, $post_id, $format = '' ) {
	$field = get_field( $field_name, $post_id );
	$field = explode( '/', $field );
	$field = implode( '/', array_reverse( $field ) );

	$formatted_date = date_create( $field );
	$formatted_date = cyn_format_date( $formatted_date, $format );

	return $formatted_date;
}