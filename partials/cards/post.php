<?php
$post_categories = get_the_category();

?>

<div>
    <div class="shadow-element | d-flex f-column gap-32 ">
        <div class="card-gap bg-primary radius-16 p-20 box-col-12 gap-32 title-blog">
            <!-- فیچر ایمیج بلاگ ها -->
            <div class="search-blogs-image col-span-3 d-flex ai-center jc-center">
                <a href="<?php the_permalink() ?>" class=" blog-image d-block h-100">
                    <?= wp_get_attachment_image(get_post_thumbnail_id(), 'full', false, ['class' => 'radius-8', 'style' => 'aspect-ratio: 1']); ?>
                </a>
            </div>
            <!-- قسمت متنی باکس -->
            <div class="col-span-9 txt-blog">
                <div class="d-lg-flex jc-between">
                    <!-- دسته بندی یا کتگوری بلاگ ها -->
                    <div class=" d-flex gap-4">
                        <?php foreach ($post_categories as $term) : ?>
                        <a href="<?php echo get_term_link($term) ?>" class="text-secondary-400">
                            <?php if ($term === end($post_categories)) : ?>
                            <?php echo $term->name ?>
                            <?php else : ?>
                            <?php echo $term->name . ', ' ?>
                            <?php endif; ?>
                        </a>
                        <?php endforeach; ?>
                    </div>

                    <!-- تاریخ -->
                    <div class="d-none d-lg-block fs-body-1">
                        <img class="d-lg-none"
                            src="<?php echo get_template_directory_uri() . '/assets/img/icon-test-1.png' ?>"
                            alt="search">

                        <time datetime="<?php echo get_the_date('c'); ?>"
                            itemprop="datePublished"><?php echo get_the_date('Y/m/d'); ?></time>
                    </div>
                </div>

                <div class="clr-fix-8"></div>

                <!-- موضوع بلاگ -->
                <div class="text-primary-100 fs-caption-lg-1 d-flex fs-lg-body-1">
                    <a href="<?php the_permalink() ?>" class="d-block">
                        <?php the_title() ?>
                    </a>
                </div>

                <div class="clr-fix-12"></div>

                <div class="d-lg-none">
                    <?php the_excerpt() ?>
                </div>

                <div class="clr-fix-20 d-lg-none"></div>

                <div class="d-flex gap-36">

                    <div class="d-lg-none d-flex jc-center ai-center fs-body-1 gap-8">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/icon-test-14.png' ?>"
                            alt="icon-test">
                        <time datetime="<?php echo get_the_date('c'); ?>"
                            itemprop="datePublished"><?php echo get_the_date('Y/m/d'); ?></time>
                    </div>

                    <div class="d-lg-none d-flex jc-center ai-center fs-body-1 gap-8">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/icon-test-15.png' ?>"
                            alt="icon-test">
                        <?php echo get_comments_number() . '&nbsp' . '&nbsp' .  'comments' ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class=" clr-fix-32"></div>
</div>