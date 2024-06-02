<?php
$posts = get_posts([
    'post_type' => 'post',
    'posts_per_page' => 1,
    'orderby' => 'post_date',
    'order' => 'DESC',
]);
?>


<?php foreach ($posts as $post) : ?>

    <div class=" post | d-flex f-row pos-relative ai-end" id="blogSwiper">

        <?php echo get_the_post_thumbnail($post, 'full', ['class' => 'home-blog-img radius-16']);
        ?>


        <div class=" post-sub blur-background | d-flex gap-20 pb-32 pi-20 ai-end f-nowrap pos-absolute ">

            <div>
                <h3 class=" text-primary-100 fs-h3"><?php the_title(); ?></h3>
            </div>

            <div class="view-more">
                <button class="button btn-secondary" type="submit">
                    <img src="<?php echo get_stylesheet_directory_uri() . "/assets/img/Search.png" ?>" alt="read more">
                </button>
            </div>
        </div>


    </div>

<?php endforeach; ?>