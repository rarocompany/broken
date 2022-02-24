<?php

  
$str .= '

	<div id="nd_options_autocomplete_search_container" class="nd_options_section nd_options_position_relative nd_options_z_index_98 '.$nd_options_class.' ">
		<form method="get" action="'.esc_url(home_url()).'">
		    
		    <input id="nd_options_autocomplete_search" autocomplete="off" value="" name="s" class="nd_options_width_100_percentage" type="text" placeholder="'.__('Search','nd-shortcodes').' ...">
		    <input type="hidden" id="nd_options_autocomplete_search_category_slug" name="category_name" value="'.$nd_options_category_slug.'">
		    <input class="nd_options_cursor_pointer nd_options_position_absolute nd_options_border_width_0 nd_options_right_0 nd_options_top_0" type="submit" id="nd_options_autocomplete_search_button" value="">
		    
		    <!--results-->
		    <div id="nd_options_autocomplete_search_result" class="nd_options_top_45 nd_options_margin_top_20 nd_options_box_sizing_border_box nd_options_position_absolute nd_options_bg_white nd_options_width_100_percentage"></div>

		</form>
	</div>



	<style type="text/css">
		/* autocomplete */
		#nd_options_autocomplete_search_button { 
		    background-image: url("'.esc_url(plugins_url('icon-search-grey.svg', __FILE__ )).'"); 
		    background-size: 20px;
		    background-repeat: no-repeat;
		    background-position: left;
		    width: 40px;
		    height: 40px;
		    border: 0px solid #f1f1f1;
		    background-color: transparent;
		}

		#nd_options_autocomplete_search{
			border-radius: 25px;
			font-size:15px;
			border-bottom: 0px solid #f1f1f1;
		}

		#nd_options_autocomplete_search_loader {
		    background-image: url("'.esc_url(plugins_url('icon-loader-grey.svg', __FILE__ )).'"); 
		    background-size: 15px;
		    background-repeat: no-repeat;
		    background-position: center;
		    width: 40px;
		    height: 40px;
		    right: 47px; 
		}

		#nd_options_site_filter.nd_options_active {
		    background-color: rgba(101, 100, 96, 0.90);
		    position: fixed;
		    width: 100%;
		    height: 100%;
		    cursor: zoom-out;
		    z-index:9;
		}

		#nd_options_btn_view_more_results {
			border-radius:0px;
		}
	</style>


';