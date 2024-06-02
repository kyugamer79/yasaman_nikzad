<?php /* Template Name: Blogs*/ ?>

<?php get_header() ?>

<?php

$blog_posts = get_posts([
    'post_type' => 'post',
    'posts_per_page' => 6,
    'orderby' => 'post_date',
]);

?>

<?php foreach ($blog_posts as $blog_post) : ?>
    <main>
        <section class="default-page | mb-36 text-primary-100 d-flex gap-32 ">
            <!-- image -->
            <div class="img-wrapper | p-20">
                <?php echo get_the_post_thumbnail($blog_post, 'full', false); ?>
            </div>
            <div class="clr-fix-8"></div>



            <div class="paragraph">
                <!-- title -->
                <p class="fs-h3">
                    <?php echo $blog_post->post_title ?>
                </p>
                <!-- time and comment -->
                <div class="text-secondary-400 d-flex gap-24 body-1">
                    <!-- time -->
                    <div class="d-flex gap-8">
                        <img src="<?php echo get_stylesheet_directory_uri() . "/assets/img/Search.png" ?>" alt="read more">
                        <time datetime="2024-04-29T12:18:26+03:30" itemprop="datePublished">2024/04/29</time>
                    </div>
                    <!-- comment -->
                    <div class="d-flex gap-8">
                        <img src="<?php echo get_stylesheet_directory_uri() . "/assets/img/Search.png" ?>" alt="read more">
                        <p> <?php echo get_comments_number();
                            _e('Comments', 'cyn-dm') ?> </p>
                    </div>
                    <section class="single-post-content">
                        <?php //echo $blog_post->post_content 
                        ?>
                    </section>
                </div>
            </div>
        </section>

    </main>

<?php endforeach ?>


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