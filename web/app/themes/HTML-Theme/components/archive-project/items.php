<?php
use App\Project;

$skills = wp_list_pluck( get_the_terms( get_the_ID(), Project::TAXO_SLUG ), 'slug' );
$thumbnailTitle = get_the_title( get_post_thumbnail_id( get_the_ID() ) );
?>
<article class="one-third" data-categories="<?= implode( ' ', $skills ); ?>">
    <a href="<?php the_post_thumbnail_url(); ?>" class="single-image" title="<?php the_title(); ?> - <?= $thumbnailTitle; ?>">
        <img src="<?php the_post_thumbnail_url( '300x190' ); ?>" alt="">
    </a>
    <a href="<?php the_permalink(); ?>" class="project-meta">
        <h5 class="title"><?php the_title(); ?></h5>
        <span class="categories"><?= implode( ' / ', $skills ); ?></span>
    </a>
</article>
