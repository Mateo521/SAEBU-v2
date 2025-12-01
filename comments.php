<?php
/**
 * Comments Template
 */

if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">
    <?php if (have_comments()) : ?>
        <h3 class="comments-title">
            <?php
            $comment_count = get_comments_number();
            if ($comment_count === 1) {
                echo '1 Comentario';
            } else {
                echo $comment_count . ' Comentarios';
            }
            ?>
        </h3>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style' => 'ol',
                'short_ping' => true,
                'avatar_size' => 50,
            ));
            ?>
        </ol>

        <?php
        the_comments_pagination(array(
            'prev_text' => '« Anterior',
            'next_text' => 'Siguiente »',
        ));
        ?>
    <?php endif; ?>

    <?php if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
        <p class="no-comments">Los comentarios están cerrados.</p>
    <?php endif; ?>

    <?php
    comment_form(array(
        'title_reply' => 'Deja un comentario',
        'title_reply_to' => 'Responder a %s',
        'cancel_reply_link' => 'Cancelar respuesta',
        'label_submit' => 'Publicar comentario',
        'comment_field' => '<p class="comment-form-comment"><label for="comment">Comentario</label><textarea id="comment" name="comment" cols="45" rows="8" required="required"></textarea></p>',
    ));
    ?>
</div>
