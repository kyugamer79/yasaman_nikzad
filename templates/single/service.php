<?php get_header() ?>

<?php

$post_id = $args['post_id'] ?? get_the_ID();

$time_line_items = [
    [
        'acf_key' => 'hours',
        'title' => 'Hours',
        'index_responsive' => 1
    ],
    [
        'acf_key' => 'days',
        'title' => 'Days',
        'index_responsive' => 2

    ],
    [
        'acf_key' => 'weeks',
        'title' => 'Weeks',
        'index_responsive' => 3
    ]
];

?>

<main class="main-service | pos-relative">

    <?php cyn_get_component('services/hero'); ?>

    <div class="clr-fix-100 d-md-none"></div>

    <div class="time-line-info-wrapper d-flex f-column jc-center gap-60">

        <?php cyn_get_component('services/time-line', ['time_line_items' => $time_line_items]) ?>

        <?php cyn_get_component('services/info', ['time_line_items' => $time_line_items]); ?>

    </div>

    <div class="clr-fix-100 d-lg-none"></div>

    <?php cyn_get_component('services/swiper-service') ?>

    <div class="swiper-info-wrapper fs-body text-natural-100">

        <?php echo get_field('services/info') ?>

    </div>

    <div class="clr-fix-64"></div>

    <?php cyn_get_component('services/feature') ?>

    <div class="clr-fix-112 d-lg-none"></div>

    <?php cyn_get_component('services/information') ?>

    <div class="clr-fix-80"></div>



</main>

<?php get_footer() ?>