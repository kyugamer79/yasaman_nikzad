<?php /* Template Name: Contact us */ ?>


<?php get_header() ?>

<main class="contact-us">
    <div class="clr-fix-32"></div>

    <div class="box-col-12">
        <div class="col-span-4 col-span-lg-12">
            <div class="contact-us-image-wrapper d-flex jc-center ai-center h-100">
                <img class="contact-us-image" src="<?php echo get_stylesheet_directory_uri()
                                                        . "/assets/img/backgroundContactUs.svg" ?>"
                    alt="design-picture">
            </div>
        </div>
        <div class="col-span-8 col-span-lg-12">
            <p class="text-center fs-title text-primary-400 fs-lg-title-sm">Contact</p>
            <form class="d-grid gap-24" method="post" name="contact">

                <div class="d-flex gap-24">
                    <div class="radius-16 bg-primary flex-1">
                        <input class="p-20" type="text" placeholder="Your Name" required="required">
                    </div>


                    <div class="radius-16 bg-primary flex-1">
                        <input class="p-20" type="text" placeholder="Email Or Phone" required="required">
                    </div>
                </div>
                <div class="radius-16 bg-primary">
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"
                        class="p-20"></textarea>
                </div>
            </form>
            <div class="clr-fix-24"></div>
            <div class="d-flex f-row-reverse">
                <button class="send-contact-us btn-secondary" type="submit">
                    <span>Send Message</span><img src="<?php echo get_stylesheet_directory_uri()
                                                            . "/assets/img/Search.png" ?>"
                        alt="submit-picture-contact">
                </button>
            </div>
        </div>
    </div>
</main>

<?php get_footer() ?>