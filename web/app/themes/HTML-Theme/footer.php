</section>
<footer id="footer" class="clearfix">
    <div class="container">
        <div class="three-fourth">
            <nav id="footer-nav" class="clearfix">
                <?php wp_nav_menu( [ 'theme_location' => 'footer' ] ); ?>
            </nav>
            <ul class="contact-info">
                <li class="address">012 Some Street. New York, NY, 12345. USA</li>
                <li class="phone">(123) 456-7890</li>
                <li class="email"><a href="mailto:contact@companyname.com">contact@companyname.com</a></li>
            </ul>
        </div>
        <div class="one-fourth last">
            <span class="title">Stay connected</span>
            <ul class="social-links">
                <li class="twitter"><a href="#">Twitter</a></li>
                <li class="facebook"><a href="#">Facebook</a></li>
                <li class="digg"><a href="#">Digg</a></li>
                <li class="vimeo"><a href="#">Vimeo</a></li>
                <li class="youtube"><a href="#">YouTube</a></li>
                <li class="skype"><a href="#">Skype</a></li>
            </ul>
        </div>
    </div>
</footer>
<footer id="footer-bottom" class="clearfix">
    <div class="container">
        <ul>
            <li>SmartStart &copy; 2012</li>
            <li><a href="#">Legal Notice</a></li>
            <li><a href="#">Terms</a></li>
        </ul>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
