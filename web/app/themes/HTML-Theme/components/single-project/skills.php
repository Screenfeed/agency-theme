<?php
use App\Project;

$skills = get_the_terms( get_the_ID(), Project::TAXO_SLUG );
?>
<ul class="check">
    <?php foreach ( $skills as $skill ) : ?>
        <li>
            <?= $skill->name; ?>
        </li>
    <?php endforeach; ?>
</ul>
