<?php 

//get all datas
$nd_options_customizer_footer_1_bg = get_option( 'nd_options_customizer_footer_1_bg' );
if ( $nd_options_customizer_footer_1_bg == '' ) { $nd_options_customizer_footer_1_bg = '#444444';  }

$nd_options_customizer_footer_1_text_color = get_option( 'nd_options_customizer_footer_1_text_color' );
if ( $nd_options_customizer_footer_1_text_color == '' ) { $nd_options_customizer_footer_1_text_color = '#a3a3a3';  }

$nd_options_customizer_footer_1_content = get_option( 'nd_options_customizer_footer_1_content' );
if ( $nd_options_customizer_footer_1_content == '' ) { $nd_options_customizer_footer_1_content = 'Copyright 2016 nicdark.com';  }

?>

<div id="nd_options_footer_1" style="background-color: <?php echo $nd_options_customizer_footer_1_bg; ?>" class="nd_options_section nd_options_text_align_center">
    
    <!--start container-->
    <div class="nd_options_container nd_options_clearfix">

        <div class="nd_options_nd_options_grid_12">

        	<div class="nd_options_section nd_options_height_10"></div>
               
        	<p style="color: <?php echo $nd_options_customizer_footer_1_text_color; ?>"><?php echo $nd_options_customizer_footer_1_content; ?></p>

        	<div class="nd_options_section nd_options_height_10"></div>

        </div>

    </div>
    <!--end container-->

</div>