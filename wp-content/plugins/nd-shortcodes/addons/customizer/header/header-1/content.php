<?php 

//get all datas
$nd_options_customizer_header_1_bg = get_option( 'nd_options_customizer_header_1_bg' );
if ( $nd_options_customizer_header_1_bg == '' ) { $nd_options_customizer_header_1_bg = '#444444';  }

$nd_options_customizer_header_1_menu_color = get_option( 'nd_options_customizer_header_1_menu_color' );
if ( $nd_options_customizer_header_1_menu_color == '' ) { $nd_options_customizer_header_1_menu_color = '#ffffff';  }

$nd_options_customizer_header_1_tagline_color = get_option( 'nd_options_customizer_header_1_tagline_color' );
if ( $nd_options_customizer_header_1_tagline_color == '' ) { $nd_options_customizer_header_1_tagline_color = '#a3a3a3';  }

$nd_options_customizer_header_1_divider_color = get_option( 'nd_options_customizer_header_1_divider_color' );
if ( $nd_options_customizer_header_1_divider_color == '' ) { $nd_options_customizer_header_1_divider_color = '#5a5a5a';  }


?>

<div id="nd_options_site_filter"></div>

<!--START section-->
<div id="nd_options_header" style="background-color: <?php echo $nd_options_customizer_header_1_bg; ?> ;" class="nd_options_section">
    
    <!--start container-->
    <div class="nd_options_container nd_options_clearfix">

        
        <div class="nd_options_grid_3 nd_options_text_align_center_responsive">
        	<div class="nd_options_section nd_options_height_10"></div>
        	<a class="" href="<?php echo home_url(); ?>"><h3 style="color: <?php echo $nd_options_customizer_header_1_menu_color ?> ;"><?php echo get_bloginfo( 'name' ); ?></h3></a>
        	<div class="nd_options_section nd_options_height_10"></div>
        	<a href="<?php echo home_url(); ?>"><p style="color: <?php echo $nd_options_customizer_header_1_tagline_color ?> ;" class="nd_options_font_size_13"><?php echo get_bloginfo( 'description' ); ?></p></a>
        	<div class="nd_options_section nd_options_height_10"></div>
        </div>


        <div class="nd_options_grid_9 nd_options_text_align_center_responsive">

        	<div class="nd_options_section nd_options_height_10"></div>
               
        	<div class="nd_options_section nd_options_navigation_1 nd_options_navigation_type">        
        		<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>       
        	</div>

        	<div class="nd_options_section nd_options_height_10"></div>

        </div>

    </div>
    <!--end container-->

</div>
<!--END section-->
