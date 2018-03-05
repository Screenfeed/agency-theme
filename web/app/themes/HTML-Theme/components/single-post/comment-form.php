<form action="<?= site_url( '/wp-comments-post.php' ); ?>" method="post" class="comments-form">
    <p class="input-block">
        <label for="comment-name">
            <strong>
                <?= __( 'Name', THEME_DOMAIN ); ?>
            </strong>
            (<?= __( 'Required', THEME_DOMAIN ); ?>)
        </label>
        <input type="text" name="name" value="" id="comment-name" required>
    </p>

    <p class="input-block">
        <label for="comment-email">
            <strong>
                <?= __( 'Email', THEME_DOMAIN ); ?>
            </strong>
            (<?= __( 'Required', THEME_DOMAIN ); ?>)
        </label>
        <input type="email" name="email" value="" id="comment-email" required>
    </p>

    <p class="input-block">
        <label for="comment-url">
            <strong>
                <?= __( 'Website', THEME_DOMAIN ); ?>
            </strong>
        </label>
        <input type="url" name="url" value="" id="comment-url">
    </p>

    <p class="textarea-block">
        <label for="comment-message">
            <strong>
                <?= __( 'Your Comment', THEME_DOMAIN ); ?>
            </strong>
            (<?= __( 'Required', THEME_DOMAIN ); ?>)
        </label>
        <textarea name="message" id="comment-message" cols="88" rows="6" required></textarea>
    </p>

    <input type="submit" value="Submit">

    <div class="clear"></div>
</form>
