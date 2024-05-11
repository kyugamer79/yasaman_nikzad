<div class="feature-cards-main-wrapper d-flex f-column gap-40 ai-center">

    <div class="feature-txt-wrapper fs-title text-natural-900 pos-absolute pos-md-static">
        <?php _e('Features', 'cyn-dm') ?></div>

    <div class="feature-cards m-bs-120 d-flex f-column gap-40 ac-lg-start">
        <?php

        for ($i = 1; $i <= 3; $i++) :

            $features_card = get_field("feature_card_$i");
        ?>
            <div class="feature-card-wrapper-desktop bg-natural-900 d-flex jc-start ai-center gap-16 p-20 radius-16">

                <div class="feature-card-icon-wrapper bg-natural-900 p-32 p-lg-8 radius-16">

                    <?php

                    echo wp_get_attachment_image($features_card["feature_icon_$i"], 'full', false, ["class" => "feature-card-icon"]);

                    ?>

                </div>

                <div class="feature-card-txt-wrapper d-flex f-column jc-center gap-24">

                    <div class="feature-card-txt-title text-natural-100 fs-h3">
                        <?php echo $features_card["feature_title_$i"] ?>
                    </div>

                    <div class="feature-card-txt-content">
                        <?php echo $features_card["feature_text_$i"] ?>
                    </div>

                </div>

            </div>

        <?php endfor; ?>

    </div>

</div>