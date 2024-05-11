<?php $render_template = $args['render_template'] ?? true ?>

<?php if ($render_template) : ?>

    <footer>

        <div class="social-wrapper d-flex jc-center gap-12 ai-center">
            <img class="icon-test bg-primary pi-12 pb-12 radius-12" src="<?php echo get_template_directory_uri() . '/assets/img/icon-test-2.png'; ?>" alt="social">
            <img class="icon-test bg-primary pi-12 pb-12 radius-12" src="<?php echo get_template_directory_uri() . '/assets/img/icon-test-3.png'; ?>" alt="social">
            <img class="icon-test bg-primary pi-12 pb-12 radius-12" src="<?php echo get_template_directory_uri() . '/assets/img/icon-test-4.png'; ?>" alt="social">
        </div>

        <div class="footer-wrapper d-flex jc-center mb-24">
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