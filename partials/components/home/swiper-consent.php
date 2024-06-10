<?php

$consent_cards = get_posts([
    'post_type' => 'consent',
    'posts_per_page' => -1,
    'fields' => 'ids',
    'orderby' => 'post_date',
    'order' => 'DESC',
]);

?>

<div class="consent-main-wrapper">

    <div id="consent-section" class="content-title | text-center fs-title text-primary fs-lg-title-sm">

        <?php _e('Consents', 'cyn-dm') ?>

    </div>

    <div class="swiper-main-wrapper">

        <div class="swiper" id="consentSwiper">

            <div class="swiper-wrapper">

                <?php foreach ($consent_cards as $consent_id) : ?>

                <div class="swiper-slide"><?php cyn_get_card('consent-card', ['id' => $consent_id]) ?></div>

                <?php endforeach ?>

            </div>

            <div class="swiper-pagination | mb-24  d-flex jc-center radius-50 gap-4"></div>

            <div class="swiper-scrollbar"></div>

        </div>

    </div>

</div>