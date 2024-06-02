<?php $landmark_percent_img = get_field("landmark-percent-img"); ?>

<?php //$landmark_percent_mobile_img = get_field("landmark-percent-mobile-img"); 
?>

<?php $landmark_percent_txt = get_field("landmark-percent-txt"); ?>

<div class="landmark-percent-wrapper | pos-relative">

    <div class="landmark-percent-title-wrapper content-title | pos-relative fs-title text-natural-900 pos-lg-static">
        <?php _e('Dubai Guide', 'cyn-dm') ?>
    </div>

    <div class="clr-fix-8"></div>

    <div class="landmark-percent-info-wrapper | box-col-3 gap-40 p-ie-40 ai-end">

        <div class="landmark-percent-info-img | col-span-1 col-span-lg-3">
            <?php echo wp_get_attachment_image($landmark_percent_img, 'full', false, ["class" => "landmark-percent-img | radius-16"]); ?>
        </div>

        <!-- <div class="landmark-percent-info-img-mobile | col-span-1 col-span-lg-3">
        <?php //echo wp_get_attachment_image($landmark_percent_mobile_img, 'full', false, ["class" => "landmark-percent-img-mobile | radius-16"]); 
        ?>
    </div> -->

        <div class="landmark-percent-txt-wrapper | col-span-2 col-span-lg-3 d-flex f-column gap-20 text-natural-100 fs-body-2">

            <div class="landmark-txt">
                <?php echo $landmark_percent_txt ?>
            </div>

            <div class="clr-fix-28 d-lg-none"></div>

            <?php

            for ($i = 1; $i <= 6; $i++) :
                $landmark_percent = get_field("landmark-statistics_$i");
            ?>

                <div class="landmark-percent-txt | d-flex pos-relative jc-between ai-center fs-body-2 ">

                    <span>
                        <?php echo $landmark_percent["landmark-name_$i"] ?>
                    </span>

                    <div class="landmark-item | bg-natural-100">

                        <span class="landmark-item-inner | bg-natural-100 pos-absolute" style="--width:<?php echo $landmark_percent["landmark-percent_$i"] . '%' ?>"></span>

                    </div>
                </div>

            <?php endfor; ?>

        </div>
    </div>
</div>