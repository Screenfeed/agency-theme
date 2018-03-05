<?php
/**
* Plugin Name: Team
* Description: Team custom post defintion
* Text Domain: agency
* */

namespace App;

defined( 'ABSPATH' ) || die();

class Team
{
    private static $instance;

    const CPT_SLUG = 'team';

    public function __construct()
    {
        add_action( 'init', [ $this, 'registerPostType' ] );
        add_filter ( 'manage_' . self::CPT_SLUG . '_posts_columns', [ $this, 'forceColumnsTitles' ] );
        add_action ( 'manage_' . self::CPT_SLUG . '_posts_custom_column', [ $this, 'forceColumnsValues' ], 10, 2 );
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
            'label'        => __( ucfirst( self::CPT_SLUG ) . 's', THEME_DOMAIN ),
            'public'       => true,
            'hierarchical' => false,
            'has_archive'  => false,
            'rewrite'      => [ 'slug' => self ::CPT_SLUG ],
            'supports'     => [ 'title', 'editor','thumbnail', 'excerpt' ],
            'menu_icon'    => 'dashicons-groups',
        ];
        register_post_type( self::CPT_SLUG, $args );
    }

    public function forceColumnsTitles ( $columns ) {
        return array_merge ( $columns, [
            'post'      => __( 'Post', THEME_DOMAIN ),
            'thumbnail' => __( 'Thumbnail', THEME_DOMAIN ),
        ] );
    }

    public function forceColumnsValues ( $column, $post_id ) {
        switch ( $column ) {
            case 'post':
                echo get_post_meta ( $post_id, 'post', true );
                break;
            case 'thumbnail':
                echo get_the_post_thumbnail( $post_id,  [40, 40] );
                break;
        }
    }
}

Team::get_instance();
