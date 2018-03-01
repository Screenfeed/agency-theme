<?php
/**
* Plugin Name: Team
* Description: Team custom post defintion
* Text Domain: agency
* */

namespace App;

defined( 'ABSPATH' ) || die();

Team::get_instance();

class Team
{
    private static $instance;

    const CPT_SLUG = 'team';

    public function __construct()
    {
        add_action( 'init', [ $this, 'registerPostType' ] );
    }

    public static function get_instance()
    {
		if ( null === self::$instance ) {
			self::$instance = new self;
		}
		return self::$instance;
    }

    public function registerPostType()
    {
        $args = [
            'label'       => __( ucfirst(self::CPT_SLUG) . 's', 'agency' ),
            'public'      => true,
            'has_archive' => true,
            'rewrite'     => [
                'slug'       => __( self::CPT_SLUG . 's', 'agency' ),
                'with_front' => false,
            ],
            'supports'  => [ 'title', 'editor','thumbnail', 'excerpt' ],
            'menu_icon' => 'dashicons-groups',
        ];
        register_post_type( self::CPT_SLUG, $args );
    }
}
