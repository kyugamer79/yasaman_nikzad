<?php
$time_line_items = $args['time_line_items'] ?? null;
?>

<div class="info-cards-wrapper">
    <div class="info-card box-col-3 gap-116 ">

        <?php

        for ($i = 1; $i <= 3; $i++) :
            $card = get_field("info_card_$i", get_the_ID());

        ?>

            <?php foreach ($time_line_items as $item) : ?>

                <?php if ($i == $item['index_responsive']) : ?>

                    <div class="time-section-<?php echo $i ?>-wrapper | col-span-1 col-span-md-3 col-span-lg-3 d-lg-flex d-none jc-center ai-center gap-4">
                        <div class="time-section-<?php echo $i ?> fs-h2 text-natural-100"><?php echo get_field($item['acf_key']) ?>
                        </div>
                        <span class="fs-title-2 text-natural-100"><?php echo $item['title'] ?></span>
                    </div>

                <?php endif; ?>

            <?php endforeach; ?>


            <div class="info-section col-span-1 col-span-md-3 col-span-lg-3 d-flex f-column gap-28 p-20 radius-16">

                <div class="info-card-title fs-h3 text-natural-100 text-start">
                    <?php echo $card["title"]; ?>
                </div>

                <div class="info-card-txt fs-body">
                    <?php echo $card["text"]; ?>
                </div>

            </div>

        <?php endfor; ?>

    </div>
</div>