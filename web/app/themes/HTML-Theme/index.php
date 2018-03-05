<?php
get_header();
while ( have_posts() ) : the_post(); ?>

<h2 class="slogan align-center">
    <?php the_content(); ?>
</h2>

<section id="features-slider" class="ss-slider">
    <?php get_template_part( 'components/front-page/slider' ); ?>
</section>

<h6 class="section-title">
    <?= __( 'Latest Projects', THEME_DOMAIN ); ?>
</h6>
<ul class="projects-carousel clearfix">
    <?php get_template_part( 'components/front-page/projects' ); ?>
</ul>

<h6 class="section-title">
    <?= __( 'Latest stuff from our blog', THEME_DOMAIN ); ?>
</h6>
<ul class="post-carousel">
    <?php get_template_part( 'components/front-page/blog' ); ?>
</ul>

<?php
endwhile;
get_footer();
