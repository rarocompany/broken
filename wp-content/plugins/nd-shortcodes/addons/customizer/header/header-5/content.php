<?php 

//get all datas
$nd_options_customizer_header_5_content = get_option( 'nd_options_customizer_header_5_content' );
if ( $nd_options_customizer_header_5_content == '' ) { $nd_options_customizer_header_5_content = '';  }

//get all datas
$nd_options_customizer_header_5_content_mobile = get_option( 'nd_options_customizer_header_5_content_mobile' );
if ( $nd_options_customizer_header_5_content_mobile == '' ) { $nd_options_customizer_header_5_content_mobile = '';  }


?>


<!--START header 5-->
<div id="nd_options_header_5" class="nd_options_section nd_options_display_none_all_responsive">

    <!--start nd_options_container-->
    <div class="nd_options_container nd_options_clearfix nd_options_position_relative nd_options_z_index_999">

        <?php

        if ( $nd_options_customizer_header_5_content != '') {

            $nd_options_post_h   = get_post($nd_options_customizer_header_5_content);
            $nd_options_post_output_h =  apply_filters( 'the_content', $nd_options_post_h->post_content );
            
            //echo all footer page
            echo $nd_options_post_output_h;

            $nd_options_strings_h  = $nd_options_post_h->post_content;
            $nd_options_pieces_h = explode('css=".vc_custom_', $nd_options_strings_h);
            
            //get how many styles inserted
            $nd_options_qnt_styles_h = count($nd_options_pieces_h)-1;


            //echo style
            echo '<style>';
            for ($nd_options_i_h = 1; $nd_options_i_h <= $nd_options_qnt_styles_h; $nd_options_i_h++) {
                $nd_options_tests_h = explode(';}"][', $nd_options_pieces_h[$nd_options_i_h]);
                echo '.vc_custom_'.$nd_options_tests_h[0].';}';
            }
            echo '</style>';

        }

        ?>

    </div>
    <!--end container-->

</div>
<!--END header 5-->




<!--START header 5-->
<div id="nd_options_header_5_mobile" class="nd_options_section nd_options_display_none nd_options_display_block_responsive">

    <!--start nd_options_container-->
    <div class="nd_options_container nd_options_clearfix">

        <?php

        if ( $nd_options_customizer_header_5_content_mobile != '') {

            $nd_options_post_h_m   = get_post($nd_options_customizer_header_5_content_mobile);
            $nd_options_post_output_h_m =  apply_filters( 'the_content', $nd_options_post_h_m->post_content );
            
            //echo all footer page
            echo $nd_options_post_output_h_m;

            $nd_options_strings_h_m  = $nd_options_post_h_m->post_content;
            $nd_options_pieces_h_m = explode('css=".vc_custom_', $nd_options_strings_h_m);
            
            //get how many styles inserted
            $nd_options_qnt_styles_h_m = count($nd_options_pieces_h_m)-1;


            //echo style
            echo '<style>';
            for ($nd_options_i_h_m = 1; $nd_options_i_h_m <= $nd_options_qnt_styles_h_m; $nd_options_i_h_m++) {
                $nd_options_tests_h_m = explode(';}"][', $nd_options_pieces_h_m[$nd_options_i_h_m]);
                echo '.vc_custom_'.$nd_options_tests_h_m[0].';}';
            }
            echo '</style>';

        }

        ?>

    </div>
    <!--end container-->

</div>
<!--END footer-->

