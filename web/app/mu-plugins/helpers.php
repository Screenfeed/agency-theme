<?php
function getArchivePage( $template_slug )
{
    $page_id = null;
    $pages = get_posts( array(
        'post_type'         => 'page',
        'posts_per_page'    => 1,
        'fields'            => 'ids',
        'meta_key'          => '_wp_page_template',
        'meta_value'        => $template_slug . '.php'
    ));

    if ( $pages ) :
        $page_id = $pages[0];
    endif;

    return $page_id;
}
