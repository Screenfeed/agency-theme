<?php
$previousPost = get_previous_post();
$nextPost     = get_next_post();
?>
<ul class="portfolio-pagination">
    <?php if ( ! empty( $previousPost ) ): ?>
        <li class="prev">
            <a href="<?= get_permalink( $previousPost->ID ); ?>" class="button medium no-bg">
                <span class="arrow left">&raquo;</span> <?= __( 'Previous', THEME_DOMAIN ); ?>
            </a>
        </li>
    <?php endif; ?>

    <?php if ( ! empty( $nextPost ) ): ?>
        <li class="next">
            <a href="<?= get_permalink( $nextPost->ID ); ?>" class="button medium no-bg">
                <?= __( 'Next', THEME_DOMAIN ); ?> <span class="arrow">&raquo;</span>
            </a>
        </li>
    <?php endif; ?>
</ul>
