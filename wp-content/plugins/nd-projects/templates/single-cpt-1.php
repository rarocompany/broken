<?php


//header
get_header( );

$nd_cc_result = '';


//get header image info
$nd_cc_meta_box_image_position = get_post_meta( get_the_ID(), 'nd_cc_meta_box_image_position', true );
$nd_cc_meta_box_image = get_post_meta( get_the_ID(), 'nd_cc_meta_box_image', true );
$nd_cc_meta_box_image_title = get_post_meta( get_the_ID(), 'nd_cc_meta_box_image_title', true );

//main settings 
$nd_cc_meta_box_color = get_post_meta( get_the_ID(), 'nd_cc_meta_box_color', true ); if ( $nd_cc_meta_box_color == '' ) { $nd_cc_meta_box_color = '#ebc858'; }

//page settings
$nd_cc_meta_box_page_layout = get_post_meta( get_the_ID(), 'nd_cc_meta_box_page_layout', true );



//START header image
if ( $nd_cc_meta_box_image != '' ) {	

	$nd_cc_result .= '
	<div id="nd_cc_single_cpt_1_header_image" class="nd_cc_section nd_cc_background_size_cover '.$nd_cc_meta_box_image_position.' " style="background-image:url('.$nd_cc_meta_box_image.');">

        <div class="nd_cc_section nd_cc_bg_greydark_alpha_gradient_7">';

            if ( nd_cc_get_container() != 1) {  $nd_cc_result .= '
            <div class="nd_cc_container nd_cc_box_sizing_border_box nd_cc_clearfix">'; }

            	$nd_cc_result .= '

            	<div id="nd_cc_single_cpt_1_header_image_space_top" class="nd_cc_section nd_cc_height_120"></div>';

            	if ( $nd_cc_meta_box_image_title != '' ) {
        		$nd_cc_result .= '
        		<h1 class="nd_cc_text_align_center nd_options_color_white nd_cc_font_size_50">'.$nd_cc_meta_box_image_title.'</h1>';
            	}

            	$nd_cc_result .= '
                <div id="nd_cc_single_cpt_1_header_image_space_bottom" class="nd_cc_section nd_cc_height_120"></div>';


            if ( nd_cc_get_container() != 1 ) { $nd_cc_result .= '
            </div>'; }


        $nd_cc_result .= '
        </div>

    </div>';

}
//END header image




//START black bar
if ( $nd_cc_meta_box_page_layout != 'nd_cc_meta_box_page_layout_free_content' ) {
$nd_cc_result .= '
<div id="nd_cc_info_project_bar" class="nd_cc_section nd_cc_bg_greydark nd_cc_padding_25_0 nd_cc_display_none">';

	if ( nd_cc_get_container() != 1) {  $nd_cc_result .= '
	<div class="nd_cc_container nd_cc_box_sizing_border_box nd_cc_clearfix">'; }

	
		//START author
		$nd_cc_meta_box_authors = get_post_meta( get_the_ID(), 'nd_cc_meta_box_authors', true );
		if ( $nd_cc_meta_box_authors == '' ){ $nd_cc_meta_box_authors = 0; }

		if ( $nd_cc_meta_box_authors != 0 ) {

		$nd_cc_author_title = get_the_title($nd_cc_meta_box_authors);
		$nd_cc_author_link = get_the_permalink($nd_cc_meta_box_authors);
		$nd_cc_author_role = get_post_meta( $nd_cc_meta_box_authors, 'nd_cc_meta_box_role', true );
		if ( $nd_cc_author_role == '' ) { $nd_cc_author_role = __('AUTHOR','nd-projects'); }
		$nd_cc_author_image = get_the_post_thumbnail_url($nd_cc_meta_box_authors,'thumbnail');
		if ( $nd_cc_author_image == '' ) {
			$nd_cc_author_image_content = '<a href="'.$nd_cc_author_link.'"><img width="50" class="nd_cc_position_absolute nd_cc_left_0 nd_cc_top_0" src="'.esc_url(plugins_url('icon-user-white.png', __FILE__ )).'"></a>';	
		}else{
			$nd_cc_author_image_content = '<a href="'.$nd_cc_author_link.'"><img width="50" class="nd_cc_position_absolute nd_cc_left_0 nd_cc_top_0" src="'.get_the_post_thumbnail_url($nd_cc_meta_box_authors,'thumbnail').'"></a>';	
		}
		
		$nd_cc_result .= '

		<style>#nd_cc_info_project_bar { display:block; }</style>
		<div class="nd_cc_width_25_percentage nd_cc_width_100_percentage_responsive nd_cc_float_left nd_cc_padding_15  nd_cc_box_sizing_border_box">

			<div class="nd_cc_section nd_cc_position_relative">

				'.$nd_cc_author_image_content.'

				<div class="nd_cc_section nd_cc_padding_left_70 nd_cc_box_sizing_border_box">
					<a href="'.$nd_cc_author_link.'"><h4 class="nd_options_color_white">'.$nd_cc_author_role.'</h4></a>
					<div class="nd_cc_section nd_cc_height_20"></div>
					<a href="'.$nd_cc_author_link.'"><h4 class="nd_options_color_grey">'.$nd_cc_author_title.'</h4></a>
				</div>

			</div>

		</div>';

		}
		//END author



		//START category
		$nd_cc_terms_category_project = wp_get_post_terms( get_the_ID(), 'nd_cc_cpt_1_tax_1', array("fields" => "all"));
		$nd_cc_terms_category_project_results = '';
		foreach ($nd_cc_terms_category_project as $nd_cc_term_category_project) { $nd_cc_terms_category_project_results = $nd_cc_term_category_project->name; }
		if ( $nd_cc_terms_category_project_results != '' ) {

		$nd_cc_result .= '
		<style>#nd_cc_info_project_bar { display:block; }</style>
		<div class="nd_cc_width_25_percentage nd_cc_width_100_percentage_responsive nd_cc_float_left nd_cc_padding_15  nd_cc_box_sizing_border_box">

			<div class="nd_cc_section nd_cc_position_relative">

				<img width="50" class="nd_cc_position_absolute nd_cc_left_0 nd_cc_top_0" src="'.esc_url(plugins_url('icon-category-grey.png', __FILE__ )).'">

				<div class="nd_cc_section nd_cc_padding_left_70 nd_cc_box_sizing_border_box">
					<h4 class="nd_options_color_white">'.__('CATEGORY','nd-projects').'</h4>
					<div class="nd_cc_section nd_cc_height_20"></div>
					<h4 class="nd_options_color_grey">'.$nd_cc_terms_category_project_results.'</h4>
				</div>

			</div>

		</div>';
		    
		}
		//END cateory

		
		//START budget
		if ( get_post_meta( get_the_ID(), 'nd_cc_meta_box_budget', true ) != '' ) {

		$nd_cc_result .= '
		<style>#nd_cc_info_project_bar { display:block; }</style>
		<div class="nd_cc_width_25_percentage nd_cc_width_100_percentage_responsive nd_cc_float_left nd_cc_padding_15  nd_cc_box_sizing_border_box">

			<div class="nd_cc_section nd_cc_position_relative">

				<img width="50" class="nd_cc_position_absolute nd_cc_left_0 nd_cc_top_0" src="'.esc_url(plugins_url('icon-wallet-grey.png', __FILE__ )).'">

				<div class="nd_cc_section nd_cc_padding_left_70 nd_cc_box_sizing_border_box">
					<h4 class="nd_options_color_white">'.__('BUDGET','nd-projects').'</h4>
					<div class="nd_cc_section nd_cc_height_20"></div>
					<h4 class="nd_options_color_grey">'.get_post_meta( get_the_ID(), 'nd_cc_meta_box_budget', true ).'</h4>
				</div>

			</div>

		</div>';

		}
		//END budget



		//START button
		if ( get_post_meta( get_the_ID(), 'nd_cc_meta_box_btn_text', true ) != '' ) {

		$nd_cc_result .= '
		<style>#nd_cc_info_project_bar { display:block; }</style>
		<div class="nd_cc_width_25_percentage nd_cc_width_100_percentage_responsive nd_cc_float_left nd_cc_padding_15  nd_cc_box_sizing_border_box">

			<a style="background-color:'.$nd_cc_meta_box_color.'" class="nd_cc_float_right nd_cc_float_left_responsive nd_cc_padding_15_35 nd_options_color_white nd_cc_font_size_20" href="'.get_post_meta( get_the_ID(), 'nd_cc_meta_box_btn_link', true ).'">'.get_post_meta( get_the_ID(), 'nd_cc_meta_box_btn_text', true ).'</a>

		</div>';

		}
		//END button
		

	


	if ( nd_cc_get_container() != 1 ) { $nd_cc_result .= '
	</div>'; }

$nd_cc_result .= '
</div>';
}
//END black bar




$nd_cc_result .= '
<div class="nd_cc_section nd_cc_background_position_center_top nd_cc_background_repeat_no_repeat" id="nd_cc_single_project_page">';

if ( get_post_meta( get_the_ID(), 'nd_cc_meta_box_image_page', true ) != '' ) {
	$nd_cc_result .= '
	<style>
	#nd_cc_single_project_page {
	background-image:url('.get_post_meta( get_the_ID(), 'nd_cc_meta_box_image_page', true ).');
	}
	</style>
	';	
}

if ( nd_cc_get_container() != 1) {  $nd_cc_result .= '<div class="nd_cc_container nd_cc_box_sizing_border_box nd_cc_clearfix">'; }

if(have_posts()) :
	while(have_posts()) : the_post();


	    //default
	    $nd_cc_title = get_the_title();
	    $nd_cc_content = do_shortcode(get_the_content());
	    $nd_cc_id = get_the_ID();
	    $nd_cc_meta_box_page_layout = get_post_meta( $nd_cc_id, 'nd_cc_meta_box_page_layout', true );
		$nd_cc_meta_box_featured_image_size = get_post_meta( get_the_ID(), 'nd_cc_meta_box_featured_image_size', true );
		$nd_cc_meta_box_featured_image_replace = get_post_meta( get_the_ID(), 'nd_cc_meta_box_featured_image_replace', true );


		


		//START create details box

		//image or solid color ?
		$nd_cc_meta_box_image_box = get_post_meta( $nd_cc_id, 'nd_cc_meta_box_image_box', true );
		if ( $nd_cc_meta_box_image_box != '' ) {
			$nd_cc_image_box_style = ' background-image:url('.$nd_cc_meta_box_image_box.'); background-position:center; background-size:cover; ';
		}else {
			$nd_cc_image_box_style = ' background-color:'.$nd_cc_meta_box_color.'; ';	
		}
		$nd_cc_image_details_box = '

		<!--START details-->
        <div id="nd_cc_single_cpt_1_box" style=" '.$nd_cc_image_box_style.' " class=" nd_cc_width_33_percentage nd_cc_width_100_percentage_responsive nd_cc_display_inline_block_responsive nd_cc_box_sizing_border_box nd_cc_display_table_cell nd_cc_vertical_align_middle">
            <h2 class="nd_options_color_white nd_cc_text_align_center nd_cc_margin_top_40_responsive">'.__('DETAILS','nd-projects').'</h2>

            <div class="nd_cc_padding_40 nd_cc_section nd_cc_box_sizing_border_box">';


            	if ( get_post_meta( $nd_cc_id, 'nd_cc_meta_box_customer', true ) != '' ) {

        		$nd_cc_image_details_box .= '
            	<div class="nd_cc_section">
            		<div class="nd_cc_float_left nd_cc_width_40_percentage nd_cc_width_100_percentage_responsive">
            			<h4 class="nd_options_color_white">'.__('CUSTOMER','nd-projects').'</h4>
            		</div>
            		<div class="nd_cc_float_left nd_cc_width_60_percentage nd_cc_width_100_percentage_responsive nd_cc_text_align_right nd_cc_text_align_left_responsive">
            			<p class="nd_options_color_white nd_cc_line_height_17">'.get_post_meta( $nd_cc_id, 'nd_cc_meta_box_customer', true ).'</p>
            		</div>
            	</div>
            	<div class="nd_cc_section nd_cc_height_20"></div>';

            	}

            	if ( get_post_meta( $nd_cc_id, 'nd_cc_meta_box_location', true ) != '' ) {

        		$nd_cc_image_details_box .= '
            	<div class="nd_cc_section">
            		<div class="nd_cc_float_left nd_cc_width_40_percentage nd_cc_width_100_percentage_responsive">
            			<h4 class="nd_options_color_white">'.__('LOCATION','nd-projects').'</h4>
            		</div>
            		<div class="nd_cc_float_left nd_cc_width_60_percentage nd_cc_width_100_percentage_responsive nd_cc_text_align_right nd_cc_text_align_left_responsive">
            			<p class="nd_options_color_white nd_cc_line_height_17">'.get_post_meta( $nd_cc_id, 'nd_cc_meta_box_location', true ).'</p>
            		</div>
            	</div>
            	<div class="nd_cc_section nd_cc_height_20"></div>';

            	}

            	if ( get_post_meta( $nd_cc_id, 'nd_cc_meta_box_start_date', true ) != '' ) {

        		$nd_cc_image_details_box .= '
            	<div class="nd_cc_section">
            		<div class="nd_cc_float_left nd_cc_width_40_percentage nd_cc_width_100_percentage_responsive">
            			<h4 class="nd_options_color_white">'.__('START DATA','nd-projects').'</h4>
            		</div>
            		<div class="nd_cc_float_left nd_cc_width_60_percentage nd_cc_width_100_percentage_responsive nd_cc_text_align_right nd_cc_text_align_left_responsive">
            			<p class="nd_options_color_white nd_cc_line_height_17">'.get_post_meta( $nd_cc_id, 'nd_cc_meta_box_start_date', true ).'</p>
            		</div>
            	</div>
            	<div class="nd_cc_section nd_cc_height_20"></div>';

            	}

            	if ( get_post_meta( $nd_cc_id, 'nd_cc_meta_box_duration', true ) != '' ) {

        		$nd_cc_image_details_box .= '
            	<div class="nd_cc_section">
            		<div class="nd_cc_float_left nd_cc_width_40_percentage nd_cc_width_100_percentage_responsive">
            			<h4 class="nd_options_color_white">'.__('DURATION','nd-projects').'</h4>
            		</div>
            		<div class="nd_cc_float_left nd_cc_width_60_percentage nd_cc_width_100_percentage_responsive nd_cc_text_align_right nd_cc_text_align_left_responsive">
            			<p class="nd_options_color_white nd_cc_line_height_17">'.get_post_meta( $nd_cc_id, 'nd_cc_meta_box_duration', true ).'</p>
            		</div>
            	</div>
            	<div class="nd_cc_section nd_cc_height_20"></div>';

            	}

            	if ( get_post_meta( $nd_cc_id, 'nd_cc_meta_box_size', true ) != '' ) {

        		$nd_cc_image_details_box .= '
            	<div class="nd_cc_section">
            		<div class="nd_cc_float_left nd_cc_width_40_percentage nd_cc_width_100_percentage_responsive">
            			<h4 class="nd_options_color_white">'.__('PROJECT SIZE','nd-projects').'</h4>
            		</div>
            		<div class="nd_cc_float_left nd_cc_width_60_percentage nd_cc_width_100_percentage_responsive nd_cc_text_align_right nd_cc_text_align_left_responsive">
            			<p class="nd_options_color_white nd_cc_line_height_17">'.get_post_meta( $nd_cc_id, 'nd_cc_meta_box_size', true ).'</p>
            		</div>
            	</div>';

            	}


            $nd_cc_image_details_box .= '
            </div>

        </div>	
        <!--END details-->


		';
		//END create details box





	    //START image or custom content
        if ( $nd_cc_meta_box_featured_image_replace == '' ) {

        	
        	if ( has_post_thumbnail() ) { 

		    	$nd_cc_image_id = get_post_thumbnail_id( $nd_cc_id );
			    $nd_cc_image_attributes = wp_get_attachment_image_src( $nd_cc_image_id, $nd_cc_meta_box_featured_image_size );


			    //check if details is empty
			    if ( get_post_meta( $nd_cc_id, 'nd_cc_meta_box_customer', true ) == '' AND get_post_meta( $nd_cc_id, 'nd_cc_meta_box_location', true ) == '' AND get_post_meta( $nd_cc_id, 'nd_cc_meta_box_start_date', true ) == '' AND get_post_meta( $nd_cc_id, 'nd_cc_meta_box_duration', true ) == '' AND get_post_meta( $nd_cc_id, 'nd_cc_meta_box_size', true ) == '' ) {
			    	$nd_cc_image_class = 'nd_cc_width_100_percentage ';
			    	$nd_cc_image_details_box_content = '';
			    }else{
			    	$nd_cc_image_class = 'nd_cc_width_66_percentage';	
			    	$nd_cc_image_details_box_content = $nd_cc_image_details_box;
			    }


			    $nd_cc_image = '
			    <!--START image-->
				<div id="nd_cc_single_cpt_1_image" class=" '.$nd_cc_image_class.' nd_cc_box_sizing_border_box nd_cc_width_100_percentage_responsive nd_cc_display_table_cell nd_cc_display_inline_block_responsive nd_cc_vertical_align_middle">
		            <img alt="" class="nd_cc_section" src="'.$nd_cc_image_attributes[0].'">
		        </div>	
		        <!--END image-->';


				$nd_cc_image_content = '
				<div class="nd_cc_section nd_cc_height_40"></div>
				
				<!--START image and details-->
				<div id="nd_cc_single_cpt_1_image_and_box" class="nd_cc_section nd_cc_padding_15 nd_cc_box_sizing_border_box nd_cc_display_table">
					
					'.$nd_cc_image.'
			        '.$nd_cc_image_details_box_content.'

			    </div>
			    <!--START image and details-->';



		    }else{ 
		    	$nd_cc_image_content = '';
		    }

        }else{

        	//check if details is empty
		    if ( get_post_meta( $nd_cc_id, 'nd_cc_meta_box_customer', true ) == '' AND get_post_meta( $nd_cc_id, 'nd_cc_meta_box_location', true ) == '' AND get_post_meta( $nd_cc_id, 'nd_cc_meta_box_start_date', true ) == '' AND get_post_meta( $nd_cc_id, 'nd_cc_meta_box_duration', true ) == '' AND get_post_meta( $nd_cc_id, 'nd_cc_meta_box_size', true ) == '' ) {
		    	$nd_cc_image_class = 'nd_cc_width_100_percentage nd_cc_width_100_percentage_responsive';
		    	$nd_cc_image_details_box_content = '';
		    }else{
		    	$nd_cc_image_class = 'nd_cc_width_66_percentage nd_cc_width_100_percentage_responsive';	
		    	$nd_cc_image_details_box_content = $nd_cc_image_details_box;
		    }

			$nd_cc_image_iframe = '
		    <!--START iframe-->
			<div id="nd_cc_single_cpt_1_image_and_box_iframe" class=" '.$nd_cc_image_class.' nd_cc_box_sizing_border_box nd_cc_display_table_cell nd_cc_display_inline_block_responsive nd_cc_vertical_align_middle">
	            '.do_shortcode($nd_cc_meta_box_featured_image_replace).'
	        </div>	
	        <!--END iframe-->'; 

			$nd_cc_image_content = '
			<div class="nd_cc_section nd_cc_height_40"></div>
			
			<!--START image and details-->
			<div id="nd_cc_single_cpt_1_image_and_box" class="nd_cc_section nd_cc_padding_15 nd_cc_box_sizing_border_box nd_cc_display_table">
				
				'.$nd_cc_image_iframe.'
		        '.$nd_cc_image_details_box_content.'

		    </div>
		    <!--START image and details-->';

        }
        //END image or custom content
	    


	    //page layout
	    if ( $nd_cc_meta_box_page_layout == 'nd_cc_meta_box_page_layout_full_width' ) { 
	    	$nd_cc_meta_box_page_layout_content_width = 'nd_cc_width_100_percentage';
	    	$nd_cc_meta_box_page_layout_content_class = 'nd_cc_padding_15 nd_cc_box_sizing_border_box';	
	    }elseif ( $nd_cc_meta_box_page_layout == 'nd_cc_meta_box_page_layout_right_sidebar' ) {
	    	$nd_cc_meta_box_page_layout_content_width = 'nd_cc_width_66_percentage';	
	    	$nd_cc_meta_box_page_layout_content_class = 'nd_cc_padding_15 nd_cc_box_sizing_border_box';	
	    }elseif ( $nd_cc_meta_box_page_layout == 'nd_cc_meta_box_page_layout_left_sidebar' ){
	    	$nd_cc_meta_box_page_layout_content_width = 'nd_cc_width_66_percentage';	
	    	$nd_cc_meta_box_page_layout_content_class = 'nd_cc_padding_15 nd_cc_box_sizing_border_box';
	    }else{

	    }


	    //free content
	    if ( $nd_cc_meta_box_page_layout == 'nd_cc_meta_box_page_layout_free_content' ) {

	    	$nd_cc_result .= '<p>'.$nd_cc_content.'</p>';

	    }else{

		  	$nd_cc_result .= '


		  		<!--START CONTENT-->
				<div class="nd_cc_width_100_percentage nd_cc_float_left">
				 
				    <div class="nd_cc_section">

				    	
				    	'.$nd_cc_image_content;

				       
				    	//START left sidebar
				    	if ( $nd_cc_meta_box_page_layout == 'nd_cc_meta_box_page_layout_left_sidebar' ) { 
				    		
				    		$nd_cc_result .= '
				    		<div class="nd_cc_float_left nd_cc_sidebar nd_cc_padding_15 nd_cc_box_sizing_border_box nd_cc_width_33_percentage nd_cc_width_100_percentage_responsive">';

				    			echo $nd_cc_result;
					    		dynamic_sidebar("nd_cc_sidebar_cpt_1");
					    	
					    	$nd_cc_result = '
					    	</div>';
				    		
				    	}
				    	//END left sidebar
	 

				    	$nd_cc_result .= '
				    	<div class="nd_cc_float_left '.$nd_cc_meta_box_page_layout_content_width.' nd_cc_width_100_percentage_responsive ">
				        	<div class=" nd_cc_width_100_percentage '.$nd_cc_meta_box_page_layout_content_class.' ">

						        <div class="nd_cc_section nd_cc_height_20"></div>

					        	<p>'.$nd_cc_content.'</p>

					        	<div class="nd_cc_section nd_cc_height_40"></div>

					        	<style>
					        	@media only screen and (min-width: 320px) and (max-width: 767px) {
					        	.nd_cc_single_project_tags_container a { float:left; width:100%; margin:5px 0px 5px 0px; display:inline-block; box-sizing:border-box; line-height:25px; }	
					        	}
					        	</style>
								<div class="nd_cc_section nd_cc_single_project_tags_container">
									'.get_the_tag_list('<p class="nd_options_first_font nd_options_color_greydark">'.__('TAGS','nd-projects').' : ','','</p>').'
								</div>

					        </div>
					    </div>';



				    	//START right sidebar
				    	if ( $nd_cc_meta_box_page_layout == 'nd_cc_meta_box_page_layout_right_sidebar' ) { 
				    		
				    		$nd_cc_result .= '
				    		<div class="nd_cc_float_left nd_cc_sidebar nd_cc_margin_top_50_responsive nd_cc_padding_15 nd_cc_box_sizing_border_box nd_cc_width_33_percentage nd_cc_width_100_percentage_responsive">';

				    			echo $nd_cc_result;
					    		dynamic_sidebar("nd_cc_sidebar_cpt_1");
					    	
					    	$nd_cc_result = '
					    	</div>';
				    		
				    	}
				    	//END right sidebar



				    	
				    $nd_cc_result .= '
				    </div>

				</div> 
				<!--END CONTENT-->

				<div class="nd_cc_section nd_cc_height_50"></div>

			';

		}
  
	endwhile;
endif;


if ( nd_cc_get_container() != 1 ) { $nd_cc_result .= '</div>'; }

$nd_cc_result .= '</div>';







/*START similar projects*/
if ( $nd_cc_meta_box_page_layout != 'nd_cc_meta_box_page_layout_free_content' ) {

$nd_cc_meta_box_related_projects = get_post_meta( get_the_ID(), 'nd_cc_meta_box_related_projects', true );
if ( $nd_cc_meta_box_related_projects != '' ) {

	$nd_cc_meta_box_related_projects_array = explode(',', $nd_cc_meta_box_related_projects );

	//START content
	if ( $nd_cc_meta_box_related_projects_array != '' ) {

		wp_enqueue_script('masonry');

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

		<div id="nd_cc_single_project_related_p" class="nd_cc_section nd_cc_border_top_1_solid_grey">
	
			<div class="nd_cc_section nd_cc_height_70"></div>';

			if ( nd_cc_get_container() != 1) {  $nd_cc_result .= '
			<div class="nd_cc_container nd_cc_box_sizing_border_box nd_cc_clearfix">'; }

				$nd_cc_result .= '
				<h3 class="nd_options_color_grey nd_cc_text_align_center nd_cc_letter_spacing_2">'.__('CHECK ALL','nd-projects').'</h3>
				<div class="nd_cc_section nd_cc_height_30"></div>
				<h1 class="nd_cc_text_align_center nd_cc_font_size_50 nd_cc_line_height_50">'.__('Latest Projects','nd-projects').'</h1>
				<div class="nd_cc_section nd_cc_height_25"></div>

				<!--START MASONRY-->
				<div class="nd_cc_section nd_cc_masonry_content">';
	}
	//END content



	//START CICLE
	for ($nd_cc_meta_box_related_projects_array_i = 0; $nd_cc_meta_box_related_projects_array_i < count($nd_cc_meta_box_related_projects_array)-1; $nd_cc_meta_box_related_projects_array_i++) {
		
		$nd_cc_page_by_path = get_page_by_path($nd_cc_meta_box_related_projects_array[$nd_cc_meta_box_related_projects_array_i],OBJECT,'nd_cc_cpt_1');

		$nd_cc_rel_id = $nd_cc_page_by_path->ID;
		$nd_cc_title = get_the_title( $nd_cc_rel_id );
		$nd_cc_permalink = get_permalink( $nd_cc_rel_id );

		//metabox
		$nd_cc_meta_box_color = get_post_meta( $nd_cc_rel_id, 'nd_cc_meta_box_color', true ); if ($nd_cc_meta_box_color == '') { $nd_cc_meta_box_color = '#ebc858'; }
		$nd_cc_meta_box_text_preview = get_post_meta( $nd_cc_rel_id, 'nd_cc_meta_box_text_preview', true );

		//category
		$nd_cc_terms_category_project = wp_get_post_terms( $nd_cc_rel_id, 'nd_cc_cpt_1_tax_1', array("fields" => "all"));
		$nd_cc_terms_category_project_results = '';
		$nd_cc_project_category = '';
		foreach ($nd_cc_terms_category_project as $nd_cc_term_category_project) { $nd_cc_terms_category_project_results = $nd_cc_term_category_project->name; }
		if ( $nd_cc_terms_category_project_results != '' ) {
		    $nd_cc_project_category = '<a class="nd_options_color_white nd_cc_font_size_13 nd_cc_position_absolute nd_cc_right_30 nd_cc_padding_top_5 nd_cc_top_30 nd_cc_line_height_13 nd_cc_text_transform_uppercase nd_cc_bg_greydark nd_cc_padding_3_10 nd_cc_letter_spacing_2" href="'.$nd_cc_permalink.'">'.$nd_cc_terms_category_project_results.'</a>';
		}


		//image
		if ( has_post_thumbnail() ) { 

		    $nd_cc_image_id = get_post_thumbnail_id( $nd_cc_rel_id );
		    $nd_cc_image_attributes = wp_get_attachment_image_src( $nd_cc_image_id, 'nd_cc_image_size_700_1000' );

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
		<div id="nd_cc_relp_cpt_1_single_'.$nd_cc_rel_id.'" class=" nd_cc_rel_projects_component_l1 nd_cc_masonry_item nd_cc_width_33_percentage nd_cc_width_100_percentage_responsive">

		    <div class="nd_cc_section nd_cc_padding_15 nd_cc_box_sizing_border_box">

		        <div class="nd_cc_section">
		            
		        	'.$nd_cc_image.'    
		   
		        </div>

		    </div>

		</div>';

	}
	//END CICLE


	//START close content
	if ( $nd_cc_meta_box_related_projects_array != '' ) {

		$nd_cc_result .= '
				</div>
				<!--END MASONRY-->';


			if ( nd_cc_get_container() != 1) {  $nd_cc_result .= '
			</div>'; }


			$nd_cc_result .= '
			<div class="nd_cc_section nd_cc_height_60"></div>

		</div>';
	}
	//END close content


}	
}	
/*END similar projects*/








/*START project navigation*/
if ( $nd_cc_meta_box_page_layout != 'nd_cc_meta_box_page_layout_free_content' ) {

//next link
$nd_cc_next_project_result = '';
$nd_cc_next_project = get_next_post();
if ( !empty( $nd_cc_next_project ) ){
    $nd_cc_next_project_link = get_permalink( $nd_cc_next_project->ID ); 
    
    $nd_cc_next_project_result .= '

        <a href="'.$nd_cc_next_project_link.'"><img alt="" class=" " width="20" src="'.esc_url(plugins_url('icon-next-white.svg', __FILE__ )).'"></a>

    ';
}


$nd_cc_result .= '
<div style="background-color:'.$nd_cc_meta_box_color.'" id="nd_cc_single_project_navigation" class="nd_cc_section">';

	if ( nd_cc_get_container() != 1) {  $nd_cc_result .= '
	<div class="nd_cc_container nd_cc_box_sizing_border_box nd_cc_clearfix">'; }


		$nd_cc_result .= '
		<div class="nd_cc_section nd_cc_height_10"></div>';


		/*START PREV PROJECT*/
		$nd_cc_prev_project = get_previous_post();
		if ( !empty( $nd_cc_prev_project ) ){

		$nd_cc_result .= '
		<div class="nd_cc_float_left nd_cc_padding_15 nd_cc_box_sizing_border_box nd_cc_width_40_percentage">

			<div class="nd_cc_section nd_cc_position_relative">

				<a href="'.get_permalink( $nd_cc_prev_project->ID ).'"><img width="50" class="nd_cc_position_absolute nd_cc_left_0 nd_cc_top_0" src="'.get_the_post_thumbnail_url($nd_cc_prev_project->ID,'thumbnail').'"></a>

				<div class="nd_cc_section nd_cc_padding_left_70 nd_cc_box_sizing_border_box nd_cc_display_none_responsive">
					<h4 class="nd_options_color_white">'.get_the_title($nd_cc_prev_project->ID).'</h4>
					<div class="nd_cc_section nd_cc_height_8"></div>
					<a class=" nd_cc_font_size_13 nd_cc_padding_top_5 nd_cc_display_inline_block nd_cc_line_height_13 nd_cc_text_transform_uppercase nd_cc_bg_white nd_cc_padding_3_10 nd_cc_letter_spacing_2" href="'.get_permalink( $nd_cc_prev_project->ID ).'">'.__('PREV','nd-projects').'</a>
				</div>

			</div>

		</div>';

		}else{

		$nd_cc_result .= '
		<div class="nd_cc_float_left nd_cc_padding_15 nd_cc_box_sizing_border_box nd_cc_width_40_percentage"></div>';

		}
		/*END PREV PROJECT*/

		
		$nd_cc_result .= '
		<div class="nd_cc_float_left nd_cc_padding_15 nd_cc_box_sizing_border_box nd_cc_width_20_percentage nd_cc_text_align_center">
			<a href="'.get_post_type_archive_link('nd_cc_cpt_1').'"><img class="nd_cc_margin_top_12" width="30" src="'.esc_url(plugins_url('icon-archive-white.png', __FILE__ )).'"></a>
		</div>';


		/*START NEXT PROJECT*/
		$nd_cc_next_project = get_next_post();
		if ( !empty( $nd_cc_next_project ) ){
		
		$nd_cc_result .= '
		<div class="nd_cc_float_left nd_cc_padding_15 nd_cc_box_sizing_border_box nd_cc_width_40_percentage">

			<div class="nd_cc_section nd_cc_position_relative nd_cc_text_align_right">

				<a href="'.get_permalink( $nd_cc_next_project->ID ).'"><img width="50" class="nd_cc_position_absolute nd_cc_right_0 nd_cc_top_0" src="'.get_the_post_thumbnail_url($nd_cc_next_project->ID,'thumbnail').'"></a>

				<div class="nd_cc_section nd_cc_padding_right_70 nd_cc_box_sizing_border_box nd_cc_display_none_responsive">
					<h4 class="nd_options_color_white">'.get_the_title($nd_cc_next_project->ID).'</h4>
					<div class="nd_cc_section nd_cc_height_8"></div>
					<a class=" nd_cc_font_size_13 nd_cc_padding_top_5 nd_cc_display_inline_block nd_cc_line_height_13 nd_cc_text_transform_uppercase nd_cc_bg_white nd_cc_padding_3_10 nd_cc_letter_spacing_2" href="'.get_permalink( $nd_cc_next_project->ID ).'">'.__('NEXT','nd-projects').'</a>
				</div>

			</div>

		</div>';

		}else{

		$nd_cc_result .= '
		<div class="nd_cc_float_left nd_cc_padding_15 nd_cc_box_sizing_border_box nd_cc_width_40_percentage"></div>';

		}
		/*END NEXT PROJECT*/



		$nd_cc_result .= '
		<div class="nd_cc_section nd_cc_height_10"></div>';


	if ( nd_cc_get_container() != 1) {  $nd_cc_result .= '
	</div>'; }

$nd_cc_result .= '
</div>
';
}
/*END project navigation*/








echo $nd_cc_result;


//footer
get_footer( );


