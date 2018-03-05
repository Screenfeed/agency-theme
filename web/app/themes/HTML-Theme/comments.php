<section id="comments">
    <h6 class="section-title">
        <?= __( 'Comments', THEME_DOMAIN ); ?> (<?php comments_number( '0', '1', '%' ); ?>)
    </h6>
    <?php if ( have_comments() ) : ?>
        <ol class="commentlist">
            <?php wp_list_comments( [ 'callback' => 'commentsTemplate' ] ); ?>
        </ol>
    <?php endif; ?>
</section>
<?php comment_form(); ?>
