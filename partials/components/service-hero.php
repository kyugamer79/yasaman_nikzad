<?php $post_id = $args['post_id'] ?? get_the_ID(); ?>

<div class="bg-service-svg-wrapper | pos-absolute">

    <img class="bg-service-svg" src="<?php echo get_template_directory_uri() . '/assets/img/bg-service.svg' ?>"
        alt="bg-service">
</div>

<div class="service-hero-wrapper | box-col-5 gap-48 ai-center">

    <div class="service-hero-txt col-span-3 col-span-md-5 text-natural-100">
        <h1 class="fs-title-1"><?php the_title() ?></h1>
    </div>


    <div class="service-hero-img col-span-2 col-span-md-5">
        <?php if (has_post_thumbnail()) : ?>
        <?php echo get_the_post_thumbnail($post_id , 'full', ['class' => 'service-img radius-16']); ?>
        <?php endif; ?>
    </div>

</div>