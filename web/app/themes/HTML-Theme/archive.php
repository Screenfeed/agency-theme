<?php
get_header();
?>

<header class="page-header">
    <h1 class="page-title">
        <?php if ( is_category() ) {
            echo single_cat_title( '', false );
        } elseif ( is_tag() ) {
            echo single_tag_title( '', false );
        } else {
            echo __( 'Archives' );
        } ?>
    </h1>
</header>

<section id="main">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'components/blog/article' ); ?>
    <?php endwhile; ?>

    <ul class="pagination">
        <?php wp_pagenavi( [ 'wrapper_class' => 'pagination' ] ); ?>
    </ul>
</section>

<?php
get_sidebar();
get_footer();
