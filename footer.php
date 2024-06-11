<?php $render_template = $args['render_template'] ?? true ?>

<?php if ($render_template) : ?>

<footer>

    <div class="social-wrapper | d-flex jc-center gap-12 ai-center">
        <?php

            for ($i = 1; $i <= 3; $i++) :

                $socialMedia_icons = get_field("social_media_$i", get_option('page_on_front'));
            ?>

        <a href="<?php echo $socialMedia_icons["social_link_$i"] ?>">
            <?php echo wp_get_attachment_image($socialMedia_icons["social_icon_$i"], "full", false, ["class" => "sidebar-social-icons | bg-natural-900 radius-8 p-8"]); ?>
        </a>

        <?php endfor; ?>
    </div>

    <div class="footer-wrapper | d-flex jc-center mb-24">
        <?php if (has_nav_menu('footer')) : ?>
        <nav class="menu">
            <?php wp_nav_menu([
                        'theme_location' => 'footer',
                        'menu_class' => 'footer-menu | d-flex jc-center ai-center gap-48 text-natural-100',

                    ]) ?>
        </nav>
        <?php else : ?>
        <div class=" footer-no-item">
            Please Choose a Menu For Blogs
        </div>
        <?php endif; ?>
    </div>

    <div class="footer-rec bg-primary ">

    </div>

</footer>

<?php endif; ?>


<div class="wp-scripts">
    <?php wp_footer() ?>
</div>


</body>

</html>