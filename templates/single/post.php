<?php defined('ABSPATH') || exit; ?>



<?php get_header()  ?>


<main>
    <section class="default-page | mb-36 text-primary-100">
        <div class="breadcrumb"><?php rank_math_the_breadcrumbs(); ?></div>

        <div class="img-wrapper">
            <?= wp_get_attachment_image(get_post_thumbnail_id(), 'full'); ?>
        </div>

        <div class="clr-fix-32"></div>

        <div class="paragraph">

            <h1>
                <?php the_title() ?>
            </h1>

            <div class="clr-fix-36"></div>

            <div class="text-secondary-400 d-flex gap-24 body-1">

                <div class="d-flex jc-center ai-center gap-8 text-natural-400">
                    <img class="single-blog-icon"
                        src="<?php echo get_stylesheet_directory_uri() . "/assets/img/icon-test-16.png" ?>"
                        alt="read more">
                    <time datetime="2024-04-29T12:18:26+03:30"
                        itemprop="datePublished"><?php echo get_the_date('Y/m/d'); ?></time>
                </div>

                <div class="d-flex jc-center ai-center gap-8 text-natural-400">
                    <img class="single-blog-icon"
                        src="<?php echo get_stylesheet_directory_uri() . "/assets/img/icon-test-17.png" ?>"
                        alt="read more">
                    <?php echo get_comments_number() . '&nbsp' . '&nbsp' .  'comments' ?>
                </div>

            </div>

            <div class="clr-fix-40"></div>

            <section class="single-post-content">

                <?php the_content() ?>

            </section>

        </div>

    </section>

    <div>lorem ipsum !</div>

    <div class="comments-wrapper mb-284 ">
        <?php comments_template(); ?>
    </div>


</main>
<?php get_footer() ?>