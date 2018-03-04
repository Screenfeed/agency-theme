<?php
use App\Project;

$featured_ids = get_field( 'featured_projects', false, false );
$featured_query = new WP_Query( [
    'post_type'      => Project::CPT_SLUG,
    'posts_per_page' => 4,
    'post__in'       => $featured_ids,
    'orderby'        => 'post__in',
] );
while ( $featured_query->have_posts() ) : $featured_query->the_post(); ?>
    <article class="slide">
        <img src="<?php the_post_thumbnail_url( '940x380' ); ?>" alt="" class="slide-bg-image" />
        <div class="slide-button">
            <span class="dropcap">
                <?= intval( $featured_query->current_post ) + 1 ?>
            </span>
            <h5>
                <?php the_title(); ?>
            </h5>
        </div>
        <div class="slide-content">
            <h2>
                <?php the_title(); ?>
            </h2>
            <?php the_excerpt(); ?>
            <p>
                <a class="button" href="<?php the_permalink(); ?>">
                    <?= __( 'Read More', THEME_DOMAIN ); ?>
                </a>
            </p>
        </div>
    </article>
<?php
endwhile;
wp_reset_postdata();
