<?php 

//logo
$nd_options_customizer_header_2_logo = get_option( 'nd_options_customizer_header_2_logo' );
if ( $nd_options_customizer_header_2_logo == '' ) { 
    $nd_options_customizer_header_2_logo = esc_url(plugins_url('img/logo.png', __FILE__ ));
}else{
    $nd_options_customizer_header_2_logo = wp_get_attachment_url($nd_options_customizer_header_2_logo);
}

//logo responsive
$nd_options_customizer_header_2_logo_responsive = get_option( 'nd_options_customizer_header_2_logo_responsive' );
if ( $nd_options_customizer_header_2_logo_responsive == '' ) { 
    $nd_options_customizer_header_2_logo_responsive = esc_url(plugins_url('img/logo.png', __FILE__ ));
}else{
    $nd_options_customizer_header_2_logo_responsive = wp_get_attachment_url($nd_options_customizer_header_2_logo_responsive);
}


//icon menu responsive
$nd_options_customizer_header_2_icon_responsive_menu = get_option( 'nd_options_customizer_header_2_icon_responsive_menu' );
if ( $nd_options_customizer_header_2_icon_responsive_menu == '' ) { 
    $nd_options_customizer_header_2_icon_responsive_menu = esc_url(plugins_url('img/icon-menu.svg', __FILE__ ));
}else{
    $nd_options_customizer_header_2_icon_responsive_menu = wp_get_attachment_url($nd_options_customizer_header_2_icon_responsive_menu);
}


$nd_options_customizer_header_2_logo_width = get_option( 'nd_options_customizer_header_2_logo_width' );
if ( $nd_options_customizer_header_2_logo_width == '' ) { $nd_options_customizer_header_2_logo_width = '170';  }

$nd_options_customizer_header_2_logo_margin_top = get_option( 'nd_options_customizer_header_2_logo_margin_top' );
if ( $nd_options_customizer_header_2_logo_margin_top == '' ) { $nd_options_customizer_header_2_logo_margin_top = '24';  }


//get all datas
$nd_options_customizer_header_2_margin = get_option( 'nd_options_customizer_header_2_margin' );
if ( $nd_options_customizer_header_2_margin == '' ) { $nd_options_customizer_header_2_margin = '10';  }

$nd_options_customizer_header_2_bg = get_option( 'nd_options_customizer_header_2_bg' );
if ( $nd_options_customizer_header_2_bg == '' ) { $nd_options_customizer_header_2_bg = '#ffffff';  }

$nd_options_customizer_header_2_bg_responsive = get_option( 'nd_options_customizer_header_2_bg_responsive' );
if ( $nd_options_customizer_header_2_bg_responsive == '' ) { $nd_options_customizer_header_2_bg_responsive = '#000';  }

$nd_options_customizer_header_2_bg_transparent = get_option( 'nd_options_customizer_header_2_bg_transparent' );
if ( $nd_options_customizer_header_2_bg_transparent == '' ) { $nd_options_customizer_header_2_bg_transparent = 0;  }

$nd_options_customizer_header_2_menu_color = get_option( 'nd_options_customizer_header_2_menu_color' );
if ( $nd_options_customizer_header_2_menu_color == '' ) { $nd_options_customizer_header_2_menu_color = '#727475';  }

$nd_options_customizer_header_2_divider_color = get_option( 'nd_options_customizer_header_2_divider_color' );
if ( $nd_options_customizer_header_2_divider_color == '' ) { $nd_options_customizer_header_2_divider_color = '#f1f1f1';  }

$nd_options_customizer_header_2_sticky = get_option( 'nd_options_customizer_header_2_sticky' );
if ( $nd_options_customizer_header_2_sticky == '' ) { $nd_options_customizer_header_2_sticky = 0;  }

