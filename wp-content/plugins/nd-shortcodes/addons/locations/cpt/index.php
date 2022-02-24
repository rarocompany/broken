<?php


function nd_options_create_post_type_locations() {
    register_post_type('locations',
        array(
            'labels' => array(
                'name' => __('Locations', 'nd-shortcodes'),
                'singular_name' => __('Locations', 'nd-shortcodes')
            ),
            'public' => false,
            'show_ui' => true,
            'show_in_nav_menus' => false,
            'menu_icon'   => 'dashicons-location-alt',
            'has_archive' => false,
            'exclude_from_search' => true,
            'rewrite' => array('slug' => 'locations'),
            'supports' => array('title', 'thumbnail')
        )
    );
}
add_action('init', 'nd_options_create_post_type_locations');




