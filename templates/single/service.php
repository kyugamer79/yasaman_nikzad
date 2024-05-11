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

    <?php cyn_get_component('service-hero'); ?>

    <div class="clr-fix-100 d-md-none"></div>

    <div class="time-line-info-wrapper d-flex f-column jc-center gap-60">

        <?php cyn_get_component('time-line', ['time_line_items' => $time_line_items]) ?>

        <?php cyn_get_component('service-info', ['time_line_items' => $time_line_items]); ?>

    </div>

    <div class="clr-fix-100 d-lg-none"></div>

    <?php cyn_get_component('swiper') ?>

    <div class="clr-fix-64"></div>

    <?php cyn_get_component('feature') ?>

    <div class="clr-fix-112 d-lg-none"></div>

    <?php cyn_get_component('information') ?>

    <div class="clr-fix-80"></div>



</main>

<?php get_footer() ?>