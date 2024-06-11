<?php

$intro = get_field("intro"); ?>

<div class="home-page-hero-sidebar | d-flex d-xl-none f-column pos-fixed pb-40 pi-20 gap-48">

    <div class="sidebar-intro-wrapper | d-flex f-column ai-center gap-16">

        <div class="intro-img">

            <?php echo wp_get_attachment_image($intro["intro-img"], 'full', false, ["class" => "intro-image"]);
            ?>

        </div>

        <div class="intro-txt-wrapper | text-center">

            <div class="intro-name-txt | text-natural-100">

                <?php echo $intro["intro-name"] ?>

            </div>

            <div class="intro-job-txt | text-natural-100">

                <?php echo $intro["intro-job"] ?>

            </div>

        </div>

    </div>

    <hr>

    <div class="sidebar-menu">

        <?php if (has_nav_menu('header')) : ?>
            <nav class="menu">
                <?php wp_nav_menu([
                    'theme_location' => 'header',
                    'menu_class' => 'header-menu | d-flex f-column gap-32 ai-center text-natural-100'
                ]) ?>
            </nav>
        <?php else : ?>
            <div class=" header-no-item">
                Please Choose a Menu
            </div>
        <?php endif; ?>

    </div>

    <hr>

    <div class="sidebar-social-icons-wrapper | d-flex jc-center gap-12">

        <?php

        for ($i = 1; $i <= 3; $i++) :

            $socialMedia_icons = get_field("social_media_$i", get_option('page_on_front'));
        ?>

            <a href="<?php echo $socialMedia_icons["social_link_$i"] ?>">
                <?php echo wp_get_attachment_image($socialMedia_icons["social_icon_$i"], "full", false, ["class" => "sidebar-social-icons | bg-natural-900 radius-8 p-8"]); ?>
            </a>

        <?php endfor; ?>

    </div>

</div>

<div class="menu-icon-wrapper | d-none d-xl-block pos-absolute" id="mobileMenuOpener">
    <a href="#">

        <svg class="icon | text-natural-100">
            <use href="#icon-menu" />
        </svg>
    </a>
</div>