<?php defined('ABSPATH') || exit; ?>
<?php
global $wp_query;

?>

<!-- archive blog page -->

<?php get_header() ?>


<main class="archive-post">

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : ?>

            <?php the_post() ?>
            <?php cyn_get_card('post') ?>

        <?php endwhile; ?>

    <?php endif; ?>

</main>

<!-- pagination -->
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