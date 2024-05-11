<?php
defined('ABSPATH') || exit;


global $wp_query;
?>

<?php get_header() ?>


<?php if ($wp_query->have_posts()) : ?>

    <p class="text-primary-100 fs-caption-sm paragraph">Search Results In Blogs For " <?php the_title() ?> " </p>
    <div class="clr-fix-24"> </div>
    <?php
    while ($wp_query->have_posts()) :
        $wp_query->the_post();
        cyn_get_card('post');
    endwhile;
else : ?>

    <div class="text-secondary-400 d-flex jc-center fs-h2">
        Post's Not Found
    </div>
<?php endif; ?>
<div class="clr-fix-80"> </div>




<?php $all_post_args = array(

    'post_type' => 'post',
    'posts_per_page' => 3
);

$all_post_args = new WP_Query($all_post_args);


?>

<div class="pagination d-flex mb-40 jc-start">
    <?php

    $big = 999999999;
    echo the_posts_pagination([
        'screen_reader_text' => ' ',
        'base'               => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format'             => '%#%',
        'total'              => $wp_query->max_num_pages,
        'current'            => max(1, get_query_var('paged')),
        'aria_current'       => 'page',
        'show_all'           => false,
        'prev_next'          => false,
        'type'               => 'plain',
    ]);
    ?>
</div>
<?php get_footer() ?>