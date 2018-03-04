<?php
use App\Project;
get_header();
?>

<header class="page-header">
    <h1 class="page-title">
        <?php post_type_archive_title(); ?>
    </h1>
    <?php get_template_part( 'components/archive-project/filter' ); ?>
</header>

<section id="portfolio-items" class="clearfix">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'components/archive-project/items' ); ?>
    <?php endwhile; ?>
</section>

<?php
get_footer();
