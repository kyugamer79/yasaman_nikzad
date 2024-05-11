<div class="swiper-main-wrapper">

    <div class="swiper rounded-16" id="singleServiceSwiper">

        <div class="swiper-navigation d-lg-flex">
            <div class="swiper-button-prev d-flex jc-center pos-absolute ai-center radius-12 pb-12 pi-16">
                <img class="icon-test-7 pos-absolute" src="<?php echo get_template_directory_uri() . '/assets/img/icon-test-8.png' ?>" alt="arrow-right">
            </div>

            <div class="swiper-button-next d-flex jc-center pos-absolute ai-center ai-center radius-12 pb-12 pi-16">
                <img class="icon-test-8 pos-absolute" src="<?php echo get_template_directory_uri() . '/assets/img/icon-test-7.png' ?>" alt="arrow-left">
            </div>
        </div>


        <div class="swiper-wrapper">

            <?php

            for ($i = 1; $i <= 10; $i++) {

                $slideShow_image = get_field("image_$i");

                echo wp_get_attachment_image($slideShow_image, "full", false, ["class" => "img-responsive swiper-slide radius-16"]);
            }

            ?>

        </div>

        <div class="swiper-pagination d-flex jc-center radius-50 gap-4 pos-absolute"></div>

    </div>

    <div class="clr-fix-80 d-lg-none"></div>
    <div class="clr-fix-20 d-none d-lg-block "></div>

    <div class="swiper-info-wrapper fs-body text-natural-100">

        <?php echo get_field('swiper-info') ?>

    </div>
</div>