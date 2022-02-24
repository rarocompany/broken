<?php


function nd_options_add_header_img_on_events_calendar_pages(){



	//add header image on single event
	if ( is_singular( 'tribe_events' ) OR is_post_type_archive('tribe_events') ) {


		//get values
		$nd_options_customizer_eventscalendar_header_image_display = get_option( 'nd_options_customizer_eventscalendar_header_image_display' );
		if ( $nd_options_customizer_eventscalendar_header_image_display == '' ) { $nd_options_customizer_eventscalendar_header_image_display = 0;  }

		$nd_options_customizer_eventscalendar_header_image = get_option( 'nd_options_customizer_eventscalendar_header_image' );
		if ( $nd_options_customizer_eventscalendar_header_image == '' ) { 
		    $nd_options_customizer_eventscalendar_header_image_src = '';  
		}else{
		    $nd_options_customizer_eventscalendar_header_image_src = wp_get_attachment_url($nd_options_customizer_eventscalendar_header_image);
		}

		$nd_options_customizer_eventscalendar_header_image_position = get_option( 'nd_options_customizer_eventscalendar_header_image_position' );
		if ( $nd_options_customizer_eventscalendar_header_image_position == '' ) { $nd_options_customizer_eventscalendar_header_image_position = 'nd_options_background_position_center';  }

		//margin class
		if ( is_singular( 'tribe_events' )) {
			$nd_options_customizer_eventscalendar_margin_bottom = 'nd_options_margin_bottom_70 nd_options_position_relative nd_options_z_index_9';
		}else{
			$nd_options_customizer_eventscalendar_margin_bottom = '';
		}


		if ( $nd_options_customizer_eventscalendar_header_image_display != 1 ) { 	

			echo '

			<div id="nd_options_eventscalendar_header_img" class=" '.$nd_options_customizer_eventscalendar_margin_bottom.' nd_options_section nd_options_background_size_cover '.$nd_options_customizer_eventscalendar_header_image_position.' " style="background-image:url('.$nd_options_customizer_eventscalendar_header_image_src.');">

			    <div class="nd_options_section nd_options_bg_greydark_alpha_2">

			        <!--start nd_options_container-->
			        <div class="nd_options_container nd_options_clearfix">

			            <div id="nd_options_eventscalendar_single_header_image_space_top" class="nd_options_section nd_options_height_130"></div>

			            <div class="nd_options_section nd_options_padding_15 nd_options_box_sizing_border_box">

			                <h1 class="nd_options_color_white nd_options_font_size_40 nd_options_font_size_40_all_iphone nd_options_line_height_40_all_iphone nd_options_first_font">'.__('Our Events','nd-shortcodes').'</h1>

			            </div>

			            <div id="nd_options_eventscalendar_single_header_image_space_bottom" class="nd_options_section nd_options_height_130"></div>

			        </div>
			        <!--end container-->

			    </div>

			</div>';   
		    
		} 


	}
	//END add header image on single event
	

}
add_action('nicdark_header_after_navigation','nd_options_add_header_img_on_events_calendar_pages');

