<?php

$resume_cards = get_posts([
    'post_type' => 'resume',
    'posts_per_page' => 2,
    'orderby' => 'post_date',
]);

?>

<div class="content-title | text-center fs-title text-primary fs-lg-title-sm">
    <?php _e('Resume', 'cyn-dm') ?>
</div>
<div class="d-flex f-row f-nowrap gap-24 jc-center resume">

    <?php foreach ($resume_cards as $resume_card) : ?>

        <div class="resume-main-wrapper shadow-element | bg-primary radius-16 p-32 ">
            <!-- name- location - year -->
            <div>
                <!-- country name -->
                <div class="fs-h3 text-primary-100">
                    <?php echo $resume_card->post_title ?>
                </div>


                <!-- location and year -->
                <div class="d-flex jc-between">


                    <!-- location -->
                    <div class="fs-body text-primary-100">
                        <?php echo get_field("resume_location", $resume_card->ID); ?>
                    </div>


                    <!-- year -->
                    <div class="fs-body-1 text-secondary-400">
                        <?php echo get_field("resume_year", $resume_card->ID); ?>
                    </div>
                </div>
            </div>

            <!-- description -->
            <div class="fs-body-1 text-primary-100 d-flex">

                <?php echo get_field("resume_text", $resume_card->ID) ?>

            </div>

        </div>


    <?php endforeach ?>
</div>