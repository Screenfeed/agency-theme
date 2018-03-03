<?php
/*
Template Name: Contact
*/
get_header();

while ( have_posts() ) : the_post(); ?>

<div class="container clearfix">
    <header class="page-header">
        <h1 class="page-title"><?php the_title(); ?></h1>
    </header>
</div>

<section id="map">
    <p class="container">Something went wrong... Try to enable your JavaScript!</p>
</section>

<div class="container clearfix">
    <div class="one-fourth">
        <h3>Contact Info</h3>
        <p>
            30 South Park Avenue<br/>
            San Francisco, CA 94108<br/>
            USA
        </p>
        <p>
            Phone: (123) 456-7890<br/>
            Fax: +08 (123) 456-7890<br/>
            Email: contact@companyname.com<br/>
            Web: companyname.com
        </p>
    </div>
    <div class="three-fourth last">
        <h3>Let's keep in touch</h3>
        <?php the_content(); ?>
            

            </div><!-- end .three-fourth.last -->

        </div><!-- end .container -->

<?php endwhile; ?>

<?php get_footer(); ?>
