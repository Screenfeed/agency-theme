<article class="entry clearfix">
    <?php if ( has_post_thumbnail() ) : ?>
        <a href="<?php the_permalink(); ?>" title="">
            <img src="<?php the_post_thumbnail_url( '940x380' ); ?>" alt="" class="entry-image">
        </a>
    <?php endif; ?>

    <div class="entry-body">
        <a href="<?php the_permalink(); ?>">
            <h1 class="title">
                <?php the_title(); ?>
            </h1>
        </a>
        <?php the_content(); ?>
    </div>
    <div class="entry-meta">
        <?php get_template_part( 'components/blog/metas' ); ?>
    </div>
</article>
