<?php
/*
Template Name: Team
*/
use App\Team;
get_header();

while ( have_posts() ) : the_post(); ?>

<header class="page-header">
    <h1 class="page-title align-left"><?php the_title(); ?></h1>
    <hr />
    <h2 class="page-subdescription"><?php the_content(); ?></h2>
</header>

<?php
$posts = Team::getPosts();
foreach ( $posts as $key => $post ) : ?>
    <div class="team-member one-fourth <?= ( $key  + 1 % 4 === 0 ) ? 'last' : ''; ?>">
        <img src="<?php the_post_thumbnail_url( '220x140' ); ?>" alt="" class="photo">
        <div class="content">
            <h4 class="name"><?php the_title(); ?></h4>
            <span class="job-title"><?php the_field( 'post' ); ?></span>
            <p><?php the_excerpt(); ?></p>
        </div>
        <?php $social = get_field( 'social_networks' ); ?>
        <ul class="social-links">
            <li class="twitter"><a href="<?= $social['twitter']; ?>"><?php __( 'Twitter', TEXTDOMAIN ); ?></a></li>
            <li class="facebook"><a href="<?= $social['facebook']; ?>"><?php __( 'Facebook', TEXTDOMAIN ); ?></a></li>
            <li class="googleplus"><a href="<?= $social['google+']; ?>"><?php __( 'Google+', TEXTDOMAIN ); ?></a></li>
            <li class="email"><a href="<?= $social['email']; ?>"><?php __( 'Email', TEXTDOMAIN ); ?></a></li>
        </ul>
    </div>
<?php
endforeach;
wp_reset_postdata();

endwhile;
get_footer();
