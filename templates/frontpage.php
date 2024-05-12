<?php /* Template Name: Front Page*/ ?>

<?php get_header(null, ['render_template' => false]) ?>

<?php $intro = get_field("intro"); ?>

<main>

    <div class="home-page-hero-wrapper">

        <div class="home-page-hero-menu-icon d-none d-md-block" id="mobileMenuOpener">
            <a href="#"><img class="pi-20 pb-16 radius-12"
                    src="<?php echo get_template_directory_uri() . '/assets/img/icon-test-5.png' ?>" alt="search"></a>
        </div>

        <!-- <div class="home-page-hero-swiper">
            <div class="swiper">

                <div class="swiper-wrapper">

                    <div class="swiper-slide">Slide 1</div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                </div>

                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <div class="swiper-scrollbar"></div>
            </div>
        </div> -->

        <div class="home-page-hero-sidebar | d-flex f-column gap-80 ai-center pb-40 pi-20">

            <div class="sidebar-intro-wrapper | d-flex f-column ai-center">

                <div class="intro-img">

                    <?php echo wp_get_attachment_image($intro["intro-img"], 'full', false, ["class" => "intro-image"]); ?>

                </div>

                <div class="intro-name-txt">

                    <?php echo $intro["intro-name"] ?>

                </div>

                <div class="intro-job-txt">

                    <?php echo $intro["intro-job"] ?>

                </div>

            </div>

            <hr>

            <div class="sidebar-menu">

                <?php if (has_nav_menu('header')) : ?>
                <nav class="menu">
                    <?php wp_nav_menu([
                            'theme_location' => 'header',
                            'menu_class' => 'header-menu | d-flex f-column gap-32'
                        ]) ?>
                </nav>
                <?php else : ?>
                <div class=" header-no-item">
                    Please Choose a Menu
                </div>
                <?php endif; ?>

            </div>

            <div class="sidebar-social-icons">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/icon-test-2-white.png' ?>"
                    alt="test-icon">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/icon-test-3-white.png' ?>"
                    alt="test-icon">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/icon-test-4-white.png' ?>"
                    alt="test-icon">
            </div>

        </div>

    </div>

</main>


<?php get_footer(null, ['render_template' => false]) ?>