//top header
$nd_options_customizer_top_header_2_bg = get_option( 'nd_options_customizer_top_header_2_bg' );
if ( $nd_options_customizer_top_header_2_bg == '' ) { $nd_options_customizer_top_header_2_bg = '#444444';  }

$nd_options_customizer_top_header_2_text_color = get_option( 'nd_options_customizer_top_header_2_text_color' );
if ( $nd_options_customizer_top_header_2_text_color == '' ) { $nd_options_customizer_top_header_2_text_color = '#a3a3a3';  }

$nd_options_customizer_top_header_2_left_content = get_option( 'nd_options_customizer_top_header_2_left_content' );
$nd_options_customizer_top_header_2_left_content = str_replace("&#039;","'",$nd_options_customizer_top_header_2_left_content);
if ( $nd_options_customizer_top_header_2_left_content == '' ) { $nd_options_customizer_top_header_2_left_content = 'ADD SOME TEXT THROUGH CUSTOMIZER';  }

$nd_options_customizer_top_header_2_right_content = get_option( 'nd_options_customizer_top_header_2_right_content' );
$nd_options_customizer_top_header_2_right_content = str_replace("&#039;","'",$nd_options_customizer_top_header_2_right_content);
if ( $nd_options_customizer_top_header_2_right_content == '' ) { $nd_options_customizer_top_header_2_right_content = 'ADD SOME TEXT THROUGH CUSTOMIZER';  }

$nd_options_customizer_top_header_2_display = get_option( 'nd_options_customizer_top_header_2_display' );
if ( $nd_options_customizer_top_header_2_display == '' ) { $nd_options_customizer_top_header_2_display = '0';  }

$nd_options_customizer_top_header_2_display_responsive = get_option( 'nd_options_customizer_top_header_2_display_responsive' );
if ( $nd_options_customizer_top_header_2_display_responsive == '' ) { $nd_options_customizer_top_header_2_display_responsive = 0;  }
if ( $nd_options_customizer_top_header_2_display_responsive == 0 ) { $nd_options_customizer_top_header_2_display_responsive_class = ''; }else{ $nd_options_customizer_top_header_2_display_responsive_class = 'nd_options_display_none_all_responsive'; }


//get font family H
$nd_options_customizer_font_family_h = get_option( 'nd_options_customizer_font_family_h', 'Montserrat:400,700' );
$nd_options_font_family_h_array = explode(":", $nd_options_customizer_font_family_h);
$nd_options_font_family_h = str_replace("+"," ",$nd_options_font_family_h_array[0]);
$nd_options_customizer_font_color_h = get_option( 'nd_options_customizer_font_color_h', '#727475' );


?>

<div id="nd_options_site_filter"></div>

<!--START js-->
<script type="text/javascript">
//<![CDATA[

jQuery(document).ready(function() {

  //START
  jQuery(function ($) {
    
    //OPEN sidebar content ( navigation 2 )
	$('.nd_options_open_navigation_2_sidebar_content,.nd_options_open_navigation_3_sidebar_content,.nd_options_open_navigation_4_sidebar_content,.nd_options_open_navigation_5_sidebar_content').on("click",function(event){
		$('.nd_options_navigation_2_sidebar_content,.nd_options_navigation_3_sidebar_content,.nd_options_navigation_4_sidebar_content,.nd_options_navigation_5_sidebar_content').css({
			'right': '0px',
		});
	});
	//CLOSE	sidebar content ( navigation 2 )
	$('.nd_options_close_navigation_2_sidebar_content,.nd_options_close_navigation_3_sidebar_content,.nd_options_close_navigation_4_sidebar_content,.nd_options_close_navigation_5_sidebar_content').on("click",function(event){
		$('.nd_options_navigation_2_sidebar_content,.nd_options_navigation_3_sidebar_content,.nd_options_navigation_4_sidebar_content,.nd_options_navigation_5_sidebar_content').css({
			'right': '-300px'
		});
	});
	///////////


  });
  //END

});

//]]>
</script>
<!--END js-->




