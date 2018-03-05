<ul>
    <li>
        <a href="<?php the_permalink(); ?>">
            <span class="post-format">
                <?= __( 'Permalink', THEME_DOMAIN ); ?>
            </span>
        </a>
    </li>
    <li>
        <span class="title">
            <?= __( 'Posted:', THEME_DOMAIN ); ?>
        </span>
        <a href="<?php the_permalink(); ?>">
            <?= date_i18n( 'M j Y', get_post_time('U', true) ); ?>
        </a>
    </li>
    <li>
        <span class="title">
            <?= __( 'Tags:', THEME_DOMAIN ); ?>
        </span>
        <?php the_tags( '', ', ', '' ); ?>
    </li>
    <li>
        <span class="title">
            <?= __( 'Comments:', THEME_DOMAIN ); ?>
        </span> <a href="#"><?php comments_number( '0', '1', '%' ); ?></a>
    </li>
</ul>
