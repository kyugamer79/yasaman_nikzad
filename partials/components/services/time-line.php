<?php
$time_line_items = $args['time_line_items'] ?? null;
?>

<div class="time-line-wrapper d-flex d-lg-none jc-evenly">

    <?php foreach ($time_line_items as $i => $item) : ?>
        <div class="time-section-1-wrapper d-flex jc-center ai-center gap-4">
            <div class="time-section-1 fs-h1 text-natural-100"><?php echo get_field($item['acf_key']) ?></div>
            <span class="fs-title-2 text-natural-100"><?php echo $item['title'] ?></span>
        </div>

        <?php if ($i !== 2) : ?>
            <svg class="icon time-line-arrow">
                <use href="#icon-service-arrow-right-" />
            </svg>
        <?php endif; ?>
    <?php endforeach; ?>

</div>