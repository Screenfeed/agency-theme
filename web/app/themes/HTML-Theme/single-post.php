<?php
get_header();
$archive_id = getArchivePage( 'blog' );
while ( have_posts() ) : the_post(); ?>

<header class="page-header">
    <h1 class="page-title">
        <?= get_the_title( $archive_id ); ?>
    </h1>
</header>

<section id="main">
    <article class="entry single clearfix">
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
            <?php get_template_part( 'components/single-post/metas' ); ?>
        </div>
    </article>

    <?php if ( comments_open() ) : ?>
        <?php comments_template(); ?>
    <?php endif; ?>
</section>

<?php
endwhile;
get_sidebar();
get_footer();
