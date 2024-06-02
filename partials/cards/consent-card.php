<?php
$id = $args['id'] ?? 0;

?>

<div>
    <div class="consent-main-wrapper consent shadow-element | bg-primary radius-16 p-32 mi-32">
        <!-- title( image/date/name/position) -->
        <div class="d-flex gap-20">
            <!-- image -->
            <div class="consent-image-customer">
                <?php echo get_the_post_thumbnail($id, 'full', ['class' => 'consent-image']) ?>
            </div>

            <!-- date and name and position -->
            <div>
                <div class="d-flex">
                    <!-- name -->
                    <div class="fs-h4 text-primary-100 name-consent">
                        <?php echo get_the_title($id) ?>
                    </div>



                    <div class="text-secondary-400 d-flex gap-24 fs-body-1">
                        <!-- time -->
                        <time datetime="2024-04-29T12:18:26+03:30" itemprop="datePublished">2024/04/29</time>

                    </div>
                </div>
                <!-- position -->
                <div class="fs-body-1 m-bs-12">
                    <?php echo get_field("consent_position", $id); ?>
                </div>
            </div>
        </div>

        <!-- description -->
        <div class="fs-body-3 text-primary-100">
            <?php echo get_field("consent_text", $id) ?>
        </div>
    </div>
</div>