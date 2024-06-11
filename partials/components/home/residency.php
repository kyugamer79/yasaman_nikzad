<div class="residency-main-wrapper">
    <div class="text-center">
        <p class="content-title | fs-title text-primary fs-lg-title-sm pos-relative">Residency</p>
        <p class="dubai-residency | fs-h1 text-primary-100">3 Easy Steps To Dubai Residency</p>
    </div>

    <div class="clr-fix-100 d-block d-md-none"></div>
    <div class="clr-fix-24 d-none d-md-block"></div>

    <div>
        <div class="residency-image-wrapper | pos-absolute">
            <img class="residency-image" src="<?php echo get_stylesheet_directory_uri() . "/assets/img/footprint-trail.png" ?>" alt="footprint">
        </div>

        <div class="residency-steps | d-flex f-column f-nowrap gap-24 jc-center">
            <?php

            for ($i = 1; $i <= 3; $i++) :

                $residency_steps = get_field("residency_$i", get_option('page_on_front'));
            ?>

                <div class="residency-step | d-flex gap-12 f-row mi-20 f-nowrap">
                    <div class="text-primary-100">
                        <h1><?php echo $residency_steps["residency_title_$i"] ?></h1>
                        <p><?php echo $residency_steps["residency_txt_$i"] ?></p>
                    </div>
                </div>

            <?php endfor; ?>
        </div>

    </div>

    <div class="home-call-btn | d-flex f-row-reverse ai-center m-12">
        <button class="residency-button | button btn-secondary fs-body-2 d-flex jc-center ai-center gap-8" type="submit">
            <span>Call Now</span>
            <svg class="icon icon-service-information">
                <use href="#icon-service-call" />
            </svg>
        </button>
    </div>

</div>