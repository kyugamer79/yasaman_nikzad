<?php defined('ABSPATH') || exit; ?>



<?php get_header()  ?>

<div class="clr-fix-40 d-md-none d-block"></div>
<main>
    <div class="bread-crumb-section | fs-h6">
        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
    </div>

    <div class="clr-fix-24"></div>

    <section class="default-page | text-primary-100">
        <div class="img-wrapper">
            <?= wp_get_attachment_image(get_post_thumbnail_id(), 'full'); ?>
        </div>
        <div class="clr-fix-32"></div>
        <div class="paragraph">

            <h1 class="fs-caption-sm d-md-none d-block">
                <?php the_title() ?>
            </h1>

            <div class="clr-fix-36 d-md-none"></div>

            <div class="text-secondary-400 d-flex gap-24 body-1">

                <div class="d-flex gap-8 jc-center ai-center">

                    <svg class="icon archive-blog-date-icon">
                        <use href="#icon-Calendar-1" />
                    </svg>

                    <time datetime="2024-04-29T12:18:26+03:30" itemprop="datePublished"><?php echo get_the_date('Y/m/d') ?></time>
                </div>

                <div class="d-flex gap-8 jc-center ai-center">
                    <svg class="icon archive-blog-comment-icon">
                        <use href="#icon-comments" />
                    </svg> <?php echo get_comments_number() . '&nbsp' . '&nbsp' .  'Comments' ?>
                </div>

            </div>

            <div class="clr-fix-24 d-md-block d-none"></div>

            <h1 class="fs-caption-sm d-none d-md-block">
                <?php the_title() ?>
            </h1>

            <div class="clr-fix-40"></div>

            <section class="single-post-content | fs-body-2">
                <?php the_content() ?>
            </section>
        </div>
    </section>


    <div class="comments-wrapper mb-284 ">
        <?php comments_template(); ?>
    </div>


</main>
<?php get_footer() ?>