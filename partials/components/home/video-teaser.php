<?php

$teaser_cover = get_field('teaser-cover');

$teaser_video = get_field('teaser-video');

$link_video = $teaser_video['url']

?>

<div class="video-teaser-main-wrapper">

    <div class="video-teaser-title-wrapper content-title | fs-title text-natural-900 pos-relative">
        <?php _e('UAE', 'cyn-dm')
        ?>
    </div>

    <div class="video-wrapper pos-relative">

        <video id="video-teaser" class="video-teaser-wrapper video" controls>
            <source src="<?php echo $link_video; ?>" type="video/mp4">
        </video>

        <div class="video-teaser-cover-wrapper video-cover pos-absolute d-flex jc-center ai-center">

            <a href="#video" class="pos-absolute" id="icon-test">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/icon-test-13.png' ?>"
                    alt="icon-test-13">
            </a>

            <img class="video-cover-img radius-16" src="<?php echo $teaser_cover['url'] ?>" alt="cover">

        </div>

    </div>

</div>