<?php do_action('nd_options_hook_start_navigation'); ?>



<!--START menu responsive-->
<div style="background-color: <?php echo $nd_options_customizer_header_2_bg_responsive; ?> ;" class="nd_options_navigation_2_sidebar_content nd_options_padding_40 nd_options_box_sizing_border_box nd_options_overflow_hidden nd_options_overflow_y_auto nd_options_transition_all_08_ease nd_options_height_100_percentage nd_options_position_fixed nd_options_width_300 nd_options_right_300_negative nd_options_z_index_999">

    <img alt="" width="25" class="nd_options_close_navigation_2_sidebar_content nd_options_cursor_pointer nd_options_right_20 nd_options_top_20 nd_options_position_absolute" src="<?php echo esc_url(plugins_url('img/icon-close-white.svg', __FILE__ )); ?>">

    <div class="nd_options_navigation_2_sidebar">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    </div>

</div>
<!--END menu responsive-->




<?php if ( $nd_options_customizer_top_header_2_display != 1 ) { ?>

	<!--start TOP header-->
	<div class="nd_options_section <?php echo $nd_options_customizer_top_header_2_display_responsive_class; ?> ">

	    <div id="nd_options_navigation_2_top_header" style="background-color: <?php echo $nd_options_customizer_top_header_2_bg; ?> ;" class="nd_options_section">

	        <!--start nd_options_container-->
	        <div class="nd_options_container nd_options_clearfix">

	            <div style="color: <?php echo $nd_options_customizer_top_header_2_text_color; ?> ;" class="nd_options_grid_6 nd_options_padding_botttom_10 nd_options_padding_bottom_0_responsive nd_options_padding_top_10 nd_options_text_align_center_responsive">
	            	<div id="nd_options_navigation_top_header_2_left" class="nd_options_navigation_top_header_2 nd_options_display_inline_block_responsive">
	            		<?php echo do_shortcode($nd_options_customizer_top_header_2_left_content); ?>
	            	</div>
	            </div>

	            <div style="color: <?php echo $nd_options_customizer_top_header_2_text_color; ?> ;" class="nd_options_grid_6 nd_options_text_align_right nd_options_text_align_center_responsive nd_options_padding_top_0_responsive nd_options_padding_botttom_10 nd_options_padding_top_10">
	           		<div id="nd_options_navigation_top_header_2_right" class="nd_options_navigation_top_header_2 nd_options_display_inline_block_responsive">
	           			<?php echo do_shortcode($nd_options_customizer_top_header_2_right_content); ?>  
	           		</div>
	            </div>

	        </div>
	        <!--end container-->

	    </div>

	</div>
	<!--END TOP header-->

<?php } ?>





