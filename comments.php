<div class="comments-content text-primary-400">
    <div class="d-flex jc-between">
        <p class="fs-h2 text-primary-100">Give Us Your Feedback</p>
        <p class="fs-body-2 text-primary-400"> <?php echo get_comments_number();
                                                _e('Comments', 'cyn-dm') ?> </p>
    </div>


    <?php
    if (have_comments()) :
    ?>
        <div class="comment-list" id="comment-list">
            <?php
            $list = wp_list_comments(
                array(
                    'walker'            => null,
                    'max_depth'         => '',
                    'style'             => 'div',
                    'callback'          => null,
                    'end-callback'      => null,
                    'type'              => 'all',
                    'page'              => '',
                    'per_page'          => '',
                    'avatar_size'       => 32,
                    'reverse_top_level' => null,
                    'reverse_children'  => '',
                    'format'            => current_theme_supports('html5', 'comment-list') ? 'html5' : 'xhtml',
                    'short_ping'        => true,
                    'echo'              => true,

                )
            );
            ?>
        </div>
    <?php
    else :
    ?>
        <div class="comment-list">
            <p>There is no comment yet . </p>
        </div>
    <?php
    endif;

    if (post_password_required()) {
        return;
    }
    comment_form(
        array(
            'logged_in_as' => null,
            'title_reply' => "",
            'title_reply_to' => "Reply To %s",
            'comment_field' => '<textarea id="comment" name="comment" class="comment-input" rows="5" maxlength="65525" placeholder="Your Comment" required></textarea>',
            'id_submit' => "submit-commentform",
            'name_submit' => "submit-commentform",
            'label_submit' => "Add Comments",
            'submit_field' => '<div class="form-submit submit-button-comment "><i class="icon-send"></i>%1$s %2$s</div>',
            'comment_notes_before' => ''

        )
    );
    ?>
</div>