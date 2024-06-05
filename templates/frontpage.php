<?php /* Template Name: Front Page*/ ?>

<?php get_header(null, ['render_template' => false]) ?>

<?php $intro = get_field("intro"); ?>

<main class="full-width">

    <div class="home-page-hero | full-width">

        <?php cyn_get_component("home/sidebar") ?>

        <div class="home-page-hero-swiper | d-flex f-column jc-start ai-end">

            <?php cyn_get_component("home/swiper-info") ?>

            <div class="">
                <?php cyn_get_component("mobile-menu") ?>
            </div>

            <div class="logo-wrapper | pos-absolute">
                <?php the_custom_logo(); ?>
            </div>

            <?php cyn_get_component('home/swiper-homepage') ?>

        </div>

    </div>

    <section class="home-page-main-content | pi-40">

        <?php cyn_get_component("home/landmark-percent") ?>

        <div class="clr-fix-120" id="servicesSectionMenu"></div>

        <?php cyn_get_component("home/services-section") ?>

        <div class="clr-fix-120"></div>

        <div class="video-teaser-wrapper">

        </div>

        <?php cyn_get_component('services/feature') ?>

        <div class="clr-fix-120"></div>

        <?php cyn_get_component('home/video-teaser') ?>

        <div class="clr-fix-120"></div>

        <?php cyn_get_component('home/landmark-section') ?>

        <div class="clr-fix-120"></div>

        <!-- Resume -->

        <?php cyn_get_card('resume') ?>

        <div class="clr-fix-120"></div>

        <!-- Consent -->

        <?php cyn_get_component('home/swiper-consent') ?>

        <div class="clr-fix-120"></div>


        <!-- Residency -->

        <?php cyn_get_component('home/residency') ?>

        <div class="clr-fix-120"></div>


        <!-- blogs -->

        <?php cyn_get_component('home/swiper-blogs') ?>

        <?php cyn_get_component('home/blog') ?>

        <div class="clr-fix-24"></div>

        <div class="d-flex jc-center">
            <a class="button btn-secondary" type="submit" href="http://nikzad.local/blogs/">
                <span class="p-16">View All</span>
            </a>
        </div>

        <div class="clr-fix-120"></div>


        <!-- get in touch -->

        <?php cyn_get_component('home/get-in-touch') ?>

        <div class="clr-fix-92"></div>

    </section>

</main>


<?php get_footer(null, ['render_template' => false]) ?>