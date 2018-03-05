<?php
/**
* Plugin Name: Content
* Description: Add starter content pages, menus and options
* Text Domain: agency
* */
namespace App;

defined( 'ABSPATH' ) || die();

Content::get_instance();

class Content
{
    private static $instance;

    public function __construct()
    {
        add_filter( 'get_theme_starter_content', [ $this, 'registerContent' ], 10, 2 );
    }

    public static function get_instance()
    {
		if ( null === self::$instance ) {
			self::$instance = new self;
		}
		return self::$instance;
    }

    public function registerContent()
    {
        $pages = [
            'home' => [
                'post_type'    => 'page',
                'post_title'   => __( 'Home', THEME_DOMAIN ),
                'post_content' => 'We are a group of experienced designers and developers. <br /> We set new standards in user experience & make future happen.'
            ],
            'team' => [
                'post_type'  => 'page',
                'post_title' => __( 'Meet Our Team', THEME_DOMAIN ),
                'template'   => 'team.php',
            ],
            'blog' => [
                'post_type'  => 'page',
                'post_title' => __( 'Welcome to our blog', THEME_DOMAIN ),
                'template'   => 'blog.php',
            ],
            'portfolio' => [
                'post_type'  => 'page',
                'post_title' => __( 'Things we have done', THEME_DOMAIN ),
                'template'   => 'project.php',
            ],
            'contact' => [
                'post_type'    => 'page',
                'post_title'   => __( 'We’d love to hear from you', THEME_DOMAIN ),
                'post_content' => '[contact-form-7 title="Contact" html_class="contact-form"]',
                'template'     => 'contact.php',
            ]
        ];
        $menus = [
            'header' => [
                'name'  => __( 'Navigation', THEME_DOMAIN ),
                'items' => [
                    'page_home' => [
                        'type'      => 'post_type',
                        'object'    => 'page',
                        'object_id' => '{{home}}',
                    ],
                    'page_team' => [
                        'type'      => 'post_type',
                        'object'    => 'page',
                        'object_id' => '{{team}}',
                    ],
                    'page_blog' => [
                        'type'      => 'post_type',
                        'object'    => 'page',
                        'object_id' => '{{blog}}',
                    ],
                    'page_portfolio' => [
                        'type'      => 'post_type',
                        'object'    => 'page',
                        'object_id' => '{{portfolio}}',
                    ],
                    'page_contact' => [
                        'type'      => 'post_type',
                        'object'    => 'page',
                        'object_id' => '{{contact}}',
                    ],
                ],
            ],
        ];
        $options = [
            'show_on_front'   => 'page',
            'page_on_front'   => '{{home}}',
            'blogname'        => __( 'Agency', THEME_DOMAIN ),
            'blogdescription' => __( 'WordPress Theme', THEME_DOMAIN )
        ];
        $content              = [];
        $content['posts']     = $pages;
        $content['nav_menus'] = $menus;
        $content['options']   = $options;
        return $content;
    }
}
