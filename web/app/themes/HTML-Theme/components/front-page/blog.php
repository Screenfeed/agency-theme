<?php
$blog_query = new WP_Query( [
    'post_type'      => 'post',
    'posts_per_page' => 4
]);
while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
    <li>
        <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" title="">
                <img src="<?php the_post_thumbnail_url( '940x380' ); ?>" alt="" class="entry-image">
            </a>
        <?php endif; ?>
        <div class="entry-meta">
            <a href="<?php the_permalink(); ?>">
                <span class="post-format"><?= __( 'Permalink', THEME_DOMAIN ); ?></span>
            </a>
            <span class="date">
                <?= date_i18n( 'M j Y', get_post_time('U', true) ); ?>
            </span>
        </div>
        <div class="entry-body">
            <a href="<?php the_permalink(); ?>">
                <h5 class="title">
                    <?php the_title(); ?>
                </h5>
            </a>
            <?php the_excerpt(); ?>
        </div>
    </li>
<?php
endwhile;
wp_reset_postdata();