<!--START navigation-->
<div id="nd_options_navigation_2_container" class="nd_options_section nd_options_position_relative ">

    <div style="background-color: <?php echo $nd_options_customizer_header_2_bg; ?> ; border-bottom: 1px solid <?php echo $nd_options_customizer_header_2_divider_color; ?> ;" class="nd_options_section">

        <!--start nd_options_container-->
        <div class="nd_options_container nd_options_clearfix nd_options_position_relative">

            <div class="nd_options_grid_12 nd_options_display_none_all_responsive">

                <div style="height: <?php echo $nd_options_customizer_header_2_margin; ?>px;" class="nd_options_section"></div>

                <!--LOGO-->
                <a href="<?php echo home_url(); ?>"><img style="top:<?php echo $nd_options_customizer_header_2_logo_margin_top; ?>px;" alt="" class="nd_options_position_absolute nd_options_left_15" width="<?php echo $nd_options_customizer_header_2_logo_width; ?>" src="<?php echo $nd_options_customizer_header_2_logo; ?>"></a>
              
                <div class="nd_options_navigation_2 nd_options_navigation_type nd_options_text_align_right nd_options_float_right nd_options_display_none_all_responsive">
                    
                    <div class="nd_options_display_table">
	                	<div class="nd_options_display_table_cell nd_options_vertical_align_middle">
	                    	<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
	                	</div>

                    	<?php do_action('nd_options_hook_icons_navigation'); ?>

                	</div>

                </div> 


                


                <div style="height: <?php echo $nd_options_customizer_header_2_margin; ?>px;" class="nd_options_section"></div> 
                
            </div>



            <!--RESPONSIVE-->
			<div class="nd_options_section nd_options_text_align_center nd_options_display_none nd_options_display_block_responsive">
			    <div class="nd_options_section nd_options_height_20"></div>
			    
			    <a class="nd_options_display_inline_block" href="<?php echo home_url(); ?>"><img alt="" class="nd_options_float_left" width="<?php echo $nd_options_customizer_header_2_logo_width; ?>" src="<?php echo $nd_options_customizer_header_2_logo_responsive; ?>"></a> 
				
				<div class="nd_options_section nd_options_height_10"></div>

				<div class="nd_options_section">
			        <a class="nd_options_open_navigation_2_sidebar_content nd_options_open_navigation_2_sidebar_content" href="#">
			            <img alt="" class="" width="25" src="<?php echo $nd_options_customizer_header_2_icon_responsive_menu; ?>">
			        </a>
			    </div>

			    <div class="nd_options_section nd_options_height_20"></div>
			</div>
			<!--RESPONSIVE-->


        
        </div>
        <!--end container-->

    </div>


</div>
<!--END navigation-->




<!--START STICKY-->
<?php if ( $nd_options_customizer_header_2_sticky == 1 ) { ?>


	<!--START js-->
	<script type="text/javascript">
	//<![CDATA[

	jQuery(window).scroll(function(){
		nd_options_add_class_scroll();
	});

	nd_options_add_class_scroll();

	function nd_options_add_class_scroll() {
		if(jQuery(window).scrollTop() > 1000) {
			jQuery('#nd_options_navigation_2_sticky_container').addClass('nd_options_navigation_2_sticky_move_down');
			jQuery('#nd_options_navigation_2_sticky_container').removeClass('nd_options_navigation_2_sticky_move_up');
		} else {
			jQuery('#nd_options_navigation_2_sticky_container').addClass('nd_options_navigation_2_sticky_move_up');
			jQuery('#nd_options_navigation_2_sticky_container').removeClass('nd_options_navigation_2_sticky_move_down');
		}
	}

	//]]>
	</script>


	<style>
	#nd_options_navigation_2_sticky_container{ -webkit-transition: all 0.8s ease; -moz-transition: all 0.8s ease; -o-transition: all 0.8s ease; -ms-transition: all 0.8s ease; transition: all 0.8s ease;}
	.nd_options_navigation_2_sticky_move_down{ margin-top: 0px; }
	.nd_options_navigation_2_sticky_move_up{ margin-top: -100px; }
	</style>


	<!--START navigation-->
	<div id="nd_options_navigation_2_sticky_container" class="nd_options_section nd_options_position_fixed nd_options_z_index_10 nd_options_navigation_2_sticky_move_up nd_options_display_none_all_responsive">

	    <div style="background-color: <?php echo $nd_options_customizer_header_2_bg; ?> ; border-bottom: 1px solid <?php echo $nd_options_customizer_header_2_divider_color; ?> ;" class="nd_options_section">

	    	<div style="height: 20px;" class="nd_options_section"></div> 

			<div class="nd_options_navigation_2 nd_options_navigation_type nd_options_text_align_center nd_options_display_none_all_responsive">
			    
		    	<div class="nd_options_display_inline_block">
		        	<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		    	</div>

			</div> 

			<div style="height: 20px;" class="nd_options_section"></div> 

	    </div>


	</div>
	<!--END navigation-->


<?php } ?>
<!--END STICKY-->




