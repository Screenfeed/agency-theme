<?php
use App\Project;
get_header();

while ( have_posts() ) : the_post(); ?>

<article class="single-project">
    <header class="page-header">
        <h1 class="page-title align-left">
            <?= __( 'Things we have done', THEME_DOMAIN ); ?>
        </h1>
        <a href="<?= get_post_type_archive_link( Project::CPT_SLUG ); ?>" class="button no-bg medium align-right">
            <?= __( 'All Projects', THEME_DOMAIN ); ?> <img src="<?= THEME_URL . '/img/icon-grid.png'; ?>" alt="" class="icon">
        </a>
        <hr />
        <h2 class="project-title">
            <?= __( 'Single Project', THEME_DOMAIN ); ?> / <?php the_title(); ?>
        </h2>
        <?php get_template_part( 'components/single-project/pagination' ); ?>
    </header>

    <div id="main">
        <?php get_template_part( 'components/single-project/slider' ); ?>
    </div>

    <div id="sidebar">
        <h4>
            <?= __( 'Overview', THEME_DOMAIN ); ?>
        </h4>
        <?php the_content(); ?>
        <h4>
            <?= __( 'Things we did', THEME_DOMAIN ); ?>
        </h4>
        <?php get_template_part( 'components/single-project/skills' ); ?>
        <p>
            <a href="#" class="button">
                <?= __( 'Launch website', THEME_DOMAIN ); ?>
            </a>
        </p>
    </div>
</article>

<?php
endwhile;
get_footer();
