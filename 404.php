<?php defined('ABSPATH') || exit;  ?>

<?php get_header(); ?>
<main>
    <div>
        <div class="not-found-image-wrapper d-flex jc-center ai-center">
            <!-- contact-us-image-wrapper d-flex jc-center ai-center h-100" -->
            <img class="not-found-image" src="<?php echo get_stylesheet_directory_uri()
                                                    . "/assets/img/bg-404-picture.svg" ?>" alt="bg-404-picture">



        </div>
        <div class="error-404 d-flex jc-center ai-center f-column">
            <p class="text-primary-100 fs-h1">Page Not Found!</p>
            <div class="clr-fix-36"></div>
            <div>
                <img src="<?php echo get_stylesheet_directory_uri()
                                . "/assets/img/404-error.png" ?>" alt="bg-404-picture">
            </div>
            <div class="clr-fix-48"></div>
            <button class="btn-secondary go-home-btn" type="submit">
                <span>Go Home</span> </button>
        </div>
    </div>

</main>

<?php get_footer() ?>