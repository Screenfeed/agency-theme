<?php
$slides = get_attached_media( 'image', get_the_ID() );
?>
<div class="image-gallery-slider">
    <ul>
        <?php foreach ( $slides as $slide ) : ?>
            <li>
                <a href="<?= wp_get_attachment_url( $slide->ID ); ?>" class="single-image" title="<?php the_title(); ?> - <?= get_the_title( $slide->ID ); ?>" rel="single-project">
                    <img src="<?= wp_get_attachment_url( $slide->ID, '680x600' ); ?>" alt="<?php the_title(); ?>">
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
