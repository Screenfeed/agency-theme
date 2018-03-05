<?php
use App\Project;

$featured_ids = get_field( 'featured_projects', false, false );
$projects_query = new WP_Query( [
    'post_type'      => Project::CPT_SLUG,
    'posts_per_page' => 4,
    'post__not_in'   => $featured_ids,
] );
while ( $projects_query->have_posts() ) : $projects_query->the_post();
    $skills = wp_list_pluck( get_the_terms( get_the_ID(), Project::TAXO_SLUG ), 'slug' ); ?>
    <li>
        <a href="<?php the_permalink(); ?>">
            <img src="<?php the_post_thumbnail_url( '220x140' ); ?>" alt="">
            <h5 class="title">
                <?php the_title(); ?>
            </h5>
            <span class="categories">
                <?= implode( ' / ', $skills ); ?>
            </span>
        </a>
    </li>
<?php
endwhile;
wp_reset_postdata();
