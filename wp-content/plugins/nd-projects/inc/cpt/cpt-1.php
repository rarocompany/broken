<?php

///////////////////////////////////////////////////CPT1///////////////////////////////////////////////////////////////
function nd_cc_create_post_type_1() {

    register_post_type('nd_cc_cpt_1',
        array(
            'labels' => array(
                'name' => esc_html__('Projects','nd-projects'),
                'singular_name' => esc_html__('Projects','nd-projects')
            ),
            'public' => true,
            'has_archive' => true,
            'exclude_from_search' => true,
            'rewrite' => array('slug' => 'projects' ),
            'menu_icon'   => 'dashicons-index-card',
            'taxonomies' => array('post_tag'),
            'supports' => array('title', 'editor', 'thumbnail' )
        )
    );
}
add_action('init', 'nd_cc_create_post_type_1');


//START create sidebar
function nd_cc_single_project_sidebar() {

  // Sidebar Main
  register_sidebar(array(
      'name' =>  esc_html__('ND Projects Sidebar','nd-projects'),
      'id' => 'nd_cc_sidebar_cpt_1',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
  ));

}
add_action( 'widgets_init', 'nd_cc_single_project_sidebar' );
//END create sidebar





///////////////////////////////////////////////////TAXONOMIES///////////////////////////////////////////////////////////////

//Durations
function nd_cc_create_taxonomies_cpt_1() {
    
    register_taxonomy(
        'nd_cc_cpt_1_tax_1',
        'post',
        array(
            'label'=>__('Categories', 'nd-projects'),
            'rewrite'=>array('slug'=>'category-projects'),
            'hierarchical'=>true
        )
    );

}
add_action('init','nd_cc_create_taxonomies_cpt_1');


///////////////////////////////////////////////////ADD TAXONOMIES TO CPT///////////////////////////////////////////////////////////////
function nd_cc_add_taxonomies_to_cpt_1(){ 
 
    register_taxonomy_for_object_type('nd_cc_cpt_1_tax_1', 'nd_cc_cpt_1'); 

}
add_action('init', 'nd_cc_add_taxonomies_to_cpt_1');

