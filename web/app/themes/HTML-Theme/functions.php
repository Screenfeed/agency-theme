<?php
define( 'THEME_DOMAIN', 'agency');
define( 'THEME_URL', get_template_directory_uri() );

add_action( 'after_setup_theme', function() {
    load_theme_textdomain( THEME_DOMAIN );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'comment-list', 'comment-form' ] );

    add_image_size( '940x380', 940, 380, true );
    add_image_size( '680x600', 680, 600, true );
    add_image_size( '680x235', 680, 235, true );
    add_image_size( '300x190', 300, 190, true );
    add_image_size( '220x140', 220, 140, true );

    add_theme_support( 'soil-clean-up ');
    add_theme_support( 'soil-disable-asset-versioning ');
    add_theme_support( 'soil-disable-trackbacks ');
    add_theme_support( 'soil-nice-search ');
    add_theme_support( 'soil-nav-walker ');

    register_nav_menus( [
        'header' => __( 'Header', THEME_DOMAIN ),
        'footer' => __( 'Footer', THEME_DOMAIN ),
    ] );

    add_theme_support( 'starter-content' );

    register_sidebar( [
        'name'          => __( 'Blog sidebar', THEME_DOMAIN ),
        'id'            => 'blog-sidebar',
        'description'   => __( 'The sidebar for blog archives', THEME_DOMAIN ),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6 class="widget-title">',
        'after_title'   => '</h6>',
    ] );
});

add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,300,800,700,400italic|PT+Serif:400,400italic', [], null );

    wp_enqueue_style( 'style', THEME_URL . '/css/style.css', [], null );
    wp_enqueue_style( 'fancybox', THEME_URL . '/css/fancybox.min.css', [], null );
    // wp_enqueue_style( 'video', THEME_URL . '/css/video-js.min.css', [], null ); // Not in sources
    wp_enqueue_style( 'audioplayer', THEME_URL . '/css/audioplayerv1.min.css', [], null );

    wp_enqueue_script( 'modernizr', THEME_URL . '/js/modernizr.custom.js', [], null );
    // wp_enqueue_script( 'video', THEME_URL . '/js/video.min.js', [], null ); // Not in sources
    // wp_add_inline_script( 'video', "_V_.options.flash.swf = 'http://localhost/smartstart/js/video-js.swf';" );

    wp_deregister_script('jquery');
    wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', [], null, true );
    wp_enqueue_script( 'respond', THEME_URL . '/js/respond.min.js', [], null, true );
    wp_enqueue_script( 'easing', THEME_URL . '/js/jquery.easing-1.3.min.js', [ 'jquery' ], null, true );
    wp_enqueue_script( 'fancybox', THEME_URL . '/js/jquery.fancybox.pack.js', [ 'jquery' ], null, true );
    wp_enqueue_script( 'slider', THEME_URL . '/js/jquery.smartStartSlider.min.js', [ 'jquery' ], null, true );
    wp_enqueue_script( 'jcarousel', THEME_URL . '/js/jquery.jcarousel.min.js', [ 'jquery' ], null, true );
    wp_enqueue_script( 'cycle', THEME_URL . '/js/jquery.cycle.all.min.js', [ 'jquery' ], null, true );
    wp_enqueue_script( 'isotope', THEME_URL . '/js/jquery.isotope.min.js', [ 'jquery' ], null, true );
    wp_enqueue_script( 'maps', '//maps.google.com/maps/api/js?sensor=false', [], null, true );
    wp_enqueue_script( 'gmap', THEME_URL . '/js/jquery.gmap.min.js', [ 'jquery' ], null, true );
    wp_enqueue_script( 'touchSwipe', THEME_URL . '/js/jquery.touchSwipe.min.js', [ 'jquery' ], null, true );
    wp_enqueue_script( 'custom', THEME_URL . '/js/custom.js', [ 'jquery' ], null, true );
});

add_filter('comment_form_defaults', function ( $defaults ) {
    $commenter = wp_get_current_commenter();
    $defaults['fields']['author'] = '
        <p class="input-block">
            <label for="comment-name"><strong>' . __( 'Name', THEME_DOMAIN ) . '</strong> (' . __( 'Required', THEME_DOMAIN ) . ')</label>
            <input type="text" name="author" value="' . esc_attr( $commenter['comment_author'] ) . '" id="comment-name" required>
        </p>';
    $defaults['fields']['email'] = '
        <p class="input-block">
            <label for="comment-email"><strong>' . __( 'Email', THEME_DOMAIN ) . '</strong> (' . __( 'Required', THEME_DOMAIN ) . ')</label>
            <input type="email" name="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" id="comment-email" required>
        </p>';
    $defaults['fields']['url'] = '
        <p class="input-block">
            <label for="comment-url"><strong>' . __( 'Website', THEME_DOMAIN ) . '</strong></label>
            <input type="url" name="url" value="' . esc_attr( $commenter['comment_author_url'] ) . '" id="comment-url">
        </p>';
    $defaults['comment_field'] = '
        <p class="textarea-block">
            <label for="comment-message"><strong>' . __( 'Your Comment', THEME_DOMAIN ) . '</strong>(' . __( 'Required', THEME_DOMAIN ) . ')</label>
            <textarea name="comment" id="comment-message" cols="88" rows="6" required></textarea>
        </p>';
    $defaults['comment_notes_before'] = '';
    $defaults['title_reply_before']   = '<h3 class="section-title">';
    $defaults['cancel_reply_link']    = __( 'Cancel reply', THEME_DOMAIN );
    $defaults['title_reply']          = __( 'Leave a Comment', THEME_DOMAIN );
    $defaults['submit_field']         = '%1$s %2$s';
    $defaults['label_submit']         = __( 'Submit', THEME_DOMAIN );
    return $defaults;
});

function commentsTemplate( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment; ?>
    <li class="comment">
        <article>
            <img src="<?= get_avatar_url( $comment, [ 'size' => 54 ] ); ?>" alt="Image" class="avatar">
            <div class="comment-meta">
                <h5 class="author">
                    <?php comment_author_link(); ?>
                    <?php comment_reply_link( array_merge( $args,  [ 'depth' => $depth, 'max_depth' => $args['max_depth'] ] ) ); ?>
                </h5>
                <p class="date">
                    <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
                        <?= date_i18n( 'F d, Y', get_comment_time('U', true) ); ?>
                    </a>
                </p>
            </div>
            <div class="comment-body">
                <?php comment_text(); ?>
            </div>
        </article>
    <?php // Do not close <li> for nested children
}
