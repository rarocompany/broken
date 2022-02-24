<?php

///////////////////////////////////////////////////CPT1///////////////////////////////////////////////////////////////
function nd_cc_create_post_type_2() {

    register_post_type('nd_cc_cpt_2',
        array(
            'labels' => array(
                'name' => __('Authors', 'nd-projects'),
                'singular_name' => __('Authors', 'nd-projects')
            ),
            'public' => true,
            'has_archive' => true,
            'exclude_from_search' => true,
            'rewrite' => array('slug' => 'authors' ),
            'menu_icon'   => 'dashicons-businessperson',
            'supports' => array('title', 'editor', 'thumbnail' )
        )
    );
}
add_action('init', 'nd_cc_create_post_type_2');