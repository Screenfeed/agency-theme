<?php
/*
Template Name: Portfolio
*/
use App\Project;
get_header();
while ( have_posts() ) : the_post();

$projects_query = new WP_Query( [
    'post_type'      => Project::CPT_SLUG,
    'posts_per_page' => 9
] );
?>

<header class="page-header">
    <h1 class="page-title">
        <?php the_title(); ?>
    </h1>
    <?php get_template_part( 'components/project/filter' ); ?>
</header>

<section id="portfolio-items" class="clearfix">
    <?php while ( $projects_query->have_posts() ): $projects_query->the_post(); ?>
        <?php get_template_part( 'components/project/items' ); ?>
    <?php endwhile; ?>
</section>

<?php
endwhile;
get_footer();
