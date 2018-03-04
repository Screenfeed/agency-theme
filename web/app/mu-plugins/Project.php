<?php
/**
* Plugin Name: Project
* Description: Project custom post and taxonomy defintion
* Text Domain: agency
* */

namespace App;

defined( 'ABSPATH' ) || die();

class Project
{
    private static $instance;

    const CPT_SLUG  = 'project';
    const TAXO_SLUG = 'skill';
    const URL_SLUG  = 'portfolio';

    public function __construct()
    {
        add_action( 'init', [ $this, 'registerPostType' ] );
        add_action( 'init', [ $this, 'registerTaxonomy' ] );
        add_action('manage_' . self::CPT_SLUG . '_posts_columns', [ $this, 'forceColumnsTitles' ] );
        add_action('manage_' . self::CPT_SLUG . '_posts_custom_column', [ $this, 'forceColumnsValues' ], 10, 2);
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
            'rewrite'      => [ 'slug' => self ::URL_SLUG ],
            'supports'     => [ 'title', 'editor','thumbnail', 'excerpt' ],
            'menu_icon'    => 'dashicons-portfolio',
        ];
        register_post_type( self::CPT_SLUG, $args );
    }

    public function registerTaxonomy()
    {
        $args = [
            'label'        => __( ucfirst( self::TAXO_SLUG ) . 's', THEME_DOMAIN ),
            'public'       => true,
            'hierarchical' => true,
        ];
        register_taxonomy( self::TAXO_SLUG, self::CPT_SLUG, $args );
        register_taxonomy_for_object_type( self::TAXO_SLUG, self::CPT_SLUG );
    }

    public function forceColumnsTitles( $columns )
    {
        return array_merge( $columns, [
            'skills'    => __( ucfirst( self::TAXO_SLUG ) . 's', THEME_DOMAIN ),
            'thumbnail' => __( 'Thumbnail', THEME_DOMAIN ),
        ] );
    }

    function forceColumnsValues( $column, $post_id ) {
        if ( $column === 'thumbnail' ) {
            echo get_the_post_thumbnail( $post_id,  [40, 40] );
        }
        elseif ( $column === self::TAXO_SLUG . 's' ) {
            $terms = get_the_terms( $post_id, self::TAXO_SLUG );
            foreach ( $terms as $term ) {
                echo $term->name .' ';
            }
        }
    }
}

Project::get_instance();
