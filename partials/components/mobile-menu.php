<div id="mobileMenu" class="menu-mobile | d-flex d-none d-xl-block pos-fixed inset-0 w-100 h-100 ">

    <div class="menu-mobile-inner bg-primary p-24 d-flex jc-start f-column gap-40 radius-16">

        <div class="search-logo-wrapper d-flex jc-between">

            <div class="logo">
                <img class="mobile-menu-logo" src="<?php echo get_template_directory_uri() . '/assets/img/logo.png' ?>"
                    alt="">
            </div>

            <form action="/" class="search-wrapper bg-natural-800 d-flex jc-start ai-center pb-8 pi-12 radius-8">
                <input class="text-natural-100" type="search" value="<?php the_search_query() ?>" id="search" name="s"
                    placeholder="Search">
                <svg class="icon">
                    <use href="#icon-search" />
                </svg>
            </form>

        </div>

        <div class="mobile-menu-wrapper">
            <?php if (has_nav_menu('header')) : ?>
            <nav class="menu">
                <?php wp_nav_menu([
                        'theme_location' => 'header',
                        'menu_class' => 'header-menu | d-flex jc-start gap-12 ai-start f-column text-natural-100'
                    ]) ?>
            </nav>
            <?php else : ?>
            <div class="header-no-item">
                Please Choose a Menu
            </div>
            <?php endif; ?>
        </div>

        <div class="social-logo d-flex jc-center ai-center gap-12">
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

</div>