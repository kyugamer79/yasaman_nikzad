<?php

$id = $args['id'] ?? 0;

?>

<div class=" post | d-flex f-row pos-relative ai-end">

    <?php echo get_the_post_thumbnail($id, 'full', ['class' => 'home-blog-img radius-16']);
    ?>


    <div class="post-sub blur-background | d-flex pb-40 pi-20 ai-center jc-around f-nowrap pos-absolute ">

        <div>
            <h3 class=" text-primary-100 fs-h3"><?php echo wp_trim_words(get_the_title($id), 3); ?></h3>
        </div>

        <div class="view-more">
            <a class="button btn-secondary" href="<?php echo get_the_permalink($id) ?>">
                <img src="<?php echo get_stylesheet_directory_uri() . "/assets/img/icon-test-7.png" ?>" alt="read more">
            </a>
        </div>
    </div>

</div>