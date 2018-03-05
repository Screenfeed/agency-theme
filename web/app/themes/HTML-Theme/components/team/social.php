<?php $social = get_field( 'social_networks' ); ?>
<ul class="social-links">
    <li class="twitter">
        <a href="<?= $social['twitter']; ?>">
            <?php __( 'Twitter', TEXTDOMAIN ); ?>
        </a>
    </li>
    <li class="facebook">
        <a href="<?= $social['facebook']; ?>">
            <?php __( 'Facebook', TEXTDOMAIN ); ?>
        </a>
    </li>
    <li class="googleplus">
        <a href="<?= $social['google+']; ?>">
            <?php __( 'Google+', TEXTDOMAIN ); ?>
        </a>
    </li>
    <li class="email">
        <a href="<?= $social['email']; ?>">
            <?php __( 'Email', TEXTDOMAIN ); ?>
        </a>
    </li>
</ul>
