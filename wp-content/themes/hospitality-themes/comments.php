<?php
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">


    <?php if (have_comments()) : ?>
    <h2 class="comments-title">
        <?php
            $comment_count = get_comments_number();
            printf(
                esc_html(_n('%s Comment', '%s Comments', $comment_count, 'textdomain')),
                number_format_i18n($comment_count)
            );
            ?>
    </h2>

    <ol class="comment-list">
        <?php
            wp_list_comments(
                array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 50,
                )
            );
            ?>
    </ol>

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
    <nav class="comment-navigation" role="navigation">
        <div class="nav-previous"><?php previous_comments_link(esc_html__('Older Comments', 'textdomain')); ?></div>
        <div class="nav-next"><?php next_comments_link(esc_html__('Newer Comments', 'textdomain')); ?></div>
    </nav>
    <?php endif; ?>
    <?php endif; ?>

    <?php if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
    <p class="no-comments"><?php esc_html_e('Comments are closed.', 'textdomain'); ?></p>
    <?php endif; ?>



    <?php comment_form(); ?>

</div>