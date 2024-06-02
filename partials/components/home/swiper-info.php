<?php $swiper_info = get_field("swiper-info"); ?>

<div class="swiper-info | d-flex ai-center f-column gap-32 pos-absolute">

    <div class="swiper-info-txt-wrapper | d-flex ai-center f-column gap-16">

        <div class="swiper-info-txt | text-natural-100 text-center fs-title-1">
            <?php echo $swiper_info["swiper-txt-1"] ?>
        </div>

        <div class="swiper-info-txt | text-natural-100 text-center fs-title-2">
            <?php echo $swiper_info["swiper-txt-2"] ?>
        </div>

    </div>

    <div class="swiper-info-btn">

        <?php

        $swiper_info_btn = $swiper_info["swiper-btn"];

        $info_btn_url = $swiper_info_btn['url'];

        $info_btn_title = $swiper_info_btn['title'];

        ?>


        <a class="info-btn | pi-20 pb-16 radius-12 text-natural-100 fs-caption-sm-1"
            href="<?php echo esc_url($info_btn_url); ?>"><?php echo esc_html($info_btn_title); ?></a>

    </div>

</div>