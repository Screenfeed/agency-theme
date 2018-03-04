<?php
/**
* Plugin Name: Project
* Description: Project custom post and taxonomy defintion
* Text Domain: agency
* */
namespace App;

defined( 'ABSPATH' ) || die();

Project::get_instance();

class Project
{
    private static $instance;

    const CPT_SLUG  = 'project';
    const TAXO_SLUG = 'skill';

    public function __construct()
    {
        add_action( 'init', [ $this, 'registerPostType' ] );
        add_action( 'init', [ $this, 'registerTaxonomy' ] );
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
            'menu_icon' => 'dashicons-portfolio',
        ];
        register_post_type( self::CPT_SLUG, $args );
    }

    public function registerTaxonomy()
    {
        $args = [
            'label'        => __( ucfirst(self::TAXO_SLUG) . 's', 'agency' ),
            'public'       => true,
            'hierarchical' => true,
            'rewrite'      => [
                'slug'         => __( self::TAXO_SLUG . 's', 'agency' ),
                'with_front'   => true,
                'hierarchical' => true,
            ]
        ];
        register_taxonomy( self::TAXO_SLUG, self::CPT_SLUG, $args );
        register_taxonomy_for_object_type( self::TAXO_SLUG, self::CPT_SLUG );
    }
}
