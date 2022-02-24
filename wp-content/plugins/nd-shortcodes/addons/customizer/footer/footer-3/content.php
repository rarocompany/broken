<?php 

//get all datas
$nd_options_customizer_footer_3_bg = get_option( 'nd_options_customizer_footer_3_bg' );
if ( $nd_options_customizer_footer_3_bg == '' ) { $nd_options_customizer_footer_3_bg = '#444444';  }

$nd_options_customizer_footer_3_text_color = get_option( 'nd_options_customizer_footer_3_text_color' );
if ( $nd_options_customizer_footer_3_text_color == '' ) { $nd_options_customizer_footer_3_text_color = '#a3a3a3';  }

$nd_options_customizer_footer_3_content_1 = get_option( 'nd_options_customizer_footer_3_content_1' );
if ( $nd_options_customizer_footer_3_content_1 == '' ) { $nd_options_customizer_footer_3_content_1 = 'Copyright 2016';  }

$nd_options_customizer_footer_3_content_2 = get_option( 'nd_options_customizer_footer_3_content_2' );
if ( $nd_options_customizer_footer_3_content_2 == '' ) { $nd_options_customizer_footer_3_content_2 = 'nicdark.com';  }

?>

<div id="nd_options_footer_3" style="background-color: <?php echo $nd_options_customizer_footer_3_bg; ?>" class="nd_options_section nd_options_text_align_center">
    
    <!--start container-->
    <div class="nd_options_container nd_options_clearfix">

        <div class="nd_options_nd_options_grid_12">

        	<div class="nd_options_section nd_options_height_40"></div>
               
        	<h2 style="color: <?php echo $nd_options_customizer_footer_3_text_color; ?>"><?php echo $nd_options_customizer_footer_3_content_1; ?></h2>
        	<div class="nd_options_section nd_options_height_20"></div>
        	<h5 style="color: <?php echo $nd_options_customizer_footer_3_text_color; ?>"><?php echo $nd_options_customizer_footer_3_content_2; ?></h5>

        	<div class="nd_options_section nd_options_height_40"></div>

        </div>

    </div>
    <!--end container-->

</div>