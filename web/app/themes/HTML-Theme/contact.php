<?php
/*
Template Name: Contact
*/
get_header();
while ( have_posts() ) : the_post();
$info = get_field( 'info' );
?>
<div class="container clearfix">
    <header class="page-header">
        <h1 class="page-title">
            <?php the_title(); ?>
        </h1>
    </header>
</div>

<section id="map">
    <p class="container">
        <?= __( 'Something went wrong... Try to enable your JavaScript!', THEME_DOMAIN ); ?>
    </p>
</section>

<div class="container clearfix">
    <div class="one-fourth">
        <h3>
            <?= __( 'Contact Info', THEME_DOMAIN ); ?>
        </h3>
        <p>
            <?= $info['adress']; ?>
        </p>
        <p>
            <?= __( 'Phone', THEME_DOMAIN ) . ': ' . $info['phone']; ?>
            <br/>
            <?= __( 'Fax', THEME_DOMAIN ) . ': ' . $info['fax']; ?>
            <br/>
            <?= __( 'Email', THEME_DOMAIN ) . ': ' . $info['email']; ?>
            <br/>
            <?= __( 'Web', THEME_DOMAIN ) . ': ' . $info['website']; ?>
        </p>
    </div>
    <div class="three-fourth last">
        <h3>
            <?= __( 'Let\'s keep in touch', THEME_DOMAIN ); ?>
        </h3>
        <?php the_content(); ?>
    </div>
</div>
<?php
endwhile;
get_footer();
