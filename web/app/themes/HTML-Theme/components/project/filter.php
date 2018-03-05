<?php
use App\Project;

$skills = get_terms( Project::TAXO_SLUG );
?>
<ul id="portfolio-items-filter">
    <li>
        <?= __( 'Showing', THEME_DOMAIN ); ?>
    </li>
    <li>
        <a data-categories="*">
            <?= __( 'All', THEME_DOMAIN ); ?>
        </a>
    </li>
    <?php foreach ( $skills as $skill ) : ?>
        <li>
            <a data-categories="<?= $skill->slug; ?>">
                <?= $skill->name; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
