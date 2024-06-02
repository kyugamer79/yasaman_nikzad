<div class="swiper-main-wrapper">

    <div class="swiper" id="homePageSwiper">

        <div class="swiper-wrapper">

            <?php

            for ($i = 1; $i <= 4; $i++) {

                $slideShow_image = get_field("image_$i");

                echo wp_get_attachment_image($slideShow_image, "full", false, ["class" => "img-responsive swiper-slide radius-16"]);
            }

            ?>

        </div>

        <div class="swiper-pagination d-flex jc-center radius-50 gap-4 pos-absolute"></div>

    </div>

</div>