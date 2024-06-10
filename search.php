<?php
defined('ABSPATH') || exit;


global $wp_query;
?>

<?php get_header() ?>


<div class="search-wrapper">

</div>

<form action="/" class="search-wrapper bg-natural-800 d-flex jc-between ai-center pb-8 pi-12 radius-8">
    <input class="search-input | text-natural-100 w-100" type="search" value="<?php the_search_query() ?>" id="search"
        name="s" placeholder="Search">
    <img class="search-logo" src="<?php echo get_template_directory_uri() . '/assets/img/icon-test-1.png' ?>"
        alt="logo">
</form>

<div class="clr-fix-28"></div>

<?php if ($wp_query->have_posts()) : ?>

<p class="text-primary-100 fs-caption-sm ">Search Results In Blogs For " <?php the_search_query() ?> " </p>
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
<div class="clr-fix-80"> </div>

<?php get_footer() ?>