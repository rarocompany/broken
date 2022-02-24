<?php


add_action('nd_options_hook_start_navigation','nd_options_add_js_and_search_content_navigation');
//START add js and content for search
function nd_options_add_js_and_search_content_navigation(){ ?>



	<?php

	$nd_options_customizer_header_search_display = get_option( 'nd_options_customizer_header_search_display' );
	
	if ( $nd_options_customizer_header_search_display == '' ) { $nd_options_customizer_header_search_display = 0;  }

	if ( $nd_options_customizer_header_search_display == 1 ) { ?>


		<!--START js-->
		<script type="text/javascript">
		//<![CDATA[

		jQuery(document).ready(function() {

		  //START
		  jQuery(function ($) {
		    
			//OPEN search	
			$('.nd_options_navigation_open_search_content').on("click",function(event){
				$('.nd_options_navigation_search_content').css({
					'z-index': '9999',
					'opacity': '1',
				});
			});
			$('.nd_options_navigation_close_search_content').on("click",function(event){
				$('.nd_options_navigation_search_content').css({
					'z-index': '-1',
					'opacity': '0',
				});
			});
			///////////

		  });
		  //END

		});

		//]]>
		</script>
		<!--END js-->


		<!--START search container-->
		<div class="nd_options_display_table nd_options_transition_all_08_ease nd_options_navigation_search_content nd_options_bg_greydark_alpha_9 nd_options_position_fixed nd_options_width_100_percentage nd_options_height_100_percentage nd_options_z_index_1_negative nd_options_opacity_0">

		    <!--close-->
		    <div class="nd_options_cursor_zoom_out nd_options_navigation_close_search_content nd_options_width_100_percentage nd_options_height_100_percentage nd_options_position_absolute nd_options_z_index_1_negative"></div>


		    <div class="nd_options_display_table_cell nd_options_vertical_align_middle nd_options_text_align_center">
		        

		    	<form class="nd_options_navigation_search_content_form" method="get" action="<?php echo home_url( '/' ); ?>">
				  <input class="nd_options_first_font" type="search" placeholder="<?php _e('Keyword','nd-shortcodes'); ?>" value="" name="s" />
				  <input class="" type="submit" value="<?php _e('Search','nd-shortcodes'); ?>" />
				</form>


		    </div>
		          
		</div>
		<!--END search container-->

	<?php }

}




add_action('nd_options_hook_icons_navigation','nd_options_add_navigation_icon_search');
//START add icon search
function nd_options_add_navigation_icon_search(){ ?>

	<?php

	$nd_options_customizer_header_search_display = get_option( 'nd_options_customizer_header_search_display' );
	
	if ( $nd_options_customizer_header_search_display == '' ) { $nd_options_customizer_header_search_display = 0;  }

	if ( $nd_options_customizer_header_search_display == 1 ) { ?>

		
		<?php
		//icon
		$nd_options_customizer_header_search_icon = get_option( 'nd_options_customizer_header_search_icon' );
		if ( $nd_options_customizer_header_search_icon == '' ) { 
		    $nd_options_customizer_header_search_icon = esc_url(plugins_url('icon-search-grey.svg', __FILE__ )); 
		}else{
		    $nd_options_customizer_header_search_icon = wp_get_attachment_url($nd_options_customizer_header_search_icon);
		}
		?>

	
		<div id="nd_options_container_search_icon_navigation" class="nd_options_display_table_cell nd_options_vertical_align_middle">
			<a class="nd_options_navigation_open_search_content nd_options_margin_left_20 nd_options_float_left" href="#"><img alt="" class=" nd_options_float_left nd_options_opacity_05_hover nd_options_transition_all_08_ease" width="25" src="<?php echo $nd_options_customizer_header_search_icon; ?>"></a>
		</div>

		
	<?php }

}




//put style.css on head
function nd_options_add_navigation_icon_search_style(){ ?>

	<!--START css-->
	<style type="text/css">

		.nd_options_navigation_search_content_form {  }
		.nd_options_navigation_search_content_form input[type="search"] { 
			background: none;
			border: 0px;
			border-bottom: 2px solid #fff;
			color: #fff;
			font-size: 30px;
			line-height: 30px;
		}
		.nd_options_navigation_search_content_form input[type="search"]::-webkit-input-placeholder { color: #fff; }
		.nd_options_navigation_search_content_form input[type="submit"]{ 
			font-size: 25px;
		    line-height: 40px;
		    margin-left: 20px;
		}
		
	</style>
	<!--END css-->

<?php }
add_action('wp_head','nd_options_add_navigation_icon_search_style');
