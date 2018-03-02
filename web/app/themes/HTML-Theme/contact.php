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
                <form action="php/contact-send.php" method="post" class="contact-form">

                    <p class="input-block">
                        <label for="contact-name"><strong>Name</strong> (required)</label>
                        <input type="text" name="name" value="" id="contact-name" required>
                    </p>

                    <p class="input-block">
                        <label for="contact-email"><strong>Email</strong> (required)</label>
                        <input type="email" name="email" value="" id="contact-email" required>
                    </p>

                    <p class="input-block">
                        <label for="contact-subject"><strong>Subject</strong></label>
                        <input type="text" name="subject" value="" id="contact-subject">
                    </p>

                    <p class="textarea-block">
                        <label for="contact-message"><strong>Your Message</strong> (required)</label>
                        <textarea name="message" id="contact-message" cols="88" rows="6" required></textarea>
                    </p>

                    <div class="hidden">
                        <label for="contact-spam-check">Do not fill out this field:</label>
                        <input name="spam-check" type="text" value="" id="contact-spam-check" />
                    </div>

                    <input type="submit" value="Submit">

                    <div class="clear"></div>

                </form>

            </div><!-- end .three-fourth.last -->

        </div><!-- end .container -->

<?php endwhile; ?>

<?php get_footer(); ?>
