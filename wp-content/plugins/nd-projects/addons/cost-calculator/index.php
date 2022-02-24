<?php


//create metabox
// 1 - add_meta_box() crea la categoria 
// 2 - in -cc-sett inserisco l'html del contenuto
// 3 - con save_post() salvo i metabox


function nd_cc_create_post_type_cost_calc() {
    register_post_type('cost-calculator',
        array(
            'labels' => array(
                'name' => __('Cost Calculator', 'nd-projects'),
                'singular_name' => __('Cost Calculator', 'nd-projects')
            ),
            'public' => false,
            'show_ui' => true,
            'show_in_nav_menus' => false,
            'menu_icon'   => 'dashicons-edit',
            'has_archive' => false,
            'exclude_from_search' => true,
            'rewrite' => array('slug' => 'cost-calculator'),
            'supports' => array('title')
        )
    );
}
add_action('init', 'nd_cc_create_post_type_cost_calc');


include "include/functions.php";



//START create metabox function
add_action( 'add_meta_boxes', 'nd_cc_metabox_cost' );
function nd_cc_metabox_cost() {
    add_meta_box( 'nd-cc-meta-box-cost-shortcode', __('Cost Settings','nd-projects'), 'nd_cc_metabox_cost_calc_short', 'cost-calculator', 'normal', 'high' );
    add_meta_box( 'nd-cc-meta-box-cost-id', __('Cost Settings','nd-projects'), 'nd_cc_metabox_cost_calc', 'cost-calculator', 'normal', 'high' );
    add_meta_box( 'nd-cc-meta-box-cost-id-settings', __('Cost Settings','nd-projects'), 'nd_cc_metabox_cost_calc_settigns', 'cost-calculator', 'normal', 'high' );
}

function nd_cc_metabox_cost_calc_short()
{
    echo '<a>[nd_cost_calculator id="'.get_the_ID().'"]</a>';
}

include "include/metabox-cc.php";
include "include/metabox-cc-sett.php";
include "include/metabox-cc-save.php";



include "include/shortcode.php";

