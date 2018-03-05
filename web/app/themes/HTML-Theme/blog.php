<?php
/*
Template Name: Blog
*/
get_header();
while ( have_posts() ) : the_post();

$post_query = new WP_Query( [
    'post_type'      => 'post',
    'paged'          => get_query_var( 'paged', 1 ),
    'posts_per_page' => 3
] ); ?>

<header class="page-header">
    <h1 class="page-title">
        <?php the_title(); ?>
    </h1>
</header>

<section id="main">
    <?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
        <?php get_template_part( 'components/blog/article' ); ?>
    <?php endwhile; ?>

    <ul class="pagination">
        <?php wp_pagenavi( [
            'query'         => $post_query,
            'wrapper_class' => 'pagination'
        ] ); ?>
    </ul>
</section>

<?php
endwhile;
get_sidebar();
get_footer();
