<?php
define( 'THEME_DOMAIN', 'agency');
define( 'THEME_URL', get_template_directory_uri() );

add_action( 'after_setup_theme', function() {
    load_theme_textdomain( THEME_DOMAIN );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

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
