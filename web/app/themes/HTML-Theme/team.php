<?php
/*
Template Name: Team
*/
use App\Team;
get_header();

while ( have_posts() ) : the_post();
$team_query = new WP_Query( [
    'post_type'      => Team::CPT_SLUG,
    'posts_per_page' => 8
] );
?>

<header class="page-header">
    <h1 class="page-title align-left">
        <?php the_title(); ?>
    </h1>
    <hr />
    <h2 class="page-subdescription">
        <?php the_content(); ?>
    </h2>
</header>

<?php while ( $team_query->have_posts() ): $team_query->the_post(); ?>
    <div class="team-member one-fourth <?= ( $team_query->current_post  + 1 % 4 === 0 ) ? 'last' : ''; ?>">
        <img src="<?php the_post_thumbnail_url( '220x140' ); ?>" alt="" class="photo">
        <div class="content">
            <h4 class="name">
                <?php the_title(); ?>
            </h4>
            <span class="job-title">
                <?php the_field( 'post' ); ?>
            </span>
            <?php the_excerpt(); ?>
        </div>
        <?php get_template_part( 'components/team/social' ); ?>
    </div>
<?php
endwhile;
wp_reset_postdata();

endwhile;
get_footer();
