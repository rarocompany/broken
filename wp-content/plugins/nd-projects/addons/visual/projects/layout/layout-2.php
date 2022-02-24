<?php


wp_enqueue_script('masonry');

$str .= '

	<script type="text/javascript">
    //<![CDATA[
    
    jQuery(document).ready(function() {

      //START masonry
      jQuery(function ($) {
        
        //Masonry
    		var $nd_cc_masonry_content = $(".nd_cc_masonry_content").imagesLoaded( function() {
    		  // init Masonry after all images have loaded
    		  $nd_cc_masonry_content.masonry({
    		    itemSelector: ".nd_cc_masonry_item"
    		  });
    		});

      });
      //END masonry

    });

    //]]>
  </script>

';


$str .= '<div class="nd_cc_section nd_cc_masonry_content '.$nd_cc_class.' ">';

while ( $the_query->have_posts() ) : $the_query->the_post();

//default
$nd_cc_title = get_the_title();
$nd_cc_id = get_the_ID();
$nd_cc_permalink = get_permalink( $nd_cc_id );

//metabox
$nd_cc_meta_box_color = get_post_meta( $nd_cc_id, 'nd_cc_meta_box_color', true ); if ($nd_cc_meta_box_color == '') { $nd_cc_meta_box_color = '#ebc858'; }

//category
$nd_cc_terms_category_project = wp_get_post_terms( $nd_cc_id, 'nd_cc_cpt_1_tax_1', array("fields" => "all"));
$nd_cc_terms_category_project_results = '';
$nd_cc_project_category = '';
foreach ($nd_cc_terms_category_project as $nd_cc_term_category_project) { $nd_cc_terms_category_project_results = $nd_cc_term_category_project->name; }
if ( $nd_cc_terms_category_project_results != '' ) {
    $nd_cc_project_category = '<p class="">'.$nd_cc_terms_category_project_results.'</p>';
}

//image
if ( has_post_thumbnail() ) { 

    $nd_cc_image_id = get_post_thumbnail_id( $nd_cc_id );
    $nd_cc_image_attributes = wp_get_attachment_image_src( $nd_cc_image_id, $nd_cc_image_size );

    $nd_cc_image = '<img alt="" class="nd_cc_position_absolute nd_cc_top_0 nd_cc_left_0" width="100" src="'.$nd_cc_image_attributes[0].'">';
    $nd_cc_image_class = ' nd_cc_padding_left_120 ';

}else{ 
    $nd_cc_image = '';
    $nd_cc_image_class = '';
}




$str .= '

<div id="nd_cc_archive_cpt_1_single_'.$nd_cc_id.'" class=" nd_cc_projects_component_l1 nd_cc_masonry_item '.$nd_cc_width.' nd_cc_width_100_percentage_responsive">

    <div class="nd_cc_section nd_cc_position_relative nd_cc_box_sizing_border_box"">

        '.$nd_cc_image.'

        <div class="nd_cc_section '.$nd_cc_image_class.'  nd_cc_min_height_100 nd_cc_box_sizing_border_box">
            <div class="nd_cc_section nd_cc_height_5"></div>
            <h4>'.$nd_cc_title.'</h4>
            <div class="nd_cc_section nd_cc_height_10"></div>
            '.$nd_cc_project_category.'
            <div class="nd_cc_section nd_cc_height_10"></div>
            <a class="nd_options_color_white nd_cc_padding_5_10 nd_cc_font_size_11" style="background-color:'.$nd_cc_meta_box_color.'" href="'.$nd_cc_permalink.'">'.__('DETAILS','nd-projects').'</a>
        </div>

    </div>

</div>
';



endwhile;

$str .= '</div>';