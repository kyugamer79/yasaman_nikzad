<div id="mobileMenu" class="menu-mobile | d-flex d-none d-xl-block pos-fixed inset-0 w-100 h-100 ">

    <div class="menu-mobile-inner bg-primary p-24 d-flex jc-start f-column gap-40 radius-16">

        <div class="search-logo-wrapper d-flex jc-between">

            <div class="logo">
                <img class="mobile-menu-logo" src="<?php echo get_template_directory_uri() . '/assets/img/logo.png' ?>"
                    alt="">
            </div>

            <div class="search-wrapper bg-natural-800 d-flex jc-start ai-center pb-8 pi-12 radius-8">
                <label for="search"></label>
                <input class="text-natural-100" type="search" id="search" name="search" placeholder="Search">
                <img class="search-logo"
                    src="<?php echo get_template_directory_uri() . '/assets/img/icon-test-1.png' ?>" alt="logo">
            </div>

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
            <img src="<?php echo get_template_directory_uri() . '/assets/img/icon-test-2-white.png' ?>"
                alt="icon-test-2">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/icon-test-3-white.png' ?>"
                alt="icon-test-3">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/icon-test-4-white.png' ?>"
                alt="icon-test-4">
        </div>

    </div>

</div>