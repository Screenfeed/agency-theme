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
        add_filter ( 'manage_' . self::CPT_SLUG . '_posts_columns', [ $this, 'addAcfColumns' ] );
        add_action ( 'manage_' . self::CPT_SLUG . '_posts_custom_column', [ $this, 'addAcfCustomColumns' ], 10, 2 );
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

    public function addAcfColumns ( $columns ) {
        return array_merge ( $columns, [
            'post' => __ ( 'Post', 'agency' )
        ] );
    }

    public function addAcfCustomColumns ( $column, $post_id ) {
        switch ( $column ) {
            case 'post':
                echo get_post_meta ( $post_id, 'post', true );
                break;
        }
    }    
}
