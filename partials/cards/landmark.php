<?php $post_id = $args['post_id'] ?? get_the_ID(); ?>

<div class="landmark-image-wrapper | d-flex jc-center ai-center">
    <?php if (has_post_thumbnail($post_id)) : ?>
        <h3 class="landmark-image-text | pos-absolute text-natural-100 fs-h2"><?php the_title(); ?></h3>
        <?php echo get_the_post_thumbnail($post_id, 'full', ['class' => 'landmark-img radius-16']); ?>
    <?php endif; ?>
</div>