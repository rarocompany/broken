<?php


//header
get_header( );

$nd_cc_result = '';

//get header image info
$nd_cc_meta_box_image_position_a = get_post_meta( get_the_ID(), 'nd_cc_meta_box_image_position_a', true );
$nd_cc_meta_box_image_a = get_post_meta( get_the_ID(), 'nd_cc_meta_box_image_a', true );
$nd_cc_meta_box_page_layout_a = get_post_meta( get_the_ID(), 'nd_cc_meta_box_page_layout_a', true );

//main settings
$nd_cc_meta_box_role = get_post_meta( get_the_ID(), 'nd_cc_meta_box_role', true );


//START header image
if ( $nd_cc_meta_box_image_a != '' ) {	

	$nd_cc_result .= '
	<div id="nd_cc_single_cpt_2_header_image" class="nd_cc_section nd_cc_background_size_cover '.$nd_cc_meta_box_image_position_a.' " style="background-image:url('.$nd_cc_meta_box_image_a.');">

        <div class="nd_cc_section nd_cc_bg_greydark_alpha_gradient_6">';

            if ( nd_cc_get_container() != 1) {  $nd_cc_result .= '
            <div class="nd_cc_container nd_cc_box_sizing_border_box nd_cc_clearfix">'; }

            	$nd_cc_result .= '

            	<div id="nd_cc_single_cpt_1_header_image_space_top" class="nd_cc_section nd_cc_height_120"></div>

        		<h1 class="nd_cc_text_align_center nd_options_color_white nd_cc_font_size_50">'.get_the_title().'</h1>
        		<div class="nd_cc_section nd_cc_height_20"></div>
        		<h3 class="nd_cc_text_align_center nd_options_color_white nd_cc_letter_spacing_2">'.$nd_cc_meta_box_role.'</h3>

                <div id="nd_cc_single_cpt_1_header_image_space_bottom" class="nd_cc_section nd_cc_height_120"></div>';


            if ( nd_cc_get_container() != 1 ) { $nd_cc_result .= '
            </div>'; }


        $nd_cc_result .= '
        </div>

    </div>';

}
//END header image





//START content
$nd_cc_result .= '
<div class="nd_cc_section " id="nd_cc_single_author_page">';

	if ( nd_cc_get_container() != 1) {  $nd_cc_result .= '<div class="nd_cc_container nd_cc_box_sizing_border_box nd_cc_clearfix">'; }

	if(have_posts()) :
		while(have_posts()) : the_post();

		    //default
		    $nd_cc_content = do_shortcode(get_the_content());
		    $nd_cc_id = get_the_ID();
		    $nd_cc_meta_box_page_layout_a = get_post_meta( $nd_cc_id, 'nd_cc_meta_box_page_layout_a', true );

		    //free content
		    if ( $nd_cc_meta_box_page_layout_a == 'nd_cc_meta_box_page_layout_a_l_free' ) {

		    	$nd_cc_result .= '<p>'.$nd_cc_content.'</p>';

		    }else{

			  	$nd_cc_result .= '

			  		<div class="nd_cc_section nd_cc_height_50"></div>

			  		<!--START CONTENT-->
					<div class="nd_cc_width_100_percentage nd_cc_float_left">
					 
					    <div class="nd_cc_section">

							<p>'.$nd_cc_content.'</p>        	

					    </div>

					</div> 
					<!--END CONTENT-->

					<div class="nd_cc_section nd_cc_height_50"></div>

				';

			}
	  
		endwhile;
	endif;


	if ( nd_cc_get_container() != 1 ) { $nd_cc_result .= '</div>'; }

$nd_cc_result .= '
</div>';
//END content







/*START similar projects*/
if ( $nd_cc_meta_box_page_layout_a != 'nd_cc_meta_box_page_layout_a_l_free' ) {

	wp_enqueue_script('masonry');


	$args = array(
		'post_type' => 'nd_cc_cpt_1',
		'posts_per_page' => -1,
		'meta_query' => array(
			array(
				'key' => 'nd_cc_meta_box_authors',
				'type' => 'numeric',
				'value'   => get_the_ID(),
				'compare' => 'IN',
			),
		),
	);

	$the_query = new WP_Query( $args );
	$nd_cc_qnt_results_posts = $the_query->found_posts;



	if ( $nd_cc_qnt_results_posts != 0 ) {


		$nd_cc_result .= '

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


		<div id="nd_cc_author_projects" class="nd_cc_section nd_cc_border_top_1_solid_grey">

			<div class="nd_cc_section nd_cc_height_70"></div>';

			if ( nd_cc_get_container() != 1) {  $nd_cc_result .= '
			<div class="nd_cc_container nd_cc_box_sizing_border_box nd_cc_clearfix">'; }

				$nd_cc_result .= '
				<h3 class="nd_options_color_grey nd_cc_text_align_center nd_cc_letter_spacing_2">'.__('CHECK MY','nd-projects').'</h3>
				<div class="nd_cc_section nd_cc_height_30"></div>
				<h1 class="nd_cc_text_align_center nd_cc_font_size_50 nd_cc_line_height_50">'.__('Projects','nd-projects').'</h1>
				<div class="nd_cc_section nd_cc_height_50"></div>

				<!--START MASONRY-->
				<div class="nd_cc_section nd_cc_masonry_content">';

				while ( $the_query->have_posts() ) : $the_query->the_post();

					//default
					$nd_cc_title = get_the_title();
					$nd_cc_content = do_shortcode(get_the_content());
					$nd_cc_id = get_the_ID();
					$nd_cc_permalink = get_permalink( $nd_cc_id );

					//metabox
					$nd_cc_meta_box_color = get_post_meta( $nd_cc_id, 'nd_cc_meta_box_color', true ); if ($nd_cc_meta_box_color == '') { $nd_cc_meta_box_color = '#ebc858'; }
					$nd_cc_meta_box_text_preview = get_post_meta( get_the_ID(), 'nd_cc_meta_box_text_preview', true );

					//category
					$nd_cc_terms_category_project = wp_get_post_terms( $nd_cc_id, 'nd_cc_cpt_1_tax_1', array("fields" => "all"));
					$nd_cc_terms_category_project_results = '';
					$nd_cc_project_category = '';
					foreach ($nd_cc_terms_category_project as $nd_cc_term_category_project) { $nd_cc_terms_category_project_results = $nd_cc_term_category_project->name; }
					if ( $nd_cc_terms_category_project_results != '' ) {
					    $nd_cc_project_category = '<a class="nd_options_color_white nd_cc_font_size_13 nd_cc_position_absolute nd_cc_right_30 nd_cc_padding_top_5 nd_cc_top_30 nd_cc_line_height_13 nd_cc_text_transform_uppercase nd_cc_bg_greydark nd_cc_padding_3_10 nd_cc_letter_spacing_2" href="'.$nd_cc_permalink.'">'.$nd_cc_terms_category_project_results.'</a>';
					}

					//image
					if ( has_post_thumbnail() ) { 

					    $nd_cc_image_id = get_post_thumbnail_id( $nd_cc_id );
					    $nd_cc_image_attributes = wp_get_attachment_image_src( $nd_cc_image_id, $nd_cc_image_size );

					    $nd_cc_image = '

					        <div class="nd_cc_section nd_cc_position_relative">

					            <img alt="" class="nd_cc_section" src="'.$nd_cc_image_attributes[0].'">

					            <div class="nd_cc_bg_greydark_alpha_gradient_5 nd_cc_position_absolute nd_cc_left_0 nd_cc_height_100_percentage nd_cc_width_100_percentage nd_cc_padding_30 nd_cc_box_sizing_border_box">
					                
					                <div class="nd_cc_position_absolute nd_cc_bottom_30">
					                    <a href="'.$nd_cc_permalink.'"><p class="nd_options_color_white nd_cc_float_left nd_cc_letter_spacing_2 nd_cc_text_transform_uppercase nd_cc_padding_right_85">'.$nd_cc_title.'</p></a>
					                </div>

					                <div style="background-color:'.$nd_cc_meta_box_color.'" class="nd_cc_width_25 nd_cc_height_25 nd_cc_position_absolute nd_cc_right_30 nd_cc_bottom_30">
					                    <a href="'.$nd_cc_permalink.'"><img class="nd_cc_position_absolute nd_cc_left_5 nd_cc_top_5" alt="" width="15" src="'.esc_url(plugins_url('icon-add-white.png', __FILE__ )).'"></a>
					                </div>

					                '.$nd_cc_project_category.'

					            </div>

					        </div>


					    ';
					}else{ 
					    $nd_cc_image = '';
					}

					$nd_cc_result .= '

					<div id="nd_cc_archive_cpt_1_single_'.$nd_cc_id.'" class=" nd_cc_projects_component_l1 nd_cc_masonry_item nd_cc_width_33_percentage nd_cc_width_100_percentage_responsive">

					    <div class="nd_cc_section nd_cc_padding_15 nd_cc_box_sizing_border_box">

					        <div class="nd_cc_section">
					            
					            '.$nd_cc_image.'
					   
					        </div>

					    </div>

					</div>';

				endwhile;

				wp_reset_postdata();

				$nd_cc_result .= '
				</div>
				<!--END MASONRY-->';

			if ( nd_cc_get_container() != 1) {  $nd_cc_result .= '
			</div>'; }

			$nd_cc_result .= '
			<div class="nd_cc_section nd_cc_height_70"></div>

		</div>
		';


	}
	

}	
/*END similar projects*/






echo $nd_cc_result;


//footer
get_footer( );


